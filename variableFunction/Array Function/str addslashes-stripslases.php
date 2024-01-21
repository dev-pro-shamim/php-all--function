<?php

$str = "i love  '/hello world/' ";

 echo $str."<br>";

$newstr = addcslashes($str, 'a..z');


// echo $newstr;


echo stripcslashes($str)


?>