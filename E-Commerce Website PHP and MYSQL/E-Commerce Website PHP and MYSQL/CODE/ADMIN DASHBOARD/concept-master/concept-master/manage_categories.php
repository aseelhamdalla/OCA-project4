<?php

$connection= mysqli_connect("localhost", "root", "","project4_ecommerce");

if(!$connection){
    die("can not connect to the server");
}


session_start();

if(isset($_SESSION['admin'])){

}
else{
    header("location: http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ADMIN%20DASHBOARD/concept-master/concept-master/pages/login.php ");
    die();
}





if (isset($_POST['category_submit'])) {

    $category_name = $_POST['category_name'];
    $category_desc = $_POST['category_desc'];


    $image_name = $_FILES['category_image']['name'];
    $tmp_name   = $_FILES['category_image']['tmp_name'];
    $path       = 'images/categories_images/';

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


    $query = "INSERT into categories (category_name, category_desc,category_image)
              VALUES ('$category_name',' $category_desc','$path$image_name');";

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
    <title>Manage Categories</title>
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
                <a class="navbar-brand" href="manage_categories.php">Muchmore</a>
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
                                <h2 class="pageheader-title">Manage Categories </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Manage Categories</li>
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
                                <h5 class="card-header">Manage Categories</h5>
                                <div class="card-body">
                                    <form class="needs-validation" action=""  method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="validationCustom01">Category name</label>
                                                <input type="text" class="form-control" id="validationCustom01"  name="category_name"  placeholder="First name" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <label for="validationCustom01">Category desc</label>
                                                <textarea rows="6" cols="50" name="category_desc" placeholder="Enter a category description" style="width:100%"></textarea><br>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  mt-3">
                                                <label for="validationCustom02">category img</label>
                                                <input type="file" class="form-control" id="validationCustom02" value= "choose file" name="category_image">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 mr-3" >
                                                <button class="btn btn-primary" name="category_submit"  type="submit" >Submit form</button>
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
                                <h5 class="card-header">Categories Table</h5>
                                <div class="card-body">
                                    <table class="table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">category name</th>
                                                <th scope="col">category Description</th>
                                                <th scope="col">category img</th>
                                                <th scope="col">edit</th>
                                                <th scope="col">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                        $query  = "select * from categories ";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr >";
                            echo "<td style='width:10%'>{$row['category_id']}</td>";
                            echo "<td style='width:10%'>{$row['category_name']}</td>";
                            echo "<td style='width:30%'>{$row['category_desc']}</td>";
                            echo "<td style='width:20%'><img src='{$row['category_image']}' style='width:10em; height:7em'></td>";
                            echo "<td style='width:20%'><a href='edit_categories.php?id={$row['category_id']}' class='btn btn-primary'>Edit</a></td>";
                            echo "<td style='width:10%'><a href='delete.php?id={$row['category_id']}' class='btn btn-danger'>Delete</a></td>";
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