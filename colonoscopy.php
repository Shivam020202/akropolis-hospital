<?php
$dept_key = 'colonoscopy';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['colonoscopy'] ?? [];
$page_title = 'Best Colonoscopy Centre Gurugram | Akropolis';
$page_description = 'Expert colonoscopy and colon cancer screening at Akropolis Hospital, Gurugram. Painless procedure under sedation by experienced gastroenterologists.';
$canonical_url = '/colonoscopy';
$schema_blocks = [
    schemaMedicalPage('Colonoscopy', '/colonoscopy', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Colonoscopy', 'url' => '/colonoscopy']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
