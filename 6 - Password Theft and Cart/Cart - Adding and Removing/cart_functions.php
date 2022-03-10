<?php

// Add / Update Product
function Add($conn, $productID){
  $sql = "SELECT * FROM tblproducts WHERE id='$productID' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if(array_search($row["id"], array_column($_SESSION["cart"], "id")) !== FALSE){
    $key = array_search($row["id"], array_column($_SESSION["cart"], "id"));
    $_SESSION["cart"][$key]["quantity"]++;
  }
  else
  {
    $toAdd = array(
      "id" => $row["id"],
      "name" => $row["name"],
      "price" => $row["price"],
      "quantity" => 1
    );
    array_push($_SESSION["cart"], $toAdd);
  }
}

// Remove Product
function Remove($conn, $productID){
  if(isset($_SESSION["cart"]) && array_search($productID, array_column($_SESSION["cart"], "id")) !== FALSE){
    $key = array_search($productID, array_column($_SESSION["cart"], "id"));
    if($_SESSION["cart"][$key]["quantity"] == 1){
      unset($_SESSION["cart"][$key]);
    }
    else{
      $_SESSION["cart"][$key]["quantity"]--;
    }
  }
}

// Empty Cart
function EmptyCart(){
  $_SESSION["cart"] = array();
}

 ?>
