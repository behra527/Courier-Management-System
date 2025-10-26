<!DOCTYPE html>
<html>
<title>Department table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }
  body{
      background-image: url(F84.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
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
  color:rgb(235, 217, 18);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
    .banner{
        height: 100px;
        width: 100%;
        background-color: #3333338d;
        margin-top:30px;
    }
    .banner h2{
        padding: 30px;
        color:rgb(235, 217, 18) ;
        
    }
    
   table{
        height:250px;
        width:850px;
        border-collapse: collapse;
        
    }
    
      .tb{
        margin-left: 220px;
        margin-top: 70px;
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
    
    input{
        width:90px;
        height: 30px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 10px;

    }
    #green{
        width:90px;
        height: 30px;
        background-color: green;
        color: white;
        border: none;
        border-radius: 10px;
    }
    #green:hover{
    background-color: black;
        color: white;
   }
   input:hover{
    background-color: black;
        color: white;
   }

  
</style>
<body>
    <div class="nav">
		<div class="mainn"> 
			<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="department_A.php">Departments</a></li>
			<li><a href="employee_A.php">Employees</a></li>
			<li><a href="salary_A.php">Salary</a></li>
			<li><a href="#leave_A.php">Leaves</a></li>
			<li><a href="attendence_A.php">Attendence</a></li>
			<li><a href="services_A.php">Services</a></li>
		</ul>
  </div>
<div class="banner">
    <h2>Leave Information</h2>


</div>
<div class="tb">
        <table border="1px">
          <thead>
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Reason</th>
                <th>Leave From</th>
                <th>Leave To</th>
                <th>No. of Days</th>
               <th>Activity</th>
                
            </tr>
          </thead>
          <?php
include "./connect.php";

$sql = "SELECT * FROM employee as e Inner join leav as l ON e.id=l.employeeid" ;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{

?>

<tr>
<td><?php echo  $row['id'] ?></td>
<td><?php echo  $row['name'] ?></td>
<td><?php echo $row['reason'] ?></td>
<td><?php echo $row['date_from'] ?></td>
<td><?php echo $row['date_to'] ?></td>
<td><?php echo $row['no_of_days'] ?></td>
<td><input type="button" value="ACCEPTED" id="green">
            <input type="button" value="REJECTED"></td>
</tr>
<?php
}}
?>
        </table>
      
</div>

</body>
</html> 
