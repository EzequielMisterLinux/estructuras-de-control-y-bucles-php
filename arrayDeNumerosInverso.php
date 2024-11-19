<?php

function invertirArray($arrayConvert) {
    $newArray = [];


    for ($i = count($arrayConvert) - 1; $i >= 0; $i--) {
        $newArray[] = $arrayConvert[$i];
    }

    return $newArray;
}

$myArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r(invertirArray($myArray));

?>
