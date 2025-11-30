<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Результат обработки двумерного массива</h1>

<?php
if (isset($_POST["m"]) && isset($_POST["n"]) && isset($_POST["data"])) {
    $m = (int)htmlentities(strip_tags($_POST["m"]));
    $n = (int)htmlentities(strip_tags($_POST["n"]));
    $raw = htmlentities(strip_tags($_POST["data"]));
    $lines = explode("\n", $raw);
    $A = [];
    foreach ($lines as $line) {
        $parts = explode(" ", trim($line));
        $parts = array_filter($parts, "strlen");
        if (!empty($parts)) { //если строка не пустая
            $A[] = $parts;
        }
    }
    if (count($A) != $m) {
        echo "<p>Ошибка: количество строк не совпадает с указанным M.</p>";
    } else {
        $ok = true;
        foreach ($A as $row) {
            if (count($row) != $n) {
                $ok = false;
                break;
            }
        }
        if (!$ok) {
            echo "<p>Ошибка: количество элементов в строке не равно N.</p>";
        } else {
            echo "<p>Двумерный массив A:</p>";
            foreach ($A as $row) {
                foreach ($row as $x) {
                    echo $x . " ";
                }
                echo "<br>";
            }
            echo "<p>Одномерный массив B (номера строк):</p>";
            for ($i = 0; $i < $m; $i++) {
                echo $i . " ";
            }
        }
    }
}
?>

</body>
</html>
<?php
