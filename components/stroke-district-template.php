<?php
/**
 * Stroke Treatment District Page Template - Local SEO Optimized
 */

$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "Stroke Treatment in $district_display";
$meta_title = "$target_keyword | Akropolis Hospital";
$meta_description = "Expert stroke treatment in $district_display at Akropolis Super Speciality Hospital. 24/7 stroke care, thrombolysis, thrombectomy near " . implode(', ', $landmarks) . ". NABH accredited stroke center.";

require_once dirname(__DIR__) . '/includes/data.php';
$page_title = $meta_title;
$page_description = $meta_description;
include dirname(__DIR__) . '/includes/head.php';
?>

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">Stroke Emergency 24x7: <?php echo CONTACT_INFO['emergency']; ?></span>
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
          <li><a href="/neurology" class="hover:text-[#328CCB]">Stroke Care</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/stroke-treatment/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section relative bg-gradient-to-br from-purple-50 via-white to-indigo-50 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="container mx-auto px-4 pt-16 pb-24 lg:pt-24 lg:pb-28 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left">
          <div class="inline-flex items-center space-x-2 bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Activity', 'h-4 w-4'); ?>
            <span>Advanced Stroke Treatment Near <?php echo $landmarks[0]; ?></span>
          </div>

          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6"><?php echo $target_keyword; ?></h1>

          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            Expert stroke treatment near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>. Our 24/7 stroke team uses advanced thrombolysis and thrombectomy to save lives. Every minute counts in stroke care.
          </p>

          <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-purple-500 rounded-full"></div><span>24/7 Stroke Unit</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-[#D66C43] rounded-full"></div><span>Thrombolysis</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-purple-600 rounded-full"></div><span>Thrombectomy</span></div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#appointment-form" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Consultation</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-purple-500 mb-1">3000+</div><div class="text-xs text-gray-600">Stroke Cases</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">95%</div><div class="text-xs text-gray-600">Success Rate</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-purple-600 mb-1">24/7</div><div class="text-xs text-gray-600">Stroke Unit</div></div>
          </div>
        </div>

        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=600" alt="<?php echo $target_keyword; ?>" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-purple-100 p-3 rounded-xl"><?php echo getIcon('Activity', 'h-8 w-8 text-purple-500'); ?></div>
              <div><div class="text-2xl font-bold text-gray-900">Golden Hour</div><div class="text-sm text-gray-600">Within 4.5 hours</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAST Signs -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Know the FAST Warning Signs of Stroke</h2>
        <p class="text-gray-600">If you notice any of these symptoms in yourself or someone else, call immediately. Time is brain!</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
        <div class="bg-red-50 rounded-2xl p-6 text-center border border-red-200">
          <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold text-red-600">F</div>
          <h3 class="font-bold text-red-700 text-lg mb-2">Face Drooping</h3>
          <p class="text-sm text-gray-600">One side of the face is drooping or numb</p>
        </div>
        <div class="bg-orange-50 rounded-2xl p-6 text-center border border-orange-200">
          <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold text-orange-600">A</div>
          <h3 class="font-bold text-orange-700 text-lg mb-2">Arm Weakness</h3>
          <p class="text-sm text-gray-600">One arm is weak or numb</p>
        </div>
        <div class="bg-yellow-50 rounded-2xl p-6 text-center border border-yellow-200">
          <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold text-yellow-600">S</div>
          <h3 class="font-bold text-yellow-700 text-lg mb-2">Speech Difficulty</h3>
          <p class="text-sm text-gray-600">Slurred speech or confusion</p>
        </div>
        <div class="bg-purple-50 rounded-2xl p-6 text-center border border-purple-200">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold text-purple-600">T</div>
          <h3 class="font-bold text-purple-700 text-lg mb-2">Time to Call</h3>
          <p class="text-sm text-gray-600">Call <?php echo CONTACT_INFO['emergency']; ?> immediately</p>
        </div>
      </div>
      <div class="text-center mt-8">
        <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="inline-flex items-center space-x-2 bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
          <?php echo getIcon('Phone', 'h-5 w-5'); ?>
          <span>Call Stroke Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
        </a>
      </div>
    </div>
  </section>

  <!-- Treatment Types -->
  <section class="py-16 bg-gray-50 border-y border-gray-200">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Advanced Stroke Treatments We Offer</h3>
        <p class="text-gray-600">Comprehensive stroke care for patients from <?php echo $district_display; ?></p>
      </div>
      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
          <div class="flex justify-center mb-6"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Clock', 'h-10 w-10 text-purple-500'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Thrombolysis (Clot-Busting)</h3>
          <p class="text-gray-600 text-center">tPA treatment to dissolve blood clots within 4.5 hours of stroke onset. Quick treatment saves brain tissue.</p>
        </div>
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
          <div class="flex justify-center mb-6"><div class="bg-[#D66C43]/10 p-4 rounded-full"><?php echo getIcon('Target', 'h-10 w-10 text-[#D66C43]'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Thrombectomy</h3>
          <p class="text-gray-600 text-center">Mechanical clot removal for large vessel occlusions. Can be performed up to 24 hours in selected patients.</p>
        </div>
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
          <div class="flex justify-center mb-6"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Shield', 'h-10 w-10 text-purple-500'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">24/7 Stroke Unit</h3>
          <p class="text-gray-600 text-center">Dedicated stroke unit with neurologists, neurosurgeons, and therapists available round the clock.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Why Choose Akropolis for Stroke Treatment?</h3>
          <p class="text-gray-600">Trusted stroke care for patients from <?php echo $district_display; ?> and all of Haryana</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Clock', 'h-8 w-8 text-purple-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Golden Hour Care</p>
            <p class="text-sm text-gray-600">Door-to-needle time under 60 minutes</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Users', 'h-8 w-8 text-purple-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Expert Team</p>
            <p class="text-sm text-gray-600">Neurologists, neurosurgeons, and therapists</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Activity', 'h-8 w-8 text-purple-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Advanced Equipment</p>
            <p class="text-sm text-gray-600">Biplane cath lab and neuro imaging</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-purple-100 p-4 rounded-full"><?php echo getIcon('Heart', 'h-8 w-8 text-purple-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Complete Care</p>
            <p class="text-sm text-gray-600">Rehabilitation and follow-up included</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Serving Areas -->
  <section class="py-16 bg-purple-50 border-y border-purple-200">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-6 w-6 text-purple-500'); ?><span>Serving Near <?php echo $district_display; ?></span></h3>
          <div class="grid md:grid-cols-2 gap-4">
            <ul class="space-y-3">
              <?php foreach ($landmarks as $landmark): ?>
                <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?><span class="text-gray-700"><?php echo $landmark; ?></span></li>
              <?php endforeach; ?>
            </ul>
            <div class="bg-purple-50 rounded-xl p-6">
              <h4 class="font-bold text-purple-700 mb-3">Quick Access From:</h4>
              <p class="text-gray-600">Patients from <?php echo $district_display; ?>, including those near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>, can easily reach our hospital for expert stroke treatment.</p>
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
          <p class="text-gray-600">About stroke treatment for patients from <?php echo $district_display; ?></p>
        </div>
        <div class="space-y-4">
          <?php
          $faqs = [
            ["q" => "What is the 'golden hour' in stroke treatment?", "a" => "The golden hour is the first 4.5 hours after a stroke starts. During this time, clot-busting medication (tPA) can be given to restore blood flow and save brain tissue. Every minute counts!"],
            ["q" => "How is thrombolysis performed?", "a" => "Thrombolysis is a minimally invasive procedure where clot-busting medication is injected through an IV to dissolve the blood clot causing the stroke. It must be given within 4.5 hours of symptom onset."],
            ["q" => "What is mechanical thrombectomy?", "a" => "Mechanical thrombectomy is a procedure where a catheter is used to physically remove a blood clot from a large brain artery. It can be performed up to 24 hours after stroke onset in selected patients."],
            ["q" => "How do I know if someone is having a stroke?", "a" => "Remember FAST: Face drooping, Arm weakness, Speech difficulty, Time to call. If you notice any of these symptoms, call <?php echo CONTACT_INFO['emergency']; ?> immediately."],
            ["q" => "How far is Akropolis Hospital from <?php echo $landmarks[0]; ?>?", "a" => "Our hospital is easily accessible from <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and all parts of <?php echo $district_display; ?>. We provide guidance for quick transport to our stroke unit."],
            ["q" => "Do you accept insurance for stroke treatment?", "a" => "Yes, we accept all major insurance providers and offer cashless treatment facilities for stroke patients from <?php echo $district_display; ?>."]
          ];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-100 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo $faq['q']; ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-purple-500 transition-transform duration-200 faq-icon-' . $index); ?>
              </button>
              <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-white border-t border-gray-100 text-gray-600"><?php echo $faq['a']; ?></div>
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
          <div class="bg-purple-100 p-2 rounded-lg"><?php echo getIcon('MapPin', 'h-6 w-6 text-purple-500'); ?></div>
          <h3 class="text-3xl font-bold text-gray-900">Stroke Treatment Across Haryana</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">
          <?php
          $allDistricts = ['ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri', 'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon', 'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal', 'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh', 'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat', 'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat', 'yamunanagar' => 'Yamunanagar'];
          foreach ($allDistricts as $slug => $name):
            if ($slug !== $district_name):
          ?>
            <div class="group"><a href="/stroke-treatment/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-purple-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-purple-500"></div><span class="font-medium">Stroke Treatment in <?php echo $name; ?></span></a></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Appointment Form -->
  <section id="appointment-form" class="py-20 bg-purple-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-purple-500">Stroke Consultation</span></h3>
          <p class="text-gray-600 text-lg">Fill out the form below to book an appointment with our stroke specialists.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500" placeholder="Enter your phone number" /></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">City/Area</label><input type="text" name="city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500" placeholder="e.g., <?php echo $landmarks[0]; ?>" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date</label><input type="date" name="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Describe Your Symptoms or Concerns</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 resize-none" placeholder="Tell us about your stroke-related concerns..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-gradient-to-r from-purple-500 to-purple-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl lg:text-5xl font-bold mb-6">Need Stroke Treatment Near <?php echo $landmarks[0]; ?>?</h3>
        <p class="text-xl text-purple-100 mb-12">Our expert stroke team is available 24/7 for consultation and emergency care. Serving <?php echo $district_display; ?> and all of Haryana. Remember: Time is Brain!</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#appointment-form" class="bg-white text-purple-600 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: <?php echo CONTACT_INFO['phone']; ?></span></a>
        </div>
      </div>
    </div>
  </section>

  <?php $page_url = "https://akropolishospital.com/stroke-treatment/haryana/$district_name/"; ?>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Neurology", "item": "https://akropolishospital.com/neurology.php"}, {"@type": "ListItem", "position": 3, "name": "Stroke Treatment", "item": "https://akropolishospital.com/stroke-treatment/"}, {"@type": "ListItem", "position": 4, "name": "Haryana"}, {"@type": "ListItem", "position": 5, "name": "<?php echo $district_display; ?>", "item": "<?php echo $page_url; ?>"}]}
  </script>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "MedicalProcedure", "name": "Stroke Treatment - <?php echo $district_display; ?>", "description": "<?php echo $meta_description; ?>", "procedureType": "Surgical", "url": "<?php echo $page_url; ?>"}
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