<?php
include 'connect.php';
$id = $name = $location = '';
if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    $sql = "SELECT * FROM department WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die('Error in preparing the SQL statement: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'i', $id);

    if (!mysqli_stmt_execute($stmt)) {
        die('Error in executing the SQL statement: ' . mysqli_error($conn));
    }

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $location = $row['location'];
    }
}

if (isset($_POST['submit'])) {
    $up_id = $_POST['id'];
    $up_name = $_POST['dname'];
    $up_location = $_POST['dlocation'];
    $update_sql= "UPDATE `department` SET `id`=?,`name`=?,`location`=? WHERE id=?";
        $update_stmt = mysqli_prepare($conn, $update_sql);

        if (!$update_stmt) {
            die('Error in preparing the address update SQL statement: ' . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($update_stmt, 'sssi', $up_id, $up_name, $up_location, $id);
        mysqli_begin_transaction($conn);
        if (mysqli_stmt_execute($update_stmt) ) {
            mysqli_commit($conn);
            echo '<script>alert("Data Updated Successfully")</script>';
            header('location: department_A.php');
            exit;
        } else {
            mysqli_rollback($conn);
            echo '<script>alert("Data Not Updated!")</script>';
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
		color:  green;
	}

	fieldset{
		margin-left: 400px;
		margin-right: 400px;
		margin-top: 80px;
		border-style: none;
		background-color: rgba(167, 111, 37, 0.139);
	}
	

	button{
		width:190px;
		height: 30px;
		font-size:20px;
    background-color: rgb(50, 52, 50);
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
		    <legend><b><h2>Edit Department</h2></b></legend>
		    
    	<b>Department ID:</b><br>
    	<input name="id" type="text" value="<?php echo htmlspecialchars($id); ?>" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>
		
		<b>Department Name:</b><br>
    	<input type="text" name="dname" value="<?php echo htmlspecialchars($name); ?> " style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

    	<b>Department Location:</b><br>
    	<input type="text" name="dlocation" value="<?php echo htmlspecialchars($location); ?>" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>


		<button type="submit" name="submit">UPDATE</button>
    	</center>
		
		
		</form>
	</fieldset>


</body>
</html>





