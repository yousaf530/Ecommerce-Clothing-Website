<?php
$active = "Account";
include("db.php");
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
                    <span>Account</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- #content Begin -->

<div class="container">
    <div class="insider row">
        <div class="col-md-3 col-8" style="padding: 20px 0;">
            <?php

            include("sidebar.php");

            ?>

        </div>

        <div class="col-md-8 col-10" style="padding:20px 0">


            <?php

            if (isset($_GET['orders'])) {
                echo " <h4 class='card' style='text-align: center; margin: 0 0 30px 0;font-weight:600;padding:10px 0 '>My Orders</h4>";

                include("orders.php");
            }

            if (isset($_GET['details'])) {
                echo " <h4 class='card' style='text-align: center; margin: 0 0 30px 0;font-weight:600;padding:10px 0 '>Account Details </h4>";
            
                include("details.php");
            }
            ?>


        </div>
    </div>
</div>






<?php
include('footer.php');
?>

</body>

</html>