<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';
$page_title = 'Akropolis Super Speciality Hospital | Best Hospital in Gurgaon';
$page_description = 'Looking for the best super speciality hospital in Gurgaon? Akropolis offers advanced medical and diagnostic care, specialist services and 24/7 emergency care in Gurugram.';
$canonical_url = '/';
$schema_blocks = [
    schemaWebSite(),
    schemaWebPage(),
    schemaEmergencyServices(),
    schemaOPD(),
    schemaLaboratory(),
    schemaPharmacy(),
    schemaRadiology(),
    schemaDialysisCenter(),
];
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

<main>
  <!-- Hero Section -->
  <section class="hero-section relative min-h-screen bg-gradient-to-br from-blue-50 via-white to-green-50 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-100 rounded-full translate-y-32 -translate-x-32 opacity-30"></div>

    <div class="container mx-auto px-4 pt-20 pb-16 lg:pt-32 lg:pb-24 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Content Section -->
        <div class="text-center lg:text-left hero-content">
          <!-- Trust Badge -->
          <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium mb-6 float">
            <?php echo getIcon('Award', 'h-4 w-4'); ?>
            <span>NABH Accredited Hospital</span>
          </div>

          <!-- Main Headline -->
          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
            Your Health,
            <span class="text-[#328CCB]"> Our Priority</span>
          </h1>

          <!-- Subheadline -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            Akropolis Super Speciality Hospital provides NABH-accredited healthcare in Gurugram with expert doctors, advanced medical facilities, specialised services and 24/7 emergency care.
          </p>

          <!-- Key Features -->
          <div class="flex flex-wrap justify-center lg:justify-start gap-6 mb-8">
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-[#328CCB] rounded-full"></div>
              <span>24×7 Emergency Care</span>
            </div>
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-[#D66C43] rounded-full"></div>
              <span>5K+ Successful Treatments</span>
            </div>
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-green-600 rounded-full"></div>
              <span>Expert Doctors</span>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
            <a
              href="/contact"
              class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg cta-glow"
            >
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Appointment</span>
            </a>
            <a
              href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
              class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg emergency-glow"
            >
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0">
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-[#328CCB] mb-1">5K+</div>
              <div class="text-sm text-gray-600">Successful Treatments</div>
            </div>
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">50+</div>
              <div class="text-sm text-gray-600">Doctors</div>
            </div>
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-green-600 mb-1">90%</div>
              <div class="text-sm text-gray-600">Patient Satisfaction</div>
            </div>
          </div>
        </div>

        <!-- Image Section -->
        <div class="relative hero-image">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img
              src="/assets/images/homepage/akropolis-building-hero-banner.webp"
              alt="Akropolis Super Speciality Hospital building in Gurugram"
              class="w-full h-[500px] lg:h-[600px] object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
          </div>

          <!-- Floating Cards -->
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 border border-gray-100 floating-card glass-card float-slow">
            <div class="flex items-center space-x-4">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon('Users', 'h-8 w-8 text-[#328CCB]'); ?>
              </div>
              <div>
                <div class="text-2xl font-bold text-gray-900">24/7</div>
                <div class="text-sm text-gray-600">Emergency Care</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Wave -->
    <div class="absolute bottom-0 left-0 right-0">
      <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
      </svg>
    </div>
  </section>

  <!-- Trust Signals Section -->
  <section class="py-12 lg:py-16 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
        <?php foreach (TRUST_SIGNALS as $index => $signal): ?>
          <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex justify-center mb-4 trust-icon">
              <div class="bg-[#328CCB]/10 p-2 lg:p-3 rounded-full">
                <?php echo getIcon($signal['icon'], 'h-6 w-6 lg:h-8 lg:w-8 text-[#328CCB]'); ?>
              </div>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">
              <?php echo $signal['title']; ?>
            </h3>
            <p class="text-gray-600 text-xs lg:text-sm leading-tight lg:leading-relaxed">
              <?php echo $signal['description']; ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white relative overflow-hidden section-fade">
    <div class="container mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Image Section -->
        <div class="relative floating-card">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img
              src="/assets/images/homepage/akropolis-hospital-location-entrance.webp"
              alt="Akropolis hospital main entrance"
              class="w-full h-[500px] object-cover"
            />
          </div>
        </div>

        <!-- Content Section -->
        <div>
          <div class="mb-8">
            <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
              <?php echo getIcon('Heart', 'h-4 w-4'); ?>
              <span>About Akropolis</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
              Committed to
              <span class="text-[#328CCB]"> Healthcare Excellence</span>
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
              Akropolis Super Speciality Hospital combines specialist medical care, advanced diagnostic services, modern hospital facilities and patient-focused care in Gurugram. Our clinical and support services are designed to provide coordinated healthcare across multiple specialties.
            </p>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a
              href="/about"
              class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 w-fit shadow-lg cta-glow"
            >
              <span>Learn More About Us</span>
              <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section id="departments" class="py-20 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Heart', 'h-4 w-4'); ?>
          <span>Our Departments</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mt-2 mb-6">
          Comprehensive <span class="text-[#328CCB]"> Medical Care Across Specialties</span>
        </h3>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $featuredDepts = [
            ['id' => 'cardiology', 'page' => 'cardiology.php', 'title' => 'Cardiology', 'description' => 'Advanced heart care with state-of-the-art cardiac procedures.', 'icon' => 'Heart', 'image' => '/assets/images/homepage/cardiology-department.webp'],
            ['id' => 'neurology', 'page' => 'neurology.php', 'title' => 'Neurology', 'description' => 'Comprehensive brain and nervous system care.', 'icon' => 'Brain', 'image' => '/assets/images/homepage/neurology-department.webp'],
            ['id' => 'nephrology', 'page' => 'nephrology.php', 'title' => 'Nephrology', 'description' => 'Comprehensive kidney care and dialysis services.', 'icon' => 'Droplets', 'image' => '/assets/images/homepage/nephrology-department.webp'],
            ['id' => 'orthopedics', 'page' => 'orthopedics.php', 'title' => 'Orthopedics', 'description' => 'Expert bone, joint, and muscle care.', 'icon' => 'Bone', 'image' => '/assets/images/homepage/orthopedics-department.webp'],
            ['id' => 'pediatrics', 'page' => 'pediatrics.php', 'title' => 'Pediatrics', 'description' => 'Specialized care for newborns and children.', 'icon' => 'Baby', 'image' => '/assets/images/homepage/pediatrics-department.webp'],
            ['id' => 'oncology', 'page' => 'oncology.php', 'title' => 'Oncology', 'description' => 'Comprehensive cancer care and treatment.', 'icon' => 'Activity', 'image' => '/assets/images/homepage/oncology-department.webp']
        ];

        foreach ($featuredDepts as $dept):
        ?>
          <div class="department-card bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
            <div class="relative h-48 overflow-hidden">
              <img width="800" height="600" src="<?php echo $dept['image']; ?>" alt="<?php echo $dept['title']; ?>" class="w-full h-full object-cover" />
              <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm p-3 rounded-xl shadow-lg">
                <?php echo getIcon($dept['icon'], 'h-6 w-6 text-[#328CCB]'); ?>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $dept['title']; ?></h3>
              <p class="text-gray-600 text-sm mb-4"><?php echo $dept['description']; ?></p>
              <a href="/<?php echo $dept['page']; ?>" class="inline-flex items-center space-x-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-300">
                <span>Learn More</span>
                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-16">
        <a href="/departments" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 w-fit mx-auto shadow-lg cta-glow">
          <span>View All Departments</span>
          <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- Doctors Section -->
  <section id="doctors" class="py-20 bg-white overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Users', 'h-4 w-4'); ?>
            <span>Expert Team</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Consult Our <span class="text-[#328CCB]">Specialist Doctors</span>
          </h3>
          <p class="text-gray-600 mt-4 text-lg">
            Our expert doctors have years of training. They work hard to give you the best care possible.
          </p>
        </div>
        <div class="flex space-x-4 mt-8 md:mt-0">
          <button class="doctors-prev p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#328CCB] hover:text-[#328CCB] transition-all duration-300">
            <?php echo getIcon('ChevronLeft', 'h-6 w-6'); ?>
          </button>
          <button class="doctors-next p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#328CCB] hover:text-[#328CCB] transition-all duration-300">
            <?php echo getIcon('ChevronRight', 'h-6 w-6'); ?>
          </button>
        </div>
      </div>

      <div class="doctors-slider relative">
        <div class="doctors-track flex transition-transform duration-500 ease-out">
          <?php foreach ($doctors as $doctor): ?>
            <div class="doctor-card-wrapper flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-4">
              <div class="doctor-card bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-80 overflow-hidden">
                  <img
                    src="<?php echo htmlspecialchars($doctor['image']); ?>"
                    alt="<?php echo htmlspecialchars($doctor['name']); ?>"
                    class="w-full h-full object-cover"
                  />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                  <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <a href="/doctors/<?php echo $doctor['id']; ?>" class="w-full bg-white/95 backdrop-blur-sm text-[#328CCB] py-3 rounded-xl font-bold text-center block shadow-lg">
                      View Profile
                    </a>
                  </div>
                </div>
                <div class="p-6 text-center">
                  <h3 class="text-xl font-bold text-gray-900 mb-1"><?php echo htmlspecialchars($doctor['name']); ?></h3>
                  <p class="text-[#328CCB] font-semibold text-sm mb-4"><?php echo htmlspecialchars($doctor['specialization']); ?></p>
                  <div class="flex items-center justify-center space-x-2 text-gray-500 text-sm mb-6">
                    <?php echo getIcon('Award', 'h-4 w-4'); ?>
                    <span><?php echo htmlspecialchars($doctor['experience']); ?> Experience</span>
                  </div>
                  <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="inline-flex items-center space-x-2 text-[#D66C43] font-bold hover:text-[#c55a36] transition-colors">
                    <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                    <span>Book Appointment</span>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        
        <!-- Slider Indicators -->
        <div class="flex justify-center space-x-2 mt-12">
          <?php 
          $numIndicators = ceil(count($doctors) / 3);
          for($i=0; $i < $numIndicators; $i++): 
          ?>
            <button class="doctor-indicator w-3 h-3 rounded-full bg-gray-200 transition-all duration-300 <?php echo $i===0 ? 'active bg-[#328CCB] w-8' : ''; ?>"></button>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-20 bg-gray-50 relative overflow-hidden section-fade">
    <!-- Background Accents -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-100/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

    <div class="container mx-auto px-4 relative z-10">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Quote', 'h-4 w-4'); ?>
          <span>Patient Stories</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
          Heartfelt Journeys of <span class="text-[#328CCB]">Healing & Hope</span>
        </h3>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Video Testimonial Slider -->
        <div class="testimonials-slider relative">
          <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="testimonial-card <?php echo $index === 0 ? 'block' : 'hidden'; ?> animate-fade-in">
              <div class="relative rounded-3xl overflow-hidden shadow-2xl group aspect-video">
                <img width="800" height="600" 
                  src="<?php echo $testimonial['videoThumbnail']; ?>" 
                  alt="<?php echo $testimonial['patientName']; ?>"
                  class="w-full h-full object-cover"
                />
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                  <button 
                    onclick="openVideoModal('https://www.youtube.com/embed/<?php 
                      preg_match('/vi\/([^\/]+)\//', $testimonial['videoThumbnail'], $matches);
                      echo $matches[1] ?? ''; 
                    ?>')"
                    class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-[#328CCB] shadow-2xl transform transition-all duration-300 group-hover:scale-110 hover:bg-[#328CCB] hover:text-white"
                  >
                    <?php echo getIcon('Play', 'h-8 w-8 ml-1'); ?>
                  </button>
                </div>
              </div>
              
              <div class="mt-8 bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative">
                <div class="absolute -top-6 left-8 bg-[#328CCB] text-white p-4 rounded-xl shadow-lg">
                  <?php echo getIcon('Quote', 'h-6 w-6'); ?>
                </div>
                <p class="text-gray-600 text-lg italic leading-relaxed mb-6 pt-4">
                  "<?php echo $testimonial['testimonial']; ?>"
                </p>
                <div class="flex items-center justify-between">
                  <div>
                    <h4 class="font-bold text-gray-900 text-xl"><?php echo $testimonial['patientName']; ?></h4>
                    <p class="text-[#328CCB] font-medium"><?php echo $testimonial['condition']; ?></p>
                  </div>
                  <div class="flex text-yellow-400">
                    <?php for($i=0; $i<5; $i++) echo getIcon('Star', 'h-5 w-5 fill-current'); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <!-- Slider Controls -->
          <div class="flex items-center space-x-6 mt-8">
            <div class="flex space-x-2">
              <button class="testimonial-prev p-2 rounded-lg bg-white shadow-md text-gray-600 hover:text-[#328CCB] transition-colors">
                <?php echo getIcon('ChevronLeft', 'h-6 w-6'); ?>
              </button>
              <button class="testimonial-next p-2 rounded-lg bg-white shadow-md text-gray-600 hover:text-[#328CCB] transition-colors">
                <?php echo getIcon('ChevronRight', 'h-6 w-6'); ?>
              </button>
            </div>
            <div class="flex space-x-2 testimonial-indicators">
              <?php foreach ($testimonials as $index => $t): ?>
                <button class="testimonial-indicator w-2 h-2 rounded-full <?php echo $index === 0 ? 'bg-[#328CCB] w-6' : 'bg-gray-300'; ?> transition-all duration-300"></button>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Trust & Standards Column -->
<div class="lg:pl-12">

    <div class="mb-8">

        <div
            class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-semibold mb-4"
        >

            <?php echo getIcon('ShieldCheck', 'h-4 w-4'); ?>

            Trusted Healthcare Standards

        </div>


        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-4">

            A Higher Standard of

            <span class="text-[#328CCB]">
                Hospital Care
            </span>

        </h3>


        <p class="text-gray-600 leading-relaxed">

            Akropolis combines NABH-accredited quality standards, specialist
            medical care, advanced diagnostic services and round-the-clock
            emergency support to provide comprehensive healthcare in Gurugram.

        </p>

    </div>


    <div class="space-y-4">


        <!-- NABH Accreditation -->

        <div
            class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300"
        >

            <div class="bg-blue-50 p-3 rounded-xl flex-shrink-0">

                <?php echo getIcon(
                    'Award',
                    'h-7 w-7 text-[#328CCB]'
                ); ?>

            </div>


            <div>

                <h4 class="font-bold text-gray-900 mb-1 text-lg">
                    NABH-Accredited Hospital
                </h4>

                <p class="text-gray-600 leading-relaxed">

                    Akropolis is an NABH-accredited hospital committed to
                    recognised standards for quality and patient care.

                </p>

            </div>

        </div>


        <!-- Advanced Facilities -->

        <div
            class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300"
        >

            <div class="bg-blue-50 p-3 rounded-xl flex-shrink-0">

                <?php echo getIcon(
                    'Building2',
                    'h-7 w-7 text-[#328CCB]'
                ); ?>

            </div>


            <div>

                <h4 class="font-bold text-gray-900 mb-1 text-lg">
                    Advanced Hospital Facilities
                </h4>

                <p class="text-gray-600 leading-relaxed">

                    Specialist departments, diagnostic services and supporting
                    hospital facilities bring multiple aspects of patient care
                    together under one roof.

                </p>

            </div>

        </div>


        <!-- Specialist Care -->

        <div
            class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300"
        >

            <div class="bg-blue-50 p-3 rounded-xl flex-shrink-0">

                <?php echo getIcon(
                    'Stethoscope',
                    'h-7 w-7 text-[#328CCB]'
                ); ?>

            </div>


            <div>

                <h4 class="font-bold text-gray-900 mb-1 text-lg">
                    Specialist-Led Medical Care
                </h4>

                <p class="text-gray-600 leading-relaxed">

                    Patients can access specialist medical care across multiple
                    departments, supported by dedicated clinical teams and
                    diagnostic services.

                </p>

            </div>

        </div>


        <!-- 24/7 Emergency -->

        <div
            class="flex items-start gap-4 p-5 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300"
        >

            <div class="bg-orange-50 p-3 rounded-xl flex-shrink-0">

                <?php echo getIcon(
                    'Clock3',
                    'h-7 w-7 text-[#D66C43]'
                ); ?>

            </div>


            <div>

                <h4 class="font-bold text-gray-900 mb-1 text-lg">
                    24/7 Emergency Care
                </h4>

                <p class="text-gray-600 leading-relaxed">

                    Round-the-clock emergency services are available for
                    patients requiring urgent medical attention.

                </p>

            </div>

        </div>


    </div>

</div>
      </div>
    </div>
  </section>

  
<?php
/**
 * Akropolis Super Speciality Hospital
 * Google Reviews Homepage Section
 */

$google_rating = '4.7';
$google_review_count = '1,655';

$google_review_cta = 'https://g.page/r/Cb2miHWP9JTyEBE/review';

$google_reviews = [

    [
        'name' => 'Vijendra Singh',
        'image' => '/assets/images/google-reviews/vijendra-singh.png',
        'date' => '3 days ago',
        'rating' => 5,
        'review' => 'Nice Experience..
Very very satisfied with staff and doctors and hospital..',
        'url' => 'https://maps.app.goo.gl/moCjQsgkca74rZfAA'
    ],

    [
        'name' => 'Vikash Sharma',
        'image' => '/assets/images/google-reviews/vikash-sharma.png',
        'date' => '3 weeks ago',
        'rating' => 5,
        'review' => 'Behaviour of staff is so good and they are so helpfull.

They all are very carefully handling patients and keep maintain higiene.',
        'url' => 'https://maps.app.goo.gl/FDg9J44iMR7kx4CS9'
    ],

    [
        'name' => 'Vipin Kumar',
        'image' => '/assets/images/google-reviews/vipin-kumar.png',
        'date' => '4 weeks ago',
        'rating' => 5,
        'review' => 'Dr very good
Nursing staff very good',
        'url' => 'https://maps.app.goo.gl/kXFQfb6DfHrbDejh7'
    ],

    [
        'name' => 'Suresh Kumar',
        'image' => '/assets/images/google-reviews/suresh-kumar.png',
        'date' => '8 weeks ago',
        'rating' => 5,
        'review' => 'Nice experience
Good doctors
Dr Sunil sir
Dr jona
Treatment is very very good
All over good experience',
        'url' => 'https://maps.app.goo.gl/fPoHDfo84tBKmd3H9'
    ],

    [
        'name' => 'Anil Yadav',
        'image' => '/assets/images/google-reviews/anil-yadav.png',
        'date' => '9 weeks ago',
        'rating' => 5,
        'review' => 'EXCELLENT SERVICE
NICE EXPERIENCE
GOOD STAFF AND DOCTORS..',
        'url' => 'https://maps.app.goo.gl/j1gRvLjaysM3osj78'
    ],

    [
        'name' => 'Brajesh Kumar',
        'image' => '/assets/images/google-reviews/brajesh-kumar.png',
        'date' => '13 weeks ago',
        'rating' => 5,
        'review' => 'Good service',
        'url' => 'https://maps.app.goo.gl/7ze1p1LCrnNARWNq9'
    ],

    [
        'name' => 'Shwetank Mishra',
        'image' => '/assets/images/google-reviews/shwetank-mishra.png',
        'date' => '15 weeks ago',
        'rating' => 5,
        'review' => 'Best surgeon dr. Prateek girotra and best treatment Akropolis hospital badshapur and supportive staff',
        'url' => 'https://maps.app.goo.gl/dJ6fWiq9aY3oXhfRA'
    ]

];
?>

<!-- =====================================================
     AKROPOLIS GOOGLE REVIEWS SECTION
====================================================== -->

<section id="google-reviews"
         class="ak-google-reviews py-16 lg:py-20 bg-white">

    <div class="container mx-auto px-4">

        <!-- Section Heading -->
        <div class="text-center mb-10">

            <span class="inline-block text-sm font-semibold
                         tracking-wider uppercase
                         text-[#328CCB] mb-3">
                Patient Experiences
            </span>

            <h2 class="text-3xl md:text-4xl font-bold
                       text-gray-900 mb-3">
                What Our Patients Say
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto">
                Discover genuine patient experiences and feedback
                about Akropolis Super Speciality Hospital, Gurugram.
            </p>

        </div>


        <!-- Google Rating Summary -->
        <div class="ak-google-summary
                    bg-gray-50 border border-gray-100
                    rounded-2xl p-6 md:p-8 mb-8
                    flex flex-col md:flex-row
                    items-center justify-between gap-6">

            <div class="text-center md:text-left">

                <h3 class="text-2xl font-bold text-gray-900 mb-2">
                    Google Reviews
                </h3>

                <div class="flex items-center justify-center
                            md:justify-start gap-3">

                    <span class="text-5xl font-bold text-gray-800">
                        <?php echo htmlspecialchars($google_rating, ENT_QUOTES, 'UTF-8'); ?>
                    </span>

                    <div>

                        <div class="text-2xl tracking-wider
                                    text-[#F4B400]"
                             aria-label="5 out of 5 stars">
                            ★★★★★
                        </div>

                        <p class="text-sm text-gray-500">
                            (<?php echo htmlspecialchars($google_review_count, ENT_QUOTES, 'UTF-8'); ?> reviews)
                        </p>

                    </div>

                </div>

            </div>


            <!-- Google Review CTA -->
            <a href="<?php echo htmlspecialchars($google_review_cta, ENT_QUOTES, 'UTF-8'); ?>"
               target="_blank"
               rel="nofollow noopener noreferrer"
               class="inline-flex items-center justify-center
                      gap-2 bg-[#328CCB]
                      hover:bg-[#267BB7] text-white
                      font-semibold px-7 py-4 rounded-xl
                      transition-all duration-200
                      shadow-md hover:shadow-lg">

                Review Us on Google

                <span aria-hidden="true">↗</span>

            </a>

        </div>


        <!-- Review Cards -->
        <div class="relative">

            <div class="ak-google-reviews-track
                        flex gap-5 overflow-x-auto
                        pb-5 snap-x snap-mandatory"
                 aria-label="Google patient reviews">

                <?php foreach ($google_reviews as $review): ?>

                    <article class="ak-google-review-card
                                    flex-shrink-0
                                    w-[285px] md:w-[320px]
                                    bg-gray-50 border border-gray-100
                                    rounded-2xl p-5 md:p-6
                                    snap-start flex flex-col">

                        <!-- Reviewer Profile -->
                        <div class="flex items-center gap-3 mb-5">

                            <img
                                src="<?php echo htmlspecialchars($review['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="<?php echo htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                width="52"
                                height="52"
                                loading="lazy"
                                decoding="async"
                                class="w-12 h-12 rounded-full
                                       object-cover border border-gray-200"
                            />

                            <div class="min-w-0">

                                <h3 class="font-semibold
                                           text-gray-900 truncate">
                                    <?php echo htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?>
                                </h3>

                                <p class="text-sm text-gray-500">
                                    <?php echo htmlspecialchars($review['date'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>

                            </div>

                            <span class="ml-auto text-[#4285F4]
                                         font-bold text-lg"
                                  aria-label="Google">
                                G
                            </span>

                        </div>


                        <!-- Star Rating -->
                        <div class="text-[#F4B400] text-xl
                                    tracking-wider mb-4"
                             aria-label="<?php echo (int)$review['rating']; ?> out of 5 stars">

                            <?php echo str_repeat('★', (int)$review['rating']); ?>

                        </div>


                        <!-- Exact Google Review -->
                        <p class="text-gray-700 text-sm
                                  leading-7 flex-grow
                                  whitespace-pre-line">
                            <?php echo htmlspecialchars(
                                $review['review'],
                                ENT_QUOTES,
                                'UTF-8'
                            ); ?>
                        </p>


                        <!-- Individual Google Review Link -->
                        <a
                            href="<?php echo htmlspecialchars($review['url'], ENT_QUOTES, 'UTF-8'); ?>"
                            target="_blank"
                            rel="nofollow noopener noreferrer"
                            class="inline-flex items-center gap-2
                                   mt-5 pt-4 border-t
                                   border-gray-200
                                   text-[#328CCB] font-semibold
                                   hover:text-[#D66C43]
                                   transition-colors"
                        >
                            View on Google
                            <span aria-hidden="true">↗</span>
                        </a>

                    </article>

                <?php endforeach; ?>

            </div>


            <!-- Scroll Guidance -->
            <p class="text-center text-sm text-gray-500 mt-3">
                Swipe or scroll to explore more patient reviews.
            </p>

        </div>


        <!-- Bottom CTA -->
        <div class="text-center mt-8">

            <a href="<?php echo htmlspecialchars($google_review_cta, ENT_QUOTES, 'UTF-8'); ?>"
               target="_blank"
               rel="nofollow noopener noreferrer"
               class="inline-flex items-center gap-2
                      text-[#D66C43] font-semibold
                      hover:text-[#328CCB]
                      transition-colors">

                Share Your Experience on Google
                <span aria-hidden="true">→</span>

            </a>

        </div>

    </div>

</section>


<!-- Google Reviews Styling -->
<style>

.ak-google-reviews-track {
    scrollbar-width: thin;
    scrollbar-color: #328CCB #f3f4f6;
    -webkit-overflow-scrolling: touch;
}

.ak-google-reviews-track::-webkit-scrollbar {
    height: 6px;
}

.ak-google-reviews-track::-webkit-scrollbar-track {
    background: #f3f4f6;
    border-radius: 20px;
}

.ak-google-reviews-track::-webkit-scrollbar-thumb {
    background: #328CCB;
    border-radius: 20px;
}

.ak-google-review-card {
    min-height: 330px;
}

.ak-google-review-card img {
    flex-shrink: 0;
}

@media (max-width: 640px) {

    .ak-google-review-card {
        min-height: 320px;
        width: 85%;
    }

    .ak-google-summary {
        text-align: center;
    }

}

</style>


  <!-- Insurance Section -->
  <section class="py-16 bg-white overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-900">Our Insurance & TPA Partners</h3>
        <p class="text-gray-600 mt-2">Cashless treatment facility available with leading insurance providers</p>
      </div>

      <div class="insurance-slider relative">
        <div class="insurance-track flex items-center animate-scroll">
          <!-- Double the list for seamless loop -->
          <?php $allLogos = array_merge($insuranceLogos, $insuranceLogos); ?>
          <?php foreach ($allLogos as $partner): ?>
            <div class="partner-card flex-shrink-0 w-48 px-4 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
              <img width="200" height="100" 
                src="<?php echo $partner['logo']; ?>" 
                alt="<?php echo $partner['name']; ?>"
                class="max-h-16 w-auto object-contain"
                loading="lazy"
              />
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News / Blog Section -->
  <section class="py-20 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('FileText', 'h-4 w-4'); ?>
            <span>Health Insights</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900">Latest from <span class="text-[#328CCB]">Our Blog</span></h3>
        </div>
        <a href="/blog/" class="text-[#328CCB] font-bold flex items-center space-x-2 hover:translate-x-2 transition-transform mt-6 md:mt-0">
          <span>Read All Articles</span>
          <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach (array_slice($blogPosts, 0, 3) as $post): ?>
          <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
            <div class="relative h-56 overflow-hidden">
              <img width="800" height="600" 
                src="<?php echo $post['image']; ?>" 
                alt="<?php echo $post['title']; ?>"
                class="w-full h-full object-cover"
              />
              <div class="absolute top-4 left-4 bg-[#328CCB] text-white px-3 py-1 rounded-full text-xs font-bold">
                <?php echo $post['category']; ?>
              </div>
            </div>
            <div class="p-6">
              <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center space-x-1">
                  <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                  <span><?php echo $post['date']; ?></span>
                </span>
                <span class="flex items-center space-x-1">
                  <?php echo getIcon('Clock', 'h-4 w-4'); ?>
                  <span><?php echo $post['readTime']; ?></span>
                </span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
                <?php echo $post['title']; ?>
              </h3>
              <p class="text-gray-600 text-sm mb-6 line-clamp-2">
                <?php echo $post['excerpt']; ?>
              </p>
              <a href="/blog/en/<?php echo $post['id']; ?>" class="inline-flex items-center space-x-2 text-[#D66C43] font-bold hover:text-[#c55a36] transition-colors">
                <span>Read More</span>
                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
              </a>
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