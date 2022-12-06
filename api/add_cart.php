<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/cart.php');
  $res = ['status' => true, 'message' => '', 'data' => null];

  $id = (int)$_POST["id_product"];
  $quantity = (int)$_POST["quantity"];
  $id_user = (int)$_POST['id_user'];
  $result = checkExistItem($id, $id_user);
  if (boolval($result)) :
    foreach ($result as $value ) :
      $result_quantity = (int) $value["quantity"] + $quantity;
      updateQuantity($result_quantity, $id);
      $res['message'] = 'Update successfully';
    endforeach;
  endif;
  if (!boolval($result)) :
    insertCart($id_user, $id, $quantity);
    $res['message'] = 'Successfully';
  endif;

  echo json_encode($res);
