<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-763ZNVV4WC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-763ZNVV4WC');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6HPDGP6');</script>
<!-- End Google Tag Manager -->
 
  <meta charset="UTF-8" />
  <meta name="google-site-verification" content="kg93KBDXRUW22RCSQGBlsAUWoVAZ2WXvDfnzhT7rzxE" />
  <link rel="icon" type="image/png" href="/assets/images/homepage/akropolis-favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="<?php echo $page_robots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'; ?>" />
  <meta name="author" content="<?php echo $page_author ?? 'Akropolis Super Speciality Hospital'; ?>" />
  <meta name="publisher" content="<?php echo $page_publisher ?? 'Akropolis Super Speciality Hospital'; ?>" />
  <meta name="copyright" content="&copy; <?php echo date('Y'); ?> Akropolis Super Speciality Hospital. All rights reserved." />
  <meta name="generator" content="Akropolis Hospital CMS" />
  <title><?php echo $page_title ?? 'Akropolis Super Speciality Hospital | NABH Accredited Healthcare'; ?></title>
  <meta name="description" content="<?php echo $page_description ?? 'Akropolis Super Speciality Hospital - NABH accredited healthcare with 24/7 emergency services, expert doctors, and advanced medical facilities in Gurugram, Haryana.'; ?>" />
  <?php 
    $final_canonical = isset($canonical_url) ? $canonical_url : strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    $final_canonical = preg_replace('/\.php$/', '', $final_canonical);
  ?>
  <link rel="canonical" href="https://akropolishospital.com<?php echo $final_canonical; ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#328CCB',
            secondary: '#D66C43',
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/css/styles.css">

<!-- JSON-LD Structured Data -->
<?php
if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/schema.php';
}

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$isHomepage = ($requestPath === '/' || $requestPath === '/index.php');

if ($isHomepage) {
    echo renderSchema(schemaHospital('/'));
}

if (!empty($schema_blocks) && is_array($schema_blocks)) {
    foreach ($schema_blocks as $block) {
        echo renderSchema($block);
    }
}
?>

</head>
<body class="min-h-screen bg-white">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6HPDGP6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="root">
