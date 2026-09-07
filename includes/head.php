<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="google-site-verification" content="kg93KBDXRUW22RCSQGBlsAUWoVAZ2WXvDfnzhT7rzxE" />
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <link rel="shortcut icon" href="/favicon.svg" />
  <link rel="icon" type="image/x-icon" href="/favicon.svg" />
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

  <!-- Chat Widget -->
<script defer src="https://app.wacrs.com/install-widget/bundle.js?key=06bf39fe-05ac-4d19-b868-0d9529daeeff"></script>

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/css/styles.css">

  <!-- JSON-LD Structured Data -->
  <?php
  if (!function_exists('schemaHospital')) {
      require_once __DIR__ . '/schema.php';
  }
  // Always output base hospital schema
  echo renderSchema(schemaHospital(strtok($_SERVER['REQUEST_URI'] ?? '/', '?')));
  // Output any page-specific schema blocks set before including head.php
  if (!empty($schema_blocks) && is_array($schema_blocks)) {
      foreach ($schema_blocks as $block) {
          echo renderSchema($block);
      }
  }
  ?>
</head>
<body class="min-h-screen bg-white">
  <div id="root">
