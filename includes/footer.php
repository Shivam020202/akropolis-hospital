<?php
// Footer Component
// =========================================
?>
<footer class="footer-glass bg-gray-900 text-white">
  <div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Hospital Info -->
      <div class="lg:col-span-1">
        <img
          src="https://brandingpioneers.co.in/akropolis/WhatsApp%20Image%202025-08-16%20at%2012.12.12_9a8761f4.jpg"
          alt="Akropolis Hospital Logo"
          class="h-16 w-auto mb-6 bg-white p-2 rounded-lg"
        />
        <p class="text-gray-300 leading-relaxed mb-6">
          Akropolis Super Speciality Hospital - Your trusted partner in healthcare excellence
          with advanced medical technology and compassionate care.
        </p>

        <!-- Emergency Contact Highlight -->
        <div class="bg-[#D66C43] rounded-lg p-4 mb-6 emergency-glow">
          <div class="flex items-center space-x-3">
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <div>
              <div class="font-semibold">Emergency 24×7</div>
              <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="text-lg font-bold hover:underline"><?php echo CONTACT_INFO['emergency']; ?></a>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/profile.php?id=61580596171533#" target="_blank" class="bg-gray-800 hover:bg-[#328CCB] p-2 rounded-lg transition-colors duration-200" rel="noopener noreferrer">
            <?php echo getIcon('Facebook', 'h-5 w-5'); ?>
          </a>
          <a href="https://www.instagram.com/akropolishospital/" target="_blank" class="bg-gray-800 hover:bg-[#D66C43] p-2 rounded-lg transition-colors duration-200" rel="noopener noreferrer">
            <?php echo getIcon('Instagram', 'h-5 w-5'); ?>
          </a>
          <a href="https://www.youtube.com/@akropolishospital/videos" target="_blank" class="bg-gray-800 hover:bg-[#D66C43] p-2 rounded-lg transition-colors duration-200" rel="noopener noreferrer">
            <?php echo getIcon('Youtube', 'h-5 w-5'); ?>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <p class="text-xl font-bold mb-6">Quick Links</p>
        <ul class="space-y-3">
          <?php
          $quickLinks = [
            ['name' => 'Home', 'href' => '/', 'page' => 'home'],
            ['name' => 'About Us', 'href' => '/about', 'page' => 'about'],
            ['name' => 'Departments', 'href' => '/departments', 'page' => 'departments'],
            ['name' => 'Doctors', 'href' => '/doctors', 'page' => 'doctors'],
            ['name' => 'Blog', 'href' => '/blog', 'page' => 'blog'],
            ['name' => 'Contact', 'href' => '/contact', 'page' => 'contact']
          ];

          foreach ($quickLinks as $link):
          ?>
            <li>
              <a
                href="<?php echo $link['href']; ?>"
                class="nav-link text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2"
                data-page="<?php echo $link['page']; ?>"
              >
                <span>•</span>
                <span><?php echo $link['name']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Patient Services -->
      <div>
        <p class="text-xl font-bold mb-6">Patient Services</p>
        <ul class="space-y-3">
          <?php
          $patientServices = [
            ['name' => 'CT Scan', 'href' => '/ct-scan', 'page' => 'ct-scan'],
            ['name' => 'Endoscopy', 'href' => '/endoscopy', 'page' => 'endoscopy'],
            ['name' => 'Colonoscopy', 'href' => '/colonoscopy', 'page' => 'colonoscopy'],
            ['name' => 'Bronchoscopy', 'href' => '/bronchoscopy', 'page' => 'bronchoscopy'],
            ['name' => 'Dialysis', 'href' => '/dialysis', 'page' => 'dialysis'],
            ['name' => 'Laboratory', 'href' => '/laboratory', 'page' => 'laboratory']
          ];

          foreach ($patientServices as $service):
          ?>
            <li>
              <a
                href="<?php echo $service['href']; ?>"
                class="nav-link text-gray-300 hover:text-white transition-colors duration-200 flex items-center space-x-2"
                data-page="<?php echo $service['page']; ?>"
              >
                <span>•</span>
                <span><?php echo $service['name']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <p class="text-xl font-bold mb-6">Contact Info</p>
        <div class="space-y-4">
          <div class="flex items-start space-x-3">
            <div class="text-gray-400 mt-1"><?php echo getIcon('MapPin', 'h-5 w-5'); ?></div>
            <p class="text-gray-300 leading-relaxed">
              <?php echo CONTACT_INFO['address']; ?>
            </p>
          </div>
          <div class="flex items-center space-x-3">
            <div class="text-gray-400"><?php echo getIcon('Phone', 'h-5 w-5'); ?></div>
            <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="text-gray-300 hover:text-white"><?php echo CONTACT_INFO['phone']; ?></a>
          </div>
          <div class="flex items-center space-x-3">
            <div class="text-gray-400"><?php echo getIcon('Mail', 'h-5 w-5'); ?></div>
            <a href="mailto:<?php echo CONTACT_INFO['email']; ?>" class="text-gray-300 hover:text-white"><?php echo CONTACT_INFO['email']; ?></a>
          </div>
        </div>

        <!-- Accreditation -->
        <div class="mt-8 p-4 bg-gray-800 rounded-lg glass-dark">
          <div class="flex items-center space-x-2 mb-2">
            <div class="bg-yellow-400 p-1 rounded">
              <span class="text-gray-900 font-bold text-xs">NABH</span>
            </div>
            <span class="font-semibold">Accredited</span>
          </div>
          <p class="text-gray-400 text-sm">Quality healthcare standards certified</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-gray-800 py-6">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <p class="text-gray-400 text-center md:text-left">
          © 2025 Akropolis Super Speciality Hospital. All rights reserved.
        </p>
        <div class="flex space-x-6 mt-4 md:mt-0">
          <a href="/sitemap.xml" class="text-gray-400 hover:text-white transition-colors duration-200" target="_blank" rel="noopener noreferrer">
            Sitemap
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Floating CTAs for Mobile -->
<div class="fixed bottom-6 left-4 right-4 lg:hidden z-40 mobile-cta-float">
  <div class="flex space-x-3">
    <a
      href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
      class="flex-1 bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-3 rounded-lg font-semibold text-center transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg emergency-glow"
    >
      <?php echo getIcon('Phone', 'h-5 w-5'); ?>
      <span>Emergency</span>
    </a>
    <a
      href="/contact"
      class="nav-link flex-1 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-4 py-3 rounded-lg font-semibold text-center transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg"
      data-page="contact"
    >
      <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
      <span>Appointment</span>
    </a>
  </div>
</div>