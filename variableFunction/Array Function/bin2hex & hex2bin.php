<?php

$str = "Hello World earth";


$newbin2hex = bin2hex($str);

echo $newbin2hex . "<br>";


$newhex2bin = hex2bin($newbin2hex);
echo $newhex2bin;
// $newencode = convert_uuencode($str). "<br>";

// echo $newencode;
// $newdecode =convert_uudecode($newencode);

// echo $newdecode;

?>