<?php
$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 

// Create connection (łącze się z moją bazą danych)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection (sprawdzam połączenie z bazą danych)
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>