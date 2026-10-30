<?php
/**
 * Gurugram Haddi Ka Doctor Landing Page
 * Akropolis Super Speciality Hospital
 * URL: /haddi-ka-doctor/haryana/gurugram/
 */

// --------------------------------------------------
// 1. ROOT PATH AND SHARED WEBSITE DATA
// --------------------------------------------------

$rootPath = dirname(__DIR__, 3);

require_once $rootPath . '/includes/data.php';

// --------------------------------------------------
// 2. PAGE SEO DETAILS
// --------------------------------------------------

$district_name = 'gurugram';
$district_display = 'Gurugram';

$page_title = 'Gurugram में हड्डी के डॉक्टर | Dr. Prateek Girotra';

$meta_description = 'Gurugram में हड्डी और जोड़ों की समस्याओं के लिए Dr. Prateek Girotra से परामर्श लें। Akropolis Super Speciality Hospital में Orthopaedic care, 24×7 Emergency और Cashless Insurance Assistance उपलब्ध है।';

// Canonical URL
// Use a relative path because head.php adds the website domain.
$canonical_url = '/haddi-ka-doctor/haryana/gurugram/';

// --------------------------------------------------
// 3. DOCTOR DATA
// --------------------------------------------------

$doctor = null;

foreach ($doctors as $d) {
    if (($d['id'] ?? '') === 'dr-prateek-girotra') {
        $doctor = $d;
        break;
    }
}

// Safe fallback if doctor data is unavailable
if (!$doctor) {
    http_response_code(404);
    include $rootPath . '/includes/head.php';
    include $rootPath . '/includes/header-v2.php';
    ?>
    <main class="gp-container gp-error">
        <h1>Doctor information is currently unavailable.</h1>
        <p>Please contact Akropolis Super Speciality Hospital for assistance.</p>
        <a href="/" class="gp-btn">Go to Homepage</a>
    </main>
    <?php
    include $rootPath . '/includes/footer.php';
    include $rootPath . '/includes/scripts.php';
    exit;
}

// --------------------------------------------------
// 4. SAFE CONTACT AND DOCTOR VALUES
// --------------------------------------------------

$hospitalPhone = CONTACT_INFO['phone'] ?? '';
$emergencyPhone = CONTACT_INFO['emergency'] ?? $hospitalPhone;
$hospitalAddress = CONTACT_INFO['address'] ?? 'Gurugram, Haryana';

$doctorName = $doctor['name'] ?? 'Dr. Prateek Girotra';
$doctorImage = $doctor['image'] ?? '';
$doctorQualification = $doctor['qualification'] ?? 'MBBS, MS Orthopaedics';
$doctorExperience = $doctor['experience'] ?? '10+ Years';
$doctorOpdTiming = $doctor['opdTiming'] ?? 'Please call the hospital to confirm OPD timings';

$phoneLink = preg_replace('/[^0-9+]/', '', $hospitalPhone);

// --------------------------------------------------
// 5. FAQ CONTENT
// --------------------------------------------------

$faqs = [
    [
        'q' => 'गुरुग्राम में हड्डियों और जोड़ों के इलाज के लिए किस डॉक्टर से परामर्श लें?',
        'a' => 'आप Akropolis Super Speciality Hospital में Dr. Prateek Girotra से हड्डियों, जोड़ों, फ्रैक्चर और अन्य ऑर्थोपेडिक समस्याओं के लिए परामर्श ले सकते हैं।'
    ],
    [
        'q' => 'Dr. Prateek Girotra किन समस्याओं का इलाज करते हैं?',
        'a' => 'उनकी ऑर्थोपेडिक विशेषज्ञता में घुटने और कूल्हे का प्रत्यारोपण, स्पोर्ट्स इंजरी, आर्थ्रोस्कोपी, ट्रॉमा और फ्रैक्चर से जुड़ी समस्याएं शामिल हैं।'
    ],
    [
        'q' => 'क्या Akropolis Super Speciality Hospital में Cashless Insurance की सुविधा उपलब्ध है?',
        'a' => 'हाँ, अस्पताल में Cashless Insurance की सुविधा उपलब्ध है। आपकी पॉलिसी, बीमा कंपनी या TPA की नेटवर्क पात्रता और Pre-authorisation के आधार पर Cashless Treatment की प्रक्रिया की पुष्टि की जाती है। अधिक जानकारी के लिए अस्पताल की Insurance Desk से संपर्क करें।'
    ],
    [
        'q' => 'क्या अस्पताल में 24×7 Emergency सुविधा उपलब्ध है?',
        'a' => 'हाँ, Akropolis Super Speciality Hospital में 24×7 Emergency सेवा उपलब्ध है। किसी गंभीर चोट या दुर्घटना की स्थिति में अस्पताल की Emergency Team से संपर्क करें।'
    ],
    [
        'q' => 'क्या Orthopaedic OPD के लिए पहले से Appointment लेना जरूरी है?',
        'a' => 'Appointment पहले से लेना बेहतर रहता है, ताकि आप डॉक्टर के उपलब्ध समय की पुष्टि कर सकें और अपनी Consultation की योजना बना सकें।'
    ],
    [
        'q' => 'Akropolis Super Speciality Hospital कहाँ स्थित है?',
        'a' => 'Akropolis Super Speciality Hospital, Sector 69, Gurugram, Haryana में स्थित है। अस्पताल आने से पहले संपर्क करके Appointment और OPD Timing की पुष्टि कर लें।'
    ]
];

