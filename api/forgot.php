<?php
  session_start();
  require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');
  $password = md5($_POST['password']);
  $email = $_POST['email'];
  clientChangePassword("$password", "$email");
  $res = ['status' => true, 'message' => 'successfully', 'data' => null];
  echo json_encode($res);
