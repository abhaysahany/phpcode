<?php
include('dbcon.php');

$id = $_GET['id'];

$query = "DELETE FROM `users` WHERE `id`= $id";
$run = mysqli_query($con,$query);
if ($run) {
    echo "Data deleted successfully to database";
   
    header('location:read.php');
} else {
    echo "Error to new";
    
    header('location:read.php');
}
