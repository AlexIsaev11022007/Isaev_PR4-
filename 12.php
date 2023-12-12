<?php
function calculateSquare($diagonal) {
    $side = $diagonal / sqrt(2); // Находим длину стороны квадрата
    $perimeter = 4 * $side; // Находим периметр квадрата
    $area = $side * $side; // Находим площадь квадрата

    // Возвращаем результаты в виде ассоциативного массива
    $result = array(
        'side' => $side,
        'perimeter' => $perimeter,
        'area' => $area
    );
    return $result;
}

// Входные данные - длина диагонали квадрата
$diagonal = 10;

// Вызов функции для вычисления сторон, периметра и площади квадрата
$squareData = calculateSquare($diagonal);

// Вывод результатов
echo "Сторона квадрата: " . $squareData['side'] . " единиц.";
echo "Периметр квадрата: " . $squareData['perimeter'] . " единиц.";
echo "Площадь квадрата: " . $squareData['area'] . " единиц квадратных.";
?>