<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['ename'];
    $degn = $_POST['edegn'];
    $email = $_POST['eemail'];
    $pass = $_POST['epass'];
    $sql = "INSERT INTO `employee`(`id`, `name`, `designation`, `email`, `password`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $id, $name, $degn, $email, $pass);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo '<script>alert("New Employee Added Successfully")</script>';
            header("location: employee_A.php");
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
    <title>Add Employee</title>
</head>
<style>
    body {
        background-image: url(F79.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
    }

    legend {
        text-align: center;
        color: rgb(26, 26, 113);
    }

    fieldset {
        margin-left: 400px;
        margin-right: 400px;
        margin-top: 80px;
        border-style: none;
        background-color: rgba(167, 111, 37, 0.139);
    }

    button {
        width: 190px;
        height: 30px;
        font-size: 20px;
        background-color: rgb(50, 52, 50);
        margin-top: 5px;
        font-size: 18px;
        color: white;
        border-radius: 5px;
        border: solid black;
        font-weight: bold;
    }

    button:hover {
        background-color: black;
        color: white;
    }

    button a {
        text-decoration: none;
        color: white;
    }
</style>
<body>
<fieldset>
    <form method="POST">
        <center>
            <legend><b><h2>Add Employee</h2></b></legend>

            <b>Employee ID:</b><br>
            <input type="text" name="id" placeholder="Enter Employee ID" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Name:</b><br>
            <input type="text" name="ename" placeholder="Enter Employee Location" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Designation:</b><br>
            <input type="text" name="edegn" placeholder="Enter Employee Designation" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>
            
            <b>Employee Email:</b><br>
            <input type="email" name="eemail" placeholder="Enter Email" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Password:</b><br>
            <input type="text" name="epass" placeholder="Enter Password" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <button type="submit" name="submit">ADD</button>
        </center>
    </form>
</fieldset>
</body>
</html>
