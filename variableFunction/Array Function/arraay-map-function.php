<?php

function square($n){

    return strtoupper($n) ;


}

$a = [1,2,3,4,5,6];

$b= [ "Suzuki", "Honda" , "Discover", "Heavy", "Gixer", "Rensom"];

$a1 = ['a' => 'red', 'b' => 'green','c' =>'yello' ,'g' =>'orange','g' => 'red',];

$newArray  = array_map("square", $a1);

echo "<pre>";
print_r ($newArray);

echo "</pre>";





?>