<?php
$str = "Hello World, It was a Very Beautiful";

// $str = array('hello', 'How', 'are', 'you');

$array = chunk_split( $str, 2, "<br>");

echo $array;

// echo "<pre>";
// print_r($array);
// echo "</pre>"; 

?>