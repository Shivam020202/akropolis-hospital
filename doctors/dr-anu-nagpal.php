<?php

$doctorId = 'dr-anu-nagpal';

require_once __DIR__ . '/../includes/data.php';

if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/../includes/schema.php';
}

/* Find doctor */
$doctor = null;

foreach ($doctors as $d) {
    if (($d['id'] ?? '') === $doctorId) {
        $doctor = $d;
        break;
    }
}

if (!$doctor) {
    header('HTTP/1.0 404 Not Found');

    $page_title = 'Doctor Not Found | Akropolis';
    $page_description = 'The requested doctor profile could not be found.';
    $canonical_url = '/doctors/' . $doctorId;

    include __DIR__ . '/../includes/head.php';
    include __DIR__ . '/../includes/header-v2.php';
    ?>

    <main class="min-h-screen bg-white flex items-center justify-center px-4">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">Doctor Not Found</h1>
            <a href="/doctors"
               class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#287caf] text-white px-6 py-3 rounded-lg font-semibold transition">
                <?php echo getIcon('ArrowLeft', 'w-5 h-5'); ?>
                <span>Back to Doctors</span>
            </a>
        </div>
    </main>

    <?php
    include __DIR__ . '/../includes/footer.php';
    include __DIR__ . '/../includes/scripts.php';
    exit;
}

/* SEO */
$page_title = 'Dr. Anu Nagpal, Obstetrician & Gynaecologist | Akropolis';

$page_description =
    'Meet Dr. Anu Nagpal, Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital in Gurugram. She has 11 years of overall experience, including 7 years as a specialist, and provides obstetric and gynaecological care.';

$canonical_url = '/doctors/dr-anu-nagpal';

/* Physician + Breadcrumb schema */
$schema_blocks = [
    schemaPhysician([
        'name'           => $doctor['name'] ?? 'Dr. Anu Nagpal',
        'id'             => $doctor['id'] ?? 'dr-anu-nagpal',
        'specialty'      => $doctor['specialization'] ?? 'Obstetrician & Gynaecologist',
        'image'          => $doctor['image'] ?? '',
        'bio'            => $doctor['bio'] ?? ($doctor['description'] ?? ''),
        'qualifications' => $doctor['qualifications'] ?? [],
    ]),

    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Doctors', 'url' => '/doctors'],
        ['name' => 'Dr. Anu Nagpal', 'url' => '/doctors/dr-anu-nagpal'],
    ]),
];

include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header-v2.php';
?>

<style>
/* =========================================================
   DR. ANU NAGPAL PAGE
   Page content only. Sitewide navigation/footer untouched.
   ========================================================= */

.anu-page {
    --anu-blue: #328CCB;
    --anu-blue-dark: #123B70;
    --anu-orange: #D66C43;
    --anu-text: #15233A;
    --anu-muted: #667085;
    --anu-border: #E6EDF4;
    --anu-soft-blue: #EFF8FD;
    --anu-soft-green: #ECF9F0;
    --anu-soft-pink: #FFF0F5;
    --anu-soft-orange: #FFF5F1;
    background: #fff;
    color: var(--anu-text);
}

.anu-page *,
.anu-page *::before,
.anu-page *::after {
    box-sizing: border-box;
}

.anu-container {
    width: min(1180px, calc(100% - 64px));
    margin: 0 auto;
}

.anu-page h1,
.anu-page h2,
.anu-page h3,
.anu-page p {
    margin-top: 0;
}

.anu-page h2 {
    color: var(--anu-blue-dark);
    font-weight: 800;
    letter-spacing: -0.025em;
}

.anu-title {
    font-size: clamp(1.55rem, 2.25vw, 2.05rem);
    line-height: 1.18;
    margin: 0 0 7px;
}

.anu-title .accent {
    color: var(--anu-blue);
}

.anu-intro {
    color: var(--anu-muted);
    font-size: 0.86rem;
    line-height: 1.55;
    margin: 0;
    max-width: 720px;
}

.anu-section {
    padding: 48px 0;
    background: #fff;
}

.anu-section.blue {
    background: #F4FAFE;
}

.anu-section.peach {
    background: #FFF7F3;
    border-top: 1px solid #F8E8E1;
    border-bottom: 1px solid #F8E8E1;
}

.anu-section-head {
    margin-bottom: 24px;
}

.anu-section-head.center {
    text-align: center;
}

.anu-section-head.center .anu-intro {
    margin-left: auto;
    margin-right: auto;
}

.anu-card {
    background: #fff;
    border: 1px solid var(--anu-border);
    border-radius: 13px;
    box-shadow: 0 5px 18px rgba(17,52,86,.055);
}

.anu-icon-box {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #EFF8FD;
    color: var(--anu-blue);
}

.anu-icon-box.orange {
    background: rgba(214,108,67,.10);
    color: var(--anu-orange);
}

