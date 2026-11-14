<?php

require_once __DIR__ . '/../includes/data.php';

if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/../includes/schema.php';
}

/*
|--------------------------------------------------------------------------
| Doctor
|--------------------------------------------------------------------------
*/

$doctorId = 'dr-anu-nagpal';

$doctor = null;

foreach ($doctors as $d) {
    if (($d['id'] ?? '') === $doctorId) {
        $doctor = $d;
        break;
    }
}

if (!$doctor) {
    header('HTTP/1.0 404 Not Found');

    $page_title = 'Doctor Not Found | Akropolis Super Speciality Hospital';
    $page_description = 'The requested doctor profile could not be found.';

    include __DIR__ . '/../includes/head.php';
    include __DIR__ . '/../includes/header-v2.php';
    ?>

    <main class="min-h-screen bg-white flex items-center justify-center px-4">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Doctor Not Found
            </h1>

            <p class="text-gray-600 mb-6">
                The requested doctor profile could not be found.
            </p>

            <a
                href="/doctors"
                class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#287db7] text-white px-6 py-3 rounded-xl font-semibold transition"
            >
                <?php echo getIcon('ArrowLeft', 'h-5 w-5'); ?>
                <span>Back to Doctors</span>
            </a>
        </div>
    </main>

    <?php
    include __DIR__ . '/../includes/footer.php';
    include __DIR__ . '/../includes/scripts.php';
    exit;
}

/*
|--------------------------------------------------------------------------
| SEO
|--------------------------------------------------------------------------
*/

$page_title =
    'Dr. Anu Nagpal, Obstetrician & Gynaecologist | Akropolis Super Speciality Hospital';

$page_description =
    'Consult Dr. Anu Nagpal, Obstetrician & Gynaecologist at Akropolis Super Speciality Hospital in Sector 69, Gurugram. She has 11+ years of overall experience, including 7 years as a specialist, and provides care related to women’s health, pregnancy and gynaecological concerns.';

$canonical_url = '/doctors/dr-anu-nagpal';

/*
|--------------------------------------------------------------------------
| Physician + Breadcrumb Schema
|--------------------------------------------------------------------------
*/

$schema_blocks = [
    schemaPhysician([
        'name'           => 'Dr. Anu Nagpal',
        'id'             => 'dr-anu-nagpal',
        'specialty'      => 'Obstetrician & Gynecologist',
        'image'          => $doctor['image'] ?? '',
        'bio'            => 'Dr. Anu Nagpal is an Obstetrician and Gynecologist at Akropolis Super Speciality Hospital in Gurugram with 11+ years of overall experience, including 7 years as a specialist.',
        'qualifications' => [
            'MBBS',
            'MS - Obstetrics & Gynaecology'
        ],
    ]),

    schemaBreadcrumb([
        [
            'name' => 'Home',
            'url'  => '/'
        ],
        [
            'name' => 'Doctors',
            'url'  => '/doctors'
        ],
        [
            'name' => 'Dr. Anu Nagpal',
            'url'  => '/doctors/dr-anu-nagpal'
        ],
    ]),
];

include __DIR__ . '/../includes/head.php';

?>

<!-- =========================================================
     EMERGENCY BAR
========================================================= -->

<div class="bg-[#D66C43] text-white py-2 px-4 text-center">
    <div class="container mx-auto flex items-center justify-center gap-2 text-sm md:text-base font-semibold">
        <?php echo getIcon('Phone', 'h-4 w-4'); ?>

        <span>
            Emergency 24×7:
            <?php echo htmlspecialchars(CONTACT_INFO['emergency']); ?>
        </span>
    </div>
</div>


<!-- =========================================================
     SITEWIDE HEADER
========================================================= -->

<?php include __DIR__ . '/../includes/header-v2.php'; ?>


