<?php

$age = [

    "Bill" => 20,
    "Steve" => 30,
    "Mike" => 28,


];
echo "<ul>";
foreach($age as $key => $value){


    echo "<li>$key =  $value </li>" ;
}

echo "</ul>";

?>