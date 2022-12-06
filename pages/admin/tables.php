<?php
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');
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
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Product</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Product</h6>
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
            <h6>Products table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr style="text-align: center;">
                    <th class="text-secondary opacity-7">STT</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình Ảnh</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ngày Nhập</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $indexEnd = (int)$_GET['page'] * 10;
                $indexStart = $indexEnd - 10;
                $result = commodityPagination("$indexStart,10");
                $index = 0;
                if ($result) :
                  foreach ($result as $value) :
                    $index++;
                    $createAt = $value['create_at'];
                    $name = $value['name'];
                    $unit_price = $value['unit_price'];
                    $price = number_format($unit_price, 0, '', ',');
                    $discount = $value['discount'];
                    $priceNew = (int)$unit_price;
                    $discountNew = (int)$discount === 0 ? 1 : $discount;
                    $priceOff = number_format($priceNew / ((100 - $discountNew) / 100), 0);
                    $img = json_decode($value['images']);
                    ?>
                    <tr class="item-product-<?= $index ?>">
                      <td class="align-middle id-product" style="padding-left: 1.5rem;">
                        <?= $value['id_product'] ?>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm name-product"><?= $name ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 price-product" data-discount="<?= $discount ?>"
                           data-price="<?= $unit_price ?>"><?= $price . ' đ' ?></p>
                        <del class="text-xs font-weight-bold mb-0"><?= $priceOff . ' đ' ?></del>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div>
                          <img src="<?= $img[0] ?>" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $createAt ?></span>
                      </td>
                      <td style="display: none;">
                        <input class="description" type="hidden" value="<?= $value['description'] ?>"/>
                        <input class="id_type" type="hidden" value="<?= $value['id_type'] ?>"/>
                        <input class="view" type="hidden" value="<?= $value['view'] ?>"/>
                      </td>
                      <td class="align-middle">
                        <button type="button" style="border: none;" name="btn-edit"
                                class="btn-edit badge badge-sm bg-gradient-primary"
                                data-id="<?= $value['id_product'] ?>">
                          Edit
                        </button>
                        <button type="button" style="border: none;" name="btn-delete"
                                class="btn-delete badge badge-sm bg-gradient-danger"
                                data-id="<?= $value['id_product'] ?>">
                          Delete
                        </button>
                      </td>
                    </tr>
                  <?php
                  endforeach;
                endif;
                ?>
                </tbody>
              </table>
              <div style="display: flex; justify-content: center;">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <?php
                    $quantity = productTotalItem();
                    $length = $quantity / 10;
                    if ($length > (int)$length) $length++;
                    for ($i = 1; $i <= $length; $i++) :
                      ?>
                      <li class="page-item">
                        <a class="page-link" href="/admin/products?page=<?= $i ?>">
                          <?= $i ?>
                        </a>
                      </li>
                    <?php
                    endfor;
                    ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php requiredTemplateAdmin('footer'); ?>
  </div>
</main>
<section class="model-container-edit none-model">
  <div class="model-wrapper-edit container-fluid py-4">
    <div class="row">
      <div style="z-index: 2;" class="col-md-8">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Product</p>
            </div>
          </div>
          <form>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tên</label>
                    <input id="name-edit" name="nameProduct" class="form-control" type="text" value="" placeholder=""
                           data-id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Giá</label>
                    <input id="price-edit" name="priceProduct" class="form-control" type="number" value=""
                           placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Giảm giá</label>
                    <input id="discount-edit" name="discountProduct" class="form-control" type="text" value=""
                           placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Mô tả</label>
                    <input id="description-edit" name="descriptionProduct" class="form-control" type="text" value=""
                           placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Lượt xem</label>
                    <input id="view-edit" name="viewProduct" class="form-control" type="text" value="" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="type-edit" class="form-control-label">Loại</label>
                    <select name="type" id="type-edit"
                            style="border: 1px solid #d2d6da;font-size: 0.875rem;font-weight: 400;line-height: 1.4rem;color: #495057;">
                      <option value="0">Chọn Loại</option>
                      <option value="2">Áo</option>
                      <option value="3">Quần</option>
                      <option value="4">Áo Khoác</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button id="btn-submit" type="button" name="btn-update" class="btn btn-primary btn-sm ms-auto">Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <span class="model-close-edit none-model"></span>
    </div>
</section>
<?php requiredTemplateAdmin('script'); ?>
<script src="../../resources/js/product-admin.js"></script>
</body>
</html>
