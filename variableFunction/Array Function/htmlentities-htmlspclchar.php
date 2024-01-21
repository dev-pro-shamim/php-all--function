<?php

//$str = "A 'Qoute ' is a <b>Bolld</b>";

$str = '<a href="https://dev-crocoblock-car-rental.pantheonsite.io/">This is Car rental website</a>';

// echo $str."<br>";

// $newhtmlent = htmlentities($str,ENT_NOQUOTES)."<br>";

$newhtmlent = htmlspecialchars($str,ENT_NOQUOTES);

// echo htmlentities($str,ENT_QUOTES)."<br>";

echo $newhtmlent;

echo htmlspecialchars_decode($newhtmlent);



echo "<pre>";

print_r(GET_HTML_TRANSLATION_TABLE(ENT_QUOTES));
echo "</pre>";




?>