// --------------------------------------------------
// 6. STRUCTURED DATA
// --------------------------------------------------

$physicianSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Physician',
    'name' => $doctorName,
    'image' => $doctorImage,
    'medicalSpecialty' => 'OrthopedicSurgery',
    'description' => 'Dr. Prateek Girotra, Director & Head of Orthopedics at Akropolis Super Speciality Hospital, Gurugram.',
    'url' => 'https://akropolishospital.com/doctors/dr-prateek-girotra',
    'telephone' => $hospitalPhone,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $hospitalAddress,
        'addressLocality' => 'Gurugram',
        'addressRegion' => 'Haryana',
        'postalCode' => '122101',
        'addressCountry' => 'IN'
    ],
    'worksFor' => [
        '@type' => 'Hospital',
        'name' => 'Akropolis Super Speciality Hospital',
        'url' => 'https://akropolishospital.com/'
    ]
];

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => []
];

foreach ($faqs as $faq) {
    $faqSchema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['a']
        ]
    ];
}

$schemaFlags = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT;

// --------------------------------------------------
// 7. LOAD WEBSITE HEAD
// --------------------------------------------------

include $rootPath . '/includes/head.php';

?>

<style>
/* =========================================
   GURUGRAM LANDING PAGE
========================================= */

.gurugram-page {
    background: #f7f9fc;
    color: #263445;
    font-family: inherit;
}

.gp-container {
    width: min(1160px, calc(100% - 36px));
    margin: 0 auto;
}

.gp-section {
    padding: 48px 0;
}

.gp-section-white {
    background: #fff;
}

.gp-section-heading {
    margin-bottom: 28px;
}

.gp-section-heading h2 {
    color: #173f68;
    font-size: clamp(25px, 3vw, 34px);
    font-weight: 800;
    line-height: 1.3;
    margin: 0 0 12px;
}

.gp-section-heading p {
    color: #657386;
    font-size: 16px;
    line-height: 1.8;
    margin: 0;
}

.gp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 14px 22px;
    border-radius: 9px;
    background: #328ccb;
    color: #fff !important;
    text-decoration: none !important;
    font-size: 15px;
    font-weight: 750;
    transition: .2s ease;
}

.gp-btn:hover {
    background: #236fa8;
    transform: translateY(-2px);
}

/* Emergency bar */

.gp-emergency {
    background: #d66c43;
    color: #fff;
    padding: 10px 15px;
    text-align: center;
    font-weight: 700;
    font-size: 14px;
}

.gp-emergency a {
    color: #fff;
    text-decoration: none;
}

/* Breadcrumbs */

.gp-breadcrumb {
    background: #fff;
    border-bottom: 1px solid #e8edf2;
    padding: 15px 0;
}

.gp-breadcrumb ol {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 9px;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 13px;
    color: #718096;
}

.gp-breadcrumb a {
    color: #328ccb;
    text-decoration: none;
}

/* Hero */

.gp-hero {
    padding: 48px 0;
}

.gp-hero-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.5fr) minmax(280px, .8fr);
    gap: 30px;
    align-items: start;
}

