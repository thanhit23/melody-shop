<?php
  session_start();
  $_SESSION['user'] = null;
  $_SESSION['userid'] = null;
  $res = ['status' => true, 'message' => 'successfully', 'data' => null];
  echo json_encode($res);
