<?php
  session_start();
  $result = ['status' => false];
  
  if ($_POST) {
    if ($_SESSION['user'] != null) {
      $result['status'] = true;
    }
  }

  echo json_encode($result);
  