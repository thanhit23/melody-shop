<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');
if (isset($_POST['btn-login'])) {
  $result = clientSelectAll('password, email, full_name, role');
  foreach($result as $value) {
    $email = $value['email'];
    $password = $value['password'];
    if ($_POST['email'] === $email && $_POST['password'] === $password) {
      $_SESSION['email'] = $value['email'];
      $_SESSION['fullName'] = $value['full_name'];
      $_SESSION['role'] = $value['role'];
      $_SESSION['idUser'] = $value['id'];
      echo ("<script>location.href='/home'</script>");
    }
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Sunny Shop</title>
  <?php
  require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/helmet.php')
  ?>
  <link rel="stylesheet" href="/resources/css/header.css">
</head>
<body>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/header.php');
?>
<section class="breadscrumb-section pt-0 mt-3">
  <div class="container-fluid-lg">
    <div class="row">
      <div class="col-12">
        <div class="breadscrumb-contain">
          <h2 class="mb-2">Log In</h2>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="/">
                  <i class="fa-solid fa-house"></i>
                </a>
              </li>
              <li class="breadcrumb-item active">Log In</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="log-in-section background-image-2 section-b-space">
    <div class="container-fluid-lg w-100">
      <div class="row">
        <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
          <div class="image-contain">
            <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/log-in.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
          <div class="log-in-box">
            <div class="log-in-title">
              <h3>Welcome To Fastkart</h3>
              <h4>Log In Your Account</h4>
            </div>
            <div class="input-box">
              <form method="post" class="row g-4">
                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form" style="margin-bottom:25px;">
                    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                    <label for="email">Email Address</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating theme-form-floating log-in-form">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="forgot-box" style="margin: 10px 0;">
                    <div class="form-check ps-0 m-0 remember-box">
                      <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                    </div>
                    <a href="/forgot" class="forgot-password">Forgot Password?</a>
                  </div>
                </div>
                <div class="col-12">
                  <button name="btn-login" class="btn btn-animation w-100 justify-content-center" type="submit">
                    Log In
                  </button>
                </div>
              </form>
            </div>
            <div class="other-log-in">
              <h6>or</h6>
            </div>
            <div class="log-in-button">
              <ul>
                <li>
                  <a href="https://www.google.com/" class="btn google-button w-100">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/google.png"
                         class="blur-up lazyload"
                         alt=""> Log In with Google
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/" class="btn google-button w-100">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/facebook.png"
                         class="blur-up lazyload"
                         alt=""> Log In with Facebook
                  </a>
                </li>
              </ul>
            </div>
            <div class="other-log-in">
              <h6></h6>
            </div>
            <div class="sign-up-box">
              <h4>Don't have an account?</h4>
              <a href="/signup">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/footer.php')
?>
</body>
</html>
