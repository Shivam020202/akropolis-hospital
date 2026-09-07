<?php
require_once 'includes/data.php';
$page_title = 'Our Doctors | Akropolis';
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

<main class="bg-gray-50">
  <!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-[#328CCB] to-[#2a7bb5] text-white overflow-hidden">
    <div
      class="absolute inset-0 bg-cover bg-center bg-no-repeat"
      style="background-image: url('https://images.pexels.com/photos/5327656/pexels-photo-5327656.jpeg?auto=compress&cs=tinysrgb&w=1600');"
    >
      <div class="absolute inset-0 bg-[#328CCB] bg-opacity-75"></div>
    </div>

    <div class="relative container mx-auto px-4 py-20 lg:py-32">
      <div class="max-w-4xl mx-auto text-center">
        <div class="flex items-center justify-center space-x-2 mb-6">
          <?php echo getIcon('Stethoscope', 'h-6 w-6 text-yellow-400'); ?>
          <span class="text-yellow-400 font-semibold">Medical Excellence</span>
        </div>

        <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
          Meet Our Expert
          <span class="block">Medical Team</span>
        </h1>
        <h2 class="sr-only">Our Specialists Directory</h2>

        <p class="text-xl lg:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">
          Highly qualified specialist doctors committed to providing world-class healthcare
          with personalized attention and advanced medical expertise.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6">
          <a
            href="/contact"
            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Book Appointment</span>
          </a>
          <a
            href="tel:<?php echo CONTACT_INFO['emergency']; ?>"
            class="bg-white hover:bg-gray-50 text-[#328CCB] px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 shadow-lg"
          >
            <?php echo getIcon('Phone', 'h-5 w-5'); ?>
            <span>Emergency: <?php echo CONTACT_INFO['emergency']; ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Search and Filter Section -->
  <section class="py-12 bg-white shadow-sm">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto">
        <div class="flex flex-col lg:flex-row gap-4">
          <!-- Search Bar -->
          <div class="flex-1 relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <?php echo getIcon('Search', 'h-5 w-5 text-gray-400'); ?>
            </div>
            <input
              type="text"
              id="doctor-search"
              placeholder="Search doctors by name or specialty..."
              class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 text-lg form-input"
            />
          </div>

          <!-- Specialty Filter -->
          <div class="relative">
            <select
              id="specialty-filter"
              class="appearance-none bg-white border border-gray-300 rounded-lg px-4 py-4 pr-8 focus:ring-2 focus:ring-[#328CCB] focus:border-[#328CCB] transition-colors duration-200 text-lg min-w-[200px] form-input"
            >
              <option value="">All Specialties</option>
              <?php
              $specialties = array_unique(array_column($doctors, 'specialization'));
              sort($specialties);
              foreach ($specialties as $specialty):
              ?>
                <option value="<?php echo htmlspecialchars($specialty); ?>"><?php echo htmlspecialchars($specialty); ?></option>
              <?php endforeach; ?>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
              <?php echo getIcon('ChevronDown', 'h-5 w-5 text-gray-400'); ?>
            </div>
          </div>
        </div>

        <!-- Results Count -->
        <div class="mt-6 text-center">
          <p class="text-gray-600">
            Showing <span class="font-semibold text-[#328CCB]" id="results-count"><?php echo count($doctors); ?></span> doctors
            <span id="specialty-filter-label"></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Doctors Grid -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="doctors-grid">
        <?php foreach ($doctors as $doctor): ?>
          <div
            class="doctor-card bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100"
            data-name="<?php echo strtolower(htmlspecialchars($doctor['name'])); ?>"
            data-specialty="<?php echo strtolower(htmlspecialchars($doctor['specialization'])); ?>"
          >
            <div class="p-8">
              <div class="flex flex-col items-center text-center">
                <img
                  src="<?php echo htmlspecialchars($doctor['image']); ?>"
                  alt="<?php echo htmlspecialchars($doctor['name']); ?>"
                  class="w-32 h-32 rounded-full object-cover border-4 border-[#328CCB]/20 mb-6"
                />

                <h3 class="text-2xl font-bold text-gray-900 mb-2">
                  <?php echo htmlspecialchars($doctor['name']); ?>
                </h3>

                <p class="text-[#328CCB] font-semibold text-lg mb-2">
                  <?php echo htmlspecialchars($doctor['specialization']); ?>
                </p>

                <p class="text-gray-600 mb-4">
                  <?php echo htmlspecialchars($doctor['qualification']); ?>
                </p>

                <?php if ($doctor['registrationVerified']): ?>
                  <div class="inline-flex items-center space-x-2 bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm font-medium mb-4">
                    <?php echo getIcon('Shield', 'h-4 w-4'); ?>
                    <span>Medical Registration Verified</span>
                  </div>
                <?php endif; ?>

                <div class="bg-gray-50 rounded-lg p-4 w-full mb-6">
                  <div class="flex items-center justify-center space-x-2 text-gray-700 mb-2">
                    <?php echo getIcon('Clock', 'h-4 w-4'); ?>
                    <span class="font-medium">OPD Timing</span>
                  </div>
                  <p class="text-sm text-gray-600 text-center">
                    <?php echo htmlspecialchars($doctor['opdTiming']); ?>
                  </p>
                </div>

                <div class="flex items-center justify-center space-x-6 text-sm font-medium mb-6">
                  <div class="flex items-center space-x-2 text-[#D66C43]">
                    <?php echo getIcon('Award', 'h-4 w-4'); ?>
                    <span><?php echo htmlspecialchars($doctor['experience']); ?></span>
                  </div>
                  <?php if (!empty($doctor['yearsAsSpecialist'])): ?>
                    <div class="text-gray-600 text-xs">
                      (<?php echo htmlspecialchars($doctor['yearsAsSpecialist']); ?>)
                    </div>
                  <?php endif; ?>
                </div>

                <div class="flex flex-col space-y-3 w-full">
                  <a
                    href="/contact"
                    class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 flex items-center justify-center space-x-2"
                  >
                    <?php echo getIcon('Calendar', 'h-4 w-4'); ?>
                    <span>Book Appointment</span>
                  </a>

                  <a
                    href="/doctors/<?php echo htmlspecialchars($doctor['id']); ?>"
                    class="nav-link text-[#328CCB] hover:text-[#2a7bb5] font-medium text-sm transition-colors duration-200"
                  >
                    View Full Profile →
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- No Results Message -->
      <div id="no-results" class="hidden text-center py-16">
        <?php echo getIcon('User', 'h-16 w-16 text-gray-400 mx-auto mb-4'); ?>
        <h3 class="text-2xl font-bold text-gray-700 mb-2">No doctors found</h3>
        <p class="text-gray-500">Try adjusting your search criteria</p>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('doctor-search');
  const specialtyFilter = document.getElementById('specialty-filter');
  const doctorsGrid = document.getElementById('doctors-grid');
  const resultsCount = document.getElementById('results-count');
  const specialtyFilterLabel = document.getElementById('specialty-filter-label');
  const noResults = document.getElementById('no-results');

  const doctorCards = doctorsGrid.querySelectorAll('.doctor-card');

  function filterDoctors() {
    const searchTerm = searchInput.value.toLowerCase();
    const selectedSpecialty = specialtyFilter.value.toLowerCase();
    let visibleCount = 0;

    doctorCards.forEach(card => {
      const name = card.dataset.name || '';
      const specialty = card.dataset.specialty || '';

      const matchesSearch = name.includes(searchTerm) || specialty.includes(searchTerm);
      const matchesSpecialty = !selectedSpecialty || specialty === selectedSpecialty;

      if (matchesSearch && matchesSpecialty) {
        card.style.display = '';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    resultsCount.textContent = visibleCount;

    if (selectedSpecialty) {
      specialtyFilterLabel.innerHTML = ' in <span class="font-semibold">' + specialtyFilter.value + '</span>';
    } else {
      specialtyFilterLabel.innerHTML = '';
    }

    if (visibleCount === 0) {
      noResults.classList.remove('hidden');
    } else {
      noResults.classList.add('hidden');
    }
  }

  searchInput.addEventListener('input', filterDoctors);
  specialtyFilter.addEventListener('change', filterDoctors);
});
</script>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>
