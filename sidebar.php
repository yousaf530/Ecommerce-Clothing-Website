<?php 

    $emal = $_SESSION['customer_email'];
    $query = "select * from customer where customer_email = '$emal'";

    $run_query = mysqli_query($con,$query);

    $row_query = mysqli_fetch_array($run_query);

    $cname = $row_query['customer_name'];
    $cimage = $row_query['customer_image'];
?>


<div class="card">
        <img class="card-img-top" src="img/customer/<?php echo $cimage ?>" alt="<?php echo $cname ?>" style="width:100%">
        <h4 style="text-align: center;padding:15px 0">
        <?php echo $cname ?>
        </h4>

        <div class="card-body" style="border-top:0.2px solid #e9e9e9 ;">

            <ul class="list-group">
                <li class="list-group-item" <?php if (isset($_GET['orders'])) {
                                              echo  "style = 'background-color:#fe4231'";
                                            } ?>>

                    <a href="account.php?orders">

                        <i class="fa fa-list"></i> My Orders

                    </a>

                </li>

                <li class="list-group-item" <?php if (isset($_GET['details'])) {
                                                echo  "style = 'background-color:#fe4231'";
                                            } ?>>

                    <a href="account.php?details">

                        <i class="fa fa-bolt"></i> My Details

                    </a>

                </li>
                
            </ul>

        </div>
    </div>