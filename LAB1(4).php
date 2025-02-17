<?php

// Оголошення матриці F(4,6)
$F = array(
    array(1, 2, 3, 4, 5, 6),
    array(7, 8, 9, 10, 11, 12),
    array(13, 14, 15, 16, 17, 18),
    array(19, 20, 21, 22, 23, 24)
);

// Прохід по кожному рядку матриці
for ($i = 0; $i < count($F); $i++) {
    $maxElement = $F[$i][0]; // Початкове значення максимального елемента - перший елемент рядка
    
    // Пошук максимального елемента у поточному рядку
    for ($j = 1; $j < count($F[$i]); $j++) {
        if ($F[$i][$j] > $maxElement) {
            $maxElement = $F[$i][$j];
        }
    }
    
    // Виведення максимального елемента поточного рядка
    echo "\nМаксимальний елемент у рядку $i: $maxElement" ;
}

?>
