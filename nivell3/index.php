<?php

 //Exercici 1

 function stringToArray($cadena){

    $novaCadena = str_split($cadena);
    $novaCadena = array_diff($novaCadena, array(" "));
    print_r($novaCadena);

 }

 echo stringToArray("Benvinguts al Cibernarium"). "<br><br>";


 //Exercici 2

$array = [0,0,0,1,1,1,1,3,3,3,2,2,2,2,2];

 function valueInArray($a, $valor){
    $i = 0;
    foreach($a as $value){
        if($value === $valor){         
            $i++;      
        }       
    }
    return $i;
 }


 echo valueInArray($array, 2);