<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Threaderz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threaderz</title>

    <!-- Google Fonts Used -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>

    <!-- Page Pre Load Section-->

    <div id="preload">
        <div class="load">
        </div>
    </div>

    <!-- Header Section-->


    <header class="header-section">

        <!-- Top Bar -->
        <div class="header-top" id="top">
            <div class="container">
                <div class="f-left">
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>

                <div class="f-right">
                    <a href="./login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0321-7316374
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle Bar -->

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-md-3 logo">
                        <a href="../index.php">
                            <span>Threaderz</span>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" placeholder="Search our Store">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>

                    <div class="col-md-3 text-right ">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="files/shopping-cart.php">
                                    <i class="icon_bag_alt"></i>
                                    <span>2</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="../img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="../img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">VIEW CART</a>
                                        <a href="check-out.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$60.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Lower Bar -->


        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Categories</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Jackets</a></li>
                            <li><a href="#">Hoodies</a></li>
                            <li><a href="#">Tee-Shirts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shoes</a></li>

                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="contact.php">Contact</a></li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
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
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="img/cart-page/product-1.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Pure Pineapple</h5>
                                    </td>
                                    <td class="p-price first-row">$60.00</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$60.00</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic"><img src="img/cart-page/product-2.jpg" alt=""></td>
                                    <td class="cart-title">
                                        <h5>American lobster</h5>
                                    </td>
                                    <td class="p-price">$60.00</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">$60.00</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic"><img src="img/cart-page/product-3.jpg" alt=""></td>
                                    <td class="cart-title">
                                        <h5>Guangzhou sweater</h5>
                                    </td>
                                    <td class="p-price">$60.00</td>
                                    <td class="qua-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price">$60.00</td>
                                    <td class="close-td"><i class="ti-close"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$240.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
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

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/jquery.dd.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
