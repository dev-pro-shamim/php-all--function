<?php


// $fruit = ['kathal', 'Amm','Jam', 'lichu', 'jambura'];
// $vagggie = ['ALu', 1 => 'Potol'];

// // $color = ['Red', 'Green','Blue'];

// // $water = ['pond', 'sea','river','nala'];


// $newArray = array_replace($fruit,$vagggie,);


$array1 = array("a" => array('red'),"b" => array('red',"papuss"));
$array2 = array("a" => array('Yellow','puple'),"b" => array('badami'));

$newArray = array_replace($array1,$array2,);

echo "<pre>";

print_r($newArray);

echo "</pre>";
?>