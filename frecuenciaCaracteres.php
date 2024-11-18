<?php

function frecuenciaCaracteres($text){
    $frecuencias = [];

    foreach(str_split($text) as $char){

        if (isset($frecuencias[$char])) {
            $frecuencias[$char]++;
        }else {
            $frecuencias[$char] = 1;
        }
    }

    return $frecuencias;

}

$texto = "hola hol";

print_r(frecuenciaCaracteres($texto));


?>