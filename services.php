<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'Medical & Diagnostic Services | Akropolis Super Speciality Hospital';
$page_description = 'Explore medical and diagnostic services at Akropolis Super Speciality Hospital in Sector 69, Gurugram, including CT Scan, Endoscopy, Dialysis, Laboratory, Bronchoscopy and Colonoscopy.';
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

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-center space-x-2">
        <?php echo getIcon('Phone', 'h-4 w-4'); ?>

        <span class="font-semibold text-sm md:text-base">
            Emergency 24×7:
            <?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>
        </span>
    </div>
</div>

<!-- Header -->
<?php include 'includes/header-v2.php'; ?>

<main>

    <!-- =========================================================
         HERO
    ========================================================== -->
    <section class="relative overflow-hidden bg-[#0F1A33] text-white">

        <div class="absolute inset-0 bg-gradient-to-br from-[#0F1A33] via-[#163B5C] to-[#328CCB]"></div>

        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-[#328CCB]/20 blur-3xl"></div>
        <div class="absolute -left-32 bottom-0 w-96 h-96 rounded-full bg-[#D66C43]/10 blur-3xl"></div>

        <div class="container mx-auto px-4 py-20 lg:py-28 relative z-10">

            <div class="max-w-4xl mx-auto text-center">

                <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-6">
                    <?php echo getIcon('Activity', 'h-4 w-4 text-[#7CC7FF]'); ?>
                    <span class="text-sm font-semibold">
                        Medical &amp; Diagnostic Services
                    </span>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6">
                    Healthcare Services at
                    <span class="text-[#7CC7FF]"> Akropolis</span>
                </h1>

                <p class="text-lg lg:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">
                    Explore the medical and diagnostic services available at
                    Akropolis Super Speciality Hospital in Sector 69, Gurugram,
                    supporting patients across a range of healthcare needs.
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">

                    <a
                        href="/departments"
                        class="inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300"
                    >
                        Explore Departments
                        <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
                    </a>

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 border border-white/30 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300"
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
    ========================================================== -->
    <section class="py-16 lg:py-20 bg-gray-50">

        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                <!-- CT Scan -->
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


                <!-- Endoscopy -->
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


                <!-- Dialysis -->
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


                <!-- Laboratory -->
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


                <!-- Bronchoscopy -->
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


                <!-- Colonoscopy -->
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

                <!-- Departments -->
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


                <!-- Doctors -->
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

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>