<?php
/**
 * Dr. Anu Nagpal - Dedicated Doctor Profile Page
 * Akropolis Super Speciality Hospital
 *
 * URL:
 * https://akropolishospital.com/doctors/dr-anu-nagpal
 */

declare(strict_types=1);

$siteUrl = 'https://akropolishospital.com';
$pageUrl = $siteUrl . '/doctors/dr-anu-nagpal';

$doctorName = 'Dr. Anu Nagpal';
$doctorTitle = 'Obstetrician & Gynecologist';
$doctorCredentials = 'MBBS, MS - Obstetrics & Gynaecology';

$doctorImage = $siteUrl . '/assets/images/doctors/dr-anu-nagpal.jpg';
$hospitalImage = $siteUrl . '/assets/images/hospital/akropolis-hospital-building.jpg';
$logoImage = $siteUrl . '/assets/images/logo.png';

$hospitalName = 'Akropolis Super Speciality Hospital';
$hospitalAddress = 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101';

$hospitalPhone = '9100009744';
$doctorPhone = '9100009733';
$hospitalEmail = 'Info@akropolishospital.com';

$opdTiming = 'Monday to Saturday, 9:00 AM to 5:00 PM';

$pageTitle = 'Dr. Anu Nagpal | Obstetrician & Gynecologist in Gurugram | Akropolis Hospital';

$metaDescription =
    'Dr. Anu Nagpal is an Obstetrician & Gynecologist at Akropolis Super Speciality Hospital, Sector 69, Gurugram. MBBS, MS in Obstetrics & Gynaecology with 11+ years of experience.';

$keywords = [
    'Dr Anu Nagpal',
    'Dr Anu Nagpal gynecologist',
    'Obstetrician and Gynecologist in Gurgaon',
    'Gynecologist in Gurugram',
    'Obstetrician in Gurgaon',
    'Gynaecologist in Sector 69',
    'women health doctor Gurgaon',
    'Akropolis Super Speciality Hospital'
];

$areasOfCare = [
    [
        'title' => 'Obstetrics',
        'description' => 'Pregnancy-related consultations, assessment and care.'
    ],
    [
        'title' => 'Gynaecology',
        'description' => 'Evaluation and management of gynaecological concerns.'
    ],
    [
        'title' => "Women's Health",
        'description' => "Consultation for women's health needs across different life stages."
    ],
    [
        'title' => 'Pregnancy Care',
        'description' => 'Assessment, guidance and follow-up during pregnancy.'
    ],
    [
        'title' => 'General Evaluation',
        'description' => 'Clinical assessment and further investigation when required.'
    ]
];

$departmentServices = [
    'Maternity Care',
    'High-Risk Pregnancy Evaluation & Management',
    'Gynaecology Care',
    'Infertility Evaluation & Treatment, where indicated'
];

$consultationReasons = [
    'Menstrual health concerns',
    'Pregnancy planning or early pregnancy care',
    'Gynaecological symptoms or discomfort',
    "General women's health evaluation and guidance"
];

$resources = [
    [
        'title' => 'Pregnancy Guide',
        'description' => 'Helpful information for understanding pregnancy care and preparing for consultations.'
    ],
    [
        'title' => 'Post-Delivery Care',
        'description' => 'General guidance about recovery and care after delivery.'
    ],
    [
        'title' => "Women's Wellness",
        'description' => "General information about women's health and wellbeing."
    ]
];

