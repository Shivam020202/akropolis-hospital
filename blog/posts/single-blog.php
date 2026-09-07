<?php
/**
 * Single Blog Page Template (Multi-language)
 * ============================================
 * Router file. Access patterns:
 *   /blog/hi/some-slug.php   (set $lang='hi', $slug from filename)
 *   /blog/en/some-slug.php
 *
 * Each filename (without .php) is the slug.
 * This file reads the slug from the filename, looks it up in
 * the matching /blog/{lang}/posts/blogs.php data file, and renders.
 */

$lang = '';
$slug = '';

// Detect language and slug from the URL: /blog/hi/early-signs (clean) or /blog/hi/early-signs.php
$request_uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH));
if (preg_match('#^/blog/(hi|en)/([a-z0-9\-]+)(?:\.php)?/?$#i', $request_uri, $m)) {
    $lang = $m[1];
    $slug = $m[2];
} else {
    // Fallback: parse from script name
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    if (preg_match('#/blog/(hi|en)/([a-z0-9\-]+)(?:\.php)?#i', $script, $m)) {
        $lang = $m[1];
        $slug = $m[2];
    }
}

if (!$lang || !$slug) {
    http_response_code(404);
    echo 'Invalid request';
    exit;
}

require_once __DIR__ . '/../../includes/data.php';
require_once __DIR__ . '/../../includes/schema.php';
require_once __DIR__ . '/blog-template.php';

$data_file = __DIR__ . "/../{$lang}/posts/blogs.php";
$published_blogs = load_blogs($data_file);

$blog = null;
foreach ($published_blogs as $b) {
    if ($b['slug'] === $slug) {
        $blog = $b;
        break;
    }
}

if (!$blog) {
    http_response_code(404);
    $page_title = '404 - Blog Not Found | Akropolis Hospital';
    $page_description = 'The requested blog post could not be found.';
    $canonical_url = '/blog/' . $lang;
    $schema_blocks = [];
    include __DIR__ . '/../../includes/head.php';
    echo '<main class="py-32 text-center">';
    echo '<h1 class="text-4xl font-bold text-gray-900 mb-4">' . ($lang === 'hi' ? 'ब्लॉग पोस्ट नहीं मिली' : 'Blog Not Found') . '</h1>';
    echo '<p class="text-gray-600 mb-8">The blog post you are looking for does not exist.</p>';
    echo '<a href="/blog/' . $lang . '" class="bg-[#328CCB] text-white px-6 py-3 rounded-lg inline-block">' . ($lang === 'hi' ? 'ब्लॉग पर वापस जाएं' : 'Back to Blog') . '</a>';
    echo '</main>';
    include __DIR__ . '/../../includes/footer.php';
    include __DIR__ . '/../../includes/scripts.php';
    exit;
}

// Check if a translation exists in the other language
$other_lang = ($lang === 'en') ? 'hi' : 'en';
$other_data_file = __DIR__ . "/../{$other_lang}/posts/blogs.php";
$other_blogs = load_blogs($other_data_file);

$has_translation = false;
foreach ($other_blogs as $ob) {
    if ($ob['slug'] === $blog['slug']) {
        $has_translation = true;
        break;
    }
}

$en_url = ($lang === 'en' || $has_translation) ? "/blog/en/{$blog['slug']}" : "/blog/en";
$hi_url = ($lang === 'hi' || $has_translation) ? "/blog/hi/{$blog['slug']}" : "/blog/hi";

$page_title       = $blog['title'] . ' | Akropolis Hospital';
$page_description = $blog['excerpt'];
$canonical_url    = '/blog/' . $lang . '/' . $blog['slug'];
$current_page     = 'blog';
$page_author      = $blog['author'];
$page_publisher   = 'Akropolis Super Speciality Hospital';
$page_robots      = 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

$schema_blocks = [];

