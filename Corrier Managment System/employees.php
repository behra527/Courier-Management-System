<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>front end1</title>
    <link rel="stylesheet" type="text/css" href="fe.css" />
  </head>
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
      background-position: center;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .sub {
		
      margin-top: 100px;
	  margin-left: 60px;
      width: 220px;
      height: 240px;
      background-color: rgba(7, 8, 8, 0.151);
      border-radius: 10px;
      box-shadow: 3px 3px 3px 3px black;
      text-align: center;
      padding: 20px;
    }

    .sub img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 20px;
      color: maroon;
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

    h2 {
        margin-top: 10px;
        text-align: center;
        font-size: 25px;
  }
  a{
    text-decoration: none;
    color: rgb(235, 217, 18);
  }
  </style>
  <body>
    <div class="nav">
      <div class="mainn">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="emp_salary.php">Salary</a></li>
          <li><a href="emp_attendence.php">Attendance</a></li>
          <li><a href="emp_leave.php">Leaves</a></li>
          <li><a href="emp_service.php">Services</a></li>
          <li><a href="fe.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="sub">
        <img src="F9.jpg" alt="Salary Image" />
        <h2><a href="emp_salary.php">Salary</a></h2>
      </div>

      <div class="sub">
        <img src="F4.jpg" alt="Attendance Image" />
        <h2><a href="emp_attendence.php">Attendance</a></h2>
      </div>

      <div class="sub">
        <img src="F3.jpg" alt="Leaves Image" />
        <h2><a href="emp_leave.php">Leaves</a></h2>
      </div>

      <div class="sub">
        <img src="F6.jpg" alt="Services Image" />
        <h2><a href="emp_service.php">Services</a></h2>
      </div>
    </div>
  </body>
</html>
