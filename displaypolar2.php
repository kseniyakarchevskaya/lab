<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Результат</title>
</head>
<body>

<h3>Результаты проверки</h3>

<?php

if(isset($_POST["a"])){

    $a = $_POST["a"];
    $x = floor($a / 100);
    $y = floor(($a / 10)) % 10;
    $z = $a % 10;

    $product = $x * $y * $z;
    $sum = $x + $y + $z;

    echo "Число: $a <br>";
    echo "Цифры: $x, $y, $z <br><br>";

    if($product < $a){
        echo "Произведение цифр ($product) меньше числа $a.<br>";
    } else {
        echo "Произведение цифр ($product) не меньше числа $a.<br>";
    }


    if($sum % 5 == 0){
        echo "Сумма цифр ($sum) кратна 5.<br>";
    } else {
        echo "Сумма цифр ($sum) не кратна 5.<br>";
    }

} else {
    echo "Ошибка: число не получено.";
}

?>

</body>
</html>
