<?php

$age =[

    "Bill" => "20",
    "steve" => 30.55,
    "nike" => 50,


];

$age ["nike"] = 100;


echo "<pre>";
print_r($age);

echo "</pre>";


echo "<pre>";
var_dump($age);

echo "</pre>";


echo $age["Bill"] ."<br>";
echo $age["steve"]."<br>";
echo $age["nike"]."<br>";
?>
