<script src="script.js" type="text/javascript"></script>
function convertMileToMeter() {
    // Получаем значение введенное пользователем
    var mileInput = document.getElementById("mile-input").value;

    // Проверяем, что пользователь ввел число
    if (isNaN(mileInput)) {
        alert("Пожалуйста, введите числовое значение.");
        return;
    }

    // Вычисляем расстояние в метрах
    var meter = mileInput * 1852;

    // Выводим результат
    document.getElementById("result").innerHTML = mileInput + " миль = " + meter + " метров.";
}