<?php
$dept_key = 'cardiology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['cardiology'];
$page_title = 'Best Cardiology Hospital Gurugram | Heart Care | Akropolis';
$page_description = 'Expert cardiology care at Akropolis Hospital, Gurugram. Advanced cardiac procedures, 24×7 emergency, angioplasty, stenting, and preventive heart care...';
$canonical_url = '/cardiology';
$schema_blocks = [
    schemaMedicalPage('Cardiology', '/cardiology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Cardiology', 'url' => '/cardiology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>