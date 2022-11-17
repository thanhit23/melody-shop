<?php
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');
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
  <style>
    .product-box-4 .product-detail a .name {
      -webkit-line-clamp: 2 !important;
    }
    .product-box-4 .product-detail .price del {
      font-size: 13px;
    }
  </style>
</head>
<body>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/header.php');
?>
  <section class="home-section-2 home-section-bg pt-0 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="slider-animate">
                    <div>
                        <div class="home-contain rounded-0 p-0">
                            <img src="https://themes.pixelstrap.com/fastkart/assets/images/fashion/home-banner/1.jpg"
                                class="img-fluid bg-img blur-up lazyload" alt="">
                            <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                <div class="container-fluid-lg">
                                    <div>
                                        <h6 class="ls-expanded text-uppercase text-danger">Weekend Special offer
                                        </h6>
                                        <h1 class="heding-2">Premium Quality</h1>
                                        <h5 class="text-content">Fresh & Top Quality Dry Fruits are available here!
                                        </h5>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                            class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto">Shop
                                            Now <i class="fa-solid fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="slider-9">
                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/t-shirt.svg" class="blur-up lazyload" alt="">
                                <h5>tops</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.05s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/jeans.svg" class="blur-up lazyload" alt="">
                                <h5>bottoms</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.1s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/cords.svg" class="blur-up lazyload" alt="">
                                <h5>co-ords</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.15s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/jacket.svg" class="blur-up lazyload" alt="">
                                <h5>jackets</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.2s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/blzer.svg" class="blur-up lazyload" alt="">
                                <h5>blazers</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.25s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/shapewear.svg" class="blur-up lazyload" alt="">
                                <h5>shapewear</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.3s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/sleepwear.svg" class="blur-up lazyload" alt="">
                                <h5>sleepwear</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.35s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/swimwear.svg" class="blur-up lazyload" alt="">
                                <h5>swimwear</h5>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="shop-left-sidebar.html" class="category-box category-dark wow fadeInUp"
                            data-wow-delay="0.4s">
                            <div>
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/gown.svg" class="blur-up lazyload" alt="">
                                <h5>Gown</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="product-section product-section-3">
      <div class="container-fluid-lg">
          <div class="title">
              <h2>Top Selling Items</h2>
          </div>
        </div>
        <div class="section-b-space">
          <div class="product-border border-row overflow-hidden">
            <div class="product-box-slider no-arrow">
              <div class="row m-0">
                <div class="col-12">
                  <?php
                  $result = commoditySelectAll();
                  if ($result) {
                    foreach ($result as $value) {
                      $name = $value['name'];
                      $unit_price = $value['unit_price'];
                      $price = number_format($unit_price, 0, '', ',');
                      $discount = $value['discount'];
                      $priceNew = (int)$unit_price;
                      $discountNew = (int)$discount === 0 ? 1 : $discount;
                      $priceOff = number_format($priceNew / ((100 - $discountNew) / 100), 0);
                      $db = $value['image'];
                      $img = json_decode($db);
                      ?>
                  <div class="product-box">
                    <div class="product-image">
                      <a href="/product.html?name=<?php echo $name ?>&id=<?php echo $value['id'] ?>">
                        <img src="<?php echo $img[0] ?>"
                             class="img-fluid blur-up lazyload" alt="">
                      </a>
                    </div>
                    <div class="product-detail">
                      <a href="/product.html?<?php echo $name ?>&<?php echo $value['id'] ?>">
                        <h6 class="name"><?php echo $name ?></h6>
                      </a>
                      <h5 class="sold text-content">
                        <span class="theme-color price"><?php echo $price. 'đ' ?></span>
                        <del><?php echo $priceOff ?></del>
                      </h5>
                      <div class="product-rating mt-2">
                        <ul class="rating">
                          <li>
                            <i data-feather="star" class="fill"></i>
                          </li>
                          <li>
                            <i data-feather="star" class="fill"></i>
                          </li>
                          <li>
                            <i data-feather="star" class="fill"></i>
                          </li>
                          <li>
                            <i data-feather="star" class="fill"></i>
                          </li>
                          <li>
                            <i data-feather="star"></i>
                          </li>
                        </ul>

                        <h6 class="theme-color">In Stock</h6>
                      </div>
                      <div class="top-selling-slider product-arrow">
                          <div>
                              <div class="product-image">
                                  <a href="product-left-thumbnail.html">
                                      <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/deal/big.png"
                                          class="img-fluid product-image blur-up lazyload" alt="">
                                  </a>
                              </div>
                              <div class="product-detail text-center">
                                  <ul class="rating justify-content-center">
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star"></i>
                                      </li>
                                  </ul>
                                  <a href="product-left-thumbnail.html">
                                      <h3 class="name w-100 mx-auto text-center">Unisex Small Trolley
                                          Suitcase</h3>
                                  </a>
                                  <h3 class="price theme-color d-flex justify-content-center">
                                      $65.21<del class="delete-price">$71.25</del>
                                  </h3>
                                  <div class="progress custom-progressbar">
                                      <div class="progress-bar" style="width: 79%" role="progressbar"
                                          aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                      <span class="ms-auto text-content">Hurry up offer end in</span>
                                  </h5>

                                  <div class="timer timer-2 ms-0 my-4" id="clockdiv-1" data-hours="1"
                                      data-minutes="2" data-seconds="3">
                                      <ul class="d-flex justify-content-center">
                                          <li>
                                              <div class="counter">
                                                  <div class="days">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="hours">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="minutes">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="seconds">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>

                          <div>
                              <div class="product-image">
                                  <a href="product-left-thumbnail.html">
                                      <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/deal/big.png"
                                          class="img-fluid product-image blur-up lazyload" alt="">
                                  </a>
                              </div>

                              <div class="product-detail text-center">
                                  <ul class="rating justify-content-center">
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star"></i>
                                      </li>
                                  </ul>
                                  <a href="product-left-thumbnail.html">
                                      <h3 class="name w-100 mx-auto text-center text-title">Unisex Small Trolley
                                          Suitcase</h3>
                                  </a>
                                  <h3 class="price theme-color d-flex justify-content-center">
                                      $65.21<del class="delete-price">$71.25</del>
                                  </h3>
                                  <div class="progress custom-progressbar">
                                      <div class="progress-bar" style="width: 41%" role="progressbar"
                                          aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                      <span class="ms-auto text-content">Hurry up offer end in</span>
                                  </h5>

                                  <div class="timer timer-2 ms-0 my-4" id="clockdiv-2" data-hours="1"
                                      data-minutes="2" data-seconds="3">
                                      <ul class="d-flex justify-content-center">
                                          <li>
                                              <div class="counter">
                                                  <div class="days">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="hours">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="minutes">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="counter">
                                                  <div class="seconds">
                                                      <h6></h6>
                                                  </div>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                  <?php }} ?>
                </div>
              </div>
              </div>

              <div class="col-xxl-8 col-lg-7 order-lg-1">
                  <div class="slider-5_2 img-slider">
                      <div>
                          <div class="product-box-4 wow fadeInUp">
                              <div class="product-image product-image-2">
                                  <a href="product-left-thumbnail.html">
                                      <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/deal/1.png"
                                          class="img-fluid blur-up lazyload" alt="">
                                  </a>
                              </div>

                              <div class="product-detail">
                                  <ul class="rating">
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star"></i>
                                      </li>
                                  </ul>
                                  <a href="product-left-thumbnail.html">
                                      <h5 class="name text-title">Potato Chips</h5>
                                  </a>
                                  <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                  <div class="addtocart_btn">
                                      <button class="add-button addcart-button btn buy-button text-light">
                                          <i class="fa-solid fa-plus"></i>
                                      </button>
                                      <div class="qty-box cart_qty">
                                          <div class="input-group">
                                              <button type="button" class="btn qty-left-minus" data-type="minus"
                                                  data-field="">
                                                  <i class="fa fa-minus" aria-hidden="true"></i>
                                              </button>
                                              <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="1">
                                              <button type="button" class="btn qty-right-plus" data-type="plus"
                                                  data-field="">
                                                  <i class="fa fa-plus" aria-hidden="true"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="product-detail">
                            <a href="/product.html?name=<?php echo $name ?>&id=<?php echo $value['id'] ?>">
                              <h6 class="name h-100"><?php echo $name ?></h6>
                            </a>
                            <h5 class="sold text-content">
                              <span class="theme-color price"><?php echo $price. ' đ' ?></span>
                              <del><?php echo $priceOff ?></del>
                            </h5>
                            <div class="product-rating mt-2">
                              <ul class="rating">
                                <li>
                                  <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                  <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                  <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                  <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                  <i data-feather="star"></i>
                                </li>
                              </ul>

                              <h6 class="theme-color">In Stock</h6>
                            </div>

                            <div class="add-to-cart-box">
                              <button class="btn btn-add-cart addcart-button">Add
                                <i class="fa-solid fa-plus"></i></button>
                              <div class="cart_qty qty-box">
                                <div class="input-group">
                                  <button type="button" class="qty-left-minus"
                                          data-type="minus" data-field="">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                  </button>
                                  <input class="form-control input-number qty-input"
                                         type="text" name="quantity" value="0">
                                  <button type="button" class="qty-right-plus"
                                          data-type="plus" data-field="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                  </button>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="product-section-3">
      <div class="container-fluid-lg">
          <div class="title">
              <h2>Fruits & Vegetables</h2>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="slider-7_1 arrow-slider img-slider">
                  <?php
                    $result = commoditySelectAll();
                    if ($result) {
                      foreach ($result as $value) {
                        $name = $value['name'];
                        $unit_price = $value['unit_price'];
                        $price = number_format($unit_price, 0, '', ',');
                        $discount = $value['discount'];
                        $priceNew = (int)$unit_price;
                        $discountNew = (int)$discount === 0 ? 1 : $discount;
                        $priceOff = number_format($priceNew / ((100 - $discountNew) / 100), 0);
                        $db = $value['image'];
                        $img = json_decode($db);
                        ?>
                      <div>
                          <div class="product-box-4 wow fadeInUp">
                              <div class="product-image product-image-2">
                                  <a href="product-left-thumbnail.html">
                                      <img src="<?= $img[0] ?>" class="img-fluid blur-up lazyload" alt="">
                                  </a>
                              </div>

                              <div class="product-detail">
                                  <ul class="rating">
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star" class="fill"></i>
                                      </li>
                                      <li>
                                          <i data-feather="star"></i>
                                      </li>
                                  </ul>
                                  <a href="product-left-thumbnail.html">
                                      <h5 class="name text-title"><?= $name ?></h5>
                                  </a>
                                  <h5 class="price theme-color"><?= $price ?><del><?= $priceOff ?></del></h5>

                                  <div class="addtocart_btn">
                                      <button class="add-button addcart-button btn buy-button text-light">
                                          <i class="fa-solid fa-plus"></i>
                                      </button>
                                      <div class="qty-box cart_qty">
                                          <div class="input-group">
                                              <button type="button" class="btn qty-left-minus" data-type="minus"
                                                  data-field="">
                                                  <i class="fa fa-minus" aria-hidden="true"></i>
                                              </button>
                                              <input class="form-control input-number qty-input" type="text"
                                                  name="quantity" value="1">
                                              <button type="button" class="btn qty-right-plus" data-type="plus"
                                                  data-field="">
                                                  <i class="fa fa-plus" aria-hidden="true"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php
                  }
                }
                ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/footer.php')
?>
<script src="../../resources/js/main.js"></script>
</body>
</html>
