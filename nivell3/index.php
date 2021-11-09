<?php

 //Exercici 1

 function stringToArray($cadena){

    $novaCadena = str_split($cadena);
    $novaCadena = array_diff($novaCadena, array(" "));
    print_r($novaCadena);

 }

 echo stringToArray("Benvinguts al Cibernarium");


 