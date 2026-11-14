<?php

$doctorId = 'dr-anu-nagpal';

require_once __DIR__ . '/../includes/data.php';

if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/../includes/schema.php';
}

/*
|--------------------------------------------------------------------------
| Find Doctor
|--------------------------------------------------------------------------
*/

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
            <h1 class="text-2xl font-bold text-gray-900 mb-4">
                Doctor Not Found
            </h1>

            <a
                href="/doctors"
                class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#287caf] text-white px-6 py-3 rounded-lg font-semibold transition"
            >
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

/*
|--------------------------------------------------------------------------
| SEO
|--------------------------------------------------------------------------
*/

$page_title = 'Dr. Anu Nagpal, Obstetrician & Gynaecologist | Akropolis';

$page_description =
    'Meet Dr. Anu Nagpal, Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital in Gurugram. She has 11 years of overall experience, including 7 years as a specialist, and provides obstetric and gynaecological care.';

$canonical_url = '/doctors/dr-anu-nagpal';

/*
|--------------------------------------------------------------------------
| Physician + Breadcrumb Schema
|--------------------------------------------------------------------------
*/

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

?>

<?php include __DIR__ . '/../includes/header-v2.php'; ?>

<!-- =========================================================
     PAGE-SPECIFIC STYLES
     ========================================================= -->

