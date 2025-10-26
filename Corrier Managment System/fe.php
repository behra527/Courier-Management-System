<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>front end1</title>
	<link rel="stylesheet" type="text/css" href="fe.css">
</head>
<style>
	
	body {
		background-image: url(F28.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		font-family: Arial, sans-serif;
		background-position: center;
	}

	h1 {
		text-align: center;
		color: black;
		margin-top: 40px;
		font-size: 40px;
	}

	.main {
		display: flex;
		justify-content: center;
		height: auto;
	}
	.sub {
		margin-top: 60px;
		margin-left: 100px;
		margin-right: 70px;
		height: 300px;
		width: 400px;
		background-color: rgba(6, 12, 10, 0.242);
		border-radius: 10px;
		box-shadow: 3px 3px 3px 3px black;
		text-align: center;
		padding: 20px;
	}
	
	img {
		width: 100%;
		max-height: 230px;
		border-radius: 10px;
	}

	button {
		width: 200px;
		height: 30px;
		font-size: 20px;
		margin-top: 10px;
		background-color: rgb(50, 52, 50);
		color: white;
		border: none;
		border-radius: 10px;

	}

	button:hover {
		background-color: black;
	}
	button a {
		text-decoration: none;
		color: white;
	}

</style>
<body>
	<h1><i>CAREFULLY COUNTED</i></h1>
	<h1><i>LOGIN AS</i></h1>
	<div class="main">
		<div class="sub">
			<img src="F11.jpg" alt="Employee Image">
			<br>
			<button><a href="eform.php">EMPLOYEE</a></button>
		</div>

		<div class="sub">
			<img src="F12.jpg" alt="Admin Image">
			<br>
			<button><a href="aform.php">ADMIN</a></button>
		</div>
	</div>
	<br>
	<br>


</body>
</html>
