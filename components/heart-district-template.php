<?php
/**
 * Heart Care District Page Template - Local SEO Optimized
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "Best Heart Hospital in $district_display";
$meta_title = "$target_keyword | Akropolis Hospital";
$meta_description = "Akropolis Super Speciality Hospital is the $target_keyword. Expert cardiologists, advanced cardiac treatments, and 24/7 emergency heart care near " . implode(', ', $landmarks) . ". NABH accredited.";

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
          <li><a href="/heart-care/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
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
            <span>NABH Accredited Heart Hospital Near <?php echo $landmarks[0]; ?></span>
          </div>

          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6"><?php echo $target_keyword; ?></h1>

          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            Expert cardiologists and advanced cardiac treatments near <?php echo $landmarks[0]; ?>, <?php echo $landmarks[1]; ?>, and <?php echo $landmarks[2]; ?>. Comprehensive heart care for all of <?php echo $district_display; ?>.
          </p>

          <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-red-500 rounded-full"></div><span>20+ Years Experience</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-[#D66C43] rounded-full"></div><span>10,000+ Heart Surgeries</span></div>
            <div class="flex items-center space-x-2 text-gray-700"><div class="w-2 h-2 bg-red-600 rounded-full"></div><span>24/7 Cath Lab</span></div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="#consultation-form" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Heart Checkup</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-500 mb-1">10K+</div><div class="text-xs text-gray-600">Heart Surgeries</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">15+</div><div class="text-xs text-gray-600">Expert Cardiologists</div></div>
            <div class="text-center"><div class="text-2xl lg:text-3xl font-bold text-red-600 mb-1">98%</div><div class="text-xs text-gray-600">Success Rate</div></div>
          </div>
        </div>

        <div class="relative">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Cardiology.jpg" alt="<?php echo $target_keyword; ?>" class="w-full h-[400px] lg:h-[450px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100">
            <div class="flex items-center space-x-4">
              <div class="bg-red-100 p-3 rounded-xl"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div>
              <div><div class="text-2xl font-bold text-gray-900">24/7</div><div class="text-sm text-gray-600">Cardiac Emergency</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Signals -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="trust-card bg-white rounded-xl p-6 text-center shadow-lg"><div class="flex justify-center mb-4"><div class="bg-red-100 p-3 rounded-full"><?php echo getIcon('Award', 'h-8 w-8 text-red-500'); ?></div></div><p class="text-lg font-bold text-gray-900 mb-2">NABH Accredited</p><p class="text-gray-600 text-sm">Quality Cardiac Care</p></div>
        <div class="trust-card bg-white rounded-xl p-6 text-center shadow-lg"><div class="flex justify-center mb-4"><div class="bg-red-100 p-3 rounded-full"><?php echo getIcon('Activity', 'h-8 w-8 text-red-500'); ?></div></div><p class="text-lg font-bold text-gray-900 mb-2">24/7 Cath Lab</p><p class="text-gray-600 text-sm">Round-the-Clock Care</p></div>
        <div class="trust-card bg-white rounded-xl p-6 text-center shadow-lg"><div class="flex justify-center mb-4"><div class="bg-red-100 p-3 rounded-full"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div></div><p class="text-lg font-bold text-gray-900 mb-2">10,000+ Surgeries</p><p class="text-gray-600 text-sm">Successful Outcomes</p></div>
        <div class="trust-card bg-white rounded-xl p-6 text-center shadow-lg"><div class="flex justify-center mb-4"><div class="bg-red-100 p-3 rounded-full"><?php echo getIcon('Users', 'h-8 w-8 text-red-500'); ?></div></div><p class="text-lg font-bold text-gray-900 mb-2">Expert Team</p><p class="text-gray-600 text-sm">20+ Years Experience</p></div>
      </div>
    </div>
  </section>

  <!-- Local Content -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Comprehensive Heart Care in <?php echo $district_display; ?></h2>
        <div class="prose prose-lg text-gray-600 space-y-6">
          <p>Akropolis Super Speciality Hospital is recognized as the <strong><?php echo $target_keyword; ?></strong>, providing specialized cardiac care for patients across <?php echo $district_display; ?>. Whether you are seeking a heart checkup near <strong><?php echo $landmarks[0]; ?></strong> or looking for advanced cardiac surgery near <strong><?php echo $landmarks[1]; ?></strong>, our team of experienced cardiologists is here to help.</p>
          <p>Our state-of-the-art cardiac center is equipped with the latest diagnostic technology including digital Cath Lab, ECG, Echocardiography, and Holter monitoring. We specialize in complex heart procedures, making us the preferred choice for residents of <?php echo $district_display; ?> and surrounding areas like <?php echo $landmarks[2]; ?>.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2"><?php echo getIcon('MapPin', 'h-5 w-5 text-red-500'); ?><span>Serving Near <?php echo $district_display; ?></span></h3>
            <ul class="space-y-3">
              <?php foreach ($landmarks as $landmark): ?>
                <li class="flex items-center space-x-3"><?php echo getIcon('MapPin', 'h-4 w-4 text-red-500'); ?><span class="text-gray-700"><?php echo $landmark; ?></span></li>
              <?php endforeach; ?>
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

  <!-- Warning Signs -->
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
          <p class="text-red-900 font-semibold">If you experience these symptoms, call <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline"><?php echo CONTACT_INFO['emergency']; ?></a> immediately. Every minute counts!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h3>
          <p class="text-gray-600">For patients from <?php echo $district_display; ?></p>
        </div>
        <div class="space-y-4">
          <?php
          $faqs = [
            ["q" => "Which is the best heart hospital in $district_display?", "a" => "Akropolis Super Speciality Hospital is widely regarded as the best heart hospital in $district_display, offering advanced cardiac treatments with NABH accreditation."],
            ["q" => "How far is Akropolis Hospital from $landmarks[0]?", "a" => "Our hospital is conveniently located and easily accessible from $landmarks[0] and $landmarks[1]. We serve patients from all parts of $district_display."],
            ["q" => "Do you offer heart bypass surgery?", "a" => "Yes, we provide state-of-the-art heart bypass and angioplasty surgeries. This facility is available for all patients from $district_display."],
            ["q" => "Are heart checkup packages available?", "a" => "Our cardiology team provides comprehensive heart checkup packages for early detection and prevention."],
            ["q" => "How can I book an appointment?", "a" => "You can book by calling " . CONTACT_INFO['phone'] . " or using our online booking system. Walk-ins are also welcome."],
            ["q" => "Do you accept insurance?", "a" => "Yes, we accept all major insurance providers. Patients from $district_display can avail cashless treatment."]
          ];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo $faq['q']; ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-' . $index); ?>
              </button>
              <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600"><?php echo $faq['a']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Other Locations -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <?php
        $allDistricts = ['ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri', 'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon', 'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal', 'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh', 'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat', 'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat', 'yamunanagar' => 'Yamunanagar'];
        ?>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
          <div 
            onclick="toggleServingAreas()" 
            class="flex items-center space-x-3 cursor-pointer select-none group"
          >
            <div class="bg-red-100 p-2 rounded-lg group-hover:bg-red-200 transition-colors">
              <?php echo getIcon('MapPin', 'h-6 w-6 text-red-500'); ?>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 flex items-center gap-2">
              We Are Serving in These Areas
              <span class="transform transition-transform duration-200" id="serving-chevron">
                <?php echo getIcon('ChevronDown', 'h-6 w-6 text-gray-500 group-hover:text-red-500'); ?>
              </span>
            </h3>
          </div>
          <div class="relative w-full md:w-80">
            <select 
              onchange="if(this.value) window.location.href=this.value;" 
              class="block w-full bg-white border border-gray-300 rounded-xl px-4 py-3 pr-10 text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 cursor-pointer appearance-none shadow-sm transition-all"
            >
              <option value="">Select Your Location / District</option>
              <?php foreach ($allDistricts as $slug => $name): ?>
                <option value="/heart-care/haryana/<?php echo $slug; ?>/" <?php echo ($slug === $district_name) ? 'selected' : ''; ?>>
                  <?php echo $name; ?>
                </option>
              <?php endforeach; ?>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
              <?php echo getIcon('ChevronDown', 'h-5 w-5'); ?>
            </div>
          </div>
        </div>

        <div id="serving-areas-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12 hidden">
          <?php
          foreach ($allDistricts as $slug => $name):
            if ($slug !== $district_name):
          ?>
            <div class="group"><a href="/heart-care/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-red-500"><div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-red-500"></div><span class="font-medium">Best Heart Hospital in <?php echo $name; ?></span></a></div>
          <?php endif; endforeach; ?>
        </div>
      </div>
    </div>
    
    <script>
    function toggleServingAreas() {
      const container = document.getElementById('serving-areas-grid');
      const chevron = document.getElementById('serving-chevron');
      if (container && chevron) {
        if (container.classList.contains('hidden')) {
          container.classList.remove('hidden');
          chevron.style.transform = 'rotate(180deg)';
        } else {
          container.classList.add('hidden');
          chevron.style.transform = 'rotate(0deg)';
        }
      }
    }
    </script>
  </section>

  <!-- Consultation Form -->
  <section id="consultation-form" class="py-20 bg-red-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Schedule Your <span class="text-red-500">Heart Checkup</span></h3>
          <p class="text-gray-600 text-lg">Fill out the form below and we will contact you to schedule your appointment.</p>
        </div>
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
          <form action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label><input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" placeholder="Enter your full name" /></div>
              <div><label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label><input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500" placeholder="Enter your phone number" /></div>
            </div>
            <div><label class="block text-sm font-semibold text-gray-700 mb-2">Message</label><textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 resize-none" placeholder="Describe your heart health concern..."></textarea></div>
            <div class="text-center"><button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto"><?php echo getIcon('Send', 'h-5 w-5'); ?><span>Book Heart Checkup</span></button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl lg:text-5xl font-bold mb-6">Looking for the Best Heart Hospital Near <?php echo $landmarks[0]; ?>?</h3>
        <p class="text-xl text-red-100 mb-12">Book an appointment with our cardiac experts today. Serving <?php echo $district_display; ?> and all of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="#consultation-form" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>Book Appointment</span></a>
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: <?php echo CONTACT_INFO['phone']; ?></span></a>
        </div>
      </div>
    </div>
  </section>

  <?php $page_url = "https://akropolishospital.com/heart-care/haryana/$district_name/"; ?>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Heart Care", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Haryana"}, {"@type": "ListItem", "position": 4, "name": "<?php echo $district_display; ?>", "item": "<?php echo $page_url; ?>"}]}
  </script>
  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "Hospital", "name": "Akropolis Super Speciality Hospital - Heart Care", "description": "<?php echo $meta_description; ?>", "telephone": "<?php echo CONTACT_INFO['phone']; ?>", "address": {"@type": "PostalAddress", "streetAddress": "Sector 69", "addressLocality": "Gurugram", "addressRegion": "Haryana", "postalCode": "122101", "addressCountry": "IN"}}
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