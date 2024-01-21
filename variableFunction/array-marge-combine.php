<?php

// $fruit = ['a' => 'kathal', 'b' => 'Amm','c' =>'Jam','d' => 'lichu','e' => 'jambura'];

// $vagggie = [ 'b' => ['color' => ['red', 'blue']],

// 'f' => 'Potol',

// 55, 

// 86
// ];


$name = array ( "Shamim", "Sojol", "Polash");

$age = array("22", "21", "35");

$newArray = array_combine($name,$age);


echo "<pre>";

print_r($newArray);

echo "</pre>";
?>