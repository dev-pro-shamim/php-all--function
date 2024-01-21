<?php

// $fruit = ['kathal', 'Amm','Jam', 'lichu', 'jambura'];

$color = ['a' => 'red', 'b' => 'green','22' =>'yello' ,'c' =>'blue'];

$newArray = array_slice($color, 1,2,true);

echo "<pre>";

print_r($newArray);

echo "</pre>";



?>