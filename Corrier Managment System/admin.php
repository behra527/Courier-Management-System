<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Front End</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background-image: url(F66.jpg);
        background-size: cover;
        background-repeat: no-repeat;
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
      .main {
        display: flex;
        justify-content: center;
        margin-top: 50px;
      }

      .sub {
        margin-top: 30px;
        margin-left: 30px;
        margin-right: 30px;
        text-align: center;
        height: 250px;
        width: 250px;
        background-color: rgba(7, 8, 8, 0.151);
        border-radius: 10px;
        box-shadow: 3px 3px 3px 3px black;
      }

      .main1 {
        display: flex;
        justify-content: center;
        margin-top: 50px;
      }

      .sub1 {
        margin-top: 30px;
        margin-left: 30px;
        margin-right: 30px;
        text-align: center;
        height: 250px;
        width: 250px;
        background-color: rgba(7, 8, 8, 0.151);
        border-radius: 10px;
        box-shadow: 3px 3px 3px 3px black;
      }

      img {
        width: 180px;
        height: 150px;
        border-radius: 10px;
        margin-top: 20px;
      }

      h2 {
        margin-top: 10px;
        text-align: center;
  }
  a{
    text-decoration: none;
    color: rgb(235, 217, 18);
  }

    </style>
  </head>
  <body>
    <div class="nav">
      <div class="mainn">
        <ul>
          <li><a href="admin.php">Dashboard</a></li>
          <li><a href="department_A.php">Departments</a></li>
          <li><a href="employee_A.php">Employees</a></li>
          <li><a href="salary_A.php">Salary</a></li>
          <li><a href="leave_A.php">Leaves</a></li>
          <li><a href="attendance_A.php">Attendence</a></li>
          <li><a href="services_A.php">Services</a></li>
          <li><a href="fe.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="sub">
        <img src="departments.webp" alt="Departments" />
        <h2><a href="department_A.php">Departments</a></h2>
      </div>
      <div class="sub">
        <img src="F2.jpg" alt="Employees" />
        <h2><a href="employee_A.php">Employees</a></h2>
      </div>
      <div class="sub">
        <img src="F9.jpg" alt="Salary" />
        <h2><a href="salary_A.php">Salary</a></h2>
      </div>
    </div>
    <div class="main1">
      <div class="sub1">
        <img src="F3.jpg" alt="Leaves" />
        <h2><a href="leave_A.php">Leaves</a></h2>
      </div>
      <div class="sub1">
        <img src="F4.jpg" alt="Attendance" />
        <h2><a href="attendance_A.php">Attendance</a></h2>
      </div>
      <div class="sub1">
        <img src="F6.jpg" alt="Services" />
        <h2><a href="services_A.php">Services</a></h2>
      </div>
    </div><br><br><br>
  </body>
</html>
