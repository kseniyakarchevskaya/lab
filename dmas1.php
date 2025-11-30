<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ввод двумерного массива</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Ввод двумерного массива A(M,N)</h1>

<form method="post" action="dmas2.php">

    <p>Введите количество строк (M):
        <label>
            <input type="number" name="m">
        </label>
    </p>

    <p>Введите количество столбцов (N):
        <label>
            <input type="number" name="n">
        </label>
    </p>

    <p>Введите элементы массива построчно, через пробел:</p>

    <p>
        <label>
            <textarea name="data" rows="10" cols="40"></textarea>
        </label>
    </p>

    <p>
        <input type="submit" value="Отправить">
    </p>
</form>

</body>
</html>
<?php
