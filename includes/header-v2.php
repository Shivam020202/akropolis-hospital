<?php
// Header Component v2 - Fixed Dropdown
// Note: Emergency bar is included in each page template
?>
<header class="bg-white shadow-lg sticky top-8 z-50">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <div class="flex items-center space-x-3 h-full">
        <a href="/" class="nav-link flex items-center h-full" data-page="home">
          <img
            src="https://brandingpioneers.co.in/akropolis/WhatsApp%20Image%202025-08-16%20at%2012.12.12_9a8761f4.jpg"
            alt="Akropolis Hospital Logo"
            class="h-12 lg:h-16 w-auto"
          />
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-stretch h-full space-x-8">
        <?php
        $navigation = [
            ['name' => 'Home', 'href' => '/', 'page' => 'home'],
            ['name' => 'About', 'href' => '/about', 'page' => 'about'],
            ['name' => 'Departments', 'href' => '/departments', 'page' => 'departments', 'hasMegaMenu' => true],
            ['name' => 'Doctors', 'href' => '/doctors', 'page' => 'doctors'],
            ['name' => 'Services', 'href' => '/departments#services', 'hasDropdown' => true],
            ['name' => 'Blog', 'href' => '/blog', 'page' => 'blog'],
            ['name' => 'Contact', 'href' => '/contact', 'page' => 'contact']
        ];

        foreach ($navigation as $item):
        ?>
          <div class="relative h-full flex items-center nav-dropdown-container">
            <a
              href="<?php echo $item['href']; ?>"
              class="nav-link h-full px-2 text-gray-700 hover:text-[#328CCB] font-medium transition-colors duration-200 flex items-center space-x-1"
              data-page="<?php echo $item['page'] ?? ''; ?>"
            >
              <span><?php echo $item['name']; ?></span>
              <?php if (isset($item['hasMegaMenu']) || isset($item['hasDropdown'])): ?>
                <?php echo getIcon('ChevronDown', 'h-4 w-4 transition-transform duration-200'); ?>
              <?php endif; ?>
            </a>

            <?php if (isset($item['hasMegaMenu'])): ?>
            <!-- Mega Menu -->
            <div id="mega-menu" class="dropdown-panel mega-menu-glass absolute left-1/2 transform -translate-x-1/2 w-screen max-w-4xl rounded-2xl shadow-2xl border border-gray-100 p-8">
              <div class="mb-6">
                <p class="text-2xl font-bold text-gray-900 mb-2">Medical Departments</p>
                <p class="text-gray-600">Comprehensive healthcare services across all specialties</p>
              </div>
              <div class="grid grid-cols-3 gap-6">
                <?php foreach (array_slice($megaMenuDepartments, 0, 15) as $dept): ?>
                  <a href="<?php echo $dept['href']; ?>" class="nav-link department-mega-item flex items-start space-x-4 p-4 rounded-xl bg-gray-50 hover:bg-[#328CCB]/5 hover:shadow-md transition-all duration-200 cursor-pointer" data-page="<?php echo ltrim($dept['href'], '/'); ?>">
                    <div class="bg-[#328CCB]/10 p-3 rounded-lg"><?php echo getIcon($dept['icon'], 'h-6 w-6 text-[#328CCB]'); ?></div>
                    <div class="flex-1">
                      <p class="font-semibold text-gray-900 mb-1"><?php echo $dept['name']; ?></p>
                      <p class="text-sm text-gray-600 leading-relaxed"><?php echo $dept['description']; ?></p>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
              <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                <a href="/departments" class="nav-link inline-flex items-center space-x-2 bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200" data-page="departments">
                  <span>View All Departments</span>
                  <?php echo getIcon('ChevronDown', 'h-4 w-4 rotate-270'); ?>
                </a>
              </div>
            </div>
            <?php endif; ?>

            <?php if (isset($item['hasDropdown'])): ?>
            <!-- Services Dropdown -->
            <div id="services-dropdown" class="dropdown-panel mega-menu-glass absolute left-1/2 transform -translate-x-1/2 w-64 rounded-xl shadow-2xl border border-gray-100 py-4">
              <div class="px-4 py-2 border-b border-gray-100">
                <p class="font-bold text-gray-900">Medical Services</p>
                <p class="text-sm text-gray-600">Advanced diagnostic services</p>
              </div>
              <div class="py-2">
                <?php
                $servicesMenuItems = [
                    ['name' => 'CT Scan', 'href' => '/ct-scan', 'page' => 'ct-scan'],
                    ['name' => 'Endoscopy', 'href' => '/endoscopy', 'page' => 'endoscopy'],
                    ['name' => 'Dialysis', 'href' => '/dialysis', 'page' => 'dialysis'],
                    ['name' => 'Laboratory', 'href' => '/laboratory', 'page' => 'laboratory'],
                    ['name' => 'Bronchoscopy', 'href' => '/bronchoscopy', 'page' => 'bronchoscopy'],
                    ['name' => 'Colonoscopy', 'href' => '/colonoscopy', 'page' => 'colonoscopy']
                ];
                foreach ($servicesMenuItems as $service):
                ?>
                  <a href="<?php echo $service['href']; ?>" class="nav-link block px-4 py-3 text-gray-700 hover:bg-[#328CCB]/5 hover:text-[#328CCB] transition-colors duration-200 font-medium" data-page="<?php echo $service['page']; ?>"><?php echo $service['name']; ?></a>
                <?php endforeach; ?>
              </div>
              <div class="px-4 py-2 border-t border-gray-100">
                <a href="/departments" class="nav-link block text-center bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-4 py-2 rounded-lg font-semibold transition-colors duration-200 text-sm" data-page="departments">View All Services</a>
              </div>
            </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </nav>

      <!-- Desktop CTAs -->
      <div class="hidden lg:flex items-center space-x-4">
        <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-2 rounded-lg font-semibold transition-colors duration-200 flex items-center space-x-2 emergency-btn glow-hover-secondary">
          <?php echo getIcon('Phone', 'h-4 w-4'); ?>
          <span>Emergency</span>
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-btn lg:hidden p-2 text-[#328CCB]" onclick="toggleMobileMenu()" aria-label="Toggle Menu">
        <?php echo getIcon('Menu', 'h-7 w-7'); ?>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu closed lg:hidden py-4 border-t hidden">
      <nav class="space-y-4">
        <?php foreach ($navigation as $item): ?>
          <div>
            <?php if (isset($item['hasMegaMenu'])): ?>
              <button onclick="toggleMobileDeptMenu()" class="nav-link block w-full text-left text-gray-700 hover:text-[#328CCB] font-medium py-2 flex items-center justify-between">
                <span><?php echo $item['name']; ?></span>
                <?php echo getIcon('ChevronDown', 'h-4 w-4 transition-transform duration-200 dept-chevron'); ?>
              </button>
              <div id="mobile-dept-menu" class="hidden ml-4 mt-2 space-y-2">
                <?php foreach (array_slice($megaMenuDepartments, 0, 15) as $dept): ?>
                  <a href="<?php echo $dept['href']; ?>" class="nav-link block text-gray-600 hover:text-[#328CCB] py-2 text-sm border-b border-gray-100" data-page="<?php echo ltrim($dept['href'], '/'); ?>"><?php echo $dept['name']; ?></a>
                <?php endforeach; ?>
              </div>
            <?php else: ?>
              <a href="<?php echo $item['href']; ?>" class="nav-link block text-gray-700 hover:text-[#328CCB] font-medium py-2" data-page="<?php echo $item['page'] ?? ''; ?>"><?php echo $item['name']; ?></a>
            <?php endif; ?>
            <?php if (isset($item['hasDropdown'])): ?>
              <div class="ml-4 mt-2 space-y-2">
                <?php foreach ($servicesMenuItems as $service): ?>
                  <a href="<?php echo $service['href']; ?>" class="nav-link block text-gray-600 hover:text-[#328CCB] py-1 text-sm" data-page="<?php echo $service['page']; ?>"><?php echo $service['name']; ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
        <div class="pt-4 space-y-3">
          <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center space-x-2 emergency-glow">
            <?php echo getIcon('Phone', 'h-4 w-4'); ?>
            <span>Emergency Services</span>
          </a>
          <a href="/contact" class="nav-link w-full bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-4 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center space-x-2" data-page="contact">
            <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
            <span>Book Appointment</span>
          </a>
        </div>
      </nav>
    </div>
  </div>
</header>

<style>
.nav-dropdown-container { position: relative; }
.dropdown-panel { position: absolute; top: 100%; left: 50%; transform: translateX(-50%); z-index: 100; display: none; }
.nav-dropdown-container:hover .dropdown-panel { display: block; }
</style>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
    menu.classList.toggle('open');
    menu.classList.toggle('closed');
}
function toggleMobileDeptMenu() {
    const deptMenu = document.getElementById('mobile-dept-menu');
    const chevron = document.querySelector('.dept-chevron');
    deptMenu.classList.toggle('hidden');
    if (chevron) { chevron.classList.toggle('rotate-180'); }
}
</script>
