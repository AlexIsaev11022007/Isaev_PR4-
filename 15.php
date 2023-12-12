<?php
function findTrapezoidSides($perimeter, $area) {
    // Инициализация переменных
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    
    // Предположим, что $c и $d будут наибольшими сторонами
    if ($perimeter > 2 * ($c + $d)) {
        // Вычисляем высоту трапеции
        $h = (2 * $area) / ($c + $d);

        // Вычисляем стороны a и b
        $a = $perimeter - $b - $c - $d;
        $b = $perimeter - $a - $c - $d;
    }
    
    // Возвращаем значения сторон трапеции
    return [$a, $b, $c, $d];
}

// Пример использования функции
$perimeter = 20;
$area = 50;

$sides = findTrapezoidSides($perimeter, $area);
$a = $sides[0];
$b = $sides[1];
$c = $sides[2];
$d = $sides[3];

echo "Стороны трапеции: a = $a, b = $b, c = $c, d = $d";
?>
