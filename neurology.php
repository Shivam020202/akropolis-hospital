<?php
$dept_key = 'neurology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['neurology'] ?? [];
$page_title = 'Best Neurology Hospital Gurugram | Akropolis';
$page_description = 'Expert neurology care at Akropolis Hospital, Gurugram. Stroke management, epilepsy, Parkinson\'s treatment by experienced neurologists. 24x7 emergency...';
$canonical_url = '/neurology';
$schema_blocks = [
    schemaMedicalPage('Neurology', '/neurology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Neurology', 'url' => '/neurology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
