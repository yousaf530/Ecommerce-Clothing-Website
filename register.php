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
                    <form action="register.php" method="post" enctype="multipart/form-data" id="logform">
                        <div class="row">
                            <div class="group-input col-md-6">
                                <label for="username">Name</label>
                                <input type="text" id="username" name="name" required>
                                <div id="nameerr" style="margin:20px 0"></div>

                            </div>
                            <div class="group-input col-md-6">
                                <label for="con">Contact *</label>
                                <input type="text" id="con" name="contact" required>
                                <div id="conerr" style="margin:20px 0"></div>
                            </div>
                        </div>
                        <div class="group-input">
                            <label for="email">Email *</label>
                            <input type="text" id="eemail" name="cemail" required>
                            <div id="eerr" style="margin:20px 0"></div>
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

<script>
    $("#logform").submit(function(event) {
        var name = $('#username').val();
        var email = $('#eemail').val();
        var con = $('#con').val();



        var letters = /^[A-Za-z]+$/;
        var em = /\S+@\S+\.\S+/;
        var numbers = /^[0-9]{11}$/;


        if (!name.match(letters)) {
            $("#nameerr").html(
                "<span class='alert alert-danger'>" +
                "Enter Valid Name (Letters only)</span>");

            event.preventDefault();

        }

        if (!con.match(numbers)) {
            $("#conerr").html(
                "<span class='alert alert-danger'>" +
                "Enter Valid Contact (11 Digit)</span>");

            event.preventDefault();
        }

        if (!email.match(em)) {
            $("#eerr").html(
                "<span class='alert alert-danger'>" +
                "Enter Valid Email</span>");
            event.preventDefault();
        }


    });
</script>

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

    $c_ip = getRealIpUser();

    $_SESSION['customer_email'] = $c_email;
    $c_id = $_SESSION['customer_email'];

    $tardir = "img/customer/";

    $fileName = basename($_FILES['pimage']['name']);

    $targetPath = $tardir . $fileName;
    $fileType = pathinfo($targetPath, PATHINFO_EXTENSION);

    $allow = array('jpg', 'png', 'jpeg');


    if (in_array($fileType, $allow)) {
        if (move_uploaded_file($_FILES['pimage']['tmp_name'], $targetPath)) {
            $insert_c = "Insert into customer (customer_name,customer_email,customer_pass,customer_address,customer_contact,customer_image,customer_ip)
            values('$c_name','$c_email','$c_pass','$c_address','$c_contact','$fileName','$c_ip')";
        }
    } else {
        echo "<script>alert('Image not Inserted.')</script>";
    }



    $run_insert = mysqli_query($con, $insert_c);


    $sel_cart = "select * from cart where c_id = '$c_id'";

    $run_sel_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_sel_cart);


    if ($check_cart > 0) {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('Account registered. You are Logged In')</script>";
        echo "<script>window.open('check-out.php','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('Account registered. You are Logged In')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>