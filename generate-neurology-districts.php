<?php
/**
 * Generate Neurology Haryana District Pages (Hindi)
 * Creates 22 Hindi-language location pages for neurology
 */

$baseDir = __DIR__;
$haryanaDir = $baseDir . '/neurology/haryana';

// District data with landmarks
$districts_mapping = [
    'ambala' => ['display' => 'Ambala', 'landmarks' => ['Ambala Cantt', 'Jagadhari', 'Naraingarh']],
    'bhiwani' => ['display' => 'Bhiwani', 'landmarks' => ['Bhiwani City', 'Tosham', 'Loharu']],
    'charkhi-dadri' => ['display' => 'Charkhi Dadri', 'landmarks' => ['Charkhi Dadri', 'Bahal', 'Jhojhu']],
    'faridabad' => ['display' => 'Faridabad', 'landmarks' => ['Sector 15', 'Ballabhgarh', 'Palwal']],
    'fatehabad' => ['display' => 'Fatehabad', 'landmarks' => ['Fatehabad City', 'Tohana', 'Ratia']],
    'gurgaon' => ['display' => 'Gurgaon', 'landmarks' => ['Sector 56', 'Cyber Hub', 'MG Road']],
    'hisar' => ['display' => 'Hisar', 'landmarks' => ['Hisar City', 'Agricultural University', 'Camp']],
    'jhajjar' => ['display' => 'Jhajjar', 'landmarks' => ['Jhajjar City', 'Bahadurgarh', 'Kosli']],
    'jind' => ['display' => 'Jind', 'landmarks' => ['Jind City', 'Narwana', 'Uklana']],
    'kaithal' => ['display' => 'Kaithal', 'landmarks' => ['Kaithal City', 'Pundri', 'Rajond']],
    'karnal' => ['display' => 'Karnal', 'landmarks' => ['Karnal City', 'Nilokheri', 'Indri']],
    'kurukshetra' => ['display' => 'Kurukshetra', 'landmarks' => ['Kurukshetra City', 'Pehowa', 'Shahabad']],
    'mahendragarh' => ['display' => 'Mahendragarh', 'landmarks' => ['Narnaul', 'Mahendragarh', 'Kanina']],
    'mewat' => ['display' => 'Mewat', 'landmarks' => ['Nuh', 'Firozpur Jhirka', 'Taoru']],
    'palwal' => ['display' => 'Palwal', 'landmarks' => ['Palwal City', 'Hassanpur', 'Hodel']],
    'panchkula' => ['display' => 'Panchkula', 'landmarks' => ['Sector 21', 'Panchkula', 'Morni']],
    'panipat' => ['display' => 'Panipat', 'landmarks' => ['Panipat City', 'Israna', 'Samalkha']],
    'rewari' => ['display' => 'Rewari', 'landmarks' => ['Rewari City', 'Bawal', 'Kosli']],
    'rohtak' => ['display' => 'Rohtak', 'landmarks' => ['Rohtak City', 'Meham', 'Sampla']],
    'sirsa' => ['display' => 'Sirsa', 'landmarks' => ['Sirsa City', 'Ellenabad', 'Rania']],
    'sonipat' => ['display' => 'Sonipat', 'landmarks' => ['Sonipat City', 'Gohana', 'Kharkhoda']],
    'yamunanagar' => ['display' => 'Yamunanagar', 'landmarks' => ['Yamunanagar', 'Jagadhri', 'Chhachhrauli']]
];

// Create main haryana directory
if (!is_dir($haryanaDir)) {
    mkdir($haryanaDir, 0755, true);
}

// Create index page for haryana
$haryanaIndex = <<<'PHP'
<?php
/**
 * Neurology - Haryana
 * Brain & Nerve Care Location Hub
 */
$page_title = 'Haryana में न्यूरोलॉजी डॉक्टर | अक्रोपोलिस हॉस्पिटल';
$page_description = 'हरियाणा के सभी जिलों में दिमाग और नसों की बीमारी का इलाज। अक्रोपोलिस हॉस्पिटल गुरुग्राम में NCR के सबसे अनुभवी न्यूरोलॉजिस्ट।';
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
      <h1 class="text-4xl font-bold text-gray-900 mb-4">हरियाणा में न्यूरोलॉजी डॉक्टर</h1>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">अक्रोपोलिस हॉस्पिटल, गुरुग्राम - दिमाग और नसों की बीमारी में NCR का सबसे भरोसेमंद सेंटर। अपने जिले का चुनें।</p>
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
        <a href="/neurology/haryana/<?php echo $slug; ?>/" class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 group text-center">
          <div class="bg-purple-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-500 transition-colors">
            <svg class="h-6 w-6 text-purple-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
          </div>
          <h3 class="font-bold text-gray-900"><?php echo $name; ?></h3>
          <p class="text-sm text-gray-500 mt-1">न्यूरो डॉक्टर</p>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; include dirname(__DIR__) . '/includes/scripts.php'; ?>
PHP;

file_put_contents($haryanaDir . '/index.php', $haryanaIndex);
echo "Created: neurology/haryana/index.php\n";

// Generate district pages
foreach ($districts_mapping as $slug => $data) {
    $districtDir = $haryanaDir . '/' . $slug;
    if (!is_dir($districtDir)) {
        mkdir($districtDir, 0755, true);
    }

    $display = $data['display'];
    $landmarksArray = "['" . implode("', '", $data['landmarks']) . "']";

    $page = <<<PHP
<?php
/**
 * Neurology District Page - {$display}
 */
\$district_name = '{$slug}';
\$district_display = '{$display}';
\$landmarks = {$landmarksArray};
include __DIR__ . '/../../../components/neurology-district-template.php';
?>
PHP;

    file_put_contents($districtDir . '/index.php', $page);
    echo "Created: neurology/haryana/{$slug}/index.php\n";
}

echo "\nAll " . count($districts_mapping) . " district pages created for Neurology!\n";
echo "URL structure: /neurology/haryana/[district-name]/\n";