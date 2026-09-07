<?php
$dept_key = 'ct-scan';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['ct-scan'] ?? [];
$page_title = 'Best CT Scan Centre Gurugram | 24x7 CT Scan | Akropolis';
$page_description = 'Advanced multi-slice CT scan services at Akropolis Hospital, Gurugram. Brain CT, chest CT, abdominal CT, CT angiography. 24x7 emergency imaging.';
$canonical_url = '/ct-scan';
$schema_blocks = [
    schemaMedicalPage('CT Scan', '/ct-scan', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'CT Scan', 'url' => '/ct-scan']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
