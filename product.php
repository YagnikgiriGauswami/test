<?php
include('connection.php');
?>
<html>
    <head>
        <title>products table</title>
        <style>
            table, th, td {
                    border:1px solid black;
                    background-color:lightblue;
                    }
            .button{
                background-color: #9370DB;
                border-radius: 10px;
                padding: 8px;
                width: 30%;
            }

        </style>
    </head>
    <body>
        <center><h1>products table</h1></center>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>UPC</th>
            <th>Status</th>
            <th>Image</th>
            <th><a class="button" href="http://localhost/PHP/addrecord.php" value="">add Product</a></th>
        </tr>
        <?php
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);
            // echo json_encode($result);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {              
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['UPC']?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['image']?></td>
            <td><a  class="button"type="submit" name="delete" href="http://localhost/PHP/delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click','.button',function(){
            });
        });
    </script>
</html>