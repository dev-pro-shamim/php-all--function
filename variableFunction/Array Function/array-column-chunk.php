<?php

// $array = array(
// array(
// "id" => 2201,
// "first_name" => 'Shamim',
// "last_name" => 'reza',

// ),


// array(
//     "id" => 2202,
//     "first_name" => 'Tamim',
//     "last_name" => 'Islam',
    
//     ),

    
//     array(
//         "id" => 2203,
//         "first_name" => 'Sham',
//         "last_name" => 'khan',
        
//         ),
        
//     );


    

// $newArray = array_column($array, 'first_name');

// echo "<pre>";

// print_r($newArray);

// echo "</pre>";


// $car= [ "Suzuki", "Honda" , "Discover", "Heavy", "Gixer", "Rensom"];

$age = array (

    "Shamim" => "22",
    "Tamim" =>"20",
    "Al amin" => "26",
    "Munna" => "18"
);

$newArray = array_chunk($age,2,true);

echo "<pre>";

print_r($newArray);

echo "</pre>";

?>