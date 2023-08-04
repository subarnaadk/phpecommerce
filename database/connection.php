<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bca3rd";

$conn = new mysqli($servername, $username, $password, $db);

if($conn -> connect_error){
  die("connection failed". $conn->connect_error);

}
echo "connect successful";
?>
