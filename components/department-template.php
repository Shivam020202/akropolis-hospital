<?php
// Department Template
// Expects $dept_key to be set before including

if (!isset($dept_key) || !isset($deptConfig[$dept_key])) {
    echo "Department not found.";
    return;
}

$pageDept = $deptConfig[$dept_key];
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

<main class="min-h-screen bg-white">
  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo $pageDept['bg_image']; ?>');"
    >
      <div class="absolute inset-0 bg-[#328CCB] bg-opacity-75"></div>
    </div>

    <div class="relative container mx-auto px-4 py-20 lg:py-32">
      <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center space-x-2 mb-6">
          <?php echo getIcon($pageDept['icon'], 'h-6 w-6 ' . ($pageDept['subtitle_color'] ?? 'text-blue-400')); ?>
          <span class="<?php echo $pageDept['subtitle_color'] ?? 'text-blue-400'; ?> font-semibold"><?php echo $pageDept['subtitle']; ?></span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          <?php echo $pageDept['title']; ?>
        </h1>

        <p class="text-xl lg:text-2xl mb-8 text-blue-50 max-w-3xl mx-auto leading-relaxed">
          Comprehensive <?php echo strtolower($pageDept['name']); ?> care with cutting-edge technology, expert specialists,
          and compassionate support for all your healthcare needs.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
          <a
            href="#consultation-form"
            class="bg-white hover:bg-gray-50 text-[#328CCB] px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Book Consultation</span>
          </a>
          <a
            href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics Section -->
  <?php if (!empty($pageDept['statistics'])): ?>
  <section class="py-16 bg-white border-b border-gray-200">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <?php foreach ($pageDept['statistics'] as $stat): ?>
          <div class="text-center service-card">
            <div class="text-4xl lg:text-5xl font-bold text-[#328CCB] mb-2">
              <?php echo $stat['number']; ?>
            </div>
            <div class="text-gray-600 font-medium">
              <?php echo $stat['label']; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Emergency Warning Section -->
  <?php if (!empty($pageDept['emergency_symptoms'])): ?>
  <section class="py-12 bg-red-50 border-y border-red-200">
    <div class="container mx-auto px-4">
      <div class="max-w-5xl mx-auto">
        <div class="flex items-center justify-center space-x-3 mb-6">
          <?php echo getIcon('AlertCircle', 'h-6 w-6 text-red-600'); ?>
          <h3 class="text-2xl font-bold text-red-900">
            <?php echo $pageDept['emergency_title'] ?? 'Know the Warning Signs'; ?>
          </h3>
        </div>

        <?php 
        $symptoms_count = count($pageDept['emergency_symptoms']);
        $grid_cols_class = 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4';
        $max_width_class = 'max-w-5xl';
        if ($symptoms_count === 1) {
            $grid_cols_class = 'grid-cols-1';
            $max_width_class = 'max-w-md';
        } elseif ($symptoms_count === 2) {
            $grid_cols_class = 'grid-cols-1 md:grid-cols-2';
            $max_width_class = 'max-w-2xl';
        } elseif ($symptoms_count === 3) {
            $grid_cols_class = 'grid-cols-1 md:grid-cols-3';
            $max_width_class = 'max-w-4xl';
        }
        ?>
        <div class="grid <?php echo $grid_cols_class; ?> gap-4 <?php echo $max_width_class; ?> mx-auto">
          <?php foreach ($pageDept['emergency_symptoms'] as $symptom): ?>
            <div class="bg-white rounded-lg p-4 border border-red-200">
              <h4 class="font-bold text-red-700 mb-2"><?php echo $symptom['symptom']; ?></h4>
              <p class="text-sm text-gray-600"><?php echo $symptom['description']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="text-center mt-6">
          <p class="text-red-900 font-semibold">
            If you experience these symptoms, call
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="underline">
              <?php echo CONTACT_INFO['emergency']; ?>
            </a>
            immediately. Every minute counts!
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Why Choose Section -->
  <?php if (!empty($pageDept['features'])): ?>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon($pageDept['icon'], 'h-4 w-4'); ?>
          <span>Why Choose Our <?php echo $pageDept['name']; ?> Department</span>
        </div>
        <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Comprehensive <?php echo $pageDept['name']; ?>
          <span class="text-[#328CCB]"> Care</span>
        </h2>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          Our <?php echo strtolower($pageDept['name']); ?> department offers integrated care with advanced technology,
          expert physicians, and a patient-centered approach for optimal outcomes.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php foreach ($pageDept['features'] as $feature): ?>
          <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 p-8 text-center department-card">
            <div class="bg-[#328CCB]/10 p-4 rounded-xl w-fit mx-auto mb-6">
              <?php echo getIcon($feature['icon'], 'h-8 w-8 text-[#328CCB]'); ?>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4"><?php echo $feature['title']; ?></h3>
            <p class="text-gray-600 leading-relaxed"><?php echo $feature['description']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Treatment Approaches Section -->
  <?php if (!empty($pageDept['approaches'])): ?>
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Target', 'h-4 w-4'); ?>
          <span>Our Treatment Philosophy</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Comprehensive Treatment
          <span class="text-[#328CCB]"> Approaches</span>
        </h3>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          From prevention to advanced interventions, we provide complete care
          tailored to each patient's unique needs.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
        <?php foreach ($pageDept['approaches'] as $approach): ?>
          <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-gray-100 service-card">
            <div class="flex items-start space-x-4 mb-6">
              <div class="bg-[#328CCB]/10 p-3 rounded-xl">
                <?php echo getIcon($approach['icon'], 'h-6 w-6 text-[#328CCB]'); ?>
              </div>
              <div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $approach['title']; ?></h3>
                <p class="text-gray-600 leading-relaxed"><?php echo $approach['description']; ?></p>
              </div>
            </div>
            <div class="space-y-2 ml-16">
              <?php foreach ($approach['features'] as $feature): ?>
                <div class="flex items-center space-x-2">
                  <?php echo getIcon('CheckCircle', 'h-4 w-4 text-[#328CCB] flex-shrink-0'); ?>
                  <span class="text-sm text-gray-700"><?php echo $feature; ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Services Section -->
  <?php if (!empty($pageDept['services'])): ?>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Stethoscope', 'h-4 w-4'); ?>
          <span>Our Services</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Comprehensive <?php echo $pageDept['name']; ?>
          <span class="text-[#328CCB]"> Services</span>
        </h3>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          From diagnostic testing to advanced procedures, we provide
          complete care under one roof.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($pageDept['services'] as $service): ?>
          <div class="bg-white hover:bg-gray-50 rounded-2xl p-8 transition-all duration-300 border border-gray-100 hover:border-[#328CCB]/30 hover:shadow-lg service-card">
            <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-6">
              <?php echo getIcon($service['icon'], 'h-6 w-6 ' . ($pageDept['accent_color'] ?? 'text-[#328CCB]')); ?>
            </div>

            <h3 class="text-xl font-bold text-gray-900 mb-4"><?php echo $service['name']; ?></h3>
            <p class="text-gray-600 leading-relaxed"><?php echo $service['description']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Conditions Section -->
  <?php if (!empty($pageDept['conditions'])): ?>
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Activity', 'h-4 w-4'); ?>
            <span>Conditions We Treat</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            <?php echo $pageDept['name']; ?> Conditions
            <span class="text-[#328CCB]"> We Specialize In</span>
          </h3>
          <p class="text-gray-600 text-lg leading-relaxed">
            Our experienced team treats a wide range of conditions
            with personalized treatment plans designed for optimal outcomes.
          </p>
        </div>

        <div class="bg-gray-50 rounded-3xl shadow-xl p-8 lg:p-12 floating-card">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($pageDept['conditions'] as $condition): ?>
              <div class="flex items-center space-x-3">
                <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB] flex-shrink-0'); ?>
                <span class="text-gray-700 font-medium"><?php echo $condition; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Custom Sections (e.g. Cancer Staging) -->
  <?php if (!empty($pageDept['custom_sections'])): ?>
    <?php foreach ($pageDept['custom_sections'] as $section): ?>
      <section class="py-20 <?php echo $section['bg_class'] ?? 'bg-white'; ?>">
        <div class="container mx-auto px-4">
          <div class="text-center mb-16">
            <?php if (!empty($section['badge'])): ?>
              <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
                <?php echo getIcon($section['badge']['icon'], 'h-4 w-4'); ?>
                <span><?php echo $section['badge']['text']; ?></span>
              </div>
            <?php endif; ?>
            <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
              <?php echo $section['title']; ?>
            </h3>
            <?php if (!empty($section['description'])): ?>
              <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
                <?php echo $section['description']; ?>
              </p>
            <?php endif; ?>
          </div>

          <?php if ($section['type'] === 'stages'): ?>
            <div class="max-w-4xl mx-auto space-y-4">
              <?php foreach ($section['items'] as $item): ?>
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                  <div class="flex flex-col md:flex-row md:items-center md:space-x-6">
                    <div class="mb-4 md:mb-0">
                      <div class="bg-[#328CCB] text-white px-4 py-2 rounded-lg font-bold text-center min-w-[100px]">
                        <?php echo $item['label']; ?>
                      </div>
                    </div>
                    <div class="flex-1">
                      <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo $item['title']; ?></h3>
                      <p class="text-gray-600"><?php echo $item['description']; ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- Patient Resources Section -->
  <?php if (!empty($pageDept['resources'])): ?>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('BookOpen', 'h-4 w-4'); ?>
          <span>Patient Resources</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Resources for
          <span class="text-[#328CCB]"> Patients & Families</span>
        </h3>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          Comprehensive resources to support your health journey and recovery.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php foreach ($pageDept['resources'] as $resource): ?>
          <div class="bg-white rounded-2xl p-6 hover:shadow-xl transition-all duration-300 border border-gray-100 department-card">
            <div class="bg-[#328CCB]/10 p-3 rounded-xl w-fit mb-4">
              <?php echo getIcon($resource['icon'], 'h-6 w-6 text-[#328CCB]'); ?>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-3"><?php echo $resource['title']; ?></h3>
            <p class="text-gray-600 leading-relaxed text-sm"><?php echo $resource['description']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- FAQ Section -->
  <?php if (!empty($pageDept['faqs'])): ?>
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
          <?php echo getIcon('Info', 'h-4 w-4'); ?>
          <span>Frequently Asked Questions</span>
        </div>
        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
          Common Questions About
          <span class="text-[#328CCB]"> <?php echo $pageDept['name']; ?></span>
        </h3>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto leading-relaxed">
          Find answers to common questions about <?php echo strtolower($pageDept['name']); ?> services.
        </p>
      </div>

      <div class="max-w-4xl mx-auto space-y-4" id="faq-container">
        <?php foreach ($pageDept['faqs'] as $index => $faq): ?>
          <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden border border-gray-100 faq-item">
            <button
              onclick="toggleFaq(<?php echo $index; ?>)"
              class="w-full px-6 py-5 flex items-center justify-between hover:bg-gray-100 transition-colors duration-200"
            >
              <span class="text-left font-semibold text-gray-900 pr-4"><?php echo $faq['question']; ?></span>
              <span class="faq-icon flex-shrink-0">
                <?php echo getIcon('ChevronDown', 'h-5 w-5 text-[#328CCB] transition-transform duration-200'); ?>
              </span>
            </button>
            <div class="faq-answer hidden px-6 py-4 bg-white border-t border-gray-200">
              <p class="text-gray-600 leading-relaxed"><?php echo $faq['answer']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- Consultation Form Section -->
  <section id="consultation-form" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <div class="inline-flex items-center space-x-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-6">
            <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
            <span>Book Consultation</span>
          </div>
          <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            Schedule Your <?php echo $pageDept['name']; ?>
            <span class="text-[#328CCB]"> Consultation</span>
          </h3>
          <p class="text-gray-600 text-lg leading-relaxed">
            Begin your journey to better health. Fill out the form below
            and we will contact you to schedule your appointment.
          </p>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 floating-card">
          <form accept-charset="UTF-8" action="https://app.formester.com/forms/26PHowyy9/submissions" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                  Full Name *
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <?php echo getIcon('User', 'h-5 w-5 text-gray-400'); ?>
                  </div>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                    placeholder="Enter your full name"
                  />
                </div>
              </div>

              <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                  Email Address *
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <?php echo getIcon('Mail', 'h-5 w-5 text-gray-400'); ?>
                  </div>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                    placeholder="Enter your email address"
                  />
                </div>
              </div>

              <div>
                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                  Phone Number *
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <?php echo getIcon('Phone', 'h-5 w-5 text-gray-400'); ?>
                  </div>
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                    placeholder="Enter your phone number"
                  />
                </div>
              </div>

              <div>
                <label for="preferredDate" class="block text-sm font-semibold text-gray-700 mb-2">
                  Preferred Date
                </label>
                <input
                  type="date"
                  id="preferredDate"
                  name="preferredDate"
                  class="block w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 form-input"
                />
              </div>
            </div>

            <div>
              <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                Message
              </label>
              <div class="relative">
                <div class="absolute top-3 left-3 pointer-events-none">
                  <?php echo getIcon('MessageSquare', 'h-5 w-5 text-gray-400'); ?>
                </div>
                <textarea
                  id="message"
                  name="message"
                  rows="4"
                  class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 resize-none form-input"
                  placeholder="Please describe your health concern or any questions you have..."
                ></textarea>
              </div>
            </div>

            <div class="text-center">
              <button
                type="submit"
                class="bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] hover:from-[#2a7bb5] hover:to-[#236999] text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2 mx-auto shadow-lg cta-glow"
              >
                <?php echo getIcon('Send', 'h-5 w-5'); ?>
                <span>Schedule Consultation</span>
              </button>
            </div>

            <div class="text-center">
              <p class="text-sm text-gray-500">
                Our team will contact you within 24 hours to confirm your appointment.
                For emergencies, please call
                <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="text-[#328CCB] font-semibold hover:underline">
                  <?php echo CONTACT_INFO['emergency']; ?>
                </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-2xl font-bold text-gray-900 mb-8">
          Need Immediate Support?
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
          <div class="bg-gray-50 rounded-xl p-6 shadow-lg service-card">
            <?php echo getIcon('Phone', 'h-8 w-8 text-[#D66C43] mx-auto mb-4'); ?>
            <h4 class="font-bold text-gray-900 mb-2">Emergency</h4>
            <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="text-[#D66C43] font-semibold hover:underline text-lg">
              <?php echo CONTACT_INFO['emergency']; ?>
            </a>
            <p class="text-sm text-gray-500 mt-1">24/7 Available</p>
          </div>

          <div class="bg-gray-50 rounded-xl p-6 shadow-lg service-card">
            <?php echo getIcon('Phone', 'h-8 w-8 text-[#328CCB] mx-auto mb-4'); ?>
            <h4 class="font-bold text-gray-900 mb-2">Appointments</h4>
            <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="text-[#328CCB] font-semibold hover:underline text-lg">
              <?php echo CONTACT_INFO['phone']; ?>
            </a>
            <p class="text-sm text-gray-500 mt-1">Mon-Sat: 8 AM - 8 PM</p>
          </div>

          <div class="bg-gray-50 rounded-xl p-6 shadow-lg service-card">
            <?php echo getIcon('Mail', 'h-8 w-8 text-[#328CCB] mx-auto mb-4'); ?>
            <h4 class="font-bold text-gray-900 mb-2">Email</h4>
            <a href="mailto:<?php echo CONTACT_INFO['email']; ?>" class="text-[#328CCB] font-semibold hover:underline">
              <?php echo CONTACT_INFO['email']; ?>
            </a>
            <p class="text-sm text-gray-500 mt-1">We'll respond within 24 hours</p>
          </div>
        </div>

        <?php if (in_array($dept_key, ['obstetrics-gynecology', 'plastic-surgery'])): ?>
        <!-- Service Areas Section for SEO -->
        <div class="mt-20 pt-16 border-t border-gray-100">
          <?php
          $haryanaDistricts = [
              'ambala' => 'Ambala', 'bhiwani' => 'Bhiwani', 'charkhi-dadri' => 'Charkhi Dadri',
              'faridabad' => 'Faridabad', 'fatehabad' => 'Fatehabad', 'gurgaon' => 'Gurgaon',
              'hisar' => 'Hisar', 'jhajjar' => 'Jhajjar', 'jind' => 'Jind', 'kaithal' => 'Kaithal',
              'karnal' => 'Karnal', 'kurukshetra' => 'Kurukshetra', 'mahendragarh' => 'Mahendragarh',
              'mewat' => 'Mewat', 'palwal' => 'Palwal', 'panchkula' => 'Panchkula', 'panipat' => 'Panipat',
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
                Serving Across Haryana
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
                <?php foreach ($haryanaDistricts as $slug => $name): ?>
                  <option value="/<?php echo $dept_key; ?>/haryana/<?php echo $slug; ?>/">
                    <?php echo $name; ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                <?php echo getIcon('ChevronDown', 'h-5 w-5'); ?>
              </div>
            </div>
          </div>
          
          <div id="serving-areas-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12 text-left hidden">
            <?php
            // Department specific keyword rich text
            $keywordText = 'में सबसे अच्छे विशेषज्ञ';
            if ($dept_key === 'plastic-surgery') {
                $keywordText = 'में सबसे अच्छे प्लास्टिक और कॉस्मेटिक सर्जन';
            } elseif ($dept_key === 'obstetrics-gynecology') {
                $keywordText = 'में सबसे अच्छी लेडी डॉक्टर (स्त्री रोग विशेषज्ञ)';
            } elseif ($dept_key === 'orthopedics') {
                $keywordText = 'में सबसे अच्छे हड्डी के डॉक्टर (Bone Specialist)';
            }

            foreach ($haryanaDistricts as $slug => $name):
            ?>
              <div class="group">
                <a href="/<?php echo $dept_key; ?>/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-[#328CCB] transition-colors duration-200">
                  <div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-[#328CCB] transition-colors"></div>
                  <span class="font-medium"><?php echo $name . ' ' . $keywordText; ?></span>
                </a>
              </div>
            <?php endforeach; ?>
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
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<script>
function toggleFaq(index) {
  const faqItems = document.querySelectorAll('.faq-item');
  const clickedItem = faqItems[index];
  const answer = clickedItem.querySelector('.faq-answer');
  const icon = clickedItem.querySelector('.faq-icon svg');

  // Close all other FAQs
  faqItems.forEach((item, i) => {
    if (i !== index) {
      item.querySelector('.faq-answer').classList.add('hidden');
      item.querySelector('.faq-icon svg').style.transform = 'rotate(0deg)';
    }
  });

  // Toggle clicked FAQ
  if (answer.classList.contains('hidden')) {
    answer.classList.remove('hidden');
    icon.style.transform = 'rotate(180deg)';
  } else {
    answer.classList.add('hidden');
    icon.style.transform = 'rotate(0deg)';
  }
}
</script>