.anu-icon-box.green {
    background: #ECF9F0;
    color: #159447;
}

.anu-icon-box.pink {
    background: #FFF0F5;
    color: #D9487C;
}

.anu-icon-box svg {
    width: 20px;
    height: 20px;
}

/* Breadcrumb */
.anu-breadcrumb {
    background: #fff;
    border-bottom: 1px solid #EEF2F6;
}

.anu-breadcrumb-inner {
    min-height: 40px;
    display: flex;
    align-items: center;
    gap: 7px;
    color: #718096;
    font-size: 0.68rem;
}

.anu-breadcrumb a {
    color: #718096;
    text-decoration: none;
}

.anu-breadcrumb a:hover {
    color: var(--anu-blue);
}

.anu-breadcrumb .current {
    color: var(--anu-blue-dark);
    font-weight: 700;
}

/* Hero */
.anu-hero {
    background: linear-gradient(90deg, #F5FBFE 0%, #F8FCFF 52%, #EEF8FE 100%);
    padding: 38px 0 40px;
}

.anu-hero-grid {
    display: grid;
    grid-template-columns: 150px minmax(0, 1fr) 292px;
    gap: 22px;
    align-items: center;
}

.anu-doctor-photo {
    width: 150px;
    height: 150px;
    border-radius: 15px;
    overflow: hidden;
    background: #EDF4F8;
    box-shadow: 0 6px 20px rgba(18,59,112,.10);
}

.anu-doctor-photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.anu-verified {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 9px;
    border-radius: 999px;
    background: #EAF8EF;
    color: #159447;
    font-size: 0.63rem;
    font-weight: 700;
    margin-bottom: 7px;
}

.anu-verified svg {
    width: 13px;
    height: 13px;
}

.anu-hero h1 {
    color: var(--anu-blue-dark);
    font-size: clamp(2rem, 3vw, 2.55rem);
    line-height: 1.05;
    font-weight: 850;
    letter-spacing: -0.04em;
    margin: 0 0 5px;
}

.anu-speciality {
    color: var(--anu-blue);
    font-size: 0.96rem;
    line-height: 1.25;
    font-weight: 800;
    margin-bottom: 5px;
}

.anu-qualification {
    color: #526071;
    font-size: 0.75rem;
    margin-bottom: 13px;
}

.anu-stat-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.anu-stat {
    min-height: 46px;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 10px;
    background: #fff;
    border: 1px solid var(--anu-border);
    border-radius: 9px;
}

.anu-stat .anu-icon-box {
    width: 32px;
    height: 32px;
    min-width: 32px;
    border-radius: 8px;
}

.anu-stat .anu-icon-box svg {
    width: 16px;
    height: 16px;
}

.anu-stat strong {
    display: block;
    color: var(--anu-blue-dark);
    font-size: 0.67rem;
    line-height: 1.2;
}

.anu-stat small {
    display: block;
    color: #667085;
    font-size: 0.58rem;
    line-height: 1.25;
    margin-top: 2px;
}

.anu-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 9px;
    margin-top: 13px;
}

.anu-btn {
    min-height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    padding: 0 14px;
    border-radius: 7px;
    text-decoration: none;
    font-size: 0.69rem;
    font-weight: 800;
    transition: .2s ease;
}

.anu-btn svg {
    width: 15px;
    height: 15px;
}

.anu-btn-primary {
    background: var(--anu-orange);
    color: #fff;
    box-shadow: 0 5px 13px rgba(214,108,67,.18);
}

.anu-btn-primary:hover {
    background: #C85E38;
    color: #fff;
}

.anu-btn-secondary {
    background: #fff;
    color: var(--anu-blue);
    border: 1px solid #9DD0F1;
}

.anu-btn-secondary:hover {
    background: #F5FBFF;
    color: var(--anu-blue-dark);
}

.anu-hero-side {
    background: rgba(255,255,255,.96);
    border: 1px solid #E6EDF4;
    border-radius: 13px;
    padding: 15px;
    box-shadow: 0 7px 22px rgba(17,52,86,.06);
}

.anu-side-item {
    display: flex;
    align-items: flex-start;
    gap: 9px;
}

.anu-side-item + .anu-side-item {
    border-top: 1px solid #EEF2F6;
    margin-top: 12px;
    padding-top: 12px;
}

.anu-side-icon {
    width: 31px;
    height: 31px;
    min-width: 31px;
    border-radius: 8px;
    background: #EFF8FD;
    color: var(--anu-blue);
    display: flex;
    align-items: center;
    justify-content: center;
}

.anu-side-icon svg {
    width: 16px;
    height: 16px;
}

.anu-side-item strong {
    display: block;
    color: var(--anu-text);
    font-size: 0.68rem;
    line-height: 1.2;
    margin-bottom: 2px;
}

.anu-side-item span {
    display: block;
    color: #667085;
    font-size: 0.61rem;
    line-height: 1.4;
}

