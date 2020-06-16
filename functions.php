<?php

$db = mysqli_connect('localhost', 'root', '', 'threaderz_store');


// Retrieve Women Products for index slider

function getWProduct()
{
    global $db;

    $get_products = "select * from products where cat_id=2 order by 1 ASC LIMIT 0,4";
    $run_products = mysqli_query($db, $get_products);



    while ($row_products = mysqli_fetch_array($run_products)) {

        $products_id = $row_products['products_id'];
        $product_title = $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $product_img1 = $row_products['product_img1'];




        echo "
        
        <div class='product-item'>
        <div class='pi-pic' style='max-height:300px'>
            <img src='img/products/$product_img1' alt='$product_title'>
            <ul>
                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                <li class='quick-view'><a href='product.php?product_id=$products_id'>View Details</a></li>
            </ul>
        </div>
        <div class='pi-text'>
            <div class='catagory-name'>Jeans</div>
            <a href='#'>
                <h5>$product_title</h5>
            </a>
            <div class='product-price'>
               PKR $product_price
            </div>
        </div>
    </div>

    ";
    }
}

// Retrieve men Products for index slider

function getMProduct()
{
    global $db;

    $get_products = "select * from products where cat_id=1 order by 1 ASC LIMIT 0,4";
    $run_products = mysqli_query($db, $get_products);



    while ($row_products = mysqli_fetch_array($run_products)) {

        $products_id = $row_products['products_id'];
        $product_title = $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $product_img1 = $row_products['product_img1'];

        echo "
        
        <div class='product-item'>
        <div class='pi-pic' style='max-height:300px'>
            <img src='img/products/$product_img1' alt='$product_title'>
            <ul>
                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                <li class='quick-view'><a href='product.php?product_id=$products_id'>View Details</a></li>
            </ul>
        </div>
        <div class='pi-text'>
            <div class='catagory-name'>Jeans</div>
            <a href='#'>
                <h5>$product_title</h5>
            </a>
            <div class='product-price'>
            PKR $product_price
            </div>
        </div>
    </div>

    ";
    }
}


// Retrieve Products Catergories

function getProdCat()
{

    global $db;

    $get_p_cats = "select * from product_categories";
    $run_p_cats = mysqli_query($db, $get_p_cats);



    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];


        echo "


        <li><a href='shop.php?p_cat_id=$p_cat_id'>$p_cat_title</a></li>

        ";
    }
}

// Retrieve Catergories

function getCat()
{

    global $db;

    $get_cats = "select * from category";
    $run_cats = mysqli_query($db, $get_cats);



    while ($row_cats = mysqli_fetch_array($run_cats)) {

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];


        echo "

        <li class='hovclass'><a href='shop.php?cat_id=$cat_id'>$cat_title</a></li>

        ";
    }
}

