<?php
require_once 'includes/data.php';
$page_title = 'Thank You | Akropolis';
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

<main class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-50 flex items-center justify-center px-4 py-12">
  <div class="max-w-2xl w-full">
    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 text-center floating-card">
      <div class="flex justify-center mb-6">
        <div class="relative">
          <div class="absolute inset-0 bg-[#328CCB] rounded-full blur-2xl opacity-30 animate-pulse"></div>
          <?php echo getIcon('CheckCircle', 'w-24 h-24 text-[#328CCB] relative'); ?>
        </div>
      </div>

      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
        Thank You!
      </h1>

      <p class="text-lg text-gray-600 mb-8 leading-relaxed">
        Your message has been successfully received. Our team will review your inquiry and get back to you within 24 hours.
      </p>

      <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-3">What happens next?</h2>
        <ul class="text-left space-y-3 text-gray-700">
          <li class="flex items-start">
            <span class="inline-block w-6 h-6 bg-[#328CCB] text-white rounded-full flex-shrink-0 mr-3 text-sm font-semibold flex items-center justify-center mt-0.5">1</span>
            <span>We'll review your message and assign it to the appropriate specialist</span>
          </li>
          <li class="flex items-start">
            <span class="inline-block w-6 h-6 bg-[#328CCB] text-white rounded-full flex-shrink-0 mr-3 text-sm font-semibold flex items-center justify-center mt-0.5">2</span>
            <span>Our team will contact you via your preferred method of communication</span>
          </li>
          <li class="flex items-start">
            <span class="inline-block w-6 h-6 bg-[#328CCB] text-white rounded-full flex-shrink-0 mr-3 text-sm font-semibold flex items-center justify-center mt-0.5">3</span>
            <span>We'll work together to address your healthcare needs</span>
          </li>
        </ul>
      </div>

      <div class="border-t border-gray-200 pt-8 mb-8">
        <p class="text-gray-600 mb-4">Need immediate assistance?</p>
        <a
          href="tel:<?php echo CONTACT_INFO['phone']; ?>"
          class="inline-flex items-center gap-2 text-[#328CCB] hover:text-[#2a7bb5] font-semibold text-lg transition-colors"
        >
          <?php echo getIcon('Phone', 'w-5 h-5'); ?>
          <span><?php echo CONTACT_INFO['phone']; ?></span>
        </a>
      </div>

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a
          href="/"
          class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-[#328CCB] text-white rounded-lg hover:bg-[#2a7bb5] transition-colors font-semibold shadow-lg hover:shadow-xl"
        >
          <?php echo getIcon('Home', 'w-5 h-5'); ?>
          <span>Back to Home</span>
        </a>

        <a
          href="/contact"
          class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-white text-[#328CCB] border-2 border-[#328CCB] rounded-lg hover:bg-blue-50 transition-colors font-semibold"
        >
          <?php echo getIcon('ArrowLeft', 'w-5 h-5'); ?>
          <span>Send Another Message</span>
        </a>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>
