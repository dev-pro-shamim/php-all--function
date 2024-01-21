<?php

// $food = array('orange', 'banana', 'banana','apple');

// if(in_array('shamim',$food)){


//     echo "Find Succesfully";
// }else{

//     echo "Can't Find";

// }


$a = array (array('p','s','k'),array('r','l'),('q'));

if(in_array(array('p','s','k'), $a, true)){


    echo "Find Succesfully";
}else{

    echo "Can't Find";

}

echo "<pre>";

print_r(array_count_values($a));

echo "</pre>";
?>