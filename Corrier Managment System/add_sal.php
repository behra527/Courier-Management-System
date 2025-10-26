<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $allowance = $_POST['allowance'];
    $bonus = $_POST['bonus'];
    $deduction = $_POST['deduction'];
	$basic = $_POST['basic'];
    $total = $_POST['total'];
    $sql = "INSERT INTO `salary`(`employeeid`, `allowance`, `bonus`, `deduction`, `basic`, `total`) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $id, $allowance, $bonus, $deduction,$basic,$total);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo '<script>alert("New Employee Salary Add Added Successfully")</script>';
            header("location: salary_A.php");
        } else {
            echo '<script>alert("Data Not Inserted: ' . mysqli_error($conn) . '")</script>';
        }
    } else {
        echo '<script>alert("Error in preparing the statement: ' . mysqli_error($conn) . '")</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Department</title>
</head>
<style>
	body{
		background-image: url(F79.jpg);
        background-size: cover;
		background-repeat: no repeat;
		font-family: Arial, sans-serif;
	}
legend{
		text-align: center;
		color: rgb(26, 26, 113);
	}

	fieldset{
		margin-left: 400px;
		margin-right: 400px;
		margin-top: 30px;
		border-style: none;
		background-color: rgba(167, 111, 37, 0.139);
	}
	

	button{
		width:190px;
		height: 30px;
		font-size:20px;
    background-color:rgb(50, 52, 50);
    margin-top: 5px;
    font-size: 18px;
    color: white;
    border-radius: 05px;
    border: solid black;
    font-weight: bold;
}
button:hover{
		background-color: black;
		color: white;
	}
		button a{
		text-decoration: none;
		color: white;
	}
</style>
<body>
	<fieldset>
	<center>
    <form method="POST">
		    <legend><b><h2>Add Employee Salary</h2></b></legend>
		
    	<b>Employee ID:</b><br>
    	<input name="id" placeholder="Enter Employee ID" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

    	    	<b>Allowance:</b><br>
    	<input name="allowance" placeholder="Enter Allowance" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

    	    	<b>Bonus:</b><br>
    	<input name="bonus" placeholder="Enter Bonus" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>
    	    	
    	    	<b>Deduction:</b><br>
    	<input name="deduction" placeholder="Enter Deduction" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>
    	    	
    	    	<b>Basic Salary:</b><br>
    	<input name="basic" placeholder="Enter Basic Salary" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

    	    	<b>Total Salary:</b><br>
    	<input name="total" placeholder="Enter Total Salary" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>
		<button name="submit" type="submit">ADD</button>
    	</center>
		
		
		</form>
	</fieldset>


</body>
</html>