<?php
$directory = 'uploads/';

if (is_dir($directory)) {
    $files = scandir($directory);
    if (count($files) > 2) { // Ігноруємо `.` та `..`
        echo "<h2>Список файлів у директорії uploads:</h2><ul>";
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li><a href='$directory" . htmlspecialchars($file) . "'>" . htmlspecialchars($file) . "</a></li>";
            }
        }
        echo "</ul>";
    } else {
        echo "Директорія uploads порожня.";
    }
} else {
    echo "Директорія uploads не існує.";
}
?>
