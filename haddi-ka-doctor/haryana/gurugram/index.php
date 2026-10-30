<?php
/**
 * Gurugram Haddi Ka Doctor Landing Page
 * Akropolis Super Speciality Hospital
 * File: /haddi-ka-doctor/haryana/gurugram/index.php
 */

// ==================================================
// 1. LOAD SHARED WEBSITE DATA
// ==================================================

$rootPath = dirname(__DIR__, 3);

require_once $rootPath . '/includes/data.php';

// ==================================================
// 2. SEO METADATA
// ==================================================

$page_title = 'गुरुग्राम में सबसे अच्छा हड्डी का डॉक्टर | डॉ. प्रतीक गिरोत्रा';

$page_description = 'गुरुग्राम में सबसे अच्छे हड्डी के डॉक्टर की तलाश है? हड्डियों और जोड़ों की समस्याओं के विशेषज्ञ परामर्श के लिए डॉ. प्रतीक गिरोत्रा से मिलें।';

$canonical_url = '/haddi-ka-doctor/haryana/gurugram/';

// ==================================================
// 3. FIND DOCTOR
// ==================================================

$doctor = null;

foreach ($doctors as $d) {
    if (($d['id'] ?? '') === 'dr-prateek-girotra') {
        $doctor = $d;
        break;
    }
}

if (!$doctor) {
    http_response_code(404);

    $page_title = 'Doctor Not Found | Akropolis Super Speciality Hospital';
    $page_description = 'Doctor information is currently unavailable. Contact Akropolis Super Speciality Hospital for assistance.';
    $canonical_url = '/haddi-ka-doctor/haryana/gurugram/';

    include $rootPath . '/includes/head.php';
    include $rootPath . '/includes/header-v2.php';
    ?>

    <main style="padding:80px 20px;text-align:center;">
        <h1>Doctor information is currently unavailable.</h1>
        <p>Please contact Akropolis Super Speciality Hospital for assistance.</p>
        <a href="/" class="gp-btn">Go to Homepage</a>
    </main>

    <?php
    include $rootPath . '/includes/footer.php';
    include $rootPath . '/includes/scripts.php';
    exit;
}

// ==================================================
// 4. CONTACT AND DOCTOR INFORMATION
// ==================================================

$hospitalPhone = CONTACT_INFO['phone'] ?? '';
$emergencyPhone = CONTACT_INFO['emergency'] ?? $hospitalPhone;
$hospitalAddress = CONTACT_INFO['address'] ?? 'Sector 69, Gurugram, Haryana';

$doctorName = $doctor['name'] ?? 'Dr. Prateek Girotra';
$doctorImage = $doctor['image'] ?? '';
$doctorQualification = $doctor['qualification'] ?? 'MBBS, MS Orthopaedics';
$doctorExperience = $doctor['experience'] ?? '10+ Years';
$doctorOpdTiming = $doctor['opdTiming'] ?? 'Please call the hospital to confirm OPD timings';

$phoneLink = preg_replace('/[^0-9+]/', '', $hospitalPhone);

// ==================================================
// FAQ CONTENT - PATIENT-FOCUSED
// ==================================================

