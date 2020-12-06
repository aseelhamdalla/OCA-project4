<?php
$connection= mysqli_connect("localhost", "root" , "" , "project4_ecommerce");
        if(!$connection){
            die("Connection failed: " . mysqli_connect_error());
        }
session_start();
$itemtodelete=$_GET['id'];
$qtytodelete=$_GET['qty'];
$arr=array();
$arr2=array();
$arr=$_SESSION['cart'];
$arr2=$_SESSION['quantity'];
$_SESSION['cart']=array_diff($_SESSION['cart'], array($itemtodelete));
$_SESSION['quantity']=array_diff($_SESSION['quantity'], array($qtytodelete));
header("location: cart.php");
?>