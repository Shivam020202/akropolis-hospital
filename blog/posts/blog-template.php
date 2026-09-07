<?php
/**
 * Blog Template Helper (shared rendering logic)
 * ============================================
 * Used by /blog/hi/index.php and /blog/en/index.php to render their
 * respective language listings. Each language folder has its own
 * blogs.php data file.
 */

/**
 * Load and sort blogs from the supplied data file.
 * Returns: array of published blogs, newest first.
 */
function load_blogs(string $dataFile): array
{
    if (!file_exists($dataFile)) {
        return [];
    }
    // The data files declare a $blogs array (no return).
    // Isolate the variable scope to avoid leaking into caller.
    $blogs = null;
    require $dataFile;
    if (!is_array($blogs)) {
        return [];
    }

    $published = array_values(array_filter($blogs, function ($b) {
        return ($b['status'] ?? '') === 'published';
    }));

    usort($published, function ($a, $b) {
        return strcmp($b['published_at'], $a['published_at']);
    });

    return $published;
}

/**
 * Build the URL to a single-blog page for the given language.
 * Convention: /blog/{lang}/{slug}.php
 */
function blog_post_url(string $lang, string $slug): string
{
    return '/blog/' . $lang . '/' . $slug;
}
