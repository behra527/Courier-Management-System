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
    $srv = $_POST['sr'];
    $sql = "INSERT INTO `services`(`employeeid`, `type`) VALUES (?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $id,$srv);
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
  
  /* Navigation bar styling */
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
  .center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; 
  }
  
  form {
    width: 300px;
    padding: 20px;
    border: 1px solid black;
    background-color: rgba(146, 132, 106, 0.427);
  }
  
  input[type="text"],
  select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
          <li><a href="emp_leave.php">Leaves</a></li>
          <li><a href="#emp_service.php">Services</a></li>
        </ul>
  
  <div class="center">
    <form method="POST">
    

      Service:<br> 
      <select name="sr"> 
        <option  values="Advance Salary">Advance Salary</option>  
        <option  values="Loan">Loan</option> 
      </select><br><br>
      <button name="submit" type="submit">Apply</button><br><br>
    </form>
  </div>
</body>
</html>