$faqs = [
    [
        'question' => 'Who is Dr. Anu Nagpal?',
        'answer' => 'Dr. Anu Nagpal is an Obstetrician & Gynecologist at Akropolis Super Speciality Hospital in Sector 69, Gurugram. She has 11+ years of overall experience, including 7 years as a specialist.'
    ],
    [
        'question' => "What are Dr. Anu Nagpal's qualifications?",
        'answer' => 'Dr. Anu Nagpal has completed MBBS from Dr. B. R. Ambedkar University in 2013 and MS in Obstetrics & Gynaecology from MMU Mullana in 2016.'
    ],
    [
        'question' => 'How much experience does Dr. Anu Nagpal have?',
        'answer' => 'Dr. Anu Nagpal has 11+ years of overall experience, including 7 years as a specialist.'
    ],
    [
        'question' => 'Where does Dr. Anu Nagpal practise?',
        'answer' => 'Dr. Anu Nagpal practises at Akropolis Super Speciality Hospital near Vatika Chowk, opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101.'
    ],
    [
        'question' => 'What are Dr. Anu Nagpal’s OPD timings?',
        'answer' => 'Her listed OPD timing is Monday to Saturday, 9:00 AM to 5:00 PM.'
    ],
    [
        'question' => 'How can I book a consultation with Dr. Anu Nagpal?',
        'answer' => 'Patients can enquire about an appointment with Dr. Anu Nagpal through Akropolis Super Speciality Hospital using the appointment option on this page or by contacting the hospital.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <meta
        name="description"
        content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        name="keywords"
        content="<?= htmlspecialchars(implode(', ', $keywords), ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta name="robots" content="index, follow">

    <link
        rel="canonical"
        href="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <!-- Open Graph -->
    <meta
        property="og:type"
        content="profile"
    >

    <meta
        property="og:title"
        content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        property="og:description"
        content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        property="og:url"
        content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        property="og:image"
        content="<?= htmlspecialchars($doctorImage, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        property="og:site_name"
        content="<?= htmlspecialchars($hospitalName, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <!-- Twitter -->
    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        name="twitter:description"
        content="<?= htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <meta
        name="twitter:image"
        content="<?= htmlspecialchars($doctorImage, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Structured Data: Physician -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Physician',
        '@id' => $pageUrl . '#physician',
        'name' => $doctorName,
        'url' => $pageUrl,
        'image' => $doctorImage,
        'jobTitle' => $doctorTitle,
        'description' => $metaDescription,
        'medicalSpecialty' => [
            'https://schema.org/Obstetrics',
            'https://schema.org/Gynecologic'
        ],
        'worksFor' => [
            '@type' => 'Hospital',
            '@id' => $siteUrl . '/#hospital',
            'name' => $hospitalName,
            'url' => $siteUrl,
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69',
                'addressLocality' => 'Gurugram',
                'addressRegion' => 'Haryana',
                'postalCode' => '122101',
                'addressCountry' => 'IN'
            ]
        ],
        'affiliation' => [
            '@type' => 'Hospital',
            'name' => $hospitalName,
            'url' => $siteUrl
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69',
            'addressLocality' => 'Gurugram',
            'addressRegion' => 'Haryana',
            'postalCode' => '122101',
            'addressCountry' => 'IN'
        ],
        'telephone' => '+91-' . $doctorPhone,
        'availableService' => array_map(
            static function ($service) {
                return [
                    '@type' => 'MedicalProcedure',
                    'name' => $service
                ];
            },
            $departmentServices
        )
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <!-- Structured Data: Breadcrumb -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => $siteUrl . '/'
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Doctors',
                'item' => $siteUrl . '/doctors'
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $doctorName,
                'item' => $pageUrl
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <!-- Structured Data: FAQ -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(
            static function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['answer']
                    ]
                ];
            },
            $faqs
        )
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>

    <style>

        :root {
            --primary: #0c2b5e;
            --secondary: #0d72c7;
            --accent: #ed6b32;
            --green: #1e9b58;
            --text: #172033;
            --muted: #5d6878;
            --light: #f5f9fd;
            --border: #e2eaf2;
            --white: #ffffff;
            --shadow: 0 8px 28px rgba(18, 52, 86, 0.08);
            --radius: 16px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", Arial, sans-serif;
            color: var(--text);
            background: #ffffff;
            line-height: 1.65;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* Emergency Bar */

        .emergency-bar {
            background: var(--accent);
            color: #fff;
            text-align: center;
            padding: 8px 15px;
            font-size: 13px;
            font-weight: 600;
        }

        /* Header */

        header {
            background: #fff;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .nav {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .logo img {
            width: 175px;
            height: auto;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 26px;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: var(--secondary);
        }

        .nav-emergency {
            background: var(--accent);
            color: #fff;
            padding: 11px 18px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 13px;
        }

        .mobile-menu {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Breadcrumb */

        .breadcrumb {
            background: #f8fafc;
            border-bottom: 1px solid var(--border);
        }

        .breadcrumb-inner {
            padding: 15px 0;
            font-size: 13px;
            color: var(--muted);
        }

        .breadcrumb-inner a {
            color: var(--secondary);
        }

        /* Hero */

        .doctor-hero {
            background:
                linear-gradient(
                    135deg,
                    #f2f8fd 0%,
                    #ffffff 60%,
                    #f5fbff 100%
                );
            padding: 55px 0;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 260px 1fr 280px;
            align-items: center;
            gap: 40px;
        }

        .doctor-photo {
            width: 260px;
            height: 310px;
            object-fit: cover;
            border-radius: 18px;
            box-shadow: var(--shadow);
            border: 5px solid #fff;
        }

        .verified {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--green);
            background: #ecfaf2;
            padding: 6px 11px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 13px;
        }

        .hero-content h1 {
            font-size: clamp(32px, 4vw, 46px);
            line-height: 1.12;
            color: var(--primary);
            margin-bottom: 9px;
        }

        .hero-title {
            color: var(--secondary);
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .credentials {
            font-size: 15px;
            font-weight: 600;
            color: var(--muted);
            margin-bottom: 22px;
        }

        .hero-description {
            max-width: 650px;
            color: #4d5968;
            margin-bottom: 25px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 13px 20px;
            border-radius: 9px;
            font-weight: 700;
            font-size: 14px;
            transition: 0.2s ease;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: #d95b26;
        }

        .btn-outline {
            color: var(--secondary);
            border: 1px solid #9bc9eb;
            background: #fff;
        }

        .btn-outline:hover {
            background: #f2f9ff;
        }

        .hero-facts {
            background: #fff;
            padding: 22px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
        }

        .fact {
            display: flex;
            gap: 13px;
            padding: 13px 0;
            border-bottom: 1px solid var(--border);
        }

        .fact:last-child {
            border-bottom: 0;
        }

        .fact-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #eef7ff;
            color: var(--secondary);
            display: grid;
            place-items: center;
            flex: 0 0 auto;
        }

        .fact strong {
            display: block;
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 2px;
        }

        .fact span {
            display: block;
            font-size: 13px;
            font-weight: 600;
        }

        /* General Sections */

        section {
            padding: 75px 0;
        }

        .section-light {
            background: var(--light);
        }

        .section-heading {
            margin-bottom: 35px;
        }

        .section-heading h2 {
            color: var(--primary);
            font-size: clamp(27px, 3vw, 35px);
            line-height: 1.2;
            margin-bottom: 10px;
        }

        .section-heading h2 span {
            color: var(--secondary);
        }

        .section-heading p {
            color: var(--muted);
            max-width: 750px;
        }

        /* About */

        .about-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.8fr;
            gap: 50px;
            align-items: center;
        }

        .about-copy p {
            margin-bottom: 17px;
            color: #4e5968;
        }

        .about-image {
            border-radius: 18px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .about-image img {
            width: 100%;
            height: 310px;
            object-fit: cover;
        }

        /* Credentials */

        .credential-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .credential-card {
            padding: 28px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .credential-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: #eef7ff;
            color: var(--secondary);
            display: grid;
            place-items: center;
            margin-bottom: 17px;
        }

        .credential-card h3 {
            color: var(--primary);
            font-size: 17px;
            margin-bottom: 8px;
        }

        .credential-card p {
            color: var(--muted);
            font-size: 14px;
        }

        /* Care Areas */

        .care-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 16px;
        }

        .care-card {
            padding: 24px 18px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 5px 18px rgba(20, 60, 100, 0.05);
        }

        .care-card i {
            color: var(--secondary);
            font-size: 25px;
            margin-bottom: 13px;
        }

        .care-card h3 {
            color: var(--primary);
            font-size: 15px;
            margin-bottom: 8px;
        }

        .care-card p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        /* Department */

        .department-box {
            background: linear-gradient(135deg, #eef8ff, #f8fcff);
            border: 1px solid #d8ebfa;
            border-radius: 20px;
            padding: 38px;
        }

        .department-box h2 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 27px;
        }

        .department-box p {
            color: var(--muted);
            max-width: 800px;
            margin-bottom: 22px;
        }

        .service-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 11px;
        }

        .service-tag {
            background: #fff;
            border: 1px solid #d5e8f7;
            padding: 10px 15px;
            border-radius: 30px;
            color: var(--primary);
            font-size: 13px;
            font-weight: 600;
        }

        .service-tag i {
            color: var(--secondary);
            margin-right: 7px;
        }

        /* Consultation */

        .consult-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .consult-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 24px 20px;
            box-shadow: var(--shadow);
        }

        .consult-card i {
            color: var(--secondary);
            font-size: 22px;
            margin-bottom: 13px;
        }

        .consult-card h3 {
            color: var(--primary);
            font-size: 15px;
        }

        /* Hospital */

        .hospital-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            background: #fff;
            border-radius: 20px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .hospital-card img {
            width: 100%;
            height: 330px;
            object-fit: cover;
        }

        .hospital-content {
            padding: 35px 40px 35px 0;
        }

        .hospital-content h2 {
            color: var(--primary);
            font-size: 28px;
            margin-bottom: 10px;
        }

        .hospital-content p {
            color: var(--muted);
            margin-bottom: 18px;
        }

        .address-box {
            background: #fff5f0;
            border: 1px solid #f5d8cb;
            padding: 14px 16px;
            border-radius: 10px;
            color: #4d5968;
            margin-bottom: 20px;
        }

        /* Resources */

        .resource-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .resource-card {
            padding: 26px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .resource-card h3 {
            color: var(--primary);
            margin-bottom: 7px;
            font-size: 16px;
        }

        .resource-card p {
            color: var(--muted);
            font-size: 13px;
        }

        /* FAQ */

        .faq-list {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-item {
            border: 1px solid var(--border);
            border-radius: 10px;
            margin-bottom: 10px;
            background: #fff;
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            background: none;
            border: 0;
            padding: 18px 20px;
            text-align: left;
            font: inherit;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            padding: 0 20px 18px;
            color: var(--muted);
            font-size: 14px;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* CTA */

        .appointment-section {
            background: linear-gradient(
                135deg,
                #fff5f0,
                #fffafa
            );
        }

        .appointment-box {
            max-width: 900px;
            margin: auto;
            text-align: center;
        }

        .appointment-box h2 {
            color: var(--primary);
            font-size: 32px;
            margin-bottom: 10px;
        }

        .appointment-box p {
            color: var(--muted);
            margin-bottom: 25px;
        }

        /* Explore */

        .explore-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .explore-card {
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 22px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: 0.2s ease;
        }

        .explore-card:hover {
            border-color: #aad2ee;
            transform: translateY(-2px);
        }

        .explore-card strong {
            color: var(--primary);
            display: block;
        }

        .explore-card span {
            color: var(--muted);
            font-size: 13px;
        }

        .explore-card i {
            color: var(--secondary);
        }

        /* Footer */

        footer {
            background: #0c1730;
            color: #d8e1ed;
            padding: 55px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1fr 1.2fr;
            gap: 35px;
        }

        .footer-logo {
            background: #fff;
            padding: 10px;
            width: 160px;
            border-radius: 7px;
            margin-bottom: 16px;
        }

        .footer-logo img {
            width: 100%;
        }

        .footer-about {
            color: #aebbd0;
            font-size: 13px;
        }

        .footer-column h3 {
            color: #fff;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .footer-column a {
            display: block;
            color: #aebbd0;
            font-size: 13px;
            margin-bottom: 9px;
        }

        .footer-column a:hover {
            color: #fff;
        }

        .footer-contact {
            color: #aebbd0;
            font-size: 13px;
            line-height: 1.8;
        }

        .footer-bottom {
            margin-top: 35px;
            padding-top: 18px;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            color: #8795aa;
            font-size: 12px;
        }

        /* Mobile */

        @media (max-width: 1000px) {

            .hero-grid {
                grid-template-columns: 220px 1fr;
            }

            .hero-facts {
                grid-column: 1 / -1;
            }

            .care-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .consult-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 760px) {

            .container {
                width: min(100% - 28px, 600px);
            }

            .nav-links,
            .nav-emergency {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero-grid,
            .about-grid,
            .hospital-card {
                grid-template-columns: 1fr;
            }

            .doctor-photo {
                width: 220px;
                height: 270px;
                margin: auto;
            }

            .hero-content {
                text-align: center;
            }

            .hero-actions {
                justify-content: center;
            }

            .hero-facts {
                grid-column: auto;
            }

            .credential-grid,
            .resource-grid {
                grid-template-columns: 1fr;
            }

            .care-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hospital-content {
                padding: 0 25px 30px;
            }

            .explore-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            section {
                padding: 55px 0;
            }
        }

        @media (max-width: 480px) {

            .care-grid,
            .consult-grid {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 18px;
            }

            .department-box {
                padding: 25px;
            }

            .appointment-box h2 {
                font-size: 27px;
            }
        }

    </style>

</head>

<body>

    <!-- Emergency Bar -->
    <div class="emergency-bar">
        <i class="fa-solid fa-phone"></i>
        Emergency 24×7:
        <a href="tel:<?= htmlspecialchars($hospitalPhone); ?>">
            <?= htmlspecialchars($hospitalPhone); ?>
        </a>
    </div>

    <!-- Header -->
    <header>

        <div class="container nav">

            <a
                href="<?= $siteUrl; ?>/"
                class="logo"
                aria-label="Akropolis Super Speciality Hospital"
            >
                <img
                    src="<?= htmlspecialchars($logoImage, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Akropolis Super Speciality Hospital"
                    width="175"
                    height="auto"
                >
            </a>

            <nav class="nav-links" aria-label="Main navigation">

                <a href="<?= $siteUrl; ?>/">Home</a>

                <a href="<?= $siteUrl; ?>/about">About</a>

                <a href="<?= $siteUrl; ?>/departments">
                    Departments
                </a>

                <a href="<?= $siteUrl; ?>/doctors">
                    Doctors
                </a>

                <a href="<?= $siteUrl; ?>/services">
                    Services
                </a>

                <a href="<?= $siteUrl; ?>/blog">
                    Blog
                </a>

                <a href="<?= $siteUrl; ?>/contact">
                    Contact
                </a>

                <a
                    href="<?= $siteUrl; ?>/contact"
                    class="nav-emergency"
                >
                    <i class="fa-solid fa-phone"></i>
                    Emergency
                </a>

            </nav>

            <button
                class="mobile-menu"
                type="button"
                aria-label="Open navigation"
                onclick="toggleMenu()"
            >
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">

        <div class="container breadcrumb-inner">

            <a href="<?= $siteUrl; ?>/">
                Home
            </a>

            &nbsp; / &nbsp;

            <a href="<?= $siteUrl; ?>/doctors">
                Doctors
            </a>

            &nbsp; / &nbsp;

            <strong>
                Dr. Anu Nagpal
            </strong>

        </div>

    </div>

    <!-- Hero -->
    <section class="doctor-hero">

        <div class="container hero-grid">

            <div>

                <img
                    src="<?= htmlspecialchars($doctorImage, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Dr. Anu Nagpal, Obstetrician and Gynecologist at Akropolis Super Speciality Hospital"
                    class="doctor-photo"
                    width="260"
                    height="310"
                    loading="eager"
                >

            </div>

            <div class="hero-content">

                <div class="verified">
                    <i class="fa-solid fa-circle-check"></i>
                    Medical Registration Verified
                </div>

                <h1>
                    Dr. Anu Nagpal
                </h1>

                <div class="hero-title">
                    Obstetrician & Gynecologist
                </div>

                <div class="credentials">
                    MBBS, MS - Obstetrics & Gynaecology
                </div>

                <p class="hero-description">
                    Dr. Anu Nagpal is an Obstetrician and Gynecologist
                    practising at Akropolis Super Speciality Hospital
                    in Sector 69, Gurugram. She has 11+ years of overall
                    experience, including 7 years as a specialist in
                    Obstetrics and Gynaecology.
                </p>

                <div class="hero-actions">

                    <a
                        href="<?= $siteUrl; ?>/contact"
                        class="btn btn-primary"
                    >
                        <i class="fa-regular fa-calendar"></i>
                        Book Appointment
                    </a>

                    <a
                        href="#opd"
                        class="btn btn-outline"
                    >
                        <i class="fa-regular fa-clock"></i>
                        View OPD Timings
                    </a>

                </div>

            </div>

            <aside class="hero-facts" id="opd">

                <div class="fact">

                    <div class="fact-icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>

                    <div>
                        <strong>OPD Timing</strong>
                        <span><?= htmlspecialchars($opdTiming); ?></span>
                    </div>

                </div>

                <div class="fact">

                    <div class="fact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <strong>Location</strong>
                        <span>
                            Akropolis Super Speciality Hospital,
                            Sector 69, Gurugram
                        </span>
                    </div>

                </div>

                <div class="fact">

                    <div class="fact-icon">
                        <i class="fa-solid fa-hospital"></i>
                    </div>

                    <div>
                        <strong>Department</strong>
                        <span>
                            Obstetrics & Gynaecology
                        </span>
                    </div>

                </div>

            </aside>

        </div>

    </section>

    <!-- About -->
    <section>

        <div class="container about-grid">

            <div class="about-copy">

                <div class="section-heading">

                    <h2>
                        About <span>Dr. Anu Nagpal</span>
                    </h2>

                </div>

                <p>
                    Dr. Anu Nagpal is an Obstetrician and Gynecologist
                    at Akropolis Super Speciality Hospital in Badshahpur,
                    Gurgaon, with 11+ years of overall experience,
                    including 7 years as a specialist in Obstetrics
                    and Gynaecology.
                </p>

                <p>
                    She completed her MBBS from Dr. B. R. Ambedkar
                    University in 2013 and her MS in Obstetrics &
                    Gynaecology from MMU Mullana in 2016.
                </p>

                <p>
                    Her clinical practice is centred around Obstetrics,
                    Gynaecology and women's health. Patients can discuss
                    their symptoms, medical history, pregnancy-related
                    concerns and other women's health needs during
                    consultation.
                </p>

            </div>

            <div class="about-image">

                <img
                    src="<?= htmlspecialchars($doctorImage, ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Dr. Anu Nagpal"
                    width="768"
                    height="1024"
                    loading="lazy"
                >

            </div>

        </div>

    </section>

    <!-- Education & Credentials -->
    <section class="section-light">

        <div class="container">

            <div class="section-heading">

                <h2>
                    Education & <span>Credentials</span>
                </h2>

            </div>

            <div class="credential-grid">

                <div class="credential-card">

                    <div class="credential-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h3>MBBS</h3>

                    <p>
                        Dr. B. R. Ambedkar University
                        <br>
                        2013
                    </p>

                </div>

                <div class="credential-card">

                    <div class="credential-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h3>
                        MS - Obstetrics & Gynaecology
                    </h3>

                    <p>
                        MMU Mullana
                        <br>
                        2016
                    </p>

                </div>

                <div class="credential-card">

                    <div class="credential-icon">
                        <i class="fa-solid fa-briefcase-medical"></i>
                    </div>

                    <h3>
                        Professional Experience
                    </h3>

                    <p>
                        11+ Years Overall Experience
                        <br>
                        7 Years as Specialist
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Areas of Care -->
    <section>

        <div class="container">

            <div class="section-heading">

                <h2>
                    Areas of <span>Medical Care</span>
                </h2>

                <p>
                    Her clinical practice is centred around Obstetrics,
                    Gynaecology and Women's Health.
                </p>

            </div>

            <div class="care-grid">

                <?php foreach ($areasOfCare as $index => $area): ?>

                    <article class="care-card">

                        <i class="fa-solid
                            <?= $index === 0 ? 'fa-person-pregnant' :
                                ($index === 1 ? 'fa-venus' :
                                ($index === 2 ? 'fa-person-dress' :
                                ($index === 3 ? 'fa-heart' :
                                'fa-clipboard-check'))); ?>">
                        </i>

                        <h3>
                            <?= htmlspecialchars($area['title']); ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($area['description']); ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- Department Services -->
    <section class="section-light">

        <div class="container">

            <div class="department-box">

                <h2>
                    Obstetrics & Gynaecology Services at Akropolis
                </h2>

                <p>
                    The Obstetrics & Gynaecology department provides
                    women's health and maternity-related services,
                    with consultation and care based on each patient's
                    individual medical needs.
                </p>

                <div class="service-tags">

                    <?php foreach ($departmentServices as $service): ?>

                        <div class="service-tag">

                            <i class="fa-solid fa-circle-check"></i>

                            <?= htmlspecialchars($service); ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </section>

    <!-- When to Consult -->
    <section>

        <div class="container">

            <div class="section-heading">

                <h2>
                    When Should You Consult an
                    <span>Obstetrician & Gynecologist?</span>
                </h2>

                <p>
                    A consultation may be appropriate when you have
                    concerns related to:
                </p>

            </div>

            <div class="consult-grid">

                <?php foreach ($consultationReasons as $reason): ?>

                    <div class="consult-card">

                        <i class="fa-solid fa-circle-check"></i>

                        <h3>
                            <?= htmlspecialchars($reason); ?>
                        </h3>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- Hospital Location -->
    <section class="section-light">

        <div class="container">

            <div class="hospital-card">

                <div>

                    <img
                        src="<?= htmlspecialchars($hospitalImage, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                        width="1200"
                        height="800"
                        loading="lazy"
                    >

                </div>

                <div class="hospital-content">

                    <h2>
                        Dr. Anu Nagpal at
                        <span style="color:#0d72c7;">
                            Akropolis Super Speciality Hospital
                        </span>
                    </h2>

                    <p>
                        Dr. Anu Nagpal practises at Akropolis Super
                        Speciality Hospital in Badshahpur, Gurugram.
                        The hospital is located near Vatika Chowk,
                        opposite Chinar Garden, Sector 69.
                    </p>

                    <div class="address-box">

                        <i class="fa-solid fa-location-dot"></i>

                        <?= htmlspecialchars($hospitalAddress); ?>

                    </div>

                    <div class="hero-actions">

                        <a
                            href="<?= $siteUrl; ?>/contact"
                            class="btn btn-primary"
                        >
                            <i class="fa-regular fa-calendar"></i>
                            Book Appointment
                        </a>

                        <a
                            href="https://www.google.com/maps/search/?api=1&query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                            target="_blank"
                            rel="noopener"
                            class="btn btn-outline"
                        >
                            <i class="fa-solid fa-location-arrow"></i>
                            Get Directions
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Patient Resources -->
    <section>

        <div class="container">

            <div class="section-heading">

                <h2>
                    Resources for <span>Patients</span>
                </h2>

                <p>
                    Helpful information to support women's health,
                    pregnancy and maternity-related care.
                </p>

            </div>

            <div class="resource-grid">

                <?php foreach ($resources as $resource): ?>

                    <article class="resource-card">

                        <h3>
                            <?= htmlspecialchars($resource['title']); ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($resource['description']); ?>
                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- FAQ -->
    <section class="section-light">

        <div class="container">

            <div class="section-heading">

                <h2>
                    Frequently Asked <span>Questions</span>
                </h2>

                <p>
                    Common questions about Dr. Anu Nagpal,
                    her qualifications, consultation and practice.
                </p>

            </div>

            <div class="faq-list">

                <?php foreach ($faqs as $faq): ?>

                    <div class="faq-item">

                        <button
                            class="faq-question"
                            type="button"
                        >

                            <span>
                                <?= htmlspecialchars($faq['question']); ?>
                            </span>

                            <i class="fa-solid fa-chevron-down"></i>

                        </button>

                        <div class="faq-answer">

                            <?= htmlspecialchars($faq['answer']); ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- Appointment CTA -->
    <section class="appointment-section">

        <div class="container">

            <div class="appointment-box">

                <h2>
                    Schedule a Consultation
                </h2>

                <p>
                    If you would like to discuss a women's health,
                    pregnancy or gynaecological concern, enquire
                    about an appointment with Dr. Anu Nagpal.
                </p>

                <a
                    href="<?= $siteUrl; ?>/contact"
                    class="btn btn-primary"
                >
                    <i class="fa-regular fa-calendar"></i>
                    Book Appointment
                </a>

            </div>

        </div>

    </section>

    <!-- Explore More -->
    <section>

        <div class="container">

            <div class="section-heading">

                <h2>
                    Explore <span>More</span>
                </h2>

            </div>

            <div class="explore-grid">

                <a
                    href="<?= $siteUrl; ?>/departments/obstetrics-gynecology"
                    class="explore-card"
                >

                    <div>

                        <strong>
                            Obstetrics & Gynaecology Department
                        </strong>

                        <span>
                            Explore women's health and maternity services.
                        </span>

                    </div>

                    <i class="fa-solid fa-chevron-right"></i>

                </a>

                <a
                    href="<?= $siteUrl; ?>/doctors"
                    class="explore-card"
                >

                    <div>

                        <strong>
                            Meet Our Doctors
                        </strong>

                        <span>
                            View specialists across Akropolis Hospital.
                        </span>

                    </div>

                    <i class="fa-solid fa-chevron-right"></i>

                </a>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer>

        <div class="container footer-grid">

            <div>

                <div class="footer-logo">

                    <img
                        src="<?= htmlspecialchars($logoImage, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="Akropolis Super Speciality Hospital"
                        width="160"
                        height="auto"
                        loading="lazy"
                    >

                </div>

                <p class="footer-about">
                    Akropolis Super Speciality Hospital provides
                    specialist healthcare, diagnostic services and
                    emergency support in Gurugram.
                </p>

            </div>

            <div class="footer-column">

                <h3>Quick Links</h3>

                <a href="<?= $siteUrl; ?>/">Home</a>
                <a href="<?= $siteUrl; ?>/about">About Us</a>
                <a href="<?= $siteUrl; ?>/departments">Departments</a>
                <a href="<?= $siteUrl; ?>/doctors">Doctors</a>
                <a href="<?= $siteUrl; ?>/blog">Blog</a>
                <a href="<?= $siteUrl; ?>/contact">Contact</a>

            </div>

            <div class="footer-column">

                <h3>Patient Services</h3>

                <a href="<?= $siteUrl; ?>/ct-scan">CT Scan</a>
                <a href="<?= $siteUrl; ?>/endoscopy">Endoscopy</a>
                <a href="<?= $siteUrl; ?>/colonoscopy">Colonoscopy</a>
                <a href="<?= $siteUrl; ?>/bronchoscopy">Bronchoscopy</a>
                <a href="<?= $siteUrl; ?>/dialysis">Dialysis</a>
                <a href="<?= $siteUrl; ?>/laboratory">Laboratory</a>

            </div>

            <div class="footer-column">

                <h3>Contact Info</h3>

                <div class="footer-contact">

                    <strong>
                        <?= htmlspecialchars($hospitalName); ?>
                    </strong>

                    <br>

                    <?= htmlspecialchars($hospitalAddress); ?>

                    <br><br>

                    <a href="tel:<?= htmlspecialchars($hospitalPhone); ?>">
                        <?= htmlspecialchars($hospitalPhone); ?>
                    </a>

                    <br>

                    <a href="mailto:<?= htmlspecialchars($hospitalEmail); ?>">
                        <?= htmlspecialchars($hospitalEmail); ?>
                    </a>

                </div>

            </div>

        </div>

        <div class="container footer-bottom">

            © <?= date('Y'); ?>
            Akropolis Super Speciality Hospital.
            All rights reserved.

        </div>

    </footer>

    <script>

        function toggleMenu() {

            const nav = document.querySelector('.nav-links');

            if (!nav) {
                return;
            }

            nav.classList.toggle('mobile-open');

        }

        document.querySelectorAll('.faq-question').forEach(function(button) {

            button.addEventListener('click', function() {

                const item = button.closest('.faq-item');

                if (!item) {
                    return;
                }

                document.querySelectorAll('.faq-item').forEach(function(otherItem) {

                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }

                });

                item.classList.toggle('active');

            });

        });

    </script>

</body>
</html>