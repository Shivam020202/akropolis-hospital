<?php
$dept_key = 'bronchoscopy';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['bronchoscopy'] ?? [];
$page_title = 'Best Bronchoscopy Centre Gurugram | Akropolis';
$page_description = 'Advanced bronchoscopy services at Akropolis Hospital, Gurugram. Lung cancer diagnosis, airway obstruction, biopsy by expert pulmonologists.';
$canonical_url = '/bronchoscopy';
$schema_blocks = [
    schemaMedicalPage('Bronchoscopy', '/bronchoscopy', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Bronchoscopy', 'url' => '/bronchoscopy']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
