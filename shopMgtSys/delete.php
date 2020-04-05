<?php
if (isset($_GET['id'])){
    require 'connect.php';
    extract($_GET);
    $id=$id;

    $delete_query = "DELETE FROM `Products` WHERE id = $id";
    $delete = mysqli_query($dbconnect,$delete_query);
    if ($delete){
        header("location:products.php");
    }else{
        echo "Delete failed";
    }


}