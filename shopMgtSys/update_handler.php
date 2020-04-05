<?php
if (isset($_POST['save'])){
    require 'connect.php';
    $id = mysqli_real_escape_string($dbconnect,$_POST['id']);
    $updated_product = mysqli_real_escape_string($dbconnect,$_POST['product']);
    $updated_quantity = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
    $updated_price = mysqli_real_escape_string($dbconnect,$_POST['price']);

    //connect to database
    $dbconnect = mysqli_connect("localhost","root","","MyShop");

    //prepare update query
    $update_query = "UPDATE `Products` SET 'Product`='$updated_product',`Quantity`='$updated_quantity',`Price`='$updated_price' WHERE id = '$id'";

    //execute query with mysqli_query
    $update = mysqli_query($dbconnect,$update_query);

    //check if update was successful
    if ($update){
        //redirect to view users table to see changes
        header("location:products.php");
    }else{
        die("Update Failed");
    }
}