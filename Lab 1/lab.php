<?php
// 1.	Створення базового PHP-скрипта:
echo "Hello, World!"; // Виводить "Hello, World!"
echo "<br>"; // Перенос рядка

// 2.	Змінні та типи даних:
// Оголошуємо змінні різних типів
$stringVar = "My string var"; // Рядок
$intVar = 14541; // Ціле число
$floatVar = 4684.145867; // Число з плаваючою комою
$boolVar = true; // Булеве значення

// Виводимо значення змінних на екран
echo $stringVar . "<br>";
echo $intVar . "<br>";
echo $floatVar . "<br>";
echo ($boolVar ? 'true' : 'false') . "<br>";

// Виводимо тип кожної змінної
var_dump($stringVar);
echo "<br>";
var_dump($intVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($boolVar);
echo "<br>";

// 3.	Конкатенація рядків:
// Створюємо дві змінні з рядковими значеннями
$firstVar = "Hello ";
$secondVar = "world!!!";

// Об'єднуємо змінні в один рядок і виводимо результат
$fullVar = $firstVar . $secondVar;
echo $fullVar . "<br>";

// 4.	Умовні конструкції:
// Створюємо змінну з числовим значенням
$number = 7;

// Перевіряємо, чи є число парним або непарним
if ($number % 2 == 0) {
    echo "$number - парне число.<br>";
} else {
    echo "$number - непарне число.<br>";
}

// 5.	Цикли:
// Використовуючи цикл for, виводимо на екран числа від 1 до 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . ", ";
}
echo "<br>"; // Додаємо перенос рядка

// Використовуючи цикл while, виводимо на екран числа від 10 до 1
$j = 10;
while ($j > 0) {
    echo $j . ", ";
    $j--;
}
echo "<br>"; // Додаємо перенос рядка

// 6.	Масиви:
// Створюємо асоціативний масив про студента
$student = [
    "ім'я" => "Ксенія",
    "прізвище" => "Серховець",
    "вік" => 19,
    "спеціальність" => "Комп'ютерні науки"
];

// Виводимо значення кожного елемента масиву
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

// Додаємо новий елемент до масиву та виводимо оновлений масив
$student["середній бал"] = 4.29;
echo "Оновлений масив:<br>";
print_r($student);
?>
