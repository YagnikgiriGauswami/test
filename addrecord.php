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
        <title>add record</title>
        <style>
body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url() no-repeat;
	background-size: cover;
}
.rec-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
}
.rec-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #191970;
	margin-bottom: 30px;
    border-radius: 30px 0px;
	padding: 13px;
}
.rec-textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #191970;
}
.rec-textbox input {
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
    <form method="POST" enctype="multipart/form-data">
            <div class="rec-box">
                <h1>Add Record</h1>

            <div class="rec-textbox">
				<input type="number" placeholder=" Enter product id"name="id" value="">
			</div>

            <div class="rec-textbox">
				<input type="text" placeholder="Enter product name"name="name" value="">
			</div>

            <div class="rec-textbox">
				<input type="number" placeholder="Enter product price"name="price" value="">
			</div>

            <div class="rec-textbox">
				<input type="number" placeholder="Enter product UPC"name="UPC" value="">
			</div>

            <div class="rec-textbox">
				<input type="number" placeholder="Enter product status"name="status" value="">
			</div>

            <div class="rec-textbox">
            <input type="file" name="pic" ><br/>
            </div>  
            
            <input class="button" type="submit"name="insert" value="insert">
        </div>

        </form>
    </body>
</html>

<?php
    if (isset($_POST['insert']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $UPC = $_POST['UPC'];
        $status = $_POST['status'];

        $filename = $_FILES["pic"]["name"];
        $tempname = $_FILES["pic"]["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname,$folder);

            $sql = "INSERT INTO product (id,name, price,UPC,status,image) VALUES ('$id','$name', '$price','$UPC','$status','$folder')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('insert product');</script>";
            } 

    }
    
?>
