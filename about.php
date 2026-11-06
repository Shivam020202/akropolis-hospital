<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'About Akropolis Super Speciality Hospital | Gurugram';

$page_description = 'Learn about Akropolis Super Speciality Hospital in Sector 69, Gurugram, including its hospital opening on 23 October 2023, NABH accreditation, medical departments, diagnostic services and 24×7 emergency care.';

$canonical_url = '/about';

$schema_blocks = [
    json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'AboutPage',
        '@id' => 'https://akropolishospital.com/about#aboutpage',
        'name' => 'About Akropolis Super Speciality Hospital',
        'url' => 'https://akropolishospital.com/about',
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
        ['name' => 'About', 'url' => '/about']
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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Hero Copy -->
                <div>

                    <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-6">
                        <?php echo getIcon('Award', 'h-5 w-5 text-yellow-300'); ?>

                        <span class="text-sm font-semibold">
                            NABH Accredited Hospital
                        </span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        About
                        <span class="text-[#62B5F5]">
                            Akropolis
                        </span>
                        Super Speciality Hospital
                    </h1>

                    <p class="text-lg lg:text-xl text-blue-100 leading-relaxed max-w-2xl mb-8">
                        A healthcare institution in Sector 69, Gurugram, opened on 23 October 2023,
                        with medical departments, diagnostic services and 24×7 emergency
                        care serving patients from Gurugram and surrounding areas.
                    </p>

                    <div class="flex flex-wrap gap-4">

                        <a
                            href="/doctors"
                            class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                        >
                            Meet Our Doctors
                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                        </a>

                        <a
                            href="/contact"
                            class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 border border-white/25 text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                        >
                            Book an Appointment
                            <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                        </a>

                    </div>

                </div>

                <!-- Hero Image -->
                <div class="relative">

                    <div class="absolute -inset-4 bg-[#328CCB]/20 rounded-3xl blur-2xl"></div>

                    <div class="relative overflow-hidden rounded-3xl border border-white/20 shadow-2xl bg-white">

                        <img
                            src="/assets/images/shared-template/akropolis-about-hospital.webp"
                            alt="Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                            width="1920"
                            height="1080"
                            class="w-full h-auto object-contain"
                            loading="eager"
                            fetchpriority="high"
                        >

                    </div>

                    <!-- Location Badge -->
                    <div class="absolute -bottom-5 left-5 right-5 sm:left-auto sm:right-5 bg-white text-gray-900 rounded-2xl shadow-xl px-5 py-4 max-w-sm">

                        <div class="flex items-start gap-3">

                            <div class="bg-[#328CCB]/10 p-2.5 rounded-xl shrink-0">
                                <?php echo getIcon('MapPin', 'h-5 w-5 text-[#328CCB]'); ?>
                            </div>

                            <div>

                                <div class="font-bold text-sm mb-1">
                                    Our Location
                                </div>

                                <div class="text-sm text-gray-600 leading-relaxed">
                                    Near Vatika Chowk, Opposite Chinar Garden,
                                    Sector 69, Gurugram, Haryana 122101
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         INTRO / JOURNEY
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-white">

        <div class="container mx-auto px-4">

            <div class="max-w-3xl mx-auto text-center mb-14">

                <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5">
                    <?php echo getIcon('History', 'h-4 w-4'); ?>
                    Our Journey
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                    A Healthcare Journey Built on
                    <span class="text-[#328CCB]">
                        Care and Trust
                    </span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Since opening on 23 October 2023, Akropolis Super Speciality Hospital
                    has served patients from Gurugram and surrounding areas with
                    medical and diagnostic services.
                </p>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 lg:gap-20 items-center">

                <!-- Image -->
                <div class="relative">

                    <div class="absolute -top-6 -left-6 w-28 h-28 rounded-full bg-[#328CCB]/10 blur-2xl"></div>

                    <div class="absolute -bottom-6 -right-6 w-32 h-32 rounded-full bg-[#D66C43]/10 blur-2xl"></div>

                    <div class="relative overflow-hidden rounded-3xl shadow-xl border border-gray-100 bg-white">

                        <img
                            src="/assets/images/shared-template/akropolis-about-hospital.webp"
                            alt="Akropolis Super Speciality Hospital healthcare facility in Gurugram"
                            width="1920"
                            height="1080"
                            class="w-full h-auto object-contain"
                            loading="lazy"
                        >

                    </div>

                </div>

                <!-- Content -->
                <div>

                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        From a Local Healthcare Facility to a
                        <span class="text-[#328CCB]">
                            Super Speciality Hospital
                        </span>
                    </h2>

                    <div class="space-y-5 text-gray-600 leading-relaxed text-lg">

                        <p>
                            Akropolis Super Speciality Hospital opened on 23 October 2023
                            in Sector 69, Gurugram, providing care across multiple
                            medical specialties.
                        </p>

                        <p>
                            The hospital brings together specialist doctors,
                            medical departments, diagnostic services and
                            emergency care to support patients through different
                            stages of their healthcare journey.
                        </p>

                        <p>
                            Located near Vatika Chowk and opposite Chinar Garden
                            in Sector 69, the hospital serves patients from
                            Gurugram and surrounding areas.
                        </p>

                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">

                        <div class="p-5 rounded-2xl bg-[#328CCB]/5 border border-[#328CCB]/10">

                            <div class="bg-[#328CCB]/10 w-fit p-3 rounded-xl mb-4">
                                <?php echo getIcon('Target', 'h-6 w-6 text-[#328CCB]'); ?>
                            </div>

                            <h3 class="font-bold text-gray-900 mb-2">
                                Our Mission
                            </h3>

                            <p class="text-sm text-gray-600 leading-relaxed">
                                To provide accessible, affordable and
                                high-quality healthcare.
                            </p>

                        </div>

                        <div class="p-5 rounded-2xl bg-[#D66C43]/5 border border-[#D66C43]/10">

                            <div class="bg-[#D66C43]/10 w-fit p-3 rounded-xl mb-4">
                                <?php echo getIcon('Eye', 'h-6 w-6 text-[#D66C43]'); ?>
                            </div>

                            <h3 class="font-bold text-gray-900 mb-2">
                                Our Vision
                            </h3>

                            <p class="text-sm text-gray-600 leading-relaxed">
                                To be a trusted healthcare partner for
                                patients in the region.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         WHAT MAKES AKROPOLIS DISTINCT
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-gray-50">

        <div class="container mx-auto px-4">

            <div class="max-w-3xl mx-auto text-center mb-14">

                <div class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100">
                    <?php echo getIcon('Building2', 'h-4 w-4'); ?>
                    About Akropolis
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">
                    Healthcare Designed Around
                    <span class="text-[#328CCB]">
                        Patient Needs
                    </span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Akropolis brings together specialist medical care,
                    diagnostic services and emergency support at its
                    Gurugram facility.
                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- NABH -->
                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-lg transition-shadow">

                    <div class="bg-yellow-50 w-fit p-4 rounded-2xl mb-6">
                        <?php echo getIcon('Award', 'h-7 w-7 text-yellow-600'); ?>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        NABH Accredited
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Akropolis Super Speciality Hospital is an
                        NABH-accredited hospital.
                    </p>

                </div>

                <!-- Departments -->
                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-lg transition-shadow">

                    <div class="bg-[#328CCB]/10 w-fit p-4 rounded-2xl mb-6">
                        <?php echo getIcon('Stethoscope', 'h-7 w-7 text-[#328CCB]'); ?>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Multiple Medical Departments
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Medical care across specialties including
                        orthopedics, cardiology, neurology, nephrology,
                        gastroenterology and more.
                    </p>

                    <a
                        href="/departments"
                        class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                    >
                        Explore Departments
                        <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                    </a>

                </div>

                <!-- Diagnostics -->
                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-lg transition-shadow">

                    <div class="bg-green-50 w-fit p-4 rounded-2xl mb-6">
                        <?php echo getIcon('Activity', 'h-7 w-7 text-green-600'); ?>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Diagnostic Services
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Diagnostic services include CT Scan, Endoscopy,
                        Dialysis, Laboratory, Bronchoscopy and Colonoscopy.
                    </p>

                    <a
                        href="/services"
                        class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                    >
                        Explore Services
                        <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                    </a>

                </div>

                <!-- Emergency -->
                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-sm hover:shadow-lg transition-shadow">

                    <div class="bg-[#D66C43]/10 w-fit p-4 rounded-2xl mb-6">
                        <?php echo getIcon('Siren', 'h-7 w-7 text-[#D66C43]'); ?>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        24×7 Emergency Care
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Emergency services are available around the clock
                        for patients requiring immediate medical attention.
                    </p>

                    <a
                        href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="inline-flex items-center gap-2 text-[#D66C43] font-semibold"
                    >
                        Call Emergency
                        <?php echo getIcon('Phone', 'h-4 w-4'); ?>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         SPECIALTIES
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-white">

        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">

                <div class="lg:col-span-1">

                    <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5">
                        <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>
                        Medical Care
                    </div>

                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">
                        Our Medical
                        <span class="text-[#328CCB]">
                            Departments
                        </span>
                    </h2>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Akropolis provides specialist healthcare services
                        across a range of medical departments at its
                        Gurugram hospital.
                    </p>

                    <a
                        href="/departments"
                        class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                    >
                        View All Departments
                        <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                    </a>

                </div>

                <div class="lg:col-span-2">

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">

                        <?php
                        $departments = [
                            ['name' => 'Orthopedics', 'href' => '/orthopedics'],
                            ['name' => 'Plastic Surgery', 'href' => '/plastic-surgery'],
                            ['name' => 'Obstetrics & Gynecology', 'href' => '/obstetrics-gynecology'],
                            ['name' => 'Cardiology', 'href' => '/cardiology'],
                            ['name' => 'Neurology', 'href' => '/neurology'],
                            ['name' => 'Nephrology', 'href' => '/nephrology'],
                            ['name' => 'Gastroenterology', 'href' => '/gastroenterology'],
                            ['name' => 'Pediatrics', 'href' => '/pediatrics'],
                            ['name' => 'Dermatology', 'href' => '/dermatology'],
                            ['name' => 'ENT', 'href' => '/ent'],
                            ['name' => 'Ophthalmology', 'href' => '/ophthalmology'],
                            ['name' => 'Oncology', 'href' => '/oncology']
                        ];
                        ?>

                        <?php foreach ($departments as $department): ?>

                            <a
                                href="<?php echo htmlspecialchars($department['href'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="group p-5 rounded-2xl bg-gray-50 border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all"
                            >

                                <div class="flex items-center justify-between gap-3">

                                    <span class="font-semibold text-gray-800 group-hover:text-[#328CCB] transition-colors">
                                        <?php echo htmlspecialchars($department['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </span>

                                    <?php echo getIcon('ArrowUpRight', 'h-4 w-4 text-gray-400 group-hover:text-[#328CCB]'); ?>

                                </div>

                            </a>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         SERVICES
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-[#F7FAFC]">

        <div class="container mx-auto px-4">

            <div class="max-w-3xl mx-auto text-center mb-14">

                <div class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100">
                    <?php echo getIcon('Activity', 'h-4 w-4'); ?>
                    Advanced Diagnostics
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">
                    Diagnostic Services
                    <span class="text-[#328CCB]">
                        at Akropolis
                    </span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    The hospital provides diagnostic and clinical support
                    services to complement its medical departments.
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">

                <?php
                $services = [
                    ['name' => 'CT Scan', 'href' => '/ct-scan'],
                    ['name' => 'Endoscopy', 'href' => '/endoscopy'],
                    ['name' => 'Dialysis', 'href' => '/dialysis'],
                    ['name' => 'Laboratory', 'href' => '/laboratory'],
                    ['name' => 'Bronchoscopy', 'href' => '/bronchoscopy'],
                    ['name' => 'Colonoscopy', 'href' => '/colonoscopy']
                ];
                ?>

                <?php foreach ($services as $service): ?>

                    <a
                        href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>"
                        class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:border-[#328CCB]/30 hover:shadow-md transition-all"
                    >

                        <div class="bg-[#328CCB]/10 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB]'); ?>
                        </div>

                        <span class="font-semibold text-gray-800 text-sm">
                            <?php echo htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8'); ?>
                        </span>

                    </a>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         VALUES
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-white">

        <div class="container mx-auto px-4">

            <div class="max-w-3xl mx-auto text-center mb-14">

                <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5">
                    <?php echo getIcon('Heart', 'h-4 w-4'); ?>
                    Our Values
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">
                    The Principles Behind
                    <span class="text-[#328CCB]">
                        Our Care
                    </span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Our approach to healthcare is grounded in compassion,
                    clinical excellence, integrity and teamwork.
                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php
                $values = [
                    [
                        'icon' => 'Heart',
                        'title' => 'Compassion',
                        'desc' => 'Treating patients and their families with empathy, dignity and kindness.',
                        'bg' => 'bg-pink-50',
                        'iconColor' => 'text-pink-600'
                    ],
                    [
                        'icon' => 'Award',
                        'title' => 'Excellence',
                        'desc' => 'Continuously working toward high standards of medical care and service.',
                        'bg' => 'bg-yellow-50',
                        'iconColor' => 'text-yellow-600'
                    ],
                    [
                        'icon' => 'ShieldCheck',
                        'title' => 'Integrity',
                        'desc' => 'Building trust through responsible, honest and ethical healthcare practices.',
                        'bg' => 'bg-green-50',
                        'iconColor' => 'text-green-600'
                    ],
                    [
                        'icon' => 'Users',
                        'title' => 'Collaboration',
                        'desc' => 'Working across medical and support teams to deliver coordinated patient care.',
                        'bg' => 'bg-blue-50',
                        'iconColor' => 'text-blue-600'
                    ]
                ];
                ?>

                <?php foreach ($values as $value): ?>

                    <div class="p-7 rounded-3xl bg-gray-50 border border-gray-100 hover:shadow-lg transition-shadow">

                        <div class="<?php echo $value['bg']; ?> w-fit p-4 rounded-2xl mb-6">
                            <?php echo getIcon(
                                $value['icon'],
                                'h-7 w-7 ' . $value['iconColor']
                            ); ?>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-3">
                            <?php echo htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?>
                        </h3>

                        <p class="text-gray-600 leading-relaxed">
                            <?php echo htmlspecialchars($value['desc'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         KEY FACTS
    ========================================================== -->
    <section class="py-16 bg-[#0F1A33] text-white">

        <div class="container mx-auto px-4">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="text-center">

                    <div class="text-4xl lg:text-5xl font-bold text-[#62B5F5] mb-2">
                        23 Oct 2023
                    </div>

                    <div class="text-blue-100">
                        Hospital Opened
                    </div>

                </div>

                <div class="text-center">

                    <div class="text-4xl lg:text-5xl font-bold text-[#62B5F5] mb-2">
                        12+
                    </div>

                    <div class="text-blue-100">
                        Medical Departments
                    </div>

                </div>

                <div class="text-center">

                    <div class="text-4xl lg:text-5xl font-bold text-[#62B5F5] mb-2">
                        24×7
                    </div>

                    <div class="text-blue-100">
                        Emergency Care
                    </div>

                </div>

                <div class="text-center">

                    <div class="text-4xl lg:text-5xl font-bold text-[#62B5F5] mb-2">
                        NABH
                    </div>

                    <div class="text-blue-100">
                        Accredited
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         LOCATION / CTA
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-white">

        <div class="container mx-auto px-4">

            <div class="bg-gradient-to-r from-[#328CCB] to-[#246EA3] rounded-3xl p-8 lg:p-14 text-white overflow-hidden relative">

                <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-white/10"></div>

                <div class="absolute -left-20 -bottom-20 w-64 h-64 rounded-full bg-white/5"></div>

                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                    <div>

                        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-5">
                            <?php echo getIcon('MapPin', 'h-4 w-4'); ?>
                            Gurugram, Haryana
                        </div>

                        <h2 class="text-3xl lg:text-4xl font-bold mb-5">
                            Visit Akropolis Super Speciality Hospital
                        </h2>

                        <p class="text-blue-100 text-lg leading-relaxed">
                            Our hospital is located near Vatika Chowk,
                            opposite Chinar Garden, in Sector 69, Gurugram.
                        </p>

                    </div>

                    <div class="bg-white/10 border border-white/20 rounded-2xl p-6">

                        <div class="flex items-start gap-4 mb-6">

                            <div class="bg-white/10 p-3 rounded-xl">
                                <?php echo getIcon('MapPin', 'h-6 w-6'); ?>
                            </div>

                            <div>

                                <div class="font-bold mb-1">
                                    Hospital Address
                                </div>

                                <p class="text-blue-100 leading-relaxed">
                                    Near Vatika Chowk, Opposite Chinar Garden,
                                    Sector 69, Gurugram, Haryana 122101
                                </p>

                            </div>

                        </div>

                        <div class="flex flex-wrap gap-3">

                            <a
                                href="/contact"
                                class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-5 py-3 rounded-xl font-semibold hover:bg-blue-50 transition-colors"
                            >
                                Contact Us
                                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                            </a>

                            <a
                                href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="inline-flex items-center gap-2 bg-[#D66C43] text-white px-5 py-3 rounded-xl font-semibold hover:bg-[#c55a36] transition-colors"
                            >
                                Emergency
                                <?php echo getIcon('Phone', 'h-4 w-4'); ?>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         PRESS & MEDIA
    ========================================================== -->
    <section class="py-20 lg:py-24 bg-gray-50">

        <div class="container mx-auto px-4">

            <div class="max-w-3xl mx-auto text-center mb-12">

                <div class="inline-flex items-center gap-2 bg-white text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-5 border border-gray-100">
                    <?php echo getIcon('Newspaper', 'h-4 w-4'); ?>
                    Press &amp; Media
                </div>

                <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-5">
                    Akropolis in the News
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Explore published media coverage and announcements featuring
                    Akropolis Super Speciality Hospital.
                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

                <a
                    href="https://www.aninews.in/news/business/business/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare20231023182225/"
                    target="_blank"
                    rel="nofollow noopener noreferrer"
                    class="group bg-white p-6 rounded-2xl border border-gray-100 hover:border-[#328CCB]/30 hover:shadow-lg transition-all"
                >

                    <div class="flex items-center justify-between mb-5">

                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-1.5 rounded-full">
                            ANI News
                        </span>

                        <?php echo getIcon('ExternalLink', 'h-4 w-4 text-gray-400 group-hover:text-[#328CCB]'); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 leading-snug">
                        Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare
                    </h3>

                    <p class="mt-3 text-sm text-gray-500">
                        Press release coverage
                    </p>

                </a>


                <a
                    href="https://theprint.in/ani-press-releases/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare/1815783/"
                    target="_blank"
                    rel="nofollow noopener noreferrer"
                    class="group bg-white p-6 rounded-2xl border border-gray-100 hover:border-[#328CCB]/30 hover:shadow-lg transition-all"
                >

                    <div class="flex items-center justify-between mb-5">

                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-1.5 rounded-full">
                            ThePrint
                        </span>

                        <?php echo getIcon('ExternalLink', 'h-4 w-4 text-gray-400 group-hover:text-[#328CCB]'); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 leading-snug">
                        Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare
                    </h3>

                    <p class="mt-3 text-sm text-gray-500">
                        ANI press release
                    </p>

                </a>


                <a
                    href="https://www.business-standard.com/content/press-releases-ani/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare-123102300839_1.html"
                    target="_blank"
                    rel="nofollow noopener noreferrer"
                    class="group bg-white p-6 rounded-2xl border border-gray-100 hover:border-[#328CCB]/30 hover:shadow-lg transition-all"
                >

                    <div class="flex items-center justify-between mb-5">

                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-1.5 rounded-full">
                            Business Standard
                        </span>

                        <?php echo getIcon('ExternalLink', 'h-4 w-4 text-gray-400 group-hover:text-[#328CCB]'); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 leading-snug">
                        Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare
                    </h3>

                    <p class="mt-3 text-sm text-gray-500">
                        Sponsored content / press release
                    </p>

                </a>


                <a
                    href="https://www.hospitalmanagement.net/news/akropolis-super-speciality-hospital/"
                    target="_blank"
                    rel="nofollow noopener noreferrer"
                    class="group bg-white p-6 rounded-2xl border border-gray-100 hover:border-[#328CCB]/30 hover:shadow-lg transition-all"
                >

                    <div class="flex items-center justify-between mb-5">

                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-1.5 rounded-full">
                            Hospital Management
                        </span>

                        <?php echo getIcon('ExternalLink', 'h-4 w-4 text-gray-400 group-hover:text-[#328CCB]'); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 leading-snug">
                        Akropolis Super Speciality Hospital opens in Haryana, India
                    </h3>

                    <p class="mt-3 text-sm text-gray-500">
                        Industry coverage
                    </p>

                </a>

            </div>

            <div class="mt-8 flex flex-col sm:flex-row items-center justify-between gap-4 bg-white border border-gray-100 rounded-2xl p-5">

                <p class="text-sm text-gray-500 leading-relaxed">
                    The listed coverage includes published announcements and industry coverage related to Akropolis Super Speciality Hospital.
                </p>

                <a
                    href="/press-media/"
                    class="shrink-0 inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                >
                    View Press &amp; Media
                    <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                </a>

            </div>

        </div>

    </section>


    <!-- =========================================================
         FINAL INTERNAL LINKS
    ========================================================== -->
    <section class="pb-20 bg-white">

        <div class="container mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                <a
                    href="/doctors"
                    class="group p-6 rounded-2xl border border-gray-200 hover:border-[#328CCB]/40 hover:shadow-md transition-all"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <div class="text-sm text-gray-500 mb-1">
                                Medical Team
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Meet Our Doctors
                            </h3>

                        </div>

                        <?php echo getIcon('ArrowRight', 'h-5 w-5 text-[#328CCB] group-hover:translate-x-1 transition-transform'); ?>

                    </div>

                </a>


                <a
                    href="/departments"
                    class="group p-6 rounded-2xl border border-gray-200 hover:border-[#328CCB]/40 hover:shadow-md transition-all"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <div class="text-sm text-gray-500 mb-1">
                                Specialist Care
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Explore Departments
                            </h3>

                        </div>

                        <?php echo getIcon('ArrowRight', 'h-5 w-5 text-[#328CCB] group-hover:translate-x-1 transition-transform'); ?>

                    </div>

                </a>


                <a
                    href="/contact"
                    class="group p-6 rounded-2xl border border-gray-200 hover:border-[#328CCB]/40 hover:shadow-md transition-all"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <div class="text-sm text-gray-500 mb-1">
                                Need Assistance?
                            </div>

                            <h3 class="font-bold text-gray-900">
                                Contact Akropolis
                            </h3>

                        </div>

                        <?php echo getIcon('ArrowRight', 'h-5 w-5 text-[#328CCB] group-hover:translate-x-1 transition-transform'); ?>

                    </div>

                </a>

            </div>

        </div>

    </section>

</main>


<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>