<?php
session_start();
include('db.php');
?>


<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="description" content="Threaderz">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Threaderz</title>

<!-- Google Fonts Used -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>


<!-- Css Styles -->
<link rel="icon" href="img/font.svg">
<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css'>
<link rel='stylesheet' href='css/themify-icons.css' type='text/css'>
<link rel='stylesheet' href='css/elegant-icons.css' type='text/css'>
<link rel='stylesheet' href='css/owl.carousel.min.css' type='text/css'>
<link rel='stylesheet' href='css/jquery-ui.min.css' type='text/css'>
<link rel='stylesheet' href='css/slicknav.min.css' type='text/css'>
<link rel='stylesheet' href='css/style.css' type='text/css'>


</head>

<body>

    <!-- Page Pre Load Section-->

    <div id="preload">
        <div class="load">
        </div>
    </div>

    <!-- Header Section-->


    <header class="header-section ">

        <!-- Top Bar -->
        <div class="header-top" id="top">
            <div class="container">
                <div class="f-left">
                    <div class="top-social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="https://twitter.com/explore" target="_blank"><i class="ti-twitter-alt"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="ti-instagram"></i></a>
                    </div>
                </div>

                <div class="f-right">
                    <ul class="nav-right">
                        <li class="user-icon">
                            <div class="login-panel">
                                <i class="fa fa-user" style="font-size:20px"></i>
                            </div>
                            <div class="login-hover">
                                <div class="insidelog">


                                    <?php if (!(isset($_SESSION['customer_email']))) {
                                        echo "<a href='login.php' class='btn logbtn' style='width: 200px; height:40px'>Login</a>";
                                    } else {
                                        echo "<a href='logout.php' class='btn logbtn' style='width: 200px; height:40px'>Log Out</a>";
                                    } ?>


                                </div>
                                <div class="insidelog">
                                    <span class="small">or </span><a href='register.php' class="small">Sign up Now</a>
                                </div>
                                <?php if ((isset($_SESSION['customer_email']))) {
                                echo "
                                <div class='insidelog' style='border-top: solid 0.2px #e5e5e5;'>
                                    <a href='account.php' class='btn btn-dark' style='color:white;margin:4px 0'>My Account</a>
                                </div>";
                                }
                                ?>
                            </div>
                        </li>
                    </ul>
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

                    <div class="col-md-3 text-right" style="visibility: <?php if ($active == 'Register' || $active == 'Login') {
                                                                            echo 'hidden';
                                                                        };  ?>;">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="shopping-cart.php">
                                    <i class="icon_bag_alt"></i>
                                    <span><?php items(); ?></span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>

                                                <?php cart_icon_prod(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5><?php total_price(); ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">VIEW ALL ITEMS</a>
                                        <a href="check-out.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price"><?php total_price(); ?></li>
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

                            <?php
                            getProdCat();
                            ?>

                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="<?php if ($active == 'Home') echo "active" ?>"><a href="index.php">Home</a></li>
                        <li class="<?php if ($active == 'Shop') echo "active" ?>"><a href="shop.php">Shop</a></li>
                        <li class="<?php if ($active == 'Contact') echo "active" ?>"><a href="contact.php">Contact</a></li>

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->