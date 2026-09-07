<?php
/**
 * Plastic Surgery - Haryana
 * Cosmetic & Reconstructive Surgery Location Hub
 */
$page_title = 'Haryana में प्लास्टिक सर्जरी | अक्रोपोलिस हॉस्पिटल';
$page_description = 'हरियाणा के सभी जिलों में प्लास्टिक सर्जरी का इलाज। अक्रोपोलिस हॉस्पिटल गुरुग्राम में डॉ. राहुल जैन।';
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
      <h1 class="text-4xl font-bold text-gray-900 mb-4">हरियाणा में प्लास्टिक सर्जरी</h1>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">अक्रोपोलिस हॉस्पिटल, गुरुग्राम - कॉस्मेटिक और रिकंस्ट्रक्टिव सर्जरी में NCR का सबसे भरोसेमंद सेंटर। अपने जिले का चुनें।</p>
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
        <a href="/plastic-surgery/haryana/<?php echo $slug; ?>/" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center">
          <div class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-500 transition-colors">
            <svg class="h-6 w-6 text-blue-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
          </div>
          <h3 class="font-bold text-gray-900"><?php echo $name; ?></h3>
          <p class="text-sm text-gray-500 mt-1">प्लास्टिक सर्जन</p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; include dirname(__DIR__) . '/includes/scripts.php'; ?>