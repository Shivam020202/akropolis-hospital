<?php
/**
 * Heart Care District Pages Generator
 * Creates all 23 Haryana district pages with FULL inline code
 */

$districts = [
    'ambala' => ['display' => 'Ambala', 'landmarks' => ['Ambala Cantt', 'Jagadhari', 'Naraingarh']],
    'bhiwani' => ['display' => 'Bhiwani', 'landmarks' => ['Bhiwani City', 'Tosham', 'Loharu']],
    'charkhi-dadri' => ['display' => 'Charkhi Dadri', 'landmarks' => ['Charkhi Dadri', 'Bahal', 'Jhojhu']],
    'faridabad' => ['display' => 'Faridabad', 'landmarks' => ['Sector 15', 'Ballabhgarh', 'Palwal']],
    'fatehabad' => ['display' => 'Fatehabad', 'landmarks' => ['Fatehabad City', 'Tohana', 'Ratia']],
    'gurgaon' => ['display' => 'Gurgaon', 'landmarks' => ['Sector 56', 'Cyber Hub', 'MG Road']],
    'hisar' => ['display' => 'Hisar', 'landmarks' => ['Hisar City', 'Agricultural University', 'Camp']],
    'jhajjar' => ['display' => 'Jhajjar', 'landmarks' => ['Jhajjar City', 'Bahadurgarh', 'Kosli']],
    'jind' => ['display' => 'Jind', 'landmarks' => ['Jind City', 'Narwana', 'Uklana']],
    'kaithal' => ['display' => 'Kaithal', 'landmarks' => ['Kaithal City', 'Pundri', 'Rajond']],
    'karnal' => ['display' => 'Karnal', 'landmarks' => ['Karnal City', 'Nilokheri', 'Indri']],
    'kurukshetra' => ['display' => 'Kurukshetra', 'landmarks' => ['Kurukshetra City', 'Pehowa', 'Shahabad']],
    'mahendragarh' => ['display' => 'Mahendragarh', 'landmarks' => ['Narnaul', 'Mahendragarh', 'Kanina']],
    'mewat' => ['display' => 'Mewat', 'landmarks' => ['Nuh', 'Firozpur Jhirka', 'Taoru']],
    'palwal' => ['display' => 'Palwal', 'landmarks' => ['Palwal City', 'Hassanpur', 'Hodel']],
    'panchkula' => ['display' => 'Panchkula', 'landmarks' => ['Sector 21', 'Panchkula', 'Morni']],
    'panipat' => ['display' => 'Panipat', 'landmarks' => ['Panipat City', 'Israna', 'Samalkha']],
    'rewari' => ['display' => 'Rewari', 'landmarks' => ['Rewari City', 'Bawal', 'Kosli']],
    'rohtak' => ['display' => 'Rohtak', 'landmarks' => ['Rohtak City', 'Meham', 'Sampla']],
    'sirsa' => ['display' => 'Sirsa', 'landmarks' => ['Sirsa City', 'Ellenabad', 'Rania']],
    'sonipat' => ['display' => 'Sonipat', 'landmarks' => ['Sonipat City', 'Gohana', 'Kharkhoda']],
    'yamunanagar' => ['display' => 'Yamunanagar', 'landmarks' => ['Yamunanagar', 'Jagadhri', 'Chhachhrauli']]
];

$baseDir = __DIR__;
$haryanaDir = $baseDir . '/heart-care/haryana';
if (!is_dir($haryanaDir)) mkdir($haryanaDir, 0755, true);

$emergency = '9466044444';
$phone = '9466044444';
$email = 'info@akropolishospital.com';

