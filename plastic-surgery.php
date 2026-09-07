<?php
$dept_key = 'plastic-surgery';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['plastic-surgery'] ?? [];
$page_title = 'Best Plastic Surgery Hospital Gurugram | Akropolis';
$page_description = 'Expert plastic and reconstructive surgery at Akropolis Hospital, Gurugram. Cosmetic, burn care, micro-surgery by certified plastic surgeons.';
$canonical_url = '/plastic-surgery';
$schema_blocks = [
    schemaMedicalPage('Plastic Surgery', '/plastic-surgery', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Plastic Surgery', 'url' => '/plastic-surgery']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
