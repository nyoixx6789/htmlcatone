<?php


$dbconnect = mysqli_connect("localhost","root","","MyShop");
if (!$dbconnect){
    die("Connection failed");
}