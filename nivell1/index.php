<?php

$string = "IT Academy";
$integer = 1;
$boolean = true;
$double = 1.1;
$salutacio = "Hello World";
$salutacioMayus = strtoupper($salutacio);
$salutacioLong = strlen($salutacio);
$salutacioRev = strrev($salutacio);
$curs = "Aquest es el curs de PHP";

define("nom","Francesc Terrades");

//echo $string . ", " . $integer . ", " . $boolean . ", " . $double;

echo $salutacio . "<br>";
echo $salutacioMayus . "<br>";
echo $salutacioLong . "<br>";
echo $salutacioRev . "<br>";
echo $salutacio . ", " . $curs;
echo "<h1><b>" .nom."</b></h1>";
