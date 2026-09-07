<?php
$dept_key = 'obstetrics-gynecology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['obstetrics-gynecology'] ?? [];
$page_title = 'Best Gynecology & Maternity Hospital Gurugram | Akropolis';
$page_description = 'Expert women\'s health and maternity care at Akropolis Hospital, Gurugram. Prenatal care, high-risk pregnancy, GYN surgery by experienced OB-GYN...';
$canonical_url = '/obstetrics-gynecology';
$schema_blocks = [
    schemaMedicalPage('Obstetrics & Gynecology', '/obstetrics-gynecology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Obstetrics & Gynecology', 'url' => '/obstetrics-gynecology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
