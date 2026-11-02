
<?php
/**
 * Haddi Ka Doctor - Haryana District Landing Page Template
 * Shared by /haddi-ka-doctor/haryana/{district}/
 *
 * Consultation location:
 * Akropolis Super Speciality Hospital, Sector 69, Gurugram.
 *
 * Dynamic functionality:
 * - District-specific SEO metadata
 * - District-specific Google Maps directions
 * - Individual landmark-to-hospital routes
 * - Shared Dr. Prateek Girotra profile
 * - District-specific Breadcrumb and WebPage schema
 */

require_once dirname(__DIR__) . '/includes/data.php';

/* -----------------------------------------------
   1. DISTRICT CONFIGURATION
------------------------------------------------ */

$district_name = isset($district_name)
    ? strtolower(trim((string) $district_name))
    : '';

$district_name = preg_replace('/[^a-z0-9-]/', '', $district_name);

$districtNames = [
    'ambala' => 'Ambala',
    'bhiwani' => 'Bhiwani',
    'charkhi-dadri' => 'Charkhi Dadri',
    'faridabad' => 'Faridabad',
    'fatehabad' => 'Fatehabad',
    'gurugram' => 'Gurugram',
    'hisar' => 'Hisar',
    'jhajjar' => 'Jhajjar',
    'jind' => 'Jind',
    'kaithal' => 'Kaithal',
    'karnal' => 'Karnal',
    'kurukshetra' => 'Kurukshetra',
    'mahendragarh' => 'Mahendragarh',
    'nuh' => 'Nuh',
    'palwal' => 'Palwal',
    'panchkula' => 'Panchkula',
    'panipat' => 'Panipat',
    'rewari' => 'Rewari',
    'rohtak' => 'Rohtak',
    'sirsa' => 'Sirsa',
    'sonipat' => 'Sonipat',
    'yamunanagar' => 'Yamunanagar'
];

if (!isset($districtNames[$district_name])) {
    http_response_code(404);
    exit('District page not found.');
}

$district_display = $districtNames[$district_name];

/* -----------------------------------------------
   2. HELPER FUNCTION
------------------------------------------------ */

$escape = static function ($value): string {
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
};

/* -----------------------------------------------
   3. DOCTOR INFORMATION
------------------------------------------------ */

$doctor = null;

foreach (($doctors ?? []) as $doctorItem) {
    if (($doctorItem['id'] ?? '') === 'dr-prateek-girotra') {
        $doctor = $doctorItem;
        break;
    }
}

if (!$doctor) {
    error_log('Dr. Prateek Girotra was not found in includes/data.php');
    http_response_code(500);
    exit('Doctor information is temporarily unavailable.');
}

$doctorName = $doctor['name'] ?? 'Dr. Prateek Girotra';
$doctorImage = $doctor['image'] ?? '';

$doctorQualification = $doctor['qualification'] ?? 'MBBS, MS (Orthopaedics)';
$doctorExperience = $doctor['experience'] ?? '12+ years';

$doctorDesignation = 'Director & Head, Department of Orthopedics';

// Confirmed OPD timing.
$doctorOpdTiming = '8:00 AM – 8:00 PM';

/* -----------------------------------------------
   4. HOSPITAL CONTACT INFORMATION
------------------------------------------------ */

$appointmentPhone = CONTACT_INFO['phone'] ?? '';
$emergencyPhone = CONTACT_INFO['emergency'] ?? '';

$appointmentTel = preg_replace(
    '/[^0-9+]/',
    '',
    (string) $appointmentPhone
);

$emergencyTel = preg_replace(
    '/[^0-9+]/',
    '',
    (string) $emergencyPhone
);

$hospitalName = 'Akropolis Super Speciality Hospital';

$hospitalAddress =
    'Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101';

$hospitalDestination =
    $hospitalName . ', Sector 69, Gurugram, Haryana';

/* -----------------------------------------------
   5. DISTRICT LANDMARKS

   Each district index.php supplies its own landmarks.
   These are used as route starting points, not
   as locations near Akropolis Hospital.
------------------------------------------------ */

