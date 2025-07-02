<?php
include('dbcon.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];



$query = "INSERT INTO `users` (`name`,`mobile`,`email`,`password`) VALUES ('$name','$mobile','$email','$password')";
$run = mysqli_query($con, $query);

if ($run) {
    echo "Data inserted successfully";
    header('location:index.php');
} else {
    echo "Error";
    header('location:index.php');
}
