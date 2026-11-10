<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

/*
|--------------------------------------------------------------------------
| Page SEO
|--------------------------------------------------------------------------
*/

$page_title = 'Contact Akropolis Hospital | Appointments & Emergency Care';

$page_description =
    'Contact Akropolis Super Speciality Hospital in Gurugram for appointments, 24/7 emergency care, diagnostic services and hospital directions.';

$canonical_url = '/contact';


/*
|--------------------------------------------------------------------------
| Contact Page FAQs
|--------------------------------------------------------------------------
*/

$contact_faqs = [

    [
        'question' => 'How can I book an appointment at Akropolis Super Speciality Hospital?',
        'answer' =>
            'You can request an appointment through the booking form on this page or contact Akropolis Super Speciality Hospital directly by phone. The hospital team can assist with appointment enquiries and department information.'
    ],

    [
        'question' => 'Where is Akropolis Super Speciality Hospital located?',
        'answer' =>
            'Akropolis Super Speciality Hospital is located near Vatika Chowk, opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101.'
    ],

    [
        'question' => 'Does Akropolis Super Speciality Hospital provide 24/7 emergency care?',
        'answer' =>
            'Yes. Akropolis Super Speciality Hospital provides 24/7 Emergency Services. For urgent medical assistance, contact the hospital emergency line or visit the hospital directly.'
    ],

    [
        'question' => 'What are the OPD timings at Akropolis Super Speciality Hospital?',
        'answer' =>
            'The listed OPD timings are 8:00 AM to 8:00 PM. Patients are advised to contact the hospital for appointment availability and department-specific information.'
    ],

    [
        'question' => 'Are laboratory, pharmacy, radiology and dialysis services available 24/7?',
        'answer' =>
            'The hospital currently lists Laboratory, Pharmacy, Radiology and Dialysis Center services as available 24/7. Patients can contact the hospital for service-specific information before visiting.'
    ],

    [
        'question' => 'How can I get directions to Akropolis Super Speciality Hospital?',
        'answer' =>
            'You can use the Get Directions option on this page to open the hospital location in Google Maps and plan your route from your current location or another starting point.'
    ]

];


/*
|--------------------------------------------------------------------------
| Schema
|--------------------------------------------------------------------------
*/

$faq_entities = [];

foreach ($contact_faqs as $faq) {

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
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
);


$schema_blocks = [

    schemaContactPage(),

    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Contact', 'url' => '/contact']
    ]),

    $faq_schema

];


include 'includes/head.php';

?>

<!-- =========================================================
     EMERGENCY BAR
========================================================= -->

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">

    <div class="container mx-auto flex items-center justify-center space-x-2">

        <?php echo getIcon('Phone', 'h-4 w-4'); ?>

        <span class="font-semibold text-sm md:text-base">

            Emergency 24×7:
            <?php echo CONTACT_INFO['emergency']; ?>

        </span>

    </div>

</div>


<!-- =========================================================
     HEADER
========================================================= -->

<?php include 'includes/header-v2.php'; ?>


<main>

<!-- =========================================================
     HERO
========================================================= -->

