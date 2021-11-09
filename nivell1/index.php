<?php

//Ex1
$string = "IT Academy";
$integer = 1;
$boolean = true;
$double = 1.1;

echo $string . ", " . $integer . ", " . $boolean . ", " . $double;


//Ex2
$salutacio = "Hello World";
$salutacioMayus = strtoupper($salutacio);
$salutacioLong = strlen($salutacio);
$salutacioRev = strrev($salutacio);
$curs = "Aquest es el curs de PHP";

echo $salutacio . "<br>";
echo $salutacioMayus . "<br>";
echo $salutacioLong . "<br>";
echo $salutacioRev . "<br>";
echo $salutacio . ", " . $curs;

//Ex3
define("nom","Francesc Terrades");

echo "<h1><b>" .nom."</b></h1>";

//Ex4
$x = 2;
$y = 3;
$n = 2.5;
$m = 3.5;

echo "Valor: x=" .$x . " " . "Y=" . $y . "<br>"; 
echo "Suma: " . ($x + $y) . "<br>"; 
echo "Resta: " . ($x - $y) . "<br>";
echo "Producte: " . ($x * $y) . "<br>";
echo "Mòdul: " . ($x % $y) . "<br><br>"; 

echo "Valor: x=" .$n . " " . "Y=" . $m . "<br>"; 
echo "Suma: " . ($n + $m) . "<br>"; 
echo "Resta: " . ($n - $m) . "<br>";
echo "Producte: " . ($n * $m) . "<br>";
echo "Mòdul: " . ($n % $m) . "<br><br>"; 

echo "Doble: " . ($x*2) . ", ". ($y*2) . ", ". ($n*2) . ", ". ($m*2). "<br>";
echo "Suma tots: " .($x+$y+$n+$m). "<br>";
echo "Producte tots: " .($x*$y*$n*$m). "<br><br>";


//Ex5
$array1 = array(1,2,3,4,5);
$array2 = array(6,7,8);

array_push($array2, "9");
array_merge($array1,$array2);
print_r(array_merge($array1,$array2));



