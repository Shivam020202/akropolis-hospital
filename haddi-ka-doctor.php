
<?php
/**
 * Main Haddi Ka Doctor landing page
 * Haryana patient-discovery page for Dr. Prateek Girotra at Akropolis, Gurugram.
 */

require_once __DIR__ . '/includes/data.php';

// Retrieve Dr. Prateek Girotra from the shared doctor data.
$doctor = null;

foreach (($doctors ?? []) as $doctorItem) {
    if (($doctorItem['id'] ?? '') === 'dr-prateek-girotra') {
        $doctor = $doctorItem;
        break;
    }
}

if (!$doctor) {
    $doctor = [
        'id' => 'dr-prateek-girotra',
        'name' => 'Dr. Prateek Girotra',
        'image' => ''
    ];
}

$escape = static function ($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};

$doctorName = $doctor['name'] ?? 'Dr. Prateek Girotra';
$doctorImage = $doctor['image'] ?? '';

$doctorDesignation = 'Director & Head, Department of Orthopedics';
$doctorExperience = 'Over a decade of experience in reputed hospitals across Delhi NCR';

// Use the actual phone numbers configured in data.php.
$appointmentPhone = CONTACT_INFO['phone'] ?? '';
$emergencyPhone = CONTACT_INFO['emergency'] ?? '';

$appointmentTel = preg_replace('/[^0-9+]/', '', (string) $appointmentPhone);
$emergencyTel = preg_replace('/[^0-9+]/', '', (string) $emergencyPhone);

$hospitalName = 'Akropolis Super Speciality Hospital';

$hospitalAddress = 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101';

$mapsUrl = 'https://www.google.com/maps/search/?api=1&query=' .
    rawurlencode($hospitalName . ', ' . $hospitalAddress);

// Canonical URLs and stable doctor entity ID.
// Reuse this same Person @id on the dedicated doctor profile page.
$pageUrl = 'https://akropolishospital.com/haddi-ka-doctor';

$doctorProfileUrl = 'https://akropolishospital.com/doctors/dr-prateek-girotra';

$doctorEntityId = $doctorProfileUrl . '#person';

// Convert relative image path into an absolute URL for JSON-LD.
$doctorImageSchema = $doctorImage;

if (
    $doctorImageSchema !== '' &&
    !preg_match('~^https?://~i', $doctorImageSchema)
) {
    $doctorImageSchema = 'https://akropolishospital.com/' .
        ltrim($doctorImageSchema, '/');
}

