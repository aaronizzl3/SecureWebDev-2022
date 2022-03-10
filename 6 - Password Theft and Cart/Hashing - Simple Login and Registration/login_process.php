<?php
// Include connection to database
include("connection.php");

// Take data from the form and attach to variables
$username = $_POST["username"];
$password = $_POST["password"];

// Find matching rows and find out if we have a match
$sql = "SELECT * FROM tblusers WHERE username='$username' LIMIT 1";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

// If we have a match, check the password
if($rows > 0){
  $data = mysqli_fetch_assoc($result);
  if(password_verify($password, $data["password"])){
    echo "Success";
  }
  else{
    echo "Password does not match.";
  }
}else{
  echo "Username does not match.";
}
?>
    // BREAK UNTIL 10:57
