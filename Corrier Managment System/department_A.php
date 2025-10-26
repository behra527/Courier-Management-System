<!DOCTYPE php>
<php>
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
  color: rgb(235, 217, 18);
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
    button{
        position: relative;
        left: 1000px;
        height: 50px;
        width: 100px;
        bottom: 80px;
        border-radius: 15px;
        border: none;
        background-color: rgb(9, 9, 107);
        color: white;
        margin-top: 20px;
    
   }
   button:hover{
        background-color: black;
        color: white;
    
   }
   a{
    text-decoration: none;
    color: white;
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
        width:70px;
        height: 30px;
        background-color: red;
        color: white;
        border: none;
        border-radius: 10px;

    }
    #green{
        width:70px;
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

   table th,
      table td {
        border: 1px solid #000;
        padding: 8px;
        text-align: center;
      }
</style>
<body>
    <div class="nav">
		<div class="mainn"> 
			<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="#department_A.php">Departments</a></li>
			<li><a href="employee_A.php">Employees</a></li>
			<li><a href="salary_A.php">Salary</a></li>
			<li><a href="leave_A.php">Leaves</a></li>
			<li><a href="attendence_A.php">Attendence</a></li>
			<li><a href="services_A.php">Services</a></li>
		</ul>
  </div>
<div class="banner">
    <h2>Department Information</h2>
    <button><a href="add_dept.php">ADD</a></button>

</div>
<div class="tb">
        <table border="1px">
          <thead>
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Department Location</th>
                <th>Activity</th>
            </tr>
          </thead>
          <?php
include "./connect.php";

$sql = "SELECT * FROM department" ;
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{

?>

<tr>
<td><?php echo  $row['id'] ?></td>
<td><?php echo  $row['name'] ?></td>
<td><?php echo $row['location'] ?></td>
<td><a href="edit_dept.php?uid=<?php echo $row['id']; ?>"><input type="button" value="EDIT" id="green"></a>
<a href="delete_dept.php?uid=<?php echo $row['id']; ?>"> <input type="button" value="DELETE" ></a></td>
</tr>
<?php
}}
?>
        </table>
</div>

</body>
</php> 
