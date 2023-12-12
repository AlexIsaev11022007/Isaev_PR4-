<?php
function convertMilesToMeters($miles) {
    $meters = $miles / 1852;
    return $meters;
}

// Входные данные - расстояние между кораблями в милях
$distanceInMiles = 18520;

// Вызов функции для перерасчета расстояния в метры
$distanceInMeters = convertMilesToMeters($distanceInMiles);

// Вывод результата
echo "Расстояние между кораблями: " . $distanceInMiles . " миль, либо " . $distanceInMeters . " метров.";
?>