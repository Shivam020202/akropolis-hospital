<?php
$haddi_dir = __DIR__ . '/haddi-ka-doctor/haryana';
$plastic_dir = __DIR__ . '/plastic-surgery/haryana';

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

if (!is_dir($plastic_dir)) {
    mkdir($plastic_dir, 0755, true);
}

foreach ($districts_mapping as $plastic_slug => $haddi_slug) {
    $haddi_index = "$haddi_dir/$haddi_slug/index.php";
    $plastic_path = "$plastic_dir/$plastic_slug";
    
    if (!is_dir($plastic_path)) {
        mkdir($plastic_path, 0755, true);
    }
    
    $landmarks_str = '$landmarks = array();';
    if (file_exists($haddi_index)) {
        $content = file_get_contents($haddi_index);
        preg_match('/\$landmarks = array \((.*?)\);/s', $content, $matches);
        if (isset($matches[0])) {
            $landmarks_str = $matches[0];
        }
    }
    
    $new_content = "<?php\n" .
                  "\$district_name = '$plastic_slug';\n" .
                  "$landmarks_str\n" .
                  "include __DIR__ . '/../../../components/plastic-surgery-hindi-template.php';\n" .
                  "?>";
    
    file_put_contents("$plastic_path/index.php", $new_content);
    echo "Generated: plastic-surgery/haryana/$plastic_slug/\n";
}
?>
