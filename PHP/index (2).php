<?php
$break = "<br>";

function recArea($l, $w){
  $area = $l * $w;
  echo "Прямоугольник длиной $l и шириной $w имеет площадь $area. <br>";
}
 
recArea(2, 4 );

function rechypot($x, $y){
  $gip = hypot($x, $y);
  echo "Треугольник стороной $x и стороной $y имеет гипотенузу $gip. <br>";
}
 
rechypot(3, 3);

echo mt_rand(67, 200) . "{$break}";
echo mt_rand(670, 2000) / 10 . "{$break}";