<main class="bg-white">


    <!-- =====================================================
         BREADCRUMB
    ====================================================== -->

    <section class="bg-white border-b border-gray-100">
        <div class="container mx-auto px-4 py-4">

            <nav
                aria-label="Breadcrumb"
                class="flex items-center gap-2 text-sm text-gray-500"
            >

                <a
                    href="/"
                    class="hover:text-[#328CCB] transition"
                >
                    <?php echo getIcon('Home', 'h-4 w-4'); ?>
                </a>

                <span>/</span>

                <a
                    href="/doctors"
                    class="hover:text-[#328CCB] transition"
                >
                    Doctors
                </a>

                <span>/</span>

                <span class="text-gray-700 font-medium">
                    Dr. Anu Nagpal
                </span>

            </nav>

        </div>
    </section>


    <!-- =====================================================
         HERO / DOCTOR INTRODUCTION
    ====================================================== -->

    <section class="bg-gradient-to-b from-[#f3faff] to-white">
        <div class="container mx-auto px-4 py-8 md:py-10">

            <div class="grid lg:grid-cols-12 gap-8 items-center">

                <!-- Doctor Image -->

                <div class="lg:col-span-3">

                    <div class="rounded-2xl overflow-hidden shadow-lg bg-white border border-gray-100">

                        <img
                            src="<?php echo htmlspecialchars($doctor['image'] ?? ''); ?>"
                            alt="Dr. Anu Nagpal, Obstetrician and Gynecologist at Akropolis Super Speciality Hospital"
                            class="w-full aspect-[3/4] object-cover"
                            loading="eager"
                            fetchpriority="high"
                        />

                    </div>

                </div>


                <!-- Doctor Information -->

                <div class="lg:col-span-6">

                    <?php if (!empty($doctor['registrationVerified'])): ?>

                        <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 border border-green-100 px-3 py-1.5 rounded-full text-sm font-semibold mb-4">

                            <?php echo getIcon('ShieldCheck', 'h-4 w-4'); ?>

                            <span>Medical Registration Verified</span>

                        </div>

                    <?php endif; ?>


                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#10254A] leading-tight mb-2">
                        Dr. Anu Nagpal
                    </h1>


                    <p class="text-lg md:text-xl font-bold text-[#328CCB] mb-2">
                        Obstetrician &amp; Gynaecologist
                    </p>


                    <p class="text-gray-600 font-medium mb-6">
                        MBBS, MS - Obstetrics &amp; Gynaecology
                    </p>


                    <!-- Quick Stats -->

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6">

                        <div class="bg-white border border-gray-100 rounded-xl p-4 shadow-sm">

                            <div class="flex items-center gap-2 mb-2 text-[#328CCB]">
                                <?php echo getIcon('Award', 'h-5 w-5'); ?>

                                <span class="text-sm font-semibold text-gray-500">
                                    Experience
                                </span>
                            </div>

                            <p class="font-bold text-gray-900">
                                11+ Years
                            </p>

                            <p class="text-xs text-gray-500">
                                Overall Experience
                            </p>

                        </div>


                        <div class="bg-white border border-gray-100 rounded-xl p-4 shadow-sm">

                            <div class="flex items-center gap-2 mb-2 text-[#328CCB]">
                                <?php echo getIcon('Stethoscope', 'h-5 w-5'); ?>

                                <span class="text-sm font-semibold text-gray-500">
                                    Specialist
                                </span>
                            </div>

                            <p class="font-bold text-gray-900">
                                7 Years
                            </p>

                            <p class="text-xs text-gray-500">
                                As Specialist
                            </p>

                        </div>


                        <div class="bg-white border border-gray-100 rounded-xl p-4 shadow-sm">

                            <div class="flex items-center gap-2 mb-2 text-[#D66C43]">
                                <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                                <span class="text-sm font-semibold text-gray-500">
                                    Department
                                </span>
                            </div>

                            <p class="font-bold text-gray-900">
                                Obstetrics &amp;
                            </p>

                            <p class="text-xs text-gray-500">
                                Gynaecology
                            </p>

                        </div>

                    </div>


                    <!-- CTA -->

                    <div class="flex flex-wrap gap-3">

                        <a
                            href="/contact"
                            class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55b36] text-white px-6 py-3 rounded-xl font-semibold shadow-md transition"
                        >
                            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
                            <span>Book Appointment</span>
                        </a>


                        <a
                            href="#opd-timings"
                            class="inline-flex items-center justify-center gap-2 border-2 border-[#328CCB] text-[#328CCB] hover:bg-[#328CCB] hover:text-white px-6 py-3 rounded-xl font-semibold transition"
                        >
                            <?php echo getIcon('Clock', 'h-5 w-5'); ?>
                            <span>View OPD Timings</span>
                        </a>

                    </div>

                </div>


                <!-- Appointment / Location Information -->

                <div class="lg:col-span-3">

                    <div
                        id="opd-timings"
                        class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6"
                    >

                        <div class="space-y-6">


                            <div class="flex items-start gap-3">

                                <div class="bg-[#328CCB]/10 text-[#328CCB] p-2.5 rounded-xl">
                                    <?php echo getIcon('Clock', 'h-5 w-5'); ?>
                                </div>

                                <div>
                                    <p class="font-bold text-gray-900 text-sm">
                                        OPD Timings
                                    </p>

                                    <p class="text-gray-600 text-sm mt-1">
                                        Mon - Sat: 9:00 AM - 5:00 PM
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-3">

                                <div class="bg-[#D66C43]/10 text-[#D66C43] p-2.5 rounded-xl">
                                    <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
                                </div>

                                <div>
                                    <p class="font-bold text-gray-900 text-sm">
                                        Location
                                    </p>

                                    <p class="text-gray-600 text-sm mt-1">
                                        Akropolis Super Speciality Hospital,
                                        Sector 69, Gurugram
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-3">

                                <div class="bg-green-50 text-green-600 p-2.5 rounded-xl">
                                    <?php echo getIcon('Building2', 'h-5 w-5'); ?>
                                </div>

                                <div>
                                    <p class="font-bold text-gray-900 text-sm">
                                        Department
                                    </p>

                                    <p class="text-gray-600 text-sm mt-1">
                                        Obstetrics &amp; Gynaecology
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =====================================================
         ABOUT DR ANU NAGPAL
    ====================================================== -->

    <section class="py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4">

            <div class="grid lg:grid-cols-12 gap-10 items-center">

                <div class="lg:col-span-8">

                    <div class="flex items-center gap-3 mb-5">

                        <div class="bg-[#328CCB]/10 text-[#328CCB] p-3 rounded-xl">
                            <?php echo getIcon('Stethoscope', 'h-6 w-6'); ?>
                        </div>

                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                            About Dr. Anu Nagpal
                        </h2>

                    </div>


                    <div class="space-y-4 text-gray-700 leading-relaxed">

                        <p>
                            Dr. Anu Nagpal is an Obstetrician and Gynecologist at
                            Akropolis Super Speciality Hospital in Badshahpur, Gurgaon,
                            with 11 years of overall experience, including 7 years as a
                            specialist in Obstetrics and Gynaecology.
                        </p>

                        <p>
                            She completed her MBBS from Dr. B. R. Ambedkar University
                            in 2013 and her MS in Obstetrics &amp; Gynaecology from
                            MMU Mullana in 2016. Her medical training provides a
                            foundation for evaluating and managing women's health
                            and pregnancy-related concerns based on each patient's
                            individual needs.
                        </p>

                        <p>
                            At Akropolis Super Speciality Hospital, Dr. Anu Nagpal is
                            part of the hospital's Obstetrics &amp; Gynaecology services.
                            Patients can discuss their symptoms, medical history,
                            pregnancy-related concerns and other women's health needs
                            during consultation.
                        </p>

                    </div>

                </div>


                <div class="lg:col-span-4">

                    <div class="rounded-2xl bg-gradient-to-br from-[#eff8ff] to-[#f8fbff] border border-[#e5f1fa] p-8 text-center">

                        <div class="w-20 h-20 mx-auto mb-5 rounded-full bg-white shadow-sm flex items-center justify-center text-[#328CCB]">

                            <?php echo getIcon('HeartPulse', 'h-10 w-10'); ?>

                        </div>

                        <h3 class="text-xl font-bold text-[#10254A] mb-2">
                            Women's Health &amp; Maternity Care
                        </h3>

                        <p class="text-sm text-gray-600 leading-relaxed">
                            Professional evaluation and guidance for pregnancy,
                            gynaecological concerns and women's health needs.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         EDUCATION & CREDENTIALS
    ====================================================== -->

    <section class="py-12 md:py-16 bg-[#f6faff]">

        <div class="container mx-auto px-4">

            <div class="mb-8">

                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                    Education &amp; Credentials
                </h2>

            </div>


            <div class="grid md:grid-cols-3 gap-5">


                <!-- MBBS -->

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

                    <div class="w-11 h-11 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-5">

                        <?php echo getIcon('GraduationCap', 'h-5 w-5'); ?>

                    </div>

                    <h3 class="font-bold text-lg text-gray-900 mb-2">
                        MBBS
                    </h3>

                    <p class="text-gray-600 text-sm">
                        Dr. B. R. Ambedkar University
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        2013
                    </p>

                </div>


                <!-- MS -->

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

                    <div class="w-11 h-11 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-5">

                        <?php echo getIcon('GraduationCap', 'h-5 w-5'); ?>

                    </div>

                    <h3 class="font-bold text-lg text-gray-900 mb-2">
                        MS - Obstetrics &amp; Gynaecology
                    </h3>

                    <p class="text-gray-600 text-sm">
                        MMU Mullana
                    </p>

                    <p class="text-sm text-gray-500 mt-1">
                        2016
                    </p>

                </div>


                <!-- Experience -->

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

                    <div class="w-11 h-11 bg-[#D66C43]/10 text-[#D66C43] rounded-xl flex items-center justify-center mb-5">

                        <?php echo getIcon('Briefcase', 'h-5 w-5'); ?>

                    </div>

                    <h3 class="font-bold text-lg text-gray-900 mb-3">
                        Professional Experience
                    </h3>

                    <ul class="space-y-2 text-sm text-gray-600">

                        <li class="flex items-center gap-2">
                            <?php echo getIcon('CheckCircle', 'h-4 w-4 text-green-600'); ?>
                            <span>11+ Years Overall Experience</span>
                        </li>

                        <li class="flex items-center gap-2">
                            <?php echo getIcon('CheckCircle', 'h-4 w-4 text-green-600'); ?>
                            <span>7 Years as Specialist</span>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         AREAS OF MEDICAL CARE
    ====================================================== -->

    <section class="py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4">

            <div class="mb-8">

                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                    Areas of Medical Care
                </h2>

                <p class="text-gray-600 mt-2">
                    Her clinical practice is centred around Obstetrics,
                    Gynaecology and Women's Health.
                </p>

            </div>


            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 text-center">

                    <div class="w-12 h-12 mx-auto mb-4 bg-[#328CCB]/10 text-[#328CCB] rounded-full flex items-center justify-center">
                        <?php echo getIcon('Baby', 'h-6 w-6'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Obstetrics
                    </h3>

                    <p class="text-sm text-gray-600">
                        Pregnancy-related consultations and care.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 text-center">

                    <div class="w-12 h-12 mx-auto mb-4 bg-pink-50 text-pink-500 rounded-full flex items-center justify-center">
                        <?php echo getIcon('Heart', 'h-6 w-6'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Gynaecology
                    </h3>

                    <p class="text-sm text-gray-600">
                        Evaluation and management of gynaecological concerns.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 text-center">

                    <div class="w-12 h-12 mx-auto mb-4 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center">
                        <?php echo getIcon('UserRound', 'h-6 w-6'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Women's Health
                    </h3>

                    <p class="text-sm text-gray-600">
                        Consultation for various women's health needs.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 text-center">

                    <div class="w-12 h-12 mx-auto mb-4 bg-orange-50 text-orange-600 rounded-full flex items-center justify-center">
                        <?php echo getIcon('HeartPulse', 'h-6 w-6'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Pregnancy Care
                    </h3>

                    <p class="text-sm text-gray-600">
                        Assessment, guidance and follow-up during pregnancy.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 text-center">

                    <div class="w-12 h-12 mx-auto mb-4 bg-green-50 text-green-600 rounded-full flex items-center justify-center">
                        <?php echo getIcon('ClipboardCheck', 'h-6 w-6'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        General Evaluation
                    </h3>

                    <p class="text-sm text-gray-600">
                        Clinical assessment and further investigation when needed.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         DEPARTMENT CONNECTION
    ====================================================== -->

    <section class="py-12 md:py-16 bg-[#f6faff]">

        <div class="container mx-auto px-4">

            <div class="rounded-2xl border border-[#dceefa] bg-gradient-to-r from-[#f1f9ff] to-white p-7 md:p-9">

                <div class="flex items-start gap-4">

                    <div class="w-12 h-12 shrink-0 bg-white rounded-xl shadow-sm flex items-center justify-center text-[#328CCB]">

                        <?php echo getIcon('Baby', 'h-6 w-6'); ?>

                    </div>

                    <div>

                        <h2 class="text-xl md:text-2xl font-extrabold text-[#10254A] mb-2">
                            Obstetrics &amp; Gynaecology Services at Akropolis
                        </h2>

                        <p class="text-gray-600 leading-relaxed mb-5 max-w-4xl">
                            The Obstetrics &amp; Gynaecology department provides
                            maternity-related services and women's healthcare,
                            with consultation and care based on each patient's
                            individual medical needs.
                        </p>


                        <div class="flex flex-wrap gap-3">

                            <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm font-medium text-gray-700">

                                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>

                                Maternity Care

                            </span>


                            <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm font-medium text-gray-700">

                                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>

                                High-Risk Pregnancy Evaluation &amp; Management

                            </span>


                            <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm font-medium text-gray-700">

                                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>

                                Gynaecology Care

                            </span>


                            <span class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-4 py-2 text-sm font-medium text-gray-700">

                                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>

                                Infertility Evaluation &amp; Treatment, Where Indicated

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHEN SHOULD YOU CONSULT
    ====================================================== -->

    <section class="py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4">

            <div class="mb-8">

                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                    When Should You Consult an Obstetrician &amp; Gynaecologist?
                </h2>

                <p class="text-gray-600 mt-2">
                    A consultation may be appropriate when you have concerns related to:
                </p>

            </div>


            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5">

                    <div class="w-10 h-10 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('CalendarDays', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Menstrual Health
                    </h3>

                    <p class="text-sm text-gray-600">
                        Irregular, painful or otherwise concerning menstrual symptoms.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5">

                    <div class="w-10 h-10 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('Baby', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Pregnancy Planning
                    </h3>

                    <p class="text-sm text-gray-600">
                        Preconception guidance or early pregnancy care.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5">

                    <div class="w-10 h-10 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('HeartPulse', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Gynaecological Symptoms
                    </h3>

                    <p class="text-sm text-gray-600">
                        Symptoms, discomfort or concerns requiring medical evaluation.
                    </p>

                </div>


                <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5">

                    <div class="w-10 h-10 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('Heart', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        General Women's Health
                    </h3>

                    <p class="text-sm text-gray-600">
                        Health evaluation, guidance and discussion of women's health concerns.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         HOSPITAL / LOCATION
    ====================================================== -->

    <section class="py-12 md:py-16 bg-[#f6faff]">

        <div class="container mx-auto px-4">

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

                <div class="grid lg:grid-cols-2">

                    <!-- Visual -->

                    <div class="min-h-[280px] bg-gradient-to-br from-[#eaf6ff] via-white to-[#f6fbff] flex items-center justify-center">

                        <div class="text-center px-8">

                            <div class="w-20 h-20 mx-auto mb-5 bg-white rounded-2xl shadow-md flex items-center justify-center text-[#328CCB]">

                                <?php echo getIcon('Building2', 'h-10 w-10'); ?>

                            </div>

                            <p class="font-semibold text-gray-700">
                                Akropolis Super Speciality Hospital
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                Sector 69, Gurugram
                            </p>

                        </div>

                    </div>


                    <!-- Location Information -->

                    <div class="p-7 md:p-10">

                        <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A] mb-3">
                            Dr. Anu Nagpal at Akropolis Super Speciality Hospital
                        </h2>

                        <p class="text-gray-600 leading-relaxed mb-5">
                            Dr. Anu Nagpal practices at Akropolis Super Speciality
                            Hospital in Badshahpur, Gurugram.
                        </p>


                        <div class="flex items-start gap-3 bg-[#fff7f3] border border-[#f4ded4] rounded-xl p-4 mb-6">

                            <div class="text-[#D66C43] mt-0.5">
                                <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
                            </div>

                            <p class="text-sm text-gray-700">
                                Near Vatika Chowk, Opposite Chinar Garden,
                                Sector 69, Gurugram, Haryana 122101
                            </p>

                        </div>


                        <div class="flex flex-wrap gap-3">

                            <a
                                href="/contact"
                                class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c55b36] text-white px-5 py-3 rounded-xl font-semibold transition"
                            >
                                <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
                                <span>Book Appointment</span>
                            </a>


                            <a
                                href="https://www.google.com/maps/search/?api=1&query=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                                target="_blank"
                                rel="noopener"
                                class="inline-flex items-center gap-2 border-2 border-[#328CCB] text-[#328CCB] hover:bg-[#328CCB] hover:text-white px-5 py-3 rounded-xl font-semibold transition"
                            >
                                <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
                                <span>Get Directions</span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         RESOURCES
    ====================================================== -->

    <section class="py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4">

            <div class="mb-8">

                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                    Resources for Patients
                </h2>

                <p class="text-gray-600 mt-2">
                    Helpful information to support women's health, pregnancy
                    and maternity-related care.
                </p>

            </div>


            <div class="grid md:grid-cols-3 gap-5">


                <a
                    href="/blog"
                    class="group bg-white border border-gray-100 rounded-2xl shadow-sm p-6 hover:shadow-md transition"
                >

                    <div class="w-11 h-11 bg-[#328CCB]/10 text-[#328CCB] rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('BookOpen', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-[#328CCB] transition">
                        Pregnancy Guide
                    </h3>

                    <p class="text-sm text-gray-600">
                        Key information for understanding pregnancy and preparing for consultations.
                    </p>

                </a>


                <a
                    href="/blog"
                    class="group bg-white border border-gray-100 rounded-2xl shadow-sm p-6 hover:shadow-md transition"
                >

                    <div class="w-11 h-11 bg-pink-50 text-pink-500 rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('Heart', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-[#328CCB] transition">
                        Post-Delivery Care
                    </h3>

                    <p class="text-sm text-gray-600">
                        General information about recovery and care after delivery.
                    </p>

                </a>


                <a
                    href="/blog"
                    class="group bg-white border border-gray-100 rounded-2xl shadow-sm p-6 hover:shadow-md transition"
                >

                    <div class="w-11 h-11 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4">
                        <?php echo getIcon('Users', 'h-5 w-5'); ?>
                    </div>

                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-[#328CCB] transition">
                        Women's Wellness
                    </h3>

                    <p class="text-sm text-gray-600">
                        General information about women's health and wellbeing.
                    </p>

                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FAQ
    ====================================================== -->

    <section class="py-12 md:py-16 bg-[#f6faff]">

        <div class="container mx-auto px-4 max-w-5xl">

            <div class="mb-8">

                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A]">
                    Frequently Asked Questions
                </h2>

                <p class="text-gray-600 mt-2">
                    Common questions about Dr. Anu Nagpal, her qualifications,
                    consultation and practice.
                </p>

            </div>


            <div class="space-y-3">


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>Who is Dr. Anu Nagpal?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        Dr. Anu Nagpal is an Obstetrician and Gynecologist at
                        Akropolis Super Speciality Hospital with 11+ years of
                        overall experience, including 7 years as a specialist.
                    </div>

                </details>


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>What are Dr. Anu Nagpal's qualifications?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        She completed MBBS from Dr. B. R. Ambedkar University
                        in 2013 and MS in Obstetrics &amp; Gynaecology from
                        MMU Mullana in 2016.
                    </div>

                </details>


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>How much experience does Dr. Anu Nagpal have?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        Dr. Anu Nagpal has 11+ years of overall experience,
                        including 7 years as a specialist.
                    </div>

                </details>


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>Where does Dr. Anu Nagpal practise?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        Dr. Anu Nagpal practises at Akropolis Super Speciality
                        Hospital in Sector 69, Gurugram, near Vatika Chowk
                        and opposite Chinar Garden.
                    </div>

                </details>


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>What are Dr. Anu Nagpal's OPD timings?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        Her listed OPD timings are Monday to Saturday,
                        9:00 AM to 5:00 PM.
                    </div>

                </details>


                <details class="group bg-white border border-gray-200 rounded-xl overflow-hidden">

                    <summary class="flex items-center justify-between cursor-pointer px-5 py-4 font-semibold text-gray-900">

                        <span>How can I book a consultation with Dr. Anu Nagpal?</span>

                        <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-500 group-open:rotate-180 transition'); ?>

                    </summary>

                    <div class="px-5 pb-5 text-gray-600 leading-relaxed">
                        You can use the appointment option on this page or
                        contact Akropolis Super Speciality Hospital to enquire
                        about a consultation.
                    </div>

                </details>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CONSULTATION CTA
    ====================================================== -->

    <section class="py-12 md:py-16 bg-[#fff7f3]">

        <div class="container mx-auto px-4 text-center">

            <div class="max-w-3xl mx-auto">

                <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-white shadow-sm flex items-center justify-center text-[#D66C43]">

                    <?php echo getIcon('CalendarCheck', 'h-7 w-7'); ?>

                </div>


                <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A] mb-3">
                    Schedule a Consultation
                </h2>


                <p class="text-gray-600 mb-6">
                    If you would like to discuss a women's health, pregnancy
                    or gynaecological concern, enquire about an appointment
                    with Dr. Anu Nagpal.
                </p>


                <a
                    href="/contact"
                    class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c55b36] text-white px-7 py-3.5 rounded-xl font-semibold shadow-md transition"
                >
                    <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
                    <span>Book Appointment</span>
                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         EXPLORE MORE
    ====================================================== -->

    <section class="py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4">

            <h2 class="text-2xl md:text-3xl font-extrabold text-[#10254A] mb-7">
                Explore More
            </h2>


            <div class="grid md:grid-cols-2 gap-5">


                <a
                    href="/departments/obstetrics-gynecology"
                    class="group flex items-center justify-between gap-4 bg-white border border-gray-100 rounded-2xl shadow-sm p-6 hover:shadow-md transition"
                >

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-pink-50 text-pink-500 flex items-center justify-center shrink-0">

                            <?php echo getIcon('Baby', 'h-6 w-6'); ?>

                        </div>

                        <div>

                            <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB] transition">
                                Obstetrics &amp; Gynaecology Department
                            </h3>

                            <p class="text-sm text-gray-600 mt-1">
                                Comprehensive women's health and maternity services.
                            </p>

                        </div>

                    </div>


                    <?php echo getIcon('ChevronRight', 'h-5 w-5 text-gray-400 group-hover:text-[#328CCB]'); ?>

                </a>


                <a
                    href="/doctors"
                    class="group flex items-center justify-between gap-4 bg-white border border-gray-100 rounded-2xl shadow-sm p-6 hover:shadow-md transition"
                >

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-[#328CCB]/10 text-[#328CCB] flex items-center justify-center shrink-0">

                            <?php echo getIcon('Users', 'h-6 w-6'); ?>

                        </div>

                        <div>

                            <h3 class="font-bold text-gray-900 group-hover:text-[#328CCB] transition">
                                Meet Our Doctors
                            </h3>

                            <p class="text-sm text-gray-600 mt-1">
                                View other specialists at Akropolis Hospital.
                            </p>

                        </div>

                    </div>


                    <?php echo getIcon('ChevronRight', 'h-5 w-5 text-gray-400 group-hover:text-[#328CCB]'); ?>

                </a>

            </div>

        </div>

    </section>

</main>


<!-- =========================================================
     SITEWIDE FOOTER
     
     IMPORTANT:
     Do NOT recreate the footer here.
     This keeps the exact same footer used across the website.
========================================================= -->

<?php include __DIR__ . '/../includes/footer.php'; ?>


<!-- =========================================================
     SITEWIDE SCRIPTS
========================================================= -->

<?php include __DIR__ . '/../includes/scripts.php'; ?>