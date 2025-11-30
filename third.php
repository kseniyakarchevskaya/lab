<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h3>Задача. Найти сумму всех элементов заданного массива.</h3>

<form method="post">
    <table >
        <tr>
            <td>Введите массив чисел через запятую:</td>
            <td><input type="text" name="arr_sum" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Вычислить сумму" /></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['arr_sum'])) {
    $input_sum = $_POST['arr_sum'];
    $array_sum = explode(",", $input_sum);
    for ($i = 0; $i < count($array_sum); $i++) {
        $array_sum[$i] = trim($array_sum[$i]);
    }
    $sum = 0;
    for ($i = 0; $i < count($array_sum); $i++) {
        $sum += $array_sum[$i];
    }
    echo "Исходный массив: " . $input_sum . "<br>";
    echo "Сумма элементов массива: " . $sum . "<br>";
}
?>
</body>
</html>