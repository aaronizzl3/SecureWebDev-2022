<?php

// Connection
$conn = mysqli_connect("localhost", "jrutherford", "Password12", "jrutherford_eCommerce");

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else{
  echo "Successfully connected to MySQL.<br><br>";
}

?>
