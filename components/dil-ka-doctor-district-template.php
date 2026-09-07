<?php
/**
 * Dil Ka Doctor District Page Template (Hindi & SEO Optimized)
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "$district_display में सबसे अच्छा दिल का अस्पताल";
$meta_title = "$target_keyword | अक्रोपोलिस हॉस्पिटल";
$meta_description = "$district_display में दिल की बीमारी का इलाज करें। अक्रोपोलिस हॉस्पिटल में NCR के सबसे अनुभवी कार्डियोलॉजिस्ट, 24/7 इमरजेंसी, और आधुनिक कैथ लैब।";

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
      Emergency 24×7: <?php echo CONTACT_INFO['emergency']; ?>
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
          <li><a href="/cardiology" class="hover:text-[#328CCB]">दिल की देखभाल</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/dil-ka-doctor/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Left Sidebar: Hospital Info -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24 border border-gray-100">
          <div class="text-center mb-6">
            <div class="bg-red-100 p-6 rounded-full inline-block mb-4">
              <svg class="h-16 w-16 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">
              अक्रोपोलिस हॉस्पिटल
            </h1>
            <p class="text-red-500 font-semibold text-lg mb-2">
              NABH अक्रेडिटेड हार्ट सेंटर
            </p>
            <p class="text-gray-600 mb-4">
              गुरुग्राम, हरियाणा
            </p>

            <div class="inline-flex items-center space-x-2 bg-red-50 text-red-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              <?php echo getIcon('CheckCircle', 'h-4 w-4'); ?>
              <span><?php echo $district_display; ?> के मरीजों को प्राथमिकता</span>
            </div>
          </div>

          <div class="space-y-4 mb-8">
            <div class="flex items-center space-x-3">
              <div class="bg-red-100 p-2 rounded-lg">
                <?php echo getIcon('Activity', 'h-5 w-5 text-red-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">24/7 कैथ लैब</p>
                <p class="text-gray-600">दिल का इमरजेंसी इलाज</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-red-100 p-2 rounded-lg">
                <?php echo getIcon('Heart', 'h-5 w-5 text-red-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">10,000+ हार्ट सर्जरी</p>
                <p class="text-gray-600">सफल रिकॉर्ड</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <div class="bg-red-100 p-2 rounded-lg">
                <?php echo getIcon('Users', 'h-5 w-5 text-red-500'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">15+ एक्सपर्ट कार्डियोलॉजिस्ट</p>
                <p class="text-gray-600">अनुभवी टीम</p>
              </div>
            </div>
          </div>

          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-red-500 hover:bg-red-600 text-white w-full py-4 rounded-xl font-bold flex items-center justify-center space-x-2 transition-all duration-300 shadow-md">
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>अपॉइंटमेंट बुक करें</span>
          </a>

          <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white w-full py-4 rounded-xl font-bold flex items-center justify-center space-x-2 transition-all duration-300 shadow-md mt-4">
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>इमरजेंसी: <?php echo CONTACT_INFO['emergency']; ?></span>
          </a>

          <div class="mt-8 pt-8 border-t border-gray-100">
            <h3 class="font-bold text-gray-900 mb-4 text-center">हमारी सेवा के क्षेत्र</h3>
            <div class="flex flex-wrap gap-2 justify-center">
              <?php foreach ($landmarks as $landmark): ?>
                <span class="bg-red-50 text-red-600 px-3 py-1 rounded-full text-sm border border-red-200"><?php echo $landmark; ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Main Content -->
      <div class="lg:col-span-2 space-y-8">
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border border-gray-100">
          <h1 class="text-3xl font-bold text-gray-900 mb-8 border-b pb-4">
            <?php echo $district_display; ?> में सबसे अच्छा दिल का अस्पताल
          </h1>
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
            <p class="font-medium text-lg text-gray-900">
                क्या आप <?php echo $district_display; ?> में दिल की बीमारी का सबसे अच्छा इलाज खोज रहे हैं?
                अक्रोपोलिस सुपर स्पेशियलिटी हॉस्पिटल NCR का सबसे भरोसेमंद हार्ट सेंटर है।
            </p>

            <p>
                हमारे पास 15+ अनुभवी कार्डियोलॉजिस्ट हैं जो दिल के हर तरह के इलाज में माहिर हैं। <?php echo $district_display; ?> के मरीजों को अब दिल्ली या गुरुग्राम जाने की ज़रूरत नहीं है - हम आपके पास गुरुग्राम में हैं।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हमारी मुख्य सेवाएं</h3>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-red-50 p-3 rounded-lg border-l-4 border-red-500">
                    <?php echo getIcon('Heart', 'h-5 w-5 text-red-500'); ?>
                    <span>हार्ट अटैक का इलाज</span>
                </li>
                <li class="flex items-center space-x-2 bg-red-50 p-3 rounded-lg border-l-4 border-red-500">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-red-500'); ?>
                    <span>एंजियोप्लास्टी और बाईपास</span>
                </li>
                <li class="flex items-center space-x-2 bg-red-50 p-3 rounded-lg border-l-4 border-red-500">
                    <?php echo getIcon('Monitor', 'h-5 w-5 text-red-500'); ?>
                    <span>24/7 कैथ लैब</span>
                </li>
                <li class="flex items-center space-x-2 bg-red-50 p-3 rounded-lg border-l-4 border-red-500">
                    <?php echo getIcon('CheckCircle', 'h-5 w-5 text-red-500'); ?>
                    <span>हार्ट चेकअप पैकेज</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> से अक्रोपोलिस हॉस्पिटल कैसे पहुँचें?</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल गुरुग्राम के सेक्टर 69 में स्थित है। <?php echo $district_display; ?> से हमारे हॉस्पिटल तक पहुँचना बहुत आसान है।
                आप सड़क मार्ग (By Road) या ट्रेन/मेट्रो द्वारा आसानी से हमारे पास पहुँच सकते हैं।
            </p>

            <div class="bg-red-50 p-8 rounded-2xl border-2 border-dashed border-red-200 mt-12">
                <h4 class="text-xl font-bold text-red-700 mb-4">दिल के दौरे के लक्षण (Heart Attack Warning Signs)</h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg">
                        <strong class="text-red-700">छाती में दर्द</strong>
                        <p class="text-sm text-gray-600">छाती में दबाव या जकड़न</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <strong class="text-red-700">साँस लेने में तकलीफ</strong>
                        <p class="text-sm text-gray-600">साँस फूलना और परेशानी</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <strong class="text-red-700">अन्य अंगों में दर्द</strong>
                        <p class="text-sm text-gray-600">बाहों, पीठ, गर्दन, जबड़े में दर्द</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <strong class="text-red-700">ठंडी पसीना और मतली</strong>
                        <p class="text-sm text-gray-600">चक्कर आना और पसीना</p>
                    </div>
                </div>
                <p class="mt-4 text-red-900 font-semibold text-center">
                    यदि आपको ये लक्षण दिखें, तुरंत कॉल करें: <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline"><?php echo CONTACT_INFO['emergency']; ?></a>
                </p>
            </div>

            <div class="bg-blue-50 p-6 rounded-xl border border-blue-100 mt-8">
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
                'q' => "$district_display में सबसे अच्छा दिल का अस्पताल कौन सा है?",
                'a' => "अक्रोपोलिस सुपर स्पेशियलिटी हॉस्पिटल $district_display समेत पूरे हरियाणा में सबसे भरोसेमंद हार्ट सेंटर है। हमारे पास NABH अक्रेडिटेशन और 24/7 इमरजेंसी फैसिलिटी है।"
              ],
              [
                'q' => "क्या हार्ट बाईपास सर्जरी होती है?",
                'a' => "हाँ, हम स्टेट-ऑफ-द-आर्ट हार्ट बाईपास और एंजियोप्लास्टी सर्जरी प्रदान करते हैं। हाई प्रिसिजन और फास्ट रिकवरी के लिए हमारे पास लेटेस्ट टेक्नोलॉजी है।"
              ],
              [
                'q' => "हार्ट चेकअप पैकेज उपलब्ध है?",
                'a' => "हाँ, हमारी कार्डियोलॉजी टीम कम्प्रीहेंसिव हार्ट चेकअप पैकेज प्रदान करती है। जल्दी पहचान और प्रीवेंशन के लिए नियमित चेकअप ज़रूरी है।"
              ],
              [
                'q' => "अपॉइंटमेंट कैसे बुक करें?",
                'a' => "आप " . CONTACT_INFO['phone'] . " पर कॉल करके या ऑनलाइन अपॉइंटमेंट बुक कर सकते हैं। $district_display से आने वाले मरीजों को प्राथमिकता दी जाती है।"
              ]
            ];
            foreach ($faqs as $index => $faq):
            ?>
              <div class="border rounded-xl overflow-hidden">
                <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors text-left">
                  <span class="font-bold text-gray-900"><?php echo $faq['q']; ?></span>
                  <?php echo getIcon('ChevronDown', 'h-5 w-5 text-red-500 transition-transform duration-200 faq-icon-' . $index); ?>
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
            <svg class="h-5 w-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            अन्य जिलों में दिल का इलाज
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
              <a href="/dil-ka-doctor/haryana/<?php echo $dSlug; ?>/" class="flex items-center space-x-2 text-gray-600 hover:text-red-500 p-2 rounded-lg hover:bg-red-50 transition-colors">
                <div class="h-1.5 w-1.5 bg-red-400 rounded-full"></div>
                <span class="text-sm font-medium"><?php echo $dName; ?> में दिल का अस्पताल</span>
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