<?php
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// ─── Blog routes: must come BEFORE the file-existence check ──────────────
// Because URLs like /blog/hi/some-slug.php don't exist as real files,
// we route them to the dynamic single-blog.php template.
if (preg_match('#^/blog/(hi|en)/([a-z0-9\-]+)\.php$#', $uri, $m)) {
    $_SERVER['SCRIPT_NAME'] = '/blog/posts/single-blog.php';
    require __DIR__ . '/blog/posts/single-blog.php';
    return true;
}
if (preg_match('#^/blog/(hi|en)/([a-z0-9\-]+)/?$#', $uri, $m)) {
    $_SERVER['SCRIPT_NAME'] = '/blog/posts/single-blog.php';
    require __DIR__ . '/blog/posts/single-blog.php';
    return true;
}
if (preg_match('#^/blog/(hi|en)/?$#', $uri, $m)) {
    require __DIR__ . '/blog/' . $m[1] . '/index.php';
    return true;
}
if ($uri === '/blog' || $uri === '/blog/') {
    require __DIR__ . '/blog/index.php';
    return true;
}

// Suppress Apple App Site Association noise
if (
    $uri === '/apple-app-site-association' ||
    $uri === '/.well-known/apple-app-site-association'
) {
    http_response_code(404);
    exit;
}

// Legacy /doctor/ (singular) → redirect to /doctors/
if (preg_match('#^/doctor/(.+)$#', $uri, $m)) {
    header('Location: /doctors/' . $m[1], true, 301);
    exit;
}

// Legacy /services/ paths
$serviceMap = [
    '/services/ct-scan'      => 'ct-scan.php',
    '/services/bronchoscopy' => 'bronchoscopy.php',
    '/services/colonoscopy'  => 'colonoscopy.php',
    '/services/endoscopy'    => 'endoscopy.php',
];
if (isset($serviceMap[rtrim($uri, '/')])) {
    include $serviceMap[rtrim($uri, '/')];
    return;
}

// If it's a directory, check for index.php inside it
if (is_dir(__DIR__ . $uri)) {
    $indexFile = rtrim(__DIR__ . $uri, '/') . '/index.php';
    if (file_exists($indexFile)) {
        include $indexFile;
        return;
    }
}

// Doctor sub-pages: /doctors/dr-slug
if (preg_match('#^/doctors/([a-z0-9\-]+)/?$#', $uri, $m)) {
    $doctorFile = __DIR__ . '/doctors/' . $m[1] . '.php';
    if (file_exists($doctorFile)) {
        include $doctorFile;
        return;
    }
}

// Blog routes (already handled at top of file for built-in server compatibility)
if (preg_match('#^/blog/(hi|en)/([a-z0-9\-]+)\.php$#', $uri)) {
    // already handled above
    return true;
}

// Full clean URL mapping
$clean_urls = [
    // Main pages
    '/about'                    => 'about.php',
    '/contact'                  => 'contact.php',
    '/departments'              => 'departments.php',
    '/department'               => 'departments.php',
    '/doctors'                  => 'doctors.php',
    '/doctor-profile'           => 'doctor-profile.php',
    '/thank-you'                => 'thank-you.php',

    // Departments
    '/orthopedics'              => 'orthopedics.php',
    '/cardiology'               => 'cardiology.php',
    '/neurology'                => 'neurology.php',
    '/nephrology'               => 'nephrology.php',
    '/oncology'                 => 'oncology.php',
    '/pediatrics'               => 'pediatrics.php',
    '/plastic-surgery'          => 'plastic-surgery.php',
    '/obstetrics-gynecology'    => 'obstetrics-gynecology.php',
    '/ent'                      => 'ent.php',
    '/ophthalmology'            => 'ophthalmology.php',
    '/gastroenterology'         => 'gastroenterology.php',
    '/dermatology'              => 'dermatology.php',

    // Diagnostics & Services
    '/dialysis'                 => 'dialysis.php',
    '/ct-scan'                  => 'ct-scan.php',
    '/laboratory'               => 'laboratory.php',
    '/endoscopy'                => 'endoscopy.php',
    '/colonoscopy'              => 'colonoscopy.php',
    '/bronchoscopy'             => 'bronchoscopy.php',
    '/emergency'                => 'emergency.php',
    '/health-nutrition'         => 'health-nutrition.php',

    // Specialties
    '/haddi-ka-doctor'          => 'haddi-ka-doctor.php',
    '/migraine-treatment'       => 'migraine-treatment.php',
];

if (isset($clean_urls[rtrim($uri, '/')])) {
    include $clean_urls[rtrim($uri, '/')];
    return;
}

// Legacy specialty directory redirects
if ($uri === '/orthopedic-hospital/haryana' || $uri === '/orthopedic-hospital/haryana/') {
    include 'orthopedics.php';
    return;
}
if ($uri === '/haddi-ka-doctor/haryana' || $uri === '/haddi-ka-doctor/haryana/') {
    include 'haddi-ka-doctor.php';
    return;
}

// Home
if ($uri === '/' || $uri === '/index.php') {
    include 'index.php';
    return;
}

return false;
?>
