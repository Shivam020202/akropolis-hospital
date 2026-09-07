<?php
/**
 * Neurologist District Pages Generator
 * Creates all 22 Haryana district pages for neurologist local SEO
 */

$districts = [
    'ambala' => ['display' => 'Ambala', 'landmarks' => ['Ambala Cantt', 'Jagadhari', 'Naraingarh']],
    'bhiwani' => ['display' => 'Bhiwani', 'landmarks' => ['Bhiwani City', 'Tosham', 'Loharu']],
    'charkhi-dadri' => ['display' => 'Charkhi Dadri', 'landmarks' => ['Charkhi Dadri', 'Bahal', 'Jhojhu']],
    'faridabad' => ['display' => 'Faridabad', 'landmarks' => ['Sector 15', 'Ballabhgarh', 'Palwal']],
    'fatehabad' => ['display' => 'Fatehabad', 'landmarks' => ['Fatehabad City', 'Tohana', 'Ratia']],
    'gurgaon' => ['display' => 'Gurgaon', 'landmarks' => ['Sector 56', 'Cyber Hub', 'MG Road']],
    'hisar' => ['display' => 'Hisar', 'landmarks' => ['Hisar City', 'Agricultural University', 'Camp']],
    'jhajjar' => ['display' => 'Jhajjar', 'landmarks' => ['Jhajjar City', 'Bahadurgarh', 'Kosli']],
    'jind' => ['display' => 'Jind', 'landmarks' => ['Jind City', 'Narwana', 'Uklana']],
    'kaithal' => ['display' => 'Kaithal', 'landmarks' => ['Kaithal City', 'Pundri', 'Rajond']],
    'karnal' => ['display' => 'Karnal', 'landmarks' => ['Karnal City', 'Nilokheri', 'Indri']],
    'kurukshetra' => ['display' => 'Kurukshetra', 'landmarks' => ['Kurukshetra City', 'Pehowa', 'Shahabad']],
    'mahendragarh' => ['display' => 'Mahendragarh', 'landmarks' => ['Narnaul', 'Mahendragarh', 'Kanina']],
    'mewat' => ['display' => 'Mewat', 'landmarks' => ['Nuh', 'Firozpur Jhirka', 'Taoru']],
    'palwal' => ['display' => 'Palwal', 'landmarks' => ['Palwal City', 'Hassanpur', 'Hodel']],
    'panchkula' => ['display' => 'Panchkula', 'landmarks' => ['Sector 21', 'Panchkula', 'Morni']],
    'panipat' => ['display' => 'Panipat', 'landmarks' => ['Panipat City', 'Israna', 'Samalkha']],
    'rewari' => ['display' => 'Rewari', 'landmarks' => ['Rewari City', 'Bawal', 'Kosli']],
    'rohtak' => ['display' => 'Rohtak', 'landmarks' => ['Rohtak City', 'Meham', 'Sampla']],
    'sirsa' => ['display' => 'Sirsa', 'landmarks' => ['Sirsa City', 'Ellenabad', 'Rania']],
    'sonipat' => ['display' => 'Sonipat', 'landmarks' => ['Sonipat City', 'Gohana', 'Kharkhoda']],
    'yamunanagar' => ['display' => 'Yamunanagar', 'landmarks' => ['Yamunanagar', 'Jagadhri', 'Chhachhrauli']]
];

$basePath = __DIR__;

// Create main directories
$mainDir = $basePath . '/neurologist';
$haryanaDir = $mainDir . '/haryana';

if (!is_dir($mainDir)) mkdir($mainDir, 0755, true);
if (!is_dir($haryanaDir)) mkdir($haryanaDir, 0755, true);

// Create index pages (redirects)
$haryanaIndex = <<<'PHP'
<?php
header("Location: /neurology.php", true, 301);
exit;
PHP;
file_put_contents($haryanaDir . '/index.php', $haryanaIndex);

$mainIndex = <<<'PHP'
<?php
header("Location: /neurology.php", true, 301);
exit;
PHP;
file_put_contents($mainDir . '/index.php', $mainIndex);

echo "Created directories and index pages.\n";

// Create index.php for each district
foreach ($districts as $slug => $data) {
    $districtDir = $haryanaDir . '/' . $slug;
    if (!is_dir($districtDir)) mkdir($districtDir, 0755, true);

    $districtIndex = "<?php\n";
    $districtIndex .= "/**\n";
    $districtIndex .= " * Neurologist - {$data['display']} District Page\n";
    $districtIndex .= " * Target: Best Neurologist in {$data['display']}\n";
    $districtIndex .= " */\n\n";
    $districtIndex .= "\$district_name = '{$slug}';\n";
    $districtIndex .= "\$landmarks = ['" . implode("', '", $data['landmarks']) . "'];\n\n";
    $districtIndex .= "require_once '" . dirname(__DIR__) . "/components/neurologist-district-template.php';\n";

    file_put_contents($districtDir . '/index.php', $districtIndex);
    echo "Created: {$slug}/index.php\n";
}

echo "\nAll 22 district pages created successfully!\n";
echo "Total: " . count($districts) . " location pages\n";