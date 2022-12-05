<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <title>Melody Shop</title>
  <?php
  require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/helmet.php')
  ?>
  <link rel="stylesheet" href="/resources/css/header.css">
  <link rel="stylesheet" href="/resources/css/slide.css">
  <link rel="stylesheet" href="/resources/css/login.css">
  <style>
    .hidden {
      overflow: hidden;
      height: 0px;
      margin: 0;
      padding: 0;
      border: 0;
    }
  </style>
</head>
<body>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/header.php');
?>
<section class="log-in-section section-b-space forgot-section">
  <div class="container-fluid-lg w-100">
    <div class="row">
      <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
        <div class="image-contain">
          <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/forgot.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="log-in-box">
            <div class="log-in-title">
              <h3>Welcome To Melody</h3>
              <h4>Change your password</h4>
            </div>
            <div class="input-box">
              <form class="row g-4">
                <input value="<?= $_SESSION['email'] ?>" id="email" type="text" class="hidden">
                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    <label for="password">Password</label>
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-12">
                  <button id="submit" class="btn btn-animation w-100" type="submit">Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/footer.php');
?>
<script src="../../resources/js/forgot.js"></script>
</body>
</html>
