<?php
$dept_key = 'gastroenterology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['gastroenterology'] ?? [];
$page_title = 'Best Gastroenterology Hospital Gurugram | Akropolis';
$page_description = 'Expert gastroenterology and endoscopy services at Akropolis Hospital, Gurugram. GERD, IBS, liver care, colonoscopy by certified gastroenterologists.';
$canonical_url = '/gastroenterology';
$schema_blocks = [
    schemaMedicalPage('Gastroenterology', '/gastroenterology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Gastroenterology', 'url' => '/gastroenterology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
