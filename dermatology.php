<?php
$dept_key = 'dermatology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['dermatology'] ?? [];
$page_title = 'Best Dermatology Hospital Gurugram | Akropolis';
$page_description = 'Expert dermatology and aesthetic care at Akropolis Hospital, Gurugram. Acne, eczema, psoriasis, hair loss treatment by board-certified dermatologists.';
$canonical_url = '/dermatology';
$schema_blocks = [
    schemaMedicalPage('Dermatology', '/dermatology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Dermatology', 'url' => '/dermatology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
