<?php

$db = mysqli_connect('localhost', 'root', '', 'threaderz_store');


// Retrieve Products

function getProduct()   
{
    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db, $get_products);



    while ($row_products = mysqli_fetch_array($run_products)) {

        $products_id = $row_products['products_id'];
        $product_title = $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $product_img1 = $row_products['product_img1'];

        echo "
        
        <div class='col-lg-4 col-sm-6'>
        <div class='product-item'>
            <div class='pi-pic' style='max-height:330px'>
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

    }";
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


        echo"


        <li><a href='shop.php?p_cat_id=$p_cat_id'>$p_cat_title</a></li>

        ";
    }
}

?>