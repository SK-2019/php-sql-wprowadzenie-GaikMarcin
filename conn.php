<?php
$servername = "mysql-marcin-gaik.alwaysdata.net";
$username = "217182";
$password = "Marcin123";
$dbname = "marcin-gaik_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>