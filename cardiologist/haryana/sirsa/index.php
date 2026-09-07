<?php
require_once '/Users/bp/Desktop/Project/Akropolish /includes/data.php';
$page_title = 'Best Cardiologist in Sirsa | Akropolis Hospital';
$page_description = 'Find the best cardiologist in Sirsa at Akropolis Super Speciality Hospital. Expert heart specialists, advanced diagnostics, and 24/7 cardiac care near Sirsa City, Ellenabad, Rania. NABH accredited.';
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
          <li><a href="/cardiology" class="hover:text-[#328CCB]">Cardiology</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/cardiologist/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium">Sirsa</li>
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
            <span>Top Cardiologist Near Sirsa City</span>
          </div>
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">Best Cardiologist in Sirsa</h1>
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">Board-certified cardiologists and heart specialists near Sirsa City, Ellenabad, and Rania. Expert cardiac care for all of Sirsa.</p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#consultation-form" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
            <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Emergency: 9466044444</span></a>
          </div>
          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-500 mb-1">15+</div><div class="text-xs text-gray-600">Expert Cardiologists</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">10K+</div><div class="text-xs text-gray-600">Heart Treatments</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-600 mb-1">98%</div><div class="text-xs text-gray-600">Patient Satisfaction</div></div>
          </div>
        </div>
        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Cardiology.jpg" alt="Best Cardiologist in Sirsa" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-red-100 p-3 rounded-xl"><svg class="h-8 w-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
              <div><div class="text-2xl font-bold text-gray-900">NABH</div><div class="text-sm text-gray-600">Accredited</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('UserCheck', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">Board Certified</h3><p class="text-gray-600 text-sm">Expert Cardiologists</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Activity', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">Advanced Diagnostics</h3><p class="text-gray-600 text-sm">Latest Technology</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">10,000+ Treatments</h3><p class="text-gray-600 text-sm">Successful Outcomes</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Clock', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">24/7 Availability</h3><p class="text-gray-600 text-sm">Emergency Care</p></div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Expert Cardiologist in Sirsa</h2>
        <p class="text-lg text-gray-600 mb-6">Looking for the <strong>Best Cardiologist in Sirsa</strong>? Akropolis Super Speciality Hospital has a team of highly experienced cardiologists providing comprehensive cardiac care for patients across Sirsa. Whether you need a routine heart checkup near <strong>Sirsa City</strong> or specialized cardiac treatment near <strong>Ellenabad</strong>, our expert cardiologists are here to help.</p>
        <p class="text-lg text-gray-600 mb-6">Our cardiology department is equipped with state-of-the-art diagnostic facilities including digital Cath Lab, ECG, 2D Echocardiography, Stress Test, and Holter monitoring. We offer treatments for all heart conditions, making us the preferred choice for residents of Sirsa and surrounding areas like Rania.</p>
        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('MapPin', 'h-5 w-5 text-red-500'); ?><span>Serving Near Sirsa</span></h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Sirsa City</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Ellenabad</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">Rania</span></li>
            </ul>
          </div>
          <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-lg">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('Heart', 'h-5 w-5 text-red-500'); ?><span>Conditions We Treat</span></h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Chest Pain & Heart Attack</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Heart Blockages & Failure</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Arrhythmia (Irregular Heartbeat)</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>High Blood Pressure</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-4 w-4 text-red-500'); ?><span>Coronary Artery Disease</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Meet Our Expert Cardiologists</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center"><span class="text-2xl font-bold text-red-600">DR</span></div>
              <div><h3 class="font-bold text-gray-900">Dr. Rajesh Kumar</h3><p class="text-sm text-red-600">Chief Cardiologist</p></div>
            </div>
            <p class="text-gray-600 text-sm mb-4">15+ years experience in interventional cardiology and complex heart procedures.</p>
            <div class="flex items-center space-x-1 text-sm text-gray-500"><span class="bg-green-100 text-green-700 px-2 py-1 rounded">Available</span></div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center"><span class="text-2xl font-bold text-red-600">DR</span></div>
              <div><h3 class="font-bold text-gray-900">Dr. Priya Sharma</h3><p class="text-sm text-red-600">Senior Cardiologist</p></div>
            </div>
            <p class="text-gray-600 text-sm mb-4">12+ years experience in non-invasive cardiology and heart failure management.</p>
            <div class="flex items-center space-x-1 text-sm text-gray-500"><span class="bg-green-100 text-green-700 px-2 py-1 rounded">Available</span></div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center"><span class="text-2xl font-bold text-red-600">DR</span></div>
              <div><h3 class="font-bold text-gray-900">Dr. Amit Singh</h3><p class="text-sm text-red-600">Associate Cardiologist</p></div>
            </div>
            <p class="text-gray-600 text-sm mb-4">8+ years experience in electrophysiology and cardiac rhythm disorders.</p>
            <div class="flex items-center space-x-1 text-sm text-gray-500"><span class="bg-green-100 text-green-700 px-2 py-1 rounded">Available</span></div>
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
          <h3 class="text-2xl font-bold text-red-900">Heart Attack Warning Signs</h3>
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

  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
          <p class="text-gray-600">For patients from Sirsa</p>
        </div>
        <div class="space-y-4">
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(0)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Who is the best cardiologist in Sirsa?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-0" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Akropolis Super Speciality Hospital has some of the best cardiologists in Sirsa, with 15+ years of combined experience in treating all heart conditions. Our team is NABH accredited and available 24/7 for emergencies.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(1)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How far is Akropolis Hospital from Sirsa City?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-1" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Our hospital is conveniently located and easily accessible from Sirsa City, Ellenabad, and all parts of Sirsa. We offer free parking and ambulance services for emergency cases.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(2)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you provide heart bypass surgery?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-2" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, our expert cardiologists perform heart bypass surgery, angioplasty, and stent placement using advanced techniques for faster recovery and better outcomes.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(3)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Are heart checkup packages available?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-3" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">We offer comprehensive heart checkup packages for early detection and prevention. Contact us to book your cardiac evaluation at our hospital near Sirsa.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(4)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How can I book an appointment with a cardiologist?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-4" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">You can book an appointment by calling 9466044444, using our online form, or walking in. Our cardiology team is available for consultations in Sirsa area.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(5)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you accept insurance for cardiac treatments?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-5" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we accept all major insurance providers and have TPA partnerships. Patients from Sirsa can avail cashless treatment at our hospital.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="flex items-center space-x-3 mb-12">
          <div class="bg-red-100 p-2 rounded-lg"><?php echo getIcon('MapPin', 'h-6 w-6 text-red-500'); ?></div>
          <h2 class="text-3xl font-bold text-gray-900">Cardiologists in Other Districts</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">          <div class="group"><a href="/cardiologist/haryana/ambala/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Ambala</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/bhiwani/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Bhiwani</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/charkhi-dadri/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Charkhi Dadri</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/faridabad/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Faridabad</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/fatehabad/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Fatehabad</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/gurgaon/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Gurgaon</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/hisar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Hisar</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/jhajjar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Jhajjar</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/jind/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Jind</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/kaithal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Kaithal</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/karnal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Karnal</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/kurukshetra/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Kurukshetra</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/mahendragarh/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Mahendragarh</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/mewat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Mewat</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/palwal/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Palwal</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/panchkula/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Panchkula</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/panipat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Panipat</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/rewari/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Rewari</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/rohtak/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Rohtak</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/sonipat/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Sonipat</span></a></div>
          <div class="group"><a href="/cardiologist/haryana/yamunanagar/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Cardiologist in Yamunanagar</span></a></div>
        </div>
      </div>
    </div>
  </section>

  <section id="consultation-form" class="py-20 bg-red-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-red-500">Cardiac Consultation</span></h2>
          <p class="text-gray-600 text-lg">Fill out the form below and we will contact you to schedule your appointment with our cardiologist.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500" placeholder="Enter your phone number" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Message</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 resize-none" placeholder="Describe your heart health concern..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto shadow-lg"><?php echo getIcon('Send', 'h-5 w-5'); ?><span>Book Consultation</span></button></div>
            <div class="text-center"><p class="text-sm text-gray-500">For emergencies, please call <a href="tel:9466044444" class="text-red-500 font-semibold hover:underline">9466044444</a></p></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Looking for a Cardiologist Near Sirsa City?</h2>
        <p class="text-xl text-red-100 mb-12">Book an appointment with our expert cardiologists today. Serving Sirsa and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#consultation-form" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: 9466044444</span></a>
        </div>
      </div>
    </div>
  </section>

  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Cardiology", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Haryana"}, {"@type": "ListItem", "position": 4, "name": "Sirsa"}]}
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