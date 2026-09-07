<?php
/**
 * Haddi Ka Doctor District Page Template (Hindi & SEO Optimized)
 * Card-based design similar to doctor profile pages
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "$district_display mein Sabse Acche Haddi Ka Doctor";
$meta_title = "$target_keyword | Dr. Prateek Girotra";
$meta_description = "$district_display mein sabse acche haddi ka doctor ki khoj yahan khatam hoti hai. Dr. Prateek Girotra (Orthopedic Head) pradan karte hain joint replacement aur sports injury ka upchar.";

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
include dirname(__DIR__) . '/includes/head.php';

// Doctor Data (Focus on Dr. Prateek Girotra)
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === 'dr-prateek-girotra') {
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
          <li><a href="/haddi-ka-doctor" class="hover:text-[#328CCB]">Haddi Ka Doctor</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Left Sidebar: Doctor Profile (Card Design) -->
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
              Head of Orthopedics
            </p>
            <p class="text-gray-600 mb-4">
              <?php echo htmlspecialchars($doctor['qualification']); ?>
            </p>

            <div class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
              <?php echo getIcon('CheckCircle', 'h-4 w-4'); ?>
              <span>Top Surgeon for <?php echo $district_display; ?></span>
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
            <div class="flex items-center space-x-3">
              <div class="bg-[#D66C43]/10 p-2 rounded-lg">
                <?php echo getIcon('Clock', 'h-5 w-5 text-[#D66C43]'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">OPD Timing</p>
                <p class="text-gray-600"><?php echo $doctor['opdTiming']; ?></p>
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

      <!-- Right Main Content: Hindi SEO Content -->
      <div class="lg:col-span-2 space-y-8">
        <!-- Content Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 border border-gray-100">
          <h1 class="text-3xl font-bold text-gray-900 mb-8 border-b pb-4">
            <?php echo $district_display; ?> में सबसे अच्छे हड्डी का डॉक्टर: डॉ प्रतीक गिरोत्रा
          </h1>
          <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-6">
            <p class="font-medium text-lg text-gray-900">
                क्या आप <?php echo $district_display; ?> में हड्डी से जुड़ी समस्याओं के लिए सबसे अच्छे विशेषज्ञ की तलाश कर रहे हैं? 
                अक्रोपोलिस हॉस्पिटल के डॉ प्रतीक गिरोत्रा इस क्षेत्र के सबसे अनुभवी और प्रसिद्ध हड्डी रोग विशेषज्ञ (Orthopedic Surgeon) हैं।
            </p>

            <p>
                हड्डी और जोड़ों का दर्द किसी भी व्यक्ति के जीवन को प्रभावित कर सकता है। चाहे वह घुटने का दर्द हो, पीठ दर्द हो या फिर खेल के दौरान लगी कोई चोट, सही समय पर सही इलाज बहुत ज़रूरी है। <?php echo $district_display; ?> में हमारे मरीज़ों को विश्वस्तरीय चिकित्सा सुविधाएं प्रदान करने के लिए अक्रोपोलिस हॉस्पिटल हमेशा तत्पर रहता है। 
                विशेष रूप से <strong><?php echo implode(', ', $landmarks); ?></strong> के पास रहने वाले लोगों के लिए हमारा हॉस्पिटल सबसे सुविधाजनक विकल्प है।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हड्डी रोगों के विशेषज्ञ: डॉ प्रतीक गिरोत्रा क्यों?</h3>
            <p>
                डॉ प्रतीक गिरोत्रा (MBBS, MS Orthopaedics) अक्रोपोलिस हॉस्पिटल में हड्डी रोग विभाग के प्रमुख (Director & Head) हैं। उन्हें 12 वर्षों से अधिक का अनुभव है और उन्होंने हज़ारों सफल सर्जरी की हैं। उनकी विशेषज्ञता के प्रमुख क्षेत्र निम्नलिखित हैं:
            </p>
            <ul class="grid md:grid-cols-2 gap-4 list-none pl-0">
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Bone', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>घुटना प्रत्यारोपण (Knee Replacement)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>कूल्हा प्रत्यारोपण (Hip Replacement)</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('Zap', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>स्पोर्ट्स इंजरी और आर्थ्रोस्कोपी</span>
                </li>
                <li class="flex items-center space-x-2 bg-blue-50 p-3 rounded-lg border-l-4 border-[#328CCB]">
                    <?php echo getIcon('AlertCircle', 'h-5 w-5 text-[#328CCB]'); ?>
                    <span>जटिल ट्रॉमा और फ्रैक्चर सर्जरी</span>
                </li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> में उपलब्ध आधुनिक सुविधाएं</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल में हम आधुनिक तकनीक (Advanced Technology) का उपयोग करते हैं ताकि हमारे मरीज़ों को जल्द से जल्द राहत मिले और वे अपनी सामान्य जीवनशैली में लौट सकें। हमारे पास उपलब्ध सुविधाओं में शामिल हैं:
            </p>
            <ol class="space-y-4">
                <li><strong>रोबोटिक-असिस्टेड सर्जरी:</strong> अधिक सटीकता और कम समय में रिकवरी के लिए।</li>
                <li><strong>24×7 इमरजेंसी सेवा:</strong> किसी भी प्रकार के हड्डी के फ्रैक्चर या दुर्घटना की स्थिति में तुरंत इलाज।</li>
                <li><strong>आधुनिक फिजियोथेरेपी विभाग:</strong> सर्जरी के बाद तेज़ी से सुधार के लिए विशेष व्यायाम प्रोग्राम।</li>
            </ol>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">हड्डी और जोड़ों के स्वास्थ्य का महत्व</h3>
            <p>
                हमारे शरीर का पूरा ढांचा हड्डियों पर टिका होता है। उम्र बढ़ने के साथ-साथ हड्डियों का घनत्व (Bone Density) कम होने लगता है, जिससे ऑस्टियोपोरोसिस (Osteoporosis) जैसी समस्याएं हो सकती हैं। <?php echo $district_display; ?> में हमारे कई मरीज़ जोड़ों के पुराने दर्द से परेशान रहते हैं। डॉ प्रतीक गिरोत्रा का मानना है कि यदि शुरुआती लक्षणों जैसे कि जोड़ों में जकड़न, सूजन या हल्का दर्द होने पर ही विशेषज्ञ से सलाह ली जाए, तो भविष्य में होने वाली बड़ी सर्जरी से बचा जा सकता है।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">अक्रोपोलिस हॉस्पिटल में हड्डी रोग विभाग की विशेषताएं</h3>
            <p>
                हमारा हॉस्पिटल केवल सर्जरी तक ही सीमित नहीं है, बल्कि हम पूर्ण उपचार (Complete Healing) में विश्वास रखते हैं। <?php echo $district_display; ?> के निवासियों के लिए हमने एक विशेष 'बोन एंड जॉइंट क्लिनिक' (Bone & Joint Clinic) शुरू किया है। यहाँ हम निम्नलिखित उन्नत तकनीकों का उपयोग करते हैं:
            </p>
            <ul class="space-y-4">
                <li><strong>डिज़िटल रेडियोग्राफी (X-Ray):</strong> तुरंत और सटीक रिपोर्ट के लिए।</li>
                <li><strong>मिनिमली इनवेसिव सर्जरी (MIS):</strong> छोटे चीरे वाली सर्जरी जिससे खून कम बहता है और मरीज़ अगले ही दिन चलने लगता है।</li>
                <li><strong>स्पोर्ट्स मेडिसिन:</strong> एथलीट्स और खिलाड़ियों के लिए विशेष लिगामेंट रिपेयर (ACL/MCL Surgery) की सुविधा।</li>
            </ul>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> के मरीज़ों के लिए विशेष परामर्श</h3>
            <p>
                डॉ प्रतीक गिरोत्रा विशेष रूप से ग्रामीण और शहरी क्षेत्रों के मरीज़ों के बीच की दूरी को कम करने के लिए जाने जाते हैं। चाहे आप <strong><?php echo $landmarks[1]; ?></strong> के पास हों या <strong><?php echo $landmarks[2]; ?></strong> के आसपास, आप घर बैठे ही अपना स्लॉट बुक कर सकते हैं। 
                वे बताते हैं कि गलत तरीके से बैठने (Poor Posture) और व्यायाम की कमी के कारण आज के युवाओं में स्लिप डिस्क और सर्वाइकल की समस्या बढ़ रही है। अक्रोपोलिस हॉस्पिटल में हम इन समस्याओं का इलाज बिना सर्जरी (Non-Surgical treatment) के भी सफलतापूर्वक करते हैं।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">सर्जरी के बाद की देखभाल (Post-Surgery Care)</h3>
            <p>
                एक सफल सर्जरी केवल 50% काम करती है, बाकी का 50% सुधार सही फिजियोथेरेपी और खान-पान पर निर्भर करता है। अक्रोपोलिस हॉस्पिटल में हमारे पास अनुभवी फिजियोथेरेपिस्ट की टीम है जो मरीज़ के घर जाकर या हॉस्पिटल में विशेष कसरत करवाती है। हम कैल्शियम और विटामिन-डी युक्त आहार चार्ट भी प्रदान करते हैं ताकि हड्डियाँ अंदर से मज़बूत बनी रहें।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">निष्कर्ष (Conclusion)</h3>
            <p>
                यदि आप या आपके परिवार में कोई भी घुटने, कूल्हे, कंधे या रीढ़ की हड्डी के दर्द से परेशान है, तो उसे नज़रअंदाज़ न करें। <?php echo $district_display; ?> में बेहतरीन इलाज के लिए डॉ प्रतीक गिरोत्रा और अक्रोपोलिस हॉस्पिटल की टीम पर आप पूरा भरोसा कर सकते हैं। हमारा लक्ष्य है आपको फिर से आपके पैरों पर खड़ा करना और एक दर्द-मुक्त जीवन देना।
            </p>

            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4"><?php echo $district_display; ?> से अक्रोपोलिस हॉस्पिटल (Gurugram) कैसे पहुँचें?</h3>
            <p>
                अक्रोपोलिस हॉस्पिटल गुरुग्राम के सेक्टर 69 में स्थित है। <?php echo $district_display; ?> से हमारे हॉस्पिटल तक पहुँचना बहुत आसान है। 
                चूंकि हमारे यहाँ हरियाणा के कोने-कोने से मरीज़ आते हैं, हमने यातायात के लिए विशेष गाइडलाइन्स तैयार की हैं:
            </p>
            <div class="grid md:grid-cols-2 gap-6 my-8">
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                    <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <?php echo getIcon('MapPin', 'h-5 w-5 text-[#328CCB]'); ?>
                        सड़क मार्ग (By Road)
                    </h4>
                    <p class="text-sm text-gray-600">
                        आप अपनी निजी कार या बस द्वारा नेशनल हाईवे के माध्यम से सीधे गुरुग्राम पहुँच सकते हैं। <?php echo $district_display; ?> से गुरुग्राम की दूरी तय करने में लगभग कुछ घंटों का समय लगता है।
                    </p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                    <h4 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <?php echo getIcon('Activity', 'h-5 w-5 text-[#328CCB]'); ?>
                        मेट्रो और ट्रेन (By Train/Metro)
                    </h4>
                    <p class="text-sm text-gray-600">
                        आप नई दिल्ली रेलवे स्टेशन पहुँचकर वहां से येलो लाइन मेट्रो लेकर हुडा सिटी सेंटर या सीधे टैक्सी द्वारा हमारे हॉस्पिटल पहुँच सकते हैं।
                    </p>
                </div>
            </div>

            <div class="bg-blue-50 p-8 rounded-2xl border-2 border-dashed border-[#328CCB]/20 mt-12">
                <h4 class="text-xl font-bold text-[#328CCB] mb-4">विशेष नोट (Special Note)</h4>
                <p class="mb-4">
                    हालाँकि हमारे विशेषज्ञ डॉक्टर डॉ प्रतीक गिरोत्रा गुरुग्राम स्थित मुख्य ब्रांच में बैठते हैं, लेकिन <?php echo $district_display; ?> के मरीज़ों के लिए हम **प्रायोरिटी अपॉइंटमेंट (Priority Appointment)** की सुविधा प्रदान करते हैं ताकि उन्हें इंतज़ार न करना पड़े।
                </p>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-blue-100">
                    <h5 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                        <?php echo getIcon('Shield', 'h-5 w-5 text-green-600'); ?>
                        कैशलेस इलाज और इंश्योरेंस (Insurance & TPA)
                    </h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        हम सभी प्रमुख सरकारी और निजी स्वास्थ्य बीमा (Insurance) कंपनियों और TPA के साथ कैशलेस इलाज की सुविधा प्रदान करते हैं। यदि आप <?php echo $district_display; ?> से आ रहे हैं और आपके पास आयुष्मान कार्ड या कोई अन्य पैनल कार्ड है, तो आप हमारी सहायता टीम से बात कर सकते हैं।
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
                'q' => "$district_display में सबसे अच्छे हड्डी के डॉक्टर कौन हैं?",
                'a' => "डॉ प्रतीक गिरोत्रा अक्रोपोलिस हॉस्पिटल में सबसे अनुभवी हड्डी रोग विशेषज्ञ हैं, जो जटिल सर्जरी और जॉइंट रिप्लेसमेंट में विशेषज्ञ हैं।"
              ],
              [
                'q' => "क्या अक्रोपोलिस हॉस्पिटल में कैशलेस इंश्योरेंस उपलब्ध है?",
                'a' => "हाँ, हम सभी प्रमुख TPA और इंश्योरेंस कंपनियों के साथ कैशलेस सुविधा प्रदान करते हैं।"
              ],
              [
                'q' => "क्या ओपीडी के लिए पहले से अपॉइंटमेंट लेना ज़रूरी है?",
                'a' => "भीड़ से बचने और समय की बचत के लिए अपॉइंटमेंट लेना बेहतर होता है। आप " . CONTACT_INFO['phone'] . " पर कॉल कर सकते हैं।"
              ],
              [
                'q' => "हड्डी के फ्रैक्चर के लिए क्या सुविधाएं हैं?",
                'a' => "हमारे पास 24×7 ट्रॉमा सेंटर, डिजिटल एक्स-रे और आधुनिक ऑपरेशन थिएटर उपलब्ध हैं।"
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

  <!-- JSON-LD Schemas -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Physician",
    "name": "Dr. Prateek Girotra",
    "image": "<?php echo $doctor['image']; ?>",
    "medicalSpecialty": "OrthopedicSurgery",
    "description": "Best Orthopedic Surgeon in <?php echo $district_display; ?> specializing in Knee and Hip replacement.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo CONTACT_INFO['address']; ?>",
      "addressLocality": "Gurugram",
      "addressRegion": "Haryana",
      "postalCode": "122101",
      "addressCountry": "IN"
    },
    "telephone": "<?php echo CONTACT_INFO['phone']; ?>",
    "url": "https://akropolishospital.com/doctors/dr-prateek-girotra"
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php foreach ($faqs as $index => $faq): ?>
      {
        "@type": "Question",
        "name": "<?php echo addslashes($faq['q']); ?>",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<?php echo addslashes($faq['a']); ?>"
        }
      }<?php echo $index < count($faqs) - 1 ? ',' : ''; ?>
      <?php endforeach; ?>
    ]
  }
  </script>
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
