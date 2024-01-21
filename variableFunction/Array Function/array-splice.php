<?php


$fruit = ['kathal', 'Amm','Jam', 'lichu', 'jambura'];

$color = ['Red', 'Green','Blue'];



array_splice($fruit , count($color), 2,$color);




echo "<pre>";

print_r($fruit);

echo "</pre>";
?>