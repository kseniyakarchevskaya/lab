<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<h3>Выберите вариант задания</h3>
<a href="polar.php">Лабораторная работа №1</a><br>
<a href="polar2.php">Лабораторная работа №1 2.2</a><br>
<a href="polar3.php">Лабораторная работа №1 3.2</a><br>
<a href="massiv2.php">Лабораторная работа №2</a><br>
<a href="dmas1.php">Лабораторная работа №2 4.2</a><br>
<a href="third.php">Лабораторная работа №3</a><br>
<a href="third1.php">Лабораторная работа №3 3.1</a><br>
<a href="fourlab.php">Лабораторная работа №4</a><br>
<a href="login.php">Лабораторная работа №4.1</a><br>
<a href="five.php">Лабораторная работа №5</a><br>
<a href="six.php">Лабораторная работа №6</a><br>


<!--    <h2>Введи свои данные</h2>-->
<!--    <form action="display.php" method="post">-->
<!--        <p>Введите x:<label>-->
<!--                <input type="number" name="x"/>-->
<!--            </label></p>-->
<!--        <input type="submit" value="Отправить">-->
<!--    </form>-->
<!--<table border="1">-->
<?php
//    $Families=[["Tom","Alice"],["Bob","Kate"]];
//    foreach($Families as $Family){
//        echo "<tr>";
//            foreach($Family as $user){
//                echo "<td>$user</td>";
//            }
//        echo "</tr>";
//    }
//$phones = array(
//    "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") ,
//    "samsung"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
//    "nokia" => array("Nokia 8.3", "Nokia 3.4"));
//foreach ($phones as $brand => $items) {
//    echo "<h3>" . ucfirst($brand) . "</h3>";
//    echo "<ul>";
//
//    foreach ($items as $item) {
//        echo "<li>$item</li>";
//    }
//
//    echo "</ul>";
//}

//одномерный массив
//Упорядочить значения массива по возрастанию.
// Реализовать двумя способами: с помощью стандартной функции и без.
//$mas=[];
//$n=rand(10,20);
//for ($i = 0; $i < $n; $i++) {
//    $mas[$i]=rand(0,100);
//    echo $mas[$i]." ";
//}
//echo "<br>";
////sort($mas);
//for ($i = 0; $i < count($mas)-1; $i++)
//{
//    for ($j = $i + 1; $j < count($mas); $j++)
//    {
//        if($mas[$i]>$mas[$j])
//        {
//            $temp = $mas[$i];
//            $mas[$i] = $mas[$j];
//            $mas[$j] = $temp;
//        }
//    }
//}
//for ($i = 0; $i < $n; $i++) {
//    echo $mas[$i]." ";
//}
//echo "<br>";

//двумерный массив

//?>

<!--</table>-->
</body>
</html>
<?php
//неиндексированные массивы
//$numbers=array();
//$numbers=[];
//$numbers=array(1,7,3,5);
//$numbers=[1,7,3,5];
//echo $numbers[1]."<br>";
//print_r($numbers);

//=>
//$numbers=[0=>1,1=>2,2=>3,3=>4,4=>5,5=>6,6=>7];
//$numbers=[1=>2,2=>4,3=>6,4=>8];
//$numbers=[3=>2,4,6,8,5,12];
//print_r($numbers);

//Перебор элементов массива
//$users=["Саша","Маша","Настя","Боря"];
//for($i=0;$i<count($users);$i++) {
//    echo $users[$i]." ";
//}
//foreach ($users as $user) {
//    echo $user." ";
//}
//foreach ($users as $key=>$user) {
//    echo "$key=$user"."<br/>";
//}

//индексированные массивы
//$words=array("red"=>"красный","black"=>"черный","green"=>"зеленый","yellow"=>"желтый");
//$words=["red"=>"красный","black"=>"черный","green"=>"зеленый","yellow"=>"желтый"];
//echo $words["green"];
//foreach($words as $word=>$wordColor){
//    echo $word.":".$wordColor."<br>";
//}
//$data=[1=>"Tom","id1"=>"Sam",67.9=>"Tesov"];

//многомерные массивы
//$Families=array(array("Tom","Alice"),array("Bob","Kate"));
///$Families=[["Tom","Alice"],["Bob","Kate"]];
//print_r($Families);
//echo "<br>";
//print_r($Families[0]);
//echo "<br>";
//echo $Families[0][0]."<br/>";
//echo $Families[0][1]."<br/>";
//echo $Families[1][0]."<br/>";
//echo $Families[1][1]."<br/>";
//echo "<br>";

//foreach($Families as $Family){
//    echo $Family."<br/>";
//}
