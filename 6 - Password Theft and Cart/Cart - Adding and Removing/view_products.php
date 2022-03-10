<?php
// Includes
include("inc/connection.inc.php");
include("cart_functions.php");

// Start Session
session_start();

// Messages
if(isset($_SESSION["message"])){
  echo $_SESSION["message"]."<br>";
  unset($_SESSION["message"]);
}

// CART FUNCTIONS
// Add product to cart
if(isset($_GET["add"]) && $_GET["add"] == true){
  Add($conn, $_GET["id"]);
}

// Remove product from cart
if(isset($_GET["remove"]) && $_GET["remove"] == true){
  Remove($conn, $_GET["id"]);
}

// Empty cart
if(isset($_GET["empty"]) && $_GET["empty"] == true){
  EmptyCart();
}

// View Products
$sql = "SELECT * FROM tblproducts";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
  echo "ID: ".$row["id"]."<br>";
  echo "Name: ".$row["name"]."<br>";
  echo "Price: ".$row["price"]."<br>";
  echo "<a href='view_products.php?id=".$row["id"]."&add=true'>Add Product</a><br>";
  echo "<a href='view_products.php?id=".$row["id"]."&remove=true'>Remove Product</a><br><br>";
}

// View Cart
echo "<h1>Cart</h1>";

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo "<br><a href='view_products.php?empty=true'>Empty Cart</a>";
?>