.gp-hero-content,
.gp-doctor-card,
.gp-content-card,
.gp-facility-card,
.gp-faq-card {
    background: #fff;
    border: 1px solid #e9eef3;
    border-radius: 18px;
    box-shadow: 0 8px 28px rgba(26, 55, 84, .06);
}

.gp-hero-content {
    padding: 38px;
}

.gp-eyebrow {
    display: inline-block;
    color: #328ccb;
    background: #eaf5fc;
    border-radius: 30px;
    padding: 7px 13px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: .04em;
    margin-bottom: 17px;
}

.gp-hero h1 {
    color: #173f68;
    font-size: clamp(28px, 3.6vw, 42px);
    font-weight: 850;
    line-height: 1.25;
    margin: 0 0 18px;
}

.gp-hero-content p {
    color: #5b6878;
    font-size: 16px;
    line-height: 1.9;
    margin: 0 0 17px;
}

.gp-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 25px;
}

.gp-btn-outline {
    background: #fff;
    color: #328ccb !important;
    border: 1px solid #328ccb;
}

.gp-btn-outline:hover {
    background: #eef7fc;
}

/* Doctor card */

.gp-doctor-card {
    padding: 28px;
    text-align: center;
    position: sticky;
    top: 25px;
}

.gp-doctor-image {
    width: 132px;
    height: 132px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #e7f3fb;
    margin: 0 auto 17px;
    display: block;
}

.gp-doctor-card h2 {
    color: #173f68;
    font-size: 23px;
    font-weight: 850;
    margin: 0 0 8px;
}

.gp-doctor-role {
    color: #328ccb;
    font-size: 14px;
    font-weight: 750;
    margin-bottom: 10px;
}

.gp-doctor-qualification {
    color: #667587;
    font-size: 13px;
    line-height: 1.7;
    margin-bottom: 20px;
}

.gp-doctor-details {
    text-align: left;
    border-top: 1px solid #edf0f3;
    margin-top: 20px;
    padding-top: 18px;
}

.gp-doctor-detail {
    display: flex;
    gap: 12px;
    margin-bottom: 16px;
    align-items: flex-start;
}

.gp-doctor-detail strong {
    display: block;
    color: #263445;
    font-size: 13px;
    margin-bottom: 3px;
}

.gp-doctor-detail span {
    display: block;
    color: #6b7787;
    font-size: 13px;
    line-height: 1.6;
}

.gp-doctor-icon {
    width: 35px;
    height: 35px;
    flex: 0 0 35px;
    display: grid;
    place-items: center;
    border-radius: 9px;
    color: #328ccb;
    background: #eaf5fc;
}

/* Content */

.gp-content-card {
    padding: 36px;
}

.gp-content-card h2 {
    color: #173f68;
    font-size: 27px;
    font-weight: 850;
    line-height: 1.4;
    margin: 0 0 18px;
}

.gp-content-card h3 {
    color: #173f68;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.4;
    margin: 30px 0 12px;
}

.gp-content-card p {
    color: #566477;
    font-size: 15px;
    line-height: 1.9;
    margin: 0 0 16px;
}

.gp-content-card ul {
    padding-left: 22px;
    margin: 12px 0 22px;
}

.gp-content-card li {
    color: #566477;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 9px;
}

.gp-highlight-list {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 13px;
    padding: 0 !important;
    list-style: none;
}

.gp-highlight-list li {
    background: #eff7fc;
    border-left: 4px solid #328ccb;
    border-radius: 8px;
    padding: 13px 15px;
    margin: 0;
    color: #29435b;
    font-weight: 650;
}

/* Facility cards */

.gp-facility-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
}

.gp-facility-card {
    padding: 23px;
}

.gp-facility-card h3 {
    color: #173f68;
    font-size: 17px;
    font-weight: 800;
    margin: 0 0 9px;
}

.gp-facility-card p {
    color: #667587;
    font-size: 14px;
    line-height: 1.75;
    margin: 0;
}

/* Operating hours */

.gp-hours-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #e8edf2;
}

.gp-hours-table th,
.gp-hours-table td {
    padding: 14px 17px;
    text-align: left;
    border-bottom: 1px solid #edf0f3;
    font-size: 14px;
}

.gp-hours-table th {
    background: #173f68;
    color: #fff;
    font-weight: 750;
}

.gp-hours-table td {
    color: #526174;
}

.gp-hours-table tr:last-child td {
    border-bottom: 0;
}

