<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css"
</head>
<body>
    <table class="table table-dark table-hover">
        <tr>
            <th>NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        <?php
            require 'connect.php';
            $select_query = "SELECT * FROM `Products` WHERE 1";
            $products = mysqli_query($dbconnect,$select_query);
            while ($row = mysqli_fetch_assoc($products)){
                extract($row);
                echo "<tr>
                        <td>$Product</td>
                        <td>$Quantity</td>
                        <td>$Price</td>
                        <td><a href='delete.php?id=$id' class='btn btn-danger'>DELETE</a></td>
                        <td><a href='update.php?id=$id&name=$Product&quantity=$Quantity&price=$Price' class='btn btn-primary'>UPDATE</a></td>
                   </tr>";
            }
        ?>
    </table>
</body>
</html>
