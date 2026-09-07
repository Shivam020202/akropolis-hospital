<?php
/**
 * Generator script for Migraine Treatment District Pages
 * Creates migraine-treatment/haryana/[district]/index.php files
 */

$migraine_dir = __DIR__ . '/migraine-treatment/haryana';

$districts_mapping = [
    'ambala' => 'ambala',
    'bhiwani' => 'bhiwani',
    'charkhi-dadri' => 'charkhi-dadri',
    'faridabad' => 'faridabad',
    'fatehabad' => 'fatehabad',
    'gurgaon' => 'gurugram',
    'hisar' => 'hisar',
    'jhajjar' => 'jhajjar',
    'jind' => 'jind',
    'kaithal' => 'kaithal',
    'karnal' => 'karnal',
    'kurukshetra' => 'kurukshetra',
    'mahendragarh' => 'mahendragarh',
    'mewat' => 'nuh',
    'palwal' => 'palwal',
    'panchkula' => 'panchkula',
    'panipat' => 'panipat',
    'rewari' => 'rewari',
    'rohtak' => 'rohtak',
    'sirsa' => 'sirsa',
    'sonipat' => 'sonipat',
    'yamunanagar' => 'yamunanagar'
];

// Landmarks for each district (from haddi-ka-doctor structure)
$district_landmarks = [
    'ambala' => ['Ambala Cantt', 'Jagadhari', 'Naraingarh'],
    'bhiwani' => ['Bhiwani City', 'Loharu', 'Tosham'],
    'charkhi-dadri' => ['Charkhi Dadri', 'Baund', 'Beri'],
    'faridabad' => ['Sector 21', 'Nehru Ground', 'Ballabhgarh'],
    'fatehabad' => ['Fatehabad City', 'Ratia', 'Tohana'],
    'gurgaon' => ['Sector 14', 'MG Road', 'Cyber City'],
    'hisar' => ['Hisar City', 'Army Base', 'Agroha'],
    'jhajjar' => ['Jhajjar Town', 'Bahadurgarh', 'Duhai'],
    'jind' => ['Jind City', 'Narwana', 'Uchana'],
    'kaithal' => ['Kaithal City', 'Pundri', 'Rajound'],
    'karnal' => ['Karnal City', 'Nilokheri', 'Indri'],
    'kurukshetra' => ['Kurukshetra City', 'Thanesar', 'Pehowa'],
    'mahendragarh' => ['Narnaul', 'Mahendragarh', 'Kanina'],
    'mewat' => ['Nuh', 'Hodal', 'Ferozepur Jhirka'],
    'palwal' => ['Palwal City', 'Hassanpur', 'Hodal'],
    'panchkula' => ['Sector 9', 'Panchkula', 'Morni'],
    'panipat' => ['Panipat City', 'Kund', 'Samalkha'],
    'rewari' => ['Rewari City', 'Bawal', 'Kosli'],
    'rohtak' => ['Rohtak City', 'Sampla', 'Kalanaur'],
    'sirsa' => ['Sirsa City', 'Ellenabad', 'Dabwali'],
    'sonipat' => ['Sonipat City', 'Gohana', 'Kharkhoda'],
    'yamunanagar' => ['Yamunanagar', 'Jagadhri', 'Chhachhrauli']
];

if (!is_dir($migraine_dir)) {
    mkdir($migraine_dir, 0755, true);
}

// Create index.php for the haryana state page
$haryana_index_content = '<?php
/**
 * Migraine Treatment Haryana State Page
 */
$state_name = "haryana";
$state_display = "Haryana";
include __DIR__ . "/../../components/migraine-treatment-state-template.php";
?>';

file_put_contents("$migraine_dir/index.php", $haryana_index_content);
echo "Generated: migraine-treatment/haryana/index.php\n";

foreach ($districts_mapping as $migraine_slug => $haddi_slug) {
    $migraine_path = "$migraine_dir/$migraine_slug";

    if (!is_dir($migraine_path)) {
        mkdir($migraine_path, 0755, true);
    }

    // Build landmarks array string
    $landmarks = $district_landmarks[$migraine_slug] ?? [$migraine_slug];
    $landmarks_str = '$landmarks = array("' . implode('", "', $landmarks) . '");';

    $new_content = "<?php\n" .
                  "\$district_name = '$migraine_slug';\n" .
                  "$landmarks_str\n" .
                  "include __DIR__ . '/../../../components/migraine-treatment-hindi-template.php';\n" .
                  "?>";

    file_put_contents("$migraine_path/index.php", $new_content);
    echo "Generated: migraine-treatment/haryana/$migraine_slug/index.php\n";
}

echo "\n✓ All 22 migraine treatment district pages generated successfully!";
?>