$faqs = [

    [
        'q' => 'हड्डियों या जोड़ों में दर्द होने पर ऑर्थोपेडिक डॉक्टर से कब मिलना चाहिए?',
        'a' => 'यदि आपको लगातार घुटने, कूल्हे, कंधे या पीठ में दर्द रहता है, जोड़ों में अकड़न या सूजन होती है, चलने-फिरने में परेशानी होती है या चोट के बाद दर्द कम नहीं हो रहा है, तो ऑर्थोपेडिक डॉक्टर से परामर्श लें। समय पर जांच कराने से समस्या का कारण समझने और उचित उपचार की योजना बनाने में मदद मिलती है।'
    ],

    [
        'q' => 'ऑर्थोपेडिक डॉक्टर किन बीमारियों और समस्याओं का इलाज करते हैं?',
        'a' => 'ऑर्थोपेडिक विशेषज्ञ हड्डियों, जोड़ों, मांसपेशियों, लिगामेंट और रीढ़ से जुड़ी समस्याओं का मूल्यांकन करते हैं। इनमें Arthritis, Knee Pain, Hip Pain, Fracture, Sports Injuries, Ligament Injuries और कुछ Spine Disorders शामिल हैं। उपचार मरीज की स्थिति और जांच के आधार पर तय किया जाता है।'
    ],

    [
        'q' => 'क्या घुटने या कूल्हे के दर्द में Joint Replacement Surgery जरूरी होती है?',
        'a' => 'नहीं, हर मरीज को Joint Replacement Surgery की जरूरत नहीं होती। डॉक्टर पहले दर्द का कारण, जोड़ की स्थिति, चलने-फिरने की क्षमता और जांच रिपोर्ट का मूल्यांकन करते हैं। कुछ मरीजों को दवाओं, Physiotherapy या अन्य गैर-सर्जिकल उपचारों से लाभ मिल सकता है। सर्जरी की सलाह तभी दी जाती है जब चिकित्सकीय रूप से इसकी जरूरत हो।'
    ],

    [
        'q' => 'Sports Injury या लिगामेंट की चोट होने पर क्या करना चाहिए?',
        'a' => 'खेल के दौरान चोट लगने पर प्रभावित हिस्से पर अनावश्यक दबाव न डालें और दर्द या सूजन को नजरअंदाज न करें। यदि तेज दर्द, अस्थिरता, अधिक सूजन या चलने में परेशानी हो, तो डॉक्टर से जांच कराएं। जरूरत के अनुसार जांच और उपचार के विकल्पों में Physiotherapy, Rehabilitation या Arthroscopy जैसी प्रक्रियाएं शामिल हो सकती हैं।'
    ],

    [
        'q' => 'फ्रैक्चर होने पर किन लक्षणों में तुरंत अस्पताल जाना चाहिए?',
        'a' => 'दुर्घटना या गिरने के बाद तेज दर्द, गंभीर सूजन, हाथ या पैर में असामान्य विकृति, अंग का उपयोग न कर पाना या खुले घाव के साथ हड्डी टूटने की आशंका होने पर तुरंत मेडिकल सहायता लें। हाथ-पैर में सुन्नपन या ठंडापन भी गंभीर संकेत हो सकते हैं। ऐसी स्थिति में अस्पताल की Emergency Services का उपयोग करें।'
    ],

    [
        'q' => 'Dr. Prateek Girotra से परामर्श लेते समय कौन-सी रिपोर्ट साथ लानी चाहिए?',
        'a' => 'अपनी पुरानी X-ray, MRI, CT Scan और अन्य जांच रिपोर्ट साथ लेकर आएं। यदि पहले किसी प्रकार का उपचार या सर्जरी हुई है, तो उसकी जानकारी और वर्तमान में ली जा रही दवाओं की सूची भी रखें। इससे डॉक्टर को आपकी मेडिकल हिस्ट्री समझने और आगे की जांच या उपचार तय करने में मदद मिल सकती है।'
    ],

    [
        'q' => 'हड्डियों की सर्जरी के बाद क्या Physiotherapy की जरूरत पड़ती है?',
        'a' => 'कुछ ऑर्थोपेडिक सर्जरी और चोटों के बाद रिकवरी के लिए Physiotherapy और Rehabilitation की जरूरत हो सकती है। इससे मरीज को जोड़ों की गति, मांसपेशियों की ताकत और दैनिक गतिविधियों में सुधार करने में मदद मिल सकती है। इसका समय और तरीका सर्जरी तथा मरीज की स्थिति के अनुसार डॉक्टर तय करते हैं।'
    ],

    [
        'q' => 'क्या Akropolis Super Speciality Hospital में Cashless Insurance की सुविधा उपलब्ध है?',
        'a' => 'हाँ, अस्पताल में पात्र Health Insurance Policies के लिए Cashless Treatment की सुविधा उपलब्ध है। इसके लिए अपना Health Insurance Card और पॉलिसी की जानकारी साथ रखें। Cashless सुविधा की पुष्टि Insurer या TPA की नेटवर्क पात्रता, पॉलिसी कवरेज और Pre-authorisation के आधार पर की जाती है। अधिक जानकारी के लिए अस्पताल की टीम से संपर्क करें।'
    ],

    [
        'q' => 'Dr. Prateek Girotra की OPD Appointment और अस्पताल की Emergency Services की जानकारी कैसे प्राप्त करें?',
        'a' => 'Dr. Prateek Girotra की उपलब्धता और OPD Appointment के लिए Akropolis Super Speciality Hospital से फोन पर संपर्क करें। अस्पताल में Emergency Services 24×7 उपलब्ध हैं। गंभीर चोट या दुर्घटना की स्थिति में OPD Appointment की प्रतीक्षा करने के बजाय तुरंत Emergency सहायता लें।'
    ]

];

