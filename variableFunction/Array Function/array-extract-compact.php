<?php

// $color = ["red", "Green", "Yello"];

// $color = array(11,25,36);

$a = "Orange";

$color = array( 'a' => 'Red',  'b' => 'Green',   'c' => 'Yello',  );

extract($color,EXTR_FREFIX_SAME,"test");

echo " The Value of  a : $a<br> ";

echo " The Value of  a : $test_a <br> ";
echo " The Value of  b: $b<br> ";
echo " The Value of c: $c <br>  ";

?>