$districtLandmarks = (
    isset($landmarks) && is_array($landmarks)
)
    ? array_values(
        array_filter(
            array_map(
                static function ($value) {
                    return trim((string) $value);
                },
                $landmarks
            )
        )
    )
    : [];

$districtLandmarks = array_slice($districtLandmarks, 0, 5);

/* -----------------------------------------------
   6. DYNAMIC GOOGLE MAPS DIRECTIONS

   Main route:
   Current district -> Gurugram Hospital.

   Landmark routes:
   Each configured district landmark -> Gurugram Hospital.

   Google Maps calculates the actual route and travel time.
------------------------------------------------ */

$directionsUrl =
    'https://www.google.com/maps/dir/?api=1'
    . '&origin=' . rawurlencode(
        $district_display . ', Haryana, India'
    )
    . '&destination=' . rawurlencode($hospitalDestination)
    . '&travelmode=driving';

$landmarkDirections = [];

foreach ($districtLandmarks as $landmark) {

    $landmarkDirections[] = [
        'name' => $landmark,

        'url' =>
            'https://www.google.com/maps/dir/?api=1'
            . '&origin=' . rawurlencode(
                $landmark . ', ' . $district_display . ', Haryana, India'
            )
            . '&destination=' . rawurlencode($hospitalDestination)
            . '&travelmode=driving'
    ];

}

/* -----------------------------------------------
   7. CANONICAL URL AND ENTITY IDENTIFIERS
------------------------------------------------ */

$districtUrl =
    'https://akropolishospital.com/haddi-ka-doctor/haryana/'
    . $district_name . '/';

$parentUrl =
    'https://akropolishospital.com/haddi-ka-doctor';

$doctorProfileUrl =
    'https://akropolishospital.com/doctors/dr-prateek-girotra';

// Reuse this same Person ID across the website.
$doctorEntityId = $doctorProfileUrl . '#person';

/* -----------------------------------------------
   8. DOCTOR IMAGE FOR SCHEMA
------------------------------------------------ */

$doctorImageSchema = $doctorImage;

if (
    $doctorImageSchema !== '' &&
    !preg_match('~^https?://~i', $doctorImageSchema)
) {
    $doctorImageSchema =
        'https://akropolishospital.com/'
        . ltrim($doctorImageSchema, '/');
}


/* -----------------------------------------------
   9. DYNAMIC DISTRICT-SPECIFIC SEO METADATA
------------------------------------------------ */

// Dynamic SEO title.
$page_title =
    'Haddi Ka Doctor for ' . $district_display .
    ' Patients | Dr. Prateek Girotra';

// Dynamic meta description.
$metaPhone = $appointmentTel !== ''
    ? $appointmentTel
    : '9100009744';

$page_description =
    $district_display .
    ' से Gurugram में डॉ. प्रतीक गिरोत्रा से Trauma, Joint Replacement व Arthroscopy के लिए परामर्श लें। Akropolis Hospital: ' .
    $metaPhone . '.';

// Maintain compatibility with head.php.
$meta_title = $page_title;
$meta_description = $page_description;


include dirname(__DIR__) . '/includes/head.php';

?>

<!-- Emergency Information -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center">

    <div class="container mx-auto flex items-center justify-center gap-2">

        <?php echo getIcon('Phone', 'h-4 w-4'); ?>

        <span class="font-semibold text-sm md:text-base">
            Emergency 24×7: <?php echo $escape($emergencyPhone); ?>
        </span>

    </div>

</div>

<!-- Header -->
<?php include dirname(__DIR__) . '/includes/header-v2.php'; ?>


