<?php

require_once 'includes/data.php';
require_once 'includes/schema.php';

/*
|--------------------------------------------------------------------------
| SEO Metadata
|--------------------------------------------------------------------------
*/

$page_title = 'Contact Akropolis Super Speciality Hospital | Gurugram';

$page_description = 'Contact Akropolis Super Speciality Hospital in Sector 69, Gurugram for appointments, 24×7 emergency care, diagnostic services and hospital information.';

$canonical_url = '/contact';


/*
|--------------------------------------------------------------------------
| FAQ Content
|--------------------------------------------------------------------------
| Visible FAQ content and FAQ schema use the same source data.
|--------------------------------------------------------------------------
*/

$contact_faqs = [

    [
        'question' => 'Where is Akropolis Super Speciality Hospital located?',
        'answer' => 'Akropolis Super Speciality Hospital is located near Vatika Chowk, opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101.'
    ],

    [
        'question' => 'How can I book an appointment at Akropolis Hospital?',
        'answer' => 'You can request an appointment by submitting the appointment form on this page. The hospital team can then contact you regarding your appointment request.'
    ],

    [
        'question' => 'Is emergency care available 24/7?',
        'answer' => 'Yes. Akropolis Super Speciality Hospital provides 24×7 emergency care. For urgent medical assistance, please call the emergency number listed on this page.'
    ],

    [
        'question' => 'What medical and diagnostic services are available at Akropolis Hospital?',
        'answer' => 'Akropolis Super Speciality Hospital provides specialist medical care across multiple departments along with diagnostic and clinical services. You can explore the Departments and Services pages for more information.'
    ],

    [
        'question' => 'How can I get directions to Akropolis Hospital?',
        'answer' => 'Akropolis Super Speciality Hospital is located near Vatika Chowk, opposite Chinar Garden, Sector 69, Gurugram. A Google Maps directions link is provided in the hospital location section on this page.'
    ]

];


/*
|--------------------------------------------------------------------------
| Schema
|--------------------------------------------------------------------------
*/

$schema_blocks = [

    schemaContactPage(),

    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Contact', 'url' => '/contact']
    ])

];

$schema_blocks[] = schemaFAQ($contact_faqs);


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
            <?php echo CONTACT_INFO['emergency']; ?>
        </span>

    </div>

</div>


<!-- =========================================================
     HEADER
========================================================== -->

<?php include 'includes/header-v2.php'; ?>


