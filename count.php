<?php
$ip = $_SERVER['REMOTE_ADDR'];
$today = "today.txt";
$week = "week.txt";
if (!file_exists($today)) file_put_contents($today, "");
if (!file_exists($week)) file_put_contents($week, "");
$t = file($today, FILE_IGNORE_NEW_LINES);
$w = file($week, FILE_IGNORE_NEW_LINES);
if (!in_array($ip, $t)) {
    file_put_contents($today, $ip . "\n", FILE_APPEND);
}
if (!in_array($ip, $w)) {
    file_put_contents($week, $ip . "\n", FILE_APPEND);
}
echo "<p>Уникальных за сегодня: " . count(file($today)) . "</p>";
echo "<p>Уникальных за неделю: " . count(file($week)) . "</p>";

