<?php
/**
 * Migraine Treatment District Page Template (Hindi & SEO Optimized)
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "$district_display mein Migraine Headache Ka Ilaj";
$meta_title = "Migraine Treatment in $district_display | Dr. Priya Sharma";
$meta_description = "$district_display mein migraine headache ka sabse accha ilaj. Dr. Priya Sharma (Neurologist) migraine aur severe headache treatment mein experts hain. Book appointment now!";

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
include dirname(__DIR__) . '/includes/head.php';

// Doctor Data (Focus on Migraine Specialist)
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === 'dr-priya-sharma') {
        $doctor = $d;
        break;
    }
}
// Fallback if specialist not found
if (!$doctor) {
    foreach ($doctors as $d) {
        if ($d['specialty'] === 'Neurology' || $d['specialty'] === 'Headache Specialist') {
            $doctor = $d;
            break;
        }
    }
}
// Default fallback
if (!$doctor) {
    $doctor = [
        'name' => 'Dr. Priya Sharma',
        'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop',
        'qualification' => 'DM Neurology, MD Medicine',
        'experience' => '12+ Years',
        'specialty' => 'Headache & Migraine Specialist'
    ];
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
          <li><a href="/neurology" class="hover:text-[#328CCB]">Neurology</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/migraine-treatment" class="hover:text-[#328CCB]">Migraine Treatment</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/migraine-treatment/haryana/" class="hover:text-[#328CCB]">Haryana</a></li>
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
              Migraine & Headache Specialist
            </p>
            <p class="text-gray-600 mb-4">
              <?php echo htmlspecialchars($doctor['qualification']); ?>
            </p>

            <div class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              <?php echo getIcon('CheckCircle', 'h-4 w-4'); ?>
              <span>Top Migraine Doctor for <?php echo $district_display; ?></span>
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
            <span>Book Appointment</span>
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
            <?php echo $district_display; ?> में माइग्रेन और सिरदर्द का इलाज
          </h1>
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
            <p class="font-medium text-lg text-gray-900">
                क्या आपको <?php echo $district_display; ?> में तेज सिरदर्द, माइग्रेन या बार-बार होने वाले सिरदर्द की समस्या है?
                अक्रोपोलिस हॉस्पिटल में Dr. Priya Sharma माइग्रेन और गंभीर सिरदर्द के इलाज में विशेषज्ञ हैं।
            </p>

            <p>
                माइग्रेन एक गंभीर न्यूरोलॉजिकल समस्या है जो लाखों लोगों को प्रभावित करती है। <?php echo $district_display; ?> के मरीज़ों को अब दिल्ली या गुरुग्राम जाने की ज़रूरत नहीं है,
                क्योंकि अक्रोपोलिस हॉस्पिटल में विश्वस्तरीय माइग्रेन उपचार उपलब्ध है।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">माइग्रेन के प्रकार (Types of Migraine)</h3>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Sparkles', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>माइग्रेन विद आरा (With Aura)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>माइग्रेन विदाउट आरा (Without Aura)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>क्रोनिक माइग्रेन (15+ days/month)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Heart', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>हेमिक्रेनिया (Hemiplegic)</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हमारी मुख्य सेवाएं (Treatment Services)</h3>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-green-50 p-3 rounded-lg border-l-4 border-green-500">
                    <?php echo getIcon('Pill', 'h-5 w-5 text-green-600'); ?>
                    <span>दवाई और प्रोफाइलैक्टिक ट्रीटमेंट</span>
                </li>
                <li class="flex items-center space-x-2 bg-green-50 p-3 rounded-lg border-l-4 border-green-500">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-green-600'); ?>
                    <span>बॉटॉक्स थेरेपी (For Chronic Migraine)</span>
                </li>
                <li class="flex items-center space-x-2 bg-green-50 p-3 rounded-lg border-l-4 border-green-500">
                    <?php echo getIcon('Brain', 'h-5 w-5 text-green-600'); ?>
                    <span>ट्रिगर पॉइंट इंजेक्शन</span>
                </li>
                <li class="flex items-center space-x-2 bg-green-50 p-3 rounded-lg border-l-4 border-green-500">
                    <?php echo getIcon('Shield', 'h-5 w-5 text-green-600'); ?>
                    <span>जीवनशैली मैनेजमेंट और परामर्श</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">माइग्रेन के लक्षण (Symptoms)</h3>
            <p>यदि आपको निम्नलिखित लक्षण हैं, तो तुरंत विशेषज्ञ से मिलें:</p>
            <ul class="list-disc pl-6 space-y-2">
                <li>एक तरफा तेज सिरदर्द</li>
                <li>उल्टी या मतली</li>
                <li>प्रकाश और आवाज के प्रति संवेदनशीलता</li>
                <li>दृष्टि में बदलाव (आरा)</li>
                <li>हाथों या चेहरे में सुन्नपन</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> से अक्रोपोलिस हॉस्पिटल (Gurugram) कैसे पहुँचें?</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल गुरुग्राम के सेक्टर 69 में स्थित है। <?php echo $district_display; ?> से हमारे हॉस्पिटल तक पहुँचना बहुत आसान है।
                आप सड़क मार्ग (By Road) या ट्रेन/मेट्रो द्वारा आसानी से हमारे पास पहुँच सकते हैं।
            </p>

            <div class="bg-blue-50 p-8 rounded-2xl border-2 border-dashed border-[#328CCB]/20 mt-12">
                <h4 class="text-xl font-bold text-[#328CCB] mb-4">विशेष नोट (Special Note)</h4>
                <p class="mb-4">
                    Dr. Priya Sharma गुरुग्राम स्थित मुख्य ब्रांच में बैठती हैं। <?php echo $district_display; ?> के मरीज़ों के लिए हम **प्रायोरिटी अपॉइंटमेंट (Priority Appointment)** की सुविधा प्रदान करते हैं।
                </p>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-blue-100">
                    <h5 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <?php echo getIcon('Shield', 'h-5 w-5 text-green-600'); ?>
                        इंश्योरेंस और फाइनेंस
                    </h5>
                    <p class="text-gray-600 text-sm">
                        माइग्रेन इलाज के लिए हम सभी प्रमुख इंश्योरेंस कंपनियों के साथ कैशलेस ट्रीटमेंट की सुविधा प्रदान करते हैं।
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
                'q' => "$district_display में माइग्रेन का सबसे अच्छा इलाज कहाँ मिलेगा?",
                'a' => "अक्रोपोलिस हॉस्पिटल गुरुग्राम में Dr. Priya Sharma माइग्रेन और सिरदर्द के इलाज में विशेषज्ञ हैं। आप <?php echo $district_display; ?> से आसानी से पहुँच सकते हैं।"
              ],
              [
                'q' => "माइग्रेन का इलाज कितने दिन में होता है?",
                'a' => "माइग्रेन एक पुरानी बीमारी है जिसके लिए लंबे समय तक इलाज की जरूरत होती है। सही उपचार से 80% मरीजों को राहत मिलती है।"
              ],
              [
                'q' => "क्या माइग्रेन पूरी तरह ठीक हो सकता है?",
                'a' => "माइग्रेन को पूरी तरह से ठीक नहीं किया जा सकता, लेकिन दवाई और जीवनशैली में बदलाव से इसे नियंत्रित किया जा सकता है।"
              ],
              [
                'q' => "बॉटॉक्स माइग्रेन के लिए कितना प्रभावी है?",
                'a' => "बॉटॉक्स थेरेपी क्रोनिक माइग्रेन (15+ दिन/महीना) के लिए FDA-अनुमोदित है और 50% तक सिरदर्द कम कर सकती है।"
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