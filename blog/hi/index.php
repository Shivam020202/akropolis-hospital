<?php
require_once __DIR__ . '/../../includes/data.php';
require_once __DIR__ . '/../../includes/schema.php';
require_once __DIR__ . '/../posts/blog-template.php';

$lang = 'hi';
$published_blogs = load_blogs(__DIR__ . '/posts/blogs.php');

$page_title       = 'हेल्थ ब्लॉग | विशेषज्ञ चिकित्सा लेख - अक्रोपोलिस सुपर स्पेशलिटी हॉस्पिटल';
$page_description = 'अक्रोपोलिस हॉस्पिटल के विशेषज्ञों से नवीनतम स्वास्थ्य और चिकित्सा लेख पढ़ें। हृदय रोग, हड्डी रोग, बाल रोग, न्यूरोलॉजी और अधिक पर सलाह।';
$canonical_url    = '/blog/hi/';

$blog_schema = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'Blog',
    'inLanguage'  => 'hi',
    'name'        => 'अक्रोपोलिस हॉस्पिटल स्वास्थ्य ब्लॉग',
    'url'         => 'https://akropolishospital.com/blog/hi',
    'description' => $page_description,
    'publisher'   => [
        '@type' => 'Organization',
        'name'  => 'अक्रोपोलिस सुपर स्पेशलिटी हॉस्पिटल',
        'logo'  => ['@type' => 'ImageObject', 'url' => 'https://akropolishospital.com/favicon.svg'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$schema_blocks = [
    $blog_schema,
    schemaBreadcrumb([
        ['name' => 'होम', 'url' => '/'],
        ['name' => 'ब्लॉग', 'url' => '/blog'],
        ['name' => 'हिंदी', 'url' => '/blog/hi'],
    ]),
];

include __DIR__ . '/../../includes/head.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">
      24×7 आपातकाल: <?php echo CONTACT_INFO['emergency']; ?>
    </span>
  </div>
</div>

<!-- Header -->
<?php include __DIR__ . '/../../includes/header-v2.php'; ?>

<main>
  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20"
      style="background-image: url('https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb&w=1600');"
    ></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#328CCB]/90 to-[#2a7bb5]/90"></div>

    <div class="relative container mx-auto px-4 py-10 sm:py-14 md:py-20 lg:py-24">
      <div class="max-w-4xl mx-auto text-center">
        <!-- Language Switcher -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full p-1 mb-5 sm:mb-6 text-xs sm:text-sm">
          <a href="/blog/en" class="px-3 sm:px-4 py-1.5 rounded-full text-white/80 hover:text-white">English</a>
          <span class="px-3 sm:px-4 py-1.5 rounded-full bg-white text-[#328CCB] font-semibold">हिंदी</span>
        </div>

        <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-medium mb-5 sm:mb-6">
          <?php echo getIcon('BookOpen', 'h-4 w-4 text-yellow-300'); ?>
          <span>स्वास्थ्य और कल्याण ब्लॉग</span>
        </div>

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-5 sm:mb-6 leading-tight break-words">
          विशेषज्ञ स्वास्थ्य जानकारी
          <span class="block text-yellow-300">हमारे विशेषज्ञों से</span>
        </h1>

        <p class="text-base sm:text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-6 sm:mb-8 px-2 sm:px-0">
          अक्रोपोलिस हॉस्पिटल के विशेषज्ञों की टीम से नवीनतम चिकित्सा ज्ञान, स्वास्थ्य सुझाव और विशेषज्ञ सलाह से अवगत रहें।
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto px-2 sm:px-0">
          <form action="#blog-grid" method="get" class="relative">
            <input
              type="text"
              name="search"
              placeholder="लेख, विषय, डॉक्टर खोजें..."
              class="w-full px-4 sm:px-6 py-3 sm:py-4 pr-12 sm:pr-14 rounded-full text-sm sm:text-base text-gray-800 bg-white shadow-2xl focus:outline-none focus:ring-4 focus:ring-yellow-300/50"
            />
            <button
              type="submit"
              class="absolute right-1.5 sm:right-2 top-1/2 -translate-y-1/2 bg-[#D66C43] hover:bg-[#c55a36] text-white p-2.5 sm:p-3 rounded-full transition-colors"
              aria-label="खोजें"
            >
              <?php echo getIcon('Search', 'h-4 w-4 sm:h-5 sm:w-5'); ?>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Category Chips -->
  <section class="bg-white border-b border-gray-100 sticky top-8 z-30 shadow-sm">
    <div class="container mx-auto px-4 py-3 sm:py-4">
      <div class="flex items-center space-x-2 sm:space-x-3 overflow-x-auto pb-2 scrollbar-hide">
        <span class="text-xs sm:text-sm font-semibold text-gray-600 whitespace-nowrap">विषय:</span>
        <?php
        $categories = array_unique(array_column($published_blogs, 'category'));
        sort($categories);
        foreach ($categories as $cat): ?>
          <span class="whitespace-nowrap bg-[#328CCB]/10 text-[#328CCB] hover:bg-[#328CCB] hover:text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-medium transition-colors cursor-pointer">
            <?php echo htmlspecialchars($cat); ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Featured / Latest Blog -->
  <?php if (!empty($published_blogs)): $featured = $published_blogs[0]; ?>
  <section class="py-8 sm:py-12 lg:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="flex items-center space-x-2 mb-4 sm:mb-6">
        <span class="bg-[#D66C43] text-white px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-semibold uppercase tracking-wide">
          नवीनतम
        </span>
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">अभी प्रकाशित</h2>
      </div>

      <a href="<?php echo blog_post_url($lang, $featured['slug']); ?>"
         class="group block bg-white rounded-2xl sm:rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <div class="grid lg:grid-cols-2 gap-0">
          <div class="relative h-56 sm:h-64 md:h-72 lg:h-auto overflow-hidden">
            <img
              src="<?php echo $featured['image']; ?>"
              alt="<?php echo htmlspecialchars($featured['title']); ?>"
              class="w-full h-full object-cover"
            />
            <span class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-white/90 backdrop-blur-sm text-[#328CCB] px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-semibold">
              <?php echo htmlspecialchars($featured['category']); ?>
            </span>
          </div>
          <div class="p-5 sm:p-6 md:p-8 lg:p-12 flex flex-col justify-center">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs sm:text-sm text-gray-500 mb-3 sm:mb-4">
              <div class="flex items-center space-x-1">
                <?php echo getIcon('Calendar', 'h-3.5 w-3.5 sm:h-4 sm:w-4'); ?>
                <span><?php echo date('M j, Y', strtotime($featured['published_at'])); ?></span>
              </div>
              <div class="flex items-center space-x-1">
                <?php echo getIcon('Clock', 'h-3.5 w-3.5 sm:h-4 sm:w-4'); ?>
                <span><?php echo $featured['read_time']; ?></span>
              </div>
            </div>
            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 sm:mb-4 group-hover:text-[#328CCB] transition-colors leading-tight break-words">
              <?php echo htmlspecialchars($featured['title']); ?>
            </h3>
            <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-4 sm:mb-6">
              <?php echo htmlspecialchars($featured['excerpt']); ?>
            </p>
            <div class="flex items-center space-x-2 sm:space-x-3">
              <div class="w-9 h-9 sm:w-10 sm:h-10 bg-[#328CCB]/10 rounded-full flex items-center justify-center text-[#328CCB] font-bold text-sm sm:text-base">
                <?php echo strtoupper(substr($featured['author'], 0, 1)); ?>
              </div>
              <div class="flex-1 min-w-0">
                <div class="text-sm font-semibold text-gray-900 truncate"><?php echo htmlspecialchars($featured['author']); ?></div>
                <div class="text-xs text-gray-500">चिकित्सा विशेषज्ञ</div>
              </div>
              <span class="inline-flex items-center space-x-1 text-[#328CCB] font-semibold group-hover:translate-x-1 transition-transform text-sm">
                <span class="hidden xs:inline">पूरा पढ़ें</span>
                <span class="xs:hidden">पढ़ें</span>
                <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
              </span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </section>
  <?php endif; ?>

  <!-- Blog Grid (3 x 3) -->
  <section id="blog-grid" class="py-8 sm:py-12 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-8 sm:mb-12">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-medium mb-3 sm:mb-4">
          <?php echo getIcon('FileText', 'h-3.5 w-3.5 sm:h-4 sm:w-4'); ?>
          <span>नवीनतम लेख</span>
        </div>
        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2 sm:mb-3 leading-tight">
          हाल के <span class="text-[#328CCB]">लेख</span>
        </h3>
        <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto px-2 sm:px-0">
          हमारे विशेषज्ञों द्वारा चुने गए चिकित्सा अंतर्दृष्टि और स्वास्थ्य मार्गदर्शन। नवीनतम लेख पहले दिखाई देते हैं।
        </p>
      </div>

      <?php $grid_blogs = array_slice($published_blogs, 1, 9); ?>

      <?php if (empty($grid_blogs)): ?>
        <p class="text-center text-gray-500">अभी कोई ब्लॉग पोस्ट उपलब्ध नहीं है। कृपया जल्द वापस देखें।</p>
      <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
          <?php foreach ($grid_blogs as $blog): ?>
            <article class="group bg-white rounded-xl sm:rounded-2xl shadow-md sm:shadow-lg hover:shadow-2xl overflow-hidden border border-gray-100 transition-all duration-300 flex flex-col">
              <a href="<?php echo blog_post_url($lang, $blog['slug']); ?>" class="block relative h-44 sm:h-48 md:h-52 overflow-hidden">
                <img
                  src="<?php echo $blog['image']; ?>"
                  alt="<?php echo htmlspecialchars($blog['title']); ?>"
                  loading="lazy"
                  class="w-full h-full object-cover"
                />
                <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-[#328CCB] px-2.5 sm:px-3 py-1 rounded-full text-[10px] sm:text-xs font-semibold">
                  <?php echo htmlspecialchars($blog['category']); ?>
                </span>
              </a>

              <div class="p-4 sm:p-6 flex flex-col flex-1">
                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-[10px] sm:text-xs text-gray-500 mb-2 sm:mb-3">
                  <div class="flex items-center space-x-1">
                    <?php echo getIcon('Calendar', 'h-3 w-3 sm:h-3.5 sm:w-3.5'); ?>
                    <span><?php echo date('M j, Y', strtotime($blog['published_at'])); ?></span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <?php echo getIcon('Clock', 'h-3 w-3 sm:h-3.5 sm:w-3.5'); ?>
                    <span><?php echo $blog['read_time']; ?></span>
                  </div>
                </div>

                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#328CCB] transition-colors break-words">
                  <a href="<?php echo blog_post_url($lang, $blog['slug']); ?>">
                    <?php echo htmlspecialchars($blog['title']); ?>
                  </a>
                </h3>

                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed mb-3 sm:mb-4 line-clamp-3 flex-1">
                  <?php echo htmlspecialchars($blog['excerpt']); ?>
                </p>

                <div class="flex items-center justify-between pt-3 sm:pt-4 border-t border-gray-100 gap-2">
                  <div class="flex items-center space-x-2 min-w-0 flex-1">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 bg-[#328CCB]/10 rounded-full flex items-center justify-center text-[#328CCB] font-bold text-[10px] sm:text-xs flex-shrink-0">
                      <?php echo strtoupper(substr($blog['author'], 0, 1)); ?>
                    </div>
                    <span class="text-[10px] sm:text-xs text-gray-700 font-medium truncate">
                      <?php echo htmlspecialchars($blog['author']); ?>
                    </span>
                  </div>
                  <a
                    href="<?php echo blog_post_url($lang, $blog['slug']); ?>"
                    class="inline-flex items-center space-x-1 text-[#328CCB] hover:text-[#2a7bb5] text-xs sm:text-sm font-semibold flex-shrink-0"
                  >
                    <span>पढ़ें</span>
                    <?php echo getIcon('ArrowRight', 'h-3 w-3 sm:h-3.5 sm:w-3.5'); ?>
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-12 sm:py-14 lg:py-16 bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white">
    <div class="container mx-auto px-4 text-center max-w-3xl">
      <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm font-medium mb-3 sm:mb-4">
        <?php echo getIcon('Calendar', 'h-3.5 w-3.5 sm:h-4 sm:w-4 text-yellow-300'); ?>
        <span>विशेषज्ञ से मिलें</span>
      </div>
      <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-2 sm:mb-3 leading-tight">
        अपनी नियुक्ति अभी बुक करें
      </h3>
      <p class="text-sm sm:text-base text-blue-100 mb-6 sm:mb-8 px-2 sm:px-0">
        अक्रोपोलिस हॉस्पिटल के अनुभवी विशेषज्ञों से परामर्श लें और सही उपचार पाएं।
      </p>
      <a
        href="/contact"
        class="inline-flex items-center space-x-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-5 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-sm sm:text-base lg:text-lg transition-colors shadow-lg whitespace-nowrap"
      >
        <?php echo getIcon('Calendar', 'h-4 w-4 sm:h-5 sm:w-5'); ?>
        <span>अपॉइंटमेंट बुक करें</span>
      </a>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include __DIR__ . '/../../includes/footer.php'; ?>

<!-- Scripts -->
<?php include __DIR__ . '/../../includes/scripts.php'; ?>
