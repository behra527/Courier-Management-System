<?php
include "./connect.php";
$cd = $_GET['uid'];
$sql = "DELETE FROM department where id = $cd";

$result = mysqli_query($conn,$sql);

if($result)
{
    header("location: department_A.php");
}

?>