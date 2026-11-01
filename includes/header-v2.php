            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </nav>

      <!-- Desktop CTAs -->
      <div class="hidden lg:flex items-center space-x-4">
        <a href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>" class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-2 rounded-lg font-semibold transition-colors duration-200 flex items-center space-x-2 emergency-btn glow-hover-secondary">
          <?php echo getIcon('Phone', 'h-4 w-4'); ?>
          <span>Emergency</span>
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="mobile-menu-btn lg:hidden p-2 text-[#328CCB]" onclick="toggleMobileMenu()" aria-label="Toggle Menu" aria-controls="mobile-menu" aria-expanded="false">
        <?php echo getIcon('Menu', 'h-7 w-7'); ?>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu closed lg:hidden py-4 border-t hidden">
      <nav class="space-y-4" aria-label="Mobile navigation">
        <?php foreach ($navigation as $item): ?>
          <div>
            <?php if (!empty($item['hasMegaMenu'])): ?>
              <button type="button" onclick="toggleMobileDeptMenu()" class="nav-link block w-full text-left text-gray-700 hover:text-[#328CCB] font-medium py-2 flex items-center justify-between" aria-controls="mobile-dept-menu" aria-expanded="false">
                <span><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                <?php echo getIcon('ChevronDown', 'h-4 w-4 transition-transform duration-200 dept-chevron'); ?>
              </button>
              <div id="mobile-dept-menu" class="hidden ml-4 mt-2 space-y-2">
                <?php foreach (array_slice($megaMenuDepartments, 0, 15) as $dept): ?>
                  <a href="<?php echo htmlspecialchars($dept['href'], ENT_QUOTES, 'UTF-8'); ?>" class="nav-link block text-gray-600 hover:text-[#328CCB] py-2 text-sm border-b border-gray-100" data-page="<?php echo htmlspecialchars(ltrim($dept['href'], '/'), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($dept['name'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
              </div>
            <?php else: ?>
              <a href="<?php echo htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>" class="nav-link block text-gray-700 hover:text-[#328CCB] font-medium py-2" data-page="<?php echo htmlspecialchars($item['page'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></a>
            <?php endif; ?>

            <?php if (!empty($item['children'])): ?>
              <!-- Mobile About Submenu -->
              <div class="ml-4 mt-1 space-y-1 border-l-2 border-gray-100 pl-4">
                <?php foreach ($item['children'] as $child): ?>
                  <a href="<?php echo htmlspecialchars($child['href'], ENT_QUOTES, 'UTF-8'); ?>" class="nav-link block text-gray-600 hover:text-[#328CCB] py-2 text-sm" data-page="<?php echo htmlspecialchars($child['page'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($child['name'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
              </div>
            <?php elseif (!empty($item['hasDropdown'])): ?>
              <!-- Mobile Services Submenu -->
              <div class="ml-4 mt-2 space-y-2">
                <?php foreach ($servicesMenuItems as $service): ?>
                  <a href="<?php echo htmlspecialchars($service['href'], ENT_QUOTES, 'UTF-8'); ?>" class="nav-link block text-gray-600 hover:text-[#328CCB] py-1 text-sm" data-page="<?php echo htmlspecialchars($service['page'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <div class="pt-4 space-y-3">
          <a href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>" class="w-full bg-[#D66C43] hover:bg-[#c55a36] text-white px-4 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center space-x-2 emergency-glow">
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
.dropdown-panel {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 100;
    display: none;
}
.nav-dropdown-container:hover .dropdown-panel,
.nav-dropdown-container:focus-within .dropdown-panel {
    display: block;
}
</style>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const button = document.querySelector('.mobile-menu-btn');

    if (!menu) return;

    const isOpen = menu.classList.contains('open');

    if (isOpen) {
        menu.classList.remove('open');
        menu.classList.add('closed', 'hidden');
        if (button) button.setAttribute('aria-expanded', 'false');
    } else {
        menu.classList.remove('hidden', 'closed');
        menu.classList.add('open');
        if (button) button.setAttribute('aria-expanded', 'true');
    }
}

function toggleMobileDeptMenu() {
    const deptMenu = document.getElementById('mobile-dept-menu');
    const button = document.querySelector('[aria-controls="mobile-dept-menu"]');
    const chevron = document.querySelector('.dept-chevron');

    if (!deptMenu) return;

    deptMenu.classList.toggle('hidden');
    const isExpanded = !deptMenu.classList.contains('hidden');

    if (button) button.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    if (chevron) chevron.classList.toggle('rotate-180', isExpanded);
}
</script>
