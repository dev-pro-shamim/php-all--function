<?php

$str = "Hello World";
$newencode = convert_uuencode($str). "<br>";

echo $newencode;
$newdecode =convert_uudecode($newencode);

echo $newdecode;

?>