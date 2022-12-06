<?php
require($_SERVER['DOCUMENT_ROOT'] . '/helper/template.php');
requiredTemplateAdmin('helmet');
?>
<body class="g-sidenav-show bg-gray-100">
<div class="position-absolute w-100 min-height-300 top-0"
     style="background-image: url('../../resources/images/banner.png'); background-position-y: 50%;">
  <span class="mask bg-primary opacity-6"></span>
</div>
<?php requiredTemplateAdmin('navigate_bar'); ?>
<div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
    <div class="container-fluid py-1">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
        </ol>
        <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
      </nav>
      <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li>
          <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
               aria-expanded="false">
              <i class="fa fa-bell cursor-pointer"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="../../resources/images/admin/thanh/avatar.jpeg" alt="profile_image"
                 class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Nguyễn Duy Thành
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              Public Relations
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                   data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                  <i class="ni ni-app"></i>
                  <span class="ms-2">App</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                   data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                  <i class="ni ni-email-83"></i>
                  <span class="ms-2">Messages</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-profile">
          <img src="../../resources/images/admin/thanh/cover.jpeg" alt="Image placeholder" class="card-img-top"
               style="object-fit: cover;height: 200px;">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="https://www.facebook.com/thanhit.23/">
                  <img src="../../resources/images/admin/thanh/avatar.jpeg" alt=""
                       class="rounded-circle img-fluid border border-2 border-white"
                       style="object-fit: cover;height: 100px;width: 100px;">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
              <a href="https://www.facebook.com/thanhit.23/"
                 class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
              <a href="https://www.facebook.com/messages/t/100037427593999"
                 class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-center">
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">1.000.000</span>
                    <span class="text-sm opacity-8">Follower</span>
                  </div>
                  <div class="d-grid text-center mx-4">
                    <span class="text-lg font-weight-bolder">1</span>
                    <span class="text-sm opacity-8">Following</span>
                  </div>
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">89</span>
                    <span class="text-sm opacity-8">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <h5>
                Nguyễn Duy Thành<span class="font-weight-light">, 19</span>
              </h5>
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Manager - Fix Bug Team
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Cao Đẵng FPT Polytechnic
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <img src="../../resources/images/admin/hien/cover.jpeg" alt="Image placeholder" class="card-img-top"
               style="object-fit: cover;height: 200px;">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="https://www.facebook.com/TTH235">
                  <img src="../../resources/images/admin/hien/avatar.jpeg" alt=""
                       class="rounded-circle img-fluid border border-2 border-white"
                       style="object-fit: cover;height: 100px;width: 100px;">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
              <a href="https://www.facebook.com/TTH235" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
              <a href="https://www.facebook.com/messages/t/100011715117686"
                 class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-center">
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">1.000.000</span>
                    <span class="text-sm opacity-8">Follower</span>
                  </div>
                  <div class="d-grid text-center mx-4">
                    <span class="text-lg font-weight-bolder">1</span>
                    <span class="text-sm opacity-8">Following</span>
                  </div>
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">89</span>
                    <span class="text-sm opacity-8">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <h5>
                Trương Thanh Hiền<span class="font-weight-light">, 19</span>
              </h5>
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Tester - Fix Bug Team
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Cao Đẵng FPT Polytechnic
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <img src="../../resources/images/admin/van/cover.webp" alt="Image placeholder" class="card-img-top"
               style="object-fit: cover;height: 200px;">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="https://www.facebook.com/TTH235">
                  <img src="../../resources/images/admin/van/300151902_1232585827564693_2644333471529424567_n.jpeg"
                       alt="" class="rounded-circle img-fluid border border-2 border-white"
                       style="object-fit: cover;height: 100px;width: 100px;">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
              <a href="https://www.facebook.com/profile.php?id=100024398630064"
                 class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
              <a href="https://www.facebook.com/messages/t/100024398630064"
                 class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-center">
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">1</span>
                    <span class="text-sm opacity-8">Follower</span>
                  </div>
                  <div class="d-grid text-center mx-4">
                    <span class="text-lg font-weight-bolder">0</span>
                    <span class="text-sm opacity-8">Following</span>
                  </div>
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">89</span>
                    <span class="text-sm opacity-8">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <h5>
                Tưởng Thị Hồng Vân<span class="font-weight-light">, 19</span>
              </h5>
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Staff - Fix Bug Team
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>Cao Đẵng FPT Polytechnic
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php requiredTemplateAdmin('footer'); ?>
  </div>
</div>
<?php requiredTemplateAdmin('script'); ?>
</body>
</html>
