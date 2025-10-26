<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $departmentid = $_POST['id'];
    $departmentname = $_POST['dname'];
    $departmentlocation = $_POST['dlocation'];
    $sql = "INSERT INTO department (id, name, location) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $departmentid, $departmentname, $departmentlocation);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo '<script>alert("New Department Added Successfully")</script>';
            header("location: department_A.php");
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
    <legend><b><h2>Add Department</h2></b></legend>
    <center>
        <form method="POST">
            <b>Department ID:</b><br>
            <input name="id" placeholder="Enter Department ID" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Department Name:</b><br>
            <input type="text" name="dname" placeholder="Enter Department Name" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Department Location:</b><br>
            <input type="text" name="dlocation" placeholder="Enter Department Location" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <button type="submit" name="submit">ADD</button>
        </form>
    </center>
</fieldset>
</body>
</html>
