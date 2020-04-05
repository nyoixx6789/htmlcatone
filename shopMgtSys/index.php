<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1 class="a">Shop Management System</h1>
        <form action="save_handler.php" method="post">
            <div class="form-group">
                <input type="text" name="product" placeholder="Product name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="quantity" placeholder="Quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="Price" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-primary btn-block">
            <a href="products.php" class="btn btn-outline-primary btn-block">View Products</a>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

</body>
</html>
