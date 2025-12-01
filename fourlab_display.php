<?php
$ds = $_POST["datestring"];

$pattern = "/^(\d{2})-(\d{2})-(\d{4}) (\d{2}):(\d{2}):(\d{2})$/";

if (preg_match($pattern, $ds, $m)) { //проверяем подходит ли

    $day   = $m[1];
    $month = $m[2];
    $year  = $m[3];
    $hour  = $m[4];
    $min   = $m[5];
    $sec   = $m[6];

 
    if (checkdate($month, $day, $year) &&
        $hour >= 0 && $hour < 24 &&
        $min  >= 0 && $min  < 60 &&
        $sec  >= 0 && $sec  < 60)
    {
        echo "Дата корректна: $ds";
    } else {
        echo "Ошибка: данные введены в правильном формате, но дата/время некорректны.";
    }

} else {
    echo "Ошибка: строка не соответствует формату Дата-Месяц-Год Час:Мин:Сек";
}
