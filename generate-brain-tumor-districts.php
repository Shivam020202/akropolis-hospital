<?php
/**
 * Generate Brain Tumor Treatment District Pages for Haryana
 * Run: php generate-brain-tumor-districts.php
 */

$haryanaDistricts = [
    'ambala', 'bhiwani', 'charkhi-dadri', 'faridabad', 'fatehabad',
    'gurgaon', 'hisar', 'jhajjar', 'jind', 'kaithal', 'karnal',
    'kurukshetra', 'mahendragarh', 'mewat', 'palwal', 'panchkula',
    'panipat', 'rewari', 'rohtak', 'sirsa', 'sonipat', 'yamunanagar'
];

$baseDir = __DIR__;
$haryanaDir = $baseDir . '/brain-tumor-treatment/haryana';

echo "Creating brain-tumor-treatment/haryana district pages...\n";

foreach ($haryanaDistricts as $district) {
    $districtDir = $haryanaDir . '/' . $district;
    $indexPath = $districtDir . '/index.php';

    // Create directory
    if (!is_dir($districtDir)) {
        mkdir($districtDir, 0755, true);
    }

    // Create index.php using the template
    $content = '<?php
/**
 * Brain Tumor Treatment - ' . ucwords(str_replace('-', ' ', $district)) . ', Haryana
 */

$district_name = "' . $district . '";
$landmarks = [
    "Civil Hospital",
    "Railway Station",
    "Bus Stand",
    "Market Area"
];

// Include the shared template
require_once dirname(__DIR__) . \'/../../components/brain-tumor-district-template.php\';
';

    file_put_contents($indexPath, $content);
    echo "Created: brain-tumor-treatment/haryana/{$district}/index.php\n";
}

echo "\nDone! Created " . count($haryanaDistricts) . " district pages.\n";