// All 22 Haryana district landing pages.
// Visible anchor text will contain ONLY the district name.
$districts = [
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

// SEO metadata.
$page_title = 'Haddi Ka Doctor in Haryana | Dr. Prateek Girotra';

$page_description = 'हरियाणा के मरीज Trauma, Joint Replacement और Arthroscopy के लिए डॉ. प्रतीक गिरोत्रा से Akropolis Hospital, Gurugram में परामर्श लें। अपॉइंटमेंट बुक करें।';

$meta_description = $page_description;

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header-v2.php';
?>

<main class="bg-gray-50">

  <!-- Breadcrumb -->
  <div class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-4 py-3">

      <nav aria-label="Breadcrumb" class="text-sm text-gray-500">

        <ol class="flex flex-wrap items-center gap-2">

          <li>
            <a href="/" class="hover:text-[#328CCB]">Home</a>
          </li>

          <li aria-hidden="true">
            <?php echo getIcon('ChevronRight', 'h-4 w-4'); ?>
          </li>

          <li class="font-medium text-gray-800" aria-current="page">
            Haddi Ka Doctor
          </li>

        </ol>

      </nav>

    </div>
  </div>


  <!-- Hero Section -->
  <section class="bg-white border-b border-gray-100">

    <div class="container mx-auto px-4 py-10 lg:py-14">

      <div class="grid lg:grid-cols-[minmax(0,1fr)_auto] gap-8 lg:gap-12 items-center">

        <div class="order-2 lg:order-1 text-center lg:text-left">

          <p class="inline-flex items-center gap-2 rounded-full bg-blue-50 text-[#2677B4] px-4 py-2 text-sm font-semibold mb-5">

            <?php echo getIcon('Bone', 'h-4 w-4'); ?>

            Orthopedics | Akropolis Super Speciality Hospital

          </p>


          <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-gray-900 mb-5">

            हरियाणा में हड्डी रोग विशेषज्ञ से परामर्श

          </h1>


          <h2 class="text-xl sm:text-2xl font-bold text-[#328CCB] mb-3">

            <?php echo $escape($doctorName); ?>

          </h2>


          <p class="text-gray-700 font-semibold mb-4">

            <?php echo $escape($doctorDesignation); ?>

          </p>


          <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-3xl mx-auto lg:mx-0 mb-7">

            डॉ. प्रतीक गिरोत्रा Trauma, Joint Replacement और Arthroscopy में विशेषज्ञता रखने वाले Orthopaedic Surgeon हैं। उन्हें दिल्ली-NCR के प्रतिष्ठित अस्पतालों में एक दशक से अधिक का अनुभव है। हरियाणा के विभिन्न जिलों से मरीज हड्डियों और जोड़ों से जुड़ी समस्याओं के परामर्श और उपचार के लिए Akropolis Super Speciality Hospital, Gurugram आते हैं।

          </p>


          <div class="flex flex-col sm:flex-row flex-wrap gap-3 justify-center lg:justify-start">

            <?php if ($appointmentTel !== ''): ?>

              <a href="tel:<?php echo $escape($appointmentTel); ?>"
                 class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#328CCB] hover:bg-[#2677B4] text-white px-6 py-3.5 font-bold shadow-md transition-colors">

                <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                अपॉइंटमेंट के लिए कॉल करें:
                <?php echo $escape($appointmentPhone); ?>

              </a>

            <?php else: ?>

              <a href="/contact"
                 class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#328CCB] hover:bg-[#2677B4] text-white px-6 py-3.5 font-bold shadow-md transition-colors">

                <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                अपॉइंटमेंट बुक करें

              </a>

            <?php endif; ?>


            <a href="/doctors/dr-prateek-girotra"
               class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white hover:bg-gray-50 text-gray-800 px-6 py-3.5 font-semibold transition-colors">

              डॉक्टर की पूरी प्रोफाइल देखें

              <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

            </a>

          </div>


          <?php if ($emergencyTel !== ''): ?>

            <p class="text-sm text-gray-500 mt-4">

              आपातकालीन सहायता के लिए 24×7 कॉल करें:

              <a class="font-semibold text-[#D66C43] hover:underline"
                 href="tel:<?php echo $escape($emergencyTel); ?>">

                <?php echo $escape($emergencyPhone); ?>

              </a>

            </p>

          <?php endif; ?>

        </div>


        <div class="order-1 lg:order-2 flex justify-center">

          <?php if ($doctorImage !== ''): ?>

            <img
              src="<?php echo $escape($doctorImage); ?>"
              alt="<?php echo $escape($doctorName); ?>, Director and Head of Orthopedics at Akropolis Super Speciality Hospital"
              width="400"
              height="400"
              fetchpriority="high"
              class="w-40 h-40 sm:w-52 sm:h-52 lg:w-60 lg:h-60 rounded-full object-cover border-4 border-white shadow-xl ring-4 ring-[#328CCB]/15"
            />

          <?php endif; ?>

        </div>

      </div>

    </div>

  </section>



  <!-- Doctor Highlights -->
  <section class="py-7 bg-gray-50">

    <div class="container mx-auto px-4">

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

        <div class="bg-white rounded-xl border border-gray-100 p-5">

          <p class="text-xs uppercase tracking-wide text-gray-500 font-semibold mb-2">
            Postgraduate Training
          </p>

          <p class="font-bold text-gray-900">
            Hindu Rao Hospital &amp; NDMC Medical College, Delhi
          </p>

        </div>


        <div class="bg-white rounded-xl border border-gray-100 p-5">

          <p class="text-xs uppercase tracking-wide text-gray-500 font-semibold mb-2">
            Experience
          </p>

          <p class="font-bold text-gray-900">
            <?php echo $escape($doctorExperience); ?>
          </p>

        </div>


        <div class="bg-white rounded-xl border border-gray-100 p-5">

          <p class="text-xs uppercase tracking-wide text-gray-500 font-semibold mb-2">
            Specialisation
          </p>

          <p class="font-bold text-gray-900">
            Trauma, Joint Replacement &amp; Arthroscopy
          </p>

        </div>

      </div>

    </div>

  </section>



  <!-- Orthopaedic Expertise -->
  <section class="py-12 lg:py-16 bg-white">

    <div class="container mx-auto px-4">

      <div class="max-w-4xl mx-auto text-center mb-10">

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">

          हड्डियों और जोड़ों की समस्याओं के लिए विशेषज्ञ परामर्श

        </h2>

        <p class="text-gray-600 text-base sm:text-lg leading-relaxed">

          हड्डी, घुटने, कूल्हे या जोड़ों में दर्द, चोट अथवा चलने-फिरने में परेशानी होने पर ऑर्थोपेडिक विशेषज्ञ से सलाह लेना उपयोगी हो सकता है। डॉ. प्रतीक गिरोत्रा मरीज की स्थिति का मूल्यांकन करके उपयुक्त उपचार विकल्पों पर परामर्श देते हैं।

        </p>

      </div>


      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

        <article class="rounded-2xl border border-gray-200 bg-gray-50 p-6">

          <div class="w-11 h-11 rounded-xl bg-blue-100 text-[#328CCB] flex items-center justify-center mb-4">

            <?php echo getIcon('Bone', 'h-6 w-6'); ?>

          </div>

          <h3 class="font-bold text-lg text-gray-900 mb-2">
            फ्रैक्चर और ट्रॉमा
          </h3>

          <p class="text-gray-600 text-sm leading-relaxed">

            हड्डी टूटने, दुर्घटना और जटिल skeletal trauma से जुड़ी समस्याओं का मूल्यांकन और उपचार।

          </p>

        </article>


        <article class="rounded-2xl border border-gray-200 bg-gray-50 p-6">

          <div class="w-11 h-11 rounded-xl bg-blue-100 text-[#328CCB] flex items-center justify-center mb-4">

            <?php echo getIcon('Activity', 'h-6 w-6'); ?>

          </div>

          <h3 class="font-bold text-lg text-gray-900 mb-2">
            घुटना और कूल्हा
          </h3>

          <p class="text-gray-600 text-sm leading-relaxed">

            Hip और Knee Replacement सहित जोड़ों से जुड़ी समस्याओं के लिए विशेषज्ञ परामर्श।

          </p>

        </article>


        <article class="rounded-2xl border border-gray-200 bg-gray-50 p-6">

          <div class="w-11 h-11 rounded-xl bg-blue-100 text-[#328CCB] flex items-center justify-center mb-4">

            <?php echo getIcon('Award', 'h-6 w-6'); ?>

          </div>

          <h3 class="font-bold text-lg text-gray-900 mb-2">
            आर्थ्रोस्कोपी
          </h3>

          <p class="text-gray-600 text-sm leading-relaxed">

            जोड़ों और sports injuries से जुड़ी समस्याओं के लिए arthroscopic उपचार विकल्पों पर परामर्श।

          </p>

        </article>

      </div>


      <div class="text-center mt-8">

        <a href="/orthopedics"
           class="inline-flex items-center gap-2 text-[#328CCB] font-bold hover:underline">

          ऑर्थोपेडिक्स विभाग और उपचार सेवाएं देखें

          <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

        </a>

      </div>

    </div>

  </section>



  <!-- Doctor Profile and Experience -->
  <section class="py-12 lg:py-16 bg-gray-50">

    <div class="container mx-auto px-4">

      <div class="max-w-4xl mx-auto">

        <div class="text-center mb-9">

          <p class="text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-2">
            About the Specialist
          </p>

          <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
            डॉ. प्रतीक गिरोत्रा के बारे में
          </h2>

          <p class="text-gray-600 leading-relaxed">

            डॉ. प्रतीक गिरोत्रा Trauma, Joint Replacement और Arthroscopy में विशेषज्ञता रखने वाले Orthopaedic Surgeon हैं। उन्हें दिल्ली-NCR के प्रतिष्ठित अस्पतालों में एक दशक से अधिक का अनुभव है। उनका कार्यक्षेत्र complex skeletal trauma, advanced arthroscopic surgeries तथा hip और knee replacements शामिल करता है।

          </p>

        </div>


        <div class="grid md:grid-cols-2 gap-5">

          <div class="bg-white rounded-2xl border border-gray-200 p-6">

            <h3 class="text-lg font-bold text-gray-900 mb-4">
              शिक्षा और विशेष प्रशिक्षण
            </h3>

            <ul class="space-y-3 text-gray-600 leading-relaxed">

              <li>
                <strong class="text-gray-900">Postgraduate Training:</strong>
                Hindu Rao Hospital &amp; NDMC Medical College, Delhi.
              </li>

              <li>
                <strong class="text-gray-900">Specialist Training:</strong>
                Spine &amp; Plastic Surgery, Safdarjung Hospital, Delhi.
              </li>

              <li>
                <strong class="text-gray-900">Paediatric Orthopaedics:</strong>
                Deformity correction, Ilizarov and JESS techniques.
              </li>

            </ul>

          </div>


          <div class="bg-white rounded-2xl border border-gray-200 p-6">

            <h3 class="text-lg font-bold text-gray-900 mb-4">
              मुख्य विशेषज्ञता
            </h3>

            <ul class="space-y-3 text-gray-600 leading-relaxed list-disc pl-5">

              <li>Complex skeletal trauma and fracture management</li>
              <li>Advanced arthroscopic surgeries</li>
              <li>Hip and knee replacement</li>
              <li>Paediatric orthopaedics and deformity correction</li>

            </ul>

          </div>

        </div>


        <?php

        $careerHistory = [

            [
                'role' => 'Director & Head, Orthopedics',
                'place' => 'Akropolis Super Speciality Hospital, Gurugram',
                'period' => 'Present'
            ],

            [
                'role' => 'Visiting Consultant',
                'place' => 'Nagpal Nursing Home, Sector 14, Gurugram; Tulsi Healthcare, Sector 65, Gurugram',
                'period' => 'As listed in the hospital profile'
            ],

            [
                'role' => 'Former Director & Head, Orthopedics',
                'place' => 'Rajmanjri Group of Multispeciality Hospital, Sohna',
                'period' => '2021–2022'
            ],

            [
                'role' => 'Senior Resident, Orthopaedics',
                'place' => 'Hindu Rao Hospital, Delhi & BPS Medical College, Sonipat',
                'period' => '2019–2021'
            ],

            [
                'role' => 'Medical Officer',
                'place' => 'District Sonipat, Haryana',
                'period' => '2013–2016'
            ],

            [
                'role' => 'Resident, General Surgery',
                'place' => 'BPS Medical College, Sonipat',
                'period' => '2012–2013'
            ]

        ];

        ?>


        <div class="bg-white rounded-2xl border border-gray-200 p-6 sm:p-8 mt-5">

          <h3 class="text-lg font-bold text-gray-900 mb-5">
            व्यावसायिक अनुभव
          </h3>

          <ol class="relative border-l-2 border-blue-100 ml-2 space-y-5">

            <?php foreach ($careerHistory as $career): ?>

              <li class="ml-6 relative">

                <span class="absolute -left-[31px] top-1.5 h-3 w-3 rounded-full bg-[#328CCB]"></span>

                <p class="font-bold text-gray-900">
                  <?php echo $escape($career['role']); ?>
                </p>

                <p class="text-gray-600 text-sm">
                  <?php echo $escape($career['place']); ?>
                </p>

                <p class="text-xs text-gray-500 mt-1">
                  <?php echo $escape($career['period']); ?>
                </p>

              </li>

            <?php endforeach; ?>

          </ol>

        </div>


        <?php

        $publications = [

            'Functional outcome of locking compression plate in the management of proximal tibia fracture – International Journal of Orthopaedic Sciences, 2020; 6(1):152–156.',

            'Arthroscopic repair of rotator cuff tears: analysis and functional outcome – International Journal of Research in Orthopaedics, 2020.',

            'Demographic profile and functional outcome following fixation of malleolar fractures in adults – International Journal of Research in Orthopaedics, March 2020.',

            'Comparative study of operative management of intra-articular distal radius fractures – IJMRP, September 2019.',

            'Transportal single bundle ACL reconstruction using quadruple hamstring graft – International Journal of Orthopaedic Sciences, 2022.',

            'Additional listed work includes Ponseti method in clubfoot management and arthroscopic-assisted mini-open rotator cuff repair.'

        ];

        $memberships = [

            'Delhi Orthopaedic Association',

            'Gurgaon Orthopaedic Society',

            'Indian Arthroscopy & Arthroplasty Society (IAOS)',

            'Paediatric Orthopaedic Foundation – Life Member',

            'Indian Medical Association (IMA)'

        ];

        ?>


        <div class="grid md:grid-cols-2 gap-5 mt-5">

          <div class="bg-white rounded-2xl border border-gray-200 p-6">

            <h3 class="text-lg font-bold text-gray-900 mb-4">
              Research &amp; Publications
            </h3>

            <ul class="space-y-3 text-sm text-gray-600 leading-relaxed list-disc pl-5">

              <?php foreach ($publications as $publication): ?>

                <li><?php echo $escape($publication); ?></li>

              <?php endforeach; ?>

            </ul>

            <p class="text-xs text-gray-500 mt-4">
              Selected publications based on the doctor profile supplied by the hospital.
            </p>

          </div>


          <div class="bg-white rounded-2xl border border-gray-200 p-6">

            <h3 class="text-lg font-bold text-gray-900 mb-4">
              Professional Memberships
            </h3>

            <ul class="space-y-2 text-gray-600 leading-relaxed list-disc pl-5">

              <?php foreach ($memberships as $membership): ?>

                <li><?php echo $escape($membership); ?></li>

              <?php endforeach; ?>

            </ul>

            <p class="text-gray-600 text-sm leading-relaxed mt-5">

              डॉ. गिरोत्रा विभिन्न राष्ट्रीय सम्मेलनों और शिक्षण कार्यक्रमों में भी भाग लेते रहे हैं। उनका clinical approach patient-focused care और advanced orthopaedic treatment पर केंद्रित है।

            </p>

          </div>

        </div>

      </div>

    </div>

  </section>



  <!-- All 22 Haryana District Links -->
  <section class="py-12 lg:py-16 bg-gray-50" id="haryana-districts">

    <div class="container mx-auto px-4">

      <div class="max-w-4xl mx-auto text-center mb-9">

        <p class="text-[#328CCB] font-semibold text-sm uppercase tracking-wide mb-2">
          Patients from Across Haryana
        </p>

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">

          हरियाणा के इन जिलों से मरीज परामर्श के लिए गुरुग्राम आते हैं

        </h2>

        <p class="text-gray-600 leading-relaxed">

          हरियाणा के विभिन्न जिलों से मरीज डॉ. प्रतीक गिरोत्रा से परामर्श और ऑर्थोपेडिक उपचार के लिए Akropolis Super Speciality Hospital आते हैं। अपना जिला चुनकर संबंधित जानकारी देखें। सभी परामर्श और उपचार अस्पताल के Sector 69, Gurugram स्थित परिसर में अपॉइंटमेंट और उपलब्धता के अनुसार होते हैं।

        </p>

      </div>


      <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-5 sm:p-7">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

          <?php foreach ($districts as $slug => $name): ?>

            <a
              href="/haddi-ka-doctor/haryana/<?php echo rawurlencode($slug); ?>"
              class="group flex items-center gap-3 rounded-xl border border-gray-200 px-4 py-3.5 hover:border-[#328CCB] hover:bg-blue-50 transition-colors"
            >

              <span class="w-2 h-2 shrink-0 rounded-full bg-[#328CCB]" aria-hidden="true"></span>

              <span class="text-gray-700 group-hover:text-[#2677B4] font-medium">
                <?php echo $escape($name); ?>
              </span>

            </a>

          <?php endforeach; ?>

        </div>

      </div>

    </div>

  </section>



  <!-- Hospital Location and Appointment -->
  <section class="py-12 lg:py-16 bg-white">

    <div class="container mx-auto px-4">

      <div class="grid lg:grid-cols-2 gap-8 items-start">

        <div>

          <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
            Akropolis Super Speciality Hospital, Gurugram
          </h2>

          <p class="text-gray-600 leading-relaxed mb-6">

            डॉ. प्रतीक गिरोत्रा से परामर्श के लिए मरीज Akropolis Super Speciality Hospital के गुरुग्राम स्थित परिसर में आते हैं। हरियाणा के दूसरे जिलों से यात्रा करने से पहले अपॉइंटमेंट, डॉक्टर की उपलब्धता और आवश्यक रिपोर्ट के बारे में अस्पताल से पुष्टि कर लें।

          </p>


          <div class="flex items-start gap-3 mb-5">

            <div class="text-[#328CCB] mt-1">
              <?php echo getIcon('MapPin', 'h-5 w-5'); ?>
            </div>

            <p class="text-gray-700">
              <?php echo $escape($hospitalAddress); ?>
            </p>

          </div>


          <div class="flex flex-col sm:flex-row gap-3">

            <a href="<?php echo $escape($mapsUrl); ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-300 px-5 py-3 font-semibold text-gray-800 hover:bg-gray-50">

              दिशा-निर्देश देखें

            </a>


            <a href="/contact"
               class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#328CCB] hover:bg-[#2677B4] text-white px-5 py-3 font-semibold">

              अस्पताल से संपर्क करें

              <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>

            </a>

          </div>

        </div>



        <div class="rounded-2xl bg-blue-50 border border-blue-100 p-6 sm:p-8">

          <h3 class="text-xl font-bold text-gray-900 mb-3">
            अपॉइंटमेंट कैसे बुक करें?
          </h3>

          <p class="text-gray-600 leading-relaxed mb-5">

            डॉ. प्रतीक गिरोत्रा की उपलब्धता और परामर्श के समय की पुष्टि के लिए अस्पताल की अपॉइंटमेंट टीम से संपर्क करें।

          </p>


          <?php if ($appointmentTel !== ''): ?>

            <a href="tel:<?php echo $escape($appointmentTel); ?>"
               class="inline-flex items-center gap-2 text-lg font-bold text-[#2677B4] hover:underline">

              <?php echo getIcon('Phone', 'h-5 w-5'); ?>

              <?php echo $escape($appointmentPhone); ?>

            </a>

          <?php else: ?>

            <a href="/contact"
               class="inline-flex items-center gap-2 text-lg font-bold text-[#2677B4] hover:underline">

              अपॉइंटमेंट टीम से संपर्क करें

            </a>

          <?php endif; ?>


          <?php if ($emergencyTel !== ''): ?>

            <p class="text-sm text-gray-500 mt-3">

              आपातकालीन स्थिति में 24×7 Emergency:

              <a class="font-semibold text-[#D66C43] hover:underline"
                 href="tel:<?php echo $escape($emergencyTel); ?>">

                <?php echo $escape($emergencyPhone); ?>

              </a>

            </p>

          <?php endif; ?>

        </div>

      </div>

    </div>

  </section>



  <!-- Related Internal Links -->
  <section class="py-10 bg-gray-50 border-y border-gray-100">

    <div class="container mx-auto px-4">

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <a href="/doctors/dr-prateek-girotra"
           class="bg-white rounded-xl border border-gray-200 p-5 hover:border-[#328CCB] transition-colors">

          <span class="font-bold text-gray-900">
            डॉ. प्रतीक गिरोत्रा की प्रोफाइल
          </span>

          <span class="block text-sm text-gray-500 mt-1">
            योग्यता, अनुभव और विशेषज्ञता देखें
          </span>

        </a>


        <a href="/orthopedics"
           class="bg-white rounded-xl border border-gray-200 p-5 hover:border-[#328CCB] transition-colors">

          <span class="font-bold text-gray-900">
            ऑर्थोपेडिक्स विभाग
          </span>

          <span class="block text-sm text-gray-500 mt-1">
            हड्डी और जोड़ संबंधी सेवाओं की जानकारी
          </span>

        </a>


        <a href="/contact"
           class="bg-white rounded-xl border border-gray-200 p-5 hover:border-[#328CCB] transition-colors">

          <span class="font-bold text-gray-900">
            अस्पताल से संपर्क करें
          </span>

          <span class="block text-sm text-gray-500 mt-1">
            अपॉइंटमेंट और अस्पताल की जानकारी लें
          </span>

        </a>

      </div>

    </div>

  </section>



  <!-- FAQs -->
  <section class="py-12 lg:py-16 bg-white">

    <div class="container mx-auto px-4">

      <div class="max-w-4xl mx-auto">

        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 text-center mb-8">
          अक्सर पूछे जाने वाले सवाल
        </h2>


        <div class="space-y-3">


          <details class="group rounded-xl border border-gray-200 p-5">

            <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

              हरियाणा में हड्डी रोग विशेषज्ञ से परामर्श कहां ले सकते हैं?

              <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">+</span>

            </summary>

            <p class="text-gray-600 leading-relaxed mt-4">

              आप गुरुग्राम के Sector 69 स्थित Akropolis Super Speciality Hospital में डॉ. प्रतीक गिरोत्रा से अपॉइंटमेंट लेकर परामर्श ले सकते हैं।

            </p>

          </details>



          <details class="group rounded-xl border border-gray-200 p-5">

            <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

              डॉ. प्रतीक गिरोत्रा किन समस्याओं में विशेषज्ञता रखते हैं?

              <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">+</span>

            </summary>

            <p class="text-gray-600 leading-relaxed mt-4">

              डॉ. प्रतीक गिरोत्रा Trauma, Joint Replacement और Arthroscopy में विशेषज्ञता रखते हैं। उन्हें दिल्ली-NCR के प्रतिष्ठित अस्पतालों में एक दशक से अधिक का अनुभव है। उपचार का विकल्प मरीज की जांच और स्थिति के आधार पर तय किया जाता है।

            </p>

          </details>



          <details class="group rounded-xl border border-gray-200 p-5">

            <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

              क्या हरियाणा के अन्य जिलों से मरीज गुरुग्राम आ सकते हैं?

              <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">+</span>

            </summary>

            <p class="text-gray-600 leading-relaxed mt-4">

              हाँ। हरियाणा के विभिन्न जिलों से मरीज डॉ. प्रतीक गिरोत्रा से परामर्श के लिए गुरुग्राम स्थित अस्पताल आ सकते हैं। यात्रा से पहले अपॉइंटमेंट और डॉक्टर की उपलब्धता की पुष्टि कर लें।

            </p>

          </details>



          <details class="group rounded-xl border border-gray-200 p-5">

            <summary class="cursor-pointer list-none flex items-center justify-between gap-4 font-semibold text-gray-900">

              डॉ. प्रतीक गिरोत्रा से अपॉइंटमेंट कैसे लें?

              <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform" aria-hidden="true">+</span>

            </summary>

            <p class="text-gray-600 leading-relaxed mt-4">

              अपॉइंटमेंट और OPD उपलब्धता की जानकारी के लिए अस्पताल की अपॉइंटमेंट टीम से

              <a href="/contact" class="text-[#328CCB] underline">संपर्क करें</a>।

              <?php if ($appointmentPhone !== ''): ?>
                आप <?php echo $escape($appointmentPhone); ?> पर भी कॉल कर सकते हैं।
              <?php endif; ?>

            </p>

          </details>


        </div>

      </div>

    </div>

  </section>



  <!-- Structured Data: WebPage + Person + BreadcrumbList -->
  <?php

  $personSchema = [

      '@type' => 'Person',

      // This stable ID should also be used on Dr. Prateek's profile page.
      '@id' => $doctorEntityId,

      'name' => 'Dr. Prateek Girotra',

      'jobTitle' => $doctorDesignation,

      'url' => $doctorProfileUrl,

      'description' => 'Orthopaedic Surgeon specializing in Trauma, Joint Replacement and Arthroscopy, with over a decade of experience in reputed hospitals across Delhi NCR. Director & Head, Department of Orthopedics at Akropolis Super Speciality Hospital, Gurugram.',

      'knowsAbout' => [
          'Orthopaedic Surgery',
          'Trauma and Complex Skeletal Trauma',
          'Joint Replacement',
          'Hip Replacement',
          'Knee Replacement',
          'Arthroscopy',
          'Spine Surgery',
          'Paediatric Orthopaedics',
          'Deformity Correction'
      ]

  ];

  if ($doctorImageSchema !== '') {
      $personSchema['image'] = $doctorImageSchema;
  }


  $structuredData = [

      '@context' => 'https://schema.org',

      '@graph' => [

          [
              '@type' => 'WebPage',

              '@id' => $pageUrl . '#webpage',

              'url' => $pageUrl,

              'name' => $page_title,

              'description' => $page_description,

              'inLanguage' => 'hi-IN',

              'mainEntity' => [
                  '@id' => $doctorEntityId
              ],

              'spatialCoverage' => [
                  '@type' => 'State',
                  'name' => 'Haryana',
                  'containedInPlace' => [
                      '@type' => 'Country',
                      'name' => 'India'
                  ]
              ],

              'breadcrumb' => [
                  '@id' => $pageUrl . '#breadcrumb'
              ]

          ],


          $personSchema,


          [
              '@type' => 'BreadcrumbList',

              '@id' => $pageUrl . '#breadcrumb',

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
                      'item' => $pageUrl
                  ]

              ]

          ]

      ]

  ];

  ?>

  <script type="application/ld+json">
  <?php
  echo json_encode(
      $structuredData,
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

include __DIR__ . '/includes/footer.php';

include __DIR__ . '/includes/scripts.php';

?>
