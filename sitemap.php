<?php

header('Content-Type: application/xml; charset=UTF-8');

$baseUrl = 'https://akropolishospital.com';
$staticSitemap = __DIR__ . '/sitemap-static.xml';
$blogTemplate = __DIR__ . '/blog/posts/blog-template.php';

if (!is_file($staticSitemap) || !is_file($blogTemplate)) {
    http_response_code(500);
    exit('Sitemap configuration error');
}

require_once $blogTemplate;

if (!function_exists('load_blogs')) {
    http_response_code(500);
    exit('Blog loader not found');
}

if (!function_exists('simplexml_load_file')) {
    http_response_code(500);
    exit('PHP SimpleXML extension is not enabled');
}

$xml = simplexml_load_file($staticSitemap);

if ($xml === false) {
    http_response_code(500);
    exit('Unable to load static sitemap');
}

// Process published blogs in English and Hindi.
foreach (['en', 'hi'] as $lang) {
    $dataFile = __DIR__ . "/blog/{$lang}/posts/blogs.php";
    $blogs = load_blogs($dataFile);

    foreach ($blogs as $blog) {
        $slug = $blog['slug'] ?? '';

        if (
            !is_string($slug) ||
            !preg_match('/^[a-z0-9-]+$/', $slug)
        ) {
            continue;
        }

        $url = $baseUrl . "/blog/{$lang}/{$slug}";

        // Prefer updated_at; otherwise use published_at.
        $lastmod = $blog['updated_at']
            ?? $blog['published_at']
            ?? '';

        // Validate the date before adding it to the sitemap.
        if (
            !is_string($lastmod) ||
            !preg_match('/^\d{4}-\d{2}-\d{2}$/', $lastmod)
        ) {
            $lastmod = '';
        } else {
            $date = DateTimeImmutable::createFromFormat(
                '!Y-m-d',
                $lastmod
            );

            if (!$date || $date->format('Y-m-d') !== $lastmod) {
                $lastmod = '';
            }
        }

        // Find an existing sitemap entry for this blog.
        $existingEntry = null;

        foreach ($xml->url as $entry) {
            if ((string) $entry->loc === $url) {
                $existingEntry = $entry;
                break;
            }
        }

        // Create an entry if this is a new blog URL.
        if ($existingEntry === null) {
            $existingEntry = $xml->addChild('url');
            $existingEntry->addChild('loc', $url);
        }

        // Update lastmod, or remove it if no valid date exists.
        if ($lastmod !== '') {
            if (isset($existingEntry->lastmod)) {
                $existingEntry->lastmod = $lastmod;
            } else {
                $existingEntry->addChild('lastmod', $lastmod);
            }
        } elseif (isset($existingEntry->lastmod)) {
            unset($existingEntry->lastmod);
        }
    }
}

echo $xml->asXML();