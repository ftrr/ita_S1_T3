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
echo suma(2,2). "<br><br>";



//Exercici 2

function intercanvi($cadena){
     $firstLetter = substr($cadena,0,1);
     $lastLetter = substr($cadena,-1,1);
     $novaCadena = substr_replace($cadena,$lastLetter,0,1);
     $novaCadena = substr_replace($novaCadena,$firstLetter,-1,1);
     return $novaCadena;

}

echo intercanvi("wxyz"). "<br>";
echo intercanvi("a"). "<br>";
echo intercanvi("ab"). "<br><br>";
