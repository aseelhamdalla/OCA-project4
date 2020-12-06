<?php

include('includes/connection.php');

$query = "delete from products where product_id = {$_GET['id']}";

mysqli_query($connection,$query);

header("location:manage_products.php");

?>