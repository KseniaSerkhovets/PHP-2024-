<?php
if (isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);

    if (!empty($firstName) && !empty($lastName)) {
        echo "Привіт, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . "!";
    } else {
        echo "Будь ласка, заповніть усі поля!";
    }
} else {
    echo "Помилка: Дані не були передані.";
}
?>
