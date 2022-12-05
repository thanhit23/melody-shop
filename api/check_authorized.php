<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result_email = clientSelectAll("`id_user`, `email`, `username`, `role`", "email = '$email'");
  $result_pass = clientSelectAll("password", "password = '$password'");
  $res = ['status' => true, 'message' => '', 'data' => null];
  if (count($result_email) && count($result_pass)) {
    $res['status'] = true;
    $res['message'] = 'Login successfully';
    $res['data'] = null;
    foreach($result_email as $value) {
      $_SESSION['email'] = $value['email'];
      $_SESSION['fullName'] = $value['username'];
      $_SESSION['role'] = $value['role'];
      $_SESSION['idUser'] = $value['id_user'];
    }
  } else if (!count($result_email)) {
    $res['status'] = false;
    $res['message'] = 'Email không đúng, vui lòng thử lại';
    $res['data'] = null;
  } else if (!count($result_pass)) {
    $res['status'] = false;
    $res['message'] = 'Mật khẩu không đúng, vui lòng thử lại';
    $res['data'] = null;
  } else {
    $res['status'] = false;
    $res['message'] = 'Tên tài khoản của bạn hoặc Mật khẩu không đúng, vui lòng thử lại';
    $res['data'] = null;
  }

  echo json_encode($res);