/* About */
.anu-about-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.3fr) minmax(300px, .7fr);
    gap: 46px;
    align-items: center;
}

.anu-about-copy p {
    color: #4B5565;
    font-size: 0.78rem;
    line-height: 1.65;
    margin: 0 0 12px;
}

.anu-about-copy p:last-child {
    margin-bottom: 0;
}

.anu-about-image {
    height: 245px;
    border-radius: 14px;
    overflow: hidden;
    background: #EDF5F9;
    box-shadow: 0 6px 20px rgba(17,52,86,.07);
}

.anu-about-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Education */
.anu-three-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.anu-education-card {
    min-height: 122px;
    padding: 20px;
}

.anu-education-top {
    display: flex;
    gap: 13px;
    align-items: flex-start;
}

.anu-education-card h3,
.anu-care-card h3,
.anu-resource-card h3,
.anu-reason-card h3 {
    color: var(--anu-text);
    font-weight: 800;
}

.anu-education-card h3 {
    font-size: 0.78rem;
    line-height: 1.3;
    margin: 2px 0 6px;
}

.anu-education-card p {
    color: #667085;
    font-size: 0.63rem;
    line-height: 1.45;
    margin: 0;
}

/* Areas */
.anu-five-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 13px;
}

.anu-care-card {
    min-height: 145px;
    padding: 17px 12px;
    text-align: center;
}

.anu-care-card .anu-icon-box {
    margin: 0 auto 10px;
}

.anu-care-card h3 {
    font-size: 0.72rem;
    line-height: 1.25;
    margin: 0 0 6px;
}

.anu-care-card p {
    color: #667085;
    font-size: 0.60rem;
    line-height: 1.45;
    margin: 0;
}

/* Department connection */
.anu-dept-card {
    padding: 26px 30px;
    border-radius: 15px;
    background: linear-gradient(105deg, #F0FAFF 0%, #F8FCFF 100%);
    border: 1px solid #D7EDF9;
    position: relative;
    overflow: hidden;
}

.anu-dept-card::after {
    content: '';
    position: absolute;
    width: 150px;
    height: 150px;
    right: -45px;
    top: -45px;
    border: 2px solid rgba(50,140,203,.10);
    border-radius: 50%;
}

.anu-dept-card h2 {
    font-size: 1.15rem;
    margin: 0 0 6px;
}

.anu-dept-card p {
    color: #5E6B7A;
    max-width: 760px;
    font-size: 0.72rem;
    line-height: 1.55;
    margin: 0 0 14px;
}

.anu-chip-row {
    display: flex;
    flex-wrap: wrap;
    gap: 7px;
}

.anu-chip {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #fff;
    border: 1px solid #DDEAF2;
    border-radius: 999px;
    padding: 6px 9px;
    color: #344054;
    font-size: 0.60rem;
    font-weight: 700;
}

.anu-chip svg {
    width: 12px;
    height: 12px;
    color: var(--anu-blue);
}

/* Consultation reasons */
.anu-four-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 13px;
}

.anu-reason-card {
    min-height: 138px;
    padding: 17px;
}

.anu-reason-card h3 {
    font-size: 0.72rem;
    line-height: 1.25;
    margin: 10px 0 5px;
}

.anu-reason-card p {
    color: #667085;
    font-size: 0.60rem;
    line-height: 1.45;
    margin: 0;
}

/* Hospital */
.anu-hospital-card {
    display: grid;
    grid-template-columns: 1fr 1.08fr;
    overflow: hidden;
    border-radius: 15px;
    background: #fff;
    border: 1px solid var(--anu-border);
    box-shadow: 0 6px 20px rgba(17,52,86,.06);
}

.anu-hospital-image {
    min-height: 270px;
    background: #EDF7FB;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    overflow: hidden;
}

