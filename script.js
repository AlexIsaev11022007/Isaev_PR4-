function calculateTrapezoid() {
    // Получаем значения, введенные пользователем
    var heightInput = document.getElementById("height-input").value;
    var base1Input = document.getElementById("base1-input").value;
    var base2Input = document.getElementById("base2-input").value;

    // Проверяем, что пользователь ввел числовые значения
    if (isNaN(heightInput) || isNaN(base1Input) || isNaN(base2Input)) {
        alert("Пожалуйста, введите числовые значения для высоты и оснований.");
        return;
    }

    // Преобразуем значения в числа
    var height = parseFloat(heightInput);
    var base1 = parseFloat(base1Input);
    var base2 = parseFloat(base2Input);

    // Проверяем, что введенные значения являются положительными числами
    if (height <= 0 || base1 <= 0 || base2 <= 0) {
        alert("Пожалуйста, введите положительные числа для высоты и оснований.");
        return;
    }

    // Вычисляем периметр трапеции
    var perimeter = base1 + base2 + 2 * Math.sqrt(Math.pow((base1 - base2) / 2, 2) + Math.pow(height, 2));

    // Вычисляем площадь трапеции
    var area = ((base1 + base2) / 2) * height;

    // Выводим результат
    document.getElementById("result").innerHTML = "Периметр трапеции: " + perimeter.toFixed(2) +
        " Площадь трапеции: " + area.toFixed(2);
}