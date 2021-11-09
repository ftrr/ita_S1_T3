<?php

//Exercici 1

function suma($s1,$s2){
    if($s1 == $s2){
        return ($s1+$s2)*2;
    } else {
        return ($s1+$s2);
    }
}

echo suma(1,2). "<br>";
echo suma(3,2). "<br>";
echo suma(2,2). "<br>";