<?php

session_start();

ob_start();

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
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Home :: w3layouts</title>
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
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Muchmore </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<!-- <li class="button-log">
							<a class="btn-open" href="#">
								<span style="font-size:2.5em;" class="fa fa-user mr-3" aria-hidden="true"></span>
							</a>
						</li> -->

						<!-- <li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
                                </button>
                                
							</form> -->
						<!-- </li>  -->
						<?php 
						if(isset($_SESSION['itemsno'])){
							echo "<a href='cart.php'> <h5> {$_SESSION['itemsno']}</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						else{
							echo "<a href='cart.php'> <h5>0</h5><i style='font-size:2.5em;' class='fas fa-shopping-cart'></i></a>";
						}
						?>

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
					<!-- <form method="POST">
					<input class="form-control" type="search" name="item" placeholder="Search here..." required="">
					</form> -->

					<?php
						//  if(isset($_POST['submit'])){
						// 	 $item=$_POST['item'];

						// 	$_SESSION['item']=$_POST['item'];
						// 	echo $_SESSION['item'];}
							// header("location:searchresults.php");}
					// 	 $query  = "SELECT * from categories WHERE category_name ={$_POST['item']}";
					// 	$result = mysqli_query($connection, $query);
					// 	while ($row = mysqli_fetch_assoc($result)) {
					// 		$val= $row['category_id'];
					// 		$catname = $row['category_name'];
					// 		echo "<option value='$val'>$catname</option>";
					// 	}

					// }
						?>

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
<!-- 

						
				<form method="GET" action="">
						<input type="text" name="items"> -->

						
						<!-- // echo "<form method='POST' action=''>";
						// echo "<input type='text' name='items'>";

						
						
						// $items=$_POST['items'];

						// echo "<button  type='submit' name='go'><a href='searchresults.php?items=$items'>Go</a></button>";
						// echo "</form>";

						

						// if(isset($_GET['go'])){
						// 	$search=$_GET['items'];
						// 	echo $search;
						// 	$_SESSION['items']=$search;
						// 	header("location:searchresults.php");
						// } -->











			 	<!-- <div class="search"> -->
				<!-- <div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div> -->
				<!-- open/close -->
				<!-- <div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form> -->

				<!-- </div> -->
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
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						
							
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Shop
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
										<h5 class="tittle-w3layouts-sub"> Categories </h5>
										<ul>
											<?php 
											 $query = "select * from categories;";
											 $result = mysqli_query($connection,$query);
											 while($row = mysqli_fetch_assoc($result)){
												 echo "<li class='media-mini mt-3'>
												 <a href='index.php'>{$row['category_name']}</a>
											 </li>";}?>
											 </ul>
											 </div>




											
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> On Sale </h5>
											<ul>
											<?php 
											 $query = "select * from products;";
											 $result = mysqli_query($connection,$query);
											 
											 while($row = mysqli_fetch_assoc($result)){
												 if(!empty($row['ondiscount'])){
													echo "<li class='media-mini mt-3'>
													<a href='products.php'>{$row['product_name']}</a>
												</li>";

												 }
												 }?>
												 </ul>
											 </div>



										<div class="col-md-4 media-list span4 text-left">

											<h5 class="tittle-w3layouts-sub-nav">Muchmore </h5>
											<div class="media-mini mt-3">
												<a href="shop.html">
													<img src="images/logo.png" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style=" background:url('https://www.dailydot.com/wp-content/uploads/e7d/84/95e95ccb4f3b357740e0f05423374339.jpg') no-repeat; background-size: cover;">
						<div class="carousel-caption text-center">
							<h3 style="color:white;">Clocks
								<span style="color:white;">Sales up to 20% off</span>
							</h3>
							<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
					<div class="carousel-item item2" style=" background:url('https://img.made.com/image/upload/c_pad,d_madeplusgrey.svg,f_auto,w_982,dpr_2.0,q_auto:best,b_rgb:f5f6f4/v4/catalog/product/asset/7/a/f/5/7af5b99041a95688f89677f5692a062a8b069ca5_AODEEP515BLK_UK_Vintage_Dark_Florals_from_the_Natural_History_Museum_Set_2_Framed_Wall_Art_Prin.jpg') no-repeat; background-size: cover;">
						<div class="carousel-caption text-center">
							<h3 style="color:white;">Wall Arts
								<span style="color:white;">BIG SALE!</span>
							</h3>
							<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item3"  style=" background:url('https://img.made.com/image/upload/c_pad,d_madeplusgrey.svg,f_auto,w_982,dpr_2.0,q_auto:best,b_rgb:f5f6f4/v4/catalog/product/asset/4/5/7/d/457df7cada159afb47b750cee5269116e9b81703_CLPILA017MUL_UK_Ilaria_Extra_Large_Cluster_Pendant_Multicolour_Brass_ar3_2_LB02_LS.jpg') no-repeat; background-size: cover; height:600px;">
						<div class="carousel-caption text-center">
							<h3 style="color:black;">Lightings
								<span style="color:black;">Limited time offer, Hurry up!</span>
							</h3>
							<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item4" style=" background:url('https://img.made.com/image/upload/c_pad,d_madeplusgrey.svg,f_auto,w_982,dpr_2.0,q_auto:best,b_rgb:f5f6f4/v4/catalog/product/asset/a/5/d/8/a5d86f060c05e28c1982430d37dc365eeeb00981_IACBOI001BRA_UK_Boise_Set_of_2_Hammered_Metal_Planter_Metal_Stand_ar3_2_LB02_LS.jpg') no-repeat; background-size: cover;">
						<div class="carousel-caption text-center">
							<h3 style="color:black;">Plants
								<span style="color:black;">Special offers!</span>
							</h3>
							<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
    </div>
    


<div class="container">
    <div class='row galsses-grids pt-lg-5 pt-3'>
    
    <?php

                $connection = mysqli_connect("localhost","root" ,"" ,"project4_ecommerce");

                if(!$connection){
                    die("can not connect to the server");
                    }

	              $query = "select * from categories ";
	              $result = mysqli_query($connection,$query);
	              while($row = mysqli_fetch_assoc($result)){
                  echo " <div class='col-lg-6 galsses-grid-left mt-5'>";
                  echo "<a href='products.php?id={$row['category_id']}'>";
                  echo "<figure class='effect-lexi'>";
                  
				  echo "<img src='{$row['category_image']}' alt='' class=''>";
				  echo "<figcaption><h3><span>{$row['category_name']}</span></h3><p> Express your style now.</p>
              </figcaption>
          </figure></a>
      </div>";
				  
				  }
				  
						?>

             
					<!-- <div class="col-lg-6 galsses-grid-left">
                    <a href="#">
						<figure class="effect-lexi">
                            
							<img src="images/banner4.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure></a>
					</div>
					<div class="col-lg-6 galsses-grid-left">
                    <a href="#">
						<figure class="effect-lexi">
                        
							<img src="images/banner1.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure></a>
					</div>
                </div>

                <div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
                    <a href="#">
						<figure class="effect-lexi">
                            
							<img src="images/banner4.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure></a>
					</div>
					<div class="col-lg-6 galsses-grid-left">
                    <a href="#">
						<figure class="effect-lexi">
                        
							<img src="images/banner1.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure></a>
                    </div> --> 

                </div>
    </div>






    <!-- /grids -->
    <div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="products.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
                <!-- //grids -->


				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info "   style="background:url('https://img.made.com/image/upload/c_pad,d_madeplusgrey.svg,f_auto,w_982,dpr_2.0,q_auto:best,b_rgb:f5f6f4/v4/catalog/product/asset/f/9/5/d/f95da813cc13a8a9a2f3e533fdfadd4745c3972a_FLPILA025PNK_UK_Ilaria_Floor_Lamp_Triple_Multicolour_Pink_Brass_ar3_2_LB02_LS.jpg')">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3" style="color:black;">Winter Flash sale</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom" style="color:black;"></div>

						</div>
					</div>
				</div>
				<!-- <div class="row" >
					<div class="col-md-12 middle-slider my-4" id="simply-countdown-custom" >
						<div class="middle-text-info  " >

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
							<div class="simply-countdown-custom"  id="simply-countdown-custom"></div>

						</div>
					</div>
				</div> -->
                <!--//meddle-->
                
                <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4 text-center">Offers & Discounts</h3>
				<div class="row">
					<!-- /womens -->
					<?php 

$query  = "SELECT * from products;";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);



	while($row = mysqli_fetch_assoc($result)){
		if(!empty($row['ondiscount'])){

	echo "<div class='col-md-4 product-men women_two shop-gd'>";
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
				<div class='grid-price mt-2'>
					<span style='text-decoration:line-through' class='money '>{$row['product_price']} JD</span>
				</div>
				<div class='grid-price mt-2'>
					<span class='money '>{$row['product_special']} JD</span>
				</div>
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
		
	</div>
	<div class='clearfix'></div>
</div>
</div>
</div>
</div>";


		}
}





?>
					<!-- <div class="col-md-3 product-men women_two">
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
    </div>
    </div>
    </div>
    </section>


                

                

    
				<!--//row-->
				
				
				
				
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		</div>
	</section>
	<!-- about -->
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
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>20% Off for your first Home Decor Products</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 20% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

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
	<!-- Count-down -->
	<script src="js/simplyCountdown.js"></script>
	<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
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