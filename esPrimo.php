<?php


function verificarPrimo($n){

    if ($n % 2 == 0) {
        echo "es primo";
    }else{
        echo "no es primo";
    }

}

verificarPrimo(1);
echo "<br/>";
verificarPrimo(4);


?>