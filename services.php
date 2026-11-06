<?php

require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'Best Hospital for Advanced Diagnostic & Medical Services in Gurugram | Akropolis';

$page_description = 'Akropolis Super Speciality Hospital provides medical and diagnostic services in Gurugram, including CT Scan, 2D Echo, Ultrasound, X-Ray, Spirometry, Tread Mill Testing, laboratory services, dialysis and specialist medical care.';

$canonical_url = '/services';


/*
|--------------------------------------------------------------------------
| FAQ SCHEMA
|--------------------------------------------------------------------------
*/

$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    '@id' => 'https://akropolishospital.com/services#faq',
    'mainEntity' => [

        [
            '@type' => 'Question',
            'name' => 'What diagnostic services are available at Akropolis Super Speciality Hospital?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'The NABH Scope of Services for Akropolis Super Speciality Hospital includes 2D Echo, CT Scanning, Spirometry, Tread Mill Testing, Ultrasound and X-Ray. The hospital website also provides information about Endoscopy, Dialysis, Laboratory, Bronchoscopy and Colonoscopy services.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Does Akropolis Hospital provide CT Scan, Ultrasound and X-Ray services?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. CT Scanning, Ultrasound and X-Ray are included in the NABH Scope of Services for Akropolis Super Speciality Hospital.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Does Akropolis Super Speciality Hospital provide 2D Echo and cardiac diagnostic services?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => '2D Echo is included in the NABH Scope of Services. Interventional Cardiology is also included within the hospital clinical services.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'What laboratory services are available at Akropolis Hospital?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'The NABH Scope of Services includes Clinical Bio-Chemistry, Clinical Serology, Clinical Pathology, Haematology and Histopathology.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Does Akropolis Hospital provide dialysis services?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. Nephrology, including Dialysis, is included in the NABH Scope of Services for Akropolis Super Speciality Hospital.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Which medical specialties are available at Akropolis Super Speciality Hospital?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'The NABH Scope of Services includes Anaesthesiology, Interventional Cardiology, Dentistry, Dermatology and Venereology, General Medicine, General Surgery including Laparoscopic Surgery, Medical Gastroenterology, Nephrology including Dialysis, Neurology, Neurosurgery, Obstetrics and Gynaecology including High Risk Pregnancy, Ophthalmology, Orthopaedics including Joint Replacement, Otorhinolaryngology, Paediatrics, Plastic and Reconstructive Surgery, Psychiatry on an OPD-only basis, and Respiratory Medicine.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Do I need a prescription or referral for a diagnostic test?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Whether a prescription or referral is required depends on the diagnostic test, clinical situation and hospital or treating doctor protocol. If you are unsure about the requirements for a particular test, contact the hospital before visiting.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Where is Akropolis Super Speciality Hospital located in Gurugram?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Akropolis Super Speciality Hospital is located in Sector 69, Gurugram, near Vatika Chowk and opposite Chinar Garden, Haryana 122101.'
            ]
        ],

        [
            '@type' => 'Question',
            'name' => 'Does Akropolis Super Speciality Hospital provide emergency care?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Akropolis Super Speciality Hospital provides 24×7 emergency care. Patients requiring urgent medical attention should contact the hospital emergency service or seek immediate medical care.'
            ]
        ]

    ]
];


/*
|--------------------------------------------------------------------------
| PAGE SCHEMA
|--------------------------------------------------------------------------
*/

$schema_blocks = [

    json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        '@id' => 'https://akropolishospital.com/services#webpage',
        'name' => 'Medical & Diagnostic Services | Akropolis Super Speciality Hospital',
        'url' => 'https://akropolishospital.com/services',
        'description' => $page_description,
        'isPartOf' => [
            '@id' => 'https://akropolishospital.com/#website'
        ],
        'about' => [
            '@id' => 'https://akropolishospital.com/#hospital'
        ],
        'inLanguage' => 'en-IN'
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),

    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Services', 'url' => '/services']
    ]),

    json_encode(
        $faq_schema,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    )

];

