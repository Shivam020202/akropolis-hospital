<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';

$page_title = 'Contact Akropolis Super Speciality Hospital | Gurugram';

$page_description = 'Contact Akropolis Super Speciality Hospital in Gurugram to book an appointment, reach 24/7 emergency services, email our team or get directions to Sector 69.';

$canonical_url = '/contact';

$schema_blocks = [
    schemaContactPage(),
    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Contact', 'url' => '/contact']
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
            <?php echo CONTACT_INFO['emergency']; ?>
        </span>

    </div>
</div>


<!-- Header -->
<?php include 'includes/header-v2.php'; ?>


<main>


    <!-- ========================================================= -->
    <!-- HERO -->
    <!-- ========================================================= -->

    <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">

        <div
            class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('https://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?auto=compress&cs=tinysrgb&w=1600');"
        >

            <div class="absolute inset-0 bg-[#328CCB] bg-opacity-75"></div>

        </div>


        <div class="relative container mx-auto px-4 py-20 lg:py-32">

            <div class="max-w-4xl mx-auto text-center">


                <div class="flex items-center justify-center space-x-2 mb-6">

                    <?php echo getIcon('Phone', 'h-6 w-6 text-yellow-400'); ?>

                    <span class="text-yellow-400 font-semibold">
                        Get in Touch
                    </span>

                </div>


                <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">

                    Contact Akropolis

                    <span class="block">
                        Super Speciality Hospital
                    </span>

                </h1>


                <p class="text-xl lg:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">

                    Book an appointment, contact our team, reach 24/7 emergency services,
                    or get directions to our hospital in Sector 69, Gurugram.

                </p>


                <!-- Hero CTAs -->

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">

                    <a
                        href="#contact-form"
                        class="bg-white text-[#328CCB] hover:bg-gray-100 px-7 py-3.5 rounded-xl font-semibold transition-all duration-300 shadow-lg inline-flex items-center gap-2"
                    >

                        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                        <span>Book an Appointment</span>

                    </a>


                    <a
                        href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                        class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-7 py-3.5 rounded-xl font-semibold transition-all duration-300 shadow-lg inline-flex items-center gap-2"
                    >

                        <?php echo getIcon('PhoneCall', 'h-5 w-5'); ?>

                        <span>Call Emergency</span>

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================================= -->
    <!-- APPOINTMENT INTRO -->
    <!-- ========================================================= -->

    <section class="py-16 lg:py-20 bg-gray-50">

        <div class="container mx-auto px-4">

            <div class="text-center mb-12">

                <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                    <?php echo getIcon('Calendar', 'h-4 w-4'); ?>

                    <span>Book Appointment</span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">

                    Schedule Your

                    <span class="text-[#328CCB]">
                        Appointment
                    </span>

                </h2>


                <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                    Submit your details through the appointment form and our team
                    will contact you to assist with your enquiry and appointment request.

                </p>

            </div>

        </div>

    </section>



    <!-- ========================================================= -->
    <!-- CONTACT FORM + OPERATING HOURS -->
    <!-- ========================================================= -->

    <section id="contact-form" class="py-20 bg-white">

        <div class="container mx-auto px-4">

            <div class="grid lg:grid-cols-2 gap-16">


                <!-- ================================================= -->
                <!-- CONTACT FORM -->
                <!-- ================================================= -->

                <div class="bg-gray-50 rounded-3xl shadow-xl p-8 lg:p-12 floating-card">

                    <div class="mb-8">

                        <div class="inline-flex items-center space-x-2 bg-[#D66C43]/10 text-[#D66C43] px-4 py-2 rounded-full text-sm font-medium mb-6">

                            <?php echo getIcon('Calendar', 'h-4 w-4'); ?>

                            <span>Book Appointment</span>

                        </div>


                        <h3 class="text-3xl font-bold text-gray-900 mb-4">

                            Book Your Appointment

                        </h3>


                        <p class="text-gray-600 leading-relaxed">

                            Fill out the form below and our team will contact you
                            to assist with your appointment request.

                        </p>

                    </div>



                    <!-- ================================================= -->
                    <!-- FORMESTER FORM - FUNCTIONALITY UNCHANGED -->
                    <!-- ================================================= -->

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

                            We'll get back to you within 24 hours.

                            For emergencies, please call

                            <a
                                href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                                class="text-[#D66C43] font-semibold hover:underline"
                            >
                                <?php echo CONTACT_INFO['emergency']; ?>
                            </a>

                        </p>

                    </form>



                    <!-- ================================================= -->
                    <!-- CAPTCHA FUNCTIONALITY - UNCHANGED -->
                    <!-- ================================================= -->

                    <script>

                        var _captchaAnswer = 0;


                        function generateCaptcha() {

                            var ops = ['+', '-', '×'];

                            var op = ops[Math.floor(Math.random() * ops.length)];

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

                            document.getElementById('captcha-error').classList.add('hidden');

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



                <!-- ================================================= -->
                <!-- OPERATING HOURS + WHY CHOOSE US -->
                <!-- ================================================= -->

                <div class="space-y-8">


                    <!-- Operating Hours -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                        <div class="flex items-center space-x-3 mb-6">

                            <div class="bg-[#328CCB]/10 p-3 rounded-xl">

                                <?php echo getIcon('Clock', 'h-6 w-6 text-[#328CCB]'); ?>

                            </div>


                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Operating Hours
                                </h3>

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

                    </div>



                    <!-- Why Choose Us -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 service-card">

                        <div class="flex items-center space-x-3 mb-6">

                            <div class="bg-[#D66C43]/10 p-3 rounded-xl">

                                <?php echo getIcon('Award', 'h-6 w-6 text-[#D66C43]'); ?>

                            </div>


                            <div>

                                <h3 class="text-2xl font-bold text-gray-900">
                                    Why Choose Us
                                </h3>

                                <p class="text-gray-600">
                                    Our key features
                                </p>

                            </div>

                        </div>


                        <div class="space-y-4">

                            <?php

                            $features = [

                                'NABH Accredited Hospital',

                                '24×7 Emergency Services',

                                'Advanced Diagnostic Center',

                                'Expert Medical Team',

                                'Insurance Cashless Facility',

                                'Patient-Centric Care'

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



    <!-- ========================================================= -->
    <!-- EMAIL + SOCIAL MEDIA -->
    <!-- ========================================================= -->

    <section class="py-16 lg:py-20 bg-gray-50">

        <div class="container mx-auto px-4">

            <div class="max-w-5xl mx-auto">


                <div class="text-center mb-12">

                    <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                        <?php echo getIcon('MessageCircle', 'h-4 w-4'); ?>

                        <span>Connect With Akropolis</span>

                    </div>


                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">

                        Other Ways to

                        <span class="text-[#328CCB]">
                            Contact Us
                        </span>

                    </h2>


                    <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">

                        Have a question, appointment enquiry or general healthcare
                        query? You can also reach the Akropolis team by email or
                        connect with us through our official social media channels.

                    </p>

                </div>



                <div class="grid md:grid-cols-2 gap-8">


                    <!-- Email -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">

                        <div class="flex items-start gap-4">

                            <div class="bg-[#328CCB]/10 p-3 rounded-xl flex-shrink-0">

                                <?php echo getIcon(
                                    'Mail',
                                    'h-6 w-6 text-[#328CCB]'
                                ); ?>

                            </div>


                            <div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2">
                                    Email Us
                                </h3>


                                <p class="text-gray-600 mb-4 leading-relaxed">

                                    For general enquiries and non-urgent communication,
                                    email our hospital team.

                                </p>


                                <a
                                    href="mailto:Info@akropolishospital.com"
                                    class="inline-flex items-center gap-2 text-[#328CCB] font-semibold hover:underline break-all"
                                >

                                    <?php echo getIcon('Mail', 'h-4 w-4'); ?>

                                    Info@akropolishospital.com

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- Social Media -->

                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">

                        <div class="flex items-start gap-4">

                            <div class="bg-[#D66C43]/10 p-3 rounded-xl flex-shrink-0">

                                <?php echo getIcon(
                                    'Share2',
                                    'h-6 w-6 text-[#D66C43]'
                                ); ?>

                            </div>


                            <div class="w-full">

                                <h3 class="text-xl font-bold text-gray-900 mb-2">
                                    Follow Us
                                </h3>


                                <p class="text-gray-600 mb-5 leading-relaxed">

                                    Follow Akropolis Super Speciality Hospital
                                    through our official social media channels.

                                </p>


                                <div class="grid grid-cols-2 gap-3">


                                    <!-- Facebook -->

                                    <a
                                        href="https://www.facebook.com/akropolishospital"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex items-center gap-2 px-4 py-3 rounded-lg bg-gray-50 hover:bg-[#328CCB]/10 text-gray-700 hover:text-[#328CCB] font-medium transition-colors"
                                    >

                                        <?php echo getIcon('Facebook', 'h-5 w-5'); ?>

                                        <span>Facebook</span>

                                    </a>



                                    <!-- Instagram -->

                                    <a
                                        href="https://www.instagram.com/akropolishospital"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex items-center gap-2 px-4 py-3 rounded-lg bg-gray-50 hover:bg-[#328CCB]/10 text-gray-700 hover:text-[#328CCB] font-medium transition-colors"
                                    >

                                        <?php echo getIcon('Instagram', 'h-5 w-5'); ?>

                                        <span>Instagram</span>

                                    </a>



                                    <!-- LinkedIn -->

                                    <a
                                        href="https://www.linkedin.com/company/akropolis-superspeciality-hospital"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex items-center gap-2 px-4 py-3 rounded-lg bg-gray-50 hover:bg-[#328CCB]/10 text-gray-700 hover:text-[#328CCB] font-medium transition-colors"
                                    >

                                        <?php echo getIcon('Linkedin', 'h-5 w-5'); ?>

                                        <span>LinkedIn</span>

                                    </a>



                                    <!-- YouTube -->

                                    <a
                                        href="https://www.youtube.com/@akropolishhospital"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex items-center gap-2 px-4 py-3 rounded-lg bg-gray-50 hover:bg-[#328CCB]/10 text-gray-700 hover:text-[#328CCB] font-medium transition-colors"
                                    >

                                        <?php echo getIcon('Youtube', 'h-5 w-5'); ?>

                                        <span>YouTube</span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================================= -->
    <!-- LOCATION / GOOGLE MAP -->
    <!-- ========================================================= -->

    <section class="py-20 bg-white">

        <div class="container mx-auto px-4">


            <div class="text-center mb-16">

                <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">

                    <?php echo getIcon('MapPin', 'h-4 w-4'); ?>

                    <span>Find Us</span>

                </div>


                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">

                    Visit Our

                    <span class="text-[#328CCB]">
                        Hospital
                    </span>

                </h2>


                <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">

                    Akropolis Super Speciality Hospital is located near Vatika Chowk,
                    opposite Chinar Garden, in Sector 69, Gurugram, Haryana.

                </p>

            </div>



            <div class="bg-white rounded-3xl shadow-xl overflow-hidden floating-card border border-gray-100">

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
                            title="Google Maps location of Akropolis Super Speciality Hospital in Sector 69, Gurugram"
                        ></iframe>

                    </div>



                    <!-- Location Details -->

                    <div class="p-8 lg:p-12 flex flex-col justify-center">


                        <h3 class="text-3xl font-bold text-gray-900 mb-8">

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



                            <!-- Directions -->

                            <div class="flex items-start space-x-4">

                                <div class="bg-green-100 p-3 rounded-lg flex-shrink-0">

                                    <?php echo getIcon(
                                        'Navigation',
                                        'h-6 w-6 text-green-600'
                                    ); ?>

                                </div>


                                <div>

                                    <h4 class="font-bold text-gray-900 mb-1">
                                        Getting Here
                                    </h4>


                                    <p class="text-gray-700 leading-relaxed">

                                        Located near Vatika Chowk and opposite
                                        Chinar Garden in Sector 69, Gurugram.

                                    </p>

                                </div>

                            </div>



                            <!-- Hours -->

                            <div class="flex items-start space-x-4">

                                <div class="bg-purple-100 p-3 rounded-lg flex-shrink-0">

                                    <?php echo getIcon(
                                        'Clock',
                                        'h-6 w-6 text-purple-600'
                                    ); ?>

                                </div>


                                <div>

                                    <h4 class="font-bold text-gray-900 mb-1">
                                        Service Availability
                                    </h4>


                                    <p class="text-gray-700 leading-relaxed">

                                        Emergency services are available 24/7.
                                        OPD timings are 8:00 AM to 8:00 PM.

                                    </p>

                                </div>

                            </div>

                        </div>



                        <a
                            href="https://maps.app.goo.gl/GdmJvL8Yuz1VUMvw8"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg cta-glow"
                        >

                            <?php echo getIcon('Navigation', 'h-5 w-5'); ?>

                            <span>
                                Get Directions
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ========================================================= -->
    <!-- FINAL CONVERSION CTA -->
    <!-- ========================================================= -->

    <section class="py-16 lg:py-20 bg-[#328CCB] text-white">

        <div class="container mx-auto px-4">

            <div class="max-w-4xl mx-auto text-center">


                <h2 class="text-3xl lg:text-4xl font-bold mb-5">

                    Need Help or Want to Book an Appointment?

                </h2>


                <p class="text-blue-100 text-lg leading-relaxed mb-8">

                    Contact Akropolis Super Speciality Hospital in Gurugram
                    for appointment enquiries, hospital information and
                    healthcare assistance.

                </p>


                <div class="flex flex-col sm:flex-row justify-center gap-4">


                    <a
                        href="#contact-form"
                        class="bg-white text-[#328CCB] hover:bg-gray-100 px-7 py-3.5 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center gap-2"
                    >

                        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>

                        Book an Appointment

                    </a>


                    <a
                        href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
                        class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-7 py-3.5 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center gap-2"
                    >

                        <?php echo getIcon('PhoneCall', 'h-5 w-5'); ?>

                        <?php echo CONTACT_INFO['emergency']; ?>

                    </a>


                    <a
                        href="mailto:Info@akropolishospital.com"
                        class="border border-white/40 hover:bg-white/10 text-white px-7 py-3.5 rounded-xl font-semibold transition-all duration-300 inline-flex items-center justify-center gap-2"
                    >

                        <?php echo getIcon('Mail', 'h-5 w-5'); ?>

                        Email Us

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>



<!-- Footer -->
<?php include 'includes/footer.php'; ?>


<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>