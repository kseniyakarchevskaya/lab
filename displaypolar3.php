<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Результат</title>
</head>
<body>

<h3>Результат вычисления НОК</h3>

<?php
if(isset($_POST["a"]) && isset($_POST["b"])){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $origA = $a;
    $origB = $b;
    while($b != 0){ //nod
        $temp = $b;
        $b = $a % $b; //остаток от деления
        $a = $temp;
    }
    $gcd = $a;
    $lcm = ($origA * $origB) / $gcd; //nok
    echo "Первое число: $origA <br>";
    echo "Второе число: $origB <br><br>";
    echo "НОД = $gcd <br>";
    echo "НОК = $lcm <br>";
} else {
    echo "Ошибка: данные не получены.";
}

?>

</body>
</html>
<?php
