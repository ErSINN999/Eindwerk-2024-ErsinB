<?php
$host="localhost"; 
$username="root";
$password="usbw";
$db="primefit";

$conn = new mysqli($host, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>