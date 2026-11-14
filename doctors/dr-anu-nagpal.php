<?php

$doctorId = 'dr-anu-nagpal';

require_once __DIR__ . '/../includes/data.php';

if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/../includes/schema.php';
}

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

$page_title = 'Dr. Anu Nagpal, Obstetrician & Gynaecologist | Akropolis';

$page_description =
    'Meet Dr. Anu Nagpal, Obstetrician and Gynaecologist at Akropolis Super Speciality Hospital in Gurugram. She has 11 years of overall experience, including 7 years as a specialist, and provides obstetric and gynaecological care.';

$canonical_url = '/doctors/dr-anu-nagpal';

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

<style>
    .anu-page {
        --ak-blue: #328CCB;
        --ak-blue-dark: #123B70;
        --ak-orange: #D66C43;
        --ak-text: #15233A;
        --ak-muted: #667085;
        --ak-border: #E7EDF4;
        --ak-soft-blue: #EEF8FD;
        --ak-soft-orange: #FFF5F1;
    }

    .anu-page *,
    .anu-page *::before,
    .anu-page *::after {
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

    .anu-section {
        padding: 42px 0;
        background: #fff;
    }

    .anu-section-heading {
        margin-bottom: 20px;
    }

    .anu-section-heading.center {
        text-align: center;
    }

    .anu-title {
        color: var(--ak-blue-dark);
        font-size: clamp(1.55rem, 2vw, 2rem);
        line-height: 1.2;
        margin-bottom: 7px;
        font-weight: 800;
        letter-spacing: -0.025em;
    }

    .anu-title .accent,
    .anu-hospital-content .accent {
        color: var(--ak-blue);
    }

    .anu-intro {
        color: var(--ak-muted);
        font-size: .82rem;
        line-height: 1.6;
        max-width: 760px;
        margin-bottom: 0;
    }

    .anu-section-heading.center .anu-intro {
        margin-left: auto;
        margin-right: auto;
    }

    .anu-card {
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 13px;
        box-shadow: 0 7px 22px rgba(17, 52, 86, .055);
    }

    .anu-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 11px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--ak-soft-blue);
        color: var(--ak-blue);
    }

    .anu-icon.pink {
        background: #FFF0F5;
        color: #D9487C;
    }

    .anu-icon.orange {
        background: rgba(214,108,67,.10);
        color: var(--ak-orange);
    }

    .anu-icon.green {
        background: #ECFDF3;
        color: #16A05D;
    }

    /* =========================================================
       BREADCRUMB
       ========================================================= */

    .anu-breadcrumb {
        background: #fff;
        border-bottom: 1px solid var(--ak-border);
    }

    .anu-breadcrumb-inner {
        min-height: 42px;
        display: flex;
        align-items: center;
        gap: 7px;
        color: #667085;
        font-size: .72rem;
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

    /* =========================================================
       HERO
       ========================================================= */

    .anu-hero {
        background:
            linear-gradient(
                90deg,
                #F7FCFF 0%,
                #F7FCFF 56%,
                #EDF8FE 100%
            );
        padding: 30px 0;
    }

    .anu-hero-grid {
        display: grid;
        grid-template-columns: 150px minmax(0, 1fr) 310px;
        gap: 22px;
        align-items: center;
    }

    .anu-doctor-photo {
        width: 150px;
        height: 150px;
        border-radius: 16px;
        overflow: hidden;
        border: 4px solid #fff;
        background: #edf4f8;
        box-shadow: 0 8px 25px rgba(18,59,112,.12);
    }

    .anu-doctor-photo img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .anu-verified {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #EAF9EF;
        color: #168B4D;
        border-radius: 999px;
        padding: 4px 9px;
        font-size: .68rem;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .anu-hero h1 {
        color: var(--ak-blue-dark);
        font-size: clamp(1.9rem, 2.7vw, 2.35rem);
        line-height: 1.08;
        margin-bottom: 5px;
        font-weight: 850;
        letter-spacing: -0.035em;
    }

    .anu-speciality {
        color: var(--ak-blue);
        font-weight: 750;
        font-size: 1rem;
        margin-bottom: 5px;
    }

    .anu-qualification {
        color: #526071;
        font-size: .82rem;
        margin-bottom: 12px;
    }

    .anu-stat-row {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .anu-stat {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        min-width: 132px;
        padding: 8px 10px;
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 9px;
    }

    .anu-stat strong {
        display: block;
        color: var(--ak-blue-dark);
        font-size: .74rem;
        line-height: 1.2;
    }

    .anu-stat small {
        display: block;
        color: #667085;
        font-size: .64rem;
        line-height: 1.35;
    }

    .anu-stat.verified strong {
        color: #168B4D;
    }

    .anu-hero-actions,
    .anu-hospital-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 9px;
    }

    .anu-hero-actions {
        margin-top: 13px;
    }

    .anu-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        min-height: 40px;
        padding: 0 15px;
        border-radius: 8px;
        text-decoration: none;
        font-size: .76rem;
        font-weight: 750;
        transition: .2s ease;
    }

    .anu-btn-primary {
        background: var(--ak-orange);
        color: #fff;
        box-shadow: 0 5px 15px rgba(214,108,67,.18);
    }

    .anu-btn-primary:hover {
        background: #C85E38;
        color: #fff;
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
        border-radius: 14px;
        padding: 15px;
        box-shadow: 0 7px 22px rgba(17,52,86,.055);
    }

    .anu-side-item {
        display: flex;
        gap: 9px;
        align-items: flex-start;
    }

    .anu-side-item + .anu-side-item {
        border-top: 1px solid #EEF2F6;
        margin-top: 12px;
        padding-top: 12px;
    }

    .anu-side-icon {
        width: 32px;
        height: 32px;
        min-width: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ak-soft-blue);
        color: var(--ak-blue);
    }

    .anu-side-item strong {
        display: block;
        color: var(--ak-text);
        font-size: .7rem;
        margin-bottom: 2px;
    }

    .anu-side-item span {
        display: block;
        color: #667085;
        font-size: .65rem;
        line-height: 1.4;
    }

    /* =========================================================
       ABOUT
       ========================================================= */

    .anu-about-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.35fr) minmax(320px, .65fr);
        gap: 42px;
        align-items: center;
    }

    .anu-about-copy p {
        color: #4B5565;
        line-height: 1.65;
        font-size: .8rem;
        margin-bottom: 12px;
    }

    .anu-about-image {
        height: 250px;
        border-radius: 15px;
        overflow: hidden;
        background: #edf5f9;
        box-shadow: 0 8px 25px rgba(17,52,86,.07);
    }

    .anu-about-image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    /* =========================================================
       EDUCATION
       ========================================================= */

    .anu-three-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .anu-education-card {
        min-height: 112px;
        padding: 18px;
    }

    .anu-card-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .anu-education-card h3,
    .anu-resource-card h3,
    .anu-care-card h3,
    .anu-reason-card h3 {
        color: var(--ak-text);
        font-weight: 800;
    }

    .anu-education-card h3 {
        font-size: .82rem;
        margin-bottom: 5px;
    }

    .anu-education-card p {
        color: #667085;
        font-size: .68rem;
        line-height: 1.5;
        margin: 0;
    }

    /* =========================================================
       AREAS OF MEDICAL CARE
       ========================================================= */

    .anu-five-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 13px;
    }

    .anu-care-card {
        min-height: 155px;
        padding: 18px 13px;
        text-align: center;
    }

    .anu-care-card .anu-icon {
        margin: 0 auto 11px;
    }

    .anu-care-card h3 {
        font-size: .76rem;
        margin-bottom: 6px;
    }

    .anu-care-card p {
        color: #667085;
        font-size: .64rem;
        line-height: 1.45;
        margin: 0;
    }

    /* =========================================================
       DEPARTMENT CONNECTION
       ========================================================= */

    .anu-dept-section {
        background: #F4FAFE;
    }

    .anu-dept-card {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 220px;
        align-items: center;
        min-height: 155px;
        padding: 24px 28px;
        overflow: hidden;
        border: 1px solid #D7EDF9;
        border-radius: 16px;
        background: linear-gradient(
            105deg,
            #F0FAFF 0%,
            #F7FCFF 100%
        );
    }

    .anu-dept-content {
        min-width: 0;
        position: relative;
        z-index: 1;
    }

    .anu-dept-card h2 {
        font-size: 1.35rem;
        line-height: 1.25;
        margin-bottom: 7px;
    }

    .anu-dept-card p {
        color: #5E6B7A;
        max-width: 760px;
        font-size: .76rem;
        line-height: 1.55;
        margin-bottom: 13px;
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
        padding: 6px 10px;
        background: #fff;
        border: 1px solid #DDEAF2;
        border-radius: 999px;
        color: #344054;
        font-size: .65rem;
        font-weight: 700;
    }

    /*
     * Image path intentionally left as a replacement slot.
     * Replace the file when the final illustration is available.
     */
    .anu-dept-illustration {
        min-height: 145px;
        background-image: url('/assets/images/obstetrics-gynecology-services-illustration.png');
        background-repeat: no-repeat;
        background-position: center right;
        background-size: contain;
    }

    /* =========================================================
       WHEN TO CONSULT
       ========================================================= */

    .anu-four-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 14px;
    }

    .anu-reason-card {
        padding: 18px;
        min-height: 142px;
    }

    .anu-reason-card h3 {
        font-size: .76rem;
        margin: 10px 0 5px;
    }

    .anu-reason-card p {
        color: #667085;
        font-size: .64rem;
        line-height: 1.45;
        margin: 0;
    }

    /* =========================================================
       HOSPITAL / LOCATION
       ========================================================= */

    .anu-hospital-card {
        display: grid;
        grid-template-columns: 1fr 1.05fr;
        overflow: hidden;
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 16px;
        box-shadow: 0 8px 28px rgba(17,52,86,.07);
    }

    /*
     * Image path intentionally left as a replacement slot.
     * Replace the file when the final hospital image is available.
     */
    .anu-hospital-image {
        min-height: 285px;
        background-color: #EDF7FC;
        background-image: url('/assets/images/akropolis-hospital-building.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .anu-hospital-content {
        padding: 28px;
    }

    .anu-hospital-content h2 {
        font-size: 1.4rem;
        line-height: 1.25;
        margin-bottom: 8px;
    }

    .anu-hospital-content p {
        color: #667085;
        font-size: .76rem;
        line-height: 1.55;
    }

    .anu-address {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        margin: 14px 0;
        padding: 10px 12px;
        background: var(--ak-soft-orange);
        border: 1px solid #F6D8CC;
        border-radius: 9px;
        color: #4B5565;
        font-size: .68rem;
        line-height: 1.45;
    }

    /* =========================================================
       RESOURCES
       ========================================================= */

    .anu-resource-card {
        min-height: 125px;
        padding: 18px;
        text-decoration: none;
    }

    .anu-resource-card h3 {
        font-size: .76rem;
        margin: 10px 0 5px;
    }

    .anu-resource-card p {
        color: #667085;
        font-size: .64rem;
        line-height: 1.45;
        margin: 0;
    }

    /* =========================================================
       FAQ
       ========================================================= */

    .anu-faq {
        max-width: 980px;
        margin: 0 auto;
    }

    .anu-faq-item {
        background: #fff;
        border: 1px solid var(--ak-border);
        border-radius: 8px;
        margin-bottom: 7px;
        overflow: hidden;
    }

    .anu-faq-item summary {
        cursor: pointer;
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 12px 15px;
        color: var(--ak-text);
        font-size: .7rem;
        font-weight: 750;
    }

    .anu-faq-item summary::-webkit-details-marker {
        display: none;
    }

    .anu-faq-item summary::after {
        content: '+';
        color: var(--ak-blue);
        font-size: 1rem;
        font-weight: 500;
    }

    .anu-faq-item[open] summary::after {
        content: '−';
    }

    .anu-faq-answer {
        padding: 0 15px 14px;
        color: #667085;
        font-size: .68rem;
        line-height: 1.55;
    }

    /* =========================================================
       CONSULTATION
       ========================================================= */

    .anu-consultation {
        background: linear-gradient(
            100deg,
            #FFF6F2,
            #FFF9F7
        );
        border-top: 1px solid #F8E7E0;
        border-bottom: 1px solid #F8E7E0;
    }

    .anu-consult-grid {
        display: grid;
        grid-template-columns: 76px minmax(0, 1fr);
        gap: 22px;
        align-items: center;
        max-width: 980px;
        margin: 0 auto;
    }

    .anu-calendar-icon {
        width: 68px;
        height: 68px;
        border-radius: 16px;
        background: #fff;
        border: 1px solid #F1DCD4;
        color: var(--ak-orange);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .anu-consultation h2 {
        color: var(--ak-blue-dark);
        text-align: center;
        font-size: 1.45rem;
        margin-bottom: 5px;
    }

    .anu-consult-intro {
        color: #667085;
        text-align: center;
        font-size: .68rem;
        line-height: 1.45;
        margin-bottom: 14px;
    }

    .anu-form {
        background: #fff;
        border: 1px solid #F0E2DD;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 7px 22px rgba(80,50,40,.05);
    }

    .anu-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }

    .anu-form label {
        display: block;
        color: #344054;
        font-size: .62rem;
        font-weight: 750;
        margin-bottom: 4px;
    }

    .anu-form input,
    .anu-form select {
        width: 100%;
        height: 36px;
        padding: 0 10px;
        border: 1px solid #DDE3EA;
        border-radius: 7px;
        background: #fff;
        color: #344054;
        font-size: .65rem;
        outline: none;
    }

    .anu-form input:focus,
    .anu-form select:focus {
        border-color: var(--ak-blue);
        box-shadow: 0 0 0 3px rgba(50,140,203,.10);
    }

    .anu-form-submit {
        width: 100%;
        min-height: 38px;
        margin-top: 10px;
        border: 0;
        border-radius: 7px;
        background: var(--ak-orange);
        color: #fff;
        font-size: .68rem;
        font-weight: 800;
        cursor: pointer;
    }

    .anu-form-submit:hover {
        background: #C85E38;
    }

    .anu-form-note {
        color: #8A94A3;
        text-align: center;
        font-size: .58rem;
        margin: 6px 0 0;
    }

    /* =========================================================
       EXPLORE MORE
       ========================================================= */

    .anu-explore-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
    }

    .anu-explore-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 16px 18px;
        color: inherit;
        text-decoration: none;
    }

    .anu-explore-left {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .anu-explore-card h3 {
        color: var(--ak-blue-dark);
        font-size: .72rem;
        margin-bottom: 3px;
        font-weight: 800;
    }

    .anu-explore-card p {
        color: #667085;
        font-size: .62rem;
        margin: 0;
    }

    .anu-arrow {
        color: var(--ak-blue);
    }

    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1100px) {
        .anu-hero-grid {
            grid-template-columns: 140px minmax(0, 1fr);
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
            padding: 36px 0;
        }

        .anu-hero {
            padding: 28px 0;
        }

        .anu-hero-grid,
        .anu-about-grid,
        .anu-hospital-card {
            grid-template-columns: 1fr;
        }

        .anu-doctor-photo {
            margin: 0 auto;
        }

        .anu-stat-row,
        .anu-hero-actions,
        .anu-hospital-actions {
            justify-content: center;
        }

        .anu-hero-grid > div:nth-child(2) {
            text-align: center;
        }

        .anu-about-image {
            height: 220px;
        }

        .anu-three-grid,
        .anu-five-grid,
        .anu-four-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .anu-dept-card {
            grid-template-columns: 1fr;
        }

        .anu-dept-illustration {
            min-height: 100px;
            background-position: center;
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

        .anu-doctor-photo {
            width: 135px;
            height: 135px;
        }

        .anu-hero h1 {
            font-size: 1.85rem;
        }

        .anu-stat {
            min-width: 125px;
        }

        .anu-hospital-content {
            padding: 22px;
        }
    }
</style>

<main class="anu-page">

    <!-- =====================================================
         BREADCRUMB
         ===================================================== -->

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


                <!-- Doctor Information -->
                <div>

                    <?php if (!empty($doctor['registrationVerified'])): ?>

                        <div class="anu-verified">

                            <?php echo getIcon('ShieldCheck', 'w-3.5 h-3.5'); ?>

                            <span>
                                Medical Registration Verified
                            </span>

                        </div>

                    <?php endif; ?>


                    <h1>
                        Dr. Anu Nagpal
                    </h1>


                    <div class="anu-speciality">
                        Obstetrician &amp; Gynaecologist
                    </div>


                    <div class="anu-qualification">
                        MBBS, MS - Obstetrics &amp; Gynaecology
                    </div>


                    <div class="anu-stat-row">

                        <!-- Experience -->
                        <div class="anu-stat">

                            <div class="anu-icon">
                                <?php echo getIcon('Award', 'w-4 h-4'); ?>
                            </div>

                            <div>
                                <strong>11+ Years</strong>
                                <small>Overall Experience</small>
                            </div>

                        </div>


                        <!-- Specialist Experience -->
                        <div class="anu-stat">

                            <div class="anu-icon">
                                <?php echo getIcon('UserRound', 'w-4 h-4'); ?>
                            </div>

                            <div>
                                <strong>7 Years</strong>
                                <small>As Specialist</small>
                            </div>

                        </div>


                        <!-- Registration -->
                        <div class="anu-stat verified">

                            <div class="anu-icon green">
                                <?php echo getIcon('ShieldCheck', 'w-4 h-4'); ?>
                            </div>

                            <div>
                                <strong>Verified</strong>
                                <small>Medical Registration</small>
                            </div>

                        </div>

                    </div>


                    <div class="anu-hero-actions">

                        <a
                            href="/contact"
                            class="anu-btn anu-btn-primary"
                        >

                            <?php echo getIcon('CalendarDays', 'w-4 h-4'); ?>

                            <span>
                                Book Appointment
                            </span>

                        </a>


                        <a
                            href="#opd-timings"
                            class="anu-btn anu-btn-secondary"
                        >

                            <?php echo getIcon('Clock3', 'w-4 h-4'); ?>

                            <span>
                                View OPD Timings
                            </span>

                        </a>

                    </div>

                </div>


                <!-- Quick Information -->
                <div class="anu-hero-side">

                    <!-- OPD -->
                    <div
                        class="anu-side-item"
                        id="opd-timings"
                    >

                        <div class="anu-side-icon">

                            <?php echo getIcon('Clock3', 'w-4 h-4'); ?>

                        </div>

                        <div>

                            <strong>
                                OPD Timings
                            </strong>

                            <span>
                                Mon - Sat: 9:00 AM - 5:00 PM
                            </span>

                        </div>

                    </div>


                    <!-- Location -->
                    <div class="anu-side-item">

                        <div class="anu-side-icon">

                            <?php echo getIcon('MapPin', 'w-4 h-4'); ?>

                        </div>

                        <div>

                            <strong>
                                Location
                            </strong>

                            <span>
                                Akropolis Super Speciality Hospital,
                                Sector 69, Gurugram
                            </span>

                        </div>

                    </div>


                    <!-- Department -->
                    <div class="anu-side-item">

                        <div class="anu-side-icon">

                            <?php echo getIcon('Building2', 'w-4 h-4'); ?>

                        </div>

                        <div>

                            <strong>
                                Department
                            </strong>

                            <span>
                                Obstetrics &amp; Gynaecology
                            </span>

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

                    <div class="anu-section-heading">

                        <h2 class="anu-title">
                            About <span class="accent">Dr. Anu Nagpal</span>
                        </h2>

                    </div>


                    <p>
                        Dr. Anu Nagpal is an Obstetrician and Gynaecologist at
                        Akropolis Super Speciality Hospital in Badshahpur,
                        Gurgaon. She has 11 years of overall experience,
                        including 7 years as a specialist in Obstetrics and
                        Gynaecology.
                    </p>


                    <p>
                        She completed her MBBS from Dr. B. R. Ambedkar University
                        in 2013 and her MS in Obstetrics &amp; Gynaecology from
                        MMU Mullana in 2016. Her medical training provides the
                        foundation for evaluating and managing women's health and
                        pregnancy-related concerns based on each patient's
                        individual needs.
                    </p>


                    <p>
                        At Akropolis Super Speciality Hospital, Dr. Anu Nagpal is
                        part of the hospital's Obstetrics &amp; Gynaecology
                        services. Patients can discuss their symptoms, medical
                        history, pregnancy-related concerns and other women's
                        health needs during a consultation.
                    </p>

                </div>


                <!-- Keep this image path as supplied.
                     Replace the file later. -->
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

    <section class="anu-section">

        <div class="anu-container">

            <div class="anu-section-heading">

                <h2 class="anu-title">
                    Education <span class="accent">&amp; Credentials</span>
                </h2>

            </div>


            <div class="anu-three-grid">

                <!-- MBBS -->
                <div class="anu-card anu-education-card">

                    <div class="anu-card-row">

                        <div class="anu-icon">

                            <?php echo getIcon('GraduationCap', 'w-5 h-5'); ?>

                        </div>

                        <div>

                            <h3>
                                MBBS
                            </h3>

                            <p>
                                Dr. B. R. Ambedkar University<br>
                                2013
                            </p>

                        </div>

                    </div>

                </div>


                <!-- MS -->
                <div class="anu-card anu-education-card">

                    <div class="anu-card-row">

                        <div class="anu-icon">

                            <?php echo getIcon('GraduationCap', 'w-5 h-5'); ?>

                        </div>

                        <div>

                            <h3>
                                MS - Obstetrics &amp; Gynaecology
                            </h3>

                            <p>
                                MMU Mullana<br>
                                2016
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Experience -->
                <div class="anu-card anu-education-card">

                    <div class="anu-card-row">

                        <div class="anu-icon orange">

                            <?php echo getIcon('BriefcaseBusiness', 'w-5 h-5'); ?>

                        </div>

                        <div>

                            <h3>
                                Professional Experience
                            </h3>

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

            <div class="anu-section-heading">

                <h2 class="anu-title">
                    Areas of <span class="accent">Medical Care</span>
                </h2>

                <p class="anu-intro">
                    Her clinical practice is centred around Obstetrics,
                    Gynaecology and Women's Health.
                </p>

            </div>


            <div class="anu-five-grid">

                <!-- Obstetrics -->
                <div class="anu-card anu-care-card">

                    <div class="anu-icon">

                        <?php echo getIcon('Baby', 'w-5 h-5'); ?>

                    </div>

                    <h3>
                        Obstetrics
                    </h3>

                    <p>
                        Pregnancy-related consultations and care.
                    </p>

                </div>


                <!-- Gynaecology -->
                <div class="anu-card anu-care-card">

                    <div class="anu-icon pink">

                        <?php echo getIcon('Venus', 'w-5 h-5'); ?>

                    </div>

                    <h3>
                        Gynaecology
                    </h3>

                    <p>
                        Evaluation and management of gynaecological concerns.
                    </p>

                </div>


                <!-- Women's Health -->
                <div class="anu-card anu-care-card">

                    <div class="anu-icon">

                        <?php echo getIcon('PersonStanding', 'w-5 h-5'); ?>

                    </div>

                    <h3>
                        Women's Health
                    </h3>

                    <p>
                        Consultation for various women's health needs.
                    </p>

                </div>


                <!-- Pregnancy Care -->
                <div class="anu-card anu-care-card">

                    <div class="anu-icon orange">

                        <?php echo getIcon('ClipboardPenLine', 'w-5 h-5'); ?>

                    </div>

                    <h3>
                        Pregnancy Care
                    </h3>

                    <p>
                        Assessment, guidance and follow-up during pregnancy.
                    </p>

                </div>


                <!-- General Evaluation -->
                <div class="anu-card anu-care-card">

                    <div class="anu-icon">

                        <?php echo getIcon('ClipboardCheck', 'w-5 h-5'); ?>

                    </div>

                    <h3>
                        General Evaluation
                    </h3>

                    <p>
                        Clinical assessment and further investigation when needed.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         OBSTETRICS & GYNAECOLOGY SERVICES
         ===================================================== -->

    <section class="anu-section anu-dept-section">

        <div class="anu-container">

            <div class="anu-dept-card">

                <div class="anu-dept-content">

                    <h2>
                        Obstetrics &amp; Gynaecology Services at Akropolis
                    </h2>

                    <p>
                        The department provides a range of women's health and
                        maternity services with a focus on safe, evidence-based
                        and patient-centred care.
                    </p>


                    <div class="anu-chip-row">

                        <span class="anu-chip">

                            <?php echo getIcon(
                                'CircleCheck',
                                'w-3.5 h-3.5 text-[#328CCB]'
                            ); ?>

                            Maternity Care

                        </span>


                        <span class="anu-chip">

                            <?php echo getIcon(
                                'CircleCheck',
                                'w-3.5 h-3.5 text-[#328CCB]'
                            ); ?>

                            High-Risk Pregnancy
                            (evaluation &amp; management)

                        </span>


                        <span class="anu-chip">

                            <?php echo getIcon(
                                'CircleCheck',
                                'w-3.5 h-3.5 text-[#328CCB]'
                            ); ?>

                            Gynaecology Care

                        </span>


                        <span class="anu-chip">

                            <?php echo getIcon(
                                'CircleCheck',
                                'w-3.5 h-3.5 text-[#328CCB]'
                            ); ?>

                            Infertility Evaluation &amp;
                            Treatment (as indicated)

                        </span>

                    </div>

                </div>


                <!-- Keep this image path as a replacement slot. -->
                <div
                    class="anu-dept-illustration"
                    aria-hidden="true"
                ></div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHEN SHOULD YOU CONSULT
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="anu-section-heading">

                <h2 class="anu-title">
                    When Should You Consult an
                    <span class="accent">
                        Obstetrician &amp; Gynaecologist?
                    </span>
                </h2>

                <p class="anu-intro">
                    A consultation may be appropriate when you have concerns
                    related to:
                </p>

            </div>


            <div class="anu-four-grid">

                <!-- Menstrual Health -->
                <div class="anu-card anu-reason-card">

                    <div class="anu-icon">

                        <?php echo getIcon(
                            'CalendarHeart',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Menstrual Health
                    </h3>

                    <p>
                        Irregular, painful or otherwise concerning menstrual
                        symptoms.
                    </p>

                </div>


                <!-- Pregnancy Planning -->
                <div class="anu-card anu-reason-card">

                    <div class="anu-icon">

                        <?php echo getIcon(
                            'Baby',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Pregnancy Planning
                    </h3>

                    <p>
                        Planning for pregnancy or seeking early pregnancy care.
                    </p>

                </div>


                <!-- Gynaecological Symptoms -->
                <div class="anu-card anu-reason-card">

                    <div class="anu-icon pink">

                        <?php echo getIcon(
                            'HeartPulse',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Gynaecological Symptoms
                    </h3>

                    <p>
                        Symptoms or discomfort requiring professional evaluation.
                    </p>

                </div>


                <!-- General Women's Health -->
                <div class="anu-card anu-reason-card">

                    <div class="anu-icon">

                        <?php echo getIcon(
                            'HeartHandshake',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        General Women's Health
                    </h3>

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

    <section class="anu-section">

        <div class="anu-container">

            <div class="anu-hospital-card">

                <!-- Keep this image path as a replacement slot. -->
                <div
                    class="anu-hospital-image"
                    role="img"
                    aria-label="Akropolis Super Speciality Hospital, Sector 69, Gurugram"
                ></div>


                <div class="anu-hospital-content">

                    <h2>
                        Dr. Anu Nagpal at Akropolis
                        <span class="accent">
                            Super Speciality Hospital
                        </span>
                    </h2>

                    <p>
                        Dr. Anu Nagpal practices at Akropolis Super Speciality
                        Hospital in Badshahpur, Gurugram.
                    </p>


                    <div class="anu-address">

                        <?php echo getIcon(
                            'MapPin',
                            'w-5 h-5 text-[#D66C43] flex-shrink-0'
                        ); ?>

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

                            <?php echo getIcon(
                                'CalendarDays',
                                'w-4 h-4'
                            ); ?>

                            <span>
                                Book Appointment
                            </span>

                        </a>


                        <a
                            href="https://www.google.com/maps/search/?api=1&amp;query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                            target="_blank"
                            rel="noopener"
                            class="anu-btn anu-btn-secondary"
                        >

                            <?php echo getIcon(
                                'MapPinned',
                                'w-4 h-4'
                            ); ?>

                            <span>
                                Get Directions
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         RESOURCES FOR PATIENTS
         ===================================================== -->

    <section class="anu-section">

        <div class="anu-container">

            <div class="anu-section-heading">

                <h2 class="anu-title">
                    Resources for <span class="accent">Patients</span>
                </h2>

                <p class="anu-intro">
                    Helpful information to support women's health, pregnancy
                    and maternity-related care.
                </p>

            </div>


            <div class="anu-three-grid">

                <!-- Pregnancy Guide -->
                <a
                    href="/blog"
                    class="anu-card anu-resource-card"
                >

                    <div class="anu-icon">

                        <?php echo getIcon(
                            'BookOpen',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Pregnancy Guide
                    </h3>

                    <p>
                        Key information for understanding pregnancy and
                        preparing for consultations.
                    </p>

                </a>


                <!-- Post Delivery -->
                <a
                    href="/blog"
                    class="anu-card anu-resource-card"
                >

                    <div class="anu-icon pink">

                        <?php echo getIcon(
                            'Heart',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Post-Delivery Care
                    </h3>

                    <p>
                        Recovery and care guidance after delivery.
                    </p>

                </a>


                <!-- Women's Wellness -->
                <a
                    href="/blog"
                    class="anu-card anu-resource-card"
                >

                    <div class="anu-icon">

                        <?php echo getIcon(
                            'Users',
                            'w-5 h-5'
                        ); ?>

                    </div>

                    <h3>
                        Women's Wellness
                    </h3>

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

    <section class="anu-section">

        <div class="anu-container">

            <div class="anu-section-heading center">

                <h2 class="anu-title">
                    Frequently Asked <span class="accent">Questions</span>
                </h2>

                <p class="anu-intro">
                    Common questions about Dr. Anu Nagpal, her qualifications,
                    consultation and practice.
                </p>

            </div>


            <div class="anu-faq">

                <!-- FAQ 1 -->
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


                <!-- FAQ 2 -->
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


                <!-- FAQ 3 -->
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


                <!-- FAQ 4 -->
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


                <!-- FAQ 5 -->
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
         SCHEDULE A CONSULTATION
         ===================================================== -->

    <section class="anu-section anu-consultation">

        <div class="anu-container">

            <div class="anu-consult-grid">

                <!-- Calendar Icon -->
                <div class="anu-calendar-icon">

                    <?php echo getIcon(
                        'CalendarDays',
                        'w-9 h-9'
                    ); ?>

                </div>


                <div>

                    <h2>
                        Schedule a Consultation
                    </h2>


                    <p class="anu-consult-intro">
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

                            <!-- Full Name -->
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


                            <!-- Phone -->
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


                            <!-- Date -->
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


                            <!-- Time -->
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

                        </div>


                        <button
                            type="submit"
                            class="anu-form-submit"
                        >

                            <?php echo getIcon(
                                'CalendarCheck',
                                'w-4 h-4 inline-block mr-1'
                            ); ?>

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

            <div class="anu-section-heading">

                <h2 class="anu-title">
                    Explore <span class="accent">More</span>
                </h2>

            </div>


            <div class="anu-explore-grid">

                <!-- Department -->
                <a
                    href="/departments/obstetrics-gynecology"
                    class="anu-card anu-explore-card"
                >

                    <div class="anu-explore-left">

                        <div class="anu-icon pink">

                            <?php echo getIcon(
                                'Venus',
                                'w-5 h-5'
                            ); ?>

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

                        <?php echo getIcon(
                            'ChevronRight',
                            'w-5 h-5'
                        ); ?>

                    </div>

                </a>


                <!-- Doctors -->
                <a
                    href="/doctors"
                    class="anu-card anu-explore-card"
                >

                    <div class="anu-explore-left">

                        <div class="anu-icon">

                            <?php echo getIcon(
                                'UsersRound',
                                'w-5 h-5'
                            ); ?>

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

                        <?php echo getIcon(
                            'ChevronRight',
                            'w-5 h-5'
                        ); ?>

                    </div>

                </a>

            </div>

        </div>

    </section>

</main>


<!-- =========================================================
     SITEWIDE FOOTER
     =========================================================

     The existing footer and sitewide navigation are intentionally
     not modified.
-->

<?php include __DIR__ . '/../includes/footer.php'; ?>

<?php include __DIR__ . '/../includes/scripts.php'; ?>