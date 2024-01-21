<?php

// function compare($a1, $b2){

//     if($a1===$b2){
//         return 0;

//     }

//     return($a1 > $b2)? 1: -1;
// }

function compare($a, $b){

if($a===$b){

    return 0;
}


return($a > $b)? 1: -1;
}


function compareValue($a, $b){

    if($a===$b){
    
        return 0;
    }
    
    
    return($a > $b)? 1: -1;
    }
    


$a1 = ['a' => 'red', 'b' => 'green','c' =>'yello' ,'d' =>'blue','j' => 'gfeen','g' =>'orange'];
$a2 = ['a' => 'red', 'b' => 'green','f' =>'purple' ,'g' =>'orange', 'f' => 'gs'];

// $a3 = ['a' => 'red', 'b' => 'green','f' =>'purple' ,'g' =>'yello'];

$newArray = array_udiff_uassoc($a1, $a2,"compare","compareValue");

echo "<pre>";

print_r($newArray);

echo "</pre>";



?>