.anu-hospital-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.anu-hospital-content {
    padding: 27px 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.anu-hospital-content h2 {
    font-size: 1.22rem;
    line-height: 1.2;
    margin: 0 0 8px;
}

.anu-hospital-content h2 .accent {
    color: var(--anu-blue);
}

.anu-hospital-content p {
    color: #667085;
    font-size: 0.72rem;
    line-height: 1.55;
    margin: 0;
}

.anu-address {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin: 13px 0;
    padding: 10px 11px;
    border-radius: 9px;
    background: #FFF5F1;
    border: 1px solid #F6D8CC;
    color: #4B5565;
    font-size: 0.65rem;
    line-height: 1.45;
}

.anu-address svg {
    width: 17px;
    height: 17px;
    min-width: 17px;
    color: var(--anu-orange);
}

.anu-hospital-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

/* Resources */
.anu-resource-card {
    display: block;
    min-height: 130px;
    padding: 18px;
    text-decoration: none !important;
}

.anu-resource-card h3 {
    font-size: 0.72rem;
    margin: 10px 0 5px;
}

.anu-resource-card p {
    color: #667085;
    font-size: 0.60rem;
    line-height: 1.45;
    margin: 0;
}

/* FAQ */
.anu-faq {
    width: min(820px, 100%);
    margin: 0 auto;
}

.anu-faq-item {
    background: #fff;
    border: 1px solid var(--anu-border);
    border-radius: 8px;
    margin-bottom: 8px;
    overflow: hidden;
}

.anu-faq-item summary {
    cursor: pointer;
    list-style: none;
    min-height: 42px;
    padding: 11px 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    color: var(--anu-text);
    font-size: 0.66rem;
    font-weight: 750;
}

.anu-faq-item summary::-webkit-details-marker {
    display: none;
}

.anu-faq-item summary::after {
    content: '+';
    color: var(--anu-blue);
    font-size: 1rem;
    font-weight: 500;
}

.anu-faq-item[open] summary::after {
    content: '−';
}

.anu-faq-answer {
    padding: 0 14px 13px;
    color: #667085;
    font-size: 0.62rem;
    line-height: 1.55;
}

/* Consultation */
.anu-consult-grid {
    display: grid;
    grid-template-columns: 90px minmax(0, 1fr);
    gap: 22px;
    align-items: center;
}

.anu-calendar-icon {
    width: 72px;
    height: 72px;
    border-radius: 16px;
    background: #fff;
    border: 1px solid #F0DCD4;
    color: var(--anu-orange);
    display: flex;
    align-items: center;
    justify-content: center;
}

.anu-calendar-icon svg {
    width: 34px;
    height: 34px;
}

.anu-consultation-title {
    text-align: center;
    color: var(--anu-blue-dark);
    font-size: 1.35rem;
    line-height: 1.2;
    margin: 0 0 5px;
}

.anu-consult-intro {
    text-align: center;
    color: #667085;
    font-size: 0.64rem;
    margin: 0 0 15px;
}

.anu-form {
    background: #fff;
    border: 1px solid #F0E2DD;
    border-radius: 11px;
    padding: 16px;
    box-shadow: 0 5px 18px rgba(80,50,40,.045);
}

.anu-form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.anu-form label {
    display: block;
    color: #344054;
    font-size: 0.60rem;
    font-weight: 750;
    margin-bottom: 4px;
}

.anu-form input,
.anu-form select,
.anu-form textarea {
    width: 100%;
    border: 1px solid #DDE3EA;
    border-radius: 7px;
    padding: 8px 9px;
    color: #344054;
    font-size: 0.63rem;
    outline: none;
    background: #fff;
}

.anu-form input:focus,
.anu-form select:focus,
.anu-form textarea:focus {
    border-color: var(--anu-blue);
    box-shadow: 0 0 0 3px rgba(50,140,203,.09);
}

.anu-form textarea {
    min-height: 65px;
    resize: vertical;
}

.anu-form-full {
    grid-column: 1 / -1;
}

.anu-form-submit {
    width: 100%;
    border: 0;
    margin-top: 10px;
    background: var(--anu-orange);
    color: #fff;
    border-radius: 7px;
    min-height: 36px;
    padding: 8px 12px;
    font-size: 0.65rem;
    font-weight: 800;
    cursor: pointer;
}

.anu-form-note {
    text-align: center;
    color: #8A94A3;
    font-size: 0.54rem;
    margin: 6px 0 0;
}

/* Explore */
.anu-explore-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 13px;
}

.anu-explore-card {
    min-height: 72px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 13px 16px;
    text-decoration: none !important;
}

.anu-explore-left {
    display: flex;
    align-items: center;
    gap: 10px;
}

.anu-explore-card h3 {
    color: var(--anu-blue-dark);
    font-size: 0.68rem;
    line-height: 1.25;
    margin: 0 0 3px;
    font-weight: 800;
}

.anu-explore-card p {
    color: #667085;
    font-size: 0.57rem;
    margin: 0;
}

.anu-arrow {
    color: var(--anu-blue);
}

/* Desktop target proportions */
@media (min-width: 1100px) {
    .anu-section {
        padding: 50px 0;
    }

    .anu-container {
        width: min(1180px, calc(100% - 80px));
    }
}

