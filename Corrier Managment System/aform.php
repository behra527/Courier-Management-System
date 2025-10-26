<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>employee form</title>
    
</head>
<style>
        *{
        margin: 0px;
    }
    body{
        background-image: url(F65.jpg);
        background-size: cover;
        background-repeat: no repeat;
        font-family: Arial, sans-serif;
    }
    h1{
        text-align: center;
        color: rgb(21, 20, 20);
        margin-top: 50px;
        font-size: 50px;
    }

    legend{
        text-align: center;
        color: rgb(16, 14, 14);
        font-size: 25px;
    }

    fieldset{
        margin-left: 310px;
        margin-right: 310px;
        margin-top: 50px;
        border-style: dotted;
    }

    button{
    background-color:  rgb(50, 52, 50);
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
    <h1><i>CAREFULLY COUNTED</i></h1>
    <form method="POST">
       <center> 
    <fieldset>
            <legend><b><h2>Admin</h2></b></legend>
            
    
        <b>Email:</b><br>
        <input type="email" name="email" placeholder="Enter your Email" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

        <b>Password:</b><br>
        <input type="password" name="pass" placeholder="Enter your Password" style="border-radius: 05px; border: solid black; padding: 10px"><br><br>

        <button type="submit" value="submit" name="submit">Login
        </button>
        </center>
        
        </form>
    </fieldset>
    <br>
        <br>

</body>
</html>



<?php
include "./connect.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);
    $query = "SELECT * FROM admin WHERE email = '$email' AND pass = '$pass'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION["admin"] = true;
        header("Location: admin.php");
        exit();
    } else {
        echo '<script>alert("Invalid credentials. Please enter right credentials")</script>';
    }
}
?>