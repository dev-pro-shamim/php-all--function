<?php
include 'header.php';


?>
<div id="main-content">
    <h2>All Records here</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","crud")or die ("Connection Fail");
    $sql = "select* from student join studentclass where  student.sclass= studentclass.cid" ;   
    $result = mysqli_query($conn, $sql) or die ("Query Unsuccessfull.");
    if(mysqli_num_rows($result) > 0);{

?>


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ramesh</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Suresh</td>
                <td>Punjab</td>
                <td>BCOM</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            

        </tbody>
    </table>


    <?php
    }
    ?>
</div>
</div>
</body>
</html>
