<?php
require_once 'includes/data.php';
require_once 'includes/schema.php';
$page_title = 'About Us | Akropolis';
$page_description = 'Learn about Akropolis Super Speciality Hospital – NABH accredited multi-specialty hospital in Gurugram, Haryana with 25+ years of excellence, expert...';
$canonical_url = '/about';
$schema_blocks = [
    json_encode(['@context' => 'https://schema.org', '@type' => 'AboutPage', 'name' => 'About Akropolis Super Speciality Hospital', 'url' => 'https://akropolishospital.com/about', 'isPartOf' => ['@id' => 'https://akropolishospital.com/#hospital']], JSON_UNESCAPED_SLASHES),
    schemaBreadcrumb([['name' => 'Home', 'url' => '/'], ['name' => 'About', 'url' => '/about']]),
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
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white py-20 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
    </div>
    <div class="container mx-auto px-4 relative">
      <div class="max-w-3xl">
        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          About Akropolis Super Speciality Hospital
        </h1>
        <p class="text-xl text-blue-50 leading-relaxed mb-8">
          Leading the way in medical excellence and compassionate care since 2000.
          We are committed to providing world-class healthcare services to our community.
        </p>
        <div class="flex flex-wrap gap-4">
          <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-white/20">
            <?php echo getIcon('Award', 'h-5 w-5 text-yellow-400'); ?>
            <span class="font-medium text-sm">NABH Accredited</span>
          </div>
          <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-white/20">
            <?php echo getIcon('Shield', 'h-5 w-5 text-green-400'); ?>
            <span class="font-medium text-sm">24/7 Emergency Care</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="relative">
          <div class="absolute -top-4 -left-4 w-24 h-24 bg-[#328CCB]/10 rounded-full blur-2xl"></div>
          <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-[#D66C43]/10 rounded-full blur-2xl"></div>
          <img
            src="https://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?auto=compress&cs=tinysrgb&w=800"
            alt="Hospital Building"
            class="rounded-3xl shadow-2xl relative z-10 floating-card"
          />
        </div>
        <div>
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('History', 'h-4 w-4'); ?>
            <span>Our Journey</span>
          </div>
          <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
            A Legacy of <span class="text-[#328CCB]">Healing and Trust</span>
          </h2>
          <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
            <p>
              Founded in 2000, Akropolis Super Speciality Hospital has grown from a local clinic
              to a premier multi-specialty healthcare destination. Our journey has been defined
              by a relentless pursuit of medical excellence and a deep-rooted commitment to
              serving humanity.
            </p>
            <p>
              Today, we stand as a beacon of hope, equipped with state-of-the-art technology
              and a team of world-renowned medical professionals dedicated to providing
              comprehensive healthcare across various specialties.
            </p>
          </div>
          <div class="grid grid-cols-2 gap-8 mt-10">
            <div class="flex items-start space-x-4">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon('Target', 'h-6 w-6 text-[#328CCB]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1">Our Mission</h4>
                <p class="text-sm text-gray-600">To provide accessible, affordable, and high-quality healthcare.</p>
              </div>
            </div>
            <div class="flex items-start space-x-4">
              <div class="bg-[#D66C43]/10 p-3 rounded-xl">
                <?php echo getIcon('Eye', 'h-6 w-6 text-[#D66C43]'); ?>
              </div>
              <div>
                <h4 class="font-bold text-gray-900 mb-1">Our Vision</h4>
                <p class="text-sm text-gray-600">To be the most trusted healthcare partner in the region.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Values Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
          Values That <span class="text-[#328CCB]">Drive Us</span>
        </h3>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">
          Our core values are the foundation of everything we do at Akropolis Hospital.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php
        $values = [
            ['icon' => 'Heart', 'title' => 'Compassion', 'desc' => 'Treating every patient with empathy and kindness.', 'color' => 'text-pink-500', 'bg' => 'bg-pink-50'],
            ['icon' => 'Award', 'title' => 'Excellence', 'desc' => 'Striving for the highest standards in medical care.', 'color' => 'text-yellow-500', 'bg' => 'bg-yellow-50'],
            ['icon' => 'ShieldCheck', 'title' => 'Integrity', 'desc' => 'Upholding honesty and ethical practices in all we do.', 'color' => 'text-green-500', 'bg' => 'bg-green-50'],
            ['icon' => 'Users', 'title' => 'Collaboration', 'desc' => 'Working together as a team for better patient outcomes.', 'color' => 'text-blue-500', 'bg' => 'bg-blue-50']
        ];
        foreach ($values as $val):
        ?>
          <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
            <div class="<?php echo $val['bg']; ?> p-4 rounded-2xl w-fit mb-6 transition-colors duration-300 group-hover:bg-[#328CCB]/10">
              <?php echo getIcon($val['icon'], 'h-8 w-8 ' . $val['color'] . ' group-hover:text-[#328CCB]'); ?>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4"><?php echo $val['title']; ?></h3>
            <p class="text-gray-600 leading-relaxed"><?php echo $val['desc']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="bg-[#328CCB]/10 p-6 rounded-2xl mb-4 service-card">
            <div class="text-4xl font-bold text-[#328CCB] mb-2">25+</div>
            <div class="text-gray-600">Years Experience</div>
          </div>
        </div>
        <div class="text-center">
          <div class="bg-[#D66C43]/10 p-6 rounded-2xl mb-4 service-card">
            <div class="text-4xl font-bold text-[#D66C43] mb-2">100k+</div>
            <div class="text-gray-600">Happy Patients</div>
          </div>
        </div>
        <div class="text-center">
          <div class="bg-[#328CCB]/10 p-6 rounded-2xl mb-4 service-card">
            <div class="text-4xl font-bold text-[#328CCB] mb-2">50+</div>
            <div class="text-gray-600">Doctors</div>
          </div>
        </div>
        <div class="text-center">
          <div class="bg-[#D66C43]/10 p-6 rounded-2xl mb-4 service-card">
            <div class="text-4xl font-bold text-[#D66C43] mb-2">90%</div>
            <div class="text-gray-600">Patient Satisfaction</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>