/* Tablet */
@media (max-width: 1024px) {
    .anu-hero-grid {
        grid-template-columns: 135px minmax(0, 1fr);
    }

    .anu-hero-side {
        grid-column: 1 / -1;
    }

    .anu-five-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .anu-four-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Mobile */
@media (max-width: 768px) {
    .anu-container {
        width: min(100% - 28px, 680px);
    }

    .anu-section {
        padding: 38px 0;
    }

    .anu-hero {
        padding: 28px 0 32px;
    }

    .anu-hero-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .anu-doctor-photo {
        margin: 0 auto;
    }

    .anu-stat-row,
    .anu-actions {
        justify-content: center;
    }

    .anu-about-grid,
    .anu-hospital-card {
        grid-template-columns: 1fr;
    }

    .anu-about-image {
        height: 220px;
    }

    .anu-three-grid,
    .anu-five-grid,
    .anu-four-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .anu-consult-grid {
        grid-template-columns: 1fr;
    }

    .anu-calendar-icon {
        margin: 0 auto;
    }

    .anu-explore-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 520px) {
    .anu-three-grid,
    .anu-five-grid,
    .anu-four-grid,
    .anu-form-grid {
        grid-template-columns: 1fr;
    }

    .anu-form-full {
        grid-column: auto;
    }

    .anu-hero h1 {
        font-size: 1.85rem;
    }

    .anu-doctor-photo {
        width: 140px;
        height: 140px;
    }
}
</style>

<main class="anu-page">

    <!-- Breadcrumb -->
    <div class="anu-breadcrumb">
        <div class="anu-container anu-breadcrumb-inner">
            <?php echo getIcon('Home', 'w-3 h-3'); ?>
            <a href="/">Home</a>
            <?php echo getIcon('ChevronRight', 'w-3 h-3'); ?>
            <a href="/doctors">Doctors</a>
            <?php echo getIcon('ChevronRight', 'w-3 h-3'); ?>
            <span class="current">Dr. Anu Nagpal</span>
        </div>
    </div>

    <!-- Hero -->
    <section class="anu-hero">
        <div class="anu-container">
            <div class="anu-hero-grid">

                <div class="anu-doctor-photo">
                    <img
                        src="<?php echo htmlspecialchars($doctor['image'] ?? ''); ?>"
                        alt="Dr. Anu Nagpal, Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital"
                        loading="eager"
                    >
                </div>

                <div>
                    <?php if (!empty($doctor['registrationVerified'])): ?>
                        <div class="anu-verified">
                            <?php echo getIcon('Shield', 'w-3.5 h-3.5'); ?>
                            <span>Medical Registration Verified</span>
                        </div>
                    <?php endif; ?>

                    <h1>Dr. Anu Nagpal</h1>

                    <div class="anu-speciality">
                        Obstetrician &amp; Gynaecologist
                    </div>

                    <div class="anu-qualification">
                        MBBS, MS - Obstetrics &amp; Gynaecology
                    </div>

                    <div class="anu-stat-row">

                        <div class="anu-stat">
                            <div class="anu-icon-box">
                                <?php echo getIcon('Award', 'w-4 h-4'); ?>
                            </div>
                            <div>
                                <strong>11+ Years</strong>
                                <small>Overall Experience</small>
                            </div>
                        </div>

                        <div class="anu-stat">
                            <div class="anu-icon-box">
                                <?php echo getIcon('User', 'w-4 h-4'); ?>
                            </div>
                            <div>
                                <strong>7 Years</strong>
                                <small>As Specialist</small>
                            </div>
                        </div>

                    </div>

                    <div class="anu-actions">
                        <a href="/contact" class="anu-btn anu-btn-primary">
                            <?php echo getIcon('Calendar', 'w-4 h-4'); ?>
                            <span>Book Appointment</span>
                        </a>

                        <a href="#opd-timings" class="anu-btn anu-btn-secondary">
                            <?php echo getIcon('Clock', 'w-4 h-4'); ?>
                            <span>View OPD Timings</span>
                        </a>
                    </div>
                </div>

                <div class="anu-hero-side">

                    <div class="anu-side-item" id="opd-timings">
                        <div class="anu-side-icon">
                            <?php echo getIcon('Clock', 'w-4 h-4'); ?>
                        </div>
                        <div>
                            <strong>OPD Timings</strong>
                            <span>Mon - Sat: 9:00 AM - 5:00 PM</span>
                        </div>
                    </div>

                    <div class="anu-side-item">
                        <div class="anu-side-icon">
                            <?php echo getIcon('MapPin', 'w-4 h-4'); ?>
                        </div>
                        <div>
                            <strong>Location</strong>
                            <span>Akropolis Super Speciality Hospital, Sector 69, Gurugram</span>
                        </div>
                    </div>

                    <div class="anu-side-item">
                        <div class="anu-side-icon">
                            <?php echo getIcon('Building2', 'w-4 h-4'); ?>
                        </div>
                        <div>
                            <strong>Department</strong>
                            <span>Obstetrics &amp; Gynaecology</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- About -->
    <section class="anu-section">
        <div class="anu-container">
            <div class="anu-about-grid">

                <div class="anu-about-copy">
                    <div class="anu-section-head">
                        <h2 class="anu-title">
                            About <span class="accent">Dr. Anu Nagpal</span>
                        </h2>
                    </div>

                    <p>
                        Dr. Anu Nagpal is an Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital in Badshahpur, Gurgaon. She has 11 years of overall experience, including 7 years as a specialist in Obstetrics and Gynaecology.
                    </p>

                    <p>
                        She completed her MBBS from Dr. B. R. Ambedkar University in 2013 and her MS in Obstetrics &amp; Gynaecology from MMU Mullana in 2016. Her medical training provides the foundation for evaluating and managing women's health and pregnancy-related concerns.
                    </p>

                    <p>
                        At Akropolis Super Speciality Hospital, Dr. Anu Nagpal is part of the hospital's Obstetrics &amp; Gynaecology services. Patients can discuss their symptoms, medical history, pregnancy-related concerns and other women's health needs during consultation.
                    </p>
                </div>

                <div class="anu-about-image">
                    <img
                        src="/assets/images/obstetrics-and-gynaecology.jpg"
                        alt="Obstetrics and Gynaecology care at Akropolis Super Speciality Hospital"
                        loading="lazy"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- Education & Credentials -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head">
                <h2 class="anu-title">
                    Education <span class="accent">&amp; Credentials</span>
                </h2>
            </div>

            <div class="anu-three-grid">

                <div class="anu-card anu-education-card">
                    <div class="anu-education-top">
                        <div class="anu-icon-box">
                            <?php echo getIcon('Award', 'w-5 h-5'); ?>
                        </div>
                        <div>
                            <h3>MBBS</h3>
                            <p>Dr. B. R. Ambedkar University<br>2013</p>
                        </div>
                    </div>
                </div>

                <div class="anu-card anu-education-card">
                    <div class="anu-education-top">
                        <div class="anu-icon-box">
                            <?php echo getIcon('Award', 'w-5 h-5'); ?>
                        </div>
                        <div>
                            <h3>MS - Obstetrics &amp; Gynaecology</h3>
                            <p>MMU Mullana<br>2016</p>
                        </div>
                    </div>
                </div>

                <div class="anu-card anu-education-card">
                    <div class="anu-education-top">
                        <div class="anu-icon-box orange">
                            <?php echo getIcon('Award', 'w-5 h-5'); ?>
                        </div>
                        <div>
                            <h3>Professional Experience</h3>
                            <p>11+ Years Overall Experience<br>7 Years as a Specialist</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Areas of Medical Care -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head">
                <h2 class="anu-title">
                    Areas of <span class="accent">Medical Care</span>
                </h2>
                <p class="anu-intro">
                    Her clinical practice is centred around Obstetrics, Gynaecology and Women's Health.
                </p>
            </div>

            <div class="anu-five-grid">

                <div class="anu-card anu-care-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('Baby', 'w-5 h-5'); ?>
                    </div>
                    <h3>Obstetrics</h3>
                    <p>Pregnancy-related consultations and care.</p>
                </div>

                <div class="anu-card anu-care-card">
                    <div class="anu-icon-box pink">
                        <?php echo getIcon('HeartPulse', 'w-5 h-5'); ?>
                    </div>
                    <h3>Gynaecology</h3>
                    <p>Evaluation and management of gynaecological concerns.</p>
                </div>

                <div class="anu-card anu-care-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('Heart', 'w-5 h-5'); ?>
                    </div>
                    <h3>Women's Health</h3>
                    <p>Consultation for various women's health needs.</p>
                </div>

                <div class="anu-card anu-care-card">
                    <div class="anu-icon-box orange">
                        <?php echo getIcon('Calendar', 'w-5 h-5'); ?>
                    </div>
                    <h3>Pregnancy Care</h3>
                    <p>Assessment, guidance and follow-up during pregnancy.</p>
                </div>

                <div class="anu-card anu-care-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('CheckCircle', 'w-5 h-5'); ?>
                    </div>
                    <h3>General Evaluation</h3>
                    <p>Clinical assessment and further investigation when needed.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Obstetrics & Gynaecology Services -->
    <section class="anu-section blue">
        <div class="anu-container">

            <div class="anu-dept-card">

                <h2>
                    Obstetrics &amp; Gynaecology Services at Akropolis
                </h2>

                <p>
                    The Obstetrics &amp; Gynaecology department provides women's health and maternity-related services, with consultation and care based on each patient's individual medical needs.
                </p>

                <div class="anu-chip-row">

                    <span class="anu-chip">
                        <?php echo getIcon('CheckCircle', 'w-3 h-3'); ?>
                        Maternity Care
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CheckCircle', 'w-3 h-3'); ?>
                        High-Risk Pregnancy Evaluation &amp; Management
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CheckCircle', 'w-3 h-3'); ?>
                        Gynaecology Care
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CheckCircle', 'w-3 h-3'); ?>
                        Infertility Evaluation &amp; Treatment, Where Indicated
                    </span>

                </div>

            </div>
        </div>
    </section>

    <!-- When Should You Consult -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head">
                <h2 class="anu-title">
                    When Should You Consult an
                    <span class="accent">Obstetrician &amp; Gynaecologist?</span>
                </h2>

                <p class="anu-intro">
                    A consultation may be appropriate when you have concerns related to:
                </p>
            </div>

            <div class="anu-four-grid">

                <div class="anu-card anu-reason-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('Calendar', 'w-5 h-5'); ?>
                    </div>
                    <h3>Menstrual Health</h3>
                    <p>Irregular, painful or otherwise concerning menstrual symptoms.</p>
                </div>

                <div class="anu-card anu-reason-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('Baby', 'w-5 h-5'); ?>
                    </div>
                    <h3>Pregnancy Planning</h3>
                    <p>Planning for pregnancy or seeking early pregnancy care.</p>
                </div>

                <div class="anu-card anu-reason-card">
                    <div class="anu-icon-box pink">
                        <?php echo getIcon('HeartPulse', 'w-5 h-5'); ?>
                    </div>
                    <h3>Gynaecological Symptoms</h3>
                    <p>Symptoms or discomfort requiring professional evaluation.</p>
                </div>

                <div class="anu-card anu-reason-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('HeartHandshake', 'w-5 h-5'); ?>
                    </div>
                    <h3>General Women's Health</h3>
                    <p>Evaluation, guidance and discussion of women's health concerns.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Hospital / Location -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-hospital-card">

                <div class="anu-hospital-image">
                    <!-- Intentionally left with the image path supplied for replacement. -->
                    <img
                        src="/assets/images/akropolis-hospital.jpg"
                        alt="Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                        loading="lazy"
                    >
                </div>

                <div class="anu-hospital-content">

                    <h2>
                        Dr. Anu Nagpal at Akropolis
                        <span class="accent">Super Speciality Hospital</span>
                    </h2>

                    <p>
                        Dr. Anu Nagpal practices at Akropolis Super Speciality Hospital in Badshahpur, Gurugram. The hospital is located near Vatika Chowk, opposite Chinar Garden, Sector 69.
                    </p>

                    <div class="anu-address">
                        <?php echo getIcon('MapPin', 'w-4 h-4'); ?>
                        <span>
                            Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101
                        </span>
                    </div>

                    <div class="anu-hospital-actions">

                        <a href="/contact" class="anu-btn anu-btn-primary">
                            <?php echo getIcon('Calendar', 'w-4 h-4'); ?>
                            <span>Book Appointment</span>
                        </a>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                            target="_blank"
                            rel="noopener"
                            class="anu-btn anu-btn-secondary"
                        >
                            <?php echo getIcon('MapPin', 'w-4 h-4'); ?>
                            <span>Get Directions</span>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Resources -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head">
                <h2 class="anu-title">
                    Resources for <span class="accent">Patients</span>
                </h2>

                <p class="anu-intro">
                    Helpful information to support women's health, pregnancy and maternity-related care.
                </p>
            </div>

            <div class="anu-three-grid">

                <a href="/blog" class="anu-card anu-resource-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('BookOpen', 'w-5 h-5'); ?>
                    </div>
                    <h3>Pregnancy Guide</h3>
                    <p>Key information for understanding pregnancy and preparing for consultations.</p>
                </a>

                <a href="/blog" class="anu-card anu-resource-card">
                    <div class="anu-icon-box pink">
                        <?php echo getIcon('Heart', 'w-5 h-5'); ?>
                    </div>
                    <h3>Post-Delivery Care</h3>
                    <p>Recovery and care guidance after delivery.</p>
                </a>

                <a href="/blog" class="anu-card anu-resource-card">
                    <div class="anu-icon-box">
                        <?php echo getIcon('Users', 'w-5 h-5'); ?>
                    </div>
                    <h3>Women's Wellness</h3>
                    <p>General information about women's health and well-being.</p>
                </a>

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head center">
                <h2 class="anu-title">
                    Frequently Asked <span class="accent">Questions</span>
                </h2>

                <p class="anu-intro">
                    Common questions about Dr. Anu Nagpal, her qualifications, consultation and practice.
                </p>
            </div>

            <div class="anu-faq">

                <details class="anu-faq-item">
                    <summary>Who is Dr. Anu Nagpal?</summary>
                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal is an Obstetrician and Gynaecologist practising at Akropolis Super Speciality Hospital in Badshahpur, Gurugram. She has 11 years of overall experience, including 7 years as a specialist.
                    </div>
                </details>

                <details class="anu-faq-item">
                    <summary>What are Dr. Anu Nagpal's qualifications?</summary>
                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal completed MBBS from Dr. B. R. Ambedkar University in 2013 and MS - Obstetrics &amp; Gynaecology from MMU Mullana in 2016.
                    </div>
                </details>

                <details class="anu-faq-item">
                    <summary>How much experience does Dr. Anu Nagpal have?</summary>
                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal has 11 years of overall experience, including 7 years as a specialist in Obstetrics and Gynaecology.
                    </div>
                </details>

                <details class="anu-faq-item">
                    <summary>Where does Dr. Anu Nagpal practise?</summary>
                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal practises at Akropolis Super Speciality Hospital in Badshahpur, Gurugram, near Vatika Chowk, opposite Chinar Garden, Sector 69.
                    </div>
                </details>

                <details class="anu-faq-item">
                    <summary>What are Dr. Anu Nagpal's OPD timings?</summary>
                    <div class="anu-faq-answer">
                        Her listed OPD timing is Monday to Saturday, 9:00 AM to 5:00 PM.
                    </div>
                </details>

                <details class="anu-faq-item">
                    <summary>How can I book a consultation with Dr. Anu Nagpal?</summary>
                    <div class="anu-faq-answer">
                        You can use the appointment options on this page or contact Akropolis Super Speciality Hospital to enquire about an appointment with Dr. Anu Nagpal.
                    </div>
                </details>

            </div>
        </div>
    </section>

    <!-- Schedule Consultation -->
    <section class="anu-section peach">
        <div class="anu-container">

            <div class="anu-consult-grid">

                <div class="anu-calendar-icon">
                    <?php echo getIcon('Calendar', 'w-9 h-9'); ?>
                </div>

                <div>

                    <h2 class="anu-consultation-title">
                        Schedule a Consultation
                    </h2>

                    <p class="anu-consult-intro">
                        If you would like to discuss a women's health, pregnancy or gynaecological concern, enquire about an appointment with Dr. Anu Nagpal.
                    </p>

                    <form class="anu-form" action="/contact" method="get">

                        <div class="anu-form-grid">

                            <div>
                                <label for="anu-name">Full Name</label>

                                <input
                                    id="anu-name"
                                    name="name"
                                    type="text"
                                    placeholder="Enter your full name"
                                    autocomplete="name"
                                    required
                                >
                            </div>

                            <div>
                                <label for="anu-phone">Phone Number</label>

                                <input
                                    id="anu-phone"
                                    name="phone"
                                    type="tel"
                                    placeholder="Enter your phone number"
                                    autocomplete="tel"
                                    required
                                >
                            </div>

                            <div>
                                <label for="anu-date">Preferred Date</label>

                                <input
                                    id="anu-date"
                                    name="preferred_date"
                                    type="date"
                                    required
                                >
                            </div>

                            <div>
                                <label for="anu-time">Preferred Time</label>

                                <select
                                    id="anu-time"
                                    name="preferred_time"
                                    required
                                >
                                    <option value="">Select a time</option>
                                    <option value="9:00 AM - 11:00 AM">9:00 AM - 11:00 AM</option>
                                    <option value="11:00 AM - 1:00 PM">11:00 AM - 1:00 PM</option>
                                    <option value="1:00 PM - 3:00 PM">1:00 PM - 3:00 PM</option>
                                    <option value="3:00 PM - 5:00 PM">3:00 PM - 5:00 PM</option>
                                </select>
                            </div>

                            <div class="anu-form-full">
                                <label for="anu-message">Message</label>

                                <textarea
                                    id="anu-message"
                                    name="message"
                                    placeholder="Please describe your concern or appointment requirement"
                                ></textarea>
                            </div>

                        </div>

                        <button type="submit" class="anu-form-submit">
                            <?php echo getIcon('Calendar', 'w-4 h-4 inline-block mr-1'); ?>
                            Book Appointment
                        </button>

                        <p class="anu-form-note">
                            Our team will assist with appointment-related enquiries.
                        </p>

                    </form>

                </div>

            </div>
        </div>
    </section>

    <!-- Explore More -->
    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-section-head">
                <h2 class="anu-title">
                    Explore <span class="accent">More</span>
                </h2>
            </div>

            <div class="anu-explore-grid">

                <a
                    href="/departments/obstetrics-gynecology"
                    class="anu-card anu-explore-card"
                >
                    <div class="anu-explore-left">

                        <div class="anu-icon-box pink">
                            <?php echo getIcon('Heart', 'w-5 h-5'); ?>
                        </div>

                        <div>
                            <h3>Obstetrics &amp; Gynaecology Department</h3>
                            <p>Comprehensive women's health and maternity services.</p>
                        </div>

                    </div>

                    <div class="anu-arrow">
                        <?php echo getIcon('ChevronRight', 'w-5 h-5'); ?>
                    </div>
                </a>

                <a
                    href="/doctors"
                    class="anu-card anu-explore-card"
                >
                    <div class="anu-explore-left">

                        <div class="anu-icon-box">
                            <?php echo getIcon('Users', 'w-5 h-5'); ?>
                        </div>

                        <div>
                            <h3>Meet Our Doctors</h3>
                            <p>View all specialists at Akropolis Hospital.</p>
                        </div>

                    </div>

                    <div class="anu-arrow">
                        <?php echo getIcon('ChevronRight', 'w-5 h-5'); ?>
                    </div>
                </a>

            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/scripts.php'; ?>