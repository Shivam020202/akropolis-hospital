<?php
/**
 * Neurologist District Page Template - Local SEO Optimized
 */

$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "Best Neurologist in $district_display";
$meta_title = "$target_keyword | Akropolis Hospital";
$meta_description = "Expert neurologist consultation in $district_display at Akropolis Super Speciality Hospital. Advanced neurology treatment for stroke, epilepsy, and neurological disorders near " . implode(', ', $landmarks) . ". NABH accredited.";

require_once dirname(__DIR__) . '/includes/data.php';
$page_title = $meta_title;
$page_description = $meta_description;
include dirname(__DIR__) . '/includes/head.php';
?>

<div class="bg-[#328CCB] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">24x7 Neurology Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
  </div>
</div>

<?php include dirname(__DIR__) . '/includes/header-v2.php'; ?>

<main>
  <!-- Breadcrumbs -->
  <div class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
      <nav class="flex text-sm text-gray-500">
        <ol class="flex items-center space-x-2">
          <li><a href="/" class="hover:text-[#328CCB]">Home</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/neurology" class="hover:text-[#328CCB]">Neurology</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/neurologist/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section relative bg-gradient-to-br from-blue-50 via-white to-cyan-50 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="container mx-auto px-4 pt-16 pb-24 lg:pt-24 lg:pb-28 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left">
          <div class="inline-flex items-center space-x-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Brain', 'h-4 w-4'); ?>
            <span>Expert Neurologist Near <?php echo $landmarks[0]; ?></span>
          </div>

          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6"><?php echo $target_keyword; ?></h1>

          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            Consult top neurologists near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>. Advanced treatment for stroke, epilepsy, migraine, and all neurological conditions for patients from <?php echo $district_display; ?>.
          </p>

          <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-blue-500 rounded-full"></div><span>Stroke Specialist</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-[#328CCB] rounded-full"></div><span>Epilepsy Treatment</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-blue-600 rounded-full"></div><span>24/7 Emergency</span></div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#appointment-form" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Consultation</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#328CCB] hover:bg-[#287bb5] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-blue-500 mb-1">5000+</div><div class="text-xs text-gray-600">Brain Surgeries</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#328CCB] mb-1">12+</div><div class="text-xs text-gray-600">Expert Neurologists</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-blue-600 mb-1">97%</div><div class="text-xs text-gray-600">Success Rate</div></div>
          </div>
        </div>

        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Neurology.jpg" alt="<?php echo $target_keyword; ?>" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-blue-100 p-3 rounded-xl"><?php echo getIcon('Clock', 'h-8 w-8 text-blue-500'); ?></div>
              <div><div class="text-2xl font-bold text-gray-900">24/7</div><div class="text-sm text-gray-600">Neuro Emergency</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Conditions We Treat -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Neurological Conditions We Treat</h2>
        <p class="text-gray-600">Expert care for patients from <?php echo $district_display; ?></p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Zap', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Stroke</p>
          <p class="text-sm text-gray-600">Emergency stroke treatment and rehabilitation</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Activity', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Epilepsy</p>
          <p class="text-sm text-gray-600">Seizure management and treatment</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Headphones', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Migraine</p>
          <p class="text-sm text-gray-600">Chronic headache treatment</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Brain', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Parkinson's</p>
          <p class="text-sm text-gray-600">Movement disorder management</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('User', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Paralysis</p>
          <p class="text-sm text-gray-600">Stroke recovery and paralysis treatment</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('AlertCircle', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Spinal Issues</p>
          <p class="text-sm text-gray-600">Back pain and spine disorders</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Eye', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Brain Tumors</p>
          <p class="text-sm text-gray-600">Surgical and non-surgical treatment</p>
        </div>
        <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-100">
          <div class="flex justify-center mb-4"><div class="bg-blue-100 p-4 rounded-full"><?php echo getIcon('Thermometer', 'h-8 w-8 text-blue-500'); ?></div></div>
          <p class="text-lg font-bold text-gray-900 mb-2">Nerve Pain</p>
          <p class="text-sm text-gray-600">Neuropathy and nerve damage</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stroke Warning Signs -->
  <section class="py-16 bg-blue-50 border-y border-blue-200">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-10">
          <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Act FAST for Stroke - Know the Warning Signs</h3>
          <p class="text-gray-600">Stroke requires immediate treatment. Call <?php echo CONTACT_INFO['emergency']; ?> if symptoms appear.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-200 text-center">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-blue-600">F</span>
            </div>
            <h3 class="font-bold text-blue-700 mb-2">Face Drooping</h3>
            <p class="text-sm text-gray-600">One side of face is drooping or numb</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-200 text-center">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-blue-600">A</span>
            </div>
            <h3 class="font-bold text-blue-700 mb-2">Arm Weakness</h3>
            <p class="text-sm text-gray-600">One arm is weak or numb</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-200 text-center">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-blue-600">S</span>
            </div>
            <h3 class="font-bold text-blue-700 mb-2">Speech Difficulty</h3>
            <p class="text-sm text-gray-600">Slurred speech or confusion</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-200 text-center">
            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-bold text-blue-600">T</span>
            </div>
            <h3 class="font-bold text-blue-700 mb-2">Time to Call</h3>
            <p class="text-sm text-gray-600">Call emergency immediately</p>
          </div>
        </div>
        <div class="text-center mt-8">
          <p class="text-blue-900 font-semibold text-lg">If you notice any stroke symptoms near <?php echo $landmarks[0]; ?>, call <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline"><?php echo CONTACT_INFO['emergency']; ?></a> immediately!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Neurology Services We Offer</h3>
          <p class="text-gray-600">Comprehensive neurological care for <?php echo $district_display; ?></p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Activity', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">EEG & EMG</h3>
            </div>
            <p class="text-gray-600 text-sm">Advanced neurodiagnostic testing for accurate diagnosis</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Monitor', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">MRI & CT Scan</h3>
            </div>
            <p class="text-gray-600 text-sm">State-of-the-art brain imaging technology</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Pill', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">Medication Therapy</h3>
            </div>
            <p class="text-gray-600 text-sm">Personalized medication management</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Scissors', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">Brain Surgery</h3>
            </div>
            <p class="text-gray-600 text-sm">Advanced neurosurgical procedures</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Heart', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">Stroke Treatment</h3>
            </div>
            <p class="text-gray-600 text-sm">24/7 thrombolysis and stroke care</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6">
            <div class="flex items-center space-x-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg"><?php echo getIcon('Users', 'h-6 w-6 text-blue-500'); ?></div>
              <h3 class="font-bold text-gray-900">Rehabilitation</h3>
            </div>
            <p class="text-gray-600 text-sm">Physical and occupational therapy</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3"><?php echo getIcon('Award', 'h-6 w-6 text-blue-500'); ?><span>Why Choose Akropolis for Neurology?</span></h3>
          <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-2 rounded-lg mt-1"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?></div>
              <div>
                <h4 class="font-bold text-gray-900">NABH Accredited</h4>
                <p class="text-sm text-gray-600">Quality neurological care meeting international standards</p>
              </div>
            </div>
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-2 rounded-lg mt-1"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?></div>
              <div>
                <h4 class="font-bold text-gray-900">Expert Neurologists</h4>
                <p class="text-sm text-gray-600">12+ highly experienced neurology specialists</p>
              </div>
            </div>
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-2 rounded-lg mt-1"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?></div>
              <div>
                <h4 class="font-bold text-gray-900">24/7 Emergency</h4>
                <p class="text-sm text-gray-600">Round-the-clock neuro emergency services</p>
              </div>
            </div>
            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 p-2 rounded-lg mt-1"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?></div>
              <div>
                <h4 class="font-bold text-gray-900">Modern Equipment</h4>
                <p class="text-sm text-gray-600">Latest neurodiagnostic and surgical technology</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h3>
          <p class="text-gray-600">About neurology treatment for patients from <?php echo $district_display; ?></p>
        </div>
        <div class="space-y-4">
          <?php
          $faqs = [
            ["q" => "Which is the best neurologist hospital in $district_display?", "a" => "Akropolis Super Speciality Hospital is the best neurology hospital in $district_display, offering advanced neurological treatments with NABH accreditation and 12+ expert neurologists."],
            ["q" => "When should I see a neurologist?", "a" => "Consult a neurologist if you experience persistent headaches, seizures, numbness, weakness, movement problems, memory issues, or balance problems. Our neurologist near $landmarks[0] can help diagnose and treat these conditions."],
            ["q" => "Do you provide stroke treatment?", "a" => "Yes, we provide 24/7 emergency stroke treatment including thrombolysis and mechanical thrombectomy. Our stroke unit is fully equipped for immediate intervention."],
            ["q" => "How far is Akropolis Hospital from $landmarks[0]?", "a" => "Our hospital is easily accessible from $landmarks[0], $landmarks[1], and all parts of $district_display. We serve patients from across Haryana."],
            ["q" => "Do you treat epilepsy?", "a" => "Yes, our neurologists specialize in epilepsy diagnosis and treatment, including medication management and surgical options for drug-resistant cases."],
            ["q" => "How can I book an appointment?", "a" => "You can book by calling " . CONTACT_INFO['phone'] . " or using our online form. Walk-ins are also welcome for consultation."]
          ];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-100 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo str_replace('$landmarks[0]', $landmarks[0], $faq['q']); ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-blue-500 transition-transform duration-200 faq-icon-' . $index); ?>
              </button>
              <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-white border-t border-gray-100 text-gray-600"><?php echo str_replace('$landmarks[0]', $landmarks[0], $faq['a']); ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Other Locations -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="flex items-center space-x-3 mb-12">
          <div class="bg-blue-100 p-2 rounded-lg"><?php echo getIcon('MapPin', 'h-6 w-6 text-blue-500'); ?></div>
          <h3 class="text-3xl font-bold text-gray-900">Neurologist Available Across Haryana</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">
          <?php
          $allDistricts = ['ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri', 'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon', 'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal', 'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh', 'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat', 'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat', 'yamunanagar' => 'Yamunanagar'];
          foreach ($allDistricts as $slug => $name):
            if ($slug !== $district_name):
          ?>
            <div class="group"><a href="/neurologist/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-blue-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-blue-500"></div><span class="font-medium">Best Neurologist in <?php echo $name; ?></span></a></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Appointment Form -->
  <section id="appointment-form" class="py-20 bg-blue-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-blue-500">Neurology Consultation</span></h3>
          <p class="text-gray-600 text-lg">Fill out the form below to book an appointment with our neurology experts.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your phone number" /></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">City/Area</label><input type="text" name="city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="e.g., <?php echo $landmarks[0]; ?>" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date</label><input type="date" name="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Describe Your Symptoms</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 resize-none" placeholder="Tell us about your neurological concerns..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-gradient-to-r from-blue-500 to-blue-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl lg:text-5xl font-bold mb-6">Need a Neurologist Near <?php echo $landmarks[0]; ?>?</h3>
        <p class="text-xl text-blue-100 mb-12">Our expert neurologists are available 24/7 for consultation and emergency care. Serving <?php echo $district_display; ?> and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#appointment-form" class="bg-white text-blue-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#328CCB] hover:bg-[#287bb5] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: <?php echo CONTACT_INFO['phone']; ?></span></a>
        </div>
      </div>
    </div>
  </section>

  <?php $page_url = "https://akropolishospital.com/neurologist/haryana/$district_name/"; ?>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Neurology", "item": "https://akropolishospital.com/neurology.php"}, {"@type": "ListItem", "position": 3, "name": "Neurologist"}, {"@type": "ListItem", "position": 4, "name": "Haryana"}, {"@type": "ListItem", "position": 5, "name": "<?php echo $district_display; ?>", "item": "<?php echo $page_url; ?>"}]}
  </script>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "Physician", "name": "Neurologist - <?php echo $district_display; ?>", "description": "<?php echo $meta_description; ?>", "telephone": "<?php echo CONTACT_INFO['phone']; ?>", "medicalSpecialty": "Neurology"}
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

<?php include dirname(__DIR__) . '/includes/footer.php'; include dirname(__DIR__) . '/includes/scripts.php'; ?>