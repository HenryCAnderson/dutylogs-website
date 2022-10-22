<?php
$hostName = "IP";
$userName = "USER_NAME";
$password = "PASSWORD";
$databaseName = "DATABASE_NAME";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>