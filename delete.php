<?php
include('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id=$id";
$result= $conn->query($sql);
if ($result) {
    header("Location: http://localhost/PHP/product.php");
    exit();
}
else {
    echo $conn->error;
}
?>