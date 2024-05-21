<?php
// Задане натуральне число n
$n = 123456789;

// Кількість цифр для сумування
$m = 3;

// Перетворюємо число в рядок для обробки посимвольно
$n_str = (string)$n;

// Знаходимо суму перших m цифр числа n
$sum_first_m = 0;
for ($i = 0; $i < $m; $i++) {
    $sum_first_m += intval($n_str[$i]);
}

// Знаходимо суму останніх m цифр числа n
$sum_last_m = 0;
$length = strlen($n_str);
for ($i = $length - $m; $i < $length; $i++) {
    $sum_last_m += intval($n_str[$i]);
}

// Виводимо результат
echo "Сума перших $m цифр числа $n: $sum_first_m \n";
echo "Сума останніх $m цифр числа $n: $sum_last_m";
?>