<main class="bg-gray-50">

    <!-- Breadcrumbs -->
    <div class="bg-white border-b border-gray-200">

        <div class="container mx-auto px-4 py-4">

            <nav aria-label="Breadcrumb" class="text-sm text-gray-500">

                <ol class="flex flex-wrap items-center gap-2">

                    <li>
                        <a href="/" class="hover:text-[#328CCB]">
                            Home
                        </a>
                    </li>

                    <li aria-hidden="true">
                        <?php echo getIcon('ChevronRight', 'h-4 w-4'); ?>
                    </li>

                    <li>
                        <a href="/haddi-ka-doctor" class="hover:text-[#328CCB]">
                            Haddi Ka Doctor
                        </a>
                    </li>

                    <li aria-hidden="true">
                        <?php echo getIcon('ChevronRight', 'h-4 w-4'); ?>
                    </li>

                    <li class="text-[#328CCB] font-medium" aria-current="page">
                        <?php echo $escape($district_display); ?>
                    </li>

                </ol>

            </nav>

        </div>

    </div>


    <!-- =========================================
         DOCTOR INTRODUCTION AND PROFILE CARD
    ========================================== -->

    <section class="py-8 lg:py-12">

        <div class="container mx-auto px-4">

            <div class="grid lg:grid-cols-[minmax(260px,0.8fr)_minmax(0,1.8fr)] gap-6 lg:gap-8 items-start">


                <!-- Doctor Sidebar -->
                <aside class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 lg:p-7 lg:sticky lg:top-24">

                    <div class="text-center">

                        <?php if ($doctorImage !== ''): ?>

                            <img
                                src="<?php echo $escape($doctorImage); ?>"
                                alt="<?php echo $escape($doctorName); ?>, Director and Head of Orthopedics at Akropolis Super Speciality Hospital"
                                width="160"
                                height="160"
                                fetchpriority="high"
                                class="w-32 h-32 sm:w-36 sm:h-36 rounded-full object-cover border-4 border-[#328CCB]/20 mx-auto mb-4"
                            />

                        <?php endif; ?>


                        <h2 class="text-xl font-bold text-gray-900 mb-1">

                            <?php echo $escape($doctorName); ?>

                        </h2>


                        <p class="text-[#328CCB] font-semibold text-sm mb-2">

                            <?php echo $escape($doctorDesignation); ?>

                        </p>


                        <p class="text-gray-600 text-sm mb-3">

                            <?php echo $escape($doctorQualification); ?>

                        </p>


                        <span class="inline-flex items-center gap-2 bg-blue-50 text-[#2677B4] px-3 py-1.5 rounded-full text-xs font-semibold">

                            <?php echo getIcon('MapPin', 'h-3.5 w-3.5'); ?>

                            Consultation at Gurugram

                        </span>

                    </div>


                    <div class="border-t border-gray-100 mt-5 pt-5 space-y-4">


                        <!-- Experience -->
                        <div class="flex items-start gap-3">

                            <span class="bg-[#328CCB]/10 text-[#328CCB] p-2 rounded-lg">

                                <?php echo getIcon('Award', 'h-5 w-5'); ?>

                            </span>

                            <div>

                                <p class="font-semibold text-gray-900 text-sm">
                                    Experience
                                </p>

                                <p class="text-gray-600 text-sm">
                                    <?php echo $escape($doctorExperience); ?>
                                </p>

                            </div>

                        </div>


                        <!-- OPD Timing -->
                        <div class="flex items-start gap-3">

                            <span class="bg-[#D66C43]/10 text-[#D66C43] p-2 rounded-lg">

                                <?php echo getIcon('Clock', 'h-5 w-5'); ?>

                            </span>

                            <div>

                                <p class="font-semibold text-gray-900 text-sm">
                                    OPD Timing
                                </p>

                                <p class="text-gray-600 text-sm">
                                    <?php echo $escape($doctorOpdTiming); ?>
                                </p>

                                <p class="text-gray-500 text-xs mt-1">
                                    Please confirm availability before travelling.
                                </p>

                            </div>

                        </div>


                        <!-- Specialisation -->
                        <div class="flex items-start gap-3">

                            <span class="bg-[#328CCB]/10 text-[#328CCB] p-2 rounded-lg">

                                <?php echo getIcon('Stethoscope', 'h-5 w-5'); ?>

                            </span>

                            <div>

                                <p class="font-semibold text-gray-900 text-sm">
                                    Specialisation
                                </p>

                                <p class="text-gray-600 text-sm">
                                    Trauma, Joint Replacement &amp; Arthroscopy
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Appointment Buttons -->
                    <div class="mt-6 space-y-3">

                        <?php if ($appointmentTel !== ''): ?>

                            <a
                                href="tel:<?php echo $escape($appointmentTel); ?>"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2677B4] text-white py-3.5 px-4 rounded-xl font-bold transition-colors"
                            >

                                <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                                Book Appointment

                            </a>

                        <?php else: ?>

                            <a
                                href="/contact"
                                class="w-full inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2677B4] text-white py-3.5 px-4 rounded-xl font-bold transition-colors"
                            >
                                Book Appointment
                            </a>

                        <?php endif; ?>


                        <a
                            href="<?php echo $escape($doctorProfileUrl); ?>"
                            class="w-full inline-flex items-center justify-center gap-2 border border-gray-300 text-gray-700 hover:bg-gray-50 py-3 px-4 rounded-xl font-semibold transition-colors"
                        >

                            View Doctor Profile

                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                        </a>

                    </div>

                </aside>



                <!-- District Introduction -->
                <div class="space-y-6">


                    <article class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 sm:p-8 lg:p-10">

                        <p class="text-sm font-semibold text-[#328CCB] mb-3">

                            Orthopaedic Consultation for Patients from
                            <?php echo $escape($district_display); ?>

                        </p>


                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-5">

                            <?php echo $escape($district_display); ?> के मरीजों के लिए हड्डी रोग विशेषज्ञ – डॉ. प्रतीक गिरोत्रा

                        </h1>


                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">

                            <p>

                                यदि आप <?php echo $escape($district_display); ?> से हड्डियों, जोड़ों, घुटने या कूल्हे से जुड़ी समस्या के लिए विशेषज्ञ से परामर्श लेना चाहते हैं, तो आप गुरुग्राम स्थित Akropolis Super Speciality Hospital में डॉ. प्रतीक गिरोत्रा से अपॉइंटमेंट ले सकते हैं।

                            </p>


                            <p>

                                डॉ. प्रतीक गिरोत्रा अस्पताल के Department of Orthopedics के Director &amp; Head हैं। उन्हें Trauma, Joint Replacement और Arthroscopy में विशेषज्ञता तथा दिल्ली-NCR के प्रतिष्ठित अस्पतालों में एक दशक से अधिक का अनुभव है।

                            </p>


                            <p>

                                <strong>महत्वपूर्ण:</strong>
                                Akropolis Super Speciality Hospital का यह consultation centre
                                <?php echo $escape($district_display); ?> में नहीं, बल्कि
                                Sector 69, Gurugram में स्थित है।
                                <?php echo $escape($district_display); ?> और आसपास के क्षेत्रों से आने वाले मरीज यात्रा से पहले अपॉइंटमेंट और डॉक्टर की उपलब्धता की पुष्टि कर लें।

                            </p>

                        </div>

                    </article>



                    <!-- =================================
                         DOCTOR EXPERTISE
                    ================================== -->

                    <section class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 sm:p-8">

                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">

                            डॉ. प्रतीक गिरोत्रा की विशेषज्ञता

                        </h2>


                        <p class="text-gray-600 leading-relaxed mb-5">

                            डॉक्टर की विशेषज्ञता और मरीज की चिकित्सकीय स्थिति के आधार पर परामर्श तथा उपचार के विकल्प तय किए जाते हैं।

                        </p>


                        <div class="grid sm:grid-cols-2 gap-3">


                            <div class="flex items-start gap-3 bg-blue-50 rounded-xl p-4">

                                <?php echo getIcon('Bone', 'h-5 w-5 text-[#328CCB] shrink-0'); ?>

                                <span class="text-gray-800 font-medium">
                                    Complex Skeletal Trauma
                                </span>

                            </div>


                            <div class="flex items-start gap-3 bg-blue-50 rounded-xl p-4">

                                <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB] shrink-0'); ?>

                                <span class="text-gray-800 font-medium">
                                    Hip &amp; Knee Joint Replacement
                                </span>

                            </div>


                            <div class="flex items-start gap-3 bg-blue-50 rounded-xl p-4">

                                <?php echo getIcon('Zap', 'h-5 w-5 text-[#328CCB] shrink-0'); ?>

                                <span class="text-gray-800 font-medium">
                                    Arthroscopy
                                </span>

                            </div>


                            <div class="flex items-start gap-3 bg-blue-50 rounded-xl p-4">

                                <?php echo getIcon('Stethoscope', 'h-5 w-5 text-[#328CCB] shrink-0'); ?>

                                <span class="text-gray-800 font-medium">
                                    Paediatric Orthopaedics &amp; Deformity Correction
                                </span>

                            </div>

                        </div>


                        <div class="mt-5 border-t border-gray-100 pt-5">

                            <h3 class="font-bold text-gray-900 mb-2">

                                विशेष प्रशिक्षण

                            </h3>


                            <p class="text-gray-600 leading-relaxed">

                                डॉ. गिरोत्रा ने Hindu Rao Hospital &amp; NDMC Medical College, Delhi में postgraduate training प्राप्त की। उनके profile के अनुसार, उन्होंने Safdarjung Hospital, Delhi में Spine &amp; Plastic Surgery तथा Paediatric Orthopaedics की तकनीकों में specialist training भी प्राप्त की है।

                            </p>

                        </div>


                        <a
                            href="<?php echo $escape($doctorProfileUrl); ?>"
                            class="inline-flex items-center gap-2 mt-5 text-[#328CCB] font-semibold hover:underline"
                        >

                            डॉक्टर की पूरी प्रोफाइल और अनुभव देखें

                            <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

                        </a>

                    </section>



                    <!-- =================================
                         DYNAMIC GOOGLE MAPS DIRECTIONS
                    ================================== -->

                    <section class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 sm:p-8">


                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3">

                            <?php echo $escape($district_display); ?> से Akropolis Hospital, Gurugram कैसे पहुंचें?

                        </h2>


                        <p class="text-gray-600 leading-relaxed">

                            Akropolis Super Speciality Hospital, Sector 69, Gurugram में स्थित है।
                            <?php echo $escape($district_display); ?> से आने वाले मरीज अपनी यात्रा की योजना बनाने के लिए Google Maps directions का उपयोग कर सकते हैं। मार्ग और यात्रा का समय आपके starting point, traffic और चुने गए transport के अनुसार बदल सकता है।

                        </p>



                        <!-- Main District-to-Hospital Route -->
                        <div class="mt-5 flex flex-col sm:flex-row gap-3">

                            <a
                                href="<?php echo $escape($directionsUrl); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2677B4] text-white px-5 py-3 rounded-xl font-semibold transition-colors"
                            >

                                <?php echo getIcon('MapPin', 'h-5 w-5'); ?>

                                <?php echo $escape($district_display); ?> से दिशा-निर्देश देखें

                            </a>


                            <a
                                href="https://www.google.com/maps/search/?api=1&amp;query=<?php echo rawurlencode($hospitalDestination); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-2 border border-gray-300 hover:bg-gray-50 text-gray-700 px-5 py-3 rounded-xl font-semibold transition-colors"
                            >

                                Hospital Location देखें

                            </a>

                        </div>



                        <!-- District Landmark Routes -->
                        <?php if (!empty($landmarkDirections)): ?>

                            <div class="mt-6">

                                <h3 class="font-bold text-gray-900 mb-3">

                                    <?php echo $escape($district_display); ?> से यात्रा शुरू करने के स्थान

                                </h3>


                                <p class="text-sm text-gray-600 mb-3">

                                    अपने नजदीकी starting point को चुनकर Gurugram hospital तक का route देखें। ये <?php echo $escape($district_display); ?> के route origins हैं, hospital के आसपास के landmarks नहीं।

                                </p>


                                <div class="grid sm:grid-cols-2 gap-3">

                                    <?php foreach ($landmarkDirections as $route): ?>

                                        <a
                                            href="<?php echo $escape($route['url']); ?>"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="flex items-center justify-between gap-3 rounded-lg border border-gray-200 px-4 py-3 text-sm text-gray-700 hover:border-[#328CCB] hover:bg-blue-50 transition-colors"
                                        >

                                            <span>
                                                <?php echo $escape($route['name']); ?>
                                            </span>

                                            <?php echo getIcon('ArrowRight', 'h-4 w-4 text-[#328CCB] shrink-0'); ?>

                                        </a>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        <?php endif; ?>



                        <!-- Travel Preparation -->
                        <div class="mt-6 rounded-xl bg-gray-50 p-5">

                            <h3 class="font-bold text-gray-900 mb-2">

                                यात्रा से पहले ध्यान दें

                            </h3>


                            <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600">

                                <li>
                                    डॉक्टर की OPD availability और appointment पहले confirm करें।
                                </li>

                                <li>
                                    पुरानी prescriptions, investigation reports और X-ray/MRI reports साथ रखें, यदि उपलब्ध हों।
                                </li>

                                <li>
                                    ट्रेन या बस से आने पर अपनी यात्रा के लिए वर्तमान transport schedule अलग से जांचें।
                                </li>

                            </ul>

                        </div>

                    </section>



                    <!-- =================================
                         HOSPITAL ADDRESS AND CONTACT
                    ================================== -->

                    <section class="bg-blue-50 border border-blue-100 rounded-2xl p-6 sm:p-8">


                        <h2 class="text-xl font-bold text-gray-900 mb-3">

                            Akropolis Super Speciality Hospital

                        </h2>


                        <div class="flex items-start gap-3 text-gray-700">

                            <?php echo getIcon('MapPin', 'h-5 w-5 text-[#328CCB] shrink-0 mt-1'); ?>

                            <p>
                                <?php echo $escape($hospitalAddress); ?>
                            </p>

                        </div>


                        <div class="mt-5 flex flex-wrap gap-3">

                            <?php if ($appointmentTel !== ''): ?>

                                <a
                                    href="tel:<?php echo $escape($appointmentTel); ?>"
                                    class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2677B4] text-white px-5 py-3 rounded-xl font-semibold"
                                >

                                    <?php echo getIcon('Phone', 'h-4 w-4'); ?>

                                    Appointment: <?php echo $escape($appointmentPhone); ?>

                                </a>

                            <?php else: ?>

                                <a
                                    href="/contact"
                                    class="inline-flex items-center gap-2 bg-[#328CCB] text-white px-5 py-3 rounded-xl font-semibold"
                                >
                                    Contact Hospital
                                </a>

                            <?php endif; ?>


                            <a
                                href="/orthopedics"
                                class="inline-flex items-center gap-2 border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-3 rounded-xl font-semibold"
                            >

                                Orthopedics Department

                            </a>

                        </div>

                    </section>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================================
         DISTRICT-SPECIFIC FAQs
    ========================================== -->

    <section class="py-10 lg:py-14 bg-white">

        <div class="container mx-auto px-4">

            <div class="max-w-4xl mx-auto">


                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-8">

                    <?php echo $escape($district_display); ?> के मरीजों के अक्सर पूछे जाने वाले सवाल

                </h2>


                <div class="space-y-3">


                    <!-- FAQ 1 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            क्या <?php echo $escape($district_display); ?> से डॉ. प्रतीक गिरोत्रा से परामर्श के लिए गुरुग्राम आ सकते हैं?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            हाँ। <?php echo $escape($district_display); ?> से मरीज Akropolis Super Speciality Hospital, Sector 69, Gurugram में डॉ. प्रतीक गिरोत्रा से अपॉइंटमेंट लेकर परामर्श कर सकते हैं। यात्रा से पहले OPD availability confirm करें।

                        </p>

                    </details>



                    <!-- FAQ 2 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            Akropolis Super Speciality Hospital कहां स्थित है?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            अस्पताल Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101 में स्थित है।

                        </p>

                    </details>



                    <!-- FAQ 3 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            डॉ. प्रतीक गिरोत्रा किन क्षेत्रों में विशेषज्ञता रखते हैं?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            डॉ. प्रतीक गिरोत्रा Trauma, Joint Replacement और Arthroscopy में विशेषज्ञता रखते हैं। उनके clinical experience और specialist training की जानकारी उनकी doctor profile पर उपलब्ध है।

                        </p>

                    </details>



                    <!-- FAQ 4 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            डॉ. प्रतीक गिरोत्रा का OPD समय क्या है?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            डॉ. प्रतीक गिरोत्रा का OPD समय सुबह 8:00 AM से शाम 8:00 PM है। यात्रा से पहले appointment और availability की पुष्टि के लिए अस्पताल से संपर्क करें।

                        </p>

                    </details>



                    <!-- FAQ 5 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            डॉ. प्रतीक गिरोत्रा से appointment कैसे बुक करें?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            Appointment और OPD availability की जानकारी के लिए अस्पताल की appointment team से संपर्क करें।

                            <?php if ($appointmentPhone !== ''): ?>

                                <?php echo $escape($appointmentPhone); ?> पर कॉल कर सकते हैं।

                            <?php endif; ?>

                        </p>

                    </details>



                    <!-- FAQ 6 -->
                    <details class="group border border-gray-200 rounded-xl p-5">

                        <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

                            क्या अस्पताल की कोई branch <?php echo $escape($district_display); ?> में है?

                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">
                                +
                            </span>

                        </summary>


                        <p class="text-gray-600 leading-relaxed mt-4">

                            इस पेज पर बताई गई consultation सुविधा Akropolis Super Speciality Hospital, Sector 69, Gurugram में है। <?php echo $escape($district_display); ?> में अस्पताल की branch होने का दावा नहीं किया जा रहा है।

                        </p>

                    </details>


                </div>

            </div>

        </div>

    </section>



    <!-- =========================================
         STRUCTURED DATA
         WebPage + Person + BreadcrumbList
    ========================================== -->

    <?php

    // Shared doctor entity.
    $personSchema = [

        '@type' => 'Person',

        '@id' => $doctorEntityId,

        'name' => 'Dr. Prateek Girotra',

        'jobTitle' => $doctorDesignation,

        'url' => $doctorProfileUrl,

        'description' =>
            'Orthopaedic Surgeon specializing in Trauma, Joint Replacement and Arthroscopy. Director & Head, Department of Orthopedics at Akropolis Super Speciality Hospital, Gurugram.',

        'knowsAbout' => [

            'Orthopaedic Surgery',
            'Trauma and Complex Skeletal Trauma',
            'Joint Replacement',
            'Hip Replacement',
            'Knee Replacement',
            'Arthroscopy',
            'Paediatric Orthopaedics',
            'Deformity Correction'

        ]

    ];


    if ($doctorImageSchema !== '') {

        $personSchema['image'] = $doctorImageSchema;

    }


    // Page schema.
    $schema = [

        '@context' => 'https://schema.org',

        '@graph' => [

            [

                '@type' => 'WebPage',

                '@id' => $districtUrl . '#webpage',

                'url' => $districtUrl,

                'name' => $page_title,

                'description' => $page_description,

                'inLanguage' => 'hi-IN',

                'mainEntity' => [

                    '@id' => $doctorEntityId

                ],

                'about' => [

                    '@id' => $doctorEntityId

                ],

                'spatialCoverage' => [

                    '@type' => 'AdministrativeArea',

                    'name' => $district_display,

                    'containedInPlace' => [

                        '@type' => 'State',

                        'name' => 'Haryana',

                        'containedInPlace' => [

                            '@type' => 'Country',

                            'name' => 'India'

                        ]

                    ]

                ],

                'breadcrumb' => [

                    '@id' => $districtUrl . '#breadcrumb'

                ]

            ],


            // Reuse the same Person ID on all district pages.
            $personSchema,


            // District-specific breadcrumb.
            [

                '@type' => 'BreadcrumbList',

                '@id' => $districtUrl . '#breadcrumb',

                'itemListElement' => [

                    [

                        '@type' => 'ListItem',

                        'position' => 1,

                        'name' => 'Home',

                        'item' => 'https://akropolishospital.com/'

                    ],

                    [

                        '@type' => 'ListItem',

                        'position' => 2,

                        'name' => 'Haddi Ka Doctor',

                        'item' => $parentUrl

                    ],

                    [

                        '@type' => 'ListItem',

                        'position' => 3,

                        'name' => $district_display,

                        'item' => $districtUrl

                    ]

                ]

            ]

        ]

    ];

    ?>


    <script type="application/ld+json">
    <?php

    echo json_encode(

        $schema,

        JSON_UNESCAPED_SLASHES |
        JSON_UNESCAPED_UNICODE |
        JSON_HEX_TAG |
        JSON_HEX_AMP |
        JSON_HEX_APOS |
        JSON_HEX_QUOT

    );

    ?>
    </script>

</main>


<?php

include dirname(__DIR__) . '/includes/footer.php';

include dirname(__DIR__) . '/includes/scripts.php';

?>
