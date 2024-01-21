<?php



$x = 10;

$y = 20;



function test(){
    global $x, $y;

    $x = $x + $y;

   

    


}
test();

echo $x;

?>