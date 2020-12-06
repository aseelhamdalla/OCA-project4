<?php
session_start();
if(empty($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
if(empty($_SESSION['quantity'])){
    $_SESSION['quantity']=array();
}

echo "{$_GET['qty']}";



array_push($_SESSION['quantity'], $_GET['qty']);

// $_SESSION['quantity']=$_GET['qty'];
// if(isset($_SESSION['quantity'])){
//     print_r($_SESSION['quantity']);
//     die();
// }
// else{
//     echo "no";
//     die();
// }

array_push($_SESSION['cart'], $_GET['id']);
// if(isset($_SESSION['cart'])){
//     echo "ok";
//     die();
// }
// else{
//     echo "no";
//     die();
// }

print_r($_SESSION['cart']);
echo "<br>";
print_r($_SESSION['quantity']);
// die();

// die();
header ("location: cart.php");
?>