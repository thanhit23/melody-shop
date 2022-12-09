<?php
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/product.php');
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
  <style>
    .product-box-4 .product-detail a .name {
      -webkit-line-clamp: 2 !important;
      width: 100%;
    }
    .product-box-4 .product-detail .price del {
      font-size: 13px;
    }
    .product-box-4 .product-image-2 img {
      margin: 0 !important;
      width: 100% !important;
      height: 200px !important;
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
            <a href="categories?search=Áo" class="category-box category-dark wow fadeInUp">
              <div>
                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/t-shirt.svg"
                     class="blur-up lazyload" alt="">
                <h5>tops</h5>
              </div>
            </a>
          </div>
          <div>
            <a href="categories?search=quần" class="category-box category-dark wow fadeInUp"
               data-wow-delay="0.05s">
              <div>
                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/jeans.svg" class="blur-up lazyload"
                     alt="">
                <h5>bottoms</h5>
              </div>
            </a>
          </div>
          <div>
            <a href="categories?search=Áo khoác" class="category-box category-dark wow fadeInUp"
               data-wow-delay="0.15s">
              <div>
                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/fashion/jacket.svg" class="blur-up lazyload"
                     alt="">
                <h5>jackets</h5>
              </div>
            </a>
          </div>
          <div>
            <a href="categories?search=đồ ngủ" class="category-box category-dark wow fadeInUp"
               data-wow-delay="0.3s">
              <div>
                <img src="../../resources/images/icon/—Pngtree—vector male icon_3989738.png"
                     class="blur-up lazyload" alt="">
                <h5>Male</h5>
              </div>
            </a>
          </div>
          <div>
            <a href="categories?search=đồ bơi" class="category-box category-dark wow fadeInUp"
               data-wow-delay="0.35s">
              <div>
                <img src="../../resources/images/icon/female.png"
                     class="blur-up lazyload" alt="">
                <h5>Female</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="product-section-3">
  <div class="container-fluid-lg">
    <div class="title">
      <h2>Products</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="slider-7_1 arrow-slider img-slider">
          <?php
          $result = commoditySelectAll();
          if ($result) :
            $array = array_chunk($result, 2, true);
            for ($i = 0; $i < count($array); $i++) :
              ?>
              <div>
                <?php
                foreach ($array[$i] as $value) :
                  $name = $value['name'];
                  $unit_price = $value['unit_price'];
                  $price = number_format($unit_price, 0, '', ',');
                  $discount = $value['discount'];
                  $priceNew = (int)$unit_price;
                  $discountNew = (int)$discount === 0 ? 1 : $discount;
                  $priceOff = number_format($priceNew / ((100 - $discountNew) / 100), 0);
                  $db = $value['images'];
                  $img = json_decode($db);
                  ?>
                  <div class="product-box-4 wow fadeInUp">
                    <div class="product-image product-image-2">
                      <a href="/product.html?name=<?= $value['name'] ?>&id=<?= $value['id_product'] ?>">
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
                      <a href="/product.html?name=<?= $value['name'] ?>&id=<?= $value['id_product'] ?>">
                        <h5 class="name text-title"><?= $name ?></h5>
                      </a>
                      <h5 class="price theme-color"><?= $price. 'đ' ?>
                        <del><?= $priceOff ?></del>
                      </h5>
                    </div>
                  </div>
                  <?php
                endforeach;
                ?>
              </div>
              <?php
            endfor;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-t-space">
  <div class="container-fluid-lg">
    <div class="banner-contain">
      <img src="https://themes.pixelstrap.com/fastkart/assets/images/fashion/banner/4.jpg" class="bg-img blur-up lazyload" alt="">
      <div class="banner-details p-center p-4 text-white text-center">
        <div>
          <h3 class="lh-base fw-bold offer-text">Get 10% Cashback! Min Order of 199k</h3>
          <h6 class="coupon-code coupon-code-white">Use Code : GROCERY1920</h6>
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
    <div class="row g-sm-4 g-3">
      <div class="col-xxl-4 col-lg-5 order-lg-2">
        <div class="product-bg-image wow fadeInUp">
          <div class="product-title product-warning">
            <h2>Special Offer</h2>
          </div>
          <div class="product-box-4 product-box-3 rounded-0">
            <div class="deal-box">
              <div class="circle-box">
                <div class="shape-circle">
                  <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/circle.svg"
                       class="blur-up lazyload" alt="">
                  <div class="shape-text">
                    <h6>Hot <br> Deal</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-selling-slider product-arrow">
              <div>
                <div class="product-image">
                  <a href="#">
                    <img src="../../resources/images/e6f8f3864f1169cce1f737d5741dab1a.png"
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
                  <a href="#">
                    <h3 class="name w-100 mx-auto text-center">Áo Hoodie</h3>
                  </a>
                  <h3 class="price theme-color d-flex justify-content-center">
                    $65.21
                    <del class="delete-price">$71.25</del>
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
                  <a href="#">
                    <img src="../../resources/images/sg-11134201-22100-yx66idk23livde.png"
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
                  <a href="#">
                    <h3 class="name w-100 mx-auto text-center text-title">Áo thun nam mới nhất</h3>
                  </a>
                  <h3 class="price theme-color d-flex justify-content-center">
                    $65.21
                    <del class="delete-price">$71.25</del>
                  </h3>
                  <div class="progress custom-progressbar">
                    <div class="progress-bar" style="width: 41%" role="progressbar"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                    <span class="ms-auto text-content">Hurry up offer end in</span>
                  </h5>

                  <div class="timer timer-2 ms-0 my-4" id="clockdiv-2" data-hours="2"
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
      </div>
      <div class="col-xxl-8 col-lg-7 order-lg-1">
        <div class="slider-5_2 arrow-slider img-slider">
          <?php
          $result = commoditySelectAll('view > 1200');
          if ($result) :
            $array = array_chunk($result, 2, true);
            for ($i = 0; $i < count($array); $i++) :
              ?>
              <div>
                <?php
                foreach ($array[$i] as $value) :
                  $name = $value['name'];
                  $unit_price = $value['unit_price'];
                  $price = number_format($unit_price, 0, '', ',');
                  $discount = $value['discount'];
                  $priceNew = (int)$unit_price;
                  $discountNew = (int)$discount === 0 ? 1 : $discount;
                  $priceOff = number_format($priceNew / ((100 - $discountNew) / 100), 0);
                  $img = json_decode($value['images']);
                  ?>
                  <div class="product-box-4 wow fadeInUp">
                    <div class="product-image product-image-2">
                      <a href="/product.html?name=<?= $value['name'] ?>&id=<?= $value['id_product'] ?>">
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
                      <a href="/product.html?name=<?= $value['name'] ?>&id=<?= $value['id_product'] ?>">
                        <h5 class="name text-title"><?= $name ?></h5>
                      </a>
                      <h5 class="price theme-color"><?= $price. 'đ' ?>
                        <del><?= $priceOff ?></del>
                      </h5>
                    </div>
                  </div>
                  <?php
                endforeach;
                ?>
              </div>
              <?php
            endfor;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="newsletter-section section-b-space">
  <div class="container-fluid-lg">
    <div class="newsletter-box newsletter-box-2">
      <div class="newsletter-contain py-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
              <div class="newsletter-detail">
                <h2>Join our newsletter and get...</h2>
                <h5>$20 discount for your first order</h5>
                <div class="input-box">
                  <input type="email" class="form-control" id="exampleFormControlInput1"
                         placeholder="Enter Your Email">
                  <i class="fa-solid fa-envelope arrow"></i>
                  <button class="sub-btn  btn-animation">
                    <span class="d-sm-block d-none">Subscribe</span>
                    <i class="fa-solid fa-arrow-right icon"></i>
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
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/pages/templates/includes/footer.php')
?>
<script src="../../resources/js/main.js"></script>
</body>
</html>
