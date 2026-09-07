<?php
/**
 * Obstetrics & Gynecology District Page Template (Hindi & SEO Optimized)
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "$district_display mein Sabse Acchi Lady Doctor (Gynecologist)";
$meta_title = "$target_keyword | Dr. Anu Nagpal";
$meta_description = "$district_display mein sabse acchi lady doctor ki khoj yahan khatam hoti hai. Dr. Anu Nagpal pradan karti hain delivery aur mahila rogon ka surakshit upchar.";

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
include dirname(__DIR__) . '/includes/head.php';

// Doctor Data (Focus on Dr. Anu Nagpal)
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === 'dr-anu-nagpal') {
        $doctor = $d;
        break;
    }
}
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
          <li><a href="/obstetrics-gynecology" class="hover:text-[#328CCB]">Gynecology</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
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
            <img
              src="<?php echo htmlspecialchars($doctor['image']); ?>"
              alt="<?php echo htmlspecialchars($doctor['name']); ?>"
              class="w-32 h-32 rounded-full object-cover border-4 border-[#328CCB]/20 mx-auto mb-4"
            />
            <h3 class="text-2xl font-bold text-gray-900 mb-2">
              <?php echo htmlspecialchars($doctor['name']); ?>
            </h3>
            <p class="text-[#328CCB] font-semibold text-lg mb-2">
              Senior Gynecologist & Obstetrician
            </p>
            <p class="text-gray-600 mb-4">
              <?php echo htmlspecialchars($doctor['qualification']); ?>
            </p>

            <div class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              <?php echo getIcon('CheckCircle', 'h-4 w-4'); ?>
              <span>Trusted Lady Doctor for <?php echo $district_display; ?></span>
            </div>
          </div>

          <div class="space-y-4 mb-8">
            <div class="flex items-center space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('Award', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">Experience</p>
                <p class="text-gray-600"><?php echo $doctor['experience']; ?></p>
              </div>
            </div>
          </div>

          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white w-full py-4 rounded-xl font-bold flex items-center justify-center space-x-2 transition-all duration-300 shadow-md">
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Consult Now</span>
          </a>
          
          <div class="mt-8 pt-8 border-t border-gray-100">
            <h3 class="font-bold text-gray-900 mb-4 text-center">Serving Near Landmarks</h3>
            <div class="flex flex-wrap gap-2 justify-center">
              <?php foreach ($landmarks as $landmark): ?>
                <span class="bg-gray-50 text-gray-600 px-3 py-1 rounded-full text-sm border border-gray-200"><?php echo $landmark; ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Main Content -->
      <div class="lg:col-span-2 space-y-8">
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border border-gray-100">
          <h1 class="text-3xl font-bold text-gray-900 mb-8 border-b pb-4">
            <?php echo $district_display; ?> में सबसे अच्छी लेडी डॉक्टर (Gynecologist): डॉ अनु नागपाल
          </h1>
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
            <p class="font-medium text-lg text-gray-900">
                क्या आप <?php echo $district_display; ?> में अपनी प्रेग्नेंसी या महिलाओं से जुड़ी किसी भी समस्या के लिए सबसे अच्छी लेडी डॉक्टर की तलाश कर रही हैं? 
                अक्रोपोलिस हॉस्पिटल की डॉ अनु नागपाल इस क्षेत्र की सबसे अनुभवी और भरोसेमंद स्त्री रोग विशेषज्ञ हैं।
            </p>

            <p>
                माँ बनना किसी भी महिला के जीवन का सबसे सुखद अनुभव होता है। लेकिन इस दौरान सही डॉक्टरी सलाह और देखभाल बहुत ज़रूरी है। <?php echo $district_display; ?> की महिलाओं को प्रेग्नेंसी, इनफर्टिलिटी (बांझपन) और अन्य महिला रोगों के लिए अब घबराने की ज़रूरत नहीं है। अक्रोपोलिस हॉस्पिटल में डॉ अनु नागपाल के मार्गदर्शन में हज़ारों सुरक्षित डिलीवरी और सफल इलाज किए गए हैं।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हमारी मुख्य सेवाएं (Specialized Services)</h3>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Heart', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>नॉर्मल और सिजेरियन डिलीवरी (Painless Delivery)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>हाई रिस्क प्रेग्नेंसी की देखभाल</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>पीसीओडी (PCOD/PCOS) और हार्मोनल इलाज</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Zap', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>लैप्रोस्कोपिक सर्जरी (Gynae Laparoscopy)</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> से अक्रोपोलिस हॉस्पिटल (Gurugram) कैसे पहुँचें?</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल गुरुग्राम के सेक्टर 69 में स्थित है। <?php echo $district_display; ?> से हमारे हॉस्पिटल तक पहुँचना बहुत आसान है। 
                मरीज़ों के लिए यहाँ 24×7 इमरजेंसी और आधुनिक लेबर रूम की सुविधा उपलब्ध है।
            </p>

            <div class="bg-blue-50 p-8 rounded-2xl border-2 border-dashed border-[#328CCB]/20 mt-12">
                <h4 class="text-xl font-bold text-[#328CCB] mb-4">विशेष नोट (Special Note)</h4>
                <p class="mb-4">
                    डॉ अनु नागपाल गुरुग्राम स्थित मुख्य ब्रांच में बैठती हैं। <?php echo $district_display; ?> के मरीज़ों के लिए हम **प्रायोरिटी अपॉइंटमेंट (Priority Appointment)** की सुविधा प्रदान करते हैं।
                </p>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-blue-100">
                    <h5 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <?php echo getIcon('Shield', 'h-5 w-5 text-green-600'); ?>
                        कैशलेस डिलीवरी और इंश्योरेंस
                    </h5>
                    <p class="text-gray-600 text-sm">
                        हम सभी प्रमुख इंश्योरेंस कंपनियों और आयुष्मान भारत (सरकारी पैनल) के साथ कैशलेस डिलीवरी की सुविधा प्रदान करते हैं।
                    </p>
                </div>
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
                'q' => "$district_display में सबसे अच्छी गायनेकोलॉजिस्ट कौन हैं?",
                'a' => "डॉ अनु नागपाल अक्रोपोलिस हॉस्पिटल में वरिष्ठ स्त्री रोग विशेषज्ञ हैं, जो सुरक्षित डिलीवरी और महिला रोगों में विशेषज्ञ हैं।"
              ],
              [
                'q' => "क्या आपके यहाँ पेनलेस लेबर (Painless Delivery) की सुविधा है?",
                'a' => "हाँ, हमारे पास आधुनिक पेनलेस डिलीवरी की सुविधा उपलब्ध है ताकि माँ को प्रसव के दौरान कम से कम तकलीफ हो।"
              ],
              [
                'q' => "क्या आयुष्मान कार्ड पर डिलीवरी होती है?",
                'a' => "हाँ, अक्रोपोलिस हॉस्पिटल में आयुष्मान भारत योजना के अंतर्गत कैशलेस डिलीवरी की सुविधा उपलब्ध है।"
              ]
            ];
            foreach ($faqs as $index => $faq):
            ?>
              <div class="border rounded-xl overflow-hidden">
                <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors text-left">
                  <span class="font-bold text-gray-900"><?php echo $faq['q']; ?></span>
                  <?php echo getIcon('ChevronDown', 'h-5 w-5 text-[#328CCB] transition-transform duration-200 faq-icon-' . $index); ?>
                </button>
                <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-gray-50 text-gray-700 border-t">
                  <?php echo $faq['a']; ?>
                </div>
              </div>
            <?php endforeach; ?>
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

  if (isHidden) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  } else {
    answer.classList.add('hidden');
    icon.style.transform = 'rotate(0deg)';
  }
}
</script>

<?php
include dirname(__DIR__) . '/includes/footer.php';
include dirname(__DIR__) . '/includes/scripts.php';
?>
