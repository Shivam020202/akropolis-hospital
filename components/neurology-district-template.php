<?php
/**
 * Neurology District Page Template (Hindi & SEO Optimized - Doctor Focused)
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "$district_display में सबसे अच्छे न्यूरोलॉजी डॉक्टर";
$meta_title = "$target_keyword | अक्रोपोलिस हॉस्पिटल";
$meta_description = "$district_display में दिमाग और नसों की बीमारी के लिए सबसे अनुभवी न्यूरोलॉजिस्ट। अक्रोपोलिस हॉस्पिटल गुरुग्राम में ब्रेन स्पेशलिस्ट। अपॉइंटमेंट के लिए कॉल करें।";

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
$page_description = $meta_description;
include dirname(__DIR__) . '/includes/head.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">
      न्यूरो इमरजेंसी 24×7: <?php echo CONTACT_INFO['emergency']; ?>
    </span>
  </div>
</div>

<!-- Header -->
<?php include dirname(__DIR__) . '/includes/header-v2.php'; ?>

<main class="bg-gray-50">
  <!-- Breadcrumbs -->
  <div class="bg-white border-b">
    <div class="container mx-auto px-4 py-4">
      <nav class="flex text-sm text-gray-500" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
          <li><a href="/" class="hover:text-[#328CCB]">Home</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/neurology" class="hover:text-[#328CCB]">न्यूरोलॉजी</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/neurology/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-purple-600 font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Left Sidebar: Doctor Profile -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24 border border-gray-100">
          <div class="text-center mb-6">
            <!-- Doctor Image -->
            <div class="relative inline-block">
              <img
                src="https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=400"
                alt="न्यूरोलॉजी विशेषज्ञ - अक्रोपोलिस हॉस्पिटल"
                class="w-32 h-32 rounded-full object-cover border-4 border-purple-200 mx-auto mb-4"
              />
              <div class="absolute -bottom-2 -right-2 bg-purple-500 text-white p-2 rounded-full">
                <?php echo getIcon('Brain', 'h-5 w-5'); ?>
              </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">
              डॉ. न्यूरोलॉजिस्ट
            </h1>
            <p class="text-purple-600 font-semibold text-lg mb-2">
              मस्तिष्क और तंत्रिका रोग विशेषज्ञ
            </p>
            <p class="text-gray-600 mb-4">
              15+ वर्षों का अनुभव
            </p>

            <div class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              <?php echo getIcon('CheckCircle', 'h-4 w-4'); ?>
              <span><?php echo $district_display; ?> के लिए टॉप रेटेड</span>
            </div>
          </div>

          <!-- Doctor Stats -->
          <div class="space-y-4 mb-8">
            <div class="flex items-center space-x-3">
              <div class="bg-purple-100 p-2 rounded-lg">
                <?php echo getIcon('Award', 'h-5 w-5 text-purple-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">अनुभव</p>
                <p class="text-gray-600">15+ वर्ष</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-purple-100 p-2 rounded-lg">
                <?php echo getIcon('Brain', 'h-5 w-5 text-purple-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">ब्रेन सर्जरी</p>
                <p class="text-gray-600">5,000+ सफल</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-purple-100 p-2 rounded-lg">
                <?php echo getIcon('Activity', 'h-5 w-5 text-purple-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">स्ट्रोक इलाज</p>
                <p class="text-gray-600">24/7 उपलब्ध</p>
              </div>
            </div>
          </div>

          <!-- CTA Buttons -->
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-purple-600 hover:bg-purple-700 text-white w-full py-4 rounded-xl font-bold flex items-center justify-center space-x-2 transition-all duration-300 shadow-md mb-3">
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>अपॉइंटमेंट बुक करें</span>
          </a>

          <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white w-full py-4 rounded-xl font-bold flex items-center justify-center space-x-2 transition-all duration-300 shadow-md">
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>इमरजेंसी: <?php echo CONTACT_INFO['emergency']; ?></span>
          </a>

          <!-- Landmarks -->
          <div class="mt-8 pt-8 border-t border-gray-100">
            <h3 class="font-bold text-gray-900 mb-4 text-center">सेवा क्षेत्र</h3>
            <div class="flex flex-wrap gap-2 justify-center">
              <?php foreach ($landmarks as $landmark): ?>
                <span class="bg-purple-50 text-purple-600 px-3 py-1 rounded-full text-sm border border-purple-200"><?php echo $landmark; ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Main Content -->
      <div class="lg:col-span-2 space-y-8">
        <!-- Main Content Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border border-gray-100">
          <h1 class="text-3xl font-bold text-gray-900 mb-8 border-b pb-4">
            <?php echo $district_display; ?> में सबसे अच्छे न्यूरोलॉजी डॉक्टर
          </h1>
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
            <p class="font-medium text-lg text-gray-900">
                क्या आप <?php echo $district_display; ?> में दिमाग या नसों की बीमारी का सबसे अच्छा इलाज खोज रहे हैं?
                अक्रोपोलिस हॉस्पिटल में NCR के सबसे अनुभवी न्यूरोलॉजिस्ट आपकी सेवा के लिए उपलब्ध हैं।
            </p>

            <p>
                हमारे न्यूरोलॉजी विशेषज्ञों के पास 15+ वर्षों का अनुभव है और उन्होंने 5,000 से अधिक सफल ब्रेन और स्पाइन सर्जरी की हैं।
                <?php echo $district_display; ?> के मरीजों को अब दिल्ली जाने की ज़रूरत नहीं है - हम आपके पास गुरुग्राम में हैं।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हमारी विशेषताएं</h3>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-purple-50 p-3 rounded-lg border-l-4 border-purple-500">
                    <?php echo getIcon('Brain', 'h-5 w-5 text-purple-500'); ?>
                    <span>स्ट्रोक और पक्षाघात का इलाज</span>
                </li>
                <li class="flex items-center space-x-2 bg-purple-50 p-3 rounded-lg border-l-4 border-purple-500">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-purple-500'); ?>
                    <span>ब्रेन ट्यूमर सर्जरी</span>
                </li>
                <li class="flex items-center space-x-2 bg-purple-50 p-3 rounded-lg border-l-4 border-purple-500">
                    <?php echo getIcon('Zap', 'h-5 w-5 text-purple-500'); ?>
                    <span>मिर्गी (Epilepsy) का इलाज</span>
                </li>
                <li class="flex items-center space-x-2 bg-purple-50 p-3 rounded-lg border-l-4 border-purple-500">
                    <?php echo getIcon('CheckCircle', 'h-5 w-5 text-purple-500'); ?>
                    <span>स्पाइन सर्जरी</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> से अक्रोपोलिस हॉस्पिटल कैसे पहुँचें?</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल गुरुग्राम के सेक्टर 69 में स्थित है। <?php echo $district_display; ?> से हमारे हॉस्पिटल तक पहुँचना बहुत आसान है।
                आप सड़क मार्ग (By Road) या ट्रेन/मेट्रो द्वारा आसानी से हमारे पास पहुँच सकते हैं।
            </p>

            <!-- Brain Warning Signs -->
            <div class="bg-purple-50 p-8 rounded-2xl border-2 border-dashed border-purple-200 mt-12">
                <h4 class="text-xl font-bold text-purple-700 mb-4">स्ट्रोक के लक्षण पहचानें - समय पर इलाज जरूरी</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <strong class="text-purple-700">चेहरे का झुकना</strong>
                        <p class="text-sm text-gray-600">मुस्कुराने में कठिनाई</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <strong class="text-purple-700">हाथ कमजोर</strong>
                        <p class="text-sm text-gray-600">एक या दोनों हाथों में कमजोरी</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <strong class="text-purple-700">बोलने में दिक्कत</strong>
                        <p class="text-sm text-gray-600">बोलना अस्पष्ट या मुश्किल</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <strong class="text-purple-700">समय (Time)</strong>
                        <p class="text-sm text-gray-600">तुरंत डॉक्टर को दिखाएं</p>
                    </div>
                </div>
                <p class="mt-4 text-purple-900 font-semibold text-center">
                    यदि आपको ये लक्षण दिखें, तुरंत कॉल करें: <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline font-bold"><?php echo CONTACT_INFO['emergency']; ?></a>
                </p>
            </div>

            <!-- Insurance Info -->
            <div class="bg-green-50 p-6 rounded-xl border border-green-100 mt-8">
                <h5 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                    <?php echo getIcon('Shield', 'h-5 w-5 text-green-600'); ?>
                    इंश्योरेंस और कैशलेस इलाज
                </h5>
                <p class="text-gray-600 text-sm">
                    हम सभी प्रमुख TPA और इंश्योरेंस कंपनियों के साथ कैशलेस इलाज की सुविधा प्रदान करते हैं। <?php echo $district_display; ?> के सभी मरीजों का स्वागत है।
                </p>
            </div>
          </div>
        </div>

        <!-- FAQ Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-8">अक्सर पूछे जाने वाले प्रश्न (FAQ)</h1>
          <div class="space-y-4">
            <?php
            $faqs = [
              [
                'q' => "$district_display में सबसे अच्छे न्यूरोलॉजी डॉक्टर कौन हैं?",
                'a' => "अक्रोपोलिस हॉस्पिटल के न्यूरोलॉजिस्ट $district_display समेत पूरे हरियाणा में सबसे भरोसेमंद माने जाते हैं। 15+ वर्षों के अनुभव और 5,000+ सफल सर्जरी के साथ।"
              ],
              [
                'q' => "स्ट्रोक के लक्षण क्या हैं?",
                'a' => "चेहरे का झुकना, हाथों में कमजोरी, बोलने में दिक्कत, और समन्वय खोना स्ट्रोक के लक्षण हो सकते हैं। इनमें से कुछ भी दिखे तो तुरंत इमरजेंसी में संपर्क करें।"
              ],
              [
                'q' => "क्या ब्रेन ट्यूमर की सर्जरी होती है?",
                'a' => "हाँ, हम स्टेट-ऑफ-द-आर्ट ब्रेन ट्यूमर सर्जरी प्रदान करते हैं। हाई प्रिसिजन और फास्ट रिकवरी के लिए हमारे पास लेटेस्ट टेक्नोलॉजी है।"
              ],
              [
                'q' => "मिर्गी (Epilepsy) का इलाज कैसे होता है?",
                'a' => "मिर्गी का इलाज दवाओं और सर्जरी दोनों से होता है। हमारे न्यूरोलॉजिस्ट व्यक्तिगत उपचार योजना बनाते हैं।"
              ],
              [
                'q' => "अपॉइंटमेंट कैसे बुक करें?",
                'a' => "आप " . CONTACT_INFO['phone'] . " पर कॉल करके या वेबसाइट पर ऑनलाइन अपॉइंटमेंट बुक कर सकते हैं। $district_display से आने वाले मरीजों को प्राथमिकता दी जाती है।"
              ]
            ];
            foreach ($faqs as $index => $faq):
            ?>
              <div class="border rounded-xl overflow-hidden">
                <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors text-left">
                  <span class="font-bold text-gray-900"><?php echo $faq['q']; ?></span>
                  <?php echo getIcon('ChevronDown', 'h-5 w-5 text-purple-500 transition-transform duration-200 faq-icon-' . $index); ?>
                </button>
                <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-gray-50 text-gray-700 border-t">
                  <?php echo $faq['a']; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Other Districts -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
            <svg class="h-5 w-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            अन्य जिलों में न्यूरोलॉजी डॉक्टर
          </h3>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
            <?php
            $allDistricts = [
                'ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri',
                'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon',
                'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal',
                'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh',
                'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat',
                'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat',
                'yamunanagar' => 'Yamunanagar'
            ];
            foreach ($allDistricts as $dSlug => $dName):
              if ($dSlug !== $district_name):
            ?>
              <a href="/neurology/haryana/<?php echo $dSlug; ?>/" class="flex items-center space-x-2 text-gray-600 hover:text-purple-500 p-2 rounded-lg hover:bg-purple-50 transition-colors">
                <div class="h-1.5 w-1.5 bg-purple-400 rounded-full"></div>
                <span class="text-sm font-medium"><?php echo $dName; ?></span>
              </a>
            <?php endif; endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
function toggleFaq(index) {
  const answer = document.getElementById('faq-answer-' + index);
  const icon = document.querySelector('.faq-icon-' + index);
  const isHidden = answer.classList.contains('hidden');

  document.querySelectorAll('[id^="faq-answer-"]').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('[class^="faq-icon-"]').forEach(el => el.style.transform = 'rotate(0deg)');

  if (isHidden) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  }
}
</script>

<?php
include dirname(__DIR__) . '/includes/footer.php';
include dirname(__DIR__) . '/includes/scripts.php';
?>