include 'includes/head.php';

?>


<!-- =========================================================
     EMERGENCY BAR
========================================================== -->

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">

    <div class="container mx-auto flex items-center justify-center space-x-2">

        <?php echo getIcon('Phone', 'h-4 w-4'); ?>

        <span class="font-semibold text-sm md:text-base">

            Emergency 24×7:

            <?php echo htmlspecialchars(
                CONTACT_INFO['emergency'],
                ENT_QUOTES,
                'UTF-8'
            ); ?>

        </span>

    </div>

</div>


<!-- =========================================================
     HEADER
========================================================== -->

<?php include 'includes/header-v2.php'; ?>


<main>


<!-- =========================================================
     HERO
========================================================== -->

<section
    class="relative overflow-hidden bg-gradient-to-br from-[#0F2747] via-[#174B75] to-[#328CCB] py-16 lg:py-20"
>

    <div class="container mx-auto px-4">

        <div class="max-w-5xl mx-auto text-center text-white">

            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-sm font-medium mb-6"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Advanced Diagnostic &amp; Medical Services

            </div>


            <h1
                class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"
            >
                Best Hospital for Advanced Diagnostic &amp; Medical Services in Gurugram
            </h1>


            <p
                class="max-w-3xl mx-auto text-lg md:text-xl text-white/90 leading-relaxed"
            >
                Akropolis Super Speciality Hospital provides advanced diagnostic
                and medical services in Gurugram, bringing specialist medical
                care, diagnostic facilities and clinical support together under
                one roof.
            </p>


            <p
                class="max-w-3xl mx-auto mt-4 text-base md:text-lg text-white/80 leading-relaxed"
            >
                From CT Scan, 2D Echo, Ultrasound and X-Ray to laboratory
                investigations, dialysis and specialist medical care, the
                hospital provides a range of services supporting diagnosis,
                treatment and ongoing clinical care.
            </p>


            <div class="flex flex-wrap justify-center gap-3 mt-8">

                <a
                    href="#diagnostic-services"
                    class="inline-flex items-center gap-2 bg-white text-[#174B75] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition"
                >

                    Explore Diagnostic Services

                    <?php echo getIcon('ArrowDown', 'h-5 w-5'); ?>

                </a>


                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c55f3a] text-white px-6 py-3 rounded-lg font-semibold transition"
                >

                    Contact Akropolis

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     INTRO
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto text-center">

            <div
                class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
            >

                <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                Medical &amp; Diagnostic Care

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Medical and Diagnostic Services at Akropolis

            </h2>


            <p class="text-gray-600 text-lg leading-relaxed">

                Choosing a hospital for diagnosis or treatment often involves
                looking for the right specialist, the right diagnostic test
                and convenient access to supporting clinical services.
                Akropolis Super Speciality Hospital brings medical specialties,
                diagnostic services, laboratory services and allied healthcare
                services together at its Gurugram facility.

            </p>


            <p class="text-gray-600 text-lg leading-relaxed mt-4">

                The hospital's current NABH Scope of Services covers clinical
                specialties, diagnostic services, laboratory services,
                pharmacy, blood transfusion services, ambulance, dietetics
                and physiotherapy.

            </p>

        </div>

    </div>

</section>



<!-- =========================================================
     MEDICAL SPECIALTIES
========================================================== -->

<section
    id="medical-services"
    class="py-16 lg:py-20 bg-gray-50"
