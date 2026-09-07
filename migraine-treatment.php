<?php
/**
 * Migraine Treatment Main Page
 */

$meta_title = "Migraine Treatment in Haryana | Best Headache Specialist | Akropolis Hospital";
$meta_description = "Best migraine and headache treatment in Haryana. Expert neurologist Dr. Priya Sharma at Akropolis Hospital, Gurugram. Find treatment near your district.";

$page_title = $meta_title;
include 'includes/head.php';
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
<?php include 'includes/header-v2.php'; ?>

<main class="bg-gray-50">
  <!-- Breadcrumbs -->
  <div class="bg-white border-b">
    <div class="container mx-auto px-4 py-4">
      <nav class="flex text-sm text-gray-500" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
          <li><a href="/" class="hover:text-[#328CCB]">Home</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium">Migraine Treatment</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mx-auto px-4 py-12">
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-900 mb-4">Migraine & Headache Treatment in Haryana</h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Expert migraine treatment across all Haryana districts. Dr. Priya Sharma (Neurologist) at Akropolis Hospital, Gurugram provides world-class care.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
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
        <a href="/migraine-treatment/haryana/<?php echo $slug; ?>/" class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg hover:border-[#328CCB] transition-all border border-gray-100 text-center group">
          <span class="font-semibold text-gray-900 group-hover:text-[#328CCB]"><?php echo $name; ?></span>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="mt-16 bg-white rounded-2xl shadow-lg p-8 max-w-4xl mx-auto">
      <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Why Choose Akropolis Hospital for Migraine Treatment?</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="text-center">
          <div class="bg-[#328CCB]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <?php echo getIcon('Stethoscope', 'h-8 w-8 text-[#328CCB]'); ?>
          </div>
          <h3 class="font-bold text-gray-900 mb-2">Expert Neurologist</h3>
          <p class="text-gray-600 text-sm">Dr. Priya Sharma with 12+ years experience in migraine treatment</p>
        </div>
        <div class="text-center">
          <div class="bg-[#328CCB]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <?php echo getIcon('Pill', 'h-8 w-8 text-[#328CCB]'); ?>
          </div>
          <h3 class="font-bold text-gray-900 mb-2">Advanced Treatment</h3>
          <p class="text-gray-600 text-sm">Botox therapy, trigger point injections, and latest medications</p>
        </div>
        <div class="text-center">
          <div class="bg-[#328CCB]/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <?php echo getIcon('Shield', 'h-8 w-8 text-[#328CCB]'); ?>
          </div>
          <h3 class="font-bold text-gray-900 mb-2">Insurance Accepted</h3>
          <p class="text-gray-600 text-sm">Cashless treatment with all major insurance providers</p>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>