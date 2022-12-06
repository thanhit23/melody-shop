<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');

  $res = ['status' => true, 'message' => '', 'data' => null];
  $id = $_POST['id'];
  commodityDelete($id);
  $res['message'] = "Delete Successfully.";

  echo json_encode($res);
