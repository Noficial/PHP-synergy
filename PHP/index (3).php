<?php
$break = "<br>";
$time = 59;
//подставить любое положительное целое число до 59

if ($time <= 15) {
    echo "число пренадлежит первой части {$break}";
} elseif ($time > 15 and $time <= 30) {
    echo "число пренадлежит второй части {$break}";
} elseif ($time > 30 and $time <= 45) {
    echo "число пренадлежит третьей части {$break}";
} else {
    echo "число пренадлежит четвертой части {$break}";
}

$seson = 2;

if ($seson = 12 or $seson = 1 or $seson = 2) {
    echo "Зима {$break}";
} elseif ($seson = 3 or $seson = 4 or $seson = 5) {
    echo "Весна {$break}";
} elseif ($seson = 6 or $seson = 7 or $seson = 8) {
    echo "Лето {$break}";
} elseif ($seson = 9 or $seson = 10 or $seson = 11) {
    echo "Осень {$break}";
} else {
    echo "Укажите существующий месяц {$break}";
}

$qub = 5;

if (($qub % 2) == 0) {
    $qub = $qub ** 2; 
    echo $qub.$break;
} else {
    $qub = $qub ** 3; 
    echo $qub.$break;
}




