<?php
$base_dir = __DIR__ . '/haddi-ka-doctor/haryana';
$districts = array_diff(scandir($base_dir), array('.', '..'));

foreach ($districts as $district) {
    $index_file = "$base_dir/$district/index.php";
    if (file_exists($index_file)) {
        // Read current landmarks
        $content = file_get_contents($index_file);
        
        // Match the array content
        preg_match('/\$landmarks = array \((.*?)\);/s', $content, $matches);
        $landmarks_str = isset($matches[0]) ? $matches[0] : '$landmarks = array();';
        
        $new_content = "<?php\n" .
                      "\$district_name = '$district';\n" .
                      "$landmarks_str\n" .
                      "include __DIR__ . '/../../../components/haddi-hindi-template.php';\n" .
                      "?>";
        
        file_put_contents($index_file, $new_content);
        echo "Regenerated: $district\n";
    }
}
?>
