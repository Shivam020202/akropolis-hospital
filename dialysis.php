<?php
$dept_key = 'dialysis';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['dialysis'] ?? [];
$page_title = 'Best Dialysis Center Gurugram | Kidney Dialysis | Akropolis';
$page_description = 'Advanced dialysis services at Akropolis Hospital, Gurugram. Hemodialysis, peritoneal dialysis, emergency renal care. 24x7 dialysis facility with expert...';
$canonical_url = '/dialysis';
$schema_blocks = [
    schemaMedicalPage('Dialysis', '/dialysis', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Dialysis', 'url' => '/dialysis']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
