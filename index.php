<?php
include("files/db.php");
?>

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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                    <a href="files/login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
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
                        <a href="index.php">
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
                                                    <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
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
                                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
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
                                        <a href="files/shopping-cart.php" class="primary-btn view-card">VIEW CART</a>
                                        <a href="files/check-out.php" class="primary-btn checkout-btn">CHECK OUT</a>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="files/shop.php">Shop</a></li>
                        <li><a href="files/contact.php">Contact</a></li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>


    <!-- Hero Section Begin -->

    <section class="hero-section">
        <div class="hero-items owl-carousel">

            <?php

            $get_slides = "select * from slider LIMIT 0,1";
            $run_slider = mysqli_query($con, $get_slides);

            while ($row_slides = mysqli_fetch_array($run_slider)) {

                $slide_name = $row_slides['slide_name'];
                $slide_image = $row_slides['slide_image'];
                $slide_heading = $row_slides['slide_heading'];
                $slide_text = $row_slides['slide_text'];

                echo "

            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1>$slide_heading</h1>
                            <p>$slide_text
                            </p>
                            <a href='files/shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Up to <span>60%</span></h2>
                    </div>  
                </div>
            </div>
                ";
            }


            $get_slides = "select * from slider LIMIT 1,2";
            $run_slider = mysqli_query($con, $get_slides);

            while ($row_slides = mysqli_fetch_array($run_slider)) {

                $slide_name = $row_slides['slide_name'];
                $slide_image = $row_slides['slide_image'];
                $slide_heading = $row_slides['slide_heading'];
                $slide_text = $row_slides['slide_text'];

                echo "
            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1 style='color: white;'>$slide_heading</h1>
                            <p style='color: white;'>$slide_text
                            </p>
                            <a href='files/shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>";
            }

            ?>

        </div>
    </section>


    <!-- Banner Section Begin -->

    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <a href="files/shop.php">
                        <div class="single-banner">
                            <img src="img/banner-1.png" alt="">
                            <div class="inner-text">
                                <h4>Men’s</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="files/shop.php">
                        <div class="single-banner">
                            <img src="img/banner-2.png" alt="">
                            <div class="inner-text">
                                <h4>Women’s</h4>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4">
                    <a href="files/shop.php">
                        <div class="single-banner">
                            <img src="img/banner-3.png" alt="">
                            <div class="inner-text">
                                <h4>Kid’s</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Women Banner Section Begin -->

    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Women’s</h2>
                        <a href="files/shop.php">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active"><a href="files/shop.php">Tops</a></li>
                            <li><a href="files/shop.php">Jeans</a> </li>
                            <li><a href="files/shop.php">Shoes</a> </li>
                            <li><a href="files/shop.php">Hoodies</a> </li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-1.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Jeans</div>
                                <a href="#">
                                    <h5>Skinny Fit Denim</h5>
                                </a>
                                <div class="product-price">
                                    PKR2,499.00
                                    <span> PKR3,200.00
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-2.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Jeans</div>
                                <a href="#">
                                    <h5>Wild Leg Denim</h5>
                                </a>
                                <div class="product-price">
                                    PKR1,829.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-3.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tops</div>
                                <a href="#">
                                    <h5>MIX MATERIAL TEE</h5>
                                </a>
                                <div class="product-price">
                                    PKR2,029.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/woman-4.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tops</div>
                                <a href="#">
                                    <h5>PRINTED TEE</h5>
                                </a>
                                <div class="product-price">
                                    PKR699.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Man Banner Section Begin -->

    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Tee-Shirts</li>
                            <li>Shoes</li>
                            <li>Jeans</li>
                            <li>Hoodies</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/men-1.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tee-Shirt</div>
                                <a href="#">
                                    <h5>MEN TRENDY LONG TEE</h5>
                                </a>
                                <div class="product-price">
                                    PKR2,699.00
                                    <span>PKR3,500.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/men-2.png" alt="">

                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Jeans</div>
                                <a href="#">
                                    <h5>MEN STRETCH SKINNY FIT DENIM</h5>
                                </a>
                                <div class="product-price">
                                    PKR1,889.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/men-3.png" alt="">

                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>MEN TERRY JOGGER</h5>
                                </a>
                                <div class="product-price">
                                    PKR1,749.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/men-4.png" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tee-Shirt</div>
                                <a href="#">
                                    <h5>MEN TRENDY GRAPHIC TEE</h5>
                                </a>
                                <div class="product-price">
                                    PKR849.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/men-large.jpg">
                        <h2>Men’s</h2>
                        <a href="files/shop.php">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <?php
    include('files/footer.php');
    ?>

    <!-- JS Files and Libs -->


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>