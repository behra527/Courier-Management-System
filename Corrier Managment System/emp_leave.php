<?php
include "./connect.php";
include "./login.php";
$i = 1;
$email = mysqli_real_escape_string($conn, $_SESSION['emal']);

$sql = "SELECT * FROM employee WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
        $empID = $row['id'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $empID;
    $from = $_POST['leave'];
    $to = $_POST['leave_to'];
    $reason = $_POST['reason'];
    $day = $_POST['day'];
    $sql = "INSERT INTO `leav`( `employeeid`, `reason`, `date_from`, `date_to`, `no_of_days`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $id, $reason, $from, $to,$day);
        $result = mysqli_stmt_execute($stmt);
        
        if ($result) {
            echo '<script>alert("Appllied Successfully")</script>';
            header("location: employees.php");
        } else {
            echo '<script>alert("Data Not Inserted")</script>';
        }
    } else {
        echo '<script>alert("Error in preparing the statement")</script>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }
  body{
        background-image: url(F79.jpg);
        background-size: cover;
		    background-repeat: no repeat;
        font-family: Arial, sans-serif;
  }

    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #3333338d;
}

li {
  float: left;
}

li a {
  display: block;
  color: rgb(235, 217, 18);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
  /* Form styling */
  .form-container {
    max-width: 400px;
    margin: 40px auto ;
    padding: 20px;
    border: 1px solid black;
    background-color: rgba(146, 132, 106, 0.427) ;
  }
  
  input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type="submit"] {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type="submit"]:hover {
    background-color: #111;
  }
  button {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #111;
  }
</style>
</head>
<body>
  <ul>
          <li><a href="employees.php">Dashboard</a></li>
          <li><a href="emp_salary.php">Salary</a></li>
          <li><a href="emp_attendence.php">Attendance</a></li>
          <li><a href="#emp_leave.php">Leaves</a></li>
          <li><a href="emp_service.php">Services</a></li>
      </ul>
  
  <div class="form-container">
    <form method="POST">
     
      Leave Form:<br>
      <input type="date" name="leave" placeholder="Enter Date 'Leave Form'"><br>
      Leave To:<br>
      <input type="date" name="leave_to" placeholder="Enter Date 'Leave To'"><br><br>
      Number Of Days:<br>
      <input type="text" name="day" placeholder="Enter Number of Leaves"><br><br>

      Reason:<br>
      <input type="text" name="reason" placeholder="Enter your Reason"><br>
      <button type="submit" value="submit" name="submit">Login
        </button>
    </form>
  </div>
</body>
</php>
