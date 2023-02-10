<?php
$servername = "db";
$username = "capp1";
$password = "password";
$dbname = "capp1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>