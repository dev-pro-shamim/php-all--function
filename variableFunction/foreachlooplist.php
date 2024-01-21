<?php


$emp = [
    [1, "Krisna", "Manager", 500000],
    [2, "Sojol", "Salesman", 400000],
    [3, "Arun", "Operator", 300000],
    [4, "Polash", "Driver", 200000],
    
    
    ];

echo"<table border = '2px' cellpadding = '5px' cellspacing = '0'>


<tr>
<th>ID</th>
<th>Name</th>
<th>Position</th>
<th>Salary</th>

</tr>

";

    foreach($emp as list($id, $name, $designation, $salary)){
        echo "<tr><td>$id </td> <td>$name</td> <td>$designation </td><td>$salary</td></tr>";


    }

    echo"</table>";

?>