<?php
include "./connect.php";
$cd = $_GET['uid'];
$sql = "DELETE FROM employee where id = $cd";

$result = mysqli_query($conn,$sql);

if($result)
{
    header("location: employee_A.php");
}

?>