<main>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="relative overflow-hidden bg-[#0F1A33] text-white">

        <div class="absolute inset-0 bg-gradient-to-br from-[#0F1A33] via-[#163B5C] to-[#328CCB]"></div>

        <div class="absolute -right-32 -top-32 w-96 h-96 rounded-full bg-[#328CCB]/20 blur-3xl"></div>

        <div class="absolute -left-32 bottom-0 w-96 h-96 rounded-full bg-[#D66C43]/10 blur-3xl"></div>


        <div class="relative container mx-auto px-4 py-16 lg:py-24">

            <div class="max-w-4xl mx-auto text-center">


                <!-- Location Badge -->

                <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-2 mb-6">

                    <?php echo getIcon('MapPin', 'h-4 w-4 text-yellow-300'); ?>

                    <span class="text-sm font-semibold">
                        Sector 69, Gurugram
                    </span>

                </div>


                <!-- H1 -->

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6">

                    Contact
                    <span class="text-[#62B5F5]">
                        Akropolis
                    </span>
                    Super Speciality Hospital

                </h1>


                <!-- Hero Description -->

                <p class="text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-8">

                    Contact Akropolis Super Speciality Hospital in Gurugram
                    for appointments, specialist consultations, diagnostic
                    services and 24×7 emergency care.

                </p>


                <!-- Primary Actions -->

                <div class="flex flex-wrap justify-center gap-4">

                    <a
                        href="#contact-form"
                        class="inline-flex items-center gap-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                    >

                        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                        Book an Appointment

                    </a>


                    <a
                        href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                        class="inline-flex items-center gap-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-3 rounded-xl font-semibold transition-colors"
                    >

                        <?php echo getIcon('Phone', 'h-5 w-5'); ?>

                        Emergency:
                        <?php echo CONTACT_INFO['emergency']; ?>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         CONTACT INTENT / QUICK ACTIONS
    ====================================================== -->

    <section class="py-10 bg-gray-50 border-b border-gray-100">

        <div class="container mx-auto px-4">

            <div class="grid md:grid-cols-3 gap-5 max-w-5xl mx-auto">


                <!-- Emergency -->

                <a
                    href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                    class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition-shadow"
                >

                    <div class="flex items-start gap-4">

                        <div class="bg-[#D66C43]/10 p-3 rounded-xl flex-shrink-0">

                            <?php echo getIcon(
                                'Phone',
                                'h-6 w-6 text-[#D66C43]'
                            ); ?>

                        </div>


                        <div>

                            <h2 class="font-bold text-gray-900 mb-1">
                                24×7 Emergency
                            </h2>

                            <p class="text-sm text-gray-500 mb-1">
                                For urgent medical assistance
                            </p>

                            <p class="font-semibold text-[#D66C43]">
                                <?php echo CONTACT_INFO['emergency']; ?>
                            </p>

                        </div>

                    </div>

                </a>


                <!-- Appointment -->

                <a
                    href="#contact-form"
                    class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition-shadow"
                >

                    <div class="flex items-start gap-4">

                        <div class="bg-[#328CCB]/10 p-3 rounded-xl flex-shrink-0">

                            <?php echo getIcon(
                                'Calendar',
                                'h-6 w-6 text-[#328CCB]'
                            ); ?>

                        </div>


                        <div>

                            <h2 class="font-bold text-gray-900 mb-1">
                                Book an Appointment
                            </h2>

                            <p class="text-sm text-gray-500 leading-relaxed">
                                Submit your details through our appointment form.
                            </p>

                        </div>

                    </div>

                </a>


                <!-- Location -->

                <a
                    href="#hospital-location"
                    class="bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md transition-shadow"
                >

                    <div class="flex items-start gap-4">

                        <div class="bg-[#328CCB]/10 p-3 rounded-xl flex-shrink-0">

                            <?php echo getIcon(
                                'MapPin',
                                'h-6 w-6 text-[#328CCB]'
                            ); ?>

                        </div>


                        <div>

                            <h2 class="font-bold text-gray-900 mb-1">
                                Hospital Location
                            </h2>

                            <p class="text-sm text-gray-600 leading-relaxed">
                                Sector 69, Gurugram<br>
                                Near Vatika Chowk
                            </p>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>


    <!-- =====================================================
         APPOINTMENT FORM + HOSPITAL INFORMATION
    ====================================================== -->

    <section
        id="contact-form"
        class="py-20 bg-white"
    >

        <div class="container mx-auto px-4">

            <div class="grid lg:grid-cols-2 gap-16">


                <!-- =================================================
                     CONTACT FORM
                     IMPORTANT:
                     Formester action, fields and CAPTCHA functionality
                     intentionally preserved.
                ================================================== -->

                <div class="bg-gray-50 rounded-3xl shadow-xl p-8 lg:p-12 floating-card">


                    <div class="mb-8">

                        <div class="inline-flex items-center space-x-2 bg-[#D66C43]/10 text-[#D66C43] px-4 py-2 rounded-full text-sm font-medium mb-6">

                            <?php echo getIcon(
                                'Calendar',
                                'h-4 w-4'
                            ); ?>

                            <span>
                                Book Appointment
                            </span>

                        </div>


                        <h2 class="text-3xl font-bold text-gray-900 mb-4">

                            Book Your Appointment

                        </h2>


                        <p class="text-gray-600 leading-relaxed">

                            Submit your details and our team will contact you
                            regarding your appointment request. For urgent
                            medical assistance, please call our 24×7 emergency
                            number.

                        </p>

                    </div>


                    <!-- =================================================
                         DO NOT MODIFY FORM ACTION / FIELD NAMES
                    ================================================== -->

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

                                    <?php echo getIcon(
                                        'User',
                                        'h-5 w-5 text-gray-400'
                                    ); ?>

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

                                    <?php echo getIcon(
                                        'Mail',
                                        'h-5 w-5 text-gray-400'
                                    ); ?>

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

                                    <?php echo getIcon(
                                        'Phone',
                                        'h-5 w-5 text-gray-400'
                                    ); ?>

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

                                    <?php echo getIcon(
                                        'MessageSquare',
                                        'h-5 w-5 text-gray-400'
                                    ); ?>

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
                                ⚠ Incorrect answer. Please try again.
                            </p>

                        </div>


                        <!-- Submit Button -->

                        <button
                            type="submit"
                            id="form-submit-btn"
                            class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-4 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2 transform hover:scale-105 shadow-lg cta-glow"
                        >

                            <?php echo getIcon(
                                'Calendar',
                                'h-5 w-5'
                            ); ?>

                            <span>
                                Book Appointment
                            </span>

                        </button>


                        <!-- Form Note -->

                        <p class="text-sm text-gray-500 text-center">

                            For emergencies, please call

                            <a
                                href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                                class="text-[#D66C43] font-semibold hover:underline"
                            >
                                <?php echo CONTACT_INFO['emergency']; ?>
                            </a>

                        </p>


                        <p class="text-xs text-gray-500 text-center mt-2 leading-relaxed">

                            By submitting this form, you are requesting contact
                            regarding your appointment or enquiry. Please do not
                            share sensitive medical information in this form.

                        </p>


                    </form>


                    <!-- =================================================
                         EXISTING CAPTCHA FUNCTIONALITY
                         KEPT INTACT
                    ================================================== -->

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


                            document
                                .getElementById('captcha-question')
                                .textContent =
                                'What is ' + a + ' ' + op + ' ' + b + ' ?';


                            document
                                .getElementById('captcha_answer')
                                .value = '';


                            document
                                .getElementById('captcha-error')
                                .classList.add('hidden');

                        }


                        // Generate on page load

                        generateCaptcha();


                        // Validate on form submit

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
                     HOSPITAL INFORMATION
                ================================================== -->

                <div class="space-y-8">


                    <!-- Operating Hours -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                        <div class="flex items-center space-x-3 mb-6">

                            <div class="bg-[#328CCB]/10 p-3 rounded-xl">

                                <?php echo getIcon(
                                    'Clock',
                                    'h-6 w-6 text-[#328CCB]'
                                ); ?>

                            </div>


                            <div>

                                <h2 class="text-2xl font-bold text-gray-900">
                                    Hospital Hours
                                </h2>

                                <p class="text-gray-600">
                                    Key service availability
                                </p>

                            </div>

                        </div>


                        <div class="space-y-4">

                            <?php

                            /*
                             * Only display timings currently established
                             * on the page. Do not publish unverified
                             * 24/7 claims for individual services.
                             */

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
                                    class="flex items-center justify-between p-4 rounded-lg <?php echo $hour['highlight'] ? 'bg-[#D66C43]/10 border border-[#D66C43]/20' : 'bg-gray-50'; ?>"
                                >

                                    <span
                                        class="font-semibold <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-700'; ?>"
                                    >

                                        <?php echo $hour['day']; ?>

                                    </span>


                                    <span
                                        class="font-bold <?php echo $hour['highlight'] ? 'text-[#D66C43]' : 'text-gray-900'; ?>"
                                    >

                                        <?php echo $hour['time']; ?>

                                    </span>

                                </div>

                            <?php endforeach; ?>

                        </div>


                        <p class="text-sm text-gray-500 mt-5 leading-relaxed">

                            For appointments, service information or assistance before your visit,
    please contact Akropolis Super Speciality Hospital.

                        </p>

                    </div>


                    <!-- Hospital Services & Support -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                        <div class="flex items-center space-x-3 mb-6">

                            <div class="bg-[#D66C43]/10 p-3 rounded-xl">

                                <?php echo getIcon(
                                    'Award',
                                    'h-6 w-6 text-[#D66C43]'
                                ); ?>

                            </div>


                            <div>

                                <h2 class="text-2xl font-bold text-gray-900">
                                    Hospital Services &amp; Support
                                </h2>

                                <p class="text-gray-600">
                                    Information for patients and visitors
                                </p>

                            </div>

                        </div>


                        <div class="space-y-4">

                            <?php

                            $features = [

                                'NABH Accredited Hospital',

                                '24×7 Emergency Services',

                                'Specialist Medical Departments',

                                'Diagnostic Services',

                                'Appointment Assistance',

                                'Insurance & TPA Support'

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


                        <!-- Internal Links -->

                        <div class="mt-7 pt-6 border-t border-gray-100">

                            <div class="flex flex-wrap gap-3">

                                <a
                                    href="/departments"
                                    class="text-sm font-semibold text-[#328CCB] hover:underline"
                                >
                                    Medical Departments
                                </a>


                                <a
                                    href="/services"
                                    class="text-sm font-semibold text-[#328CCB] hover:underline"
                                >
                                    Medical &amp; Diagnostic Services
                                </a>


                                <a
                                    href="/doctors"
                                    class="text-sm font-semibold text-[#328CCB] hover:underline"
                                >
                                    Find a Doctor
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         LOCATION
    ====================================================== -->

    <section
        id="hospital-location"
        class="py-20 bg-gray-50"
    >

        <div class="container mx-auto px-4">


            <div class="text-center mb-16">

                <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                    <?php echo getIcon(
                        'MapPin',
                        'h-4 w-4'
                    ); ?>

                    <span>
                        Hospital Location
                    </span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">

                    Akropolis Hospital
                    <span class="text-[#328CCB]">
                        Location in Gurugram
                    </span>

                </h2>


                <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                    Visit Akropolis Super Speciality Hospital near Vatika Chowk,
                    opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101.

                </p>

            </div>


            <div class="bg-white rounded-3xl shadow-xl overflow-hidden floating-card">

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
                            title="Akropolis Super Speciality Hospital Location in Sector 69, Gurugram"
                        ></iframe>

                    </div>


                    <!-- Location Details -->

                    <div class="p-8 lg:p-12 flex flex-col justify-center">


                        <h3 class="text-3xl font-bold text-gray-900 mb-6">
                            Hospital Location
                        </h3>


                        <div class="space-y-6 mb-8">


                            <!-- Address -->

                            <div class="flex items-start space-x-4">

                                <div class="bg-[#328CCB]/10 p-3 rounded-lg flex-shrink-0">

                                    <?php echo getIcon(
                                        'MapPin',
                                        'h-6 w-6 text-[#328CCB]'
                                    ); ?>

                                </div>


                                <div>

                                    <h4 class="font-bold text-gray-900 mb-1">
                                        Address
                                    </h4>

                                    <p class="text-gray-700 leading-relaxed">
                                        <?php echo CONTACT_INFO['address']; ?>
                                    </p>

                                </div>

                            </div>


                            <!-- Local Location Context -->

                            <div class="flex items-start space-x-4">

                                <div class="bg-[#328CCB]/10 p-3 rounded-lg flex-shrink-0">

                                    <?php echo getIcon(
                                        'Navigation',
                                        'h-6 w-6 text-[#328CCB]'
                                    ); ?>

                                </div>


                                <div>

                                    <h4 class="font-bold text-gray-900 mb-1">
                                        Location
                                    </h4>

                                    <p class="text-gray-700 leading-relaxed">

                                        Near Vatika Chowk, opposite Chinar Garden,
                                        Sector 69, Gurugram.

                                    </p>

                                </div>

                            </div>


                            <!-- Visiting Information -->

                            <div class="flex items-start space-x-4">

                                <div class="bg-purple-100 p-3 rounded-lg flex-shrink-0">

                                    <?php echo getIcon(
                                        'Clock',
                                        'h-6 w-6 text-purple-600'
                                    ); ?>

                                </div>


                                <div>

                                    <h4 class="font-bold text-gray-900 mb-1">
                                        Visiting Information
                                    </h4>

                                    <p class="text-gray-700 leading-relaxed">

                                        OPD:
                                        8:00 AM - 8:00 PM
                                        <br>

                                        Emergency:
                                        24/7 Available

                                    </p>

                                </div>

                            </div>

                        </div>


                        <!-- Directions CTA -->

                        <a
                            href="https://maps.app.goo.gl/GdmJvL8Yuz1VUMvw8"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg cta-glow"
                        >

                            <?php echo getIcon(
                                'Navigation',
                                'h-5 w-5'
                            ); ?>

                            <span>
                                Get Directions
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         AEO / CONTACT FAQ
    ====================================================== -->

    <section class="py-20 bg-white">

        <div class="container mx-auto px-4">


            <div class="text-center max-w-3xl mx-auto mb-12">

                <div class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5">

                    <?php echo getIcon(
                        'HelpCircle',
                        'h-4 w-4'
                    ); ?>

                    <span>
                        Contact FAQs
                    </span>

                </div>


                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">

                    Frequently Asked Questions About
                    Akropolis Hospital

                </h2>


                <p class="text-gray-600 leading-relaxed">

                    Find quick answers about the hospital location,
                    appointments, emergency care and contacting
                    Akropolis Super Speciality Hospital in Gurugram.

                </p>

            </div>


            <div class="max-w-4xl mx-auto space-y-4">


                <?php foreach ($contact_faqs as $faq): ?>

                    <details class="group border border-gray-200 rounded-2xl">

                        <summary class="cursor-pointer list-none px-6 py-5 flex items-center justify-between gap-6 font-semibold text-gray-900">

                            <span>
                                <?php echo htmlspecialchars(
                                    $faq['question'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ); ?>
                            </span>


                            <span class="text-[#328CCB] text-xl group-open:rotate-45 transition-transform flex-shrink-0">
                                +
                            </span>

                        </summary>


                        <div class="px-6 pb-6 text-gray-600 leading-relaxed">

                            <?php

                            /*
                             * Keep the answers readable while allowing
                             * contextual internal links where appropriate.
                             */

                            if (
                                $faq['question'] ===
                                'What medical and diagnostic services are available at Akropolis Hospital?'
                            ):

                            ?>

                                Akropolis Super Speciality Hospital provides
                                specialist medical care across multiple
                                departments along with diagnostic and clinical
                                services. You can explore the

                                <a
                                    href="/departments"
                                    class="text-[#328CCB] font-semibold hover:underline"
                                >
                                    medical departments
                                </a>

                                and

                                <a
                                    href="/services"
                                    class="text-[#328CCB] font-semibold hover:underline"
                                >
                                    medical and diagnostic services
                                </a>

                                for more information.

                            <?php

                            else:

                                echo htmlspecialchars(
                                    $faq['answer'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                );

                            endif;

                            ?>

                        </div>

                    </details>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


</main>


<!-- =========================================================
     FOOTER
========================================================== -->

<?php include 'includes/footer.php'; ?>


<!-- =========================================================
     GLOBAL SCRIPTS
========================================================== -->

<?php include 'includes/scripts.php'; ?>