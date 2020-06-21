<?php

$active = "Register";
include("db.php");
include("functions.php");
include('header.php');
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="Index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Register</h2>
                    <form action="register.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="group-input col-6">
                                <label for="username">Name</label>
                                <input type="text" id="username" name="name" required>
                            </div>
                            <div class="group-input col-6">
                                <label for="pass">Contact *</label>
                                <input type="text" id="pass" name="contact" required>
                            </div>
                        </div>
                        <div class="group-input">
                            <label for="pass">Email *</label>
                            <input type="text" id="pass" name="cemail" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="pass" name="password" required>
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Address *</label>
                            <input type="text" id="con-pass" name="address" required>
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Profile Image *</label>
                            <input type="file" name="pimage" style="border: none; margin-top:6px;" required>
                        </div>
                        <button type="submit" class="site-btn register-btn" name="register">REGISTER</button>
                    </form>
                    <div class="switch-login">
                        <a href="login.php" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

<?php
include('footer.php');
?>

</body>

</html>

<?php

if (isset($_POST['register'])) {


    $c_name = $_POST['name'];
    $c_email = $_POST['cemail'];
    $c_address = $_POST['address'];
    $c_pass = $_POST['password'];
    $c_contact = $_POST['contact'];
    $c_name = $_POST['name'];

    $c_image = $_FILES['pimage']['name'];
    $c_tmp_image = $_FILES['pimage']['tmp_name'];

    $c_ip = getRealIpUser();

    move_uploaded_file($c_tmp_image, "/img/customer/$c_image");

    $insert_c = "Insert into customer (customer_name,customer_email,customer_pass,customer_address,customer_contact,customer_image,customer_ip)
     values('$c_name','$c_email','$c_pass','$c_address','$c_contact','$c_image','$c_ip')";

    $run_insert = mysqli_query($con, $insert_c);

    $sel_cart = "select * from cart where ip_add = '$c_ip'";

    $run_sel_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_sel_cart);


    if ($check_cart > 0) {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('Your account has been registered.')</script>";
        echo "<script>window.open('check-out.php','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('Your account has been Registered.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}





?>