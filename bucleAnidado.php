<?php

function imprimirPiramide($niveles) {

    for ($i = 1; $i <= $niveles; $i++) {

        for ($j = 1; $j <= $niveles - $i; $j++) {
            echo " ";
        }

        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "\n";
    }
}

imprimirPiramide(5);
?>
