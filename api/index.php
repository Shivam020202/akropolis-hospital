<?php
$root = dirname(__DIR__);
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');

// Serve static files directly if they exist on disk.
$path = $root . $uri;
if ($uri !== '/' && file_exists($path) && !is_dir($path)) {
    if (str_contains($uri, '.php')) {
        include $path;
        return;
    }
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $mime = [
        'css' => 'text/css; charset=utf-8',
        'js' => 'application/javascript; charset=utf-8',
        'json' => 'application/json; charset=utf-8',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'gif' => 'image/gif',
        'ico' => 'image/x-icon',
        'txt' => 'text/plain; charset=utf-8',
        'xml' => 'application/xml; charset=utf-8',
        'pdf' => 'application/pdf',
    ];
    header('Content-Type: ' . ($mime[$ext] ?? 'application/octet-stream'));
    readfile($path);
    return;
}

// Map common clean URLs to their PHP entry files.
$routes = [
    '/' => $root . '/index.php',
    '/about' => $root . '/about.php',
    '/contact' => $root . '/contact.php',
    '/departments' => $root . '/departments.php',
    '/doctors' => $root . '/doctors.php',
    '/doctor-profile' => $root . '/doctor-profile.php',
    '/thank-you' => $root . '/thank-you.php',
    '/ct-scan' => $root . '/ct-scan.php',
    '/bronchoscopy' => $root . '/bronchoscopy.php',
    '/colonoscopy' => $root . '/colonoscopy.php',
    '/endoscopy' => $root . '/endoscopy.php',
    '/dialysis' => $root . '/dialysis.php',
    '/laboratory' => $root . '/laboratory.php',
    '/emergency' => $root . '/emergency.php',
    '/health-nutrition' => $root . '/health-nutrition.php',
    '/orthopedics' => $root . '/orthopedics.php',
    '/cardiology' => $root . '/cardiology.php',
    '/neurology' => $root . '/neurology.php',
    '/nephrology' => $root . '/nephrology.php',
    '/oncology' => $root . '/oncology.php',
    '/pediatrics' => $root . '/pediatrics.php',
    '/plastic-surgery' => $root . '/plastic-surgery.php',
    '/obstetrics-gynecology' => $root . '/obstetrics-gynecology.php',
    '/ent' => $root . '/ent.php',
    '/ophthalmology' => $root . '/ophthalmology.php',
    '/gastroenterology' => $root . '/gastroenterology.php',
    '/dermatology' => $root . '/dermatology.php',
    '/haddi-ka-doctor' => $root . '/haddi-ka-doctor.php',
    '/migraine-treatment' => $root . '/migraine-treatment.php',
    '/blog' => $root . '/blog/index.php',
];

$trimmed = rtrim($uri, '/');
if ($trimmed === '') { $trimmed = '/'; }

if (isset($routes[$trimmed])) {
    include $routes[$trimmed];
    return;
}

// Dynamic doctor routes: /doctors/dr-name
if (preg_match('#^/doctors/([a-z0-9\-]+)$#i', $uri, $m)) {
    $file = $root . '/doctors/' . $m[1] . '.php';
    if (file_exists($file)) {
        include $file;
        return;
    }
}

// Dynamic blog routes: /blog/en/some-slug or /blog/hi/some-slug
if (preg_match('#^/blog/(hi|en)/([a-z0-9\-]+)(?:\.php)?/?$#i', $uri, $m)) {
    include $root . '/blog/posts/single-blog.php';
    return;
}

if (preg_match('#^/blog/(hi|en)/?$#i', $uri)) {
    $lang = preg_replace('#^/blog/#i', '', $uri);
    $lang = trim($lang, '/');
    if ($lang === 'hi' || $lang === 'en') {
        include $root . '/blog/' . $lang . '/index.php';
        return;
    }
}

// Fallback to the app router, which handles legacy rewrites.
if (file_exists($root . '/router.php')) {
    include $root . '/router.php';
    return;
}

http_response_code(404);
include $root . '/404.php';
