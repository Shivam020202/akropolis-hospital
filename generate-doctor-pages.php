<?php
require_once 'includes/data.php';

$doctors_dir = __DIR__ . '/doctors';

if (!is_dir($doctors_dir)) {
    mkdir($doctors_dir, 0755, true);
}

foreach ($doctors as $doctor) {
    $id = $doctor['id'];
    $file_path = $doctors_dir . '/' . $id . '.php';
    
    $index_content = "<?php\n" .
                    "\$doctorId = '$id';\n" .
                    "include __DIR__ . '/../components/doctor-template.php';\n" .
                    "?>";
    
    file_put_contents($file_path, $index_content);
    echo "Generated page: doctors/" . $id . ".php\n";
}
?>
