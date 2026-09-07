<?php
$dept_key = 'emergency';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['emergency'] ?? [];
$page_title = 'Emergency Care 24x7 Gurugram | Trauma & ICU | Akropolis';
$page_description = '24x7 emergency and trauma care at Akropolis Hospital, Gurugram. Immediate response for cardiac, neurological, orthopedic, and trauma emergencies.';
$canonical_url = '/emergency';
$schema_blocks = [
    schemaMedicalPage('Emergency', '/emergency', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Emergency', 'url' => '/emergency']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
