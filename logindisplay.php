<?php
$log = $_POST["login"];
$pass = $_POST["password"];
$email = $_POST["email"];
if ($log == "" || $pass == "" || $email == "") {
    echo "Ошибка: все поля обязательны.";
    exit;
}
$key = md5($log . $pass . $email);
setcookie("authkey", $key, time() + 3600);

echo "<p>Добро пожаловать, $log!</p>";
echo "<p>Ваш ключ сохранён в cookies.</p>";
echo "<p><a href='logout.php'>Выход</a></p>";