foreach ($districts as $slug => $data) {
    $districtDir = $haryanaDir . '/' . $slug;
    if (!is_dir($districtDir)) mkdir($districtDir, 0755, true);

    $display = $data['display'];
    $targetKeyword = "Best Heart Hospital in $display";
    $metaTitle = "$targetKeyword | Akropolis Hospital";
    $metaDesc = "Akropolis Super Speciality Hospital is the $targetKeyword. Expert cardiologists, advanced cardiac treatments, and 24/7 emergency heart care near " . implode(', ', $data['landmarks']) . ". NABH accredited.";
    $l0 = $data['landmarks'][0];
    $l1 = $data['landmarks'][1];
    $l2 = $data['landmarks'][2];

    $page = <<<PHP
<?php
require_once '{$baseDir}/includes/data.php';
\$page_title = '$metaTitle';
\$page_description = '$metaDesc';
include '{$baseDir}/includes/head.php';
include '{$baseDir}/includes/header-v2.php';
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
          <li class="text-[#328CCB] font-medium">$display</li>
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
            <span>NABH Accredited Heart Hospital Near $l0</span>
          </div>
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">$targetKeyword</h1>
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">Expert cardiologists and advanced cardiac treatments near $l0, $l1, and $l2. Comprehensive heart care for all of $display.</p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#consultation-form" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Heart Checkup</span></a>
            <a href="tel:$emergency" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Emergency: $emergency</span></a>
          </div>
          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-500 mb-1">10K+</div><div class="text-xs text-gray-600">Heart Surgeries</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">15+</div><div class="text-xs text-gray-600">Expert Cardiologists</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-600 mb-1">98%</div><div class="text-xs text-gray-600">Success Rate</div></div>
          </div>
        </div>
        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Cardiology.jpg" alt="$targetKeyword" class="w-full h-[400px] lg:h-[450px] object-cover" />
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
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Comprehensive Heart Care in $display</h2>
        <p class="text-lg text-gray-600 mb-6">Akropolis Super Speciality Hospital is recognized as the <strong>$targetKeyword</strong>, providing specialized cardiac care for patients across $display. Whether you are seeking a heart checkup near <strong>$l0</strong> or looking for advanced cardiac surgery near <strong>$l1</strong>, our team of experienced cardiologists is here to help.</p>
        <p class="text-lg text-gray-600 mb-6">Our state-of-the-art cardiac center is equipped with the latest diagnostic technology including digital Cath Lab, ECG, Echocardiography, and Holter monitoring. We specialize in complex heart procedures, making us the preferred choice for residents of $display and surrounding areas like $l2.</p>
        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('MapPin', 'h-5 w-5 text-red-500'); ?><span>Serving Near $display</span></h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">$l0</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">$l1</span></li>
              <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700">$l2</span></li>
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
          <p class="text-red-900 font-semibold">If you experience these symptoms, call <a href="tel:$emergency" class="underline">$emergency</a> immediately. Every minute counts!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
          <p class="text-gray-600">For patients from $display</p>
        </div>
        <div class="space-y-4">
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(0)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Which is the best heart hospital in $display?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-0" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Akropolis Super Speciality Hospital is widely regarded as the best heart hospital in $display, offering advanced cardiac treatments with NABH accreditation and 24/7 emergency cardiac care.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(1)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How far is Akropolis Hospital from $l0?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-1" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Our hospital is conveniently located and easily accessible from $l0 and $l1. We serve patients from all parts of $display with free parking facilities.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(2)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you offer heart bypass surgery?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-2" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we provide state-of-the-art heart bypass and angioplasty surgeries for higher precision and faster recovery. This facility is available for all patients from $display.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(3)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Are heart checkup packages available?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-3" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Our cardiology team provides comprehensive heart checkup packages for early detection and prevention. We serve patients from $display and nearby areas.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(4)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How can I book an appointment?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-4" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">You can book an appointment by calling $phone or using our online booking system. Walk-ins are also welcome from $display.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(5)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you accept insurance for cardiac treatments?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-5" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we accept all major insurance providers and have TPA partnerships. Patients from $display can avail cashless treatment at our hospital.</div>
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">
PHP;

    // Add other districts links
    $allDistricts = [
        'ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri',
        'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon',
        'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal',
        'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh',
        'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat',
        'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat',
        'yamunanagar' => 'Yamunanagar'
    ];
    foreach ($allDistricts as $dSlug => $dName) {
        if ($dSlug !== $slug) {
            $page .= "          <div class=\"group\"><a href=\"/heart-care/haryana/$dSlug/\" class=\"flex items-center space-x-3 text-gray-600 hover:text-red-500\"><div class=\"h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500\"></div><span class=\"font-medium\">Best Heart Hospital in $dName</span></a></div>\n";
        }
    }

    $page .= <<<PHP
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
            <div class="text-center"><p class="text-sm text-gray-500">For emergencies, please call <a href="tel:$emergency" class="text-red-500 font-semibold hover:underline">$emergency</a></p></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Looking for the Best Heart Hospital Near $l0?</h2>
        <p class="text-xl text-red-100 mb-12">Book an appointment with our cardiac experts today. Serving $display and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#consultation-form" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:$phone" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: $phone</span></a>
        </div>
      </div>
    </div>
  </section>

  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Heart Care", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Haryana"}, {"@type": "ListItem", "position": 4, "name": "$display"}]}
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

<?php include '{$baseDir}/includes/footer.php'; include '{$baseDir}/includes/scripts.php'; ?>
PHP;

    file_put_contents($districtDir . '/index.php', $page);
    echo "Created: heart-care/haryana/$slug/index.php\n";
}

echo "\nAll " . count($districts) . " district pages created with FULL inline code!\n";