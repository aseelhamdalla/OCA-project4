<?php

session_start();

if(isset($_SESSION['customer'])){


}






$connection = mysqli_connect("localhost","root" ,"" ,"project4_ecommerce");

if(!$connection){
	die("can not connect to the server");
	}

// echo "<a href='single_product.php'>Go</a>";

// echo "THIS IS CUSTOMERS PAGE";

?> 



<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Shop :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
                    <ul>
                    <li class="">
							<form action="#" method="post" class="last">
							<?php 
                                if(!isset($_SESSION['customer'])){
                                    echo "<button class='btn btn-primary'>  <a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/login.php'>Login</a> 
                                    </button>";

                                    echo "<button class='btn btn-primary ml-3'>  <a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/registration.php'>Register</a> 
                                    </button>";
                                }
                                else{
									echo "<button class='btn btn-primary'><a class='text-dark' href='http://localhost/E-Commerce%20Website%20PHP%20and%20MYSQL/CODE/ECOMMERCE-PUBLIC/goggles-web_Free07-08-2018_1255464790/web/profile_orders.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Profile</a></button>";
                                    echo "<button class='btn btn-primary ml-3'><a class='text-dark' href='http://localhost/E-Commerce Website PHP and MYSQL\CODE\ADMIN DASHBOARD\concept-master\concept-master\pages/logout.php'><i class='fa fa-user-circle-o' aria-hidden='true' style='margin-right:10px'></i>Logout</a></button>";
								}
								


                            

                               ?>
                                	
							</form>
						</li>
					</ul>
						
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							muchmore </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
					<?php 
						if(isset($_SESSION['itemsno'])){
							echo "<a href='cart.php'> <h5> {$_SESSION['itemsno']}</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						else{
							echo "<a href='cart.php'> <h5>0</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						?>

						<!-- <li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li> -->
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="#" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form method="POST" class="d-flex" action="">
					<input class="form-control" type="text" name="item" placeholder="Search here..." required="">

					<button type="submit" name="submit" class="btn btn-primary submit">
						<i class="fas fa-search"></i>
					</button>

					</form>
					


					<?php
						
						
						 if(isset($_POST['submit'])){
							 $item=$_POST['item'];

							$_SESSION['item']=$_POST['item'];

							// if(isset($_SESSION['item'])){
							// 	echo "ok";
							// 	die();
							// }
							// else{
							// 	echo "no";
							// 	die();
							// }
							header("location:searchresults.php");}
						?>


				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Features
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.html"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.html">Prescription Glasses</a>
												</li>
												<li class="mt-3">
													<h5>View more pages</h5>
												</li>
												<li class="mt-2">
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="customer.html">Customers</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g2.jpg" class="img-fluid" alt="">
												</a>
											</div>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g3.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="shop.html">Designer Glasses</a>
												</li>
												<li class="">
													<a href="shop.html"> Ray-Ban</a>
												</li>
												<li>
													<a href="shop.html">Prescription Glasses</a>
												</li>
												<li>
													<a href="shop.html">Rx Sunglasses</a>
												</li>
												<li>
													<a href="shop.html">Contact Lenses</a>
												</li>
												<li>
													<a href="shop.html">Multifocal Glasses</a>
												</li>
												<li>
													<a href="shop.html">Kids Glasses</a>
												</li>
												<li>
													<a href="shop.html">Lightweight Glasses</a>
												</li>
												<li>
													<a href="shop.html">Sports Glasses</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Tittle goes here </h5>
											<ul>
												<li class="media-mini mt-3">

													<a href="shop.html">Brooks Brothers</a>
												</li>
												<li>
													<a href="shop.html">Persol</a>
												</li>
												<li>
													<a href="shop.html">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.html">Prada</a>
												</li>
												<li>
													<a href="shop.html">Ray-Ban Jr</a>
												</li>
												<li>
													<a href="shop.html">Sferoflex</a>
												</li>
											</ul>
											<ul class="sub-in text-left">

												<li>
													<a href="shop.html">Polo Ralph Lauren</a>
												</li>
												<li>
													<a href="shop.html">Prada</a>
												</li>
												<li>
													<a href="shop.html">Ray-Ban Jr</a>
												</li>
											</ul>

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/g1.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>


						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>

					</ul>

				</div>
			</nav>
		</header>
    </div>
		<!-- banner -->
		<div class="banner_inner"  style="background:url('./images/slider_2.png')no-repeat; background-size: cover;height:20em;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3 text-center">Search Results</h3>
					<div class="row">
						
						<!-- //product left -->
                        <!--/product right-->
                        <div class="left-ads-display col-lg-1"></div>
						<div class="left-ads-display col-lg-10">
							<div class="wrapper_top_shop">
								
								<div class="row">

                                    <?php
                                    
                                    $connection = mysqli_connect("localhost","root" ,"" ,"project4_ecommerce");

                                    if(!$connection){
                                        die("can not connect to the server");
                                    }


                                    // $category_query = "select * from categories where category_name = '" . $_POST['item'] ."'";


									// $category_result = mysqli_query($connection, $category_query);
									
									// $categoryId = mysqli_fetch_assoc($category_result)['category_id'];

								
                                    // $product_query = "select * from products where category_id = ". $categoryId;
                                    
									// $product_query = "select * from products where product_name = '" . $_POST['item'] ."'";

									// if(isset($_SESSION['item'])){
									// 	echo "yup";
									// 	die();
									// }
									// else{
									// 	echo "nope";
									// 	die();
									// }
									
									$product_query = "select * from products where product_name = '" . $_SESSION['item'] ."'";


									$products_result = mysqli_query($connection, $product_query);




	                                // $query = "SELECT * from products where product_id = {$_SESSION['item']}';";
                                    // $result = mysqli_query($connection,$query);
                                    // if(mysqli_num_rows($result) > 0){
                                    // $row = mysqli_fetch_assoc($result);
                                    while($row = mysqli_fetch_assoc($products_result)){


                                        echo "<div class='col-md-3 product-men women_two shop-gd'>";
                                        echo "<div class='product-googles-info googles'>";
                                        echo "<div class='men-pro-item'>";
                                        echo "<div class='men-thumb-item'>";
                                        echo "<img src={$row['product_image']} class='img-fluid' alt=''>";
                                        echo "<div class='men-cart-pro'>";
                                        echo "<div class='inner-men-cart-pro'>";
                                        echo "<a href='' class='link-product-add-cart'>Quick View</a>";
                                        echo "</div>
                                        </div>
                                        <span class='product-new-top'>New</span>
                                    </div>
                                    <div class='item-info-product'>
                                        <div class='info-product-price'>
                                            <div class='grid_meta'>
                                                <div class='product_price'>
                                                    <h4>
                                                        <a href='single_product.php?id={$row['product_id']}'>{$row['product_name']}</a>
                                                    </h4>
                                                    // <div class='grid-price mt-2'>
                                                    //     <span style='text-decoration:line-through' class='money '>{$row['product_price']} JD</span>
                                                    // </div>
                                                    // <div class='grid-price mt-2'>
                                                    //     <span class='money '>{$row['product_special']} JD</span>
                                                    // </div>
                                                </div>
                                                <ul class='stars'>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='#'>
                                                            <i class='fa fa-star-half-o' aria-hidden='true'></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class='googles single-item hvr-outline-out'>
                                                <form action='#' method='post'>
                                                    <input type='hidden' name='cmd' value='_cart'>
                                                    <input type='hidden' name='add' value='1'>
                                                    <input type='hidden' name='googles_item' value='Farenheit'>
                                                    <input type='hidden' name='amount' value='575.00'>
                                                    <button type='submit' class='googles-cart pgoogles-cart'>
                                                        <i class='fas fa-cart-plus'></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                        <div class='clearfix'></div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                                        

                                    
                                }
                                    
                                    
                                    
                                    ?>
                                    






									<!-- <div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s1.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Farenheit (Grey)</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$575.00</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
                                    </div> -->
                                    







									<!-- <div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s2.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Opium (Grey)</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$325.00</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Opium (Grey)">
																<input type="hidden" name="amount" value="325.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>

															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s3.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Kenneth Cole</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$575.00</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Kenneth Cole">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s4.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="single.html" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">Farenheit Oval </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">$325.00</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit Oval">
																<input type="hidden" name="amount" value="325.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row my-lg-3 my-0">
										<!- /womens -->
										<!-- <div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/m1.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.html" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">Aislin Wayfarer </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$775.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Aislin Wayfarer">
																	<input type="hidden" name="amount" value="775.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/m2.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.html" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">Azmani Round </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$725.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Azmani Round">
																	<input type="hidden" name="amount" value="725.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/m3.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.html" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">Farenheit Wayfarer</a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$475.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Farenheit Wayfarer">
																	<input type="hidden" name="amount" value="475.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/m4.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.html" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">Fossil Wayfarer </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">$825.00</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fossil Wayfarer">
																	<input type="hidden" name="amount" value="825.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<!- /mens -->
									</div>
									<div class="row">
											<!-- /womens -->
											<!-- <div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="images/s1.jpg" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.html" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="single.html">Farenheit (Grey)</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">$575.00</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit">
																		<input type="hidden" name="amount" value="575.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="images/s2.jpg" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.html" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="single.html">Opium (Grey)</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">$325.00</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Opium (Grey)">
																		<input type="hidden" name="amount" value="325.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="images/s3.jpg" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.html" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="single.html">Kenneth Cole</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">$575.00</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Kenneth Cole">
																		<input type="hidden" name="amount" value="575.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="images/s4.jpg" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.html" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="single.html">Farenheit Oval </a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">$325.00</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit Oval">
																		<input type="hidden" name="amount" value="325.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div> -->
										</div> 
							<!-- </div>  -->
                        </div>
                        <div class="left-ads-display col-lg-1"></div>
						<!--//product right-->
					</div>
					<!--/slide-->
				
			</div>
		</section>
		<!--footer -->
		<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top-w3layouts">
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
								tellus. Nulla porttitor accumsana tincidunt.</p>
							<ul class="footer-social text-left mt-lg-4 mt-3">

								<li class="mx-2">
									<a href="#">
										<span class="fab fa-facebook-f"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-twitter"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-google-plus-g"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-linkedin-in"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fas fa-rss"></span>
									</a>
								</li>
								<li class="mx-2">
									<a href="#">
										<span class="fab fa-vk"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Get in touch</h3>
						</div>
						<div class="contact-info">
							<h4>Location :</h4>
							<p>0926k 4th block building, king Avenue, New York City.</p>
							<div class="phone">
								<h4>Contact :</h4>
								<p>Phone : +121 098 8907 9987</p>
								<p>Email :
									<a href="mailto:info@example.com">info@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Quick Links</h3>
						</div>
						<ul class="links">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="404.html">Error</a>
							</li>
							<li>
								<a href="shop.html">Shop</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>Sign up for your offers</h3>
						</div>
						<div class="footer-text">
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1">
									<i class="far fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="copyright-w3layouts mt-4">
					<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> W3layouts </a>
					</p>
				</div>
			</div>
		</footer>
		<!-- //footer -->

		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

		<script src="js/bootstrap.js"></script>
		<!-- js file -->
</body>

</html>