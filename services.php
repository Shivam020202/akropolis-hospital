<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'Best Hospital for Advanced Diagnostic & Medical Services in Gurugram | Akropolis';

$page_description = 'Akropolis Super Speciality Hospital provides advanced diagnostic and medical services in Gurugram, including CT Scan, Endoscopy, Dialysis, Laboratory, Bronchoscopy and Colonoscopy.';

$canonical_url = '/services';

/*
|--------------------------------------------------------------------------
| PAGE SCHEMA
|--------------------------------------------------------------------------
| Uses only schema functions already available on the website.
| FAQPage is created directly as JSON-LD to avoid dependency on an
| unavailable schemaFAQPage() function.
|--------------------------------------------------------------------------
*/

$faq_items = [
    [
        'question' => 'What diagnostic services are available at Akropolis Super Speciality Hospital?',
        'answer' => 'Akropolis Super Speciality Hospital provides diagnostic and clinical services including CT Scan, Endoscopy, Dialysis, Laboratory, Bronchoscopy and Colonoscopy. Additional diagnostic services are also available within the hospital as part of its accredited scope of services.'
    ],
    [
        'question' => 'Do I need a doctor’s recommendation before getting a diagnostic test?',
        'answer' => 'The requirement can vary depending on the investigation and the patient’s clinical situation. Patients should confirm the requirement for their specific test with the hospital or their treating doctor before scheduling the investigation.'
    ],
    [
        'question' => 'Do all diagnostic tests require fasting?',
        'answer' => 'No. Preparation requirements vary between investigations. Patients should follow the specific preparation instructions provided for their particular test or procedure.'
    ],
    [
        'question' => 'What should I bring when visiting for a diagnostic investigation?',
        'answer' => 'Patients should carry their relevant prescription or medical recommendation and previous reports or imaging records related to their current condition, where available. Additional requirements may vary depending on the investigation.'
    ],
    [
        'question' => 'How do I know which diagnostic test I need?',
        'answer' => 'The appropriate investigation depends on the symptoms, medical history and clinical question being evaluated. A doctor can determine which investigation is appropriate based on the individual patient’s clinical situation.'
    ],
    [
        'question' => 'Can I access diagnostic services and specialist medical care at the same hospital?',
        'answer' => 'Yes. Akropolis Super Speciality Hospital provides multiple medical departments together with diagnostic and clinical services, allowing patients to access different aspects of their healthcare journey at the hospital.'
    ],
    [
        'question' => 'Where is Akropolis Super Speciality Hospital located?',
        'answer' => 'Akropolis Super Speciality Hospital is located near Vatika Chowk, opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101.'
    ],
    [
        'question' => 'Does Akropolis Super Speciality Hospital provide emergency care?',
        'answer' => 'Akropolis Super Speciality Hospital provides 24×7 emergency care. Patients requiring urgent medical attention should contact the hospital’s emergency service or seek immediate medical assistance.'
    ]
];

$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    '@id' => 'https://akropolishospital.com/services#faq',
    'mainEntity' => []
];

foreach ($faq_items as $faq) {
    $faq_schema['mainEntity'][] = [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer']
        ]
    ];
}

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
        ]
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
            <?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>
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

        <div class="max-w-4xl mx-auto text-center text-white">

            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-sm font-medium mb-6"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Advanced Diagnostic &amp; Medical Services

            </div>


            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">

                Best Hospital for Advanced Diagnostic &amp; Medical Services in Gurugram

            </h1>


            <p class="max-w-3xl mx-auto text-lg md:text-xl text-white/90 leading-relaxed">

                Akropolis Super Speciality Hospital provides advanced diagnostic and medical services in Gurugram, bringing specialist medical care, diagnostic facilities and clinical support together under one roof.

            </p>


            <p class="max-w-3xl mx-auto mt-4 text-base md:text-lg text-white/80 leading-relaxed">

                From CT Scan, Endoscopy, Dialysis and Laboratory services to Bronchoscopy and Colonoscopy, our diagnostic services support doctors in evaluating and managing a wide range of medical conditions.

            </p>


            <div class="flex flex-wrap justify-center gap-3 mt-8">

                <button
                    type="button"
                    onclick="document.getElementById('diagnostic-services').scrollIntoView({ behavior: 'smooth', block: 'start' });"
                    class="inline-flex items-center gap-2 bg-white text-[#174B75] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition cursor-pointer"
                >

                    Explore Diagnostic Services

                    <?php echo getIcon('ArrowDown', 'h-5 w-5'); ?>

                </button>


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
     INTRODUCTION
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto text-center">

            <div
                class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
            >

                <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                Our Services

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Medical and Diagnostic Services

            </h2>


            <p class="text-gray-600 text-lg leading-relaxed">

                Akropolis Super Speciality Hospital provides medical and diagnostic services that support consultation, clinical assessment, diagnosis and ongoing patient care. Patients can access specialist departments alongside diagnostic and clinical support services at the hospital in Sector 69, Gurugram.

            </p>

        </div>

    </div>

