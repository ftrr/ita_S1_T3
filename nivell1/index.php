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

//echo $string . ", " . $integer . ", " . $boolean . ", " . $double;

echo $salutacio . "<br>";
echo $salutacioMayus . "<br>";
echo $salutacioLong . "<br>";
echo $salutacioRev . "<br>";
echo $salutacio . ", " . $curs;
