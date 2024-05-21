<?php

echo "Введіть число: ";
$number = trim(fgets(STDIN));

// Перевірка на коректність введення
if (!is_numeric($number)) {
    echo "Введено не число. Будь ласка, введіть число.\n";
    exit();
}

// Розрахунок суми цифр
$sum = 0;
for ($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}

echo "Сума цифр числа $number: $sum\n";

?>
1