<?php

$doctorId = 'dr-prateek-girotra';

require_once __DIR__ . '/../includes/data.php';

if (!function_exists('schemaHospital')) {
    require_once __DIR__ . '/../includes/schema.php';
}


/*
|--------------------------------------------------------------------------
| Find Doctor
|--------------------------------------------------------------------------
*/

$doctor = null;

foreach ($doctors as $d) {
    if (($d['id'] ?? '') === $doctorId) {
        $doctor = $d;
        break;
    }
}


/*
|--------------------------------------------------------------------------
| 404
|--------------------------------------------------------------------------
*/

if (!$doctor) {

    http_response_code(404);

    $page_title = 'Doctor Not Found | Akropolis Super Speciality Hospital';
    $page_description = 'The requested doctor profile could not be found.';
    $canonical_url = '/doctors/' . $doctorId;

    include __DIR__ . '/../includes/head.php';
    include __DIR__ . '/../includes/header-v2.php';
    ?>

    <main class="min-h-screen bg-white flex items-center justify-center px-4">
        <div class="text-center max-w-xl">

            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-50 text-[#328CCB] mb-6">
                <?php echo getIcon('UserX', 'w-8 h-8'); ?>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Doctor Not Found
            </h1>

            <p class="text-gray-600 mb-8">
                The requested doctor profile could not be found.
            </p>

            <a
                href="/doctors"
                class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#287caf] text-white px-6 py-3 rounded-lg font-semibold transition"
            >
                <?php echo getIcon('ArrowLeft', 'w-5 h-5'); ?>
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
| Page Data
|--------------------------------------------------------------------------
*/

$doctor_name = $doctor['name'] ?? 'Dr. Prateek Girotra';
$doctor_role = $doctor['specialization'] ?? 'Director & Head, Department of Orthopedics';
$doctor_qualification = $doctor['qualification'] ?? 'MBBS, MS (Orthopaedics)';
$doctor_experience = $doctor['experience'] ?? '12+ years';
$doctor_specialist_experience = $doctor['yearsAsSpecialist'] ?? '10+ years as specialist';
$doctor_image = $doctor['image'] ?? '/assets/images/homepage/Dr Prateek Girotra.webp';
$doctor_department = $doctor['department'] ?? 'Orthopedics';
$doctor_description = $doctor['description'] ?? 'Dr. Prateek Girotra is a highly skilled Orthopaedic Surgeon specializing in Trauma, Joint Replacement, and Arthroscopy.';
$registration_verified = !empty($doctor['registrationVerified']);


/*
|--------------------------------------------------------------------------
| SEO
|--------------------------------------------------------------------------
*/

$page_title = 'Dr. Prateek Girotra, Orthopaedic Surgeon in Gurgaon | Akropolis';

$page_description =
    'Meet Dr. Prateek Girotra, Orthopaedic Surgeon and Director & Head of Orthopedics at Akropolis Super Speciality Hospital in Gurugram. Explore his trauma, joint replacement and arthroscopy expertise, training, experience and publications.';

$canonical_url = '/doctors/dr-prateek-girotra';


/*
|--------------------------------------------------------------------------
| FAQ Content
|--------------------------------------------------------------------------
*/

$doctor_faqs = [

    [
        'question' => 'Who is Dr. Prateek Girotra?',
        'answer' =>
            'Dr. Prateek Girotra is an Orthopaedic Surgeon and Director & Head of the Department of Orthopedics at Akropolis Super Speciality Hospital in Gurugram.'
    ],

    [
        'question' => 'What does Dr. Prateek Girotra specialise in?',
        'answer' =>
            'Dr. Prateek Girotra specialises in trauma, joint replacement and arthroscopy. His professional profile also documents training in spine and plastic surgery and paediatric orthopaedics.'
    ],

    [
        'question' => 'Does Dr. Prateek Girotra treat sports injuries?',
        'answer' =>
            'His professional profile and publications include orthopaedic sports injury-related work, including ACL reconstruction and rotator cuff repair.'
    ],

    [
        'question' => 'Does Dr. Prateek Girotra perform joint replacement?',
        'answer' =>
            'Joint replacement is one of Dr. Prateek Girotra’s documented areas of expertise, including hip and knee replacements.'
    ],

    [
        'question' => 'Where does Dr. Prateek Girotra consult?',
        'answer' =>
            'Dr. Prateek Girotra currently serves as Director & Head of Orthopedics at Akropolis Super Speciality Hospital near Vatika Chowk, Gurugram.'
    ],

    [
        'question' => 'What are Dr. Prateek Girotra’s OPD timings?',
        'answer' =>
            'Dr. Prateek Girotra is available for consultation Monday to Saturday, from 8:00 AM to 8:00 PM.'
    ],

    [
        'question' => 'Does Dr. Prateek Girotra have research publications?',
        'answer' =>
            'Yes. Dr. Prateek Girotra has contributed to research and publications covering fractures, arthroscopy, rotator cuff repair, ACL reconstruction and other areas of orthopaedic care.'
    ]

];


/*
|--------------------------------------------------------------------------
| FAQ Schema
|--------------------------------------------------------------------------
*/

$faq_entities = [];

foreach ($doctor_faqs as $faq) {

    $faq_entities[] = [
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => $faq['answer']
        ]
    ];

}

$faq_schema = json_encode(
    [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faq_entities
    ],
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE |
    JSON_PRETTY_PRINT
);


/*
|--------------------------------------------------------------------------
| Physician + Breadcrumb Schema
|--------------------------------------------------------------------------
*/

$schema_blocks = [

    schemaPhysician([
        'name' => $doctor_name,
        'id' => $doctorId,
        'specialty' => 'Orthopaedic Surgery',
        'image' => $doctor_image,
        'bio' => $doctor_description,
        'qualifications' => [
            $doctor_qualification
        ],
    ]),

    schemaBreadcrumb([
        [
            'name' => 'Home',
            'url' => '/'
        ],
        [
            'name' => 'Doctors',
            'url' => '/doctors'
        ],
        [
            'name' => $doctor_name,
            'url' => '/doctors/' . $doctorId
        ]
    ]),

    $faq_schema

];


include __DIR__ . '/../includes/head.php';

?>


<!-- =========================================================
     SITEWIDE EMERGENCY BAR
========================================================= -->

<div class="bg-[#D66C43] text-white py-2 px-4 text-center">

    <div class="container mx-auto flex items-center justify-center gap-2">

        <?php echo getIcon('Phone', 'w-4 h-4'); ?>

        <span class="font-semibold text-sm md:text-base">
            Emergency 24×7:
            <?php echo htmlspecialchars(CONTACT_INFO['emergency'] ?? '9100009744', ENT_QUOTES, 'UTF-8'); ?>
        </span>

    </div>

</div>


<!-- =========================================================
     HEADER
========================================================= -->

<?php include __DIR__ . '/../includes/header-v2.php'; ?>


<main id="main-content">


<!-- =========================================================
     BREADCRUMB
========================================================= -->

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
                Home
            </a>

            <span>/</span>

            <a
                href="/doctors"
                class="hover:text-[#328CCB] transition"
            >
                Doctors
            </a>

            <span>/</span>

            <span class="text-gray-800 font-medium">
                Dr. Prateek Girotra
            </span>

        </nav>

    </div>

</section>


<!-- =========================================================
     HERO
========================================================= -->

<section class="relative overflow-hidden bg-[#0F1A33] text-white">

    <div class="absolute inset-0 bg-gradient-to-br from-[#0F1A33] via-[#173B5B] to-[#328CCB]"></div>

    <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-[#328CCB]/20 blur-3xl"></div>

    <div class="absolute -left-32 -bottom-32 w-96 h-96 rounded-full bg-[#D66C43]/10 blur-3xl"></div>


    <div class="container mx-auto px-4 py-12 lg:py-20 relative z-10">

        <div class="grid lg:grid-cols-[360px_1fr] gap-10 lg:gap-14 items-center max-w-6xl mx-auto">


            <!-- Doctor Image -->

            <div class="flex justify-center lg:justify-start">

                <div class="relative">

                    <div class="absolute inset-0 rounded-3xl bg-white/10 transform rotate-3"></div>

                    <div class="relative bg-white rounded-3xl p-3 shadow-2xl">

                        <img
                            src="<?php echo htmlspecialchars($doctor_image, ENT_QUOTES, 'UTF-8'); ?>"
                            alt="Dr. Prateek Girotra, Orthopaedic Surgeon at Akropolis Super Speciality Hospital"
                            width="768"
                            height="1024"
                            loading="eager"
                            fetchpriority="high"
                            class="w-full max-w-[330px] aspect-[3/4] object-cover object-top rounded-2xl"
                        >

                    </div>

                </div>

            </div>


            <!-- Hero Content -->

            <div>

                <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-5">

                    <?php echo getIcon('MapPin', 'w-4 h-4 text-blue-200'); ?>

                    <span class="text-sm font-medium">
                        Gurugram, Haryana
                    </span>

                </div>


                <p class="text-[#A9D9F5] font-semibold text-sm uppercase tracking-wider mb-3">
                    Orthopaedic Surgeon
                </p>


                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-5">
                    Dr. Prateek Girotra
                </h1>


                <p class="text-xl md:text-2xl text-white/90 font-medium mb-5">
                    Director &amp; Head, Department of Orthopedics
                </p>


                <p class="text-white/75 text-lg leading-relaxed max-w-3xl mb-7">
                    Dr. Prateek Girotra is an Orthopaedic Surgeon specialising in
                    <strong class="text-white">Trauma, Joint Replacement and Arthroscopy</strong>.
                    He currently serves as Director &amp; Head of the Department of Orthopedics
                    at Akropolis Super Speciality Hospital, Gurugram.
                </p>


                <!-- Trust / Credentials -->

                <div class="flex flex-wrap gap-3 mb-8">

                    <span class="inline-flex items-center gap-2 bg-white/10 border border-white/15 rounded-full px-4 py-2 text-sm">
                        <?php echo getIcon('GraduationCap', 'w-4 h-4 text-blue-200'); ?>
                        <?php echo htmlspecialchars($doctor_qualification, ENT_QUOTES, 'UTF-8'); ?>
                    </span>


                    <span class="inline-flex items-center gap-2 bg-white/10 border border-white/15 rounded-full px-4 py-2 text-sm">
                        <?php echo getIcon('Award', 'w-4 h-4 text-blue-200'); ?>
                        <?php echo htmlspecialchars($doctor_experience, ENT_QUOTES, 'UTF-8'); ?> experience
                    </span>


                    <?php if ($registration_verified): ?>

                        <span class="inline-flex items-center gap-2 bg-green-500/15 border border-green-300/20 rounded-full px-4 py-2 text-sm text-green-100">

                            <?php echo getIcon('BadgeCheck', 'w-4 h-4'); ?>

                            Medical Registration Verified

                        </span>

                    <?php endif; ?>

                </div>


                <!-- CTA -->

                <div class="flex flex-col sm:flex-row gap-3">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55d37] text-white px-7 py-3.5 rounded-xl font-semibold shadow-lg transition"
                    >
                        <?php echo getIcon('CalendarCheck', 'w-5 h-5'); ?>
                        Book Appointment
                    </a>


                    <a
                        href="tel:9100009744"
                        class="inline-flex items-center justify-center gap-2 bg-white text-[#0F1A33] hover:bg-gray-100 px-7 py-3.5 rounded-xl font-semibold transition"
                    >
                        <?php echo getIcon('Phone', 'w-5 h-5'); ?>
                        Call 9100009744
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     QUICK FACTS
========================================================= -->

<section class="relative -mt-8 z-20">

    <div class="container mx-auto px-4">

        <div class="max-w-6xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-5">

            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-5">

                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center mb-3">
                    <?php echo getIcon('Award', 'w-5 h-5'); ?>
                </div>

                <p class="text-2xl font-bold text-gray-900">
                    12+
                </p>

                <p class="text-sm text-gray-600">
                    Years of Experience
                </p>

            </div>


            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-5">

                <div class="w-10 h-10 rounded-xl bg-orange-50 text-[#D66C43] flex items-center justify-center mb-3">
                    <?php echo getIcon('Stethoscope', 'w-5 h-5'); ?>
                </div>

                <p class="text-2xl font-bold text-gray-900">
                    10+
                </p>

                <p class="text-sm text-gray-600">
                    Years as Specialist
                </p>

            </div>


            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-5">

                <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center mb-3">
                    <?php echo getIcon('Clock', 'w-5 h-5'); ?>
                </div>

                <p class="text-lg font-bold text-gray-900">
                    Mon–Sat
                </p>

                <p class="text-sm text-gray-600">
                    8:00 AM – 8:00 PM
                </p>

            </div>


            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-5">

                <div class="w-10 h-10 rounded-xl bg-green-50 text-green-600 flex items-center justify-center mb-3">
                    <?php echo getIcon('Building2', 'w-5 h-5'); ?>
                </div>

                <p class="text-sm font-bold text-gray-900 leading-snug">
                    Akropolis Super Speciality Hospital
                </p>

                <p class="text-sm text-gray-600 mt-1">
                    Gurugram
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     ABOUT
========================================================= -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="grid lg:grid-cols-[1fr_300px] gap-12 items-start">


            <div>

                <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                    <?php echo getIcon('UserRound', 'w-4 h-4'); ?>
                    About the Specialist
                </span>


                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    About Dr. Prateek Girotra
                </h2>


                <div class="space-y-5 text-gray-700 leading-8 text-lg">

                    <p>
                        Dr. Prateek Girotra is an Orthopaedic Surgeon specialising in
                        <strong>Trauma, Joint Replacement and Arthroscopy</strong>.
                        His professional profile describes experience across reputed hospitals
                        in Delhi NCR, with a focus on complex skeletal trauma, advanced
                        arthroscopic surgeries and hip and knee replacements.
                    </p>


                    <p>
                        He currently serves as
                        <strong>Director &amp; Head of the Department of Orthopedics</strong>
                        at Akropolis Super Speciality Hospital, Gurugram.
                    </p>


                    <p>
                        His training includes postgraduate training at
                        <strong>Hindu Rao Hospital &amp; NDMC Medical College, Delhi</strong>,
                        specialised training in spine and plastic surgery at
                        <strong>Safdarjung Hospital, Delhi</strong>, and training in
                        paediatric orthopaedics, including deformity correction,
                        Ilizarov and JESS techniques.
                    </p>

                </div>

            </div>


            <!-- Expertise Summary -->

            <aside class="bg-[#F7FAFC] rounded-2xl border border-gray-100 p-6">

                <h3 class="text-lg font-bold text-gray-900 mb-5">
                    Core Expertise
                </h3>


                <ul class="space-y-4">

                    <li class="flex items-start gap-3">

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('Bone', 'w-4 h-4'); ?>
                        </span>

                        <span class="text-gray-700">
                            Trauma &amp; fracture care
                        </span>

                    </li>


                    <li class="flex items-start gap-3">

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('Accessibility', 'w-4 h-4'); ?>
                        </span>

                        <span class="text-gray-700">
                            Joint replacement
                        </span>

                    </li>


                    <li class="flex items-start gap-3">

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('Activity', 'w-4 h-4'); ?>
                        </span>

                        <span class="text-gray-700">
                            Arthroscopy
                        </span>

                    </li>


                    <li class="flex items-start gap-3">

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('PersonStanding', 'w-4 h-4'); ?>
                        </span>

                        <span class="text-gray-700">
                            Paediatric orthopaedics
                        </span>

                    </li>


                    <li class="flex items-start gap-3">

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('ShieldPlus', 'w-4 h-4'); ?>
                        </span>

                        <span class="text-gray-700">
                            Sports injury-related orthopaedic care
                        </span>

                    </li>

                </ul>

            </aside>

        </div>

    </div>

</section>


<!-- =========================================================
     AREAS OF EXPERTISE
========================================================= -->

<section class="py-16 lg:py-20 bg-[#F7FAFC]">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="text-center max-w-3xl mx-auto mb-12">

            <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                <?php echo getIcon('Stethoscope', 'w-4 h-4'); ?>
                Clinical Focus
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Areas of Orthopaedic Expertise
            </h2>

            <p class="text-gray-600 text-lg">
                Dr. Prateek Girotra's professional profile highlights experience in trauma,
                arthroscopy, joint replacement and related orthopaedic care.
            </p>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- Card 1 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center mb-5">
                    <?php echo getIcon('Bone', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Trauma &amp; Fracture Care
                </h3>

                <p class="text-gray-600 leading-7">
                    Professional experience involving complex skeletal trauma and fracture-related
                    orthopaedic care.
                </p>

            </article>


            <!-- Card 2 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-orange-50 text-[#D66C43] flex items-center justify-center mb-5">
                    <?php echo getIcon('Accessibility', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Joint Replacement
                </h3>

                <p class="text-gray-600 leading-7">
                    Hip and knee replacement are specifically identified among his areas of
                    orthopaedic expertise.
                </p>

            </article>


            <!-- Card 3 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center mb-5">
                    <?php echo getIcon('Activity', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Arthroscopy
                </h3>

                <p class="text-gray-600 leading-7">
                    Advanced arthroscopic surgery is one of the doctor's documented clinical
                    specialties.
                </p>

            </article>


            <!-- Card 4 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-green-50 text-green-600 flex items-center justify-center mb-5">
                    <?php echo getIcon('PersonStanding', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Sports Injury-Related Care
                </h3>

                <p class="text-gray-600 leading-7">
                    His research includes ACL reconstruction and rotator cuff repair, supporting
                    his academic involvement in sports injury-related orthopaedics.
                </p>

            </article>


            <!-- Card 5 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-5">
                    <?php echo getIcon('Baby', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Paediatric Orthopaedics
                </h3>

                <p class="text-gray-600 leading-7">
                    His training includes paediatric orthopaedics, deformity correction,
                    Ilizarov and JESS techniques.
                </p>

            </article>


            <!-- Card 6 -->

            <article class="bg-white rounded-2xl border border-gray-100 p-7 shadow-sm hover:shadow-md transition">

                <div class="w-12 h-12 rounded-xl bg-red-50 text-red-600 flex items-center justify-center mb-5">
                    <?php echo getIcon('Activity', 'w-6 h-6'); ?>
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Spine-Related Training
                </h3>

                <p class="text-gray-600 leading-7">
                    He completed specialised training in spine and plastic surgery at
                    Safdarjung Hospital, Delhi.
                </p>

            </article>

        </div>

    </div>

</section>


<!-- =========================================================
     EDUCATION & TRAINING
========================================================= -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="grid lg:grid-cols-[0.85fr_1.15fr] gap-12 items-start">


            <div>

                <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                    <?php echo getIcon('GraduationCap', 'w-4 h-4'); ?>
                    Education & Training
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
                    Education &amp; Specialist Training
                </h2>

                <p class="text-gray-600 text-lg leading-8">
                    His professional training includes postgraduate and specialist
                    orthopaedic exposure across recognised institutions in Delhi.
                </p>

            </div>


            <div class="space-y-5">


                <article class="relative pl-8 border-l-2 border-blue-100">

                    <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#328CCB] border-4 border-white shadow-sm"></span>

                    <p class="text-sm font-semibold text-[#328CCB] uppercase tracking-wide mb-1">
                        Postgraduate Training
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Hindu Rao Hospital &amp; NDMC Medical College, Delhi
                    </h3>

                    <p class="text-gray-600 leading-7">
                        Postgraduate training in orthopaedics.
                    </p>

                </article>


                <article class="relative pl-8 border-l-2 border-blue-100">

                    <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#328CCB] border-4 border-white shadow-sm"></span>

                    <p class="text-sm font-semibold text-[#328CCB] uppercase tracking-wide mb-1">
                        Specialist Training
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Spine &amp; Plastic Surgery — Safdarjung Hospital, Delhi
                    </h3>

                    <p class="text-gray-600 leading-7">
                        Specialised training in spine and plastic surgery.
                    </p>

                </article>


                <article class="relative pl-8">

                    <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-[#D66C43] border-4 border-white shadow-sm"></span>

                    <p class="text-sm font-semibold text-[#D66C43] uppercase tracking-wide mb-1">
                        Paediatric Orthopaedics
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Deformity Correction &amp; Specialist Techniques
                    </h3>

                    <p class="text-gray-600 leading-7">
                        Training in paediatric orthopaedics, including deformity correction,
                        Ilizarov and JESS techniques.
                    </p>

                </article>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     PROFESSIONAL EXPERIENCE
========================================================= -->

<section class="py-16 lg:py-20 bg-[#F7FAFC]">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="max-w-3xl mb-12">

            <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                <?php echo getIcon('BriefcaseMedical', 'w-4 h-4'); ?>
                Professional Experience
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Professional Experience
            </h2>

            <p class="text-gray-600 text-lg">
                Dr. Prateek Girotra's professional history includes leadership,
                specialist and medical roles across institutions in Delhi NCR and Haryana.
            </p>

        </div>


        <div class="max-w-4xl">


            <!-- Current -->

            <article class="relative pl-10 pb-10 border-l-2 border-blue-100">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-[#328CCB] border-4 border-white shadow"></span>

                <span class="inline-flex text-xs font-bold uppercase tracking-wide bg-blue-50 text-[#328CCB] rounded-full px-3 py-1 mb-3">
                    Present
                </span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900">
                    Director &amp; Head, Orthopedics
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    Akropolis Super Speciality Hospital, Gurugram
                </p>

            </article>


            <!-- Visiting -->

            <article class="relative pl-10 pb-10 border-l-2 border-blue-100">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-[#328CCB] border-4 border-white shadow"></span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900">
                    Visiting Consultant
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    Nagpal Nursing Home, Sector 14, Gurgaon
                </p>

                <p class="text-gray-700 font-medium">
                    Tulsi Healthcare, Sector 65, Gurgaon
                </p>

            </article>


            <!-- Rajmanjri -->

            <article class="relative pl-10 pb-10 border-l-2 border-blue-100">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-gray-400 border-4 border-white shadow"></span>

                <span class="text-sm text-gray-500 font-medium">
                    2021–2022
                </span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mt-1">
                    Former Director &amp; Head, Orthopedics
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    Rajmanjri Group of Multispeciality Hospital, Sohna
                </p>

            </article>


            <!-- Senior Resident -->

            <article class="relative pl-10 pb-10 border-l-2 border-blue-100">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-gray-400 border-4 border-white shadow"></span>

                <span class="text-sm text-gray-500 font-medium">
                    2019–2021
                </span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mt-1">
                    Senior Resident, Orthopaedics
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    Hindu Rao Hospital, Delhi &amp; BPS Medical College, Sonipat
                </p>

            </article>


            <!-- Medical Officer -->

            <article class="relative pl-10 pb-10 border-l-2 border-blue-100">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-gray-400 border-4 border-white shadow"></span>

                <span class="text-sm text-gray-500 font-medium">
                    2013–2016
                </span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mt-1">
                    Medical Officer
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    District Sonipat, Haryana
                </p>

            </article>


            <!-- General Surgery -->

            <article class="relative pl-10">

                <span class="absolute -left-[10px] top-0 w-5 h-5 rounded-full bg-gray-400 border-4 border-white shadow"></span>

                <span class="text-sm text-gray-500 font-medium">
                    2012–2013
                </span>

                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mt-1">
                    Resident, General Surgery
                </h3>

                <p class="text-gray-700 font-medium mt-1">
                    BPS Medical College, Sonipat
                </p>

            </article>

        </div>

    </div>

</section>


<!-- =========================================================
     RESEARCH & PUBLICATIONS
========================================================= -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="max-w-3xl mb-12">

            <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                <?php echo getIcon('BookOpen', 'w-4 h-4'); ?>
                Academic Work
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Research &amp; Publications
            </h2>

            <p class="text-gray-600 text-lg">
                Dr. Prateek Girotra has published research on fracture management, arthroscopic surgery, rotator cuff repair, ACL reconstruction, and paediatric orthopaedics, with his work appearing in orthopaedic and medical research journals.
            </p>

        </div>


        <div class="grid md:grid-cols-2 gap-5">


            <?php
            $publications = [

                'Functional outcome of locking compression plate in the management of proximal tibia fracture — International Journal of Orthopaedic Sciences, 2020; 6(1):152–156.',

                'Arthroscopic repair of rotator cuff tears: analysis and functional outcome — International Journal of Research in Orthopaedics, 2020.',

                'Demographic profile and functional outcome following fixation of malleolar fractures in adults — International Journal of Research in Orthopaedics, March 2020.',

                'Comparative study of operative management of intra-articular distal radius fractures — IJMRP, September 2019.',

                'Evaluation of Ponseti Method in clubfoot management.',

                'ACL reconstruction outcomes: semitendinosus vs gracilis grafts — International Journal of Orthopaedic Sciences, 2020.',

                'Arthroscopic assisted mini-open rotator cuff repair: QoL study.',

                'Transportal single bundle ACL reconstruction using quadruple hamstring graft — International Journal of Orthopaedic Sciences, 2022.'

            ];

$publications = array_values(
    array_filter(
        $publications,
        fn($publication) => trim((string) $publication) !== ''
    )
);

foreach ($publications as $publication):
?>

                <article class="flex gap-4 bg-[#F7FAFC] rounded-2xl border border-gray-100 p-6">

                    <div class="w-9 h-9 shrink-0 rounded-lg bg-white text-[#328CCB] flex items-center justify-center shadow-sm">
                        <?php echo getIcon('FileText', 'w-4 h-4'); ?>
                    </div>

                    <p class="text-gray-700 leading-7">
                        <?php echo htmlspecialchars($publication, ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     PROFESSIONAL MEMBERSHIPS
========================================================= -->

<section class="py-16 lg:py-20 bg-[#F7FAFC]">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="grid lg:grid-cols-2 gap-12 items-start">


            <div>

                <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                    <?php echo getIcon('Users', 'w-4 h-4'); ?>
                    Professional Associations
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
                    Professional Memberships
                </h2>

                <p class="text-gray-600 text-lg leading-8">
                    Dr. Prateek Girotra is associated with professional organisations in orthopaedics, arthroscopy, arthroplasty and broader medical practice, reflecting his involvement in the orthopaedic and medical community.
                </p>

            </div>


            <div class="grid sm:grid-cols-2 gap-4">

                <?php
                $memberships = [
                    'Delhi Orthopaedic Association',
                    'Gurgaon Orthopaedic Society',
                    'Indian Arthroscopy & Arthroplasty Society (IAOS)',
                    'Paediatric Orthopaedic Foundation — Life Member',
                    'Indian Medical Association (IMA)'
                ];

                foreach ($memberships as $membership):
                ?>

                    <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">

                        <div class="flex items-start gap-3">

                            <span class="w-9 h-9 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center">
                                <?php echo getIcon('BadgeCheck', 'w-4 h-4'); ?>
                            </span>

                            <p class="font-semibold text-gray-800 leading-6">
                                <?php echo htmlspecialchars($membership, ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONFERENCES & ACADEMIC INVOLVEMENT
========================================================= -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="max-w-4xl mx-auto text-center">

            <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                <?php echo getIcon('Presentation', 'w-4 h-4'); ?>
                Academic Involvement
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-5">
                Conferences &amp; Teaching
            </h2>

            <p class="text-gray-600 text-lg leading-8">
                Dr. Prateek Girotra has participated in conferences and teaching programmes across various parts of the country, reflecting his continued involvement in professional learning and academic engagement in orthopaedics.
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     OPD + LOCATION
========================================================= -->

<section class="py-16 lg:py-20 bg-[#F7FAFC]">

    <div class="container mx-auto px-4 max-w-6xl">

        <div class="grid lg:grid-cols-2 gap-8">


            <!-- OPD -->

            <article class="bg-white rounded-3xl border border-gray-100 shadow-sm p-7 lg:p-9">

                <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center mb-5">
                    <?php echo getIcon('Clock', 'w-6 h-6'); ?>
                </div>

                <p class="text-sm font-semibold text-[#328CCB] uppercase tracking-wide mb-2">
                    OPD Timing
                </p>

                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Consult Dr. Prateek Girotra
                </h2>

                <p class="text-gray-600 leading-7 mb-6">
                    Dr. Prateek Girotra is available for consultation at Akropolis Super Speciality Hospital during the following hours:
                </p>


                <div class="bg-[#F7FAFC] rounded-2xl p-5 mb-6">

                    <div class="flex items-center gap-4">

                        <div class="w-11 h-11 rounded-xl bg-white text-[#328CCB] flex items-center justify-center shadow-sm">
                            <?php echo getIcon('CalendarDays', 'w-5 h-5'); ?>
                        </div>

                        <div>

                            <p class="font-bold text-gray-900">
                                Monday to Saturday
                            </p>

                            <p class="text-gray-600">
                                8:00 AM – 8:00 PM
                            </p>

                        </div>

                    </div>

                </div>


                <a
                    href="/contact"
                    class="w-full inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55d37] text-white px-6 py-3.5 rounded-xl font-semibold transition"
                >
                    <?php echo getIcon('CalendarCheck', 'w-5 h-5'); ?>
                    Book an Appointment
                </a>

            </article>


            <!-- Location -->

            <article class="bg-white rounded-3xl border border-gray-100 shadow-sm p-7 lg:p-9">

                <div class="w-12 h-12 rounded-xl bg-green-50 text-green-600 flex items-center justify-center mb-5">
                    <?php echo getIcon('MapPin', 'w-6 h-6'); ?>
                </div>

                <p class="text-sm font-semibold text-green-600 uppercase tracking-wide mb-2">
                    Consultation Location
                </p>

                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    Akropolis Super Speciality Hospital
                </h2>

                <p class="text-gray-600 leading-7 mb-6">
                    Near Vatika Chowk, Opposite Chinar Garden,
                    Sector 69, Gurugram, Haryana 122101.
                </p>


                <div class="space-y-4 mb-7">

                    <a
                        href="tel:9100009744"
                        class="flex items-center gap-3 text-gray-700 hover:text-[#328CCB] transition"
                    >

                        <span class="w-10 h-10 rounded-xl bg-blue-50 text-[#328CCB] flex items-center justify-center">
                            <?php echo getIcon('Phone', 'w-4 h-4'); ?>
                        </span>

                        <span>
                            <span class="block text-xs text-gray-500">
                                Hospital Appointment
                            </span>

                            <span class="font-semibold">
                                9100009744
                            </span>
                        </span>

                    </a>


                    <a
                        href="https://maps.google.com/?q=Akropolis+Super+Speciality+Hospital+Sector+69+Gurugram"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 text-[#328CCB] font-semibold"
                    >
                        <?php echo getIcon('Navigation', 'w-4 h-4'); ?>
                        Get Directions
                    </a>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- =========================================================
     FAQ / AEO
========================================================= -->

<section class="py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4 max-w-4xl">

        <div class="text-center mb-12">

            <span class="inline-flex items-center gap-2 text-[#328CCB] bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold mb-4">
                <?php echo getIcon('CircleHelp', 'w-4 h-4'); ?>
                Frequently Asked Questions
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Frequently Asked Questions About Dr. Prateek Girotra
            </h2>

            <p class="text-gray-600 text-lg">
                Quick answers about his specialty, experience, consultation and professional background.
            </p>

        </div>


        <div class="space-y-4">

            <?php foreach ($doctor_faqs as $index => $faq): ?>

                <details
                    class="group border border-gray-200 rounded-2xl bg-white overflow-hidden"
                    <?php echo $index === 0 ? 'open' : ''; ?>
                >

                    <summary class="flex items-center justify-between gap-5 cursor-pointer px-6 py-5 font-semibold text-gray-900 list-none">

                        <span>
                            <?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?>
                        </span>

                        <span class="w-8 h-8 shrink-0 rounded-lg bg-blue-50 text-[#328CCB] flex items-center justify-center group-open:rotate-180 transition-transform">

                            <?php echo getIcon('ChevronDown', 'w-4 h-4'); ?>

                        </span>

                    </summary>


                    <div class="px-6 pb-6 text-gray-600 leading-7">

                        <?php echo htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8'); ?>

                    </div>

                </details>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="py-16 lg:py-20 bg-[#0F1A33] text-white">

    <div class="container mx-auto px-4 max-w-5xl">

        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-[#163B5C] to-[#328CCB] p-8 md:p-12 text-center">

            <div class="absolute -right-20 -top-20 w-56 h-56 rounded-full bg-white/10"></div>

            <div class="absolute -left-20 -bottom-20 w-56 h-56 rounded-full bg-white/5"></div>


            <div class="relative z-10">

                <p class="text-blue-100 font-semibold text-sm uppercase tracking-wider mb-3">
                    Orthopaedic Consultation
                </p>

                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Consult Dr. Prateek Girotra
                </h2>

                <p class="text-white/80 text-lg max-w-2xl mx-auto leading-7 mb-8">
                    Book an appointment at Akropolis Super Speciality Hospital,
                    Gurugram, for an orthopaedic consultation.
                </p>


                <div class="flex flex-col sm:flex-row justify-center gap-3">

                    <a
                        href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55d37] text-white px-7 py-3.5 rounded-xl font-semibold transition"
                    >
                        <?php echo getIcon('CalendarCheck', 'w-5 h-5'); ?>
                        Book Appointment
                    </a>


                    <a
                        href="tel:9100009744"
                        class="inline-flex items-center justify-center gap-2 bg-white text-[#0F1A33] hover:bg-gray-100 px-7 py-3.5 rounded-xl font-semibold transition"
                    >
                        <?php echo getIcon('Phone', 'w-5 h-5'); ?>
                        Call 9100009744
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     MOBILE STICKY CTA
========================================================= -->

<div class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 shadow-2xl md:hidden">

    <div class="grid grid-cols-2 gap-2 p-2">

        <a
            href="tel:9100009744"
            class="inline-flex items-center justify-center gap-2 bg-[#0F1A33] text-white rounded-lg py-3 font-semibold text-sm"
        >
            <?php echo getIcon('Phone', 'w-4 h-4'); ?>
            Call Now
        </a>


        <a
            href="/contact"
            class="inline-flex items-center justify-center gap-2 bg-[#D66C43] text-white rounded-lg py-3 font-semibold text-sm"
        >
            <?php echo getIcon('CalendarCheck', 'w-4 h-4'); ?>
            Book Appointment
        </a>

    </div>

</div>


</main>


<!-- =========================================================
     PAGE-LOCAL STYLES
========================================================= -->

<style>

    html {
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
    }

    main {
        padding-bottom: 0;
    }

    details summary::-webkit-details-marker {
        display: none;
    }

    details summary {
        list-style: none;
    }

    @media (max-width: 767px) {

        main {
            padding-bottom: 72px;
        }

    }

</style>


<?php include __DIR__ . '/../includes/footer.php'; ?>

<?php include __DIR__ . '/../includes/scripts.php'; ?>