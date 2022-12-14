<?php
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');
require($_SERVER['DOCUMENT_ROOT'] . '/helper/template.php');
requiredTemplateAdmin('helmet');
?>
<body class="g-sidenav-show bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php requiredTemplateAdmin('navigate_bar'); ?>
<main class="main-content position-relative border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
       data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/admin">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page"></li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Users</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-bell cursor-pointer"></i>
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
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
            <ul class="mt-0 dropdown-menu dropdown-menu-end px-2 py-1 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <p class="m-0">logout</p>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>User Manager</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Avatar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = clientSelectAll('*');
                if ($result) {
                  foreach ($result as $value) {
                    $id = $value['id_user'];
                    $name = $value['username'];
                    $imageDb = $value['image'];
                    $img = json_decode($imageDb, true);
                    $email = $value['email'];
                    ?>
                  <tr>
                    <td>
                      <p class="text-xs text-center font-weight-bold mb-0"><?= $id ?></p>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $name ?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs text-center font-weight-bold mb-0"><?= $email ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <img width="40" height="40" src="<?= $img[0] ?>" />
                    </td>
                  </tr>
                <?php
                  }
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $idUpdate = $_GET['IdUpdate'];
    if ($idUpdate) {
    $result = commoditySelectAll("id = $idUpdate");
      if ($result) {
        foreach ($result as $value) {
          ?>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header pb-0">
                  <div class="d-flex align-items-center">
                    <p class="mb-0">Edit Product</p>
                  </div>
                </div>
                <form method="post">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">T??n</label>
                          <input name="nameProduct" class="form-control" type="text" value="<?php echo $value['name'] ?>" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Gi??</label>
                          <input name="priceProduct" class="form-control" type="number" value="<?php echo $value['unit_price'] ?>" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Gi???m gi??</label>
                          <input name="discountProduct" class="form-control" type="text" value="<?php echo $value['discount'] ?>" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">M?? t???</label>
                          <input name="descriptionProduct" class="form-control" type="text" value="<?php echo $value['description'] ?>" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label">L?????t xem</label>
                          <input name="viewProduct" class="form-control" type="text" value="<?php echo $value['view'] ?>" placeholder="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="type" class="form-control-label">Lo???i</label>
                          <select name="type" id="type" style="border: 1px solid #d2d6da;font-size: 0.875rem;font-weight: 400;line-height: 1.4rem;color: #495057;">
                            <option value="0">Ch???n Lo???i</option>
                            <option <?php if($value['id_type'] == 1) { echo 'selected'; } ?> value="1">Samsung</option>
                            <option <?php if($value['id_type'] == 2) { echo 'selected'; } ?> value="2">Iphone</option>
                            <option <?php if($value['id_type'] == 3) { echo 'selected'; } ?> value="3">Redmi</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                      <button name="btn-update" class="btn btn-primary btn-sm ms-auto">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <?php
        }
      }
    }
    requiredTemplateAdmin('footer');
    ?>
  </div>
</main>
<?php requiredTemplateAdmin('script'); ?>
</body>
</html>
