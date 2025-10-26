<?php
include "./connect.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["pass"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $username = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $pass);

    $query = "SELECT * FROM employee WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION["employee"] = true;
            $_SESSION["emal"] = $email;
            header("Location: employees.php");
            exit();
        } else {
            echo '<script>alert("Invalid credentials. Please enter the correct credentials")</script>';
        }
    } else {
        die('Error in preparing the SQL statement: ' . mysqli_error($conn));
    }
}
?>
