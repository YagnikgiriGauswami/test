<?php
include('connection.php');
?>
<html>
    <head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration page</title>
        <style>
body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url() no-repeat;
	background-size: cover;
}
.reg-box{
    width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
}
.reg-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #191970;
	margin-bottom: 30px;
    border-radius: 30px 0px;
	padding: 8px;
}
.reg-textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 2px solid #191970;
}
.fa {
	width: px;
	float: left;
	text-align: center;
}
.reg-textbox input {
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
            <div class="reg-box">
                <h1>Registr</h1>

            <div class="reg-textbox">
				<i class="fa fa-user"></i>
				<input type="text" placeholder=" Enter Name"name="Name" value="">
			</div>

            <div class="reg-textbox">
				<i class="fa fa-envelope"></i>
				<input type="text" placeholder="Enter Email"name="email" value="">
			</div>

            <div class="reg-textbox">
				<i class="fa fa-Phone"></i>
				<input type="number" placeholder="Enter Number"name="phonenumber" value="">
			</div>

            <div class="reg-textbox">
				<i class="fa fa-lock"></i>
				<input type="password" placeholder="Enter Password"name="password" value="">
			</div>

            <input class="button" type="submit"name="register" value="Registr">

            </div>

        </form>
    </body>

</html>
<?php
	if (isset($_POST['register'])) {
		$name = $_POST['Name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$mobile = $_POST['phonenumber'];

		$sql = "INSERT INTO user (name, email,password,mobile) VALUES ('$name','$email', '$password','$mobile')";
		if ($conn->query($sql) === TRUE) {
			echo "<script>window.location.replace('http://localhost/PHP/login.php');</script>";
		  } else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		  }

	}
?>