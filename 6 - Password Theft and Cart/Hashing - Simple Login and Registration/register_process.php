<?php
// Include connection to database
include("connection.php");

// Take data from the form and attach to variables
$username = $_POST["username"];
$password = $_POST["password"];

// Hash the password ready for insert
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the data into the table
$sql = "INSERT INTO tblusers (username, password) VALUES ('$username', '$hashed_password')";

// Run the query
if(mysqli_query($conn, $sql)){
  echo "Registered successfully.";
}
else {
  echo "Error registering.";
}
