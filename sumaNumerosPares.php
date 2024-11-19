<?php

function sumarAllPares($arraynumeros){

    $suma= 0;

    for($i = 0; $i < count($arraynumeros); $i++){
        $result = $arraynumeros[$i];
        if($result % 2== 0){
            $suma += $result;
        }

    }

    return $suma;
}

$myarray= [1,2,3,4,5,6,7,8,9,10];

print_r(sumarAllPares($myarray));

?>