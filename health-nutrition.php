<?php
$dept_key = 'health-nutrition';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['health-nutrition'] ?? [];
$page_title = 'Health & Nutrition Counseling Gurugram | Akropolis';
$page_description = 'Expert nutritional counseling at Akropolis Hospital, Gurugram. Personalized diet plans, weight management, diabetes nutrition by certified clinical...';
$canonical_url = '/health-nutrition';
$schema_blocks = [
    schemaMedicalPage('Health & Nutrition', '/health-nutrition', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Health & Nutrition', 'url' => '/health-nutrition']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
