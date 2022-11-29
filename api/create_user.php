<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');

  $result = clientSelectAll('email, role');
  $res = ['status' => true, 'message' => '', 'data' => null];
  $error = false;

  foreach($result as $value) {
    if ($_POST['email'] === $value['email']) {
      $res['status'] = false;
      $res['message'] = "Email đã tồn tại";
      $res['data'] = $dbemail == $email;
      $error = true;
    }
  }

  if (!$error) {
    $_SESSION['role'] = null;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['fullName'] = $_POST['fullName'];
    clientInsert($_POST['password'], $_POST['fullName'], $_POST['email']);
    $res['message'] = "Successfully created user.";
  };
  echo json_encode($res);
