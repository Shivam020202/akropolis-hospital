<?php
/**
 * Brain Tumor Treatment - Haryana
 * Brain Tumor Care Location Hub
 */
$page_title = 'Haryana में ब्रेन ट्यूमर इलाज | अक्रोपोलिस हॉस्पिटल';
$page_description = 'हरियाणा के सभी जिलों में ब्रेन ट्यूमर और मस्तिष्क संबंधी समस्याओं का इलाज। अक्रोपोलिस हॉस्पिटल गुरुग्राम में NCR के सबसे अनुभवी न्यूरो सर्जन।';
require_once dirname(__DIR__) . '/includes/data.php';
include dirname(__DIR__) . '/includes/head.php';
?>

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">Emergency 24×7: <?php echo CONTACT_INFO['emergency']; ?></span>
  </div>
</div>

<?php include dirname(__DIR__) . '/includes/header-v2.php'; ?>

<main class="bg-gray-50">
  <div class="bg-white py-8 border-b">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">हरियाणा में ब्रेन ट्यूमर इलाज</h1>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">अक्रोपोलिस हॉस्पिटल, गुरुग्राम - ब्रेन ट्यूमर और मस्तिष्क रोग में NCR का सबसे भरोसेमंद सेंटर। अपने जिले का चुनें।</p>
    </div>
  </div>

  <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php
      $districts = [
          'ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri',
          'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon',
          'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal',
          'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh',
          'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat',
          'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat',
          'yamunanagar' => 'Yamunanagar'
      ];
      foreach ($districts as $slug => $name):
      ?>
        <a href="/brain-tumor-treatment/haryana/<?php echo $slug; ?>/" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center">
          <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-500 transition-colors">
            <svg class="h-6 w-6 text-purple-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
          </div>
          <h3 class="font-bold text-gray-900"><?php echo $name; ?></h3>
          <p class="text-sm text-gray-500 mt-1">ब्रेन ट्यूमर इलाज</p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; include dirname(__DIR__) . '/includes/scripts.php'; ?>