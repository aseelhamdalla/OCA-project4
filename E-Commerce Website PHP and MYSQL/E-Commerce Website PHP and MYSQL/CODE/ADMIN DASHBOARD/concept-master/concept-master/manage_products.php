

<?php

session_start();

if(isset($_SESSION['admin'])){

}
else{
    header("location: http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/pages/login.php ");
    die();
}

$connection= mysqli_connect("localhost", "root", "","project4_ecommerce");

if(!$connection){
    die("can not connect to the server");
}



if (isset($_POST['submit'])) {

    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_special = $_POST['product_special'];
    $category_id    = $_POST['select'];


    $image_name = $_FILES['product_image']['name'];
    $tmp_name   = $_FILES['product_image']['tmp_name'];
    $path       = 'images/product_images/';

    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    // die();


    move_uploaded_file($tmp_name, $path . $image_name);

    
    


    // echo "<pre>";
    // echo "$product_name";
    // echo "$product_desc";
    // echo "$path.$image_name";
    // echo "$product_price";
    // echo "$product_special";
    // echo "</pre>";
    // die;


    $query = "INSERT into products (product_name, product_desc,product_image,product_price,product_special,category_id)
              VALUES ('$product_name',' $product_desc','$path$image_name','$product_price','$product_special','$category_id');";

    mysqli_query($connection,$query);
}




?>



<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Manage Products</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="manage_products.php">muchmore</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <form method="POST" class="d-flex">
                                    <input class="form-control"  name="item" type="text" placeholder="Search..">
                                    <button name="submit" value="Search" class="btn btn-primary submit" ><i class="fas fa-search"></i></button>
                            </form>
                            </div>
                        </li>
                        <?php
						
						
						 if(isset($_POST['submit'])){
							 $item=$_POST['item'];

							$_SESSION['item']=$_POST['item'];
                            header("location:http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/searchresults.php");
                        }
				
					
					
						?>
                       
                              

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <?php 

                                    $query  = "SELECT * from admins WHERE admin_id = {$_SESSION['admin']};";
                                    $result = mysqli_query($connection, $query);
                                    $row = mysqli_fetch_assoc($result);

                                    ?>

                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $row['admin_name']; ?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/index.php"><i class="fas fa-user mr-2"></i>Homepage</a>
                                <a class="dropdown-item" href="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/pages/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>


                       
                        
                       
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                            <li class="nav-divider active">
                                Menu
                            </li>
                            <?php 
                            if(isset($_SESSION['super_admin'])){

                                echo "<li class='nav-item '>
                                <a class='nav-link ' href='manage_admin.php'  aria-expanded='false' data-target='#submenu-1' aria-controls='submenu-1'><i class='fa fa-fw fa-user-circle'></i>Manage Admins <span class='badge badge-success'>6</span></a>
                                
                            </li>";
                            }
                            ?>
                            <!-- <li class="nav-item ">
                                <a class="nav-link " href="manage_admin.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Manage Admins <span class="badge badge-success">6</span></a>
                                
                            </li> -->
                            <li class="nav-item ">
                                <a class="nav-link " href="manage_categories.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>Manage Categories <span class="badge badge-success">6</span></a>
                                
                            </li><li class="nav-item ">
                                <a class="nav-link " href="manage_products.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-chart-pie"></i>Manage Products <span class="badge badge-success">6</span></a>
                                
                            </li><li class="nav-item ">
                                <a class="nav-link " href="manage_customers.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-fw fa-wpforms"></i>Manage Customers <span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="manage_orders.php"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-table"></i>Manage Orders <span class="badge badge-success">6</span></a>
                                
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Manage Products</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Manage Products</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                            <div class="card">
                                <h5 class="card-header">Manage Products</h5>
                                <div class="card-body">
                                    <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                                <label for="validationCustom01">Product Name</label>
                                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="" required>
                                                <div class="valid-feedback">
                                                  
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <label for="validationCustom01">Product Description</label>
                                                <input type="text" class="form-control" id="product_des" name="product_desc" placeholder="Product Description" value="" required>
                                                <div class="valid-feedback">
                                                  
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                                <label for="validationCustom01">Product Price</label>
                                                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Name" value="" required>
                                                <div class="valid-feedback">
                                                  
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                                <label for="validationCustom01">Upload Product Image</label>
                                                <input type="file" id="file-multiple-input" name="product_image" multiple="" class="form-control-file">
                                                <div class="valid-feedback">
                                                  
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                                <label for="validationCustom01">Product Special Price</label>
                                                <input type="text" class="form-control" id="product_special" name="product_special" placeholder="Product Name" value="" required>
                                                <div class="valid-feedback">
                                                  
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                        <label for="select" class=" form-control-label">Select Category</label>
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <!-- <option value="1">1</option> -->
                                            <?php
                                            $query = "select * from categories;";
                                            $result = mysqli_query($connection,$query);
                                            while($row=mysqli_fetch_assoc($result)){
                                                echo "<option value={$row['category_id']}>{$row['category_name']}</option>";
                                            }
                                            ?>
                                        </select>
                                    
                                </div>
                                           
                                        </div>
                                        <div class="form-row">
                                        
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                                <button class="btn btn-primary" name="submit" type="submit">Create Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
                    </div>

                    <div class="row">
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
                        
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                            <div class="card">
                                <h5 class="card-header">Products Info.</h5>
                                <div class="card-body">
                                    <table class="table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col" >Product Description</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Product Price</th>
                                                <th scope="col">Special Price</th>
                                                <th scope="col">Category Id</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        $query  = "select * from products ";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$row['product_id']}</td>";
                            echo "<td style='width:5%'>{$row['product_name']}</td>";
                            echo "<td style='width:15%'>{$row['product_desc']}</td>";
                            echo "<td><img src='{$row['product_image']}' style='width:10em; height:7em'></td>";
                            echo "<td>{$row['product_price']}</td>";
                            echo "<td>{$row['product_special']}</td>";
                            echo "<td>{$row['category_id']}</td>";
                            echo "<td><a href='edit_product.php?id={$row['product_id']}' class='btn btn-primary'>Edit</a></td>";
                            echo "<td><a href='delete.php?id={$row['product_id']}' class='btn btn-danger'>Delete</a></td>";
                            echo "</tr>";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
</div>

                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2020 Muchmore. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                               
                                <a href="http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>