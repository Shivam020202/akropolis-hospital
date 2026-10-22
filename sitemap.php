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

foreach (['en', 'hi'] as $lang) {
    $dataFile = __DIR__ . "/blog/{$lang}/posts/blogs.php";
    $blogs = load_blogs($dataFile);

    foreach ($blogs as $blog) {
        $slug = $blog['slug'] ?? '';

        if (!is_string($slug) || !preg_match('/^[a-z0-9-]+$/', $slug)) {
            continue;
        }

        $url = $baseUrl . "/blog/{$lang}/{$slug}";
        $exists = false;

        foreach ($xml->url as $entry) {
            if ((string) $entry->loc === $url) {
                $exists = true;
                break;
            }
        }

        if (!$exists) {
            $entry = $xml->addChild('url');
            $entry->addChild('loc', $url);
            $entry->addChild('lastmod', date('Y-m-d'));
        }
    }
}

echo $xml->asXML();
