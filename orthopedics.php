<?php
$dept_key = 'orthopedics';
require_once 'includes/data.php';
include 'includes/head.php';
include 'includes/header-v2.php';
include 'components/department-template.php';

// Districts Data
$districts = [
    'ambala' => 'Ambala',
    'bhiwani' => 'Bhiwani',
    'charkhi-dadri' => 'Charkhi Dadri',
    'faridabad' => 'Faridabad',
    'fatehabad' => 'Fatehabad',
    'gurugram' => 'Gurugram',
    'hisar' => 'Hisar',
    'jhajjar' => 'Jhajjar',
    'jind' => 'Jind',
    'kaithal' => 'Kaithal',
    'karnal' => 'Karnal',
    'kurukshetra' => 'Kurukshetra',
    'mahendragarh' => 'Mahendragarh',
    'nuh' => 'Nuh',
    'palwal' => 'Palwal',
    'panchkula' => 'Panchkula',
    'panipat' => 'Panipat',
    'rewari' => 'Rewari',
    'rohtak' => 'Rohtak',
    'sirsa' => 'Sirsa',
    'sonipat' => 'Sonipat',
    'yamunanagar' => 'Yamunanagar'
];
?>

<!-- Locations Upper Footer Section -->
<section class="py-16 bg-gray-50 border-t border-gray-200 section-fade">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
        <div 
          onclick="toggleServingAreas()" 
          class="flex items-center space-x-3 cursor-pointer select-none group"
        >
          <div class="bg-[#328CCB]/10 p-2 rounded-lg group-hover:bg-[#328CCB]/20 transition-colors">
            <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
          </div>
          <h3 class="text-3xl font-bold text-gray-900 flex items-center gap-2">
            We are serving in these areas
            <span class="transform transition-transform duration-200" id="serving-chevron">
              <?php echo getIcon('ChevronDown', 'h-6 w-6 text-gray-500 group-hover:text-[#328CCB]'); ?>
            </span>
          </h3>
        </div>
        <div class="relative w-full md:w-80">
          <select 
            onchange="if(this.value) window.location.href=this.value;" 
            class="block w-full bg-white border border-gray-300 rounded-xl px-4 py-3 pr-10 text-gray-700 font-medium focus:outline-none focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] cursor-pointer appearance-none shadow-sm transition-all"
          >
            <option value="">Select Your Location / District</option>
            <?php foreach ($districts as $slug => $name): ?>
              <option value="/orthopedic-hospital/haryana/<?php echo $slug; ?>/">
                <?php echo $name; ?>
              </option>
            <?php endforeach; ?>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
            <?php echo getIcon('ChevronDown', 'h-5 w-5'); ?>
          </div>
        </div>
      </div>

      <div id="serving-areas-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12 hidden">
        <?php foreach ($districts as $slug => $name): ?>
          <div class="group">
            <a href="/orthopedic-hospital/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-[#328CCB] transition-colors duration-200">
              <div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-[#328CCB] transition-colors"></div>
              <span class="font-medium">Best Orthopedic Hospital in <?php echo $name; ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<script>
function toggleServingAreas() {
  const container = document.getElementById('serving-areas-grid');
  const chevron = document.getElementById('serving-chevron');
  if (container && chevron) {
    if (container.classList.contains('hidden')) {
      container.classList.remove('hidden');
      chevron.style.transform = 'rotate(180deg)';
    } else {
      container.classList.add('hidden');
      chevron.style.transform = 'rotate(0deg)';
    }
  }
}
</script>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>