<?php

$food = array('orange', 'banana', 'banana','apple');

// echo sizeof($food);


// $food = array(

//     'fruites' => array('orange', 'banana', 'apple'),
//     'veggitable' => array('papaya', 'Colland', 'Pea')


// );

// $len = count($food);
// for($i = 0; $i < $len; $i++){


//     echo $food[$i]."<br>";
// }
echo "<pre>";

print_r(array_count_values($food));

echo "</pre>";
?>