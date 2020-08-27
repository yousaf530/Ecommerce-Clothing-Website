<?php
$active = "Shopping Cart";
include("db.php");
include("functions.php");
include('header.php');
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.php">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table" style="min-height: 150px;">
                    <table>
                        <tbody>
                            <?php cart_items(); ?>
                        </tbody>

                    </table>

                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">

                            <a href="shop.php" class="primary-btn continue-shop">Continue shopping</a>
                            <a href="shopping-cart.php?upd=" class="primary-btn up-cart">Update cart</a>
                        </div>

                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span><?php total_price() ?></span></li>
                                <li class="cart-total">Total <span><?php total_price() ?></span></li>
                            </ul>
                            <a href="check-out.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

<?php
include('footer.php');
?>


</body>

</html>


<?php

if (isset($_GET['del'])) {


    $p_id = $_GET['del'];


    $query = "Delete from cart where products_id='$p_id'";

    $run_query = mysqli_query($con, $query);

    echo "<script>window.open('shopping-cart.php','_self')</script>";
}

if (isset($_GET['upd'])) {


    $p_id = $_GET['del'];


    $query = "Delete from cart where products_id='$p_id'";

    $run_query = mysqli_query($con, $query);

    echo "<script>window.open('shopping-cart.php','_self')</script>";
}


?>