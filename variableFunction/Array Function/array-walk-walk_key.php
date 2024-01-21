<?php

$fruit = array("1" => "Tomato", "2" => "Patata");


$age = array (
    $fruit,

    "Shamim" => "22",
    "Tamim" =>"20",
    "Al amin" => "26",
    "Munna" => "18"
    );

 array_walk_recursive($age,"myFunction", "This is age");

 function myFunction($value, $key, $yr){

echo "$key $yr $value <br>";

 };

?>