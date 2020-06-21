<?php
$active = "Details";

if (isset($_GET['details'])) {

    $emal = $_SESSION['customer_email'];
    $query = "select * from customer where customer_email = '$emal'";

    $run_query = mysqli_query($con,$query);

    $row_query = mysqli_fetch_array($run_query);

    $cname = $row_query['customer_name'];
    $cemail = $row_query['customer_email'];
    $ccontact = $row_query['customer_contact'];
    $cpass = $row_query['customer_pass'];
    $caddress = $row_query['customer_address'];

    echo  "
    <div class='col-md-6 col-12' style='margin:0px auto'>
    <div class='bg-light text-dark' style='border:solid #e5e5e5 0.2px; padding: 10px 40px'> 
            <div class='ci-text'>
                <span style='font-size:large;font-weight:600'>Email</span>
                <p style='text-align:center'>$cemail</p>
            </div>
            <div class='ci-text'>
                <span style='font-size:large;font-weight:600'>Contact</span>
                <p style='text-align:center'>$ccontact</p>
            </div>
            <div class='ci-text'>
                <span style='font-size:large;font-weight:600'>Address</span>
                <p style='text-align:center'>$caddress</p>
            </div>        
         </div>
    </div> 
        ";
}
