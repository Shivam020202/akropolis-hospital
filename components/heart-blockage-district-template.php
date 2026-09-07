<?php
/**
 * Heart Blockage Treatment District Page Template - Local SEO Optimized
 */

$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "Heart Blockage Treatment in $district_display";
$meta_title = "$target_keyword | Akropolis Hospital";
$meta_description = "Expert heart blockage treatment in $district_display at Akropolis Super Speciality Hospital. Advanced angioplasty, stenting, and bypass surgery near " . implode(', ', $landmarks) . ". NABH accredited cardiac center.";

require_once dirname(__DIR__) . '/includes/data.php';
$page_title = $meta_title;
$page_description = $meta_description;
include dirname(__DIR__) . '/includes/head.php';
?>

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">Emergency Cardiology 24x7: <?php echo CONTACT_INFO['emergency']; ?></span>
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
          <li><a href="/cardiology" class="hover:text-[#328CCB]">Heart Care</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/heart-blockage-treatment/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section relative bg-gradient-to-br from-red-50 via-white to-pink-50 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="container mx-auto px-4 pt-16 pb-24 lg:pt-24 lg:pb-28 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left">
          <div class="inline-flex items-center space-x-2 bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Heart', 'h-4 w-4'); ?>
            <span>Advanced Heart Blockage Treatment Near <?php echo $landmarks[0]; ?></span>
          </div>

          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6"><?php echo $target_keyword; ?></h1>

          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            State-of-the-art heart blockage treatment near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>. Expert cardiologists, advanced angioplasty, and bypass surgery for patients from <?php echo $district_display; ?>.
          </p>

          <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-red-500 rounded-full"></div><span>Angioplasty & Stenting</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-[#D66C43] rounded-full"></div><span>Heart Bypass Surgery</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-red-600 rounded-full"></div><span>24/7 Cath Lab</span></div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#appointment-form" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Consultation</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-500 mb-1">5000+</div><div class="text-xs text-gray-600">Angioplasties</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">98%</div><div class="text-xs text-gray-600">Success Rate</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-600 mb-1">15+</div><div class="text-xs text-gray-600">Expert Cardiologists</div></div>
          </div>
        </div>

        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Cardiology.jpg" alt="<?php echo $target_keyword; ?>" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-red-100 p-3 rounded-xl"><?php echo getIcon('Activity', 'h-8 w-8 text-red-500'); ?></div>
              <div><div class="text-2xl font-bold text-gray-900">24/7</div><div class="text-sm text-gray-600">Cath Lab</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Treatment Types -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Heart Blockage Treatments We Offer</h2>
        <p class="text-gray-600">Comprehensive cardiac care for patients from <?php echo $district_display; ?></p>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-red-50 rounded-2xl p-8 border border-red-100">
          <div class="flex justify-center mb-6"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Heart', 'h-10 w-10 text-red-500'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Angioplasty & Stenting</h3>
          <p class="text-gray-600 text-center">Non-surgical procedure to open blocked arteries using balloons and stents. Minimally invasive with quick recovery.</p>
        </div>
        <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
          <div class="flex justify-center mb-6"><div class="bg-[#D66C43]/10 p-4 rounded-full"><?php echo getIcon('Activity', 'h-10 w-10 text-[#D66C43]'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Heart Bypass Surgery</h3>
          <p class="text-gray-600 text-center">CABG surgery to create new pathways for blood flow around blocked arteries. Performed by expert cardiac surgeons.</p>
        </div>
        <div class="bg-red-50 rounded-2xl p-8 border border-red-100">
          <div class="flex justify-center mb-6"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Clock', 'h-10 w-10 text-red-500'); ?></div></div>
          <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">24/7 Emergency Care</h3>
          <p class="text-gray-600 text-center">Round-the-clock emergency cardiac care for heart attacks and blockages. Every minute counts in cardiac emergencies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Signs of Heart Blockage -->
  <section class="py-16 bg-red-50 border-y border-red-200">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-10">
          <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Warning Signs of Heart Blockage</h3>
          <p class="text-gray-600">Recognize these symptoms and seek immediate medical attention near <?php echo $landmarks[0]; ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl p-6 shadow-sm border border-red-200 text-center">
            <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"><?php echo getIcon('AlertCircle', 'h-8 w-8 text-red-500'); ?></div>
            <h3 class="font-bold text-red-700 mb-2">Chest Pain</h3>
            <p class="text-sm text-gray-600">Pressure, squeezing, or heaviness in chest</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-red-200 text-center">
            <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"><?php echo getIcon('Wind', 'h-8 w-8 text-red-500'); ?></div>
            <h3 class="font-bold text-red-700 mb-2">Shortness of Breath</h3>
            <p class="text-sm text-gray-600">Difficulty breathing during activity or rest</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-red-200 text-center">
            <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"><?php echo getIcon('Zap', 'h-8 w-8 text-red-500'); ?></div>
            <h3 class="font-bold text-red-700 mb-2">Arm/Neck Pain</h3>
            <p class="text-sm text-gray-600">Pain radiating to left arm, shoulder, or jaw</p>
          </div>
          <div class="bg-white rounded-xl p-6 shadow-sm border border-red-200 text-center">
            <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div>
            <h3 class="font-bold text-red-700 mb-2">Fatigue</h3>
            <p class="text-sm text-gray-600">Unusual tiredness, especially in women</p>
          </div>
        </div>
        <div class="text-center mt-8">
          <p class="text-red-900 font-semibold text-lg">If you experience these symptoms, call <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline"><?php echo CONTACT_INFO['emergency']; ?></a> immediately!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Why Choose Akropolis for Heart Blockage Treatment?</h3>
          <p class="text-gray-600">Trusted cardiac care for patients from <?php echo $district_display; ?> and all of Haryana</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Award', 'h-8 w-8 text-red-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">NABH Accredited</p>
            <p class="text-sm text-gray-600">Quality cardiac care meeting international standards</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Activity', 'h-8 w-8 text-red-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Advanced Cath Lab</p>
            <p class="text-sm text-gray-600">State-of-the-art digital cath lab 24/7</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Users', 'h-8 w-8 text-red-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">Expert Team</p>
            <p class="text-sm text-gray-600">15+ experienced interventional cardiologists</p>
          </div>
          <div class="bg-gray-50 rounded-xl p-6 text-center">
            <div class="flex justify-center mb-4"><div class="bg-red-100 p-4 rounded-full"><?php echo getIcon('Shield', 'h-8 w-8 text-red-500'); ?></div></div>
            <p class="text-lg font-bold text-gray-900 mb-2">High Success Rate</p>
            <p class="text-sm text-gray-600">98% success rate in cardiac procedures</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Serving Areas -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-6 w-6 text-red-500'); ?><span>Serving Near <?php echo $district_display; ?></span></h3>
          <div class="grid md:grid-cols-2 gap-4">
            <ul class="space-y-3">
              <?php foreach ($landmarks as $landmark): ?>
                <li class="flex items-center space-x-3"><?php echo getIcon('CheckCircle', 'h-5 w-5 text-green-500'); ?><span class="text-gray-700"><?php echo $landmark; ?></span></li>
              <?php endforeach; ?>
            </ul>
            <div class="bg-red-50 rounded-xl p-6">
              <h4 class="font-bold text-red-700 mb-3">Quick Access From:</h4>
              <p class="text-gray-600">Patients from <?php echo $district_display; ?>, including those near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>, can easily reach our hospital for expert heart blockage treatment.</p>
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
          <p class="text-gray-600">About heart blockage treatment for patients from <?php echo $district_display; ?></p>
        </div>
        <div class="space-y-4">
          <?php
          $faqs = [
            ["q" => "What is heart blockage treatment?", "a" => "Heart blockage treatment includes medications, angioplasty with stenting, and bypass surgery to restore normal blood flow to the heart. At Akropolis Hospital, we offer all treatment options based on the severity of your condition."],
            ["q" => "How is angioplasty performed?", "a" => "Angioplasty is a minimally invasive procedure where a thin catheter is inserted through the groin or wrist, guided to the blocked artery, and a balloon is used to open the blockage. A stent is often placed to keep the artery open."],
            ["q" => "Is heart bypass surgery safe?", "a" => "Yes, heart bypass surgery (CABG) is a safe and established procedure. Our expert cardiac surgeons have performed thousands of successful bypass surgeries with a 98% success rate."],
            ["q" => "How do I know if I need heart blockage treatment?", "a" => "Symptoms like chest pain, shortness of breath, fatigue, and pain in arms/jaw may indicate heart blockage. Our cardiologists near $landmarks[0] will conduct tests like angiography to determine the appropriate treatment."],
            ["q" => "How far is Akropolis Hospital from $landmarks[0]?", "a" => "Our hospital is easily accessible from $landmarks[0], $landmarks[1], and all parts of $district_display. We provide transportation assistance for patients needing cardiac care."],
            ["q" => "Do you accept insurance for heart treatment?", "a" => "Yes, we accept all major insurance providers and offer cashless treatment facilities for patients from $district_display."]
          ];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-100 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo str_replace('$landmarks[0]', $landmarks[0], $faq['q']); ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-' . $index); ?>
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
          <div class="bg-red-100 p-2 rounded-lg"><?php echo getIcon('MapPin', 'h-6 w-6 text-red-500'); ?></div>
          <h3 class="text-3xl font-bold text-gray-900">Heart Blockage Treatment Across Haryana</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">
          <?php
          $allDistricts = ['ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri', 'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon', 'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal', 'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh', 'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat', 'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat', 'yamunanagar' => 'Yamunanagar'];
          foreach ($allDistricts as $slug => $name):
            if ($slug !== $district_name):
          ?>
            <div class="group"><a href="/heart-blockage-treatment/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Heart Blockage Treatment in <?php echo $name; ?></span></a></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Appointment Form -->
  <section id="appointment-form" class="py-20 bg-red-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-red-500">Heart Consultation</span></h3>
          <p class="text-gray-600 text-lg">Fill out the form below to book an appointment with our cardiac experts.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" placeholder="Enter your phone number" /></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">City/Area</label><input type="text" name="city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" placeholder="e.g., <?php echo $landmarks[0]; ?>" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Date</label><input type="date" name="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Describe Your Symptoms</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 resize-none" placeholder="Tell us about your heart health concerns..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl lg:text-5xl font-bold mb-6">Need Heart Blockage Treatment Near <?php echo $landmarks[0]; ?>?</h3>
        <p class="text-xl text-red-100 mb-12">Our expert cardiologists are available 24/7 for consultation and emergency care. Serving <?php echo $district_display; ?> and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#appointment-form" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: <?php echo CONTACT_INFO['phone']; ?></span></a>
        </div>
      </div>
    </div>
  </section>

  <?php $page_url = "https://akropolishospital.com/heart-blockage-treatment/haryana/$district_name/"; ?>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Heart Care", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Heart Blockage Treatment", "item": "https://akropolishospital.com/heart-blockage-treatment/"}, {"@type": "ListItem", "position": 4, "name": "Haryana"}, {"@type": "ListItem", "position": 5, "name": "<?php echo $district_display; ?>", "item": "<?php echo $page_url; ?>"}]}
  </script>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "MedicalProcedure", "name": "Heart Blockage Treatment - <?php echo $district_display; ?>", "description": "<?php echo $meta_description; ?>", "procedureType": "Surgical", "url": "<?php echo $page_url; ?>"}
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