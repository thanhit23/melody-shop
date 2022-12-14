<!DOCTYPE html>
<html lang="en">
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');
require($_SERVER['DOCUMENT_ROOT'] . '/global.php');
require($_SERVER['DOCUMENT_ROOT'] . '/helper/template.php');

if (isset($_POST['btn-submit'])) {
  $name = $_POST['name'];
  $price = (int) $_POST['price'];
  $discount = (int) $_POST['discount'];
  $image = save_file("uploadFile", $_SERVER['DOCUMENT_ROOT']. '/resources/images/uploads/');
  $description = $_POST['description'];
  $special = (int) $_POST['special'];
  $view = (int) $_POST['view'];
  $type = (int) $_POST['type'];
  productInsert($name, $price, $discount, '["/resources/images/uploads/'.$image.'"]', $description, $special, $view, $type);
}
?>
<head>
  <?php requiredTemplateAdmin('helmet'); ?>
  <link rel="stylesheet" href="../../resources/css/login.css" />
</head>
<body class="g-sidenav-show bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php requiredTemplateAdmin('navigate_bar'); ?>
<main class="main-content position-relative border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
       data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:void(0);">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Add Product</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Add Product</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
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
  <form method="post" enctype="multipart/form-data">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Add Product</p>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">T??n</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="T??n S???n Ph???m...">
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">????n Gi??</label>
                    <input id="price" name="price" class="form-control" type="number" placeholder="????n Gi??...">
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">Gi???m Gi??</label>
                    <input id="discount" name="discount" class="form-control" type="number" placeholder="Gi???m Gi??...">
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">H??nh ???nh</label>
                    <input id="uploadFile"  name="uploadFile" class="form-control" type="file">
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">
                      M?? t???
                    </label>
                    <textarea id="description" name="description" rows="5" cols="36"></textarea>
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="example-text-input" class="form-control-label">L?????t Xem</label>
                    <input id="view" name="view" class="form-control" type="number" placeholder="L?????t Xem C???a S???n Ph???m...">
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group log-in-form">
                    <label for="special" class="form-control-label">?????c Bi???t</label>
                    <select name="special" id="special" style="border: 1px solid #d2d6da;font-size: 0.875rem;font-weight: 400;line-height: 1.4rem;color: #495057;">
                      <option value="1">C??</option>
                      <option value="2">Kh??ng</option>
                    </select>
                  </div>
                  <span class="form-message"></span>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="type" class="form-control-label">Lo???i</label>
                    <select name="type" id="type" style="border: 1px solid #d2d6da;font-size: 0.875rem;font-weight: 400;line-height: 1.4rem;color: #495057;">
                      <option value="0">Ch???n Lo???i</option>
                      <option value="2">??o</option>
                      <option value="3">Qu???n</option>
                      <option value="4">??o kho??c</option>
                    </select>
                  </div>
                  <span class="form-message"></span>
                </div>
              </div>
            </div>
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button id="btn-submit" name="btn-submit" class="btn btn-primary btn-sm ms-auto">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php requiredTemplateAdmin('footer'); ?>
    </div>
  </form>
</main>
<?php requiredTemplateAdmin('script'); ?>
<script src="../../resources/js/const.js"></script>
<script src="../../resources/js/add-product.js"></script>
</body>
</html>
