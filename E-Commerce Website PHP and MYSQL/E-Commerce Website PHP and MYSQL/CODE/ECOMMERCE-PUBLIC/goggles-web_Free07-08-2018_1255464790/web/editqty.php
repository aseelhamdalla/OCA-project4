<?php

session_start();



$price=$_GET['price'];

$quantity=$_GET['qty'];

if($quantity == 0){
    $subtotal=$price;
}
else{
    $subtotal=$price*$quantity;
}

$_SESSION['subtotal']=$subtotal;

header("location: cart.php");

?>