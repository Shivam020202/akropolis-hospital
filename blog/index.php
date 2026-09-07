<?php
require_once __DIR__ . '/../includes/data.php';
require_once __DIR__ . '/../includes/schema.php';

$page_title       = 'Health Blog | Akropolis Super Speciality Hospital';
$page_description = 'Read expert-curated health and medical articles from Akropolis Hospital. Available in English and Hindi.';
$canonical_url    = '/blog/';

$schema_blocks = [
    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Blog', 'url' => '/blog'],
    ]),
];

include __DIR__ . '/../includes/head.php';
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
<?php include __DIR__ . '/../includes/header-v2.php'; ?>

<main>
  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20"
      style="background-image: url('https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb&w=1600');"
    ></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#328CCB]/90 to-[#2a7bb5]/90"></div>

    <div class="relative container mx-auto px-4 py-16 lg:py-24">
      <div class="max-w-4xl mx-auto text-center">
        <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('BookOpen', 'h-4 w-4 text-yellow-300'); ?>
          <span>Health & Wellness Blog</span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          Akropolis
          <span class="block text-yellow-300">Health Blog</span>
        </h1>

        <p class="text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
          Expert-curated medical articles and health tips. Choose your preferred language below.
        </p>
      </div>
    </div>
  </section>

  <!-- Language Picker -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-4">
          <?php echo getIcon('Globe', 'h-4 w-4'); ?>
          <span>Choose Your Language</span>
        </div>
        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
          अपनी भाषा चुनें / Choose Your Language
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Read the latest medical articles in English or Hindi — written by Akropolis Hospital specialists.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- English -->
        <a href="/blog/en"
           class="group bg-white rounded-3xl shadow-xl hover:shadow-2xl overflow-hidden transition-all duration-300 border-2 border-transparent hover:border-[#328CCB]">
          <div class="relative h-48 overflow-hidden">
            <img
              src="https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="English blog articles"
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            <span class="absolute top-4 right-4 bg-white text-[#328CCB] px-3 py-1 rounded-full text-xs font-bold uppercase">
              English
            </span>
            <span class="absolute bottom-4 left-4 text-white text-3xl font-bold">EN</span>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#328CCB] transition-colors">
              English Articles
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
              Browse the latest health articles written in English by our medical specialists.
              Topics include cardiology, orthopedics, pediatrics, neurology, and more.
            </p>
            <span class="inline-flex items-center space-x-2 text-[#328CCB] font-semibold group-hover:translate-x-1 transition-transform">
              <span>Read English Blog</span>
              <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
            </span>
          </div>
        </a>

        <!-- Hindi -->
        <a href="/blog/hi"
           class="group bg-white rounded-3xl shadow-xl hover:shadow-2xl overflow-hidden transition-all duration-300 border-2 border-transparent hover:border-[#D66C43]">
          <div class="relative h-48 overflow-hidden">
            <img
              src="https://images.pexels.com/photos/8460059/pexels-photo-8460059.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="हिंदी ब्लॉग लेख"
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            <span class="absolute top-4 right-4 bg-white text-[#D66C43] px-3 py-1 rounded-full text-xs font-bold uppercase">
              हिंदी
            </span>
            <span class="absolute bottom-4 left-4 text-white text-3xl font-bold">हि</span>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#D66C43] transition-colors">
              हिंदी लेख
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
              हमारे चिकित्सा विशेषज्ञों द्वारा हिंदी में लिखे गए नवीनतम स्वास्थ्य लेख पढ़ें।
              हृदय रोग, हड्डी रोग, बाल रोग, न्यूरोलॉजी और अधिक विषय शामिल हैं।
            </p>
            <span class="inline-flex items-center space-x-2 text-[#D66C43] font-semibold group-hover:translate-x-1 transition-transform">
              <span>हिंदी ब्लॉग पढ़ें</span>
              <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
            </span>
          </div>
        </a>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include __DIR__ . '/../includes/footer.php'; ?>

<!-- Scripts -->
<?php include __DIR__ . '/../includes/scripts.php'; ?>
