<?php
/**
 * Haryana State Page for Cardiologists
 */
require_once dirname(__DIR__, 2) . '/includes/data.php';
$page_title = 'Best Cardiologist in Haryana | Akropolis Hospital';
$page_description = 'Find the best cardiologist in Haryana at Akropolis Super Speciality Hospital. Expert heart specialists in Gurgaon, Faridabad, Rohtak, Hisar, and all major districts.';
include dirname(__DIR__, 2) . '/includes/head.php';
include dirname(__DIR__, 2) . '/includes/header-v2.php';
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
          <li class="text-[#328CCB] font-medium">Haryana</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="hero-section relative bg-gradient-to-br from-red-50 via-white to-pink-50 overflow-hidden py-16 lg:py-24">
    <div class="absolute top-0 right-0 w-96 h-96 bg-red-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="container mx-auto px-4 relative z-10">
      <div class="max-w-4xl mx-auto text-center">
        <div class="inline-flex items-center space-x-2 bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          <span>Best Cardiologists Across Haryana</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">Best Cardiologist in Haryana</h1>
        <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">Expert cardiologists serving all 23 districts of Haryana. From Gurgaon to Hisar, find the best heart care near you.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
          <a href="#districts" class="bg-red-500 hover:bg-red-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('MapPin', 'h-5 w-5'); ?><span>Find Cardiologist Near You</span></a>
          <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Emergency: 9466044444</span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('UserCheck', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">15+ Cardiologists</h3><p class="text-gray-600 text-sm">Expert Heart Specialists</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('MapPin', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">23 Districts</h3><p class="text-gray-600 text-sm">Serving All Haryana</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Heart', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">10,000+ Treatments</h3><p class="text-gray-600 text-sm">Successful Outcomes</p></div>
        <div class="bg-white rounded-xl p-6 text-center shadow-lg"><div class="bg-red-100 p-3 rounded-full inline-block mb-4"><?php echo getIcon('Award', 'h-8 w-8 text-red-500'); ?></div><h3 class="font-bold text-gray-900 mb-2">NABH Accredited</h3><p class="text-gray-600 text-sm">Quality Cardiac Care</p></div>
      </div>
    </div>
  </section>

  <section id="districts" class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Find Cardiologist in Your District</h2>
          <p class="text-gray-600">Select your district to find the best cardiologist near you</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
<?php
$districts = [
    ['ambala', 'Ambala'], ['bhiwani', 'Bhiwani'], ['charkhi-dadri', 'Charkhi Dadri'],
    ['faridabad', 'Faridabad'], ['fatehabad', 'Fatehabad'], ['gurgaon', 'Gurgaon'],
    ['hisar', 'Hisar'], ['jhajjar', 'Jhajjar'], ['jind', 'Jind'],
    ['kaithal', 'Kaithal'], ['karnal', 'Karnal'], ['kurukshetra', 'Kurukshetra'],
    ['mahendragarh', 'Mahendragarh'], ['mewat', 'Mewat'], ['palwal', 'Palwal'],
    ['panchkula', 'Panchkula'], ['panipat', 'Panipat'], ['rewari', 'Rewari'],
    ['rohtak', 'Rohtak'], ['sirsa', 'Sirsa'], ['sonipat', 'Sonipat'],
    ['yamunanagar', 'Yamunanagar']
];
foreach ($districts as $d) {
    echo "          <a href=\"/cardiologist/haryana/{$d[0]}/\" class=\"bg-red-50 hover:bg-red-100 rounded-xl p-6 border border-red-100 transition-all duration-300 group\">\n";
    echo "            <div class=\"flex items-center justify-between\">\n";
    echo "              <div>\n";
    echo "                <h3 class=\"font-bold text-gray-900 text-lg\">Best Cardiologist in {$d[1]}</h3>\n";
    echo "                <p class=\"text-sm text-gray-600 mt-1\">Expert cardiac care near you</p>\n";
    echo "              </div>\n";
    echo "              <div class=\"bg-red-500 p-2 rounded-full text-white group-hover:bg-red-600 transition-colors\">\n";
    echo "                " . getIcon('ArrowRight', 'h-5 w-5') . "\n";
    echo "              </div>\n";
    echo "            </div>\n";
    echo "          </a>\n";
}
?>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
          <p class="text-gray-600">About finding a cardiologist in Haryana</p>
        </div>
        <div class="space-y-4">
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(0)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Who is the best cardiologist in Haryana?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-0" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Akropolis Super Speciality Hospital has a team of 15+ expert cardiologists serving all 23 districts of Haryana. We are NABH accredited and provide 24/7 cardiac emergency care.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(1)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you have cardiologists near Gurgaon?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-1" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, our expert cardiologists are available near Gurgaon and all major areas of Haryana. We offer consultations and cardiac treatments at our NABH accredited hospital.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(2)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">How can I book an appointment with a cardiologist?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-2" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">You can book an appointment by calling 9466044444 or using our online form. We serve patients from all districts of Haryana including Gurgaon, Faridabad, Hisar, Rohtak, and more.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(3)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Do you provide heart bypass surgery?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="faq-answer-3" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">Yes, we provide state-of-the-art heart bypass surgery, angioplasty, and stent placement. Our cardiac surgeons have performed 10,000+ successful heart procedures.</div>
          </div>
          <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <button onclick="toggleFaq(4)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors"><span class="text-left font-semibold text-gray-900">Are heart checkup packages available?</span><svg class="h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></button>
            <div id="faq-answer-4" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">We offer comprehensive heart checkup packages for early detection and prevention. Contact us to book your cardiac evaluation at our hospital.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-red-500 to-red-600 text-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">Find Your Nearest Cardiologist in Haryana</h2>
        <p class="text-xl text-red-100 mb-12">Book an appointment with our expert cardiologists today. Serving all 23 districts of Haryana.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="/cardiology" class="bg-white text-red-500 hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Calendar', 'h-5 w-5'); ?><span>View All Services</span></a>
          <a href="tel:9466044444" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl"><?php echo getIcon('Phone', 'h-5 w-5'); ?><span>Call: 9466044444</span></a>
        </div>
      </div>
    </div>
  </section>

  <script type="application/ld+json">
  {"@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [{"@type": "ListItem", "position": 1, "name": "Home", "item": "https://akropolishospital.com/"}, {"@type": "ListItem", "position": 2, "name": "Cardiology", "item": "https://akropolishospital.com/cardiology.php"}, {"@type": "ListItem", "position": 3, "name": "Haryana"}]}
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

<?php include dirname(__DIR__, 2) . '/includes/footer.php'; include dirname(__DIR__, 2) . '/includes/scripts.php'; ?>