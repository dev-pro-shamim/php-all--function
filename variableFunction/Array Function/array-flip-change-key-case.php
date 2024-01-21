<?php



$age = array (

    "Shamim" => "22",
    "Tamim" =>"20",
    "Al amin" => "26",
    "Munna" => "18"
);

$newArray = array_change_key_case($age, CASE_LOWER);

echo "<pre>";

print_r($newArray);

echo "</pre>";

?>