// 1) BlogPosting schema
$schema_blocks[] = json_encode([
    '@context'         => 'https://schema.org',
    '@type'            => 'BlogPosting',
    'headline'         => $blog['title'],
    'description'      => $blog['excerpt'],
    'image'            => $blog['image'],
    'datePublished'    => $blog['published_at'],
    'dateModified'     => $blog['published_at'],
    'inLanguage'       => $lang === 'hi' ? 'hi-IN' : 'en-IN',
    'author'           => [
        '@type' => 'Person',
        'name'  => $blog['author'],
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => 'Akropolis Super Speciality Hospital',
        'logo'  => ['@type' => 'ImageObject', 'url' => 'https://akropolishospital.com/favicon.svg'],
    ],
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id'   => 'https://akropolishospital.com' . $canonical_url,
    ],
    'articleSection'   => $blog['category'],
    'keywords'         => implode(', ', $blog['tags']),
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// 2) Breadcrumb schema
$schema_blocks[] = schemaBreadcrumb([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Blog', 'url' => '/blog'],
    ['name' => $lang === 'hi' ? 'हिंदी' : 'English', 'url' => '/blog/' . $lang],
    ['name' => $blog['title'], 'url' => $canonical_url],
]);

// 3) FAQ schema (if blog has FAQ)
if (!empty($blog['faqs']) && is_array($blog['faqs'])) {
    $schema_blocks[] = schemaFAQ($blog['faqs']);
}

include __DIR__ . '/../../includes/head.php';
?>

<!-- Emergency Bar -->
<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-center space-x-2">
    <?php echo getIcon('Phone', 'h-4 w-4'); ?>
    <span class="font-semibold text-sm md:text-base">
      <?php echo $lang === 'hi' ? '24×7 आपातकाल:' : 'Emergency 24×7:'; ?> <?php echo CONTACT_INFO['emergency']; ?>
    </span>
  </div>
</div>

<!-- Header -->
<?php include __DIR__ . '/../../includes/header-v2.php'; ?>

<main>
  <!-- Hero / Article Header -->
  <section class="bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white py-12 lg:py-16">
    <div class="container mx-auto px-4 max-w-4xl">
      <!-- Breadcrumb -->
      <nav class="text-sm text-blue-100 mb-6 flex flex-wrap items-center gap-2">
        <a href="/" class="hover:text-white"><?php echo $lang === 'hi' ? 'होम' : 'Home'; ?></a>
        <span>›</span>
        <a href="/blog" class="hover:text-white"><?php echo $lang === 'hi' ? 'ब्लॉग' : 'Blog'; ?></a>
        <span>›</span>
        <a href="/blog/<?php echo $lang; ?>" class="hover:text-white"><?php echo $lang === 'hi' ? 'हिंदी' : 'English'; ?></a>
      </nav>

      <!-- Language Switcher -->
      <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full p-1 mb-6 text-sm">
        <a href="<?php echo $en_url; ?>" class="px-4 py-1.5 rounded-full <?php echo $lang === 'en' ? 'bg-white text-[#328CCB] font-semibold' : 'text-white/80 hover:text-white'; ?>">English</a>
        <a href="<?php echo $hi_url; ?>" class="px-4 py-1.5 rounded-full <?php echo $lang === 'hi' ? 'bg-white text-[#328CCB] font-semibold' : 'text-white/80 hover:text-white'; ?>">हिंदी</a>
      </div>

      <span class="inline-block bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold mb-4">
        <?php echo htmlspecialchars($blog['category']); ?>
      </span>
      <h1 class="text-3xl lg:text-5xl font-bold leading-tight mb-6">
        <?php echo htmlspecialchars($blog['title']); ?>
      </h1>
      <p class="text-lg text-blue-100 mb-6 leading-relaxed">
        <?php echo htmlspecialchars($blog['excerpt']); ?>
      </p>
      <div class="flex flex-wrap items-center gap-4 text-sm text-blue-100">
        <div class="flex items-center space-x-2">
          <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center font-bold">
            <?php echo strtoupper(substr($blog['author'], 0, 1)); ?>
          </div>
          <span class="font-semibold text-white"><?php echo htmlspecialchars($blog['author']); ?></span>
        </div>
        <span>•</span>
        <div class="flex items-center space-x-1">
          <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
          <span><?php echo date('F j, Y', strtotime($blog['published_at'])); ?></span>
        </div>
        <span>•</span>
        <div class="flex items-center space-x-1">
          <?php echo getIcon('Clock', 'h-4 w-4'); ?>
          <span><?php echo $blog['read_time']; ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Image -->
  <div class="container mx-auto px-4 max-w-4xl -mt-8">
    <img width="800" height="600" src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>"
         class="w-full h-64 lg:h-96 object-cover rounded-2xl shadow-2xl" />
  </div>

  <!-- Article Body -->
  <article class="py-12 lg:py-16">
    <div class="container mx-auto px-4 max-w-3xl">
      <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed space-y-6 [&_a]:!text-[#328CCB] [&_a]:!font-semibold [&_a]:underline [&_a]:underline-offset-2 hover:[&_a]:!text-[#2a7bb5] [&_a]:transition-colors">
        <?php echo $blog['content']; ?>
      </div>

      <!-- Inline CTA 1 -->
      <div class="my-12 bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white rounded-2xl p-8 text-center shadow-xl">
        <?php echo getIcon('Calendar', 'h-10 w-10 mx-auto mb-3 text-yellow-300'); ?>
        <h2 class="text-2xl font-bold mb-2">
          <?php echo $lang === 'hi' ? 'विशेषज्ञ से परामर्श लें' : 'Consult Our Specialist'; ?>
        </h2>
        <p class="text-blue-100 mb-6">
          <?php echo $lang === 'hi'
            ? 'अक्रोपोलिस हॉस्पिटल के अनुभवी डॉक्टरों से अपॉइंटमेंट बुक करें।'
            : 'Book an appointment with our experienced Akropolis Hospital doctors.'; ?>
        </p>
        <a href="/contact" class="inline-flex items-center space-x-2 bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-3 rounded-full font-semibold transition-colors">
          <?php echo getIcon('Phone', 'h-4 w-4'); ?>
          <span><?php echo $lang === 'hi' ? 'अभी कॉल करें: ' : 'Call Now: '; ?><?php echo CONTACT_INFO['emergency']; ?></span>
        </a>
      </div>

      <!-- FAQ Section -->
      <?php if (!empty($blog['faqs']) && is_array($blog['faqs'])): ?>
        <section class="my-12">
          <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6 flex items-center space-x-2">
            <?php echo getIcon('HelpCircle', 'h-7 w-7 text-[#328CCB]'); ?>
            <span><?php echo $lang === 'hi' ? 'अक्सर पूछे जाने वाले प्रश्न' : 'Frequently Asked Questions'; ?></span>
          </h3>
          <div class="space-y-4">
            <?php foreach ($blog['faqs'] as $faq): ?>
              <details class="group bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <summary class="cursor-pointer p-5 flex items-center justify-between font-semibold text-gray-900 list-none">
                  <span class="flex-1 pr-4"><?php echo htmlspecialchars($faq['question']); ?></span>
                  <span class="text-[#328CCB] group-open:rotate-180 transition-transform">
                    <?php echo getIcon('ChevronDown', 'h-5 w-5'); ?>
                  </span>
                </summary>
                <div class="px-5 pb-5 text-gray-700 leading-relaxed border-t border-gray-100 pt-4">
                  <?php echo htmlspecialchars($faq['answer']); ?>
                </div>
              </details>
            <?php endforeach; ?>
          </div>
        </section>
      <?php endif; ?>

      <!-- Tags -->
      <div class="my-8 flex flex-wrap items-center gap-2">
        <span class="text-sm font-semibold text-gray-600"><?php echo $lang === 'hi' ? 'टैग:' : 'Tags:'; ?></span>
        <?php foreach ($blog['tags'] as $tag): ?>
          <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">#<?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      </div>

      <!-- Inline CTA 2 (End of article) -->
      <div class="my-12 bg-[#D66C43] text-white rounded-2xl p-8 text-center">
        <?php echo getIcon('Phone', 'h-10 w-10 mx-auto mb-3'); ?>
        <h3 class="text-2xl font-bold mb-2">
          <?php echo $lang === 'hi' ? '24×7 आपातकाल सेवा' : '24×7 Emergency Service'; ?>
        </h3>
        <p class="mb-4">
          <?php echo $lang === 'hi'
            ? 'किसी भी चिकित्सा आपातकाल के लिए तुरंत हमसे संपर्क करें।'
            : 'For any medical emergency, contact us immediately.'; ?>
        </p>
        <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="inline-flex items-center space-x-2 bg-white text-[#D66C43] px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors">
          <?php echo getIcon('Phone', 'h-4 w-4'); ?>
          <span><?php echo CONTACT_INFO['emergency']; ?></span>
        </a>
      </div>
    </div>
  </article>

  <!-- Related Blogs -->
  <?php
    $related = array_values(array_filter($published_blogs, function ($b) use ($blog) {
        return $b['slug'] !== $blog['slug'] && $b['category'] === $blog['category'];
    }));
    $related = array_slice($related, 0, 3);
  ?>
  <?php if (!empty($related)): ?>
    <section class="py-12 bg-gray-50">
      <div class="container mx-auto px-4 max-w-6xl">
        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-8 text-center">
          <?php echo $lang === 'hi' ? 'संबंधित लेख' : 'Related Articles'; ?>
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <?php foreach ($related as $rb): ?>
            <a href="<?php echo blog_post_url($lang, $rb['slug']); ?>"
               class="group bg-white rounded-xl shadow-md hover:shadow-xl overflow-hidden transition-shadow">
              <img width="800" height="600" src="<?php echo $rb['image']; ?>" alt="<?php echo htmlspecialchars($rb['title']); ?>"
                   class="w-full h-40 object-cover" />
              <div class="p-5">
                <span class="text-xs bg-[#328CCB]/10 text-[#328CCB] px-2 py-0.5 rounded-full font-semibold">
                  <?php echo htmlspecialchars($rb['category']); ?>
                </span>
                <h3 class="font-bold text-gray-900 mt-2 group-hover:text-[#328CCB] line-clamp-2">
                  <?php echo htmlspecialchars($rb['title']); ?>
                </h3>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<!-- Footer -->
<?php include __DIR__ . '/../../includes/footer.php'; ?>

<!-- Scripts -->
<?php include __DIR__ . '/../../includes/scripts.php'; ?>
