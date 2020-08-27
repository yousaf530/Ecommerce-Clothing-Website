<?php
session_start();

session_destroy();

echo "<script>window.open('login.php','_self')</script>";

include('config.php');

?>
