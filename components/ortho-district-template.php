<?php
/**
 * Orthopedic District Page Template - Enhanced Version
 * Full conversion-optimized version with all sections
 * Based on STRATEGY_LOCAL_SEO.md
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));

$is_gurugram = in_array(
    strtolower($district_name),
    ['gurugram', 'gurgaon'],
    true
);

if ($is_gurugram) {
    $target_keyword = "Best Orthopedic Hospital in Gurugram";
    $meta_title = "Best Orthopedic Hospital in Gurugram | Akropolis Hospital";
    $meta_description = "Visit Akropolis Super Speciality Hospital in Sector 69, Gurugram, for orthopaedic consultation and treatment for bone, joint, fracture and sports injury conditions.";
    $og_description = "Explore orthopaedic consultation and treatment at Akropolis Super Speciality Hospital, Sector 69, Gurugram.";
} else {
    $target_keyword = "Orthopedic Care for Patients from $district_display";
    $meta_title = "Orthopedic Treatment for $district_display Patients | Akropolis Hospital";
    $meta_description = "Patients from $district_display can access orthopaedic consultation and treatment at Akropolis Super Speciality Hospital, Sector 69, Gurugram. Contact us to plan your visit.";
    $og_description = "Orthopaedic consultation and treatment for patients from $district_display at Akropolis Super Speciality Hospital, Gurugram.";
}

$og_title = $meta_title;

// Include Data
require_once dirname(__DIR__) . '/includes/data.php';

// Include Head
$page_title = $meta_title;
$page_description = $meta_description;
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

<main>
  <!-- Breadcrumbs -->
  <div class="bg-gray-50 py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
      <nav class="flex text-sm text-gray-500" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
          <li><a href="/" class="hover:text-[#328CCB]">Home</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li><a href="/orthopedics" class="hover:text-[#328CCB]">Orthopedics</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium" aria-current="page"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section with Localized H1 -->
  <section class="hero-section relative bg-gradient-to-br from-blue-50 via-white to-green-50 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-100 rounded-full translate-y-32 -translate-x-32 opacity-30"></div>

    <div class="container mx-auto px-4 pt-16 pb-16 lg:pt-24 lg:pb-24 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left hero-content">
          <!-- Trust Badge -->
          <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium mb-6 float">
            <?php echo getIcon('Award', 'h-4 w-4'); ?>
            <span>
    <?php if ($is_gurugram): ?>
        NABH-Accredited Hospital in Gurugram
    <?php else: ?>
        NABH-Accredited Hospital | Serving Patients from
        <?php echo htmlspecialchars($district_display); ?>
    <?php endif; ?>
</span>
          </div>

          <!-- Localized H1 -->
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
            <?php echo $target_keyword; ?>
          </h1>

          <!-- Localized Description -->
          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
    <?php if ($is_gurugram): ?>
        Akropolis Super Speciality Hospital, located in Sector 69,
        Gurugram, provides orthopaedic consultation and treatment
        for bone, joint, fracture and sports injury conditions.
        Book your consultation today.
    <?php else: ?>
        Patients from <?php echo htmlspecialchars($district_display); ?>
        can access orthopaedic consultation and treatment at
        Akropolis Super Speciality Hospital, Sector 69, Gurugram.
        Our specialists provide evaluation and care for bone and
        joint conditions, fractures and sports injuries.
        Contact our team to plan your visit.
    <?php endif; ?>
</p>

          <!-- Key Features -->
          <div class="flex flex-wrap justify-center lg:justify-start gap-4 mb-8">
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-[#328CCB] rounded-full"></div>
              <span>15+ Years Experience</span>
            </div>
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-[#D66C43] rounded-full"></div>
              <span>5000+ Surgeries</span>
            </div>
            <div class="flex items-center space-x-2 text-gray-700">
              <div class="w-2 h-2 bg-green-600 rounded-full"></div>
              <span>Robotic Surgery</span>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
            <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg cta-glow">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Appointment</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg emergency-glow">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>

          <!-- Local Stats -->
          <div class="grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-[#328CCB] mb-1">5K+</div>
              <div class="text-xs text-gray-600">Surgeries Done</div>
            </div>
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-[#D66C43] mb-1">15+</div>
              <div class="text-xs text-gray-600">Expert Doctors</div>
            </div>
            <div class="text-center">
              <div class="text-2xl lg:text-3xl font-bold text-green-600 mb-1">98%</div>
              <div class="text-xs text-gray-600">Success Rate</div>
            </div>
          </div>
        </div>

        <!-- Hero Image -->
        <div class="relative hero-image">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img
    width="800"
    height="600"
    src="/assets/images/homepage/akropolis-building-hero-banner.webp"
    alt="<?php echo htmlspecialchars($target_keyword, ENT_QUOTES, 'UTF-8'); ?> - Expert Orthopedic Care"
    class="w-full h-[400px] lg:h-[500px] object-cover"
    loading="eager"
    fetchpriority="high"
/>
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-5 border border-gray-100 floating-card glass-card float-slow">
            <div class="flex items-center space-x-4">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon('Bone', 'h-8 w-8 text-[#328CCB]'); ?>
              </div>
              <div>
                <div class="text-2xl font-bold text-gray-900">5000+</div>
                <div class="text-sm text-gray-600">Joint Replacements</div>
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
        <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex justify-center mb-4 trust-icon">
            <div class="bg-[#328CCB]/10 p-2 lg:p-3 rounded-full">
              <?php echo getIcon('Award', 'h-6 w-6 lg:h-8 lg:w-8 text-[#328CCB]'); ?>
            </div>
          </div>
          <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">NABH Accredited</h3>
          <p class="text-gray-600 text-xs lg:text-sm">Quality Healthcare Certified</p>
        </div>
        <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex justify-center mb-4 trust-icon">
            <div class="bg-[#328CCB]/10 p-2 lg:p-3 rounded-full">
              <?php echo getIcon('Robot', 'h-6 w-6 lg:h-8 lg:w-8 text-[#328CCB]'); ?>
            </div>
          </div>
          <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">Robotic Surgery</h3>
          <p class="text-gray-600 text-xs lg:text-sm">Precision-Assisted Procedures</p>
        </div>
        <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex justify-center mb-4 trust-icon">
            <div class="bg-[#328CCB]/10 p-2 lg:p-3 rounded-full">
              <?php echo getIcon('Users', 'h-6 w-6 lg:h-8 lg:w-8 text-[#328CCB]'); ?>
            </div>
          </div>
          <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">Expert Team</h3>
          <p class="text-gray-600 text-xs lg:text-sm">15+ Years Experience</p>
        </div>
        <div class="trust-card bg-white rounded-xl p-4 lg:p-6 text-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex justify-center mb-4 trust-icon">
            <div class="bg-[#328CCB]/10 p-2 lg:p-3 rounded-full">
              <?php echo getIcon('Star', 'h-6 w-6 lg:h-8 lg:w-8 text-[#328CCB]'); ?>
            </div>
          </div>
          <h3 class="font-bold text-gray-900 mb-2 text-xs lg:text-base">5000+ Surgeries</h3>
          <p class="text-gray-600 text-xs lg:text-sm">Successful Outcomes</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Local SEO Content Section -->
  <section class="py-20 bg-white section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">
    Orthopaedic Care for Patients from <?php echo htmlspecialchars($district_display); ?>
</h2>
        <div class="prose prose-lg text-gray-600 space-y-6">
          <p>
    Patients from <?php echo htmlspecialchars($district_display); ?>
    looking for orthopaedic consultation can visit
    <strong>Akropolis Super Speciality Hospital</strong>,
    located in Sector 69, Gurugram. Our orthopaedic team evaluates
    bone and joint conditions, fractures, sports injuries and
    other musculoskeletal problems.
</p>

<p>
    Depending on the patient's condition, treatment may include
    medication, rehabilitation, minimally invasive procedures
    or surgery. Diagnostic evaluation and the appropriate
    treatment plan are determined by the treating specialist.
</p>

<p>
    If you are travelling from <?php echo htmlspecialchars($district_display); ?>,
    please contact our hospital team before your visit to confirm
    appointment availability, consultation details and directions
    to our Gurugram facility.
</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <!-- Landmarks Box -->
          <!-- Patient Areas / Hospital Location Box -->
<div class="bg-gray-50 p-8 rounded-2xl border border-gray-100">

    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2">
        <?php echo getIcon('MapPin', 'h-5 w-5 text-[#D66C43]'); ?>

        <span>
            <?php if ($is_gurugram): ?>
                Our Hospital Location
            <?php else: ?>
                Patients Travelling from <?php echo htmlspecialchars($district_display); ?>
            <?php endif; ?>
        </span>
    </h3>

    <?php if (!$is_gurugram): ?>

        <p class="text-gray-700 leading-relaxed mb-5">
            We welcome patients from <?php echo htmlspecialchars($district_display); ?>
            seeking orthopaedic consultation and treatment at our
            Gurugram hospital.
        </p>

    <?php endif; ?>

    <div class="flex items-start space-x-3">
        <?php echo getIcon('MapPin', 'h-5 w-5 text-[#D66C43] mt-1 flex-shrink-0'); ?>

        <p class="text-gray-700 leading-relaxed">
            <strong>Akropolis Super Speciality Hospital</strong><br>
            Near Vatika Chowk, Opposite Chinar Garden,
            Sector 69, Gurugram, Haryana 122101.
        </p>
    </div>

    <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-100">
        <p class="text-sm text-gray-600">
            <strong class="text-[#328CCB]">Plan Your Visit:</strong>
            Contact our hospital team for appointment information
            and directions to our Gurugram facility.
        </p>
    </div>

</div>

          <!-- Specializations Box -->
          <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2">
              <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
              <span>Our Specializations</span>
            </h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Total Knee & Hip Replacement</span>
              </li>
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Robotic-Assisted Joint Surgery</span>
              </li>
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Sports Injury Management</span>
              </li>
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Spine & Back Pain Care</span>
              </li>
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Complex Trauma Surgery</span>
              </li>
              <li class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Arthroscopy (Keyhole Surgery)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Akropolis Section -->
  <section id="about" class="py-20 bg-gray-50 relative overflow-hidden section-fade">
    <div class="container mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="relative floating-card">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img width="800" height="600" src="/assets/images/homepage/akropolis-hospital-location-entrance.webp" alt="Akropolis Super Speciality Hospital" class="w-full h-[500px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -left-6 bg-[#328CCB] text-white rounded-2xl shadow-xl p-6">
            <div class="text-4xl font-bold mb-1">15+</div>
            <div class="text-sm text-blue-100">Years of Excellence</div>
          </div>
        </div>
        <div>
          <div class="mb-8">
            <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
              <?php echo getIcon('Heart', 'h-4 w-4'); ?>
              <span>About Akropolis</span>
            </div>
            <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
              Committed to <span class="text-[#328CCB]">Healthcare Excellence</span>
            </h3>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
              Akropolis Super Speciality Hospital stands as a beacon of advanced healthcare in Haryana,
              offering comprehensive medical services with cutting-edge technology and compassionate care.
              Our NABH accredited facility ensures the highest standards of patient safety and treatment outcomes.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed">
              For patients from <?php echo $district_display; ?>, we provide easy access to world-class
              orthopedic care without the need to travel to Delhi or other major cities. Our team of
              internationally trained doctors delivers personalized treatment plans for every patient.
            </p>
          </div>

          <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="flex items-start space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Latest Technology</h4>
                <p class="text-sm text-gray-600">Robotic & computer navigation</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">24/7 Emergency</h4>
                <p class="text-sm text-gray-600">Round-the-clock trauma care</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Insurance Accepted</h4>
                <p class="text-sm text-gray-600">Cashless treatment available</p>
              </div>
            </div>
            <div class="flex items-start space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900">Free Parking</h4>
                <p class="text-sm text-gray-600">Convenient for visitors</p>
              </div>
            </div>
          </div>

          <a href="/about" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 w-fit shadow-lg cta-glow">
            <span>Learn More About Us</span>
            <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Doctors Section -->
  <section id="doctors" class="py-20 bg-gray-50 overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Users', 'h-4 w-4'); ?>
            <span>Expert Team</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Consult Our <span class="text-[#328CCB]">Orthopedic Specialists</span>
          </h3>
          <p class="text-gray-600 mt-4 text-lg">
            Our team of highly qualified orthopedic surgeons is dedicated to providing you with the best care.
          </p>
        </div>
        <div class="flex space-x-4 mt-8 md:mt-0">
          <button onclick="scrollDoctors(-1)" class="doctors-prev p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#328CCB] hover:text-[#328CCB] transition-all duration-300">
            <?php echo getIcon('ChevronLeft', 'h-6 w-6'); ?>
          </button>
          <button onclick="scrollDoctors(1)" class="doctors-next p-3 rounded-full border-2 border-gray-100 text-gray-400 hover:border-[#328CCB] hover:text-[#328CCB] transition-all duration-300">
            <?php echo getIcon('ChevronRight', 'h-6 w-6'); ?>
          </button>
        </div>
      </div>

      <div class="doctors-slider relative">
        <div id="doctors-track" class="doctors-track flex transition-transform duration-500 ease-out gap-6">
          <?php
          $orthoDoctors = array_filter($doctors, function($d) {
            return stripos($d['specialization'], 'Ortho') !== false || stripos($d['specialization'], 'Joint') !== false || stripos($d['specialization'], 'Bone') !== false || stripos($d['specialization'], 'Trauma') !== false;
          });
          if (empty($orthoDoctors)) {
            $orthoDoctors = array_slice($doctors, 0, 3);
          }
          foreach ($orthoDoctors as $doctor):
          ?>
            <div class="doctor-card-wrapper flex-shrink-0 w-full md:w-1/2 lg:w-1/3">
              <div class="doctor-card bg-white rounded-3xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-80 overflow-hidden">
                  <img width="400" height="400" src="<?php echo htmlspecialchars($doctor['image']); ?>" alt="<?php echo htmlspecialchars($doctor['name']); ?>" class="w-full h-full object-cover" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                  <div class="absolute bottom-4 left-4 right-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <a href="/doctors/<?php echo $doctor['id']; ?>" class="w-full bg-white/95 backdrop-blur-sm text-[#328CCB] py-3 rounded-xl font-bold text-center block shadow-lg">View Profile</a>
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
      </div>
    </div>
  </section>

  <!-- Insurance Partners Section -->
  <section class="py-16 bg-white overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-900">Insurance & TPA Partners</h3>
        <p class="text-gray-600 mt-2">
    Cashless treatment assistance is available for eligible
    health insurance policies at our Gurugram hospital.
</p>
      </div>
      <div class="insurance-slider relative">
        <div class="insurance-track flex items-center animate-scroll">
          <?php $allLogos = array_merge($insuranceLogos, $insuranceLogos); ?>
          <?php foreach ($allLogos as $partner): ?>
            <div class="partner-card flex-shrink-0 w-48 px-4 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
              <img width="200" height="100" src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>" class="max-h-16 w-auto object-contain" loading="lazy" />
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section with Local SEO -->
  <section class="py-20 bg-gray-50 section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('HelpCircle', 'h-4 w-4'); ?>
            <span>FAQ</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900">Frequently Asked Questions</h3>
          <p class="text-gray-600 mt-4">For patients from <?php echo $district_display; ?> and surrounding areas</p>
        </div>
        <div class="space-y-4">
          <?php
          $faqs = [
    [
        'q' => "Which orthopedic services are available for patients from {$district_display}?",
        'a' => "Akropolis Super Speciality Hospital provides orthopaedic consultation and treatment for bone, joint, fracture, sports injury and spine-related conditions. The appropriate treatment is determined after clinical assessment."
    ],

    [
        'q' => "How can patients from {$district_display} book an orthopedic consultation?",
        'a' => "Patients can contact Akropolis Super Speciality Hospital at " . CONTACT_INFO['phone'] . " to enquire about appointments, doctor availability and consultation arrangements."
    ],

    [
        'q' => "Are knee and hip replacement procedures available?",
        'a' => "The orthopaedic department provides evaluation for patients with severe knee and hip joint problems. Depending on the diagnosis, symptoms and overall health, the doctor may discuss surgical or non-surgical treatment options, including joint replacement."
    ],

    [
        'q' => "Can I consult an orthopaedic specialist for a sports injury?",
        'a' => "Yes. Patients experiencing sports-related injuries, ligament problems, joint pain or restricted movement can seek an orthopaedic assessment. Treatment may include medication, rehabilitation or a surgical procedure, depending on the injury."
    ],

    [
        'q' => "What should I do if someone suffers a fracture or serious bone injury?",
        'a' => "Seek prompt medical attention after a suspected fracture, particularly if there is severe pain, swelling, visible deformity, an open wound or difficulty moving the affected limb. For serious injuries, contact the hospital's 24/7 Emergency Services."
    ],

    [
        'q' => "Is robotic-assisted joint replacement suitable for every patient?",
        'a' => "No. Robotic-assisted surgery is not suitable or necessary for every patient. The orthopaedic specialist evaluates the joint condition, medical history and investigation reports before recommending an appropriate surgical approach."
    ],

    [
        'q' => "What medical reports should I bring for an orthopaedic consultation?",
        'a' => "Bring previous X-rays, MRI or CT scans, blood test reports, prescriptions and details of any earlier surgery or treatment. These records can help the doctor understand your medical history and plan further evaluation."
    ],

    [
        'q' => "Is cashless health insurance available at Akropolis Super Speciality Hospital?",
        'a' => "Cashless treatment assistance is available for eligible health insurance policies. Approval depends on your insurer or TPA network eligibility, policy coverage and pre-authorisation. Contact the hospital team to confirm the applicable process before admission."
    ],

    [
        'q' => "Does Akropolis Super Speciality Hospital provide emergency care?",
        'a' => "The hospital provides 24/7 Emergency Services. Patients experiencing serious injuries or medical emergencies should seek immediate medical attention rather than wait for a routine outpatient appointment."
    ]

];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo $faq['q']; ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-[#328CCB] transition-transform duration-200 faq-icon-' . $index); ?>
              </button>
              <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-gray-50 border-t border-gray-100 text-gray-600">
                <?php echo $faq['a']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Other Locations Section -->
  <section class="py-20 bg-white section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-6xl mx-auto">
        <?php
        $allDistricts = [
          'ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri',
          'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurugram' => 'Gurugram',
          'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal',
          'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh',
          'nuh' => 'Nuh', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat',
          'rewari' => 'Rewari', 'rohtak' => 'Rohtak', 'sirsa' => 'Sirsa', 'sonipat' => 'Sonipat',
          'yamunanagar' => 'Yamunanagar'
        ];
        ?>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
          <div 
            onclick="toggleServingAreas()" 
            class="flex items-center space-x-3 cursor-pointer select-none group"
          >
            <div class="bg-[#328CCB]/10 p-2 rounded-lg group-hover:bg-[#328CCB]/20 transition-colors">
              <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
            </div>
            <h3 class="text-3xl font-bold text-gray-900 flex items-center gap-2">
              We Are Serving in These Areas
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
              <?php foreach ($allDistricts as $slug => $name): ?>
                <option value="/orthopedic-hospital/haryana/<?php echo $slug; ?>/" <?php echo ($slug === $district_name) ? 'selected' : ''; ?>>
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
          <?php
          foreach ($allDistricts as $slug => $name):
            if ($slug !== $district_name):
          ?>
            <div class="group">
              <a href="/orthopedic-hospital/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-[#328CCB] transition-colors duration-200">
                <div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-[#328CCB] transition-colors"></div>
                <span class="font-medium">Best Orthopedic Hospital in <?php echo $name; ?></span>
              </a>
            </div>
          <?php
            endif;
          endforeach;
          ?>
        </div>
      </div>
    </div>
    
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
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl lg:text-5xl font-bold mb-6">
    <?php if ($is_gurugram): ?>
        Looking for Orthopaedic Care in Gurugram?
    <?php else: ?>
        Need Orthopaedic Care? Visit Our Gurugram Hospital
    <?php endif; ?>
</h3>
        <p class="text-xl text-blue-100 mb-12">
    <?php if ($is_gurugram): ?>
        Consult our orthopaedic specialists at Akropolis Super
        Speciality Hospital, Sector 69, Gurugram.
    <?php else: ?>
        Patients from <?php echo htmlspecialchars($district_display); ?>
        can contact Akropolis Super Speciality Hospital to enquire
        about orthopaedic appointments and treatment in Gurugram.
    <?php endif; ?>
</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="/doctors" class="bg-white text-[#328CCB] hover:bg-gray-100 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl">
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Book Appointment</span>
          </a>
          <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 shadow-xl">
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>Call: <?php echo CONTACT_INFO['phone']; ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Schema Markup -->
 <!-- ==========================================
     STRUCTURED DATA
     District Orthopedic Landing Pages
=========================================== -->

<?php

// Page URLs
$site_url = 'https://akropolishospital.com/';

$page_url = $site_url . 'orthopedic-hospital/haryana/' . $district_name . '/';


// ==========================================
// 1. BREADCRUMB SCHEMA
// ==========================================

$breadcrumbSchema = [

    '@context' => 'https://schema.org',

    '@type' => 'BreadcrumbList',

    'itemListElement' => [

        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => $site_url
        ],

        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Orthopedics',
            'item' => $site_url . 'orthopedics.php'
        ],

        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => $district_display,
            'item' => $page_url
        ]

    ]

];


// ==========================================
// 2. WEBPAGE SCHEMA
// ==========================================

$webPageSchema = [

    '@context' => 'https://schema.org',

    '@type' => 'WebPage',

    '@id' => $page_url . '#webpage',

    'url' => $page_url,

    'name' => $meta_title,

    'description' => $meta_description,

    'inLanguage' => 'en-IN',

    'publisher' => [

        '@type' => 'Organization',

        'name' => 'Akropolis Super Speciality Hospital',

        'url' => $site_url

    ]

];


// ==========================================
// 3. FAQPAGE SCHEMA
// ==========================================

$faqSchema = [

    '@context' => 'https://schema.org',

    '@type' => 'FAQPage',

    'mainEntity' => []

];

foreach ($faqs as $faq) {

    $faqSchema['mainEntity'][] = [

        '@type' => 'Question',

        'name' => $faq['q'],

        'acceptedAnswer' => [

            '@type' => 'Answer',

            'text' => $faq['a']

        ]

    ];

}


// ==========================================
// 4. SAFE JSON-LD OUTPUT
// ==========================================

$schemaFlags = JSON_UNESCAPED_SLASHES
    | JSON_UNESCAPED_UNICODE
    | JSON_HEX_TAG
    | JSON_HEX_APOS
    | JSON_HEX_AMP
    | JSON_HEX_QUOT;


// BreadcrumbList
$breadcrumbJson = json_encode($breadcrumbSchema, $schemaFlags);

if ($breadcrumbJson !== false) {
    echo '<script type="application/ld+json">' . "\n";
    echo $breadcrumbJson;
    echo "\n</script>\n";
}


// WebPage
$webPageJson = json_encode($webPageSchema, $schemaFlags);

if ($webPageJson !== false) {
    echo '<script type="application/ld+json">' . "\n";
    echo $webPageJson;
    echo "\n</script>\n";
}


// FAQPage
$faqJson = json_encode($faqSchema, $schemaFlags);

if ($faqJson !== false) {
    echo '<script type="application/ld+json">' . "\n";
    echo $faqJson;
    echo "\n</script>\n";
}

?>
</main>

<script>
function toggleFaq(index) {
  const answer = document.getElementById('faq-answer-' + index);
  const icon = document.querySelector('.faq-icon-' + index);
  const isHidden = answer.classList.contains('hidden');

  document.querySelectorAll('[id^="faq-answer-"]').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('[class^="faq-icon-"]').forEach(el => el.style.transform = 'rotate(0deg)');

  if (isHidden) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  }
}

let doctorScrollPosition = 0;
function scrollDoctors(direction) {
  const track = document.getElementById('doctors-track');
  if (!track) return;
  const cardWidth = track.querySelector('.doctor-card-wrapper').offsetWidth + 24;
  const maxScroll = track.scrollWidth - track.parentElement.offsetWidth;

  doctorScrollPosition += direction * cardWidth;
  doctorScrollPosition = Math.max(0, Math.min(doctorScrollPosition, maxScroll));

  track.style.transform = 'translateX(-' + doctorScrollPosition + 'px)';
}
</script>

<?php
include dirname(__DIR__) . '/includes/footer.php';
include dirname(__DIR__) . '/includes/scripts.php';
?>