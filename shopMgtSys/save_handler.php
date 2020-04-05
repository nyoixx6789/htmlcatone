<?php
if (isset($_POST['submit'])){
    require 'connect.php';

    //start receiving data from user
    $name = mysqli_real_escape_string($dbconnect,$_POST['product']);
    $quantity = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
    $price = mysqli_real_escape_string($dbconnect,$_POST['price']);
    $savequery = "INSERT INTO `Products`(`id`, `Product`, `Quantity`, `Price`) VALUES (null,'$name','$quantity','$price')";

    //save using mysqli_query
    $save = mysqli_query($dbconnect,$savequery);

    //check if saving was successful
    if ($save){
        // echo "Saved successfully";
        header("location:index.php");
    }else{
        echo "Save failed";
    }
}