/* Cashless Insurance CTA */

.gp-insurance-cta {
    position: relative;
    overflow: hidden;
    padding: 38px;
    border-radius: 20px;
    background: linear-gradient(125deg, #173f68, #328ccb);
    color: #fff;
    box-shadow: 0 14px 35px rgba(25, 75, 120, .16);
}

.gp-insurance-cta::after {
    content: "✚";
    position: absolute;
    right: 35px;
    top: 5px;
    color: rgba(255,255,255,.09);
    font-size: 150px;
    font-weight: 900;
    line-height: 1;
    pointer-events: none;
}

.gp-insurance-content {
    position: relative;
    z-index: 1;
    max-width: 760px;
}

.gp-insurance-label {
    display: inline-block;
    margin-bottom: 13px;
    padding: 7px 13px;
    border: 1px solid rgba(255,255,255,.3);
    border-radius: 30px;
    color: #fff;
    background: rgba(255,255,255,.12);
    font-size: 12px;
    font-weight: 750;
    letter-spacing: .04em;
}

.gp-insurance-cta h2 {
    margin: 0 0 13px;
    color: #fff;
    font-size: clamp(24px, 3vw, 32px);
    line-height: 1.3;
    font-weight: 850;
}

.gp-insurance-cta p {
    margin: 0 0 18px;
    color: rgba(255,255,255,.9);
    font-size: 15px;
    line-height: 1.8;
}

.gp-insurance-points {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 23px;
}

.gp-insurance-points span {
    padding: 8px 12px;
    border: 1px solid rgba(255,255,255,.25);
    border-radius: 7px;
    color: #fff;
    background: rgba(255,255,255,.1);
    font-size: 13px;
}

.gp-insurance-cta .gp-btn {
    color: #173f68 !important;
    background: #fff;
}

.gp-insurance-cta .gp-btn:hover {
    background: #edf6fc;
}

.gp-insurance-note {
    margin-top: 15px !important;
    margin-bottom: 0 !important;
    font-size: 12px !important;
    color: rgba(255,255,255,.78) !important;
}

/* NABH */

.gp-nabh-card {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    padding: 25px;
    border-radius: 14px;
    background: #f0f7fc;
    border: 1px solid #dcecf7;
}

.gp-nabh-card h3 {
    color: #173f68;
    font-size: 19px;
    font-weight: 800;
    margin: 0 0 8px;
}

.gp-nabh-card p {
    color: #5d6c7c;
    font-size: 14px;
    line-height: 1.8;
    margin: 0;
}

/* Patient checklist */

.gp-checklist {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
}

.gp-checklist-item {
    background: #fff;
    border: 1px solid #e8edf2;
    border-radius: 10px;
    padding: 15px;
    color: #526174;
    font-size: 14px;
    line-height: 1.7;
}

/* FAQ */

.gp-faq-card {
    padding: 32px;
}

.gp-faq-card h2 {
    color: #173f68;
    font-size: 27px;
    font-weight: 850;
    margin: 0 0 23px;
}

.gp-faq-item {
    border: 1px solid #e8edf2;
    border-radius: 11px;
    margin-bottom: 12px;
    overflow: hidden;
    background: #fff;
}

.gp-faq-question {
    width: 100%;
    padding: 17px 19px;
    background: #fff;
    border: 0;
    color: #263e56;
    font-size: 15px;
    font-weight: 750;
    text-align: left;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    cursor: pointer;
}

.gp-faq-question:hover {
    background: #f7fbfe;
}

.gp-faq-icon {
    color: #328ccb;
    font-size: 20px;
    transition: transform .2s ease;
}

.gp-faq-answer {
    display: none;
    padding: 0 19px 18px;
    color: #637184;
    font-size: 14px;
    line-height: 1.8;
}

.gp-faq-item.active .gp-faq-answer {
    display: block;
}

.gp-faq-item.active .gp-faq-icon {
    transform: rotate(180deg);
}

/* Location CTA */

.gp-location-box {
    background: #fff;
    border: 1px solid #e8edf2;
    border-radius: 16px;
    padding: 28px;
}

.gp-location-box h2 {
    color: #173f68;
    font-size: 24px;
    font-weight: 850;
    margin: 0 0 12px;
}

.gp-location-box p {
    color: #647286;
    font-size: 15px;
    line-height: 1.8;
    margin: 0 0 18px;
}

/* Responsive */

@media (max-width: 900px) {
    .gp-hero-grid {
        grid-template-columns: 1fr;
    }

    .gp-doctor-card {
        position: static;
    }

    .gp-facility-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 600px) {
    .gp-container {
        width: min(100% - 24px, 1160px);
    }

    .gp-section {
        padding: 34px 0;
    }

    .gp-hero {
        padding: 25px 0;
    }

    .gp-hero-content,
    .gp-content-card,
    .gp-faq-card {
        padding: 23px 19px;
    }

    .gp-highlight-list,
    .gp-facility-grid,
    .gp-checklist {
        grid-template-columns: 1fr;
    }

    .gp-hero-actions {
        flex-direction: column;
    }

    .gp-hero-actions .gp-btn {
        width: 100%;
    }

    .gp-insurance-cta {
        padding: 25px 20px;
    }

    .gp-insurance-cta::after {
        right: 12px;
        font-size: 100px;
    }

    .gp-insurance-cta .gp-btn {
        width: 100%;
    }

    .gp-hours-table th,
    .gp-hours-table td {
        padding: 12px 10px;
        font-size: 12px;
    }

    .gp-nabh-card {
        flex-direction: column;
    }
}
</style>

<!-- =========================================
     EMERGENCY BAR
========================================= -->

<div class="gp-emergency">
    Emergency 24×7:
    <a href="tel:<?php echo htmlspecialchars($phoneLink); ?>">
        <?php echo htmlspecialchars($emergencyPhone); ?>
    </a>
</div>

<!-- =========================================
     HEADER
========================================= -->

<?php include $rootPath . '/includes/header-v2.php'; ?>

<main class="gurugram-page">

    <!-- =====================================
         BREADCRUMB
    ====================================== -->

    <div class="gp-breadcrumb">
        <div class="gp-container">
            <nav aria-label="Breadcrumb">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li aria-hidden="true">›</li>
                    <li><a href="/haddi-ka-doctor/">Haddi Ka Doctor</a></li>
                    <li aria-hidden="true">›</li>
                    <li><a href="/haddi-ka-doctor/haryana/">Haryana</a></li>
                    <li aria-hidden="true">›</li>
                    <li aria-current="page">Gurugram</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- =====================================
         HERO + DOCTOR PROFILE
    ====================================== -->

    <section class="gp-hero">
        <div class="gp-container">
            <div class="gp-hero-grid">

                <div class="gp-hero-content">

                    <span class="gp-eyebrow">
                        ORTHOPAEDIC CARE IN GURUGRAM
                    </span>

                    <h1>
                        गुरुग्राम में हड्डी और जोड़ों के विशेषज्ञ डॉक्टर
                    </h1>

                    <p>
                        हड्डियों, जोड़ों, घुटनों, कूल्हों या मांसपेशियों से जुड़ी
                        समस्या आपकी रोजमर्रा की जिंदगी को प्रभावित कर सकती है।
                        सही समय पर विशेषज्ञ से परामर्श लेना समस्या को समझने और
                        उचित उपचार की योजना बनाने में मदद करता है।
                    </p>

                    <p>
                        <strong>Akropolis Super Speciality Hospital, Gurugram</strong>
                        में आप Orthopaedic समस्याओं के लिए
                        <strong><?php echo htmlspecialchars($doctorName); ?></strong>
                        से परामर्श ले सकते हैं। वे अस्पताल में
                        Director & Head of Orthopedics के रूप में कार्यरत हैं।
                    </p>

                    <div class="gp-hero-actions">

                        <a
                            href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                            class="gp-btn"
                        >
                            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
                            Book an Appointment
                        </a>

                        <a
                            href="/doctors/dr-prateek-girotra"
                            class="gp-btn gp-btn-outline"
                        >
                            View Doctor Profile
                        </a>

                    </div>

                </div>

                <!-- DOCTOR PROFILE CARD -->

                <aside class="gp-doctor-card">

                    <?php if (!empty($doctorImage)): ?>
                        <img
                            src="<?php echo htmlspecialchars($doctorImage); ?>"
                            alt="<?php echo htmlspecialchars($doctorName); ?> - Orthopaedic Surgeon in Gurugram"
                            class="gp-doctor-image"
                            loading="eager"
                        >
                    <?php endif; ?>

                    <h2>
                        <?php echo htmlspecialchars($doctorName); ?>
                    </h2>

                    <div class="gp-doctor-role">
                        Director & Head of Orthopedics
                    </div>

                    <div class="gp-doctor-qualification">
                        <?php echo htmlspecialchars($doctorQualification); ?>
                    </div>

                    <a
                        href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                        class="gp-btn"
                        style="width:100%;"
                    >
                        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
                        Book Appointment
                    </a>

                    <div class="gp-doctor-details">

                        <div class="gp-doctor-detail">
                            <div class="gp-doctor-icon">
                                <?php echo getIcon('Award', 'h-5 w-5'); ?>
                            </div>
                            <div>
                                <strong>Experience</strong>
                                <span>
                                    <?php echo htmlspecialchars($doctorExperience); ?>
                                </span>
                            </div>
                        </div>

                        <div class="gp-doctor-detail">
                            <div class="gp-doctor-icon">
                                <?php echo getIcon('Clock', 'h-5 w-5'); ?>
                            </div>
                            <div>
                                <strong>OPD Timing</strong>
                                <span>
                                    <?php echo htmlspecialchars($doctorOpdTiming); ?>
                                </span>
                            </div>
                        </div>

                        <div class="gp-doctor-detail">
                            <div class="gp-doctor-icon">
                                <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
                            </div>
                            <div>
                                <strong>Hospital Location</strong>
                                <span>
                                    Sector 69, Gurugram, Haryana
                                </span>
                            </div>
                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </section>

    <!-- =====================================
         ORTHOPAEDIC SPECIALITIES
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>
                    हड्डी और जोड़ों से जुड़ी समस्याओं के लिए विशेषज्ञ देखभाल
                </h2>

                <p>
                    Orthopaedic समस्याओं का उपचार उनकी स्थिति, गंभीरता और
                    मरीज की स्वास्थ्य संबंधी जरूरतों के आधार पर तय किया जाता है।
                </p>
            </div>

            <div class="gp-content-card">

                <p>
                    Dr. Prateek Girotra, Akropolis Super Speciality Hospital
                    में Orthopedics विभाग का नेतृत्व करते हैं। उनकी विशेषज्ञता
                    हड्डियों और जोड़ों से जुड़ी कई स्थितियों के मूल्यांकन और
                    उपचार में है।
                </p>

                <ul class="gp-highlight-list">
                    <li>Knee Replacement</li>
                    <li>Hip Replacement</li>
                    <li>Sports Injury & Arthroscopy</li>
                    <li>Fracture & Trauma Care</li>
                    <li>Joint Pain Evaluation</li>
                    <li>Orthopaedic Consultation</li>
                </ul>

                <p>
                    यदि आपको लगातार दर्द, सूजन, चलने में परेशानी, जोड़ों में
                    अकड़न या चोट के बाद असुविधा हो रही है, तो Orthopaedic
                    Specialist से परामर्श लेना उचित हो सकता है।
                </p>

            </div>

        </div>
    </section>

    <!-- =====================================
         HOSPITAL FACILITIES
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>
                    Akropolis Super Speciality Hospital में उपलब्ध सुविधाएं
                </h2>

                <p>
                    मरीजों को जांच, उपचार और देखभाल के लिए अस्पताल में
                    विभिन्न चिकित्सा सुविधाएं उपलब्ध हैं।
                </p>
            </div>

            <div class="gp-facility-grid">

                <div class="gp-facility-card">
                    <h3>24×7 Emergency Services</h3>
                    <p>
                        दुर्घटना, गंभीर चोट या अन्य आपातकालीन स्थिति में
                        चौबीसों घंटे Emergency सहायता उपलब्ध है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Diagnostic Support</h3>
                    <p>
                        मरीजों की चिकित्सकीय जरूरत के अनुसार जांच और
                        Diagnostic Services उपलब्ध हैं।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Orthopaedic Consultation</h3>
                    <p>
                        हड्डियों, जोड़ों, मांसपेशियों और चोट से जुड़ी
                        समस्याओं के लिए विशेषज्ञ परामर्श।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Modern Operation Theatres</h3>
                    <p>
                        जरूरत के अनुसार सर्जिकल प्रक्रियाओं के लिए
                        आधुनिक Operation Theatre सुविधाएं।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Physiotherapy Support</h3>
                    <p>
                        डॉक्टर की सलाह के अनुसार रिकवरी और पुनर्वास
                        के लिए Physiotherapy सहायता।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Insurance Assistance</h3>
                    <p>
                        पात्र स्वास्थ्य बीमा पॉलिसियों के लिए Cashless
                        Insurance और TPA प्रक्रिया में सहायता।
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         HOSPITAL OPERATING HOURS
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>
                    Hospital Operating Hours
                </h2>

                <p>
                    अस्पताल की विभिन्न सेवाओं के सामान्य संचालन समय की जानकारी।
                    डॉक्टर की OPD Timing अलग हो सकती है।
                </p>
            </div>

            <table class="gp-hours-table">
                <thead>
                    <tr>
                        <th>Department / Service</th>
                        <th>Operating Hours</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Emergency Services</td>
                        <td>24×7</td>
                    </tr>

                    <tr>
                        <td>OPD Services</td>
                        <td>8:00 AM – 8:00 PM</td>
                    </tr>

                    <tr>
                        <td>Laboratory</td>
                        <td>24×7</td>
                    </tr>

                    <tr>
                        <td>Pharmacy</td>
                        <td>24×7</td>
                    </tr>

                    <tr>
                        <td>Radiology</td>
                        <td>24×7</td>
                    </tr>

                    <tr>
                        <td>Dialysis Centre</td>
                        <td>24×7</td>
                    </tr>
                </tbody>
            </table>

            <p style="font-size:12px;color:#718096;margin-top:12px;line-height:1.7;">
                कृपया किसी विशेष जांच, डॉक्टर की उपलब्धता या OPD Appointment
                के लिए अस्पताल से पहले संपर्क करके पुष्टि करें।
            </p>

        </div>
    </section>

    <!-- =====================================
         CASHLESS INSURANCE CTA
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-insurance-cta">

                <div class="gp-insurance-content">

                    <span class="gp-insurance-label">
                        INSURANCE & TPA ASSISTANCE
                    </span>

                    <h2>
                        Cashless Treatment Facility Available
                    </h2>

                    <p>
                        Worried about managing hospital expenses?
                        Akropolis Super Speciality Hospital provides
                        cashless treatment assistance for eligible
                        health insurance policies through its
                        insurance and TPA support process.
                    </p>

                    <div class="gp-insurance-points">
                        <span>✓ Cashless Insurance Assistance</span>
                        <span>✓ TPA Coordination</span>
                        <span>✓ Pre-authorisation Support</span>
                    </div>

                    <a
                        href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                        class="gp-btn"
                    >
                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>
                        Check Cashless Insurance Eligibility
                    </a>

                    <p class="gp-insurance-note">
                        Cashless approval is subject to policy coverage,
                        insurer/TPA network eligibility and pre-authorisation.
                        Please contact our team to confirm the applicable process.
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         NABH ACCREDITATION
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>
                    NABH Accreditation
                </h2>

                <p>
                    Akropolis Super Speciality Hospital follows
                    established healthcare quality and patient-safety processes.
                </p>
            </div>

            <div class="gp-nabh-card">

                <div class="gp-doctor-icon">
                    <?php echo getIcon('ShieldCheck', 'h-7 w-7'); ?>
                </div>

                <div>
                    <h3>
                        NABH Entry Level Accreditation
                    </h3>

                    <p>
                        Akropolis Super Speciality Hospital holds
                        NABH Entry Level accreditation under the
                        Small Healthcare Organisation (SHCO) category.
                        Certificate number: PESHCO-2025-10797.
                        The certificate validity stated in the supplied
                        accreditation details is 22 April 2025 to
                        21 April 2027.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         PATIENT CHECKLIST
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>
                    डॉक्टर से मिलने से पहले इन बातों का ध्यान रखें
                </h2>

                <p>
                    अपनी Consultation को अधिक उपयोगी बनाने के लिए
                    जरूरी मेडिकल जानकारी साथ लेकर आएं।
                </p>
            </div>

            <div class="gp-checklist">

                <div class="gp-checklist-item">
                    <strong>1. Previous Reports:</strong>
                    पुराने X-ray, MRI, CT Scan और अन्य जांच रिपोर्ट साथ लाएं।
                </div>

                <div class="gp-checklist-item">
                    <strong>2. Medical History:</strong>
                    पहले हुई सर्जरी, चोट या पुरानी बीमारी की जानकारी दें।
                </div>

                <div class="gp-checklist-item">
                    <strong>3. Current Medicines:</strong>
                    वर्तमान में ली जा रही दवाओं की सूची साथ रखें।
                </div>

                <div class="gp-checklist-item">
                    <strong>4. Insurance Details:</strong>
                    Cashless सुविधा के लिए Health Insurance Card और
                    पॉलिसी की जानकारी साथ रखें।
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         LOCATION AND CONTACT
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-location-box">

                <h2>
                    Akropolis Super Speciality Hospital, Gurugram
                </h2>

                <p>
                    Akropolis Super Speciality Hospital, Sector 69,
                    Gurugram, Haryana में स्थित है। Dr. Prateek Girotra
                    से Orthopaedic Consultation के लिए अस्पताल से
                    संपर्क करके OPD Timing और Appointment की पुष्टि करें।
                </p>

                <p>
                    <strong>Address:</strong>
                    <?php echo htmlspecialchars($hospitalAddress); ?>
                </p>

                <div class="gp-hero-actions">

                    <a
                        href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                        class="gp-btn"
                    >
                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>
                        Call Hospital
                    </a>

                    <a
                        href="https://www.google.com/maps/search/?api=1&query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="gp-btn gp-btn-outline"
                    >
                        <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
                        Get Directions
                    </a>

                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         FAQ SECTION
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-faq-card">

                <h2>
                    अक्सर पूछे जाने वाले प्रश्न (FAQs)
                </h2>

                <?php foreach ($faqs as $index => $faq): ?>

                    <div class="gp-faq-item">

                        <button
                            type="button"
                            class="gp-faq-question"
                            aria-expanded="false"
                            aria-controls="gp-faq-answer-<?php echo $index; ?>"
                        >

                            <span>
                                <?php echo htmlspecialchars($faq['q']); ?>
                            </span>

                            <span class="gp-faq-icon" aria-hidden="true">
                                +
                            </span>

                        </button>

                        <div
                            class="gp-faq-answer"
                            id="gp-faq-answer-<?php echo $index; ?>"
                        >
                            <?php echo htmlspecialchars($faq['a']); ?>
                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- =====================================
         FINAL APPOINTMENT CTA
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-insurance-cta">

                <div class="gp-insurance-content">

                    <span class="gp-insurance-label">
                        ORTHOPAEDIC CONSULTATION
                    </span>

                    <h2>
                        हड्डियों और जोड़ों की समस्या को नजरअंदाज न करें
                    </h2>

                    <p>
                        अपनी समस्या के मूल्यांकन और उपचार के विकल्पों
                        पर चर्चा करने के लिए Dr. Prateek Girotra से
                        Appointment बुक करें।
                    </p>

                    <a
                        href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                        class="gp-btn"
                    >
                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>
                        Call to Book an Appointment
                    </a>

                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         STRUCTURED DATA
    ====================================== -->

    <script type="application/ld+json">
        <?php
        echo json_encode(
            $physicianSchema,
            $schemaFlags | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
        ?>
    </script>

    <script type="application/ld+json">
        <?php
        echo json_encode(
            $faqSchema,
            $schemaFlags | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
        ?>
    </script>

</main>

<!-- =========================================
     FAQ INTERACTION
========================================= -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    const faqItems = document.querySelectorAll('.gp-faq-item');

    faqItems.forEach(function (item) {

        const button = item.querySelector('.gp-faq-question');

        button.addEventListener('click', function () {

            const isOpen = item.classList.contains('active');

            // Close all FAQ items
            faqItems.forEach(function (otherItem) {
                otherItem.classList.remove('active');

                const otherButton = otherItem.querySelector('.gp-faq-question');
                const otherIcon = otherItem.querySelector('.gp-faq-icon');

                otherButton.setAttribute('aria-expanded', 'false');
                otherIcon.textContent = '+';
            });

            // Open selected FAQ item
            if (!isOpen) {
                item.classList.add('active');
                button.setAttribute('aria-expanded', 'true');
                item.querySelector('.gp-faq-icon').textContent = '−';
            }

        });

    });

});
</script>

<?php
// =========================================
// FOOTER AND GLOBAL SCRIPTS
// =========================================

include $rootPath . '/includes/footer.php';
include $rootPath . '/includes/scripts.php';
?>