>

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100"
            >

                <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                Specialist Medical Care

            </div>


            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">

                Medical Specialties at Akropolis

            </h2>


            <p class="text-lg text-gray-600 leading-relaxed">

                Akropolis Super Speciality Hospital provides specialist
                medical services across multiple clinical departments.
                The following clinical services are included in the
                hospital's NABH Scope of Services.

            </p>

        </div>


        <?php

        /*
        |--------------------------------------------------------------------------
        | CLINICAL SERVICES
        |--------------------------------------------------------------------------
        | Only services with a dedicated relevant page are linked.
        */

        $clinical_services = [

            [
                'name' => 'Anaesthesiology',
                'description' => 'Anaesthesiology services supporting surgical and clinical care.'
            ],

            [
                'name' => 'Cardiology (Interventional)',
                'description' => 'Interventional cardiology services for cardiovascular care.',
                'href' => '/cardiology'
            ],

            [
                'name' => 'Dentistry',
                'description' => 'Dental care services within the hospital clinical scope.'
            ],

            [
                'name' => 'Dermatology and Venereology',
                'description' => 'Medical care for skin and related conditions.',
                'href' => '/dermatology'
            ],

            [
                'name' => 'General Medicine',
                'description' => 'Medical assessment and management for a range of adult health conditions.'
            ],

            [
                'name' => 'General Surgery',
                'description' => 'General surgical services, including laparoscopic surgery.'
            ],

            [
                'name' => 'Medical Gastroenterology',
                'description' => 'Specialist care for digestive system and gastrointestinal conditions.',
                'href' => '/gastroenterology'
            ],

            [
                'name' => 'Nephrology',
                'description' => 'Kidney care including dialysis services.',
                'href' => '/nephrology'
            ],

            [
                'name' => 'Neurology',
                'description' => 'Specialist care for neurological and nervous system conditions.',
                'href' => '/neurology'
            ],

            [
                'name' => 'Neurosurgery',
                'description' => 'Surgical care for conditions involving the brain, spine and nervous system.'
            ],

            [
                'name' => 'Obstetrics and Gynaecology',
                'description' => 'Women’s health and maternity care, including high-risk pregnancy services.',
                'href' => '/obstetrics-gynecology'
            ],

            [
                'name' => 'Ophthalmology',
                'description' => 'Specialist eye care and vision-related medical services.',
                'href' => '/ophthalmology'
            ],

            [
                'name' => 'Orthopaedics',
                'description' => 'Orthopaedic care including joint replacement services.',
                'href' => '/orthopedics'
            ],

            [
                'name' => 'Otorhinolaryngology (ENT)',
                'description' => 'Ear, nose and throat medical care.',
                'href' => '/ent'
            ],

            [
                'name' => 'Paediatrics',
                'description' => 'Medical care for infants, children and adolescents.',
                'href' => '/pediatrics'
            ],

            [
                'name' => 'Plastic and Reconstructive Surgery',
                'description' => 'Plastic and reconstructive surgical services.',
                'href' => '/plastic-surgery'
            ],

            [
                'name' => 'Psychiatry',
                'description' => 'Psychiatric services on an OPD-only basis within the NABH scope.'
            ],

            [
                'name' => 'Respiratory Medicine',
                'description' => 'Specialist medical care for respiratory and breathing-related conditions.'
            ]

        ];

        ?>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">

            <?php foreach ($clinical_services as $service): ?>

                <?php if (!empty($service['href'])): ?>

                    <a
                        href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="group bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300"
                    >

                <?php else: ?>

                    <div
                        class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm"
                    >

                <?php endif; ?>


                    <div
                        class="w-12 h-12 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-5"
                    >

                        <?php echo getIcon('Stethoscope', 'h-6 w-6'); ?>

                    </div>


                    <h3
                        class="text-lg font-bold text-gray-900 mb-3 <?php echo !empty($service['href']) ? 'group-hover:text-[#328CCB]' : ''; ?> transition-colors"
                    >

                        <?php echo htmlspecialchars(
                            $service['name'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </h3>


                    <p class="text-gray-600 leading-relaxed text-sm">

                        <?php echo htmlspecialchars(
                            $service['description'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </p>


                    <?php if (!empty($service['href'])): ?>

                        <span
                            class="inline-flex items-center gap-2 text-[#328CCB] font-semibold mt-5 text-sm"
                        >

                            Explore

                            <?php echo getIcon(
                                'ArrowRight',
                                'h-4 w-4 group-hover:translate-x-1 transition-transform'
                            ); ?>

                        </span>

                    <?php endif; ?>


                <?php if (!empty($service['href'])): ?>

                    </a>

                <?php else: ?>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     ADVANCED DIAGNOSTIC SERVICES
========================================================== -->

<section
    id="diagnostic-services"
    class="py-16 lg:py-20 bg-white"
>

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Advanced Diagnostics

            </div>


            <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">

                Advanced Diagnostic Services in Gurugram

            </h2>


            <p class="text-lg text-gray-600 leading-relaxed">

                Diagnostic tests help doctors evaluate symptoms, investigate
                medical conditions and monitor treatment. Akropolis provides
                access to a range of diagnostic services included in its
                NABH Scope of Services.

            </p>

        </div>


        <?php

        $diagnostic_services = [

            [
                'name' => '2D Echo',
                'description' => 'Cardiac imaging used as part of cardiovascular assessment.',
                'href' => '/cardiology',
                'link_text' => 'Explore Cardiology'
            ],

            [
                'name' => 'CT Scanning',
                'description' => 'Cross-sectional imaging used to evaluate different areas of the body.',
                'href' => '/ct-scan',
                'link_text' => 'Explore CT Scan'
            ],

            [
                'name' => 'Spirometry',
                'description' => 'A pulmonary function test used to assess breathing and lung function.'
            ],

            [
                'name' => 'Tread Mill Testing',
                'description' => 'Exercise-based cardiac testing used as part of selected cardiovascular evaluations.',
                'href' => '/cardiology',
                'link_text' => 'Explore Cardiology'
            ],

            [
                'name' => 'Ultrasound',
                'description' => 'Diagnostic imaging using ultrasound technology for clinical evaluation.'
            ],

            [
                'name' => 'X-Ray',
                'description' => 'Diagnostic imaging used to evaluate bones and other structures.'
            ]

        ];

        ?>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php foreach ($diagnostic_services as $service): ?>

                <?php if (!empty($service['href'])): ?>

                    <a
                        href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="group rounded-2xl border border-gray-100 bg-gray-50 p-7 hover:bg-white hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    >

                <?php else: ?>

                    <div
                        class="rounded-2xl border border-gray-100 bg-gray-50 p-7"
                    >

                <?php endif; ?>


                    <div
                        class="w-14 h-14 rounded-xl bg-white text-[#328CCB] flex items-center justify-center mb-6 shadow-sm"
                    >

                        <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                    </div>


                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 <?php echo !empty($service['href']) ? 'group-hover:text-[#328CCB]' : ''; ?> transition-colors"
                    >

                        <?php echo htmlspecialchars(
                            $service['name'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </h3>


                    <p class="text-gray-600 leading-relaxed <?php echo !empty($service['href']) ? 'mb-5' : ''; ?>">

                        <?php echo htmlspecialchars(
                            $service['description'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </p>


                    <?php if (!empty($service['href'])): ?>

                        <span
                            class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                        >

                            <?php echo htmlspecialchars(
                                $service['link_text'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>

                            <?php echo getIcon(
                                'ArrowRight',
                                'h-4 w-4 group-hover:translate-x-1 transition-transform'
                            ); ?>

                        </span>

                    <?php endif; ?>


                <?php if (!empty($service['href'])): ?>

                    </a>

                <?php else: ?>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     ADDITIONAL DIAGNOSTIC / PROCEDURAL SERVICES
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100"
            >

                <?php echo getIcon('Search', 'h-4 w-4'); ?>

                Clinical &amp; Diagnostic Support

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Additional Medical &amp; Diagnostic Services

            </h2>


            <p class="text-lg text-gray-600 leading-relaxed">

                The hospital website also provides dedicated information
                about the following services, supporting patients who are
                looking for specific diagnostic or treatment-related care.

            </p>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- Endoscopy -->

            <a
                href="/endoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                </div>


                <h3
                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB]"
                >
                    Endoscopy
                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Information about endoscopic evaluation of the digestive
                    system when clinically indicated.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >

                    Explore Endoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


            <!-- Dialysis -->

            <a
                href="/dialysis"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('HeartPulse', 'h-7 w-7'); ?>

                </div>


                <h3
                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB]"
                >
                    Dialysis
                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Dialysis is included within the NABH clinical scope under
                    Nephrology, supporting patients requiring renal replacement
                    therapy.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >

                    Explore Dialysis

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


            <!-- Laboratory -->

            <a
                href="/laboratory"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('FlaskConical', 'h-7 w-7'); ?>

                </div>


                <h3
                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB]"
                >
                    Laboratory Services
                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Laboratory services supporting clinical investigation
                    and medical evaluation.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >

                    Explore Laboratory

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


            <!-- Bronchoscopy -->

            <a
                href="/bronchoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                </div>


                <h3
                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB]"
                >
                    Bronchoscopy
                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Information about bronchoscopy for clinical examination
                    of the airways when medically indicated.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >

                    Explore Bronchoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


            <!-- Colonoscopy -->

            <a
                href="/colonoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('Search', 'h-7 w-7'); ?>

                </div>


                <h3
                    class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB]"
                >
                    Colonoscopy
                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Information about colonoscopy for examination of the
                    colon and lower digestive tract when clinically indicated.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >

                    Explore Colonoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


            <!-- Medical Departments -->

            <a
                href="/departments"
                class="group bg-[#0F1A33] rounded-2xl border border-[#0F1A33] p-7 text-white hover:shadow-xl hover:-translate-y-1 transition-all"
            >

                <div
                    class="w-14 h-14 rounded-xl bg-white/10 text-[#7CC7FF] flex items-center justify-center mb-6"
                >

                    <?php echo getIcon('Building2', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold mb-3">
                    Explore Medical Departments
                </h3>


                <p class="text-blue-100 leading-relaxed mb-5">

                    Explore specialist departments and the medical care
                    available across the hospital.

                </p>


                <span
                    class="inline-flex items-center gap-2 text-white font-semibold"
                >

                    View Departments

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </span>

            </a>


        </div>

    </div>

</section>



<!-- =========================================================
     LABORATORY SERVICES
========================================================== -->

<section
    id="laboratory-services"
    class="py-16 lg:py-20 bg-white"
>

    <div class="container mx-auto px-4">


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-14 items-start">


            <div>

                <div
                    class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5"
                >

                    <?php echo getIcon('FlaskConical', 'h-4 w-4'); ?>

                    Laboratory Care

                </div>


                <h2
                    class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5"
                >

                    Laboratory Services

                    <span class="text-[#328CCB]">
                        at Akropolis
                    </span>

                </h2>


                <p class="text-gray-600 leading-relaxed mb-6">

                    Laboratory services play an important role in supporting
                    clinical evaluation and diagnosis. The NABH Scope of
                    Services lists five laboratory disciplines for Akropolis.

                </p>


                <a
                    href="/laboratory"
                    class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                >

                    Explore Laboratory

                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                </a>

            </div>


            <div class="lg:col-span-2">

                <?php

                $laboratory_services = [

                    'Clinical Bio-Chemistry',
                    'Clinical Serology',
                    'Clinical Pathology',
                    'Haematology',
                    'Histopathology'

                ];

                ?>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <?php foreach ($laboratory_services as $lab): ?>

    <div
        class="group flex items-center justify-between gap-4 p-5 rounded-2xl bg-gray-50 border border-gray-100"
    >

        <span
            class="font-semibold text-gray-800"
        >

            <?php echo htmlspecialchars(
                $lab,
                ENT_QUOTES,
                'UTF-8'
            ); ?>

        </span>


        <?php echo getIcon(
            'ArrowRight',
            'h-4 w-4 text-gray-400'
        ); ?>

    </div>

<?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     ALLIED HEALTHCARE & SUPPORT SERVICES
========================================================== -->

<section
    id="allied-services"
    class="py-16 lg:py-20 bg-gray-50"
>

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Supporting Healthcare Services

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Allied &amp; Support Services

            </h2>


            <p class="text-lg text-gray-600 leading-relaxed">

                Healthcare often involves more than diagnosis and treatment.
                The NABH Scope of Services also includes supporting services
                that contribute to patient care and hospital operations.

            </p>

        </div>


        <?php

        $support_services = [

            [
                'name' => 'Pharmacy',
                'description' => 'Pharmacy services supporting patient care within the hospital.'
            ],

            [
                'name' => 'Blood Transfusion Services',
                'description' => 'Blood transfusion services included within the hospital scope of services.'
            ],

            [
                'name' => 'Ambulance',
                'description' => 'Ambulance support for patients requiring urgent medical assistance.',
                'href' => 'tel:' . preg_replace(
                    '/[^0-9+]/',
                    '',
                    CONTACT_INFO['emergency']
                ),
                'link_text' => 'Call Emergency'
            ],

            [
                'name' => 'Dietetics',
                'description' => 'Dietetics services supporting nutritional care.',
                'href' => '/health-nutrition',
                'link_text' => 'Explore Nutrition'
            ],

            [
                'name' => 'Physiotherapy',
                'description' => 'Physiotherapy services supporting rehabilitation and patient care.'
            ]

        ];

        ?>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php foreach ($support_services as $service): ?>

                <?php if (!empty($service['href'])): ?>

                    <a
                        href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    >

                <?php else: ?>

                    <div
                        class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm"
                    >

                <?php endif; ?>


                    <div
                        class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6"
                    >

                        <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                    </div>


                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 <?php echo !empty($service['href']) ? 'group-hover:text-[#328CCB]' : ''; ?>"
                    >

                        <?php echo htmlspecialchars(
                            $service['name'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </h3>


                    <p class="text-gray-600 leading-relaxed <?php echo !empty($service['href']) ? 'mb-5' : ''; ?>">

                        <?php echo htmlspecialchars(
                            $service['description'],
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>

                    </p>


                    <?php if (!empty($service['href'])): ?>

                        <span
                            class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                        >

                            <?php echo htmlspecialchars(
                                $service['link_text'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>

                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                        </span>

                    <?php endif; ?>


                <?php if (!empty($service['href'])): ?>

                    </a>

                <?php else: ?>

                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =========================================================
     PATIENT SEARCH INTENT
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5"
            >

                <?php echo getIcon('Search', 'h-4 w-4'); ?>

                Finding the Right Service

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Looking for a Diagnostic Test or Medical Service in Gurugram?

            </h2>


            <p class="text-lg text-gray-600 leading-relaxed">

                Patients commonly search for individual diagnostic tests,
                specialist departments and treatment-related services based
                on their symptoms, doctor's advice or ongoing medical care.
                Explore the relevant services available at Akropolis.

            </p>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">


            <a
                href="/ct-scan"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    CT Scan in Gurugram
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore CT Scan services.
                </p>

            </a>


            <a
                href="/laboratory"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Laboratory Services
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore laboratory investigations.
                </p>

            </a>


            <a
                href="/dialysis"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Dialysis in Gurugram
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore dialysis information.
                </p>

            </a>


            <a
                href="/cardiology"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Cardiology Services
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore specialist cardiac care.
                </p>

            </a>


            <a
                href="/orthopedics"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Orthopaedic Care
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore orthopaedic services.
                </p>

            </a>


            <a
                href="/gastroenterology"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Gastroenterology
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore digestive health services.
                </p>

            </a>


            <a
                href="/neurology"
                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
            >

                <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB]">
                    Neurology
                </h3>

                <p class="text-sm text-gray-600 mt-2">
                    Explore neurological care.
                </p>

            </a>


            <a
                href="/departments"
                class="group p-5 rounded-2xl bg-[#0F1A33] border border-[#0F1A33] text-white hover:shadow-lg transition-all"
            >

                <h3 class="font-bold">
                    View All Departments
                </h3>

                <p class="text-sm text-blue-100 mt-2">
                    Explore all medical specialties.
                </p>

            </a>


        </div>

    </div>

</section>



<!-- =========================================================
     LOCATION / CONTACT
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">


        <div
            class="bg-gradient-to-r from-[#328CCB] to-[#246EA3] rounded-3xl p-8 lg:p-12 text-white overflow-hidden relative"
        >

            <div
                class="absolute -right-20 -top-20 w-72 h-72 bg-white/10 rounded-full"
            ></div>

            <div
                class="absolute -left-20 -bottom-20 w-64 h-64 bg-white/5 rounded-full"
            ></div>


            <div
                class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center"
            >


                <div>

                    <div
                        class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 text-sm mb-5"
                    >

                        <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                        Sector 69, Gurugram

                    </div>


                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">

                        Medical &amp; Diagnostic Care in Gurugram

                    </h2>


                    <p class="text-blue-100 leading-relaxed max-w-xl">

                        Akropolis Super Speciality Hospital is located near
                        Vatika Chowk, opposite Chinar Garden, in Sector 69,
                        Gurugram. Patients can contact the hospital for
                        information about diagnostic tests, specialist
                        consultations and hospital services.

                    </p>

                </div>


                <div class="flex flex-col sm:flex-row lg:justify-end gap-4">


                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-white text-[#328CCB] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition-all duration-300"
                    >

                        Contact Us

                        <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                    </a>


                    <a
                        href="tel:<?php echo htmlspecialchars(
                            preg_replace(
                                '/[^0-9+]/',
                                '',
                                CONTACT_INFO['emergency']
                            ),
                            ENT_QUOTES,
                            'UTF-8'
                        ); ?>"
                        class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c45e38] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300"
                    >

                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                        Emergency

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FAQ
========================================================== -->

<section
    id="faqs"
    class="py-16 lg:py-20 bg-white"
>

    <div class="container mx-auto px-4">


        <div class="max-w-4xl mx-auto">


            <div class="text-center mb-12">

                <div
                    class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5"
                >

                    Frequently Asked Questions

                </div>


                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                    Frequently Asked Questions About Medical &amp; Diagnostic Services

                </h2>


                <p class="text-lg text-gray-600 leading-relaxed">

                    Answers to common questions patients may have when
                    looking for medical and diagnostic services at Akropolis.

                </p>

            </div>


            <div class="space-y-4">


                <!-- FAQ 1 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        What diagnostic services are available at Akropolis Super Speciality Hospital?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        The NABH Scope of Services includes 2D Echo, CT Scanning,
                        Spirometry, Tread Mill Testing, Ultrasound and X-Ray.
                        The hospital website also provides information about
                        Endoscopy, Dialysis, Laboratory, Bronchoscopy and
                        Colonoscopy services.

                    </div>

                </details>


                <!-- FAQ 2 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Does Akropolis Hospital provide CT Scan, Ultrasound and X-Ray services?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        Yes. CT Scanning, Ultrasound and X-Ray are included in
                        the NABH Scope of Services for Akropolis Super Speciality
                        Hospital.

                    </div>

                </details>


                <!-- FAQ 3 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Does Akropolis Hospital provide 2D Echo and cardiac diagnostic services?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        2D Echo is included in the NABH Scope of Services.
                        Interventional Cardiology is also included within the
                        hospital's clinical services.

                    </div>

                </details>


                <!-- FAQ 4 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        What laboratory services are available at Akropolis Hospital?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        The NABH Scope of Services includes Clinical
                        Bio-Chemistry, Clinical Serology, Clinical Pathology,
                        Haematology and Histopathology.

                    </div>

                </details>


                <!-- FAQ 5 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Does Akropolis Hospital provide dialysis services?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        Yes. Nephrology, including Dialysis, is included in
                        the NABH Scope of Services.

                    </div>

                </details>


                <!-- FAQ 6 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Which medical specialties are available at Akropolis Super Speciality Hospital?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        The NABH Scope of Services includes Anaesthesiology,
                        Interventional Cardiology, Dentistry, Dermatology and
                        Venereology, General Medicine, General Surgery including
                        Laparoscopic Surgery, Medical Gastroenterology,
                        Nephrology including Dialysis, Neurology, Neurosurgery,
                        Obstetrics and Gynaecology including High Risk Pregnancy,
                        Ophthalmology, Orthopaedics including Joint Replacement,
                        Otorhinolaryngology, Paediatrics, Plastic and
                        Reconstructive Surgery, Psychiatry on an OPD-only basis,
                        and Respiratory Medicine.

                    </div>

                </details>


                <!-- FAQ 7 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Do I need a prescription or referral for a diagnostic test?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        Whether a prescription or referral is required depends
                        on the diagnostic test, clinical situation and hospital
                        or treating doctor protocol. If you are unsure about
                        the requirements for a particular test, contact the
                        hospital before visiting.

                    </div>

                </details>


                <!-- FAQ 8 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Where is Akropolis Super Speciality Hospital located in Gurugram?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        Akropolis Super Speciality Hospital is located in
                        Sector 69, Gurugram, near Vatika Chowk and opposite
                        Chinar Garden, Haryana 122101.

                    </div>

                </details>


                <!-- FAQ 9 -->

                <details
                    class="group border border-gray-200 rounded-2xl bg-gray-50"
                >

                    <summary
                        class="cursor-pointer list-none flex items-center justify-between gap-6 p-6 font-bold text-gray-900"
                    >

                        Does Akropolis Super Speciality Hospital provide emergency care?

                        <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform">
                            +
                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                        Akropolis Super Speciality Hospital provides 24×7
                        emergency care. Patients requiring urgent medical
                        attention should contact the hospital emergency service
                        or seek immediate medical care.

                    </div>

                </details>


            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FINAL CTA
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div
            class="max-w-5xl mx-auto text-center bg-[#0F1A33] rounded-3xl p-8 lg:p-12 text-white"
        >

            <div
                class="inline-flex items-center gap-2 bg-white/10 border border-white/10 rounded-full px-4 py-2 text-sm mb-5"
            >

                <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                Akropolis Super Speciality Hospital

            </div>


            <h2
                class="text-3xl lg:text-4xl font-bold mb-5"
            >

                Need Help Choosing the Right Medical or Diagnostic Service?

            </h2>


            <p
                class="text-blue-100 max-w-2xl mx-auto leading-relaxed mb-8"
            >

                Explore our medical departments, diagnostic services and
                specialist doctors, or contact Akropolis for information
                about appointments and hospital services.

            </p>


            <div class="flex flex-wrap justify-center gap-4">

                <a
                    href="/departments"
                    class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition"
                >

                    View Departments

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>


                <a
                    href="/doctors"
                    class="inline-flex items-center gap-2 bg-white text-[#0F1A33] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition"
                >

                    Meet Our Doctors

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>


                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c45f39] text-white px-6 py-3 rounded-lg font-semibold transition"
                >

                    Contact Akropolis

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>

        </div>

    </div>

</section>


</main>


<!-- =========================================================
     FOOTER
========================================================== -->

<?php include 'includes/footer.php'; ?>


<!-- =========================================================
     SCRIPTS
========================================================== -->

<?php include 'includes/scripts.php'; ?>