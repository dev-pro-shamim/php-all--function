<?php

// function testing(&$string)

// {
// $string .= " another Complementory";

// }
// $str= " This is String";



// testing($str);

// echo $str;

function first($num){
 $num += 5;

}

function first(&$num){


}
$number = 10;

first($number);

echo " Orginal Number is $number <br>";




?>