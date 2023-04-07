<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Page</title>
    <style>
body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url() no-repeat;
	background-size: cover;
}

.login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
}

.login-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #191970;
	margin-bottom: 30px;
    border-radius: 30px 0px;
	padding: 13px;
}

.textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #191970;
}

.fa {
	width: px;
	float: left;
	text-align: center;
}

.textbox input {
	border: none;
	outline: none;
	background: none;
	font-size: 18px;
	float: left;
	margin: 0 10px;
}

.button {
	width: 100%;
	padding: 8px;
	color: #ffffff;
	background: none #191970;
	border: none;
	border-radius: 20px;
	font-size: 18px;
	cursor: pointer;
	margin: 7px 0;
}
    </style>
</head>

<body>
	<form method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user"></i>
				<input type="text" placeholder="Username"name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock"></i>
				<input type="password" placeholder="Password"name="password" value="">
			</div>

			<input class="button" type="submit"name="login" value="LOGIN">
            <a class="button" href="http://localhost/PHP/registration.php" style="display:block;text-align:center" value="">REGISTR</a>
                <center> Forgot <a href="#"> password? </a></center>
		</div>
	</form>
</body>
</html>

<?php 
if (isset($_POST['login'])) {
	$email = $_POST['username'];
	$password = $_POST['password'];
	$sql = 'select * from user where email="'.$email.'" and password="'.$password.'"';
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC); 
	$count = mysqli_num_rows($query);  
	if ($count == 1) {
		echo "<script>window.location.replace('http://localhost/PHP/product.php');</script>";
	}
	else {
		echo "<script>alert('invalid User');</script>";
	}
}

?>