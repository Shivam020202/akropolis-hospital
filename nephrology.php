<?php
$dept_key = 'nephrology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['nephrology'] ?? [];
$page_title = 'Best Nephrology & Kidney Hospital Gurugram | Akropolis';
$page_description = 'Expert kidney care and dialysis services at Akropolis Hospital, Gurugram. CKD management, hemodialysis, peritoneal dialysis by certified nephrologists.';
$canonical_url = '/nephrology';
$schema_blocks = [
    schemaMedicalPage('Nephrology', '/nephrology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Nephrology', 'url' => '/nephrology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
