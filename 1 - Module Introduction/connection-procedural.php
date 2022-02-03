<?php

$host = "localhost";
$username = "";
$password = "";
$db = "";

$conn = mysqli_connect($host, $username, $password, $db);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else {
  echo "Connected to MySQL.";
}

?>