<style>
    .anu-page {
        --ak-blue: #328CCB;
        --ak-blue-dark: #123B70;
        --ak-orange: #D66C43;
        --ak-text: #15233A;
        --ak-muted: #667085;
        --ak-border: #E7EDF4;
        --ak-light-blue: #F4FAFE;
        --ak-soft-blue: #EEF8FD;
        --ak-soft-orange: #FFF5F1;
    }

    .anu-page * {
        box-sizing: border-box;
    }

    .anu-container {
        width: min(1180px, calc(100% - 32px));
        margin: 0 auto;
    }

    .anu-page h1,
    .anu-page h2,
    .anu-page h3,
    .anu-page p {
        margin-top: 0;
    }

    .anu-page h2 {
        color: var(--ak-blue-dark);
        font-weight: 800;
        letter-spacing: -0.025em;
    }

    .anu-page .section-title {
        font-size: clamp(1.65rem, 2.2vw, 2.15rem);
        line-height: 1.2;
        margin-bottom: 8px;
    }

    .anu-page .section-title .accent {
        color: var(--ak-blue);
    }

    .anu-page .section-intro {
        color: var(--ak-muted);
        font-size: 0.95rem;
        line-height: 1.65;
        max-width: 760px;
    }

    .anu-page .section-header {
        margin-bottom: 28px;
    }

    .anu-page .section-header.center {
        text-align: center;
    }

    .anu-page .section-header.center .section-intro {
        margin-left: auto;
        margin-right: auto;
    }

    .anu-page .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 5px 11px;
        border-radius: 999px;
        background: var(--ak-soft-blue);
        color: var(--ak-blue);
        font-size: 0.72rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .anu-page .card {
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 16px;
        box-shadow: 0 8px 28px rgba(17, 52, 86, 0.07);
    }

    .anu-page .icon-box {
        width: 46px;
        height: 46px;
        min-width: 46px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--ak-soft-blue);
        color: var(--ak-blue);
    }

    .anu-page .icon-box.orange {
        background: rgba(214,108,67,.10);
        color: var(--ak-orange);
    }

    .anu-page .icon-box.green {
        background: #ECFDF3;
        color: #16A05D;
    }

    .anu-page .icon-box.pink {
        background: #FFF0F5;
        color: #D9487C;
    }

    .anu-page .check {
        width: 18px;
        height: 18px;
        min-width: 18px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #EAF7EF;
        color: #159447;
    }

    /* Breadcrumb */

    .anu-breadcrumb {
        background: #fff;
        border-bottom: 1px solid var(--ak-border);
    }

    .anu-breadcrumb-inner {
        min-height: 50px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #667085;
        font-size: 0.78rem;
    }

    .anu-breadcrumb a {
        color: #667085;
        text-decoration: none;
    }

    .anu-breadcrumb a:hover {
        color: var(--ak-blue);
    }

    .anu-breadcrumb .current {
        color: var(--ak-blue-dark);
        font-weight: 700;
    }

    /* Hero */

    .anu-hero {
        background:
            linear-gradient(
                90deg,
                #F7FCFF 0%,
                #F7FCFF 55%,
                #EDF8FE 100%
            );
        padding: 42px 0;
    }

    .anu-hero-grid {
        display: grid;
        grid-template-columns: 150px minmax(0, 1fr) 300px;
        gap: 24px;
        align-items: center;
    }

    .anu-doctor-photo {
        width: 150px;
        height: 150px;
        border-radius: 18px;
        overflow: hidden;
        border: 4px solid #fff;
        box-shadow: 0 8px 25px rgba(18,59,112,.12);
        background: #edf4f8;
    }

    .anu-doctor-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .anu-verified {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #EAF9EF;
        color: #168B4D;
        border-radius: 999px;
        padding: 5px 10px;
        font-size: 0.72rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .anu-hero h1 {
        color: var(--ak-blue-dark);
        font-size: clamp(2rem, 3vw, 2.65rem);
        line-height: 1.1;
        margin-bottom: 7px;
        font-weight: 850;
        letter-spacing: -0.035em;
    }

    .anu-speciality {
        color: var(--ak-blue);
        font-weight: 750;
        font-size: 1.05rem;
        margin-bottom: 7px;
    }

    .anu-qualification {
        color: #526071;
        font-size: 0.9rem;
        margin-bottom: 16px;
    }

    .anu-stat-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .anu-stat {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 10px;
        padding: 9px 12px;
        font-size: 0.76rem;
        color: #344054;
    }

    .anu-stat strong {
        color: var(--ak-blue-dark);
        display: block;
        font-size: 0.8rem;
    }

    .anu-stat small {
        color: #667085;
    }

    .anu-hero-actions {
        display: flex;
        gap: 10px;
        margin-top: 17px;
        flex-wrap: wrap;
    }

    .anu-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 43px;
        padding: 0 17px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 0.82rem;
        font-weight: 750;
        transition: .2s ease;
    }

    .anu-btn-primary {
        background: var(--ak-orange);
        color: #fff;
        box-shadow: 0 6px 18px rgba(214,108,67,.20);
    }

    .anu-btn-primary:hover {
        background: #c85e38;
        color: #fff;
        transform: translateY(-1px);
    }

    .anu-btn-secondary {
        background: #fff;
        color: var(--ak-blue);
        border: 1px solid #9DD0F1;
    }

    .anu-btn-secondary:hover {
        background: #F5FBFF;
        color: var(--ak-blue-dark);
    }

    .anu-hero-side {
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 15px;
        padding: 18px;
        box-shadow: 0 8px 25px rgba(17,52,86,.06);
    }

    .anu-side-item {
        display: flex;
        gap: 11px;
        align-items: flex-start;
    }

    .anu-side-item + .anu-side-item {
        border-top: 1px solid #EEF2F6;
        margin-top: 15px;
        padding-top: 15px;
    }

    .anu-side-item .mini-icon {
        width: 34px;
        height: 34px;
        min-width: 34px;
        border-radius: 9px;
        background: var(--ak-soft-blue);
        color: var(--ak-blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .anu-side-item strong {
        display: block;
        color: var(--ak-text);
        font-size: 0.75rem;
        margin-bottom: 3px;
    }

    .anu-side-item span {
        display: block;
        color: #667085;
        font-size: 0.72rem;
        line-height: 1.45;
    }

    /* Generic sections */

    .anu-section {
        padding: 58px 0;
    }

    .anu-section.alt {
        background: var(--ak-light-blue);
    }

    .anu-about-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.35fr) minmax(300px, .65fr);
        gap: 42px;
        align-items: center;
    }

    .anu-about-copy p {
        color: #4B5565;
        line-height: 1.72;
        font-size: 0.93rem;
        margin-bottom: 14px;
    }

    .anu-about-image {
        border-radius: 17px;
        overflow: hidden;
        min-height: 245px;
        background: #edf5f9;
        box-shadow: 0 8px 25px rgba(17,52,86,.08);
    }

    .anu-about-image img {
        width: 100%;
        height: 100%;
        min-height: 245px;
        object-fit: cover;
    }

    /* Education */

    .anu-three-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    .anu-education-card {
        padding: 23px;
        min-height: 150px;
    }

    .anu-education-card .card-top {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    .anu-education-card h3 {
        color: var(--ak-text);
        font-size: 0.95rem;
        font-weight: 800;
        margin-bottom: 6px;
    }

    .anu-education-card p {
        color: #667085;
        font-size: 0.78rem;
        line-height: 1.55;
        margin: 0;
    }

    /* Areas */

    .anu-five-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 14px;
    }

    .anu-care-card {
        padding: 21px 15px;
        text-align: center;
        min-height: 170px;
    }

    .anu-care-card .icon-box {
        margin: 0 auto 13px;
    }

    .anu-care-card h3 {
        color: var(--ak-text);
        font-size: 0.84rem;
        font-weight: 800;
        margin-bottom: 7px;
    }

    .anu-care-card p {
        color: #667085;
        font-size: 0.71rem;
        line-height: 1.5;
        margin: 0;
    }

    /* Department relationship */

    .anu-dept-card {
        position: relative;
        overflow: hidden;
        padding: 30px 34px;
        background: linear-gradient(105deg, #F0FAFF 0%, #F7FCFF 100%);
        border: 1px solid #D7EDF9;
        border-radius: 17px;
    }

    .anu-dept-card h2 {
        font-size: 1.35rem;
        margin-bottom: 8px;
    }

    .anu-dept-card p {
        color: #5E6B7A;
        max-width: 720px;
        line-height: 1.6;
        font-size: 0.82rem;
        margin-bottom: 17px;
    }

    .anu-chip-row {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .anu-chip {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #fff;
        border: 1px solid #DDEAF2;
        border-radius: 999px;
        padding: 7px 11px;
        color: #344054;
        font-size: 0.72rem;
        font-weight: 700;
    }

    /* Consultation reasons */

    .anu-four-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .anu-reason-card {
        padding: 20px;
    }

    .anu-reason-card h3 {
        color: var(--ak-text);
        font-size: 0.82rem;
        font-weight: 800;
        margin: 12px 0 6px;
    }

    .anu-reason-card p {
        color: #667085;
        font-size: 0.71rem;
        line-height: 1.5;
        margin: 0;
    }

    /* Hospital */

    .anu-hospital-card {
        display: grid;
        grid-template-columns: 1fr 1.05fr;
        overflow: hidden;
        border-radius: 17px;
        background: #fff;
        border: 1px solid var(--ak-border);
        box-shadow: 0 8px 28px rgba(17,52,86,.07);
    }

    .anu-hospital-image {
        min-height: 300px;
        background:
            linear-gradient(135deg, #DDEFF8, #F6FBFD);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--ak-blue);
        text-align: center;
        padding: 30px;
    }

    .anu-hospital-image .placeholder {
        max-width: 300px;
    }

    .anu-hospital-image .placeholder .icon-box {
        margin: 0 auto 14px;
    }

    .anu-hospital-image .placeholder strong {
        display: block;
        color: var(--ak-blue-dark);
        font-size: 0.95rem;
    }

    .anu-hospital-image .placeholder span {
        display: block;
        color: #667085;
        font-size: 0.75rem;
        margin-top: 5px;
    }

    .anu-hospital-content {
        padding: 31px;
    }

    .anu-hospital-content h2 {
        font-size: 1.45rem;
        margin-bottom: 8px;
    }

    .anu-hospital-content p {
        color: #667085;
        font-size: 0.82rem;
        line-height: 1.6;
    }

    .anu-address {
        display: flex;
        gap: 9px;
        align-items: flex-start;
        background: var(--ak-soft-orange);
        border: 1px solid #F6D8CC;
        border-radius: 10px;
        padding: 11px 13px;
        color: #4B5565;
        font-size: 0.75rem;
        line-height: 1.5;
        margin: 15px 0;
    }

    .anu-hospital-actions {
        display: flex;
        gap: 9px;
        flex-wrap: wrap;
    }

    /* Resources */

    .anu-resource-card {
        padding: 20px;
        min-height: 140px;
    }

    .anu-resource-card h3 {
        color: var(--ak-text);
        font-size: 0.82rem;
        font-weight: 800;
        margin: 12px 0 5px;
    }

    .anu-resource-card p {
        color: #667085;
        font-size: 0.7rem;
        line-height: 1.5;
        margin: 0;
    }

    /* FAQ */

    .anu-faq {
        max-width: 850px;
        margin: 0 auto;
    }

    .anu-faq-item {
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 9px;
        margin-bottom: 9px;
        overflow: hidden;
    }

    .anu-faq-item summary {
        cursor: pointer;
        list-style: none;
        padding: 15px 17px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        color: var(--ak-text);
        font-size: 0.8rem;
        font-weight: 750;
    }

    .anu-faq-item summary::-webkit-details-marker {
        display: none;
    }

    .anu-faq-item summary::after {
        content: '+';
        color: var(--ak-blue);
        font-size: 1.15rem;
        font-weight: 500;
    }

    .anu-faq-item[open] summary::after {
        content: '−';
    }

    .anu-faq-answer {
        padding: 0 17px 17px;
        color: #667085;
        font-size: 0.76rem;
        line-height: 1.65;
    }

    /* Consultation */

    .anu-consultation {
        background: linear-gradient(100deg, #FFF6F2, #FFF9F7);
        border-top: 1px solid #F8E7E0;
        border-bottom: 1px solid #F8E7E0;
    }

    .anu-consult-grid {
        display: grid;
        grid-template-columns: 90px minmax(0, 1fr);
        gap: 25px;
        align-items: center;
    }

    .anu-calendar-icon {
        width: 76px;
        height: 76px;
        border-radius: 18px;
        background: #fff;
        border: 1px solid #F1DCD4;
        color: var(--ak-orange);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .anu-consultation h2 {
        text-align: center;
        font-size: 1.55rem;
        margin-bottom: 6px;
    }

    .anu-consultation .consult-intro {
        text-align: center;
        color: #667085;
        font-size: 0.78rem;
        margin-bottom: 20px;
    }

    .anu-form {
        background: #fff;
        border: 1px solid #F0E2DD;
        border-radius: 13px;
        padding: 20px;
        box-shadow: 0 7px 22px rgba(80,50,40,.05);
    }

    .anu-form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .anu-form label {
        display: block;
        color: #344054;
        font-size: 0.7rem;
        font-weight: 750;
        margin-bottom: 5px;
    }

    .anu-form input,
    .anu-form select,
    .anu-form textarea {
        width: 100%;
        border: 1px solid #DDE3EA;
        border-radius: 8px;
        padding: 10px 11px;
        color: #344054;
        font-size: 0.75rem;
        outline: none;
        background: #fff;
    }

    .anu-form input:focus,
    .anu-form select:focus,
    .anu-form textarea:focus {
        border-color: var(--ak-blue);
        box-shadow: 0 0 0 3px rgba(50,140,203,.10);
    }

    .anu-form textarea {
        min-height: 80px;
        resize: vertical;
    }

    .anu-form-full {
        grid-column: 1 / -1;
    }

    .anu-form-submit {
        width: 100%;
        border: 0;
        margin-top: 13px;
        background: var(--ak-orange);
        color: #fff;
        border-radius: 8px;
        padding: 12px;
        font-size: 0.8rem;
        font-weight: 800;
        cursor: pointer;
    }

    .anu-form-submit:hover {
        background: #c85e38;
    }

    .anu-form-note {
        text-align: center;
        color: #8A94A3;
        font-size: 0.65rem;
        margin: 8px 0 0;
    }

    /* Explore */

    .anu-explore-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .anu-explore-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 18px 20px;
        color: inherit;
        text-decoration: none;
    }

    .anu-explore-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .anu-explore-card h3 {
        color: var(--ak-blue-dark);
        font-size: 0.82rem;
        margin-bottom: 4px;
        font-weight: 800;
    }

    .anu-explore-card p {
        color: #667085;
        font-size: 0.69rem;
        margin: 0;
    }

    .anu-arrow {
        color: var(--ak-blue);
    }

    /* Responsive */

    @media (max-width: 1024px) {
        .anu-hero-grid {
            grid-template-columns: 130px minmax(0, 1fr);
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

    @media (max-width: 768px) {
        .anu-container {
            width: min(100% - 24px, 680px);
        }

        .anu-section {
            padding: 42px 0;
        }

        .anu-hero {
            padding: 30px 0;
        }

        .anu-hero-grid {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .anu-doctor-photo {
            margin: 0 auto;
        }

        .anu-stat-row,
        .anu-hero-actions {
            justify-content: center;
        }

        .anu-about-grid,
        .anu-hospital-card {
            grid-template-columns: 1fr;
        }

        .anu-about-image {
            min-height: 220px;
        }

        .anu-three-grid,
        .anu-five-grid,
        .anu-four-grid {
            grid-template-columns: 1fr 1fr;
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

        .anu-doctor-photo {
            width: 135px;
            height: 135px;
        }

        .anu-hero h1 {
            font-size: 1.85rem;
        }

        .anu-hospital-content {
            padding: 23px;
        }
    }
</style>

<!-- =========================================================
     MAIN DOCTOR PAGE
     ========================================================= -->

<main class="anu-page">

    <!-- Breadcrumb -->
    <div class="anu-breadcrumb">
        <div class="anu-container anu-breadcrumb-inner">

            <?php echo getIcon('Home', 'w-3.5 h-3.5'); ?>

            <a href="/">Home</a>

            <?php echo getIcon('ChevronRight', 'w-3 h-3'); ?>

            <a href="/doctors">Doctors</a>

            <?php echo getIcon('ChevronRight', 'w-3 h-3'); ?>

            <span class="current">Dr. Anu Nagpal</span>

        </div>
    </div>


    <!-- =====================================================
         HERO
         ===================================================== -->

    <section class="anu-hero">
        <div class="anu-container">

            <div class="anu-hero-grid">

                <!-- Doctor Image -->
                <div class="anu-doctor-photo">
                    <img
                        src="<?php echo htmlspecialchars($doctor['image'] ?? ''); ?>"
                        alt="Dr. Anu Nagpal, Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital"
                        loading="eager"
                    >
                </div>


                <!-- Doctor Introduction -->
                <div>

                    <?php if (!empty($doctor['registrationVerified'])): ?>

                        <div class="anu-verified">
                            <?php echo getIcon('ShieldCheck', 'w-3.5 h-3.5'); ?>
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
                            <div class="icon-box">
                                <?php echo getIcon('Award', 'w-4 h-4'); ?>
                            </div>

                            <div>
                                <strong>11+ Years</strong>
                                <small>Overall Experience</small>
                            </div>
                        </div>


                        <div class="anu-stat">
                            <div class="icon-box">
                                <?php echo getIcon('UserRound', 'w-4 h-4'); ?>
                            </div>

                            <div>
                                <strong>7 Years</strong>
                                <small>As Specialist</small>
                            </div>
                        </div>

                    </div>


                    <div class="anu-hero-actions">

                        <a
                            href="/contact"
                            class="anu-btn anu-btn-primary"
                        >
                            <?php echo getIcon('CalendarDays', 'w-4 h-4'); ?>
                            <span>Book Appointment</span>
                        </a>

                        <a
                            href="#opd-timings"
                            class="anu-btn anu-btn-secondary"
                        >
                            <?php echo getIcon('Clock3', 'w-4 h-4'); ?>
                            <span>View OPD Timings</span>
                        </a>

                    </div>

                </div>


                <!-- Quick Information -->
                <div class="anu-hero-side">

                    <div class="anu-side-item" id="opd-timings">

                        <div class="mini-icon">
                            <?php echo getIcon('Clock3', 'w-4 h-4'); ?>
                        </div>

                        <div>
                            <strong>OPD Timings</strong>
                            <span>Mon - Sat: 9:00 AM - 5:00 PM</span>
                        </div>

                    </div>


                    <div class="anu-side-item">

                        <div class="mini-icon">
                            <?php echo getIcon('MapPin', 'w-4 h-4'); ?>
                        </div>

                        <div>
                            <strong>Location</strong>
                            <span>
                                Akropolis Super Speciality Hospital,
                                Sector 69, Gurugram
                            </span>
                        </div>

                    </div>


                    <div class="anu-side-item">

                        <div class="mini-icon">
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


    <!-- =====================================================
         ABOUT
         ===================================================== -->

    <section class="anu-section">
        <div class="anu-container">

            <div class="anu-about-grid">

                <div class="anu-about-copy">

                    <div class="section-header">

                        <h2 class="section-title">
                            About <span class="accent">Dr. Anu Nagpal</span>
                        </h2>

                    </div>

                    <p>
                        Dr. Anu Nagpal is an Obstetrician and Gynaecologist at
                        Akropolis Super Speciality Hospital in Badshahpur, Gurgaon.
                        She has 11 years of overall experience, including 7 years
                        as a specialist in Obstetrics and Gynaecology.
                    </p>

                    <p>
                        She completed MBBS from Dr. B. R. Ambedkar University in
                        2013 and MS - Obstetrics &amp; Gynaecology from MMU Mullana
                        in 2016.
                    </p>

                    <p>
                        At Akropolis Super Speciality Hospital, Dr. Anu Nagpal is
                        part of the hospital's Obstetrics &amp; Gynaecology services.
                        Patients can discuss their symptoms, medical history,
                        pregnancy-related concerns and other women's health needs
                        during a consultation.
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


    <!-- =====================================================
         EDUCATION & CREDENTIALS
         ===================================================== -->

    <section class="anu-section alt">

        <div class="anu-container">

            <div class="section-header">

                <h2 class="section-title">
                    Education <span class="accent">&amp; Credentials</span>
                </h2>

            </div>


            <div class="anu-three-grid">

                <div class="card anu-education-card">

                    <div class="card-top">

                        <div class="icon-box">
                            <?php echo getIcon('GraduationCap', 'w-5 h-5'); ?>
                        </div>

                        <div>
                            <h3>MBBS</h3>

                            <p>
                                Dr. B. R. Ambedkar University<br>
                                2013
                            </p>
                        </div>

                    </div>

                </div>


                <div class="card anu-education-card">

                    <div class="card-top">

                        <div class="icon-box">
                            <?php echo getIcon('GraduationCap', 'w-5 h-5'); ?>
                        </div>

                        <div>
                            <h3>MS - Obstetrics &amp; Gynaecology</h3>

                            <p>
                                MMU Mullana<br>
                                2016
                            </p>
                        </div>

                    </div>

                </div>


                <div class="card anu-education-card">

                    <div class="card-top">

                        <div class="icon-box orange">
                            <?php echo getIcon('BriefcaseBusiness', 'w-5 h-5'); ?>
                        </div>

                        <div>
                            <h3>Professional Experience</h3>

                            <p>
                                11+ Years Overall Experience<br>
                                7 Years as a Specialist
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         AREAS OF MEDICAL CARE
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="section-header">

                <h2 class="section-title">
                    Areas of <span class="accent">Medical Care</span>
                </h2>

                <p class="section-intro">
                    Her clinical practice is centred around Obstetrics,
                    Gynaecology and Women's Health.
                </p>

            </div>


            <div class="anu-five-grid">

                <div class="card anu-care-card">

                    <div class="icon-box">
                        <?php echo getIcon('Baby', 'w-5 h-5'); ?>
                    </div>

                    <h3>Obstetrics</h3>

                    <p>
                        Pregnancy-related consultations and care.
                    </p>

                </div>


                <div class="card anu-care-card">

                    <div class="icon-box pink">
                        <?php echo getIcon('HeartPulse', 'w-5 h-5'); ?>
                    </div>

                    <h3>Gynaecology</h3>

                    <p>
                        Evaluation and management of gynaecological concerns.
                    </p>

                </div>


                <div class="card anu-care-card">

                    <div class="icon-box">
                        <?php echo getIcon('PersonStanding', 'w-5 h-5'); ?>
                    </div>

                    <h3>Women's Health</h3>

                    <p>
                        Consultation for various women's health needs.
                    </p>

                </div>


                <div class="card anu-care-card">

                    <div class="icon-box orange">
                        <?php echo getIcon('ClipboardPenLine', 'w-5 h-5'); ?>
                    </div>

                    <h3>Pregnancy Care</h3>

                    <p>
                        Assessment, guidance and follow-up during pregnancy.
                    </p>

                </div>


                <div class="card anu-care-card">

                    <div class="icon-box">
                        <?php echo getIcon('ClipboardCheck', 'w-5 h-5'); ?>
                    </div>

                    <h3>General Evaluation</h3>

                    <p>
                        Clinical assessment and further investigation when needed.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         DEPARTMENT CONNECTION
         ===================================================== -->

    <section class="anu-section alt">

        <div class="anu-container">

            <div class="anu-dept-card">

                <h2>
                    Obstetrics &amp; Gynaecology Services at Akropolis
                </h2>

                <p>
                    The Obstetrics &amp; Gynaecology department provides
                    women's health and maternity-related services, with
                    consultation and care based on each patient's individual
                    medical needs.
                </p>


                <div class="anu-chip-row">

                    <span class="anu-chip">
                        <?php echo getIcon('CircleCheck', 'w-3.5 h-3.5 text-[#328CCB]'); ?>
                        Maternity Care
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CircleCheck', 'w-3.5 h-3.5 text-[#328CCB]'); ?>
                        High-Risk Pregnancy Evaluation &amp; Management
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CircleCheck', 'w-3.5 h-3.5 text-[#328CCB]'); ?>
                        Gynaecology Care
                    </span>

                    <span class="anu-chip">
                        <?php echo getIcon('CircleCheck', 'w-3.5 h-3.5 text-[#328CCB]'); ?>
                        Infertility Evaluation &amp; Treatment, Where Indicated
                    </span>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHEN TO CONSULT
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="section-header">

                <h2 class="section-title">
                    When Should You Consult an
                    <span class="accent">
                        Obstetrician &amp; Gynaecologist?
                    </span>
                </h2>

                <p class="section-intro">
                    A consultation may be appropriate when you have concerns
                    related to:
                </p>

            </div>


            <div class="anu-four-grid">

                <div class="card anu-reason-card">

                    <div class="icon-box">
                        <?php echo getIcon('CalendarHeart', 'w-5 h-5'); ?>
                    </div>

                    <h3>Menstrual Health</h3>

                    <p>
                        Irregular, painful or otherwise concerning menstrual
                        symptoms.
                    </p>

                </div>


                <div class="card anu-reason-card">

                    <div class="icon-box">
                        <?php echo getIcon('Baby', 'w-5 h-5'); ?>
                    </div>

                    <h3>Pregnancy Planning</h3>

                    <p>
                        Planning for pregnancy or seeking early pregnancy care.
                    </p>

                </div>


                <div class="card anu-reason-card">

                    <div class="icon-box pink">
                        <?php echo getIcon('HeartPulse', 'w-5 h-5'); ?>
                    </div>

                    <h3>Gynaecological Symptoms</h3>

                    <p>
                        Symptoms or discomfort requiring professional evaluation.
                    </p>

                </div>


                <div class="card anu-reason-card">

                    <div class="icon-box">
                        <?php echo getIcon('HeartHandshake', 'w-5 h-5'); ?>
                    </div>

                    <h3>General Women's Health</h3>

                    <p>
                        Evaluation, guidance and discussion of women's health
                        concerns.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         HOSPITAL / LOCATION
         ===================================================== -->

    <section class="anu-section alt">

        <div class="anu-container">

            <div class="anu-hospital-card">

                <div class="anu-hospital-image">

                    <div class="placeholder">

                        <div class="icon-box">
                            <?php echo getIcon('Building2', 'w-6 h-6'); ?>
                        </div>

                        <strong>
                            Akropolis Super Speciality Hospital
                        </strong>

                        <span>
                            Sector 69, Gurugram
                        </span>

                    </div>

                </div>


                <div class="anu-hospital-content">

                    <h2>
                        Dr. Anu Nagpal at Akropolis
                        <span class="accent">Super Speciality Hospital</span>
                    </h2>

                    <p>
                        Dr. Anu Nagpal practices at Akropolis Super Speciality
                        Hospital in Badshahpur, Gurugram.
                    </p>


                    <div class="anu-address">

                        <?php echo getIcon('MapPin', 'w-5 h-5 text-[#D66C43] flex-shrink-0'); ?>

                        <span>
                            Near Vatika Chowk, Opposite Chinar Garden,
                            Sector 69, Gurugram, Haryana 122101
                        </span>

                    </div>


                    <div class="anu-hospital-actions">

                        <a
                            href="/contact"
                            class="anu-btn anu-btn-primary"
                        >
                            <?php echo getIcon('CalendarDays', 'w-4 h-4'); ?>
                            <span>Book Appointment</span>
                        </a>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                            target="_blank"
                            rel="noopener"
                            class="anu-btn anu-btn-secondary"
                        >
                            <?php echo getIcon('MapPinned', 'w-4 h-4'); ?>
                            <span>Get Directions</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         RESOURCES
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="section-header">

                <h2 class="section-title">
                    Resources for <span class="accent">Patients</span>
                </h2>

                <p class="section-intro">
                    Helpful information to support women's health, pregnancy
                    and maternity-related care.
                </p>

            </div>


            <div class="anu-three-grid">

                <a
                    href="/blog"
                    class="card anu-resource-card"
                    style="text-decoration:none;"
                >

                    <div class="icon-box">
                        <?php echo getIcon('BookOpen', 'w-5 h-5'); ?>
                    </div>

                    <h3>Pregnancy Guide</h3>

                    <p>
                        Key information for understanding pregnancy and preparing
                        for consultations.
                    </p>

                </a>


                <a
                    href="/blog"
                    class="card anu-resource-card"
                    style="text-decoration:none;"
                >

                    <div class="icon-box pink">
                        <?php echo getIcon('Heart', 'w-5 h-5'); ?>
                    </div>

                    <h3>Post-Delivery Care</h3>

                    <p>
                        Recovery and care guidance after delivery.
                    </p>

                </a>


                <a
                    href="/blog"
                    class="card anu-resource-card"
                    style="text-decoration:none;"
                >

                    <div class="icon-box">
                        <?php echo getIcon('Users', 'w-5 h-5'); ?>
                    </div>

                    <h3>Women's Wellness</h3>

                    <p>
                        General information about women's health and well-being.
                    </p>

                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FAQ
         ===================================================== -->

    <section class="anu-section alt">

        <div class="anu-container">

            <div class="section-header center">

                <h2 class="section-title">
                    Frequently Asked <span class="accent">Questions</span>
                </h2>

                <p class="section-intro">
                    Common questions about Dr. Anu Nagpal, her qualifications,
                    consultation and practice.
                </p>

            </div>


            <div class="anu-faq">

                <details class="anu-faq-item">

                    <summary>
                        Who is Dr. Anu Nagpal?
                    </summary>

                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal is an Obstetrician and Gynaecologist
                        practising at Akropolis Super Speciality Hospital in
                        Badshahpur, Gurugram. She has 11 years of overall
                        experience, including 7 years as a specialist.
                    </div>

                </details>


                <details class="anu-faq-item">

                    <summary>
                        What are Dr. Anu Nagpal's qualifications?
                    </summary>

                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal completed MBBS from Dr. B. R. Ambedkar
                        University in 2013 and MS - Obstetrics &amp; Gynaecology
                        from MMU Mullana in 2016.
                    </div>

                </details>


                <details class="anu-faq-item">

                    <summary>
                        How much experience does Dr. Anu Nagpal have?
                    </summary>

                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal has 11 years of overall experience,
                        including 7 years as a specialist in Obstetrics and
                        Gynaecology.
                    </div>

                </details>


                <details class="anu-faq-item">

                    <summary>
                        Where does Dr. Anu Nagpal practise?
                    </summary>

                    <div class="anu-faq-answer">
                        Dr. Anu Nagpal practises at Akropolis Super Speciality
                        Hospital in Badshahpur, Gurugram, near Vatika Chowk,
                        opposite Chinar Garden, Sector 69.
                    </div>

                </details>


                <details class="anu-faq-item">

                    <summary>
                        What are Dr. Anu Nagpal's OPD timings?
                    </summary>

                    <div class="anu-faq-answer">
                        Her listed OPD timing is Monday to Saturday,
                        9:00 AM to 5:00 PM.
                    </div>

                </details>


                <details class="anu-faq-item">

                    <summary>
                        How can I book a consultation with Dr. Anu Nagpal?
                    </summary>

                    <div class="anu-faq-answer">
                        You can use the appointment options on this page or
                        contact Akropolis Super Speciality Hospital to enquire
                        about an appointment with Dr. Anu Nagpal.
                    </div>

                </details>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CONSULTATION
         ===================================================== -->

    <section class="anu-section anu-consultation">

        <div class="anu-container">

            <div class="anu-consult-grid">

                <div class="anu-calendar-icon">
                    <?php echo getIcon('CalendarDays', 'w-9 h-9'); ?>
                </div>


                <div>

                    <h2>
                        Schedule a Consultation
                    </h2>

                    <p class="consult-intro">
                        If you would like to discuss a women's health,
                        pregnancy or gynaecological concern, enquire about
                        an appointment with Dr. Anu Nagpal.
                    </p>


                    <form
                        class="anu-form"
                        action="/contact"
                        method="get"
                    >

                        <div class="anu-form-grid">

                            <div>
                                <label for="anu-name">
                                    Full Name
                                </label>

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
                                <label for="anu-phone">
                                    Phone Number
                                </label>

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
                                <label for="anu-date">
                                    Preferred Date
                                </label>

                                <input
                                    id="anu-date"
                                    name="preferred_date"
                                    type="date"
                                    required
                                >
                            </div>


                            <div>
                                <label for="anu-time">
                                    Preferred Time
                                </label>

                                <select
                                    id="anu-time"
                                    name="preferred_time"
                                    required
                                >

                                    <option value="">
                                        Select a time
                                    </option>

                                    <option value="9:00 AM - 11:00 AM">
                                        9:00 AM - 11:00 AM
                                    </option>

                                    <option value="11:00 AM - 1:00 PM">
                                        11:00 AM - 1:00 PM
                                    </option>

                                    <option value="1:00 PM - 3:00 PM">
                                        1:00 PM - 3:00 PM
                                    </option>

                                    <option value="3:00 PM - 5:00 PM">
                                        3:00 PM - 5:00 PM
                                    </option>

                                </select>
                            </div>


                            <div class="anu-form-full">

                                <label for="anu-message">
                                    Message
                                </label>

                                <textarea
                                    id="anu-message"
                                    name="message"
                                    placeholder="Please describe your concern or appointment requirement"
                                ></textarea>

                            </div>

                        </div>


                        <button
                            type="submit"
                            class="anu-form-submit"
                        >
                            <?php echo getIcon('CalendarCheck', 'w-4 h-4 inline-block mr-1'); ?>
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


    <!-- =====================================================
         EXPLORE MORE
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="section-header">

                <h2 class="section-title">
                    Explore <span class="accent">More</span>
                </h2>

            </div>


            <div class="anu-explore-grid">

                <a
                    href="/departments/obstetrics-gynecology"
                    class="card anu-explore-card"
                >

                    <div class="anu-explore-left">

                        <div class="icon-box pink">
                            <?php echo getIcon('Venus', 'w-5 h-5'); ?>
                        </div>

                        <div>

                            <h3>
                                Obstetrics &amp; Gynaecology Department
                            </h3>

                            <p>
                                Comprehensive women's health and maternity services.
                            </p>

                        </div>

                    </div>

                    <div class="anu-arrow">
                        <?php echo getIcon('ChevronRight', 'w-5 h-5'); ?>
                    </div>

                </a>


                <a
                    href="/doctors"
                    class="card anu-explore-card"
                >

                    <div class="anu-explore-left">

                        <div class="icon-box">
                            <?php echo getIcon('UsersRound', 'w-5 h-5'); ?>
                        </div>

                        <div>

                            <h3>
                                Meet Our Doctors
                            </h3>

                            <p>
                                View all specialists at Akropolis Hospital.
                            </p>

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


<!-- =========================================================
     SITEWIDE FOOTER
     ========================================================= -->

<?php include __DIR__ . '/../includes/footer.php'; ?>

<?php include __DIR__ . '/../includes/scripts.php'; ?>