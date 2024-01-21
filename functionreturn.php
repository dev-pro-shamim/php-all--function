
<?php


// function hello($Iboy, $Lboy){

//     // echo " Hey are You Single $Iboy $Lboy? ";

//     $v = "$Iboy $Lboy";

//     return $v;
// }


// $name = hello("Shamim" , "Islam"); 


// echo "$name";




function sum($bang, $eng, $sce){

 

    $v = $bang + $eng + $sce ;

    return $v;
}


function percentage($st){

    $per = $st / 3;

    echo $per;
}

$total = sum(50, 80, 95); 

percentage($total);

echo $total ;




?>