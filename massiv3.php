<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результаты</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
if (isset($_POST["arr1"]) && isset($_POST["arr2"])) {
    $raw1 = htmlentities(strip_tags($_POST["arr1"]));
    $raw2 = htmlentities(strip_tags($_POST["arr2"]));
    $a1 = explode(" ", $raw1);
    $a2 = explode(" ", $raw2);
    $a1 = array_filter($a1, "strlen");
    $a2 = array_filter($a2, "strlen");
    if (count($a1) != 7 || count($a2) != 9) {
        echo "<p>Ошибка: необходимо ввести ровно 7 элементов первого массива и 9 элементов второго массива.</p>";
    } else {
        $result = array_merge($a1, $a2);
        foreach ($result as &$v) { //цикл по всем элементам
            $v = (float)$v; //плавающ. точка для каждого эл.
        }
        rsort($result);
        echo "<p>Первый массив:</p>";
        foreach ($a1 as $x) { //сорт эл первого массива
            echo $x . " ";
        }
        echo "<p>Второй массив:</p>";
        foreach ($a2 as $x) {
            echo $x . " ";
        }
        echo "<p>Третий массив (значения обоих массивов, отсортированные по убыванию):</p>";
        foreach ($result as $x) {
            echo $x . " ";
        }
    }
}
?>

</body>
</html>
<?php
