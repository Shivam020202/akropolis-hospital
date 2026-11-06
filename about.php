<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/schema.php';

$page_title = 'About Akropolis Super Speciality Hospital | Gurugram';

$page_description = 'Learn about Akropolis Super Speciality Hospital in Sector 69, Gurugram, a NABH-accredited hospital offering specialist medical care, diagnostic services and 24/7 emergency care.';

$canonical_url = '/about';

$schema_blocks = [
    schemaAboutPage(
        'About Akropolis Super Speciality Hospital',
        $page_description,
        $canonical_url
    ),
    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About', 'url' => '/about']
    ])
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header-v2.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-center gap-2 text-sm font-medium text-center">
        <span class="font-bold">24/7 Emergency Care</span>
        <span class="hidden sm:inline">|</span>
        <span>For urgent medical assistance, visit our Emergency Department.</span>
        <a
            href="/contact"
            class="underline hover:no-underline font-semibold"
        >
            Contact Us
        </a>
    </div>
</div>


<!-- Hero Section -->
<section class="relative bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">

        <div class="max-w-4xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-6">
                <?php echo getIcon('ShieldCheck', 'h-5 w-5'); ?>
                NABH-Accredited Hospital
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                About Akropolis Super Speciality Hospital
            </h1>

            <p class="mt-6 text-lg md:text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                A healthcare facility in Sector 69, Gurugram, bringing
                specialist medical care, diagnostic services and emergency
                care together within one hospital.
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-3">

                <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm text-gray-700 shadow-sm">
                    <?php echo getIcon('MapPin', 'h-4 w-4 text-[#328CCB]'); ?>
                    Sector 69, Gurugram
                </div>

                <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm text-gray-700 shadow-sm">
                    <?php echo getIcon('Calendar', 'h-4 w-4 text-[#328CCB]'); ?>
                    Opened 23 October 2023
                </div>

                <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm text-gray-700 shadow-sm">
                    <?php echo getIcon('Clock', 'h-4 w-4 text-[#328CCB]'); ?>
                    24/7 Emergency
                </div>

            </div>

        </div>

    </div>
</section>


<!-- Trust Highlights -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- NABH -->
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-gray-50 border border-gray-100">

                <div class="flex-shrink-0 bg-[#328CCB]/10 p-3 rounded-xl">
                    <?php echo getIcon('ShieldCheck', 'h-6 w-6 text-[#328CCB]'); ?>
                </div>

                <div>
                    <h2 class="font-bold text-gray-900 text-lg">
                        NABH Accredited
                    </h2>

                    <p class="mt-1 text-gray-600 text-sm leading-relaxed">
                        Hospital care delivered within an NABH-accredited
                        healthcare facility.
                    </p>
                </div>

            </div>


            <!-- Location -->
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-gray-50 border border-gray-100">

                <div class="flex-shrink-0 bg-[#328CCB]/10 p-3 rounded-xl">
                    <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
                </div>

                <div>
                    <h2 class="font-bold text-gray-900 text-lg">
                        Gurugram Location
                    </h2>

                    <p class="mt-1 text-gray-600 text-sm leading-relaxed">
                        Located in Sector 69, near Vatika Chowk and opposite
                        Chinar Garden, Gurugram.
                    </p>
                </div>

            </div>


            <!-- Emergency -->
            <div class="flex items-start gap-4 p-6 rounded-2xl bg-gray-50 border border-gray-100">

                <div class="flex-shrink-0 bg-[#D66C43]/10 p-3 rounded-xl">
                    <?php echo getIcon('Clock', 'h-6 w-6 text-[#D66C43]'); ?>
                </div>

                <div>
                    <h2 class="font-bold text-gray-900 text-lg">
                        24/7 Emergency Care
                    </h2>

                    <p class="mt-1 text-gray-600 text-sm leading-relaxed">
                        Emergency services are available around the clock
                        for urgent medical needs.
                    </p>
                </div>

            </div>

        </div>

    </div>
</section>


