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
<h3>Задача. Вычислить произведение элементов главной диагонали матрицы.</h3>

<form method="post">
    <table >

        <tr>
            <td>Введите количество строк (n):</td>
            <td><input type="text" name="n" /></td>
        </tr>

        <tr>
            <td>Введите количество столбцов (m):</td>
            <td><input type="text" name="m" /></td>
        </tr>

        <tr>
            <td colspan="2">Введите элементы матрицы (через пробел в каждой строке):</td>
        </tr>

        <tr>
            <td colspan="2">
                <textarea name="matrix" rows="6" cols="40"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="Вычислить" /></td>
        </tr>

    </table>
</form>

<?php
if (isset($_POST['n']) && isset($_POST['m']) && isset($_POST['matrix'])) {
    $n = $_POST['n'];
    $m = $_POST['m'];
    $text = trim($_POST['matrix']);
    $rows = explode("\n", $text);
    $matrix = array();
    for ($i = 0; $i < count($rows); $i++) {
        $row = trim($rows[$i]);
        $matrix[$i] = explode(" ", $row);
    }
    $prod = 1;
    $limit = ($n < $m) ? $n : $m;
    for ($i = 0; $i < $limit; $i++) {
        $prod = $prod * $matrix[$i][$i];
    }
    echo "<br><b>Результаты:</b><br>";
    echo "Произведение элементов главной диагонали = " . $prod . "<br>";
}
?>
</body>
</html><?php
