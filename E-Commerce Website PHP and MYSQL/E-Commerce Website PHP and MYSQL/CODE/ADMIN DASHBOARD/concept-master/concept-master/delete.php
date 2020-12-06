<?php

if(isset($_SESSION['admin'])){

}
else{
    echo "NOT ALLOWED TO VIEW THIS PAGE";
    die();
}

// ini_set('session.gc_maxlifetime', 3600);

// // each client should remember their session id for EXACTLY 1 hour
// session_set_cookie_params(3600);


$connection= mysqli_connect("localhost", "root", "","project4_ecommerce");

if(!$connection){
    die("can not connect to the server");
};


// echo $_SERVER['HTTP_REFERER'];




if($_SERVER['HTTP_REFERER']=="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_admin.php"){
    $query="delete from admins where admin_id = {$_GET['id']};";
    mysqli_query($connection, $query);


header("location:manage_admin.php");

}



// }
elseif($_SERVER['HTTP_REFERER']=="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_customers.php"){
    $query="delete from customers where customer_id = {$_GET['id']};";
    mysqli_query($connection, $query);
    header("location:manage_customers.php");
}


elseif($_SERVER['HTTP_REFERER']=="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_categories.php"){
    $query="delete from categories where category_id = {$_GET['id']};";
    mysqli_query($connection, $query);
    header("location:manage_categories.php");
}


elseif($_SERVER['HTTP_REFERER']=="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/manage_products.php"){
    $query="delete from products where product_id = {$_GET['id']};";
    mysqli_query($connection, $query);
    header("location:manage_products.php");
}

?>