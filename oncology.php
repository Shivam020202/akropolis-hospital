<?php
$dept_key = 'oncology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['oncology'] ?? [];
$page_title = 'Best Oncology Hospital Gurugram | Akropolis';
$page_description = 'Advanced cancer diagnosis and treatment at Akropolis Hospital, Gurugram. Chemotherapy, radiation therapy, surgical oncology by expert oncologists.';
$canonical_url = '/oncology';
$schema_blocks = [
    schemaMedicalPage('Oncology', '/oncology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Oncology', 'url' => '/oncology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
