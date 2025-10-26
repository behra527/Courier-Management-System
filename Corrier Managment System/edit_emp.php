<?php
include 'connect.php';

$id = $name = $degn = $email = $pass = '';

if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    $sql = "SELECT * FROM employee WHERE id=?";
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
        $degn = $row['designation'];
        $email = $row['email'];
        $pass = $row['password'];
    }
}

if (isset($_POST['submit'])) {
    $u_id = $_POST['id'];
    $u_name = $_POST['ename'];
    $u_degn = $_POST['edegn'];
    $u_email = $_POST['eemail'];
    $u_pass = $_POST['epass'];
    $u_sql = "UPDATE `employee` SET `id`=?,`name`=?,`designation`=?,`email`=?,`password`=? WHERE id=?";
    $u_stmt = mysqli_prepare($conn, $u_sql);

    if (!$u_stmt) {
        die('Error in preparing the address update SQL statement: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($u_stmt, "sssssi", $u_id, $u_name, $u_degn, $u_email, $u_pass, $id);
    mysqli_begin_transaction($conn);

    if (mysqli_stmt_execute($u_stmt)) {
        mysqli_commit($conn);
        echo '<script>alert("Data Updated Successfully")</script>';
        header('location: employee_A.php');
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
    <title>Edit Employee</title>
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
        color: green;
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
<center><form method="POST" action="">
    <legend><b><h2>Edit Employee</h2></b></legend>
    
         
            <b>Employee ID:</b><br>
            <input type="text" name="id" value="<?php echo htmlspecialchars($id); ?>" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Name:</b><br>
            <input type="text" name="ename" value="<?php echo htmlspecialchars($name); ?>" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Designation:</b><br>
            <input type="text" name="edegn" value="<?php echo htmlspecialchars($degn); ?>" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Email:</b><br>
            <input type="email" name="eemail" value="<?php echo htmlspecialchars($email); ?>" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <b>Employee Password:</b><br>
            <input type="password" name="epass" value="<?php echo htmlspecialchars($pass); ?>" style="border-radius: 5px; border: solid black; padding: 10px"><br><br>

            <button type="submit" name="submit">UPDATE</button>
        </form>
    </center>
</fieldset>
</body>
</html>
