<?php

header('Content-Type: application/xml; charset=UTF-8');

$baseUrl = 'https://akropolishospital.com';
$staticSitemap = __DIR__ . '/sitemap-static.xml';
$blogTemplate = __DIR__ . '/blog/posts/blog-template.php';

// Check required files.
if (!is_file($staticSitemap) || !is_file($blogTemplate)) {
    http_response_code(500);
    exit('Sitemap configuration error');
}

// Load the shared blog helper.
require_once $blogTemplate;

if (!function_exists('load_blogs')) {
    http_response_code(500);
    exit('Blog loader not found');
}

// Check whether SimpleXML is available.
if (!function_exists('simplexml_load_file')) {
    http_response_code(500);
    exit('PHP SimpleXML extension is not enabled');
}

// Load the existing sitemap containing all static pages.
$xml = simplexml_load_file($staticSitemap);

if ($xml === false) {
    http_response_code(500);
    exit('Unable to load static sitemap');
}

// Track existing URLs to prevent duplicates.
$existingUrls = [];

foreach ($xml->url as $entry) {
    $loc = (string) ($entry->loc ?? '');

    if ($loc !== '') {
        $existingUrls[$loc] = true;
    }
}

// Add published blog posts in both languages.
foreach (['en', 'hi'] as $lang) {
    $dataFile = __DIR__ . "/blog/{$lang}/posts/blogs.php";
    $blogs = load_blogs($dataFile);

    foreach ($blogs as $blog) {
        $slug = $blog['slug'] ?? '';

        // Validate the blog slug.
        if (
            !is_string($slug) ||
            !preg_match('/^[a-z0-9-]+$/', $slug)
        ) {
            continue;
        }

        $url = $baseUrl . "/blog/{$lang}/{$slug}";

        // Skip URLs already present in the sitemap.
        if (isset($existingUrls[$url])) {
            continue;
        }

        $entry = $xml->addChild('url');
        $entry->addChild('loc', htmlspecialchars(
            $url,
            ENT_XML1 | ENT_COMPAT,
            'UTF-8'
        ));

        // Use the publication date as the last modification date.
        $publishedAt = $blog['published_at'] ?? '';

        if (
            is_string($publishedAt) &&
            preg_match('/^\d{4}-\d{2}-\d{2}$/', $publishedAt)
        ) {
            $date = DateTimeImmutable::createFromFormat(
                '!Y-m-d',
                $publishedAt
            );

            if ($date && $date->format('Y-m-d') === $publishedAt) {
                $entry->addChild('lastmod', $publishedAt);
            }
        }

        $existingUrls[$url] = true;
    }
}

// Output the complete sitemap XML.
echo $xml->asXML();
