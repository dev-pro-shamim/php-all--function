<?php

function myFunction($n,$m){

    $n *= $m;
    return $n;


}

// $a = [1,2,3,4,5,6];

// $b= [ "Suzuki", "Honda" , "Discover", "Heavy", "Gixer", "Rensom"];

$b = [1,2,3,4,5,6];

// $a1 = ['a' => 'red', 'b' => 'green','c' =>'yello' ,'g' =>'orange','g' => 'red',];

$newArray  = array_reduce($b, "myFunction" , 10);

echo "<pre>";
print_r ($newArray);

echo "</pre>";