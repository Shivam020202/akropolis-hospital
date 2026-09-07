<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';
$page_title = 'Best Multi-Specialty Hospital Gurugram | Akropolis';
$meta_description = 'Akropolis Super Speciality Hospital - NABH accredited multi-specialty hospital in Gurugram, Haryana. Expert doctors, advanced technology, 24×7 emergency care. Book appointment now!';
$canonical_url = '/';
$schema_blocks = [
    schemaWebSite(),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/']]),
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
            Get top-quality healthcare at Akropolis Hospital. We use the latest technology to care for you. Our expert doctors are here to help.
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
              src="https://brandingpioneers.co.in/akropolis/hero-banner.webp"
              alt="Modern Hospital Building"
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
              src="https://brandingpioneers.co.in/akropolis/help-desk-img.webp"
              alt="Modern Hospital Building"
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
              Akropolis Hospital is a top choice for your health. We offer great medical care with modern tools. Our hospital is NABH accredited. This means we meet high standards to keep you safe and healthy.
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
          World-Class <span class="text-[#328CCB]">Medical Excellence</span>
        </h3>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        $featuredDepts = [
            ['id' => 'cardiology', 'page' => 'cardiology.php', 'title' => 'Cardiology', 'description' => 'Advanced heart care with state-of-the-art cardiac procedures.', 'icon' => 'Heart', 'image' => 'https://brandingpioneers.co.in/akropolis/Cardiology.jpg'],
            ['id' => 'neurology', 'page' => 'neurology.php', 'title' => 'Neurology', 'description' => 'Comprehensive brain and nervous system care.', 'icon' => 'Brain', 'image' => 'https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=800'],
            ['id' => 'nephrology', 'page' => 'nephrology.php', 'title' => 'Nephrology', 'description' => 'Comprehensive kidney care and dialysis services.', 'icon' => 'Droplets', 'image' => 'https://brandingpioneers.co.in/akropolis/Nephrology.webp'],
            ['id' => 'orthopedics', 'page' => 'orthopedics.php', 'title' => 'Orthopedics', 'description' => 'Expert bone, joint, and muscle care.', 'icon' => 'Bone', 'image' => 'https://brandingpioneers.co.in/akropolis/Orthopaedics.jpg'],
            ['id' => 'pediatrics', 'page' => 'pediatrics.php', 'title' => 'Pediatrics', 'description' => 'Specialized care for newborns and children.', 'icon' => 'Baby', 'image' => 'https://brandingpioneers.co.in/akropolis/NICU & Pediatrics.webp'],
            ['id' => 'oncology', 'page' => 'oncology.php', 'title' => 'Oncology', 'description' => 'Comprehensive cancer care and treatment.', 'icon' => 'Activity', 'image' => 'https://brandingpioneers.co.in/akropolis/Oncology.webp']
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

        <!-- Trust & Stats Column -->
        <div class="lg:pl-12">
          <h3 class="text-3xl font-bold text-gray-900 mb-8">Why Thousands Trust Us?</h3>
          <div class="space-y-6">
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-blue-50 p-3 rounded-xl">
                <?php echo getIcon('Award', 'h-8 w-8 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">NABH Accredited</h4>
                <p class="text-gray-600">This is a top mark for quality care in India. It means you are safe with us.</p>
              </div>
            </div>
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-green-50 p-3 rounded-xl">
                <?php echo getIcon('Heart', 'h-8 w-8 text-green-600'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">Patient-First Approach</h4>
                <p class="text-gray-600">We put you first. We care for you with kindness, honesty, and great medical skill.</p>
              </div>
            </div>
            <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-orange-50 p-3 rounded-xl">
                <?php echo getIcon('Zap', 'h-8 w-8 text-[#D66C43]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">24/7 Response</h4>
                <p class="text-gray-600">We are always ready. Our emergency, heart, and trauma teams work all day and night.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
        <a href="/" class="text-[#328CCB] font-bold flex items-center space-x-2 hover:translate-x-2 transition-transform mt-6 md:mt-0">
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
              <a href="/" class="inline-flex items-center space-x-2 text-[#D66C43] font-bold hover:text-[#c55a36] transition-colors">
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