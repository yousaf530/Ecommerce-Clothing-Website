<?php
$active = "Contact";
include('db.php');
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
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Contacts Us</h4>
                    <p>Your Passion is our Satisfaction</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Address:</span>
                            <p>NUST H-12, Islamabad</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Phone:</span>
                            <p>+92 3213352126</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>Inferno Co.@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">

                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Leave A Message</h4>
                        <p>Our staff will call back later and answer your questions.</p>
                        <form action="contact.php" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name" class="form-control" name="name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your email" class="form-control" name="email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Message Subject" class="form-control" name="subject" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your message" class="form-control" name="message"></textarea>
                                    <button class="site-btn" name="submit">Send message</button>
                                </div>
                            </div>
                        </form>

                        <?php

                        if (isset($_POST['submit'])) {
                            $user_name = $_POST['name'];
                            $user_email = $_POST['email'];
                            $user_subject = $_POST['subject'];
                            $user_msg = $_POST['message'];

                            $receiver_mail = 'yousafsaddique523@gmail.com';

                            mail($receiver_mail, $user_name, $user_subject, $user_msg, $user_email);
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php
include('footer.php');
?>


</body>

</html>