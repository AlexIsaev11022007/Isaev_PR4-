<?php
function calculateDiagonal($perimeter) {
    $side = $perimeter / 4; // Находим длину стороны квадрата
    $diagonal = $side * sqrt(2); // Находим длину диагонали квадрата

    return $diagonal;
}

// Входные данные - периметр квадрата
$perimeter = 16;

// Вызов функции для вычисления длины диагонали квадрата
$diagonal = calculateDiagonal($perimeter);

// Вывод результата
echo "Длина диагонали квадрата: " . $diagonal . " единиц.";
?>