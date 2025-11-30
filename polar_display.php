<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Результат</title>
</head>
<body>

<h3>Результаты преобразования</h3>

<?php

if(isset($_POST["x"]) && isset($_POST["y"])){

    $x = $_POST["x"];
    $y = $_POST["y"];

    $rho = sqrt($x*$x + $y*$y);

    if($x == 0){
        if($y > 0) $phi = M_PI/2;
        else if($y < 0) $phi = -M_PI/2;
        else $phi = 0;
    }
    else {
        $phi = atan($y / $x);
    }

    echo "ρ = " . $rho . "<br>";
    echo "φ = " . $phi . " (в радианах)<br>";

} else {
    echo "Ошибка: данные не получены.";
}

?>

</body>
</html>
<?php
