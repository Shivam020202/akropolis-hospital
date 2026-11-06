<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'Best Hospital for Advanced Diagnostic & Medical Services in Gurugram | Akropolis';

$page_description = 'Akropolis Super Speciality Hospital provides advanced diagnostic and medical services in Gurugram, including CT Scan, Endoscopy, Dialysis, Laboratory, Bronchoscopy and Colonoscopy.';

$canonical_url = '/services';

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
     SERVICES HERO
========================================================== -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#0F2747] via-[#174B75] to-[#328CCB] py-16 lg:py-20">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto text-center text-white">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 text-sm font-medium mb-6">

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

                <!-- FIXED: Full internal URL + anchor -->
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
     INTRO
========================================================== -->
<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-3xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5">

                <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>

                Our Services

            </div>


            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">
                Medical and Diagnostic Services
            </h2>


            <p class="text-gray-600 text-lg leading-relaxed">
                Akropolis Super Speciality Hospital provides a range of
                diagnostic and clinical services to support assessment,
                diagnosis and ongoing medical care. Explore the individual
                services below for more information.
            </p>

        </div>

    </div>

</section>



<!-- =========================================================
     SERVICE CARDS
     IMPORTANT: This section has the anchor ID used by
     "Explore Diagnostic Services" in the hero.
========================================================== -->
<section
    id="diagnostic-services"
    class="scroll-mt-32 py-16 lg:py-20 bg-gray-50"
>

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">


            <!-- =================================================
                 CT SCAN
            ================================================== -->
            <a
                href="/ct-scan"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Scan', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    CT Scan
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    CT Scan services for detailed cross-sectional imaging
                    to support medical evaluation and diagnosis.
                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore CT Scan

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- =================================================
                 ENDOSCOPY
            ================================================== -->
            <a
                href="/endoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Activity', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    Endoscopy
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    Endoscopy services that support examination of internal
                    areas of the digestive system as clinically indicated.
                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Endoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- =================================================
                 DIALYSIS
            ================================================== -->
            <a
                href="/dialysis"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('HeartPulse', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    Dialysis
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    Dialysis services for patients requiring renal
                    replacement therapy as part of their clinical care.
                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Dialysis

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- =================================================
                 LABORATORY
            ================================================== -->
            <a
                href="/laboratory"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('FlaskConical', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    Laboratory
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    Laboratory services supporting clinical evaluation
                    through diagnostic testing and investigations.
                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Laboratory

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- =================================================
                 BRONCHOSCOPY
            ================================================== -->
            <a
                href="/bronchoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Wind', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    Bronchoscopy
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    Bronchoscopy services used for clinical examination
                    of the airways when medically indicated.
                </p>


                <span class="inline-flex items-center gap-2 text-[#328CCB] font-semibold">

                    Explore Bronchoscopy

                    <?php echo getIcon('ArrowRight', 'h-4 w-4 group-hover:translate-x-1 transition-transform'); ?>

                </span>

            </a>



            <!-- =================================================
                 COLONOSCOPY
            ================================================== -->
            <a
                href="/colonoscopy"
                class="group bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
            >

                <div class="w-14 h-14 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-6">

                    <?php echo getIcon('Search', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                    Colonoscopy
                </h2>


                <p class="text-gray-600 leading-relaxed mb-5">
                    Colonoscopy services supporting examination of the
                    colon and lower digestive tract when clinically indicated.
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
     SERVICES + DEPARTMENTS CONNECTION
========================================================== -->
<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">


            <!-- =================================================
                 DEPARTMENTS
            ================================================== -->
            <div class="rounded-2xl bg-gray-50 border border-gray-100 p-8 lg:p-10">

                <div class="w-12 h-12 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center mb-5">

                    <?php echo getIcon('Building2', 'h-6 w-6'); ?>

                </div>


                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Explore Our Medical Departments
                </h2>


                <p class="text-gray-600 leading-relaxed mb-6">
                    Explore the medical departments at Akropolis Super
                    Speciality Hospital and learn more about the specialties
                    and clinical care available at the hospital.
                </p>


                <a
                    href="/departments"
                    class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-5 py-3 rounded-lg font-semibold transition-all duration-300"
                >
                    View All Departments

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>



            <!-- =================================================
                 DOCTORS
            ================================================== -->
            <div class="rounded-2xl bg-[#0F1A33] p-8 lg:p-10 text-white">

                <div class="w-12 h-12 rounded-xl bg-white/10 text-[#7CC7FF] flex items-center justify-center mb-5">

                    <?php echo getIcon('UserRound', 'h-6 w-6'); ?>

                </div>


                <h2 class="text-2xl font-bold mb-4">
                    Meet Our Doctors
                </h2>


                <p class="text-blue-100 leading-relaxed mb-6">
                    Find doctors and specialists associated with Akropolis
                    Super Speciality Hospital and explore their areas of
                    medical expertise.
                </p>


                <a
                    href="/doctors"
                    class="inline-flex items-center gap-2 bg-white text-[#0F1A33] hover:bg-gray-100 px-5 py-3 rounded-lg font-semibold transition-all duration-300"
                >
                    Meet Our Doctors

                    <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     LOCATION / EMERGENCY CTA
========================================================== -->
<section class="py-16 lg:py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="bg-gradient-to-r from-[#328CCB] to-[#246EA3] rounded-3xl p-8 lg:p-12 text-white overflow-hidden relative">

            <div class="absolute -right-20 -top-20 w-72 h-72 bg-white/10 rounded-full"></div>

            <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-white/5 rounded-full"></div>


            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">


                <div>

                    <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 text-sm mb-5">

                        <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                        Sector 69, Gurugram

                    </div>


                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                        Need Help Choosing a Service?
                    </h2>


                    <p class="text-blue-100 leading-relaxed max-w-xl">
                        Contact Akropolis Super Speciality Hospital for
                        information about services, appointments and
                        hospital visits.
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
                        href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>"
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


</main>


<!-- =========================================================
     FOOTER
========================================================== -->
<?php include 'includes/footer.php'; ?>


<!-- =========================================================
     SCRIPTS
========================================================== -->
<?php include 'includes/scripts.php'; ?>