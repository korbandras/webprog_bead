<?php

$connection = mysqli_connect('localhost','root');
if(!$connection){
    die("connection failed: ".mysqli_connect_error());
}

mysqli_select_db($connection,"webprog");

$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];

$query = "INSERT INTO `webprog_data`(`name`,`email`,`review`) VALUES ('$user','$email','$review') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>