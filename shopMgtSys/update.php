<?php
if (isset($_GET['id'])){
    extract($_GET);

    $received_id = $id;
    $received_product = $name;
    $received_quantity = $quantity;
    $received_price = $price;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css"
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="a">Update</h1>
        <form action="update_handler.php" method="post">
            <input type="hidden" value="<?php echo $received_id;?>" name="id">
            <input type="text" placeholder="Enter name" name="product" value="<?php echo $received_product;?>"><br><br>
            <input type="number" placeholder="Enter quantity" name="quantity" value="<?php echo $received_quantity;?>"><br><br>
            <input type="number" placeholder="Enter price" name="price" value="<?php echo $received_price;?>"><br><br>
            <input type="submit" value="Confirm" name="save">
        </form>
        <a href="products.php">Back</a>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>