<section class="relative overflow-hidden bg-[#0F1A33] text-white">

    <div class="absolute inset-0 bg-gradient-to-br from-[#0F1A33] via-[#163B5C] to-[#328CCB]"></div>

    <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-[#328CCB]/20 blur-3xl"></div>

    <div class="absolute -left-32 bottom-0 w-96 h-96 rounded-full bg-[#D66C43]/10 blur-3xl"></div>


    <div class="container mx-auto px-4 py-16 lg:py-24 relative z-10">

        <div class="max-w-4xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-6">

                <?php echo getIcon('MapPin', 'h-5 w-5 text-yellow-300'); ?>

                <span class="text-sm font-semibold">
                    Sector 69, Gurugram
                </span>

            </div>


            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">

                Contact
                <span class="text-[#62B5F5]">
                    Akropolis
                </span>
                Super Speciality Hospital

            </h1>


            <p class="text-lg lg:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto mb-8">

                Contact Akropolis Super Speciality Hospital in Gurugram
                for appointments, emergency care, diagnostic services and
                hospital information.

            </p>


            <!-- Hero CTAs -->

            <div class="flex flex-col sm:flex-row justify-center gap-4">

                <a
                    href="#contact-form"
                    class="inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-7 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg"
                >

                    <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                    Book an Appointment

                </a>


                <a
                    href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                    class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-7 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg"
                >

                    <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                    Emergency: <?php echo CONTACT_INFO['emergency']; ?>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     QUICK CONTACT ACTIONS
========================================================= -->

<section class="py-10 bg-white">

    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 max-w-5xl mx-auto">


            <!-- Appointment -->

            <a
                href="#contact-form"
                class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300"
            >

                <div class="flex items-start gap-4">

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl flex-shrink-0">

                        <?php echo getIcon('Calendar', 'h-6 w-6 text-[#328CCB]'); ?>

                    </div>

                    <div>

                        <h2 class="font-bold text-gray-900 mb-1">
                            Book an Appointment
                        </h2>

                        <p class="text-sm text-gray-600 leading-relaxed">
                            Submit an appointment enquiry and our team will contact you.
                        </p>

                    </div>

                </div>

            </a>


            <!-- Emergency -->

            <a
                href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300"
            >

                <div class="flex items-start gap-4">

                    <div class="bg-[#D66C43]/10 p-3 rounded-xl flex-shrink-0">

                        <?php echo getIcon('Phone', 'h-6 w-6 text-[#D66C43]'); ?>

                    </div>

                    <div>

                        <h2 class="font-bold text-gray-900 mb-1">
                            24/7 Emergency
                        </h2>

                        <p class="text-sm text-gray-600 leading-relaxed">
                            Call the hospital emergency line for urgent medical assistance.
                        </p>

                    </div>

                </div>

            </a>


            <!-- Directions -->

            <a
                href="https://maps.app.goo.gl/K9MHnMvWnVQS6eXs8"
                target="_blank"
                rel="noopener noreferrer"
                class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300"
            >

                <div class="flex items-start gap-4">

                    <div class="bg-green-50 p-3 rounded-xl flex-shrink-0">

                        <?php echo getIcon('Navigation', 'h-6 w-6 text-green-600'); ?>

                    </div>

                    <div>

                        <h2 class="font-bold text-gray-900 mb-1">
                            Get Directions
                        </h2>

                        <p class="text-sm text-gray-600 leading-relaxed">
                            Open the hospital location in Google Maps and plan your route.
                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

</section>


<!-- =========================================================
     APPOINTMENT SECTION
========================================================= -->

<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-4">


        <div class="text-center mb-12">

            <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                <?php echo getIcon('Calendar', 'h-4 w-4'); ?>

                <span>
                    Book Appointment
                </span>

            </div>


            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">

                Schedule Your
                <span class="text-[#328CCB]">
                    Appointment
                </span>

            </h2>


            <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                Submit your details through the appointment form and
                our team will contact you regarding your enquiry.

            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT FORM & OPERATING HOURS
========================================================= -->

<section id="contact-form" class="py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="grid lg:grid-cols-2 gap-16">


            <!-- =================================================
                 CONTACT FORM
                 DO NOT CHANGE FORMESTER FUNCTIONALITY
            ================================================== -->

            <div class="bg-gray-50 rounded-3xl shadow-xl p-8 lg:p-12 floating-card">

                <div class="mb-8">

                    <div class="inline-flex items-center space-x-2 bg-[#D66C43]/10 text-[#D66C43] px-4 py-2 rounded-full text-sm font-medium mb-6">

                        <?php echo getIcon('Calendar', 'h-4 w-4'); ?>

                        <span>
                            Book Appointment
                        </span>

                    </div>


                    <h2 class="text-3xl font-bold text-gray-900 mb-4">

                        Book Your Appointment

                    </h2>


                    <p class="text-gray-600 leading-relaxed">

                        Fill out the form below and our team will contact you
                        regarding your appointment enquiry.

                    </p>

                </div>


                <!-- FORMESTER FORM: FUNCTIONALITY PRESERVED -->

                <form
                    accept-charset="UTF-8"
                    action="https://app.formester.com/forms/26PHowyy9/submissions"
                    method="POST"
                    class="space-y-6"
                >

                    <!-- Name Field -->

                    <div>

                        <label
                            for="name"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Full Name *
                        </label>

                        <div class="relative">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                                <?php echo getIcon('User', 'h-5 w-5 text-gray-400'); ?>

                            </div>


                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                autocomplete="name"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                                placeholder="Enter your full name"
                            />

                        </div>

                    </div>


                    <!-- Email Field -->

                    <div>

                        <label
                            for="email"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Email Address *
                        </label>

                        <div class="relative">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                                <?php echo getIcon('Mail', 'h-5 w-5 text-gray-400'); ?>

                            </div>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                autocomplete="email"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                                placeholder="Enter your email address"
                            />

                        </div>

                    </div>


                    <!-- Phone Field -->

                    <div>

                        <label
                            for="phone"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Phone Number
                        </label>

                        <div class="relative">

                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                                <?php echo getIcon('Phone', 'h-5 w-5 text-gray-400'); ?>

                            </div>


                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                autocomplete="tel"
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                                placeholder="Enter your phone number"
                            />

                        </div>

                    </div>


                    <!-- Subject Field -->

                    <div>

                        <label
                            for="subject"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Subject *
                        </label>


                        <select
                            id="subject"
                            name="subject"
                            required
                            class="block w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                        >

                            <option value="">
                                Select department
                            </option>

                            <option value="orthopedics">
                                Orthopedics
                            </option>

                            <option value="cardiology">
                                Cardiology
                            </option>

                            <option value="neurology">
                                Neurology
                            </option>

                            <option value="pediatrics">
                                Pediatrics
                            </option>

                            <option value="oncology">
                                Oncology
                            </option>

                            <option value="general-surgery">
                                General Surgery
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- Message Field -->

                    <div>

                        <label
                            for="message"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Message *
                        </label>


                        <div class="relative">

                            <div class="absolute top-3 left-3 pointer-events-none">

                                <?php echo getIcon('MessageSquare', 'h-5 w-5 text-gray-400'); ?>

                            </div>


                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                required
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 resize-none form-input"
                                placeholder="Please describe your inquiry or message..."
                            ></textarea>

                        </div>

                    </div>


                    <!-- Math CAPTCHA -->

                    <div id="captcha-wrapper">

                        <label
                            for="captcha_answer"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Security Check *
                        </label>


                        <div class="flex items-center gap-3">

                            <div class="flex-1 bg-gradient-to-r from-[#328CCB]/10 to-[#D66C43]/10 border border-[#328CCB]/30 rounded-lg px-4 py-3 flex items-center justify-between">

                                <span
                                    id="captcha-question"
                                    class="font-bold text-gray-800 text-lg tracking-widest select-none"
                                ></span>


                                <button
                                    type="button"
                                    id="captcha-refresh"
                                    onclick="generateCaptcha()"
                                    title="Refresh"
                                    class="text-[#328CCB] hover:text-[#2a7bb5] transition-colors duration-200 ml-2 flex-shrink-0"
                                    aria-label="Refresh CAPTCHA"
                                >

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                        />

                                    </svg>

                                </button>

                            </div>


                            <span class="text-gray-500 font-semibold text-lg">
                                =
                            </span>


                            <input
                                type="number"
                                id="captcha_answer"
                                name="captcha_answer"
                                required
                                autocomplete="off"
                                class="w-24 px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 text-center font-bold text-lg form-input"
                                placeholder="?"
                            />

                        </div>


                        <p
                            id="captcha-error"
                            class="text-red-500 text-sm mt-2 hidden"
                        >
                            Incorrect answer. Please try again.
                        </p>

                    </div>


                    <!-- Submit Button -->

                    <button
                        type="submit"
                        id="form-submit-btn"
                        class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-4 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2 transform hover:scale-105 shadow-lg cta-glow"
                    >

                        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                        <span>
                            Book Appointment
                        </span>

                    </button>


                    <!-- Form Note -->

                    <p class="text-sm text-gray-500 text-center">

                        We'll get back to you regarding your enquiry.
                        For emergencies, please call

                        <a
                            href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                            class="text-[#D66C43] font-semibold hover:underline"
                        >
                            <?php echo CONTACT_INFO['emergency']; ?>
                        </a>

                    </p>

                </form>


                <!-- CAPTCHA FUNCTIONALITY PRESERVED -->

                <script>

                    var _captchaAnswer = 0;


                    function generateCaptcha() {

                        var ops = ['+', '-', '×'];

                        var op =
                            ops[Math.floor(Math.random() * ops.length)];

                        var a, b, answer;


                        if (op === '+') {

                            a = Math.floor(Math.random() * 20) + 1;

                            b = Math.floor(Math.random() * 20) + 1;

                            answer = a + b;

                        }

                        else if (op === '-') {

                            a = Math.floor(Math.random() * 20) + 10;

                            b = Math.floor(Math.random() * 10) + 1;

                            answer = a - b;

                        }

                        else {

                            a = Math.floor(Math.random() * 9) + 2;

                            b = Math.floor(Math.random() * 9) + 2;

                            answer = a * b;

                        }


                        _captchaAnswer = answer;


                        document.getElementById('captcha-question').textContent =
                            'What is ' + a + ' ' + op + ' ' + b + ' ?';


                        document.getElementById('captcha_answer').value = '';


                        document
                            .getElementById('captcha-error')
                            .classList.add('hidden');

                    }


                    generateCaptcha();


                    document
                        .querySelector('form[action*="formester"]')
                        .addEventListener('submit', function(e) {

                            var userAnswer =
                                parseInt(
                                    document.getElementById('captcha_answer').value,
                                    10
                                );

                            var errEl =
                                document.getElementById('captcha-error');


                            if (
                                isNaN(userAnswer) ||
                                userAnswer !== _captchaAnswer
                            ) {

                                e.preventDefault();

                                errEl.classList.remove('hidden');

                                generateCaptcha();

                                document
                                    .getElementById('captcha_answer')
                                    .focus();

                            }

                            else {

                                errEl.classList.add('hidden');

                            }

                        });

                </script>

            </div>


            <!-- =================================================
                 OPERATING HOURS + FEATURES
            ================================================== -->

            <div class="space-y-8">


                <!-- Operating Hours -->

                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                    <div class="flex items-center space-x-3 mb-6">

                        <div class="bg-[#328CCB]/10 p-3 rounded-xl">

                            <?php echo getIcon('Clock', 'h-6 w-6 text-[#328CCB]'); ?>

                        </div>


                        <div>

                            <h2 class="text-2xl font-bold text-gray-900">
                                Operating Hours
                            </h2>

                            <p class="text-gray-600">
                                Our service timings
                            </p>

                        </div>

                    </div>


                    <div class="space-y-4">

                        <?php

                        $operatingHours = [

                            [
                                'day' => 'Emergency Services',
                                'time' => '24/7 Available',
                                'highlight' => true
                            ],

                            [
                                'day' => 'OPD Timings',
                                'time' => '8:00 AM - 8:00 PM',
                                'highlight' => false
                            ],

                            [
                                'day' => 'Laboratory',
                                'time' => '24/7 Available',
                                'highlight' => false
                            ],

                            [
                                'day' => 'Pharmacy',
                                'time' => '24/7 Available',
                                'highlight' => true
                            ],

                            [
                                'day' => 'Radiology',
                                'time' => '24/7 Available',
                                'highlight' => false
                            ],

                            [
                                'day' => 'Dialysis Center',
                                'time' => '24/7 Available',
                                'highlight' => true
                            ]

                        ];


                        foreach ($operatingHours as $hour):

                        ?>

                            <div
                                class="flex items-center justify-between gap-4 p-4 rounded-lg <?php echo $hour['highlight'] ? 'bg-[#D66C43]/10 border border-[#D66C43]/20' : 'bg-gray-50'; ?>"
                            >

                                <span
                                    class="font-semibold <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-700'; ?>"
                                >

                                    <?php echo $hour['day']; ?>

                                </span>


                                <span
                                    class="font-bold text-right <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-900'; ?>"
                                >

                                    <?php echo $hour['time']; ?>

                                </span>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <p class="text-sm text-gray-500 mt-5 leading-relaxed">

                        For appointments, service information or assistance
                        before your visit, please contact Akropolis Super
                        Speciality Hospital.

                    </p>

                </div>


                <!-- Hospital Features -->

                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                    <div class="flex items-center space-x-3 mb-6">

                        <div class="bg-[#D66C43]/10 p-3 rounded-xl">

                            <?php echo getIcon('Award', 'h-6 w-6 text-[#D66C43]'); ?>

                        </div>


                        <div>

                            <h2 class="text-2xl font-bold text-gray-900">
                                Hospital Information
                            </h2>

                            <p class="text-gray-600">
                                Key information for patients
                            </p>

                        </div>

                    </div>


                    <div class="space-y-4">

                        <?php

                        $features = [

                            'NABH Accredited Hospital',

                            '24×7 Emergency Services',

                            'Advanced Diagnostic Services',

                            'Specialist Medical Departments',

                            'Insurance & TPA Assistance',

                            'Patient-Centred Care'

                        ];


                        foreach ($features as $feature):

                        ?>

                            <div class="flex items-center space-x-3">

                                <?php echo getIcon(
                                    'CheckCircle',
                                    'h-5 w-5 text-[#D66C43] flex-shrink-0'
                                ); ?>

                                <span class="text-gray-700 font-medium">
                                    <?php echo $feature; ?>
                                </span>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     HOSPITAL LOCATION
========================================================= -->

<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-4">


        <div class="text-center mb-12">

            <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                <span>
                    Find Us in Gurugram
                </span>

            </div>


            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">

                Visit Akropolis
                <span class="text-[#328CCB]">
                    Super Speciality Hospital
                </span>

            </h2>


            <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                Akropolis Super Speciality Hospital is located near
                Vatika Chowk, opposite Chinar Garden, in Sector 69,
                Gurugram, Haryana.

            </p>

        </div>


        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

            <div class="grid lg:grid-cols-2">


                <!-- Google Maps -->

                <div class="h-96 lg:h-full min-h-[450px]">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.794260118669!2d77.0455906!3d28.3976223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d23971c50e10b%3A0xf294f48f7588a6bd!2sAkropolis%20Super%20Speciality%20Hospital%3A%20Orthopedic%20Hospital%20in%20Gurgaon%20%7C%20Neuro%2C%20Cardiologist%2C%20CT%20Scan%2C%20ENT%20Hospital%20in%20Gurgaon!5e1!3m2!1sen!2sin!4v1780421258988!5m2!1sen!2sin"
                        width="100%"
                        height="100%"
                        style="border:0; min-height:450px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                    ></iframe>

                </div>


                <!-- Location Information -->

                <div class="p-8 lg:p-12 flex flex-col justify-center">


                    <h2 class="text-3xl font-bold text-gray-900 mb-8">

                        Hospital Location

                    </h2>


                    <div class="space-y-7 mb-8">


                        <!-- Address -->

                        <div class="flex items-start gap-4">

                            <div class="bg-[#328CCB]/10 p-3 rounded-lg flex-shrink-0">

                                <?php echo getIcon(
                                    'MapPin',
                                    'h-6 w-6 text-[#328CCB]'
                                ); ?>

                            </div>


                            <div>

                                <h3 class="font-bold text-gray-900 mb-1">
                                    Address
                                </h3>

                                <p class="text-gray-700 leading-relaxed">

                                    <?php echo CONTACT_INFO['address']; ?>

                                </p>

                            </div>

                        </div>


                        <!-- Emergency -->

                        <div class="flex items-start gap-4">

                            <div class="bg-[#D66C43]/10 p-3 rounded-lg flex-shrink-0">

                                <?php echo getIcon(
                                    'Phone',
                                    'h-6 w-6 text-[#D66C43]'
                                ); ?>

                            </div>


                            <div>

                                <h3 class="font-bold text-gray-900 mb-1">
                                    Emergency
                                </h3>

                                <p class="text-gray-700 leading-relaxed">

                                    Emergency services are available 24/7.

                                    <a
                                        href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                                        class="text-[#D66C43] font-semibold hover:underline"
                                    >
                                        Call <?php echo CONTACT_INFO['emergency']; ?>
                                    </a>

                                </p>

                            </div>

                        </div>


                        <!-- OPD -->

                        <div class="flex items-start gap-4">

                            <div class="bg-purple-100 p-3 rounded-lg flex-shrink-0">

                                <?php echo getIcon(
                                    'Clock',
                                    'h-6 w-6 text-purple-600'
                                ); ?>

                            </div>


                            <div>

                                <h3 class="font-bold text-gray-900 mb-1">
                                    OPD Timings
                                </h3>

                                <p class="text-gray-700 leading-relaxed">
                                    8:00 AM - 8:00 PM
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Directions CTA -->

                    <a
                        href="https://maps.app.goo.gl/K9MHnMvWnVQS6eXs8"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Get directions to Akropolis Super Speciality Hospital in Gurugram"
                        class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 flex items-center justify-center gap-2 shadow-lg"
                    >

                        <?php echo getIcon('Navigation', 'h-5 w-5'); ?>

                        <span>
                            Get Directions in Google Maps
                        </span>

                    </a>


                    <p class="text-sm text-gray-500 mt-4 text-center">

                        Use Google Maps to plan your route from your current
                        location or another starting point.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT INFORMATION / INTERNAL LINKS
========================================================= -->

<section class="py-20 bg-white">

    <div class="container mx-auto px-4">

        <div class="max-w-5xl mx-auto">


            <div class="text-center mb-12">

                <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                    <?php echo getIcon('Info', 'h-4 w-4'); ?>

                    <span>
                        Patient Information
                    </span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-5">

                    Find the Healthcare
                    <span class="text-[#328CCB]">
                        Information You Need
                    </span>

                </h2>


                <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                    Explore our medical departments, specialist doctors,
                    diagnostic services and hospital information before
                    planning your visit.

                </p>

            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">


                <a
                    href="/departments"
                    class="border border-gray-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300"
                >

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-4">

                        <?php echo getIcon(
                            'Building2',
                            'h-6 w-6 text-[#328CCB]'
                        ); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Medical Departments
                    </h3>

                    <p class="text-sm text-gray-600">
                        Explore our specialist departments and clinical services.
                    </p>

                </a>


                <a
                    href="/doctors"
                    class="border border-gray-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300"
                >

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-4">

                        <?php echo getIcon(
                            'Stethoscope',
                            'h-6 w-6 text-[#328CCB]'
                        ); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Our Doctors
                    </h3>

                    <p class="text-sm text-gray-600">
                        Find doctors and explore specialist consultation options.
                    </p>

                </a>


                <a
                    href="/services"
                    class="border border-gray-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300"
                >

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-4">

                        <?php echo getIcon(
                            'Activity',
                            'h-6 w-6 text-[#328CCB]'
                        ); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        Medical & Diagnostic Services
                    </h3>

                    <p class="text-sm text-gray-600">
                        Explore available hospital and diagnostic services.
                    </p>

                </a>


                <a
                    href="/about"
                    class="border border-gray-100 rounded-2xl p-6 hover:shadow-lg transition-all duration-300"
                >

                    <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-4">

                        <?php echo getIcon(
                            'Hospital',
                            'h-6 w-6 text-[#328CCB]'
                        ); ?>

                    </div>

                    <h3 class="font-bold text-gray-900 mb-2">
                        About Akropolis
                    </h3>

                    <p class="text-sm text-gray-600">
                        Learn about the hospital, facilities and healthcare approach.
                    </p>

                </a>

            </div>

        </div>

    </div>

</section>

<!-- =========================================================
     EMAIL & SOCIAL MEDIA
========================================================= -->

<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="max-w-6xl mx-auto">

            <!-- Section Header -->

            <div class="text-center mb-12">

                <div
                    class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6"
                >

                    <?php echo getIcon('MessageCircle', 'h-4 w-4'); ?>

                    <span>
                        Stay Connected
                    </span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-5">

                    Connect With
                    <span class="text-[#328CCB]">
                        Akropolis
                    </span>

                </h2>


                <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                    Have a question or want to stay updated with Akropolis
                    Super Speciality Hospital? Contact us by email or connect
                    with us through our official social media channels.

                </p>

            </div>


            <div class="grid lg:grid-cols-2 gap-8">


                <!-- =================================================
                     EMAIL CONTACT
                ================================================== -->

                <div
                    class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 lg:p-10"
                >

                    <div class="flex items-start gap-5">

                        <div
                            class="bg-[#328CCB]/10 p-4 rounded-2xl flex-shrink-0"
                        >

                            <?php echo getIcon(
                                'Mail',
                                'h-7 w-7 text-[#328CCB]'
                            ); ?>

                        </div>


                        <div>

                            <p class="text-sm font-semibold text-[#328CCB] mb-2">
                                Email Us
                            </p>


                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                Contact Our Hospital Team
                            </h3>


                            <p class="text-gray-600 leading-relaxed mb-5">

                                For general enquiries, appointment-related
                                questions or hospital information, you can
                                contact the Akropolis team by email.

                            </p>


                            <a
                                href="mailto:Info@akropolishospital.com"
                                class="inline-flex items-center gap-2 text-[#328CCB] font-semibold hover:underline break-all"
                                aria-label="Email Akropolis Super Speciality Hospital"
                            >

                                <?php echo getIcon(
                                    'Mail',
                                    'h-5 w-5'
                                ); ?>

                                Info@akropolishospital.com

                            </a>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     SOCIAL MEDIA
                ================================================== -->

                <div
                    class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 lg:p-10"
                >

                    <div class="flex items-start gap-5">

                        <div
                            class="bg-[#D66C43]/10 p-4 rounded-2xl flex-shrink-0"
                        >

                            <?php echo getIcon(
                                'Share2',
                                'h-7 w-7 text-[#D66C43]'
                            ); ?>

                        </div>


                        <div class="w-full">

                            <p class="text-sm font-semibold text-[#D66C43] mb-2">
                                Follow Akropolis
                            </p>


                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                Connect With Us Online
                            </h3>


                            <p class="text-gray-600 leading-relaxed mb-6">

                                Follow the official Akropolis Super Speciality
                                Hospital channels for hospital updates,
                                healthcare information and news.

                            </p>


                            <div class="grid grid-cols-2 gap-3">


                                <!-- Facebook -->

                                <a
                                    href="https://www.facebook.com/akropolishospital"
                                    target="_blank"
                                    rel="nofollow noopener noreferrer"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all duration-300"
                                    aria-label="Akropolis Super Speciality Hospital on Facebook"
                                >

                                    <?php echo getIcon(
                                        'Facebook',
                                        'h-5 w-5 text-[#328CCB]'
                                    ); ?>

                                    <span class="font-semibold text-gray-800">
                                        Facebook
                                    </span>

                                </a>


                                <!-- Instagram -->

                                <a
                                    href="https://www.instagram.com/akropolishospital"
                                    target="_blank"
                                    rel="nofollow noopener noreferrer"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all duration-300"
                                    aria-label="Akropolis Super Speciality Hospital on Instagram"
                                >

                                    <?php echo getIcon(
                                        'Instagram',
                                        'h-5 w-5 text-[#328CCB]'
                                    ); ?>

                                    <span class="font-semibold text-gray-800">
                                        Instagram
                                    </span>

                                </a>


                                <!-- LinkedIn -->

                                <a
                                    href="https://www.linkedin.com/company/akropolis-superspeciality-hospital"
                                    target="_blank"
                                    rel="nofollow noopener noreferrer"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all duration-300"
                                    aria-label="Akropolis Super Speciality Hospital on LinkedIn"
                                >

                                    <?php echo getIcon(
                                        'Linkedin',
                                        'h-5 w-5 text-[#328CCB]'
                                    ); ?>

                                    <span class="font-semibold text-gray-800">
                                        LinkedIn
                                    </span>

                                </a>


                                <!-- YouTube -->

                                <a
                                    href="https://www.youtube.com/@akropolishhospital"
                                    target="_blank"
                                    rel="nofollow noopener noreferrer"
                                    class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-[#328CCB]/30 hover:bg-[#328CCB]/5 transition-all duration-300"
                                    aria-label="Akropolis Super Speciality Hospital on YouTube"
                                >

                                    <?php echo getIcon(
                                        'Youtube',
                                        'h-5 w-5 text-[#328CCB]'
                                    ); ?>

                                    <span class="font-semibold text-gray-800">
                                        YouTube
                                    </span>

                                </a>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FAQ SECTION
========================================================= -->

<section class="py-20 bg-gray-50">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto">


            <div class="text-center mb-12">

                <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                    <?php echo getIcon('HelpCircle', 'h-4 w-4'); ?>

                    <span>
                        Contact FAQs
                    </span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-5">

                    Frequently Asked
                    <span class="text-[#328CCB]">
                        Questions
                    </span>

                </h2>


                <p class="text-gray-600 text-lg">

                    Quick answers about appointments, location,
                    emergency services and hospital timings.

                </p>

            </div>


            <div class="space-y-4">

                <?php foreach ($contact_faqs as $index => $faq): ?>

                    <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">

                        <button
                            type="button"
                            onclick="toggleContactFaq(<?php echo $index; ?>)"
                            class="w-full px-6 py-5 flex items-center justify-between gap-6 text-left hover:bg-gray-50 transition-colors"
                            aria-expanded="false"
                            aria-controls="contact-faq-answer-<?php echo $index; ?>"
                        >

                            <span class="font-semibold text-gray-900">

                                <?php echo htmlspecialchars(
                                    $faq['question'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>

                            </span>


                            <?php echo getIcon(
                                'ChevronDown',
                                'h-5 w-5 text-[#328CCB] flex-shrink-0 transition-transform duration-200 faq-contact-icon-' . $index
                            ); ?>

                        </button>


                        <div
                            id="contact-faq-answer-<?php echo $index; ?>"
                            class="hidden px-6 pb-6"
                        >

                            <p class="text-gray-600 leading-relaxed">

                                <?php echo htmlspecialchars(
                                    $faq['answer'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>

                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="py-20 bg-[#0F1A33] text-white">

    <div class="container mx-auto px-4">

        <div class="max-w-4xl mx-auto text-center">

            <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-6">

                <?php echo getIcon('Phone', 'h-5 w-5 text-[#62B5F5]'); ?>

                <span class="text-sm font-semibold">
                    Need Assistance?
                </span>

            </div>


            <h2 class="text-4xl lg:text-5xl font-bold mb-6">

                Need Help Planning Your Visit?

            </h2>


            <p class="text-blue-100 text-lg leading-relaxed max-w-2xl mx-auto mb-8">

                Contact Akropolis Super Speciality Hospital for appointment
                enquiries, emergency assistance or information about our
                medical and diagnostic services.

            </p>


            <div class="flex flex-col sm:flex-row justify-center gap-4">


                <a
                    href="#contact-form"
                    class="inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300"
                >

                    <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                    Book an Appointment

                </a>


                <a
                    href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                    class="inline-flex items-center justify-center gap-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300"
                >

                    <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                    Call Emergency

                </a>

            </div>

        </div>

    </div>

</section>


</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<?php include 'includes/footer.php'; ?>


<!-- =========================================================
     SCRIPTS
========================================================= -->

<?php include 'includes/scripts.php'; ?>


<script>

function toggleContactFaq(index) {

    const answer =
        document.getElementById('contact-faq-answer-' + index);

    const icon =
        document.querySelector('.faq-contact-icon-' + index);

    const button =
        answer.previousElementSibling;


    const isHidden =
        answer.classList.contains('hidden');


    answer.classList.toggle('hidden');


    if (icon) {

        icon.classList.toggle('rotate-180');

    }


    if (button) {

        button.setAttribute(
            'aria-expanded',
            isHidden ? 'true' : 'false'
        );

    }

}

</script>