function getPcatProd()
{
    global $db;

    if (isset($_GET['p_cat_id'])) {

        $p_cat_id = $_GET['p_cat_id'];

        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";
        $run_products = mysqli_query($db, $get_products);

        $count = mysqli_num_rows($run_products);





        if ($count == 0) {

            echo "
                <div class='card' style='font-weight:bold; color:#fe4231'>
                    <div class='card-body'>No Products Available</div>
                </div>

                    ";
        } else {



            while ($row_products = mysqli_fetch_array($run_products)) {

                $products_id = $row_products['products_id'];
                $product_title = $row_products['product_title'];
                $product_price = $row_products['product_price'];
                $product_img1 = $row_products['product_img1'];

                echo "
        
                <div class='col-lg-4 col-sm-6'>
                <div class='product-item'>
                    <div class='pi-pic' style='max-height:300px'>
                        <img src='img/products/$product_img1' alt='$product_title'>
                        <ul>
                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                            <li class='quick-view'><a href='product.php?product_id=$products_id'>View Details</a></li>
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
        }
    }
}


function getcatProd()
{
    global $db;

    if (isset($_GET['cat_id'])) {

        $cat_id = $_GET['cat_id'];

        $get_cat = "select * from category where cat_id='$cat_id'";
        $run_cat = mysqli_query($db, $get_cat);

        $row_cat = mysqli_fetch_array($run_cat);

        $p_cat_title = $row_cat['cat_title'];
        $p_cat_desc = $row_cat['cat_desc'];

        $get_products = "select * from products where cat_id='$cat_id'";
        $run_products = mysqli_query($db, $get_products);

        $count = mysqli_num_rows($run_products);





        if ($count == 0) {

            echo "
                <div class='card' style='font-weight:bold; color:#fe4231'>
                    <div class='card-body'>No Products Available</div>
                </div>

                    ";
        } else {



            while ($row_products = mysqli_fetch_array($run_products)) {

                $products_id = $row_products['products_id'];
                $product_title = $row_products['product_title'];
                $product_price = $row_products['product_price'];
                $product_img1 = $row_products['product_img1'];

                echo "
        
                <div class='col-lg-4 col-sm-6'>
                <div class='product-item'>
                    <div class='pi-pic' style='max-height:300px'>
                        <img src='img/products/$product_img1' alt='$product_title'>
                        <ul>
                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                            <li class='quick-view'><a href='product.php?product_id=$products_id'>View Details</a></li>
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
        }
    }
}

function getProd()
{
    global $db;

    if (isset($_GET['product_id'])) {

        $product_id = $_GET['product_id'];

        $get_product_id = "select * from products where products_id='$product_id'";
        $run_product_id = mysqli_query($db, $get_product_id);

        $row_products = mysqli_fetch_array($run_product_id);

        $product_title = $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $product_desc = $row_products['product_desc'];
        $product_img1 = $row_products['product_img1'];
        $product_img2 = $row_products['product_img2'];


        $get_p_cat_name = "select p_cat_title from products as P,product_categories as C where P.p_cat_id=C.p_cat_id and products_id=$product_id";
        $run_get_p_cat_name = mysqli_query($db, $get_p_cat_name);


        $row_p_cat_name = mysqli_fetch_array($run_get_p_cat_name);


        $p_cat_name = $row_p_cat_name['p_cat_title'];


        echo "
        
        <div class='col-lg-6'>
        <div class='product-pic-zoom' style='max-height:400px;margin:30px 0'>
            <img class='product-big-img' src='img/products/$product_img1' alt='$product_title'>
            <div class='zoom-icon'>
                <i class='fa fa-search-plus'></i>
            </div>
        </div>
        <div class='product-thumbs'>
            <div class='product-thumbs-track ps-slider owl-carousel'>
                <div class='pt active' data-imgbigurl='img/products/$product_img1'><img src='img/products/$product_img1' alt='$product_title'></div>
                <div class='pt' data-imgbigurl='img/products/$product_img2'><img src='img/products/$product_img2' alt='$product_title'></div>
              </div>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class='product-details'>
            <div class='pd-title'>
                <h3>$product_title</h3>
            </div>
            <div class='pd-rating'>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star-o'></i>
                <span>(5)</span>
            </div>
            <div class='pd-desc'>
                <p>$product_desc</p>
                <h4>PKR $product_price</h4>
            </div>
           
            <div class='pd-size-choose'>
                <div class='sc-item'>
                    <input type='radio' id='sm-size'>
                    <label for='sm-size'>s</label>
                </div>
                <div class='sc-item'>
                    <input type='radio' id='md-size'>
                    <label for='md-size'>m</label>
                </div>
                <div class='sc-item'>
                    <input type='radio' id='lg-size'>
                    <label for='lg-size'>l</label>
                </div>
                <div class='sc-item'>
                    <input type='radio' id='xl-size'>
                    <label for='xl-size'>xs</label>
                </div>
            </div>
            <div class='quantity'>
                <div class='pro-qty'>
                    <input type='text' value='1'>
                </div>
                <a href='shopping-cart.php' class='primary-btn pd-cart'>Add To Cart</a>
            </div>
            <ul class='pd-tags'>
                <li><span>CATEGORY</span>: $p_cat_name</li>
            </ul>
            
        </div>
    </div>
    </div>
    
    

        
        
        
        ";
    }
}
