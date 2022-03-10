<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>

<body>
  <h1> You are logged in! </h1>
</br>
  <a href="logout.php">Logout here</a>.</p>

  <div class="form-group">
    <form method="get" action="logout.php">
      <input type="submit" class="btn btn-primary" value="Logout">
    </form>
  </div>

</body>

</html>
