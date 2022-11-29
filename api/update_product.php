<?php
  require('../dbConnection.php');
  $name = $_POST["name_product"];
  $src = $_POST["src_img"];
  $price_of = $_POST["price_of"];
  $price_new = $_POST["price_new"];
  $quantity = $_POST["quantity_sold"];
  $percentage = (int)$_POST["percentage"];
  $sql = "INSERT INTO `products`(`name`, `src`, `price`, `percentage`, `quantity_sold`) VALUES ('$name','[$src]','{\"price_of\": \"$price_of\",\"price_new\": \"$price_new\"}',$percentage,'$quantity')";
  $conn->query($sql);