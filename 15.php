<?php
function calculateTrapezoid($baseA, $baseB, $height) {
    $sideC = sqrt(pow(($baseB - $baseA) / 2, 2) + pow($height, 2)); // Вычисление боковой стороны C
    $sideD = $sideC; // Боковая сторона D равна C
    $perimeter = $baseA + $baseB + $sideC + $sideD; // Вычисление периметра трапеции
    $area = ($baseA + $baseB) * $height / 2; // Вычисление площади трапеции

    // Возвращаем результаты в виде ассоциативного массива
    $result = array(
        'perimeter' => $perimeter,
        'area' => $area
    );
    return $result;
}

// Входные данные - основание A, основание B и высота трапеции
$baseA = 5;
$baseB = 9;
$height = 4;

// Вызов функции для вычисления периметра и площади трапеции
$result = calculateTrapezoid($baseA, $baseB, $height);

// Вывод результатов
echo "Периметр трапеции: " . $result['perimeter'] . " единиц.\n";
echo "Площадь трапеции: " . $result['area'] . " квадратных единиц.";
?>
