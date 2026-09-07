<?php
require_once 'includes/data.php';
$page_title = 'Medical Departments | Akropolis';
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
  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('https://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?auto=compress&cs=tinysrgb&w=1600');"
    >
      <div class="absolute inset-0 bg-[#328CCB] bg-opacity-75"></div>
    </div>

    <div class="relative container mx-auto px-4 py-20 lg:py-32">
      <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center space-x-2 mb-6">
          <?php echo getIcon('Building2', 'h-6 w-6 text-yellow-400'); ?>
          <span class="text-yellow-400 font-semibold">Medical Excellence</span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          Our Medical
          <span class="block">Departments</span>
        </h1>
        <h2 class="sr-only">Our Departments Overview</h2>

        <p class="text-xl lg:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">
          Comprehensive healthcare services across all medical specialties with expert doctors,
          advanced technology, and compassionate care.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
          <a
            href="/contact"
            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Book Appointment</span>
          </a>
          <a
            href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
            class="bg-white hover:bg-gray-50 text-[#328CCB] px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
          </a>
        </div>

        <div class="mt-8 text-center">
          <a href="/" class="text-blue-200 hover:text-white font-medium transition-colors duration-200">
            ← Back to Hospital
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Filter Section -->
  <section class="py-12 bg-white shadow-sm">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="flex flex-wrap justify-center gap-4">
          <button
            onclick="filterDepartments('all')"
            id="cat-all"
            class="cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-[#D66C43] text-white shadow-lg"
          >
            All Departments
          </button>
          <button
            onclick="filterDepartments('surgical')"
            id="cat-surgical"
            class="cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-[#328CCB]/10 hover:text-[#328CCB] border border-gray-200"
          >
            Surgical
          </button>
          <button
            onclick="filterDepartments('medical')"
            id="cat-medical"
            class="cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-[#328CCB]/10 hover:text-[#328CCB] border border-gray-200"
          >
            Medical
          </button>
          <button
            onclick="filterDepartments('diagnostic')"
            id="cat-diagnostic"
            class="cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-[#328CCB]/10 hover:text-[#328CCB] border border-gray-200"
          >
            Diagnostic
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Grid -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="departments-grid">
        <?php
        $allDepartments = [
          [
            'id' => 'cardiology',
            'title' => 'Cardiology',
            'description' => 'Advanced heart care with state-of-the-art cardiac procedures, interventional cardiology, and comprehensive cardiovascular treatments.',
            'icon' => 'Heart',
            'image' => 'https://brandingpioneers.co.in/akropolis/Cardiology.jpg',
            'services' => ['Cardiac Catheterization', 'Angioplasty & Stenting', 'Echocardiography', 'Stress Testing', 'Holter Monitoring', 'Pacemaker Implantation'],
            'category' => 'surgical',
            'page' => 'cardiology.php'
          ],
          [
            'id' => 'neurology',
            'title' => 'Neurology',
            'description' => 'Comprehensive brain and nervous system care with advanced neurological treatments and diagnostic services.',
            'icon' => 'Brain',
            'image' => 'https://brandingpioneers.co.in/akropolis/Neurology.webp',
            'services' => ['Stroke Management', 'Epilepsy Treatment', 'Neurological Diagnostics', 'Movement Disorders', 'Memory Disorders', 'Headache Treatment'],
            'category' => 'medical',
            'page' => 'neurology.php'
          ],
          [
            'id' => 'nephrology',
            'title' => 'Nephrology & Dialysis',
            'description' => 'Comprehensive kidney care with advanced treatments for all renal conditions and dialysis services.',
            'icon' => 'Droplets',
            'image' => 'https://brandingpioneers.co.in/akropolis/Nephrology.webp',
            'services' => ['Kidney Disease Treatment', 'Dialysis Services', 'Transplant Care', 'Hypertension Management', 'Chronic Kidney Disease', 'Acute Kidney Injury'],
            'category' => 'medical',
            'page' => 'nephrology.php'
          ],
          [
            'id' => 'oncology',
            'title' => 'Oncology',
            'description' => 'Comprehensive cancer care with advanced treatment options and multidisciplinary approach.',
            'icon' => 'Activity',
            'image' => 'https://brandingpioneers.co.in/akropolis/Oncology.webp',
            'services' => ['Cancer Diagnosis', 'Chemotherapy', 'Radiation Therapy', 'Surgical Oncology', 'Immunotherapy', 'Palliative Care'],
            'category' => 'medical',
            'page' => 'oncology.php'
          ],
          [
            'id' => 'gynecology',
            'title' => 'Obstetrics & Gynecology',
            'description' => "Comprehensive women's health and reproductive care with advanced gynecological treatments and maternity services.",
            'icon' => 'Heart',
            'image' => 'https://brandingpioneers.co.in/akropolis/Gynecology.webp',
            'services' => ['Maternity Care', 'Gynecological Surgery', 'Fertility Treatment', "Women's Health Screening", 'High-Risk Pregnancy', 'Laparoscopic Surgery'],
            'category' => 'medical',
            'page' => 'obstetrics-gynecology.php'
          ],
          [
            'id' => 'orthopedics',
            'title' => 'Orthopedics & Joint Replacement',
            'description' => 'Expert bone, joint, and muscle care with advanced orthopedic surgery and comprehensive musculoskeletal treatments.',
            'icon' => 'Bone',
            'image' => 'https://brandingpioneers.co.in/akropolis/Orthopaedics.jpg',
            'services' => ['Joint Replacement Surgery', 'Arthroscopic Surgery', 'Fracture Treatment', 'Sports Medicine', 'Spine Surgery', 'Trauma Care'],
            'category' => 'surgical',
            'page' => 'orthopedics.php'
          ],
          [
            'id' => 'plastic-surgery',
            'title' => 'Plastic & Reconstructive Surgery',
            'description' => 'Comprehensive surgical services with minimally invasive techniques and advanced surgical procedures.',
            'icon' => 'Scissors',
            'image' => 'https://brandingpioneers.co.in/akropolis/Plastic-Surgery.webp',
            'services' => ['Cosmetic Surgery', 'Reconstructive Surgery', 'Burn Treatment', 'Aesthetic Procedures', 'Hand Surgery', 'Microsurgery'],
            'category' => 'surgical',
            'page' => 'plastic-surgery.php'
          ],
          [
            'id' => 'ent',
            'title' => 'ENT (Ear, Nose & Throat)',
            'description' => 'Ear, nose, and throat care with advanced ENT surgery and comprehensive treatment for hearing and speech disorders.',
            'icon' => 'Ear',
            'image' => 'https://brandingpioneers.co.in/akropolis/ENT.webp',
            'services' => ['Hearing Loss Treatment', 'Sinus Surgery', 'Throat Disorders', 'Voice & Speech Therapy', 'Tonsillectomy', 'Ear Microsurgery'],
            'category' => 'surgical',
            'page' => 'ent.php'
          ],
          [
            'id' => 'ophthalmology',
            'title' => 'Ophthalmology (Eye Care)',
            'description' => 'Advanced eye care and vision treatment with comprehensive ophthalmological services.',
            'icon' => 'Eye',
            'image' => 'https://brandingpioneers.co.in/akropolis/Ophthalmology.webp',
            'services' => ['Cataract Surgery', 'Retinal Treatment', 'Glaucoma Management', 'Vision Correction', 'Corneal Transplant', 'Pediatric Ophthalmology'],
            'category' => 'surgical',
            'page' => 'ophthalmology.php'
          ],
          [
            'id' => 'dermatology',
            'title' => 'Dermatology & Cosmetology',
            'description' => 'Comprehensive skin, hair, and nail care with advanced dermatological treatments.',
            'icon' => 'Sparkles',
            'image' => 'https://brandingpioneers.co.in/akropolis/Dermatology.webp',
            'services' => ['Skin Disease Treatment', 'Cosmetic Dermatology', 'Hair Treatment', 'Laser Therapy', 'Acne Treatment', 'Anti-Aging Treatments'],
            'category' => 'medical',
            'page' => 'dermatology.php'
          ],
          [
            'id' => 'gastroenterology',
            'title' => 'Gastroenterology & Endoscopy',
            'description' => 'Advanced digestive system care with comprehensive gastroenterological treatments.',
            'icon' => 'Pill',
            'image' => 'https://brandingpioneers.co.in/akropolis/Gastroenterology.webp',
            'services' => ['Endoscopy', 'Colonoscopy', 'Liver Disease Treatment', 'Digestive Disorders', 'ERCP Procedures', 'IBD Treatment'],
            'category' => 'medical',
            'page' => 'gastroenterology.php'
          ],
          [
            'id' => 'nicu-pediatrics',
            'title' => 'NICU & Pediatrics',
            'description' => 'Specialized care for newborns and children with advanced pediatric treatments.',
            'icon' => 'Baby',
            'image' => 'https://brandingpioneers.co.in/akropolis/NICU & Pediatrics.webp',
            'services' => ['Newborn Care', 'Pediatric Surgery', 'Child Development', 'Vaccination Programs', 'NICU Services', 'Pediatric Emergency'],
            'category' => 'medical',
            'page' => 'pediatrics.php'
          ],
          [
            'id' => 'nutrition',
            'title' => 'Health & Nutrition',
            'description' => 'Comprehensive nutritional counseling and wellness programs for optimal health.',
            'icon' => 'Apple',
            'image' => 'https://brandingpioneers.co.in/akropolis/Health & Nutrition.webp',
            'services' => ['Diet Planning', 'Nutritional Counseling', 'Weight Management', 'Wellness Programs', 'Lifestyle Modification', 'Therapeutic Nutrition'],
            'category' => 'diagnostic',
            'page' => 'health-nutrition.php'
          ]
        ];

        foreach ($allDepartments as $dept):
        ?>
          <div
            class="dept-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden"
            data-category="<?php echo $dept['category']; ?>"
          >
            <!-- Department Image -->
            <div class="relative h-48 overflow-hidden">
              <img
                src="<?php echo $dept['image']; ?>"
                alt="<?php echo $dept['title']; ?>"
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
              <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm p-3 rounded-xl shadow-lg">
                <?php echo getIcon($dept['icon'], 'h-6 w-6 text-[#328CCB]'); ?>
              </div>
            </div>

            <!-- Content -->
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-3">
                <?php echo $dept['title']; ?>
              </h3>
              <p class="text-gray-600 leading-relaxed mb-6">
                <?php echo $dept['description']; ?>
              </p>

              <!-- CTA Buttons -->
              <div class="flex flex-col space-y-3">
                <a
                  href="/<?php echo $dept['page']; ?>"
                  class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2"
                >
                  <span>Learn More</span>
                  <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>

<script>
function filterDepartments(category) {
  const cards = document.querySelectorAll('.dept-card');
  const catBtns = document.querySelectorAll('.cat-btn');
  
  catBtns.forEach(btn => {
    if (btn.id === 'cat-' + category) {
      btn.className = 'cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-[#D66C43] text-white shadow-lg';
    } else {
      btn.className = 'cat-btn px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-white text-gray-700 hover:bg-[#328CCB]/10 hover:text-[#328CCB] border border-gray-200';
    }
  });

  cards.forEach(card => {
    if (category === 'all' || card.dataset.category === category) {
      card.style.display = '';
    } else {
      card.style.display = 'none';
    }
  });
}
</script>
