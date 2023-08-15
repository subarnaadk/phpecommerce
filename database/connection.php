<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ecommerece";

$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
  die("connection failed". $conn->connect_error);

}
// echo "connect successful";
?>
