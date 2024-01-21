<?php
$str = "Hello World, It was a Very Beautiful";

// $str = array('hello', 'How', 'are', 'you');

$array = explode(" ", $str,3);

echo "<pre>";
print_r($array);
echo "</pre>"; 

?>