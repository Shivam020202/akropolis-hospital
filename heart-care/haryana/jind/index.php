<?php
require_once '/Users/bp/Desktop/Project/Akropolish /includes/data.php';
$page_title = 'Best Heart Hospital in Jind | Akropolis Hospital';
$page_description = 'Akropolis Super Speciality Hospital is the Best Heart Hospital in Jind. Expert cardiologists, advanced cardiac treatments, and 24/7 emergency heart care near Jind City, Narwana, Uklana. NABH accredited.';
include '/Users/bp/Desktop/Project/Akropolish /includes/head.php';
include '/Users/bp/Desktop/Project/Akropolish /includes/header-v2.php';
?>

<main>
  <div class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
      <nav class="flex text-sm text-gray-500">
        <ol class="flex items-center space-x-2">
          <li><a href="/" class="hover:text-[#328CCB]">Home</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/cardiology" class="hover:text-[#328CCB]">Heart Care</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/heart-care/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium">Jind</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="hero-section relative bg-gradient-to-br from-red-50 via-white to-pink-50 overflow-hidden py-16 lg:py-24">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left">
          <div class="inline-flex items-center space-x-2 bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            <span>NABH Accredited Heart Hospital Near Jind City</span>
          </div>
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">Best Heart Hospital in Jind</h1>
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">Expert cardiologists and advanced cardiac treatments near Jind City, Narwana, and Uklana. Comprehensive heart care for all of Jind.</p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#consultation-form" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Heart Checkup</span></a>
            <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Emergency: 9466044444</span></a>
          </div>
          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-500 mb-1">10K+</div><div class="text-xs text-gray-600">Heart Surgeries</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">15+</div><div class="text-xs text-gray-600">Expert Cardiologists</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-600 mb-1">98%</div><div class="text-xs text-gray-600">Success Rate</div></div>
          </div>
        </div>
        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Cardiology.jpg" alt="Best Heart Hospital in Jind" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-red-100 p-3 rounded-xl"><svg class="h-8 w-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></div>
              <div><div class="text-2xl font-bold text-gray-900">24/7</div><div class="text-sm text-gray-600">Cardiac Emergency</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Award', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">NABH Accredited</h3><p class="text-gray-600 text-sm">Quality Cardiac Care</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Activity', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">24/7 Cath Lab</h3><p class="text-gray-600 text-sm">Round-the-Clock Care</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">10,000+ Surgeries</h3><p class="text-gray-600 text-sm">Successful Outcomes</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Users', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">Expert Team</h3><p class="text-gray-600 text-sm">20+ Years Experience</p></div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Comprehensive Heart Care in Jind</h2>
        <p class="text-lg text-gray-600 mb-6">Akropolis Super Speciality Hospital is recognized as the <strong>Best Heart Hospital in Jind</strong>, providing specialized cardiac care for patients across Jind. Whether you are seeking a heart checkup near <strong>Jind City</strong> or looking for advanced cardiac surgery near <strong>Narwana</strong>, our team of experienced cardiologists is here to help.</p>
        <p class="text-lg text-gray-600 mb-6">Our state-of-the-art cardiac center is equipped with the latest diagnostic technology including digital Cath Lab, ECG, Echocardiography, and Holter monitoring. We specialize in complex heart procedures, making us the preferred choice for residents of Jind and surrounding areas like Uklana.</p>
        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('MapPin', 'h-5 w-5 text-red-500'); ?><span>Serving Near Jind</span></h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Jind City</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Narwana</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Uklana</span></li>
            </ul>
          </div>
          <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('Heart', 'h-5 w-5 text-red-500'); ?><span>Heart Conditions We Treat</span></h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Chest Pain & Heart Attack</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Heart Failure & Blockages</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Irregular Heartbeat</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>High Blood Pressure</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Coronary Artery Disease</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 bg-red-50 border-y border-red-200">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="flex items-center justify-center space-x-3 mb-6">
          <?php echo getIcon('AlertCircle', 'h-6 w-6 text-red-600'); ?>
          <h3 class="text-2xl font-bold text-red-900">Know the Heart Attack Warning Signs</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="bg-white rounded-lg p-4 border border-red-200"><h4 class="font-bold text-red-700 mb-2">Chest Pain</h4><p class="text-sm text-gray-600">Pressure or squeezing in the chest</p></div>
          <div class="bg-white rounded-lg p-4 border border-red-200"><h4 class="font-bold text-red-700 mb-2">Shortness of Breath</h4><p class="text-sm text-gray-600">Difficulty breathing with discomfort</p></div>
          <div class="bg-white rounded-lg p-4 border border-red-200"><h4 class="font-bold text-red-700 mb-2">Pain in Other Areas</h4><p class="text-sm text-gray-600">Discomfort in arms, back, neck, jaw</p></div>
          <div class="bg-white rounded-lg p-4 border border-red-200"><h4 class="font-bold text-red-700 mb-2">Cold Sweats & Nausea</h4><p class="text-sm text-gray-600">Lightheadedness with cold sweats</p></div>
        </div>
        <div class="text-center mt-6">
          <p class="text-red-900 font-semibold">If you experience these symptoms, call <a href="tel:9466044444" class="underline">9466044444</a> immediately. Every minute counts!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
          <p class="text-gray-600">For patients from Jind</p>
        </div>
        <div class="space-y-4">
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(0)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Which is the best heart hospital in Jind?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-0" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Akropolis Super Speciality Hospital is widely regarded as the best heart hospital in Jind, offering advanced cardiac treatments with NABH accreditation and 24/7 emergency cardiac care.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(1)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How far is Akropolis Hospital from Jind City?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-1" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Our hospital is conveniently located and easily accessible from Jind City and Narwana. We serve patients from all parts of Jind with free parking facilities.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(2)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you offer heart bypass surgery?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-2" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we provide state-of-the-art heart bypass and angioplasty surgeries for higher precision and faster recovery. This facility is available for all patients from Jind.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(3)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Are heart checkup packages available?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-3" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Our cardiology team provides comprehensive heart checkup packages for early detection and prevention. We serve patients from Jind and nearby areas.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(4)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How can I book an appointment?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-4" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">You can book an appointment by calling 9466044444 or using our online booking system. Walk-ins are also welcome from Jind.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(5)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you accept insurance for cardiac treatments?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-5" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we accept all major insurance providers and have TPA partnerships. Patients from Jind can avail cashless treatment at our hospital.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="flex items-center space-x-3 mb-12">
          <div class="bg-red-100 p-2 rounded-lg"><?php echo getIcon('MapPin', 'h-6 w-6 text-red-500'); ?></div>
          <h2 class="text-3xl font-bold text-gray-900">We Are Serving in These Areas</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">          <div class="group"><a href="/heart-care/haryana/ambala/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Ambala</span></a></div>
          <div class="group"><a href="/heart-care/haryana/bhiwani/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Bhiwani</span></a></div>
          <div class="group"><a href="/heart-care/haryana/charkhi-dadri/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Charkhi Dadri</span></a></div>
          <div class="group"><a href="/heart-care/haryana/faridabad/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Faridabad</span></a></div>
          <div class="group"><a href="/heart-care/haryana/fatehabad/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Fatehabad</span></a></div>
          <div class="group"><a href="/heart-care/haryana/gurgaon/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Gurgaon</span></a></div>
          <div class="group"><a href="/heart-care/haryana/hisar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Hisar</span></a></div>
          <div class="group"><a href="/heart-care/haryana/jhajjar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Jhajjar</span></a></div>
          <div class="group"><a href="/heart-care/haryana/kaithal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Kaithal</span></a></div>
          <div class="group"><a href="/heart-care/haryana/karnal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Karnal</span></a></div>
          <div class="group"><a href="/heart-care/haryana/kurukshetra/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Kurukshetra</span></a></div>
          <div class="group"><a href="/heart-care/haryana/mahendragarh/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Mahendragarh</span></a></div>
          <div class="group"><a href="/heart-care/haryana/mewat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Mewat</span></a></div>
          <div class="group"><a href="/heart-care/haryana/palwal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Palwal</span></a></div>
          <div class="group"><a href="/heart-care/haryana/panchkula/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Panchkula</span></a></div>
          <div class="group"><a href="/heart-care/haryana/panipat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Panipat</span></a></div>
          <div class="group"><a href="/heart-care/haryana/rewari/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Rewari</span></a></div>
          <div class="group"><a href="/heart-care/haryana/rohtak/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Rohtak</span></a></div>
          <div class="group"><a href="/heart-care/haryana/sirsa/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Sirsa</span></a></div>
          <div class="group"><a href="/heart-care/haryana/sonipat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Sonipat</span></a></div>
          <div class="group"><a href="/heart-care/haryana/yamunanagar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in Yamunanagar</span></a></div>
        </div>
      </div>
    </div>
  </section>

  <section id="consultation-form" class="py-20 bg-red-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-red-500">Heart Checkup</span></h2>
          <p class="text-gray-600 text-lg">Fill out the form below and we will contact you to schedule your appointment.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Enter your phone number" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Message</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 resize-none" placeholder="Describe your heart health concern..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto shadow-lg"><?php echo getIcon('Send', 'h-5 w-5'); ?><span>Book Heart Checkup</span></button></div>
            <div class="text-center"><p class="text-sm text-gray-500">For emergencies, please call <a href="tel:9466044444" class="text-red-500 font-semibold hover:underline">9466044444</a></p></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Looking for the Best Heart Hospital Near Jind City?</h2>
        <p class="text-xl text-red-100 mb-12">Book an appointment with our cardiac experts today. Serving Jind and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#consultation-form" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: 9466044444</span></a>
        </div>
      </div>
    </div>
  </section>

  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Heart Care", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Haryana"}, {"@type": "ListItem", "position": 4, "name": "Jind"}]}
  </script>
</main>

<script>
function toggleFaq(index) {
  const answer = document.getElementById('faq-answer-' + index);
  const icon = document.querySelector('.faq-icon-' + index);
  const isHidden = answer.classList.contains('hidden');
  document.querySelectorAll('[id^="faq-answer-"]').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('[class^="faq-icon-"]').forEach(el => el.style.transform = 'rotate(0deg)');
  if (isHidden) { answer.classList.remove('hidden'); icon.style.transform = 'rotate(180deg)'; }
}
</script>

<?php include '/Users/bp/Desktop/Project/Akropolish /includes/footer.php'; include '/Users/bp/Desktop/Project/Akropolish /includes/scripts.php'; ?>