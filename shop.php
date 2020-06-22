<?php
$active = "Shop";
include("functions.php");
include("header.php");
?>


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.php">Shop</a>

                    <?php
                    if (isset($_GET['p_cat_id'])) {

                        $p_cat_id = $_GET['p_cat_id'];

                        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
                        $run_p_cat = mysqli_query($db, $get_p_cat);

                        $row_p_cat = mysqli_fetch_array($run_p_cat);

                        $p_cat_title = $row_p_cat['p_cat_title'];

                        echo "  <span>$p_cat_title</span> ";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <?php

                        getCat();

                        ?>

                    </ul>
                </div>
            </div>


            <div class="col-lg-9 order-1 order-lg-2">

                <div class="product-list">
                    <div class="row">

                        <?php

                        if (!isset($_GET['p_cat_id'])) {

                            if (!isset($_GET['cat_id'])) {

                                $per_page = 6;

                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                } else {
                                    $page = 1;
                                }

                                $start_from = ($page - 1) * $per_page;
                                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                                $run_products = mysqli_query($con, $get_products);


                                while ($row_products = mysqli_fetch_array($run_products)) {



                                    $products_id = $row_products['products_id'];
                                    $product_title = $row_products['product_title'];
                                    $product_price = $row_products['product_price'];
                                    $product_img1 = $row_products['product_img1'];

                                    echo "
                                    
                                    <div class='col-lg-4 col-sm-6'>
                                    <div class='product-item'>
                                        <div class='pi-pic' style='max-height:350px'>
                                            <img src='img/products/$product_img1' alt='$product_title'>
                                            <ul>
                                                <li class='quick-view'><a href='product.php?product_id=$products_id' style='background:#fe4231;color:white'>View Details</a></li>
                                            </ul>
                                        </div>
                                        <div class='pi-text'>
                                            <div class='catagory-name'></div>
                                            <a href='product.php?product_id=$products_id'>
                                                <h5>$product_title</h5>
                                            </a>
                                            <div class='product-price'>
                                            PKR $product_price                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                                }
                        ?>


                    </div>

                    <div class="row" style="display:flex;justify-content:center; padding:14px">
                        <ul class="pagination">

                    <?php

                                $query = "select * from products";
                                $result = mysqli_query($con, $query);

                                $total_records = mysqli_num_rows($result);

                                $total_pages = ($total_records / $per_page);

                                $total_pages = ceil($total_pages);

                                if ($total_pages <= 1) {
                                    echo "";
                                } else {

                                    echo "
                        
                        <li class='page-item'>
                            <a class='page-link' href='shop.php?page=1'>
                                First 
                            </a>
                        </li>
                        
                        ";


                                    for ($i = 2; $i < $total_pages; $i++) {
                                        echo "
                            <li class='page-item'><a class='page-link' href='shop.php?page=" . $i . "'>" . $i . "</a></li>
                            ";
                                    }

                                    echo "
                        
                        <li class='page-item'>
                            <a class='page-link' href='shop.php?page=$total_pages'>
Last
                            </a>
                        </li>
                        
                        ";
                                }
                            }
                        }
                    ?>

                        </ul>
                    </div>

                    <div class="row">
                        <?php

                        getPcatProd();

                        getcatProd();


                        ?>

                    </div>


                </div>

            </div>
        </div>
</section>

<?php
include('footer.php');
?>

</body>

</html>