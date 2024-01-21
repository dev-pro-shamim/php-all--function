<?php

$marks = [
   " Krisnna" => [
                "physics" => 85,
                "Math" => 80,
                "Chemistry" => 50,


   ],

   " Shamim" => [
        "physics" => 85,
         "Math" => 82,
          "Chemistry" => 90,


],

" Tanin" => [
        "physics" => 80,
       "Math" => 88,
     "Chemistry" => 77,


],


];

echo "<table border= '2px' cellpadding = '5px' cellspacing = '0'>

<tr>

<th>Student Name</th>
<th>Physics</th>
<th>Maths</th>
<th>Chemistry</th>


<tr>

";

foreach($marks as $kay => $v1){

    echo "<tr> 
    <td>$kay</td>";

    foreach($v1 as $v2){

        echo "<td>$v2</td>";
    }

    echo "<br>" ;
}


echo "</table>";

echo "<pre>";
print_r ($marks);

echo "</pre>";




?>