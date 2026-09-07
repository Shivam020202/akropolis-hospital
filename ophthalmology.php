<?php
$dept_key = 'ophthalmology';
require_once 'includes/data.php';
require_once 'includes/schema.php';
$pageDeptData = $deptConfig['ophthalmology'] ?? [];
$page_title = 'Best Eye Hospital Gurugram | Ophthalmology | Akropolis';
$page_description = 'Expert eye care at Akropolis Hospital, Gurugram. Cataract surgery, LASIK, glaucoma management, retina care by certified ophthalmologists.';
$canonical_url = '/ophthalmology';
$schema_blocks = [
    schemaMedicalPage('Ophthalmology', '/ophthalmology', $page_description),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'Departments', 'url' => '/departments'], ['name' => 'Ophthalmology', 'url' => '/ophthalmology']]),
    !empty($pageDeptData['faqs']) ? schemaFAQ($pageDeptData['faqs']) : '',
];
$schema_blocks = array_filter($schema_blocks);
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';
include 'includes/footer.php';
include 'includes/scripts.php';
?>
