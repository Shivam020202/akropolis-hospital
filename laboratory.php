<?php
$dept_key = 'laboratory';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['laboratory'] ?? [];
$page_title = 'Best Diagnostic Laboratory Gurugram | Lab Tests | Akropolis';
$page_description = 'NABL accredited diagnostic laboratory at Akropolis Hospital, Gurugram. Blood tests, cardiac markers, hormone tests, pathology. Fast results 24x7.';
$canonical_url = '/laboratory';
$schema_blocks = [
    schemaMedicalPage('Laboratory', '/laboratory', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Laboratory', 'url' => '/laboratory']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