</section>



<!-- =========================================================
     DIAGNOSTIC SERVICES
========================================================== -->

<section
    id="diagnostic-services"
    class="scroll-mt-32 py-16 lg:py-20 bg-gray-50"
>

    <div class="container mx-auto px-4">


        <div class="max-w-3xl mx-auto text-center mb-12">

            <div
                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Advanced Diagnostics

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                Diagnostic Services at Akropolis

            </h2>


            <p class="text-gray-600 text-lg leading-relaxed">

                Explore the diagnostic services available at Akropolis Super Speciality Hospital. The appropriate investigation depends on the patient’s clinical condition and the treating doctor’s recommendation.

            </p>

        </div>



        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">


            <!-- CT SCAN -->

            <a
                href="/ct-scan"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Scan', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    CT Scan

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    CT Scan provides detailed cross-sectional imaging that can help doctors evaluate internal structures and investigate a range of clinical conditions.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore CT Scan

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- ENDOSCOPY -->

            <a
                href="/endoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    Endoscopy

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Endoscopy allows doctors to examine parts of the digestive system using an endoscope when clinically indicated.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Endoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- DIALYSIS -->

            <a
                href="/dialysis"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('HeartPulse', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    Dialysis

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Dialysis services support patients who require renal replacement therapy as part of their medical care and treatment plan.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Dialysis

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- LABORATORY -->

            <a
                href="/laboratory"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('FlaskConical', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    Laboratory

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Laboratory services support clinical evaluation through diagnostic testing and investigations that help doctors assess a patient’s condition.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Laboratory

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- BRONCHOSCOPY -->

            <a
                href="/bronchoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Wind', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    Bronchoscopy

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Bronchoscopy enables clinical examination of the airways when a doctor considers the procedure appropriate for the patient.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Bronchoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- COLONOSCOPY -->

            <a
                href="/colonoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Search', 'h-7 w-7'); ?>

                </div>


                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">

                    Colonoscopy

                </h3>


                <p class="text-gray-600 leading-relaxed mb-5">

                    Colonoscopy supports examination of the colon and lower digestive tract when clinically indicated by a doctor.

                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Colonoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     UNDERSTANDING THE SERVICES
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-12">

                <div
                    class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
                >

                    <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                    Understanding Your Diagnostic Options

                </div>


                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                    Which Diagnostic Service May Be Recommended?

                </h2>


                <p class="text-gray-600 text-lg leading-relaxed">

                    Different investigations answer different clinical questions. Your doctor may recommend a particular diagnostic service based on your symptoms, medical history, examination findings and the information needed to guide further care.

                </p>

            </div>


            <div class="space-y-5">


                <div class="border border-gray-100 rounded-2xl p-6 bg-gray-50">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        CT Scan

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        A CT scan uses X-rays and computer processing to create detailed cross-sectional images of the body. Your doctor may recommend it when detailed internal imaging is clinically required.

                    </p>

                </div>


                <div class="border border-gray-100 rounded-2xl p-6 bg-gray-50">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        Endoscopy and Colonoscopy

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        These procedures allow doctors to examine parts of the digestive tract using specialised instruments. The specific procedure depends on the area that needs to be evaluated.

                    </p>

                </div>


                <div class="border border-gray-100 rounded-2xl p-6 bg-gray-50">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        Bronchoscopy

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Bronchoscopy is used to examine the airways when clinically indicated. A respiratory or other treating specialist may recommend it based on the patient's symptoms and clinical findings.

                    </p>

                </div>


                <div class="border border-gray-100 rounded-2xl p-6 bg-gray-50">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        Laboratory Services

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Laboratory investigations can provide information that supports diagnosis, treatment decisions and monitoring. The specific tests required depend on the patient's clinical needs.

                    </p>

                </div>


                <div class="border border-gray-100 rounded-2xl p-6 bg-gray-50">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        Dialysis

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Dialysis is a renal replacement therapy used when kidney function is insufficient to adequately perform its normal functions. Treatment schedules and requirements are determined by the treating nephrologist.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     ADDITIONAL DIAGNOSTIC SERVICES
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="max-w-3xl mx-auto text-center mb-10">

            <div
                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5 border border-gray-100"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Additional Diagnostic Services

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                More Diagnostic Capabilities at Akropolis

            </h2>


            <p class="text-gray-600 text-lg leading-relaxed">

                In addition to the services highlighted above, Akropolis Super Speciality Hospital's accredited scope includes other diagnostic services. Availability and suitability depend on the clinical requirement.

            </p>

        </div>


        <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">


            <div class="bg-white rounded-xl border border-gray-100 p-5 text-center">

                <div class="font-semibold text-gray-900">

                    2D Echo

                </div>

                <p class="text-sm text-gray-500 mt-2">

                    Cardiac imaging

                </p>

            </div>


            <div class="bg-white rounded-xl border border-gray-100 p-5 text-center">

                <div class="font-semibold text-gray-900">

                    Spirometry

                </div>

                <p class="text-sm text-gray-500 mt-2">

                    Lung function testing

                </p>

            </div>


            <div class="bg-white rounded-xl border border-gray-100 p-5 text-center">

                <div class="font-semibold text-gray-900">

                    Treadmill Testing

                </div>

                <p class="text-sm text-gray-500 mt-2">

                    Cardiac exercise testing

                </p>

            </div>


            <div class="bg-white rounded-xl border border-gray-100 p-5 text-center">

                <div class="font-semibold text-gray-900">

                    Ultrasound

                </div>

                <p class="text-sm text-gray-500 mt-2">

                    Diagnostic imaging

                </p>

            </div>


            <div class="bg-white rounded-xl border border-gray-100 p-5 text-center">

                <div class="font-semibold text-gray-900">

                    X-Ray

                </div>

                <p class="text-sm text-gray-500 mt-2">

                    Diagnostic imaging

                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     MEDICAL CARE + DIAGNOSTICS
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">


            <!-- MEDICAL DEPARTMENTS -->

            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-8 lg:p-10">

                <div
                    class="w-12 h-12 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-5"
                >

                    <?php echo getIcon('Building2', 'h-6 w-6'); ?>

                </div>


                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">

                    Medical Care and Diagnostics Under One Roof

                </h2>


                <p class="text-gray-600 leading-relaxed mb-6">

                    Diagnostic investigations are often part of a wider healthcare journey. Akropolis brings diagnostic and clinical services together with specialist medical departments at its Gurugram hospital.

                </p>


                <div class="grid grid-cols-2 gap-3 mb-7">

                    <a
                        href="/orthopedics"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Orthopedics
                    </a>

                    <a
                        href="/cardiology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Cardiology
                    </a>

                    <a
                        href="/neurology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Neurology
                    </a>

                    <a
                        href="/nephrology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Nephrology
                    </a>

                    <a
                        href="/gastroenterology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Gastroenterology
                    </a>

                    <a
                        href="/pediatrics"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Pediatrics
                    </a>

                    <a
                        href="/dermatology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Dermatology
                    </a>

                    <a
                        href="/ent"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        ENT
                    </a>

                    <a
                        href="/ophthalmology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Ophthalmology
                    </a>

                    <a
                        href="/plastic-surgery"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Plastic Surgery
                    </a>

                    <a
                        href="/obstetrics-gynecology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Obstetrics &amp; Gynecology
                    </a>

                    <a
                        href="/oncology"
                        class="bg-white rounded-lg border border-gray-100 px-4 py-3 text-sm font-semibold text-gray-800 hover:text-[#328CCB] hover:border-[#328CCB]/30 transition"
                    >
                        Oncology
                    </a>

                </div>


                <a
                    href="/departments"
                    class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-5 py-3 rounded-lg font-semibold transition"
                >

                    View All Departments

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>



            <!-- DOCTORS -->

            <div class="rounded-2xl bg-[#0F1A33] p-8 lg:p-10 text-white">

                <div
                    class="w-12 h-12 rounded-xl bg-white/10 text-[#7CC7FF] flex items-center justify-center mb-5"
                >

                    <?php echo getIcon('UserRound', 'h-6 w-6'); ?>

                </div>


                <h2 class="text-2xl lg:text-3xl font-bold mb-4">

                    Specialist Consultation and Diagnostic Care

                </h2>


                <p class="text-blue-100 leading-relaxed mb-6">

                    Choosing the right diagnostic investigation often begins with understanding the patient's symptoms and clinical history. Specialist consultation can help determine which investigation is appropriate and how the findings may contribute to further care.

                </p>


                <p class="text-blue-100 leading-relaxed mb-7">

                    Explore the doctors associated with Akropolis Super Speciality Hospital and their areas of medical expertise.

                </p>


                <a
                    href="/doctors"
                    class="inline-flex items-center gap-2 bg-white text-[#0F1A33] hover:bg-gray-100 px-5 py-3 rounded-lg font-semibold transition"
                >

                    Meet Our Doctors

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     BEFORE BOOKING
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-12">

                <div
                    class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5 border border-gray-100"
                >

                    <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                    Patient Guidance

                </div>


                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                    Before You Book a Diagnostic Test

                </h2>


                <p class="text-gray-600 text-lg leading-relaxed">

                    A little preparation can make a diagnostic visit easier. Requirements vary by investigation, so always follow the instructions provided for your specific test or procedure.

                </p>

            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                <div class="bg-white rounded-2xl border border-gray-100 p-7">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        1. Confirm the Recommended Investigation

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Discuss the investigation with your treating doctor and confirm which test or procedure is appropriate for your clinical situation.

                    </p>

                </div>


                <div class="bg-white rounded-2xl border border-gray-100 p-7">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        2. Ask About Preparation

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Preparation differs between investigations. Confirm whether fasting, medication instructions or any other preparation is required before your appointment.

                    </p>

                </div>


                <div class="bg-white rounded-2xl border border-gray-100 p-7">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        3. Carry Previous Reports

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Bring relevant prescriptions, previous reports and imaging records where available. These may help your doctor understand your medical history and previous findings.

                    </p>

                </div>


                <div class="bg-white rounded-2xl border border-gray-100 p-7">

                    <h3 class="text-xl font-bold text-gray-900 mb-3">

                        4. Confirm Appointment Details

                    </h3>

                    <p class="text-gray-600 leading-relaxed">

                        Before visiting, confirm the appointment timing and any test-specific instructions with the hospital.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     HOW TO CHOOSE
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto text-center">

            <div
                class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
            >

                <?php echo getIcon('Activity', 'h-4 w-4'); ?>

                Making the Right Choice

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                How to Choose the Right Diagnostic Investigation

            </h2>


            <p class="text-gray-600 text-lg leading-relaxed mb-6">

                The right diagnostic investigation depends on the symptoms, medical history and clinical question being evaluated. A CT Scan, Endoscopy, Laboratory investigation, Bronchoscopy or Colonoscopy serves a different clinical purpose.

            </p>


            <p class="text-gray-600 text-lg leading-relaxed">

                Patients should consult their treating doctor to determine which investigation is appropriate rather than choosing a test solely based on symptoms or online information. The doctor can also advise whether any preparation is required before the investigation.

            </p>

        </div>

    </div>

</section>



<!-- =========================================================
     LOCAL GURUGRAM SECTION
========================================================== -->

<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="max-w-5xl mx-auto">

            <div class="bg-white rounded-3xl border border-gray-100 p-8 lg:p-12">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">


                    <div>

                        <div
                            class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
                        >

                            <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                            Sector 69, Gurugram

                        </div>


                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                            Advanced Diagnostic &amp; Medical Services in Gurugram

                        </h2>


                        <p class="text-gray-600 leading-relaxed mb-5">

                            Akropolis Super Speciality Hospital is located near Vatika Chowk, opposite Chinar Garden, in Sector 69, Gurugram. The hospital provides medical departments together with diagnostic and clinical support services for patients seeking healthcare in Gurugram.

                        </p>


                        <p class="text-gray-600 leading-relaxed">

                            Patients can contact the hospital to confirm service availability, appointment requirements and preparation instructions before visiting.

                        </p>

                    </div>


                    <div class="bg-gray-50 rounded-2xl p-7">

                        <h3 class="text-xl font-bold text-gray-900 mb-5">

                            Hospital Location

                        </h3>


                        <div class="space-y-4">


                            <div class="flex gap-3">

                                <?php echo getIcon('MapPin', 'h-5 w-5 text-[#328CCB] mt-1'); ?>

                                <p class="text-gray-600 leading-relaxed">

                                    Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101

                                </p>

                            </div>


                            <div class="flex gap-3">

                                <?php echo getIcon('Phone', 'h-5 w-5 text-[#D66C43] mt-1'); ?>

                                <p class="text-gray-600">

                                    Emergency 24×7:
                                    <strong>
                                        <?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>
                                    </strong>

                                </p>

                            </div>

                        </div>


                        <div class="flex flex-wrap gap-3 mt-7">

                            <a
                                href="/contact"
                                class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-5 py-3 rounded-lg font-semibold transition"
                            >

                                Contact Us

                                <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                            </a>


                            <a
                                href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c45e38] text-white px-5 py-3 rounded-lg font-semibold transition"
                            >

                                <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                                Emergency

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FAQ
========================================================== -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto">

            <div class="text-center mb-12">

                <div
                    class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5"
                >

                    <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                    Frequently Asked Questions

                </div>


                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                    Frequently Asked Questions About Medical &amp; Diagnostic Services

                </h2>


                <p class="text-gray-600 text-lg leading-relaxed">

                    Answers to common questions patients may have before arranging a diagnostic investigation or medical visit.

                </p>

            </div>


            <div class="space-y-4">


                <?php foreach ($faq_items as $faq): ?>

                    <details class="group border border-gray-200 rounded-xl bg-white overflow-hidden">

                        <summary
                            class="cursor-pointer list-none px-6 py-5 font-semibold text-gray-900 flex items-center justify-between gap-4"
                        >

                            <span>
                                <?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?>
                            </span>

                            <span
                                class="text-[#328CCB] text-xl flex-shrink-0 group-open:rotate-45 transition-transform"
                            >
                                +
                            </span>

                        </summary>


                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                            <?php echo htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8'); ?>

                        </div>

                    </details>

                <?php endforeach; ?>

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
            class="bg-gradient-to-r from-[#328CCB] to-[#246EA3] rounded-3xl p-8 lg:p-12 text-white overflow-hidden relative"
        >

            <div class="absolute -right-20 -top-20 w-72 h-72 bg-white/10 rounded-full"></div>

            <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-white/5 rounded-full"></div>


            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">


                <div>

                    <div
                        class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 text-sm mb-5"
                    >

                        <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                        Sector 69, Gurugram

                    </div>


                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">

                        Need Help Choosing a Service?

                    </h2>


                    <p class="text-blue-100 leading-relaxed max-w-xl">

                        Contact Akropolis Super Speciality Hospital for information about services, appointments and hospital visits.

                    </p>

                </div>


                <div class="flex flex-col sm:flex-row lg:justify-end gap-4">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-white text-[#328CCB] hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition"
                    >

                        Contact Us

                        <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                    </a>


                    <a
                        href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c45e38] text-white px-6 py-3 rounded-lg font-semibold transition"
                    >

                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                        Emergency

                    </a>

                </div>

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