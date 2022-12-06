<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');
  $res = ['status' => true, 'message' => '', 'data' => null];

  $id = (int) $_POST["id"];
  $name = $_POST["name"];
  $view = (int) $_POST["view"];
  $price = (int) $_POST["price"];
  $type = (int) $_POST["type"];
  $discount = (int) $_POST["discount"];
  $description = $_POST["description"];

  productUpdate($name, $price, $discount, $description, $view, $type, $id);
  $res['message'] = "Update Successfully.";

echo json_encode($res);
