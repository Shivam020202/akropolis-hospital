<?php
require_once __DIR__ . '/../../includes/data.php';
require_once __DIR__ . '/../../includes/schema.php';
require_once __DIR__ . '/../posts/blog-template.php';

$lang = 'en';
$published_blogs = load_blogs(__DIR__ . '/posts/blogs.php');

$page_title       = 'Health Blog | Expert Medical Articles - Akropolis Super Speciality Hospital';
$page_description = 'Read the latest health and medical articles from Akropolis Hospital experts. Tips on cardiology, orthopedics, pediatrics, neurology, and more.';
$canonical_url    = '/blog/en/';

$blog_schema = json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'Blog',
    'inLanguage'  => 'en',
    'name'        => 'Akropolis Hospital Health Blog',
    'url'         => 'https://akropolishospital.com/blog/en',
    'description' => $page_description,
    'publisher'   => [
        '@type' => 'Organization',
        'name'  => 'Akropolis Super Speciality Hospital',
        'logo'  => ['@type' => 'ImageObject', 'url' => 'https://akropolishospital.com/favicon.svg'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$schema_blocks = [
    $blog_schema,
    schemaBreadcrumb([
        ['name' => 'Home',  'url' => '/'],
        ['name' => 'Blog',  'url' => '/blog'],
        ['name' => 'English', 'url' => '/blog/en'],
    ]),
];

include __DIR__ . '/../../includes/head.php';
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
<?php include __DIR__ . '/../../includes/header-v2.php'; ?>

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
        <!-- Language Switcher -->
        <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full p-1 mb-6 text-sm">
          <span class="px-4 py-1.5 rounded-full bg-white text-[#328CCB] font-semibold">English</span>
          <a href="/blog/hi" class="px-4 py-1.5 rounded-full text-white/80 hover:text-white">हिंदी</a>
        </div>

        <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('BookOpen', 'h-4 w-4 text-yellow-300'); ?>
          <span>Health & Wellness Blog</span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          Expert Health Insights
          <span class="block text-yellow-300">From Our Specialists</span>
        </h1>

        <p class="text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed mb-8">
          Stay informed with the latest medical knowledge, health tips, and expert advice
          from Akropolis Hospital's team of specialists.
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto">
          <form action="#blog-grid" method="get" class="relative">
            <input
              type="text"
              name="search"
              placeholder="Search articles, topics, doctors..."
              class="w-full px-6 py-4 pr-14 rounded-full text-gray-800 bg-white shadow-2xl focus:outline-none focus:ring-4 focus:ring-yellow-300/50"
            />
            <button
              type="submit"
              class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#D66C43] hover:bg-[#c55a36] text-white p-3 rounded-full transition-colors"
              aria-label="Search"
            >
              <?php echo getIcon('Search', 'h-5 w-5'); ?>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Category Chips -->
  <section class="bg-white border-b border-gray-100 sticky top-8 z-30 shadow-sm">
    <div class="container mx-auto px-4 py-4">
      <div class="flex items-center space-x-3 overflow-x-auto pb-2">
        <span class="text-sm font-semibold text-gray-600 whitespace-nowrap">Topics:</span>
        <?php
        $categories = array_unique(array_column($published_blogs, 'category'));
        sort($categories);
        foreach ($categories as $cat): ?>
          <span class="whitespace-nowrap bg-[#328CCB]/10 text-[#328CCB] hover:bg-[#328CCB] hover:text-white px-4 py-2 rounded-full text-sm font-medium transition-colors cursor-pointer">
            <?php echo htmlspecialchars($cat); ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Featured / Latest Blog -->
  <?php if (!empty($published_blogs)): $featured = $published_blogs[0]; ?>
  <section class="py-12 lg:py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="flex items-center space-x-2 mb-6">
        <span class="bg-[#D66C43] text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wide">
          Latest
        </span>
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">Just Published</h2>
      </div>

      <a href="<?php echo blog_post_url($lang, $featured['slug']); ?>"
         class="group block bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
        <div class="grid lg:grid-cols-2 gap-0">
          <div class="relative h-64 lg:h-auto overflow-hidden">
            <img
              src="<?php echo $featured['image']; ?>"
              alt="<?php echo htmlspecialchars($featured['title']); ?>"
              class="w-full h-full object-cover"
            />
            <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-[#328CCB] px-3 py-1 rounded-full text-xs font-semibold">
              <?php echo htmlspecialchars($featured['category']); ?>
            </span>
          </div>
          <div class="p-8 lg:p-12 flex flex-col justify-center">
            <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
              <div class="flex items-center space-x-1">
                <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                <span><?php echo date('M j, Y', strtotime($featured['published_at'])); ?></span>
              </div>
              <div class="flex items-center space-x-1">
                <?php echo getIcon('Clock', 'h-4 w-4'); ?>
                <span><?php echo $featured['read_time']; ?></span>
              </div>
            </div>
            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4 group-hover:text-[#328CCB] transition-colors">
              <?php echo htmlspecialchars($featured['title']); ?>
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
              <?php echo htmlspecialchars($featured['excerpt']); ?>
            </p>
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 bg-[#328CCB]/10 rounded-full flex items-center justify-center text-[#328CCB] font-bold">
                <?php echo strtoupper(substr($featured['author'], 0, 1)); ?>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900"><?php echo htmlspecialchars($featured['author']); ?></div>
                <div class="text-xs text-gray-500">Medical Specialist</div>
              </div>
              <span class="ml-auto inline-flex items-center space-x-1 text-[#328CCB] font-semibold group-hover:translate-x-1 transition-transform">
                <span>Read More</span>
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
  <section id="blog-grid" class="py-12 lg:py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-4">
          <?php echo getIcon('FileText', 'h-4 w-4'); ?>
          <span>Latest Articles</span>
        </div>
        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
          Recent <span class="text-[#328CCB]">Articles</span>
        </h3>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Hand-picked medical insights and health guidance from our specialists.
          Newest articles appear first.
        </p>
      </div>

      <?php $grid_blogs = array_slice($published_blogs, 1, 9); ?>

      <?php if (empty($grid_blogs)): ?>
        <p class="text-center text-gray-500">No blog posts available right now. Please check back soon.</p>
      <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php foreach ($grid_blogs as $blog): ?>
            <article class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden border border-gray-100 transition-all duration-300 flex flex-col">
              <a href="<?php echo blog_post_url($lang, $blog['slug']); ?>" class="block relative h-48 overflow-hidden">
                <img
                  src="<?php echo $blog['image']; ?>"
                  alt="<?php echo htmlspecialchars($blog['title']); ?>"
                  loading="lazy"
                  class="w-full h-full object-cover"
                />
                <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-[#328CCB] px-3 py-1 rounded-full text-xs font-semibold">
                  <?php echo htmlspecialchars($blog['category']); ?>
                </span>
              </a>

              <div class="p-6 flex flex-col flex-1">
                <div class="flex items-center space-x-3 text-xs text-gray-500 mb-3">
                  <div class="flex items-center space-x-1">
                    <?php echo getIcon('Calendar', 'h-3.5 w-3.5'); ?>
                    <span><?php echo date('M j, Y', strtotime($blog['published_at'])); ?></span>
                  </div>
                  <div class="flex items-center space-x-1">
                    <?php echo getIcon('Clock', 'h-3.5 w-3.5'); ?>
                    <span><?php echo $blog['read_time']; ?></span>
                  </div>
                </div>

                <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#328CCB] transition-colors">
                  <a href="<?php echo blog_post_url($lang, $blog['slug']); ?>">
                    <?php echo htmlspecialchars($blog['title']); ?>
                  </a>
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-4 line-clamp-3 flex-1">
                  <?php echo htmlspecialchars($blog['excerpt']); ?>
                </p>

                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                  <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-[#328CCB]/10 rounded-full flex items-center justify-center text-[#328CCB] font-bold text-xs">
                      <?php echo strtoupper(substr($blog['author'], 0, 1)); ?>
                    </div>
                    <span class="text-xs text-gray-700 font-medium">
                      <?php echo htmlspecialchars($blog['author']); ?>
                    </span>
                  </div>
                  <a
                    href="<?php echo blog_post_url($lang, $blog['slug']); ?>"
                    class="inline-flex items-center space-x-1 text-[#328CCB] hover:text-[#2a7bb5] text-sm font-semibold"
                  >
                    <span>Read</span>
                    <?php echo getIcon('ArrowRight', 'h-3.5 w-3.5'); ?>
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
  <section class="py-16 bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white">
    <div class="container mx-auto px-4 text-center max-w-3xl">
      <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-4">
        <?php echo getIcon('Calendar', 'h-4 w-4 text-yellow-300'); ?>
        <span>Meet the Specialist</span>
      </div>
      <h3 class="text-3xl lg:text-4xl font-bold mb-3">
        Book Your Appointment Today
      </h3>
      <p class="text-blue-100 mb-8">
        Consult Akropolis Hospital's experienced specialists and get the right treatment.
      </p>
      <a
        href="/contact"
        class="inline-flex items-center space-x-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-full font-semibold text-lg transition-colors shadow-lg"
      >
        <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
        <span>Book Appointment</span>
      </a>
    </div>
  </section>
</main>

<!-- Footer -->
<?php include __DIR__ . '/../../includes/footer.php'; ?>

<!-- Scripts -->
<?php include __DIR__ . '/../../includes/scripts.php'; ?>
