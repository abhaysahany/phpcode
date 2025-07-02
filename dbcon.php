<?php


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'phpcode';

$con = mysqli_connect($host, $user, $password, $database);

if ($con) {
    // echo "Connected";
} else {
    echo "Not Connected";
}
