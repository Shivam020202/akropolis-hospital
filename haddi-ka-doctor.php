<?php
/**
 * Main Haddi Ka Doctor Page - Redesigned to look like a Doctor/Specialty Profile
 */
require_once 'includes/data.php';

// Doctor Data (Focus on Dr. Prateek Girotra)
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === 'dr-prateek-girotra') {
        $doctor = $d;
        break;
    }
}

$page_title = 'Haddi Ka Doctor | Dr. Prateek Girotra | Akropolis';
include 'includes/head.php';
include 'includes/header-v2.php';

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

<main class="bg-gray-50">
  <!-- Hero Section (Doctor Style) -->
  <div class="bg-white border-b shadow-sm">
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col md:flex-row items-center gap-8">
        <img width="400" height="400" src="<?php echo $doctor['image']; ?>" class="w-48 h-48 rounded-full border-4 border-[#328CCB]/20 object-cover" />
        <div class="text-center md:text-left">
          <h1 class="text-4xl font-bold text-gray-900 mb-2">हरियाणा के सबसे प्रसिद्ध हड्डी के डॉक्टर</h1>
          <p class="text-[#328CCB] text-xl font-semibold mb-4">डॉ प्रतीक गिरोत्रा - प्रमुख, हड्डी रोग विभाग</p>
          <div class="flex flex-wrap justify-center md:justify-start gap-4">
            <a href="/contact" class="bg-[#328CCB] text-white px-6 py-3 rounded-xl font-bold flex items-center space-x-2">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Appointment Book Karein</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] text-white px-6 py-3 rounded-xl font-bold">
              Emergency: <?php echo CONTACT_INFO['emergency']; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-4 py-12">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Main Content -->
      <div class="lg:col-span-2 space-y-8">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h2 class="text-3xl font-bold text-gray-900 mb-6">हड्डी रोग और जोड़ों का इलाज (Hindi Content)</h2>
          <div class="prose prose-lg text-gray-700 space-y-6">
            <p>
              अक्रोपोलिस हॉस्पिटल हरियाणा का एक प्रमुख हड्डी रोग केंद्र है। यहाँ डॉ प्रतीक गिरोत्रा के नेतृत्व में आधुनिक तकनीकों द्वारा घुटने, कूल्हे और रीढ़ की हड्डी का सफल इलाज किया जाता है। 
              हमारा लक्ष्य है मरीज़ को दर्द-मुक्त जीवन देना और उन्हें फिर से सक्रिय बनाना।
            </p>
            <p>
              हम हरियाणा के सभी प्रमुख जिलों में अपनी सेवाएं प्रदान कर रहे हैं। यदि आप अपने शहर में सबसे अच्छे हड्डी के डॉक्टर की तलाश कर रहे हैं, तो नीचे दिए गए लिंक्स पर क्लिक करके अपने शहर की जानकारी ले सकते हैं।
            </p>
          </div>
        </div>

        <!-- Areas We Serve -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h3 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
            <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
            हम इन क्षेत्रों में अपनी सेवाएं दे रहे हैं
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php foreach ($districts as $slug => $name): ?>
              <a href="/haddi-ka-doctor/haryana/<?php echo $slug; ?>" class="flex items-center space-x-3 p-3 rounded-lg border border-gray-100 hover:border-[#328CCB] hover:bg-blue-50 transition-all group">
                <div class="h-2 w-2 bg-[#328CCB] rounded-full"></div>
                <span class="text-gray-700 group-hover:text-[#328CCB] font-medium"><?php echo $name; ?> में सबसे अच्छे हड्डी के डॉक्टर</span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24 border border-gray-100">
          <h3 class="font-bold text-gray-900 mb-6 text-xl">Quick Links</h3>
          <ul class="space-y-4">
            <li><a href="/doctors/dr-prateek-girotra" class="text-gray-600 hover:text-[#328CCB] flex items-center gap-2"><?php echo getIcon('User', 'h-4 w-4'); ?> Doctor Profile</a></li>
            <li><a href="/orthopedics" class="text-gray-600 hover:text-[#328CCB] flex items-center gap-2"><?php echo getIcon('Bone', 'h-4 w-4'); ?> Orthopedics Dept</a></li>
            <li><a href="/about" class="text-gray-600 hover:text-[#328CCB] flex items-center gap-2"><?php echo getIcon('Heart', 'h-4 w-4'); ?> About Hospital</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>