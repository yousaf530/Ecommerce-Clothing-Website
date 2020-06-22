<?php
$active = "Checkout";
include('db.php');
include("functions.php");
include("header.php");
?>


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.php">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form class="checkout-form">
            <div class="row">

                <div class="col-lg-6" <?php if (!($_SESSION['customer_email'] == 'unset')) {
                                            echo "style = 'margin: 0 auto'";
                                        } ?>>
                    <div class="checkout-content">
                        <a href="shop.php" class="content-btn">Continue Shopping</a>
                    </div>
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Products <span>Total</span></li>
                                <?php checkoutProds(); ?>

                                <li class="fw-normal">Subtotal <span><?php total_price(); ?></span></li>
                                <li class="total-price">Total <span><?php total_price(); ?></span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Cash on Delivery
                                        <input type="checkbox" id="pc-check" checked required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="pc-item">
                                    <p id="msg" style="margin-top:18px"></p>
                                </div>

                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>

                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->


<?php
include('footer.php');
?>

<script>
    $(".site-btn").on('click', function() {

        if (!$("input[type='checkbox']").is(':checked')) {

            $("#msg").html(
                "<span class='alert alert-danger'>" +
                "Please check Cash on delivery.</span>");
        } else {
            return;
        }

    });
</script>


</body>

</html>


<?php




?>