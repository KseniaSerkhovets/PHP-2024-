<?php
$uploaddir = 'uploads/';
$file = $_FILES['user_file'];
$filename = basename($file['name']);
$filePath = $uploaddir . $filename;
$fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

// Перевірка, чи файл завантажено через HTTP POST
if (!is_uploaded_file($file['tmp_name'])) {
    echo "Помилка: файл не було завантажено через HTTP POST.";
    exit;
}

// Перевірка типу і розміру файлу
if (!in_array($fileType, ['jpg', 'jpeg', 'png'])) {
    echo "Помилка: можна завантажувати лише файли PNG, JPG, JPEG.";
    exit;
}
if ($file['size'] > 2 * 1024 * 1024) {
    echo "Помилка: файл перевищує розмір 2 МБ.";
    exit;
}

// Додавання унікального суфіксу, якщо файл вже існує
if (file_exists($filePath)) {
    $filename = pathinfo($file['name'], PATHINFO_FILENAME) . '_' . time() . '.' . $fileType;
    $filePath = $uploaddir . $filename;
}

// Переміщення файлу у директорію
if (move_uploaded_file($file['tmp_name'], $filePath)) {
    echo "Файл успішно завантажений.<br>";
    echo "Ім'я файлу: " . htmlspecialchars($filename) . "<br>";
    echo "Тип файлу: " . htmlspecialchars($fileType) . "<br>";
    echo "Розмір файлу: " . round($file['size'] / 1024, 2) . " КБ<br>";
    echo "<a href='$filePath'>Завантажити файл</a>";
} else {
    echo "Помилка завантаження файлу.";
}
?>
