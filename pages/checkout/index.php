<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/user.php');
require($_SERVER['DOCUMENT_ROOT'] . '/PDO/cart.php');
$id_user = $_SESSION['idUser'];
?>
<!doctype html>
<html lang="en">
<head>
  <title>Sunny Shop</title>
  <?php
    require('../templates/includes/helmet.php')
  ?>
  <style>
    .flex { display: flex;}
    .product-detail {
        width: 200px;
    }
    .product-image {
        width: 100% !important;
    }
    .product-image .img-fluid {
        width: 70px;
    }
    .name-product {
        margin-left: 12px;
        width: 100px;
        display: -webkit-box;
        white-space: normal;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        color: #111;
    }
    .name-product:hover {
        color: var(--theme-color);
    }
    .payment-select {
        display: flex;
        align-items: center;
    }
    .payment-select p {
        margin: 0;
        margin-left: 5px;
        color: #09a587;
    }
    .btn--remove {
        border: none;
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 4px;
        margin-top: 5px;
    }
  </style>
</head>
<body>
    <?php
    require('../templates/includes/header.php')
    ?>
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                            trigger="loop-on-hover"
                                            colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                            class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Address</h4>
                                        </div>
                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jack"
                                                                    id="flexRadioDefault1">
                                                            </div>
                                                            <div class="label">
                                                                <label>Home</label>
                                                            </div>
                                                            <ul class="delivery-address-detail">
                                                                <?php
                                                                $result = clientSelectById($id_user);
                                                                if ($result) :
                                                                ?>
                                                                    <li>
                                                                        <h4 class="fw-500"><?= $result['username'] ?></h4>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-content">
                                                                            <span class="text-title">
                                                                                Address : 
                                                                            </span>
                                                                            <?= $result['address'] ?>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <h6 class="text-content mb-0"><span
                                                                                class="text-title">Phone
                                                                                :</span> +84 <?= $result['address'] ?></h6>
                                                                    </li>
                                                                <?php
                                                                endif;
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
                                            trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check custom-form-check hide-check-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="standard" checked>
                                                                    <label class="form-check-label"
                                                                        for="standard">Standard
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check mb-0 custom-form-check show-box-checked">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="future">
                                                                    <label class="form-check-label" for="future">Future
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 future-box">
                                                    <div class="future-option">
                                                        <div class="row g-md-0 gy-4">
                                                            <div class="col-md-6">
                                                                <div class="delivery-items">
                                                                    <div>
                                                                        <h5 class="items text-content"><span>3
                                                                                Items</span>@
                                                                            $693.48</h5>
                                                                        <h5 class="charge text-content">Delivery Charge
                                                                            $34.67
                                                                            <button type="button" class="btn p-0"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Extra Charge">
                                                                                <i
                                                                                    class="fa-solid fa-circle-exclamation"></i>
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <form
                                                                    class="form-floating theme-form-floating date-box">
                                                                    <input type="date" class="form-control">
                                                                    <label>Select Date</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
                                            trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
                                            class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Payment Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="accordion accordion-flush custom-accordion"
                                                id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingFour">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseFour">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="cash"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="cash" checked> Cash
                                                                    On Delivery</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseFour"
                                                        class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p class="cod-review">Pay digitally with SMS Pay
                                                                Link. Cash may not be accepted in COVID restricted
                                                                areas. <a href="javascript:void(0)">Know more.</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingOne">
                                                        <div class="accordion-button collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="credit"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="flexRadioDefault" id="credit">
                                                                    Credit or Debit Card</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="row g-2">
                                                                <div class="col-12">
                                                                    <div class="payment-method">
                                                                        <div
                                                                            class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                            <input type="text" class="form-control"
                                                                                id="credit2"
                                                                                placeholder="Enter Credit & Debit Card Number">
                                                                            <label for="credit2">Enter Credit & Debit
                                                                                Card Number</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control"
                                                                            id="expiry" placeholder="Enter Expiry Date">
                                                                        <label for="expiry">Expiry Date</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="text" class="form-control" id="cvv"
                                                                            placeholder="Enter CVV Number">
                                                                        <label for="cvv">CVV Number</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xxl-4">
                                                                    <div
                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                        <input type="password" class="form-control"
                                                                            id="password" placeholder="Enter Password">
                                                                        <label for="password">Password</label>
                                                                    </div>
                                                                </div>

                                                                <div class="button-group mt-0">
                                                                    <ul>
                                                                        <li>
                                                                            <button
                                                                                class="btn btn-light shopping-button">Cancel</button>
                                                                        </li>

                                                                        <li>
                                                                            <button class="btn btn-animation">Use This
                                                                                Card</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3>Order Summery</h3>
                            </div>
                            <ul class="summery-contain">
                                <?php
                                    $result = selectItemByQuickPayment();
                                    if ($result) :
                                        foreach ($result as $value) :
                                            $img = json_decode($value['images']);
                                            $price = number_format($value['unit_price'], 0, '', ',');
                                        ?>
                                        <li>
                                            <img src="<?= $img[0] ?>"
                                                class="img-fluid blur-up lazyloaded checkout-image" alt="">
                                            <h4><?= $value['name'] ?><span> X <?= $value['quantity'] ?></span></h4>
                                            <h4 class="price"><?= $price ?></h4>
                                        </li>
                                        <?php
                                        endforeach;
                                    endif;
                                ?>
                            </ul>

                            <ul class="summery-total">
                                <li>
                                    <h4>Subtotal</h4>
                                    <h4 class="price">$111.81</h4>
                                </li>

                                <li>
                                    <h4>Shipping</h4>
                                    <h4 class="price">$8.90</h4>
                                </li>

                                <li>
                                    <h4>Tax</h4>
                                    <h4 class="price">$29.498</h4>
                                </li>

                                <li>
                                    <h4>Coupon/Code</h4>
                                    <h4 class="price">$-23.10</h4>
                                </li>

                                <li class="list-total">
                                    <h4>Total (USD)</h4>
                                    <h4 class="price">$19.28</h4>
                                </li>
                            </ul>
                        </div>

                        <div class="checkout-offer">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/offer.svg" class="img-fluid" alt="">
                                </div>
                                <div class="offer-name">
                                    <h6>Available Offers</h6>
                                </div>
                            </div>

                            <ul class="offer-detail">
                                <li>
                                    <p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>
                                </li>
                                <li>
                                    <p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>
                                </li>
                            </ul>
                        </div>

                        <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require('../templates/includes/footer.php')
    ?>
    <script src="../../resources/js/const.js"></script>
    <script src="../../resources/js/cart.js"></script>
</body>
</html>