<!-- Hospital Story -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Image -->
            <div class="order-2 lg:order-1">

                <div class="overflow-hidden rounded-2xl bg-gray-100">

                    <img
                        src="/assets/images/shared-template/akropolis-about-hospital.webp"
                        alt="Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                        width="1920"
                        height="1080"
                        class="w-full h-auto object-contain"
                        loading="lazy"
                    >

                </div>

            </div>


            <!-- Content -->
            <div class="order-1 lg:order-2">

                <div class="inline-flex items-center gap-2 text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-4">
                    <?php echo getIcon('Building2', 'h-5 w-5'); ?>
                    About Akropolis
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    A Healthcare Facility Serving Gurugram and Surrounding Areas
                </h2>

                <div class="mt-6 space-y-5 text-gray-600 leading-relaxed text-lg">

                    <p>
                        Akropolis Super Speciality Hospital officially opened on
                        <strong class="text-gray-900">23 October 2023</strong>
                        in Sector 69, Gurugram, near Vatika Chowk and opposite
                        Chinar Garden.
                    </p>

                    <p>
                        The hospital brings together multiple medical specialties,
                        specialist doctors, diagnostic facilities and clinical
                        services within one healthcare facility, serving patients
                        from Gurugram and surrounding areas.
                    </p>

                    <p>
                        Akropolis is a
                        <strong class="text-gray-900">NABH-accredited hospital</strong>
                        offering medical care across departments including
                        Orthopedics, Cardiology, Neurology, Nephrology,
                        Gastroenterology, Pediatrics, Dermatology, ENT,
                        Ophthalmology, Oncology, Plastic Surgery and
                        Obstetrics &amp; Gynecology.
                    </p>

                </div>


                <!-- Opening Date -->
                <div class="mt-8 inline-flex items-center gap-3 bg-gray-50 border border-gray-100 rounded-xl px-5 py-4">

                    <div class="bg-[#328CCB]/10 p-3 rounded-lg">
                        <?php echo getIcon('Calendar', 'h-5 w-5 text-[#328CCB]'); ?>
                    </div>

                    <div>
                        <div class="text-sm text-gray-500">
                            Hospital Opening
                        </div>

                        <div class="font-bold text-gray-900">
                            23 October 2023
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- Medical Departments -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center mb-12">

            <div class="inline-flex items-center gap-2 text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-4">
                <?php echo getIcon('Stethoscope', 'h-5 w-5'); ?>
                Medical Departments
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Specialist Care Across Multiple Departments
            </h2>

            <p class="mt-4 text-gray-600 text-lg leading-relaxed">
                Explore the medical departments available at Akropolis
                Super Speciality Hospital.
            </p>

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            <?php
            $about_departments = [
                ['name' => 'Orthopedics', 'href' => '/orthopedics'],
                ['name' => 'Cardiology', 'href' => '/cardiology'],
                ['name' => 'Neurology', 'href' => '/neurology'],
                ['name' => 'Nephrology', 'href' => '/nephrology'],
                ['name' => 'Gastroenterology', 'href' => '/gastroenterology'],
                ['name' => 'Pediatrics', 'href' => '/pediatrics'],
                ['name' => 'Dermatology', 'href' => '/dermatology'],
                ['name' => 'ENT', 'href' => '/ent'],
                ['name' => 'Ophthalmology', 'href' => '/ophthalmology'],
                ['name' => 'Oncology', 'href' => '/oncology'],
                ['name' => 'Plastic Surgery', 'href' => '/plastic-surgery'],
                ['name' => 'Obstetrics & Gynecology', 'href' => '/obstetrics-gynecology'],
            ];
            ?>

            <?php foreach ($about_departments as $department): ?>

                <a
                    href="<?php echo htmlspecialchars($department['href']); ?>"
                    class="group flex items-center justify-between bg-white border border-gray-100 rounded-xl p-5 hover:border-[#328CCB]/30 hover:shadow-md transition-all duration-200"
                >

                    <span class="font-semibold text-gray-800 group-hover:text-[#328CCB] transition-colors">
                        <?php echo htmlspecialchars($department['name']); ?>
                    </span>

                    <?php echo getIcon('ArrowRight', 'h-5 w-5 text-gray-400 group-hover:text-[#328CCB] transition-colors'); ?>

                </a>

            <?php endforeach; ?>

        </div>

    </div>
</section>


