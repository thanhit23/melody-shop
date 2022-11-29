<?php
  session_start();
  require ("../dbConnection.php");
  $email = $_POST['email'];
  $sql_id = "SELECT id FROM `users` WHERE email = \"$email\"";
  $result = $conn->query($sql_id);
  $res = ['status' => true, 'message' => '', 'data' => null];
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $quantity = $_GET["quantity"];
    $id_product = $_GET["idProductAdded"];
    $sql = "INSERT INTO `cart`(`quantity`, `id_product`, `id_user`) VALUES ('$quantity','$id_product','$id')";
    $res['status'] = true;
    $res['message'] = "Successfully";
  } else {
    $res['status'] = false;
    $res['message'] = "Failed";
  }

  echo json_encode($res);
