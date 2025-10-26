<!DOCTYPE html>
<html>
  <head>
    <title>Attendance</title>
    <style>
      * {
        margin: 0;
      }
      body {
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
      table {
        width: 60%;
        margin: auto;
        margin-top: 60px;
        border-collapse: collapse;
      }
      table th,
      table td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
      }
      table th {
        background-color: #3333338d;
        color: rgb(235, 217, 18);
      }
    </style>
  </head>
  <body>
    <div class="nav">
      <div class="mainn">
        <ul>
          <li><a href="employees.php">Dashboard</a></li>
          <li><a href="emp_salary.php">Salary</a></li>
          <li><a href="#emp_attendence.php">Attendance</a></li>
          <li><a href="emp_leave.php">Leaves</a></li>
          <li><a href="emp_service.php">Services</a></li>
        </ul>
      </div>
    </div>
    <table border="1">
      <tr>
      <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Present Days</th>
                <th>Absent Days</th>
      </tr>
      <?php
      include "./login.php";
      include "./connect.php";
      $i = 1;
      $email = mysqli_real_escape_string($conn, $_SESSION['emal']);
      
      $sql = "SELECT * FROM employee as e Inner join leav as l ON e.id=l.employeeid Where email='$email'" ;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{

?>

<tr>
<td><?php echo  $row['id'] ?></td>
<td><?php echo  $row['name'] ?></td>

<td style="color: blue;"><?php echo 30-$row['no_of_days'] ?></td>
<td style="color: red;"><?php echo $row['no_of_days'] ?></td>
</tr>
<?php
}}
?>
  </body>
</html>
