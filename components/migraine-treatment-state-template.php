<?php
/**
 * Migraine Treatment State Page Template (Haryana)
 */

// SEO Variables
$state_display = 'Haryana';
$target_keyword = "$state_display mein Migraine Treatment";
$meta_title = "Migraine Treatment in $state_display | Best Headache Specialist";
$meta_description = "$state_display ke sabhi districts mein migraine aur headache treatment. Dr. Priya Sharma (Neurologist) provides world-class treatment at Akropolis Hospital, Gurugram.";

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
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
          <li><a href="/migraine-treatment" class="hover:text-[#328CCB]">Migraine Treatment</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium"><?php echo $state_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">Migraine Treatment in <?php echo $state_display; ?></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Expert migraine and headache treatment across all <?php echo $state_display; ?> districts at Akropolis Hospital, Gurugram.
      </p>
    </div>

    <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php
      $districts = [
        'ambala' => 'Ambala',
        'bhiwani' => 'Bhiwani',
        'charkhi-dadri' => 'Charkhi Dadri',
        'faridabad' => 'Faridabad',
        'fatehabad' => 'Fatehabad',
        'gurgaon' => 'Gurugram',
        'hisar' => 'Hisar',
        'jhajjar' => 'Jhajjar',
        'jind' => 'Jind',
        'kaithal' => 'Kaithal',
        'karnal' => 'Karnal',
        'kurukshetra' => 'Kurukshetra',
        'mahendragarh' => 'Mahendragarh',
        'mewat' => 'Mewat (Nuh)',
        'palwal' => 'Palwal',
        'panchkula' => 'Panchkula',
        'panipat' => 'Panipat',
        'rewari' => 'Rewari',
        'rohtak' => 'Rohtak',
        'sirsa' => 'Sirsa',
        'sonipat' => 'Sonipat',
        'yamunanagar' => 'Yamunanagar'
      ];
      foreach ($districts as $slug => $name):
      ?>
        <a href="/migraine-treatment/haryana/<?php echo $slug; ?>/" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow border border-gray-100 text-center">
          <span class="font-semibold text-gray-900"><?php echo $name; ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php
include dirname(__DIR__) . '/includes/footer.php';
include dirname(__DIR__) . '/includes/scripts.php';
?>