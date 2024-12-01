<?php
$logFile = 'log.txt';

// Запис тексту у файл
if (isset($_POST['log_text'])) {
    $logText = htmlspecialchars($_POST['log_text']) . PHP_EOL;
    file_put_contents($logFile, $logText, FILE_APPEND);
    echo "Текст записано у файл.<br>";
}

// Читання вмісту файлу
if (file_exists($logFile)) {
    if (filesize($logFile) === 0) {
        echo "Файл log.txt порожній.";
    } else {
        echo "<h2>Вміст файлу log.txt:</h2>";
        $content = file_get_contents($logFile);
        echo nl2br(htmlspecialchars($content));
    }
} else {
    echo "Файл log.txt не існує.";
}
?>
