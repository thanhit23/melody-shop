<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <title>Sunny Shop</title>
  <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/helmet.php')
  ?>
  <link rel="stylesheet" href="/resources/css/header.css">
  <link rel="stylesheet" href="/resources/css/slide.css">
  <link rel="stylesheet" href="/resources/css/login.css">
  <script src="https://kit.fontawesome.com/5b900cdeed.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/header.php');
?>
<section class="breadscrumb-section pt-0">
  <div class="container-fluid-lg">
    <div class="row">
      <div class="col-12">
        <div class="breadscrumb-contain">
          <h2 class="mb-2">Register</h2>
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="/home">
                  <i class="fa-solid fa-house"></i>
                </a>
              </li>
              <li class="breadcrumb-item active">Register</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="log-in-section section-b-space">
  <div class="container-fluid-lg w-100">
    <div class="row">
      <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
        <div class="image-contain">
          <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/sign-up.png" class="img-fluid"
               alt="">
        </div>
      </div>
      <div class="col-xxl-4 col-xl-5 col-lg-6 me-auto">
        <div class="log-in-box">
          <div class="log-in-title">
            <h3>Welcome To Fastkart</h3>
            <h4>Create New Account</h4>
          </div>
          <div class="input-box">
            <form method="post" class="row g-4">
              <div class="form-outline error-container active-error">
                <i class="fa-solid fa-circle-xmark"></i>
                <span class="error-message-form"></span>
              </div>
              <div class="col-12">
                <div class="form-floating theme-form-floating log-in-form">
                  <input type="text" class="form-control" id="fullName" placeholder="Full Name" name="fullName">
                  <label for="fullName" class="form-label">Full Name</label>
                </div>
                <span class="form-message"></span>
              </div>
              <div class="col-12">
                <div class="form-floating theme-form-floating log-in-form">
                  <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                  <label for="email" class="form-label">Email Address</label>
                </div>
                <span class="form-message"></span>
              </div>
              <div class="col-12">
                <div class="form-floating form-floating-password theme-form-floating log-in-form">
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                  <label for="password" class="form-label">Password</label>
                  <button type="button" class="show-password" id="show-password">
                    <img src="/resources/images/icon/eyes.png" alt="" width="10"/>
                  </button>
                  <button type="button" class="hidden-password none" id="hidden-password">
                    <img src="/resources/images/icon/eyes-slash.png" alt="" width="10"/>
                  </button>
                </div>
                <span class="form-message"></span>
              </div>
              <div class="col-12">
                <div class="form-floating theme-form-floating log-in-form">
                  <input type="password" class="form-control" id="re_password" placeholder="Re-Password" name="re_password">
                  <label for="re_password" class="form-label">Re-Password</label>
                </div>
                <span class="form-message"></span>
              </div>
              <div class="col-12">
                <div class="forgot-box">
                  <div class="form-check ps-0 m-0 remember-box">
                    <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree with
                      <span>Terms</span> and <span>Privacy</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button id="btn-sign-up" class="btn btn-animation w-100" type="submit" name="btn-sign-up">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="other-log-in">
            <h6>or</h6>
          </div>
          <div class="log-in-button">
            <ul>
              <li>
                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" class="btn google-button w-100">
                  <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/google.png" class="blur-up lazyload" alt="">
                  Sign up with Google
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/" class="btn google-button w-100">
                  <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/facebook.png" class="blur-up lazyload" alt=""> Sign up with Facebook
                </a>
              </li>
            </ul>
          </div>
          <div class="other-log-in">
            <h6></h6>
          </div>
          <div class="sign-up-box">
            <h4>Already have an account?</h4>
            <a href="/login">Log In</a>
          </div>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
    </div>
  </div>
</section>
<script src="https://themes.pixelstrap.com/fastkart/assets/js/feather/feather.min.js"></script>
<script src="https://themes.pixelstrap.com/fastkart/assets/js/feather/feather-icon.js"></script>
<script src="https://themes.pixelstrap.com/fastkart/assets/js/lazysizes.min.js"></script>
<script src="/resources/js/const.js"></script>
<script src="/resources/js/register.js"></script>
</body>
</html>