<!-- Diagnostic Services -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div>

                <div class="inline-flex items-center gap-2 text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-4">
                    <?php echo getIcon('ScanLine', 'h-5 w-5'); ?>
                    Diagnostic Services
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Diagnostic and Clinical Services
                </h2>

                <p class="mt-5 text-gray-600 text-lg leading-relaxed">
                    Akropolis provides access to diagnostic and clinical
                    services supporting patient evaluation and treatment
                    across different medical specialties.
                </p>

            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <?php
                $diagnostic_services = [
                    'CT Scan',
                    'Endoscopy',
                    'Dialysis',
                    'Laboratory',
                    'Bronchoscopy',
                    'Colonoscopy'
                ];
                ?>

                <?php foreach ($diagnostic_services as $service): ?>

                    <div class="flex items-center gap-3 p-4 rounded-xl bg-gray-50 border border-gray-100">

                        <div class="flex-shrink-0">
                            <?php echo getIcon('CheckCircle2', 'h-5 w-5 text-[#328CCB]'); ?>
                        </div>

                        <span class="font-medium text-gray-800">
                            <?php echo htmlspecialchars($service); ?>
                        </span>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>
</section>


<!-- Location & Emergency -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Location -->
            <div class="bg-white rounded-2xl border border-gray-100 p-8">

                <div class="flex items-start gap-4">

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                        <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
                    </div>

                    <div>

                        <h2 class="text-2xl font-bold text-gray-900">
                            Our Location
                        </h2>

                        <p class="mt-4 text-gray-600 leading-relaxed">
                            Akropolis Super Speciality Hospital is located
                            in Sector 69, Gurugram, near Vatika Chowk and
                            opposite Chinar Garden.
                        </p>

                        <p class="mt-3 font-medium text-gray-800">
                            Near Vatika Chowk, Opposite Chinar Garden,
                            Sector 69, Gurugram, Haryana 122101
                        </p>

                        <a
                            href="/contact"
                            class="inline-flex items-center gap-2 mt-6 text-[#328CCB] font-semibold hover:underline"
                        >
                            Get directions and contact details
                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Emergency -->
            <div class="bg-[#D66C43] rounded-2xl p-8 text-white">

                <div class="flex items-start gap-4">

                    <div class="bg-white/15 p-3 rounded-xl">
                        <?php echo getIcon('Siren', 'h-6 w-6 text-white'); ?>
                    </div>

                    <div>

                        <h2 class="text-2xl font-bold">
                            24/7 Emergency Care
                        </h2>

                        <p class="mt-4 text-white/90 leading-relaxed">
                            For urgent medical needs, Akropolis provides
                            emergency care around the clock.
                        </p>

                        <a
                            href="/contact"
                            class="inline-flex items-center gap-2 mt-6 bg-white text-[#D66C43] px-5 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
                        >
                            Contact Hospital
                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- Press & Media -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-4">
                <?php echo getIcon('Newspaper', 'h-5 w-5'); ?>
                Press &amp; Media
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Akropolis in the News
            </h2>

            <p class="mt-4 text-gray-600 text-lg leading-relaxed">
                Explore media coverage and published mentions of
                Akropolis Super Speciality Hospital.
            </p>

            <a
                href="/press-media/"
                class="inline-flex items-center gap-2 mt-8 bg-[#328CCB] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#287bb5] transition-colors"
            >
                View Press &amp; Media
                <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
            </a>

        </div>

    </div>
</section>


<!-- Final CTA -->
<section class="py-16 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-white">
            Looking for Medical Care in Gurugram?
        </h2>

        <p class="mt-4 text-gray-300 text-lg leading-relaxed">
            Explore our medical departments, doctors and healthcare services,
            or contact Akropolis Super Speciality Hospital for more information.
        </p>

        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

            <a
                href="/departments"
                class="inline-flex items-center justify-center gap-2 bg-[#328CCB] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#287bb5] transition-colors"
            >
                Explore Departments
                <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
            </a>

            <a
                href="/contact"
                class="inline-flex items-center justify-center gap-2 bg-white text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
            >
                Contact Us
                <?php echo getIcon('Mail', 'h-5 w-5'); ?>
            </a>

        </div>

    </div>
</section>


<?php
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/scripts.php';
?>