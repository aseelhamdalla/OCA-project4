<?php
session_start();

unset($_SESSION['customer']);
unset($_SESSION['admin']);
unset($_SESSION['super_admin']);
header('Location: http://localhost/E-Commerce Website PHP and MYSQL\CODE\ECOMMERCE-PUBLIC\goggles-web_Free07-08-2018_1255464790\web/index.php');

?>
