<?php
session_start();

unset($_SESSION['customer_email']);

echo "<script>window.open('index.php','_self')</script>";


?>