<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "arc";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(!$conn) {
    echo "Connection Failed";
}

