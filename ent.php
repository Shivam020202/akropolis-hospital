<?php
$dept_key = 'ent';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['ent'] ?? [];
$page_title = 'Best ENT Hospital Gurugram | Akropolis';
$page_description = 'Expert ENT care at Akropolis Hospital, Gurugram. Sinusitis, hearing loss, tonsillitis, ear infections treatment by certified otolaryngologists.';
$canonical_url = '/ent';
$schema_blocks = [
    schemaMedicalPage('ENT', '/ent', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'ENT', 'url' => '/ent']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
