<script src="script.js" type="text/javascript"></script>
function calculateSquare() {
    // Получаем значение введенное пользователем
    var diagonalInput = document.getElementById("diagonal-input").value;

    // Проверяем, что пользователь ввел число
    if (isNaN(diagonalInput)) {
        alert("Пожалуйста, введите числовое значение.");
        return;
    }

    // Вычисляем сторону квадрата
    var side = diagonalInput / Math.sqrt(2);

    // Вычисляем площадь квадрата
    var area = side * side;

    // Вычисляем периметр квадрата
    var perimeter = 4 * side;

    // Выводим результат
    document.getElementById("result").innerHTML = "Сторона квадрата: " + side.toFixed(2) +
        " Площадь квадрата: " + area.toFixed(2) +
        " Периметр квадрата: " + perimeter.toFixed(2);
}