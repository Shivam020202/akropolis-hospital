<?php
/**
 * Haddi Ka Doctor District Page Template
 * Based on index.php aesthetics
 */

// SEO Variables
$district_display = ucwords(str_replace('-', ' ', $district_name));
$target_keyword = "Best Orthopedic Hospital in $district_display";
$meta_title = "$target_keyword | Akropolis Hospital";
$meta_description = "Akropolis Super Speciality Hospital is the $target_keyword. Expert orthopedic surgeons, advanced joint replacements, and sports injury treatments near " . implode(', ', $landmarks) . ".";

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
          <li><a href="/haddi-ka-doctor" class="hover:text-[#328CCB]">Haddi Ka Doctor</a></li>
          <li><?php echo getIcon('ChevronRight', 'h-4 w-4'); ?></li>
          <li class="text-[#328CCB] font-medium" aria-current="page"><?php echo $district_display; ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section relative bg-gradient-to-br from-blue-50 via-white to-green-50 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-48 translate-x-48 opacity-30"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-100 rounded-full translate-y-32 -translate-x-32 opacity-30"></div>

    <div class="container mx-auto px-4 pt-16 pb-16 lg:pt-24 lg:pb-24 relative z-10">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-center lg:text-left hero-content">
          <div class="inline-flex items-center space-x-2 bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-medium mb-6 float">
            <?php echo getIcon('Award', 'h-4 w-4'); ?>
            <span>Top Rated Orthopedic Center in Haryana</span>
          </div>

          <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
            <?php echo $target_keyword; ?>
          </h1>

          <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
            Leading orthopedic care in <?php echo $district_display; ?> with world-class surgeons,
            robotic-assisted joint replacements, and advanced sports medicine. Serving patients near <?php echo implode(' and ', array_slice($landmarks, 0, 2)); ?>.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
            <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg cta-glow">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Book Appointment</span>
            </a>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg emergency-glow">
              <?php echo getIcon('Phone', 'h-5 w-5'); ?>
              <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
            </a>
          </div>
        </div>

        <div class="relative hero-image">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/Orthopaedics.jpg" alt="Orthopedic Surgery Excellence" class="w-full h-[400px] lg:h-[500px] object-cover" />
          </div>
          <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 border border-gray-100 floating-card glass-card float-slow">
            <div class="flex items-center space-x-4">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon('Bone', 'h-8 w-8 text-[#328CCB]'); ?>
              </div>
              <div>
                <div class="text-2xl font-bold text-gray-900">100%</div>
                <div class="text-sm text-gray-600">Success Rate</div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

  <!-- Local SEO Content -->
  <section class="py-20 bg-white section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">Comprehensive Orthopedic Solutions in <?php echo $district_display; ?></h2>
        <div class="prose prose-lg text-gray-600 space-y-6">
          <p>
            Akropolis Super Speciality Hospital is recognized as the <strong><?php echo $target_keyword; ?></strong>,
            providing specialized care for patients across <?php echo $district_display; ?>. Whether you are seeking
            treatment for a sports injury near <?php echo $landmarks[0]; ?> or looking for expert joint
            replacement surgery near <?php echo $landmarks[1]; ?>, our team is here to help.
          </p>
          <p>
            Our facility is equipped with the latest diagnostic technology and minimally invasive surgical tools
            to ensure faster recovery and better outcomes. We specialize in complex trauma, spine surgeries,
            and pediatric orthopedics, making us the preferred choice for residents of <?php echo $district_display; ?>.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
          <div class="bg-gray-50 p-8 rounded-2xl border border-gray-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Nearby Landmarks</h3>
            <ul class="space-y-3">
              <?php foreach ($landmarks as $landmark): ?>
                <li class="flex items-center space-x-2">
                  <?php echo getIcon('MapPin', 'h-4 w-4 text-[#D66C43]'); ?>
                  <span><?php echo $landmark; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Our Specializations</h3>
            <ul class="space-y-3">
              <li class="flex items-center space-x-2">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Total Knee & Hip Replacement</span>
              </li>
              <li class="flex items-center space-x-2">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Sports Injury Management</span>
              </li>
              <li class="flex items-center space-x-2">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Spine & Back Pain Care</span>
              </li>
              <li class="flex items-center space-x-2">
                <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB]'); ?>
                <span>Complex Trauma Surgery</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-50 relative overflow-hidden section-fade">
    <div class="container mx-auto px-4 relative z-10">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="relative floating-card">
          <div class="relative overflow-hidden rounded-3xl shadow-2xl img-zoom">
            <img width="800" height="600" src="https://brandingpioneers.co.in/akropolis/help-desk-img.webp" alt="Modern Hospital Building" class="w-full h-[500px] object-cover" />
          </div>
        </div>
        <div>
          <div class="mb-8">
            <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
              <?php echo getIcon('Heart', 'h-4 w-4'); ?>
              <span>About Akropolis</span>
            </div>
            <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
              Committed to <span class="text-[#328CCB]"> Healthcare Excellence</span>
            </h3>
            <p class="text-gray-600 text-lg leading-relaxed">
              Akropolis Super Speciality Hospital stands as a beacon of advanced healthcare,
              offering comprehensive medical services with cutting-edge technology and
              compassionate care. Our NABH accredited facility ensures the highest standards
              of patient safety and treatment outcomes.
            </p>
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
            Consult Our <span class="text-[#328CCB]">Specialist Doctors</span>
          </h3>
          <p class="text-gray-600 mt-4 text-lg">
            Our team of highly qualified and experienced medical professionals is dedicated to providing you with the best care.
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

  <!-- Testimonials Section -->
  <section class="py-20 bg-white relative overflow-hidden section-fade">
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
        <div class="testimonials-slider relative">
          <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="testimonial-card <?php echo $index === 0 ? 'block' : 'hidden'; ?> animate-fade-in">
              <div class="relative rounded-3xl overflow-hidden shadow-2xl group aspect-video">
                <img width="800" height="600" src="<?php echo $testimonial['videoThumbnail']; ?>" alt="<?php echo $testimonial['patientName']; ?>" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                  <button class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-[#328CCB] shadow-2xl transform transition-all duration-300 group-hover:scale-110 hover:bg-[#328CCB] hover:text-white">
                    <?php echo getIcon('Play', 'h-8 w-8 ml-1'); ?>
                  </button>
                </div>
              </div>
              <div class="mt-8 bg-white p-8 rounded-2xl shadow-lg border border-gray-100 relative">
                <div class="absolute -top-6 left-8 bg-[#328CCB] text-white p-4 rounded-xl shadow-lg"><?php echo getIcon('Quote', 'h-6 w-6'); ?></div>
                <p class="text-gray-600 text-lg italic leading-relaxed mb-6 pt-4">"<?php echo $testimonial['testimonial']; ?>"</p>
                <div class="flex items-center justify-between">
                  <div>
                    <h4 class="font-bold text-gray-900 text-xl"><?php echo $testimonial['patientName']; ?></h4>
                    <p class="text-[#328CCB] font-medium"><?php echo $testimonial['condition']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="lg:pl-12">
          <h3 class="text-3xl font-bold text-gray-900 mb-8">Why Thousands Trust Us?</h3>
          <div class="space-y-6">
            <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
              <div class="bg-blue-50 p-3 rounded-xl"><?php echo getIcon('Award', 'h-8 w-8 text-[#328CCB]'); ?></div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1 text-lg">NABH Accreditation</h4>
                <p class="text-gray-600">The highest benchmark for quality healthcare in India.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Insurance Section -->
  <section class="py-16 bg-gray-50 overflow-hidden section-fade">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-gray-900">Our Insurance & TPA Partners</h3>
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
              <img width="800" height="600" src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-full object-cover" />
              <div class="absolute top-4 left-4 bg-[#328CCB] text-white px-3 py-1 rounded-full text-xs font-bold"><?php echo $post['category']; ?></div>
            </div>
            <div class="p-6">
              <div class="flex items-center space-x-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center space-x-1"><?php echo getIcon('Calendar', 'h-4 w-4'); ?><span><?php echo $post['date']; ?></span></span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors"><?php echo $post['title']; ?></h3>
              <p class="text-gray-600 text-sm mb-6 line-clamp-2"><?php echo $post['excerpt']; ?></p>
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

  <!-- FAQ Section with Schema -->
  <section class="py-20 bg-white section-fade">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <h3 class="text-3xl lg:text-4xl font-bold text-center text-gray-900 mb-12">Frequently Asked Questions</h3>
        <div class="space-y-4">
          <?php
          $faqs = [
            [
              'q' => "Which is the best orthopedic hospital in $district_display?",
              'a' => "Akropolis Super Speciality Hospital is widely regarded as the $target_keyword, offering advanced surgical and non-surgical treatments."
            ],
            [
              'q' => "Do you offer robotic joint replacement in $district_display?",
              'a' => "Yes, we provide state-of-the-art robotic-assisted joint replacement surgeries for higher precision and faster recovery for patients in $district_display."
            ],
            [
              'q' => "Are sports injury treatments available near " . $landmarks[0] . "?",
              'a' => "Our orthopedic team includes sports medicine specialists who provide comprehensive care for athletes and active individuals throughout $district_display."
            ],
            [
              'q' => "How can I book an appointment with an ortho specialist in $district_display?",
              'a' => "You can book an appointment by calling " . CONTACT_INFO['phone'] . " or using our online booking system available on our website."
            ]
          ];
          foreach ($faqs as $index => $faq):
          ?>
            <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden border border-gray-100">
              <button onclick="toggleFaq(<?php echo $index; ?>)" class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-100 transition-colors">
                <span class="text-left font-semibold text-gray-900"><?php echo $faq['q']; ?></span>
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-[#328CCB] transition-transform duration-200 faq-icon-' . $index); ?>
              </button>
              <div id="faq-answer-<?php echo $index; ?>" class="hidden px-6 py-4 bg-white border-t border-gray-100 text-gray-600">
                <?php echo $faq['a']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumb Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://akropolishospital.com/"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "Haddi Ka Doctor",
      "item": "https://akropolishospital.com/haddi-ka-doctor.php"
    },{
      "@type": "ListItem",
      "position": 3,
      "name": "<?php echo $district_display; ?>",
      "item": "https://akropolishospital.com/haddi-ka-doctor/haryana/<?php echo $district_name; ?>"
    }]
  }
  </script>

  <!-- FAQ Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php foreach ($faqs as $index => $faq): ?>
      {
        "@type": "Question",
        "name": "<?php echo addslashes($faq['q']); ?>",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<?php echo addslashes($faq['a']); ?>"
        }
      }<?php echo $index < count($faqs) - 1 ? ',' : ''; ?>
      <?php endforeach; ?>
    ]
  }
  </script>
</main>

<script>
function toggleFaq(index) {
  const answer = document.getElementById('faq-answer-' + index);
  const icon = document.querySelector('.faq-icon-' + index);
  const isHidden = answer.classList.contains('hidden');

  // Hide all
  document.querySelectorAll('[id^="faq-answer-"]').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('[class^="faq-icon-"]').forEach(el => el.style.transform = 'rotate(0deg)');

  if (isHidden) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  }
}
</script>

<?php
include dirname(__DIR__) . '/includes/footer.php';
include dirname(__DIR__) . '/includes/scripts.php';
?>