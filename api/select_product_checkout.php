<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/cart.php');
  $res = ['status' => true, 'message' => '', 'data' => null];
  $id = json_decode($_POST['id_product']);
  function handle($n)
  {
    $id = (int) $n;
    updateQuickPayment($id);
  };
  array_map("handle", $id);
  $res['message'] = 'Update successfully';
  echo json_encode($res);