// ==================================================
// 6. STRUCTURED DATA
// ==================================================
// ==================================================
// WEBPAGE STRUCTURED DATA
// ==================================================

$webPageSchema = [

    '@context' => 'https://schema.org',

    '@type' => 'WebPage',

    '@id' => 'https://akropolishospital.com/haddi-ka-doctor/haryana/gurugram/#webpage',

    'url' => 'https://akropolishospital.com/haddi-ka-doctor/haryana/gurugram/',

    'name' => 'गुरुग्राम में सबसे अच्छा हड्डी का डॉक्टर | डॉ. प्रतीक गिरोत्रा',

    'description' => $page_description,

    'inLanguage' => 'hi-IN',

    'about' => [
        '@type' => 'MedicalSpecialty',
        'name' => 'Orthopedics'
    ],

    'publisher' => [
        '@type' => 'Organization',
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

// ==================================================
// 7. WEBSITE HEAD
// ==================================================

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
    line-height: 1.35;
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

.gp-btn-outline {
    background: #fff;
    color: #328ccb !important;
    border: 1px solid #328ccb;
}

.gp-btn-outline:hover {
    background: #eef7fc;
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

/* Breadcrumb */

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
.gp-faq-card,
.gp-location-box {
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
    line-height: 1.4;
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

/* Content cards */

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
    line-height: 1.8;
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
    line-height: 1.4;
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

/* Location */

.gp-location-box {
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

/* =========================================
   HINDI TEXT READABILITY IMPROVEMENTS
========================================= */

/* Main Hindi paragraphs */
.gurugram-page p {
    color: #405166;
    font-size: 16px;
    font-weight: 450;
    line-height: 1.95;
}

/* Hero description */
.gp-hero-content p {
    color: #35485e;
    font-size: 17px;
    font-weight: 500;
    line-height: 1.95;
}

/* Section descriptions */
.gp-section-heading p {
    color: #526174;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.85;
}

/* Main content paragraphs */
.gp-content-card p {
    color: #405166;
    font-size: 16px;
    font-weight: 450;
    line-height: 1.95;
}

/* Facility card descriptions */
.gp-facility-card p {
    color: #46576b;
    font-size: 15px;
    font-weight: 500;
    line-height: 1.85;
}

/* Facility card headings */
.gp-facility-card h3 {
    color: #173f68;
    font-size: 18px;
    font-weight: 750;
    line-height: 1.5;
}

/* Lists and highlighted content */
.gp-content-card li {
    color: #405166;
    font-size: 16px;
    font-weight: 500;
    line-height: 1.85;
}

/* Highlighted service boxes */
.gp-highlight-list li {
    color: #263f57;
    font-size: 15px;
    font-weight: 650;
    line-height: 1.7;
}

/* FAQ questions */
.gp-faq-question {
    color: #263f57;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.7;
}

/* FAQ answers */
.gp-faq-answer {
    color: #405166;
    font-size: 15px;
    font-weight: 450;
    line-height: 1.95;
}

/* Doctor profile details */
.gp-doctor-qualification,
.gp-doctor-detail span {
    color: #526174;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.8;
}

/* Patient checklist */
.gp-checklist-item {
    color: #405166;
    font-size: 15px;
    font-weight: 450;
    line-height: 1.85;
}

/* Operating hours */
.gp-hours-table td {
    color: #405166;
    font-size: 15px;
    font-weight: 500;
}

/* Location information */
.gp-location-box p {
    color: #405166;
    font-size: 16px;
    line-height: 1.9;
}

/* NABH content */
.gp-nabh-card p {
    color: #405166;
    font-size: 15px;
    font-weight: 450;
    line-height: 1.9;
}

/* Insurance CTA supporting text */
.gp-insurance-cta p {
    color: #fff;
    font-size: 16px;
    font-weight: 450;
    line-height: 1.9;
}

/* =========================================
   MOBILE READABILITY
========================================= */

@media (max-width: 600px) {

    .gurugram-page p,
    .gp-content-card p,
    .gp-location-box p {
        font-size: 16px;
        line-height: 1.9;
    }

    .gp-hero-content p {
        font-size: 16px;
        line-height: 1.9;
    }

    .gp-section-heading p {
        font-size: 15px;
        line-height: 1.85;
    }

    .gp-facility-card p,
    .gp-faq-answer,
    .gp-checklist-item {
        font-size: 15px;
        line-height: 1.85;
    }

    .gp-faq-question {
        font-size: 15px;
        line-height: 1.7;
    }

    .gp-highlight-list li {
        font-size: 15px;
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
                        गुरुग्राम में सबसे अच्छा हड्डी का डॉक्टर
                    </h1>

                    <p>
                        यदि आप <strong>गुरुग्राम में सबसे अच्छे हड्डी के डॉक्टर</strong>
                        की तलाश कर रहे हैं, तो सही विशेषज्ञ से परामर्श लेना
                        आपकी हड्डियों और जोड़ों की समस्या को समझने की दिशा में
                        एक महत्वपूर्ण कदम है।
                    </p>

                    <p>
                        <strong>Akropolis Super Speciality Hospital</strong>
                        में <strong>Dr. Prateek Girotra</strong> हड्डियों,
                        जोड़ों, घुटनों, कूल्हों, फ्रैक्चर और स्पोर्ट्स इंजरी
                        से संबंधित समस्याओं के लिए ऑर्थोपेडिक परामर्श देते हैं।
                        वे अस्पताल में Director & Head of Orthopedics के रूप
                        में कार्यरत हैं।
                    </p>

                    <p>
                        उपचार की योजना मरीज की स्थिति, मेडिकल हिस्ट्री और
                        आवश्यक जांच के आधार पर तय की जाती है।
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
                            alt="<?php echo htmlspecialchars($doctorName); ?> - Orthopaedic Doctor in Gurugram"
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
                                <span>Sector 69, Gurugram, Haryana</span>
                            </div>
                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </section>

    <!-- =====================================
         ORTHOPAEDIC EXPERTISE
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>हड्डियों और जोड़ों की समस्याओं के लिए विशेषज्ञ देखभाल</h2>
                <p>
                    Orthopaedic समस्याओं का उपचार उनकी स्थिति, गंभीरता
                    और मरीज की स्वास्थ्य संबंधी जरूरतों के आधार पर तय किया जाता है।
                </p>
            </div>

            <div class="gp-content-card">

                <p>
                    Dr. Prateek Girotra, Akropolis Super Speciality Hospital
                    में Orthopedics विभाग का नेतृत्व करते हैं। उनकी विशेषज्ञता
                    हड्डियों और जोड़ों से जुड़ी विभिन्न स्थितियों के मूल्यांकन
                    और उपचार में है।
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
                    यदि आपको लगातार दर्द, सूजन, चलने में परेशानी,
                    जोड़ों में अकड़न या चोट के बाद असुविधा हो रही है,
                    तो Orthopaedic Specialist से परामर्श लेना उचित हो सकता है।
                </p>

            </div>

        </div>
    </section>

    <!-- =====================================
         COMPREHENSIVE ORTHOPAEDIC CARE
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>गुरुग्राम में हड्डियों और जोड़ों की व्यापक देखभाल</h2>
                <p>
                    हड्डियों, जोड़ों, मांसपेशियों और रीढ़ से जुड़ी समस्याओं के
                    मूल्यांकन और उपचार के लिए विशेषज्ञ ऑर्थोपेडिक देखभाल।
                </p>
            </div>

            <div class="gp-content-card">

                <p>
                    यदि आप <strong>हड्डी का डॉक्टर गुरुग्राम</strong>
                    खोज रहे हैं, तो डॉक्टर की विशेषज्ञता, अस्पताल में उपलब्ध
                    सुविधाओं और आपकी समस्या के अनुसार उपचार विकल्पों को समझना
                    जरूरी है।
                </p>

                <p>
                    Akropolis Super Speciality Hospital में ऑर्थोपेडिक
                    सेवाओं के अंतर्गत मरीजों की हड्डियों और जोड़ों से संबंधित
                    समस्याओं का मूल्यांकन किया जाता है। उपचार की योजना
                    मरीज की उम्र, स्वास्थ्य, मेडिकल हिस्ट्री और जांच रिपोर्ट
                    के आधार पर बनाई जाती है।
                </p>

                <div class="gp-facility-grid">

                    <div class="gp-facility-card">
                        <h3>Advanced Operation Theatres</h3>
                        <p>
                            ऑर्थोपेडिक सर्जरी और संबंधित प्रक्रियाओं के लिए
                            ऑपरेशन थिएटर की सुविधाएं।
                        </p>
                    </div>

                    <div class="gp-facility-card">
                        <h3>Expert Orthopaedic Care</h3>
                        <p>
                            हड्डियों, जोड़ों, फ्रैक्चर और स्पोर्ट्स इंजरी
                            से जुड़ी समस्याओं का विशेषज्ञ मूल्यांकन।
                        </p>
                    </div>

                    <div class="gp-facility-card">
                        <h3>24×7 Emergency Support</h3>
                        <p>
                            दुर्घटना, गंभीर चोट और अन्य आपातकालीन स्थितियों
                            में चौबीसों घंटे Emergency Services।
                        </p>
                    </div>

                    <div class="gp-facility-card">
                        <h3>NABH Accreditation</h3>
                        <p>
                            अस्पताल में NABH Level Accreditation
                            के अंतर्गत निर्धारित गुणवत्ता और सुरक्षा प्रक्रियाएं।
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         ORTHOPAEDIC TREATMENT APPROACHES
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>ऑर्थोपेडिक उपचार के लिए अलग-अलग तरीके</h2>
                <p>
                    हर मरीज की स्थिति अलग होती है। उपचार का तरीका
                    समस्या और चिकित्सकीय जांच के अनुसार निर्धारित किया जाता है।
                </p>
            </div>

            <div class="gp-facility-grid">

                <div class="gp-facility-card">
                    <h3>Minimally Invasive Surgery</h3>
                    <p>
                        कुछ ऑर्थोपेडिक समस्याओं में छोटे चीरे और विशेष
                        सर्जिकल तकनीकों के माध्यम से उपचार किया जा सकता है।
                        इसकी उपयुक्तता डॉक्टर तय करते हैं।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Joint Preservation</h3>
                    <p>
                        जोड़ों की कार्यक्षमता बनाए रखने और उनकी स्थिति में
                        सुधार करने के लिए मरीज की जरूरत के अनुसार उपचार
                        विकल्पों पर विचार किया जाता है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Pain Management</h3>
                    <p>
                        घुटने, कूल्हे, कंधे और अन्य जोड़ों के दर्द के कारण
                        का मूल्यांकन करके उचित उपचार योजना बनाई जाती है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Rehabilitation & Recovery</h3>
                    <p>
                        सर्जरी या चोट के बाद डॉक्टर की सलाह के अनुसार
                        Physiotherapy और Rehabilitation की सहायता से
                        रिकवरी की योजना बनाई जा सकती है।
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         ORTHOPAEDIC SERVICES
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>गुरुग्राम में उपलब्ध ऑर्थोपेडिक सेवाएं</h2>
                <p>
                    हड्डियों और जोड़ों से जुड़ी विभिन्न समस्याओं के लिए
                    विशेषज्ञ परामर्श और उपचार विकल्प।
                </p>
            </div>

            <div class="gp-facility-grid">

                <div class="gp-facility-card">
                    <h3>Joint Replacement Surgery</h3>
                    <p>
                        गंभीर रूप से प्रभावित घुटने या कूल्हे के जोड़ के लिए
                        Knee Replacement और Hip Replacement जैसे विकल्पों
                        का मूल्यांकन।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Sports Injury Treatment</h3>
                    <p>
                        खेल या शारीरिक गतिविधियों के दौरान होने वाली
                        Ligament, Muscle और Joint Injuries का मूल्यांकन
                        और उपचार।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Spine Surgery</h3>
                    <p>
                        रीढ़ की हड्डी और उससे संबंधित समस्याओं के लिए
                        विशेषज्ञ मूल्यांकन और आवश्यक उपचार विकल्प।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Arthroscopy</h3>
                    <p>
                        जोड़ों से जुड़ी कुछ समस्याओं के निदान और उपचार
                        के लिए Arthroscopy प्रक्रिया पर विचार किया जा सकता है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Fracture Care</h3>
                    <p>
                        दुर्घटना या चोट के कारण होने वाले फ्रैक्चर का
                        मूल्यांकन और उचित उपचार योजना।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Paediatric Orthopaedics</h3>
                    <p>
                        बच्चों की हड्डियों, जोड़ों और विकास से संबंधित
                        ऑर्थोपेडिक समस्याओं का मूल्यांकन।
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         ORTHOPAEDIC CONDITIONS
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>हड्डियों और जोड़ों की किन समस्याओं का मूल्यांकन किया जाता है?</h2>
                <p>
                    लगातार दर्द, चोट या चलने-फिरने में परेशानी होने पर
                    ऑर्थोपेडिक विशेषज्ञ से परामर्श लें।
                </p>
            </div>

            <div class="gp-content-card">

                <ul class="gp-highlight-list">
                    <li>Arthritis और Joint Stiffness</li>
                    <li>Fractures और Dislocations</li>
                    <li>Knee Pain और Hip Pain</li>
                    <li>Tendonitis और Bursitis</li>
                    <li>Ligament Injuries</li>
                    <li>Sports Injuries</li>
                    <li>ACL और MCL Injuries</li>
                    <li>Rotator Cuff Injuries</li>
                    <li>Back Pain और Spinal Disorders</li>
                    <li>Carpal Tunnel Syndrome</li>
                    <li>Bone Tumours</li>
                    <li>Osteoporosis</li>
                </ul>

                <p>
                    इन समस्याओं के लक्षण एक-दूसरे से मिलते-जुलते हो सकते हैं।
                    इसलिए सही निदान के लिए डॉक्टर की जांच और जरूरत के अनुसार
                    मेडिकल टेस्ट महत्वपूर्ण हैं।
                </p>

            </div>

        </div>
    </section>

    <!-- =====================================
         EMERGENCY WARNING SIGNS
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>ऑर्थोपेडिक इमरजेंसी के संकेत जिन्हें नजरअंदाज न करें</h2>
                <p>
                    कुछ चोटों और लक्षणों में तुरंत मेडिकल सहायता की जरूरत हो सकती है।
                </p>
            </div>

            <div class="gp-content-card">

                <ul>
                    <li>
                        दुर्घटना या गिरने के बाद तेज दर्द और गंभीर सूजन।
                    </li>
                    <li>
                        हाथ या पैर में असामान्य आकार या स्पष्ट विकृति।
                    </li>
                    <li>
                        चोट के बाद प्रभावित अंग पर वजन रखने या चलने में असमर्थता।
                    </li>
                    <li>
                        खुले घाव के साथ हड्डी टूटने की आशंका।
                    </li>
                    <li>
                        चोट के बाद हाथ या पैर में सुन्नपन, कमजोरी या ठंडापन।
                    </li>
                </ul>

                <p>
                    ऐसे लक्षण होने पर तुरंत Emergency Medical Care लें।
                    Akropolis Super Speciality Hospital में 24×7 Emergency
                    Services उपलब्ध हैं।
                </p>

                <a
                    href="tel:<?php echo htmlspecialchars($phoneLink); ?>"
                    class="gp-btn"
                >
                    Call Emergency Support
                </a>

            </div>

        </div>
    </section>

    <!-- =====================================
         PATIENT RESOURCES
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>मरीजों और परिवारों के लिए जरूरी जानकारी</h2>
                <p>
                    इलाज से पहले, उपचार के दौरान और रिकवरी के समय
                    मरीजों को सही जानकारी और मार्गदर्शन मिलना जरूरी है।
                </p>
            </div>

            <div class="gp-facility-grid">

                <div class="gp-facility-card">
                    <h3>Pre-Surgery Evaluation</h3>
                    <p>
                        सर्जरी से पहले मेडिकल हिस्ट्री, जांच रिपोर्ट और
                        स्वास्थ्य संबंधी जरूरतों का मूल्यांकन किया जाता है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Post-Operative Care</h3>
                    <p>
                        सर्जरी के बाद डॉक्टर की सलाह, फॉलो-अप और
                        रिकवरी संबंधी निर्देशों का पालन करना महत्वपूर्ण है।
                    </p>
                </div>

                <div class="gp-facility-card">
                    <h3>Physical Therapy Guidance</h3>
                    <p>
                        जरूरत के अनुसार Physiotherapy और निर्धारित
                        व्यायाम से शारीरिक गतिविधियों को बेहतर बनाने
                        में सहायता मिल सकती है।
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =====================================
         HOSPITAL FACILITIES
    ====================================== -->

    <section class="gp-section">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>Akropolis Super Speciality Hospital में उपलब्ध सुविधाएं</h2>
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
                        ऑपरेशन थिएटर सुविधाएं।
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
         OPERATING HOURS
    ====================================== -->

    <section class="gp-section gp-section-white">
        <div class="gp-container">

            <div class="gp-section-heading">
                <h2>Hospital Operating Hours</h2>
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
                <h2>NABH Accreditation</h2>
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
                    <h3>NABH Accreditation</h3>

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
                <h2>डॉक्टर से मिलने से पहले इन बातों का ध्यान रखें</h2>
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

                <h2>Akropolis Super Speciality Hospital, Gurugram</h2>

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

                <h2>अक्सर पूछे जाने वाले प्रश्न (FAQs)</h2>

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
    <!-- WebPage Schema -->
<script type="application/ld+json">
<?php
echo json_encode(
    $webPageSchema,
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

            faqItems.forEach(function (otherItem) {

                otherItem.classList.remove('active');

                const otherButton = otherItem.querySelector('.gp-faq-question');
                const otherIcon = otherItem.querySelector('.gp-faq-icon');

                otherButton.setAttribute('aria-expanded', 'false');
                otherIcon.textContent = '+';

            });

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

// ==================================================
// 8. FOOTER AND GLOBAL SCRIPTS
// ==================================================

include $rootPath . '/includes/footer.php';
include $rootPath . '/includes/scripts.php';

?>