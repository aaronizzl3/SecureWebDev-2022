<?php

// Define credentials for connecting to the server
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'jrutherford');
define('DB_PASSWORD', 'Password12');
define('DB_NAME', 'jrutherford_eCommerce');

// Connect to the SQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Test connection
if($conn){
  echo '<h1>Connected to MySQL</h1>';
  echo mysqli_connect_error();
}
else{
  echo '<h1>MySQL Server is not connected</h1>';
  echo mysqli_connect_error();
}
?>
