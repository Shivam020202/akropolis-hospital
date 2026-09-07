<?php
$dept_key = 'pediatrics';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['pediatrics'] ?? [];
$page_title = 'Best Pediatrics Hospital Gurugram | Child Care | Akropolis';
$page_description = 'Expert pediatric care at Akropolis Hospital, Gurugram. Newborn care, vaccinations, growth monitoring, and 24x7 pediatric emergency by experienced...';
$canonical_url = '/pediatrics';
$schema_blocks = [
    schemaMedicalPage('Pediatrics', '/pediatrics', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Pediatrics', 'url' => '/pediatrics']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
