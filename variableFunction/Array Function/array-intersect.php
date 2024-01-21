<?php

function compare($a1, $a2){

    if($a1===$a2){
        return 0;

    }

    return($a1 > $a2)? 1: -1;
}


$a1 = ['a' => 'Red', 'b' => 'green','c' =>'yello' ,'d' =>'blue'];
$a2 = ['a' => 'red', 'b' => 'green','f' =>'purple' ,'g' =>'orange'];

$newArray = array_intersect_uassoc($a1, $a2,"compare");

echo "<pre>";

print_r($newArray);

echo "</pre>";



?>