<?php
require_once 'includes/data.php';

// Get doctor ID from URL
$doctorId = isset($_GET['id']) ? $_GET['id'] : '';

// Find the doctor
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === $doctorId) {
        $doctor = $d;
        break;
    }
}

// If no doctor found, show error
if (!$doctor) {
    $page_title = 'Doctor Not Found | Akropolis';
    include 'includes/head.php';
    include 'includes/header-v2.php';
    ?>
    <div class="min-h-screen bg-white flex items-center justify-center">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Doctor Not Found</h2>
            <a href="/doctors" class="bg-[#328CCB] hover:bg-[#2a7bb5] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 inline-block">
                Go Back to Doctors
            </a>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    exit;
}

$page_title = $doctor['name'] . ' | ' . $doctor['specialization'] . ' | Akropolis Hospital';
include 'includes/head.php';

// Get first name and last name
$nameParts = explode(' ', $doctor['name']);
$firstName = $nameParts[0]; // Dr.
$lastName = isset($nameParts[count($nameParts) - 1]) ? $nameParts[count($nameParts) - 1] : '';
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
  <!-- Back Button -->
  <div class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 py-4">
      <a href="/doctors" class="flex items-center space-x-2 text-gray-600 hover:text-[#328CCB] transition-colors duration-200">
        <?php echo getIcon('ArrowLeft', 'h-5 w-5'); ?>
        <span>Back to Doctors</span>
      </a>
    </div>
  </div>

  <div class="container mx-auto px-4 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Doctor Info Card -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24 service-card">
          <div class="text-center mb-6">
            <img
              src="<?php echo htmlspecialchars($doctor['image']); ?>"
              alt="<?php echo htmlspecialchars($doctor['name']); ?>"
              class="w-32 h-32 rounded-full object-cover border-4 border-[#328CCB]/20 mx-auto mb-4"
            />
            <h1 class="text-2xl font-bold text-gray-900 mb-2">
              <?php echo htmlspecialchars($doctor['name']); ?>
            </h1>
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
          </div>

          <!-- Experience -->
          <div class="space-y-4 mb-6">
            <div class="flex items-center space-x-3">
              <div class="bg-[#328CCB]/10 p-2 rounded-lg">
                <?php echo getIcon('Award', 'h-5 w-5 text-[#328CCB]'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">Experience</p>
                <p class="text-gray-600"><?php echo htmlspecialchars($doctor['experience']); ?></p>
                <?php if (!empty($doctor['yearsAsSpecialist'])): ?>
                  <p class="text-sm text-gray-500">(<?php echo htmlspecialchars($doctor['yearsAsSpecialist']); ?>)</p>
                <?php endif; ?>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <div class="bg-[#D66C43]/10 p-2 rounded-lg">
                <?php echo getIcon('Clock', 'h-5 w-5 text-[#D66C43]'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">OPD Timing</p>
                <p class="text-gray-600"><?php echo htmlspecialchars($doctor['opdTiming']); ?></p>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <div class="bg-green-100 p-2 rounded-lg">
                <?php echo getIcon('MapPin', 'h-5 w-5 text-green-600'); ?>
              </div>
              <div>
                <p class="font-semibold text-gray-900">Location</p>
                <p class="text-gray-600">Akropolis Super Speciality Hospital</p>
              </div>
            </div>
          </div>

          <!-- Book Appointment Button -->
          <a
            href="/contact"
            class="bg-[#D66C43] hover:bg-[#c55a36] text-white px-6 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg w-fit mx-auto cta-glow"
          >
            <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
            <span>Book Appointment</span>
          </a>

          <div class="mt-4 text-center">
            <p class="text-sm text-gray-500">
              Call: <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="text-[#328CCB] font-semibold"><?php echo CONTACT_INFO['phone']; ?></a>
            </p>
          </div>
        </div>
      </div>

      <!-- Doctor Details -->
      <div class="lg:col-span-2 space-y-8">
        <!-- About Doctor -->
        <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
          <div class="flex items-center space-x-3 mb-6">
            <div class="bg-[#328CCB]/10 p-3 rounded-xl">
              <?php echo getIcon('Stethoscope', 'h-6 w-6 text-[#328CCB]'); ?>
            </div>
            <h2 class="text-2xl font-bold text-gray-900">About Dr. <?php echo htmlspecialchars($lastName); ?></h2>
          </div>

          <p class="text-gray-700 leading-relaxed text-lg">
            <?php echo htmlspecialchars($doctor['description']); ?>
          </p>
        </div>

        <!-- Education -->
        <?php if (!empty($doctor['education'])): ?>
          <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-[#D66C43]/10 p-3 rounded-xl">
                <?php echo getIcon('GraduationCap', 'h-6 w-6 text-[#D66C43]'); ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Education</h3>
            </div>

            <div class="space-y-4">
              <?php foreach ($doctor['education'] as $edu): ?>
                <div class="border-l-4 border-[#328CCB] pl-6 py-3">
                  <h3 class="font-bold text-gray-900 text-lg"><?php echo htmlspecialchars($edu['degree']); ?></h3>
                  <p class="text-gray-600"><?php echo htmlspecialchars($edu['institution']); ?></p>
                  <p class="text-sm text-gray-500">Completed in <?php echo htmlspecialchars($edu['year']); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Services -->
        <?php if (!empty($doctor['services'])): ?>
          <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-green-100 p-3 rounded-xl">
                <?php echo getIcon('CheckCircle', 'h-6 w-6 text-green-600'); ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Services Provided</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <?php foreach ($doctor['services'] as $service): ?>
                <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                  <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB] flex-shrink-0'); ?>
                  <span class="text-gray-700 font-medium"><?php echo htmlspecialchars($service); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Professional Positions -->
        <?php if (!empty($doctor['positions'])): ?>
          <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-blue-100 p-3 rounded-xl">
                <?php echo getIcon('Briefcase', 'h-6 w-6 text-blue-600'); ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Professional Experience</h3>
            </div>

            <div class="space-y-4">
              <?php foreach ($doctor['positions'] as $position): ?>
                <div class="border-l-4 border-[#328CCB] pl-6 py-3">
                  <h3 class="font-bold text-gray-900 text-lg"><?php echo htmlspecialchars($position['title']); ?></h3>
                  <p class="text-gray-600"><?php echo htmlspecialchars($position['organization']); ?></p>
                  <p class="text-sm text-gray-500"><?php echo htmlspecialchars($position['period']); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Research & Publications -->
        <?php if (!empty($doctor['publications'])): ?>
          <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-amber-100 p-3 rounded-xl">
                <?php echo getIcon('FileText', 'h-6 w-6 text-amber-600'); ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Research & Publications</h3>
            </div>

            <div class="space-y-3">
              <?php foreach ($doctor['publications'] as $publication): ?>
                <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg">
                  <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB] flex-shrink-0 mt-0.5'); ?>
                  <p class="text-gray-700 leading-relaxed"><?php echo htmlspecialchars($publication); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Professional Memberships -->
        <?php if (!empty($doctor['memberships'])): ?>
          <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
            <div class="flex items-center space-x-3 mb-6">
              <div class="bg-teal-100 p-3 rounded-xl">
                <?php echo getIcon('Users', 'h-6 w-6 text-teal-600'); ?>
              </div>
              <h3 class="text-2xl font-bold text-gray-900">Professional Memberships</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <?php foreach ($doctor['memberships'] as $membership): ?>
                <div class="flex items-center space-x-3 p-4 bg-gray-50 rounded-lg">
                  <?php echo getIcon('CheckCircle', 'h-5 w-5 text-[#328CCB] flex-shrink-0'); ?>
                  <span class="text-gray-700 font-medium"><?php echo htmlspecialchars($membership); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Contact Information -->
        <div class="bg-white rounded-2xl shadow-lg p-8 floating-card">
          <div class="flex items-center space-x-3 mb-6">
            <div class="bg-purple-100 p-3 rounded-xl">
              <?php echo getIcon('Phone', 'h-6 w-6 text-purple-600'); ?>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">Contact Information</h3>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Doctor Contact</h3>
                <?php if (!empty($doctor['email'])): ?>
                  <p class="text-gray-600 flex items-center space-x-2 mb-2">
                    <?php echo getIcon('Mail', 'h-4 w-4 text-[#328CCB]'); ?>
                    <a href="mailto:<?php echo htmlspecialchars($doctor['email']); ?>" class="text-[#328CCB] font-semibold hover:underline"><?php echo htmlspecialchars($doctor['email']); ?></a>
                  </p>
                <?php endif; ?>
                <?php if (!empty($doctor['phone'])): ?>
                  <p class="text-gray-600 flex items-center space-x-2">
                    <?php echo getIcon('Phone', 'h-4 w-4 text-[#328CCB]'); ?>
                    <a href="tel:<?php echo htmlspecialchars($doctor['phone']); ?>" class="text-[#328CCB] font-semibold hover:underline"><?php echo htmlspecialchars($doctor['phone']); ?></a>
                  </p>
                <?php endif; ?>
              </div>
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Hospital Contact</h3>
                <p class="text-gray-600">Phone: <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="text-[#328CCB] font-semibold hover:underline"><?php echo CONTACT_INFO['phone']; ?></a></p>
                <p class="text-gray-600">Email: <a href="mailto:<?php echo CONTACT_INFO['email']; ?>" class="text-[#328CCB] font-semibold hover:underline"><?php echo CONTACT_INFO['email']; ?></a></p>
              </div>
            </div>

            <div class="space-y-4">
              <div>
                <h3 class="font-semibold text-gray-900 mb-2">Emergency</h3>
                <p class="text-gray-600">24×7 Emergency: <a href="tel:<?php echo CONTACT_INFO['emergency']; ?>" class="text-[#D66C43] font-semibold hover:underline"><?php echo CONTACT_INFO['emergency']; ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Scripts -->
<?php include 'includes/scripts.php'; ?>
