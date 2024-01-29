<?php
$url = "localhost";
$user = "root";
$password = "";
$database = "cars";

$conn = mysqli_connect($url, $user, $password, $database);

if(!$conn){
    die($conn);
    echo "Error connecting to database...";
}