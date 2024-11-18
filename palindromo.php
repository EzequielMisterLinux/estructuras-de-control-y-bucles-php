<?php

function verificarPalindromo($palabra){

    $palabra = strtolower($palabra);

    return $palabra === strrev($palabra);

}

$verificar = verificarPalindromo("oso");

if ($verificar === true) {
    echo "es palindromo";
}else{
    echo "no es palindromo";
}

?>