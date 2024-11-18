<?php


function serieFibonacci($number){

    if($number <= 0) return [];

    if($number == 1) return [0];

    $fibo = [0,1]; 

    for($i = 2; $i < $number; $i++){

        $fibo[] = $fibo[$i-1] + $fibo[$i-2];

    }

    return $fibo;
}

$result = serieFibonacci(6);

print_r($result);

?>