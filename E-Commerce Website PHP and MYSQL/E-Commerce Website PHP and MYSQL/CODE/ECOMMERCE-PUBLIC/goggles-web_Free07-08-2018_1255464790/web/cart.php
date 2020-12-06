<?php 

session_start();

// if(isset($_SESSION['quantity'])){
//     echo "ok";
//     die();
// }
// else{
//     echo "no";
//     die();
// }

$connection = mysqli_connect("localhost","root" ,"" ,"project4_ecommerce");

if(!$connection){
    die("can not connect to the server");
    }


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Checkout :: w3layouts</title>
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
		<!-- banner -->
		<div class="banner_inner" style="background:url('./images/slider_2.png')no-repeat; background-size: cover;height:20em;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Checkout </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Cart </h3>
				<div class="checkout-right">
					<h4>Your shopping cart contains 
						<span class="text-primary"><?php echo $_SESSION['itemsno'].' items.';?></span> 
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product Image</th>
								<th>Product Name</th>
								<th>Price/Each</th>
								<th>quantity</th>
                                <th>Subtotal</th>
                                <th>Remove</th>
							</tr>
						</thead>
						<tbody>

                        <?php 

// if(isset($_SESSION['cart'])){
//     echo "connected";
//     die();
// }
// else{
//     echo "not connected";
//     die();
// }

$quantities = array();

$quantities=$_SESSION['quantity'];

// if(isset($_SESSION['quantity'])){
// 	echo "yes";
// 	die();
// }
// else{
// 	echo "no";
// 	die();
// }

// echo "{$quantities['1']}";
// print_r($quantities);
// die();


$whereIn = implode(',' , $_SESSION['cart']);
if(isset($whereIn)){

$query="SELECT * FROM products WHERE product_id IN ($whereIn);";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    $total=0;
	$itemsNo=0;
	$counter=0;
    while($row=mysqli_fetch_assoc($result)){
        $itemsNo+=1;
        $price=1;
        echo "<tr class='rem1'>";
        echo "<td class='invert'>$itemsNo</td>";
        echo "<td class='invert'>";
            echo "<a href=''>
                <img src={$row['product_image']} style='height:10em;width:15em' alt=' ' class='img-responsive'>
            </a>";
        echo "</td>";
        
        echo "<td class='invert'>{$row['product_name']}</td>";

		echo "<td class='invert'>{$row['product_special']}</td>";

		echo "<td class='invert'>{$quantities[$itemsNo-1]}</td>";
		


        // echo "<td class='invert'>";


        // echo "<form method='post'>";
        // echo "<input type='text' name='key' value='$key'>";
        // echo "<input type='submit' name={$row['product_name']} value='update'>";

        // if (isset($_POST["$row['product_name']'])){
        //     $key=$_POST['key'];
        // }

        // if($key>0){
        //     $totalPrice=$key*{$row['product_special']};
        // }
        // else{
        //     $totalPrice={$row['product_special']};
        // }



        // if($_SESSION['quantity'] > 0){
        //     $totalPrice=$row['product_special']*$_SESSION['quantity'];
        // }else{
        //     $totalPrice=$row['product_special'];
        // }
        
        
        // echo $totalPrice;
        // echo "</div>";

		// echo "</td>";
		
		$price=$quantities[$counter]*$row['product_special'];

		echo "<td class='invert'>{$price}</td>";

		$var=$itemsNo-1;

        
		echo "<td class='invert'>";
        echo     "<a href='deletefromcart.php?id={$row['product_id']}&qty={$quantities[$var]}'><div class='rem'>";
        echo     "<div class='close1'> </div></a>";
        echo "</div>";

        echo "</td>";


		$counter=$counter+1;
		$total+=$price;

       
        // <a href='editqty.php?price={$row['product_special']}&qty={$_POST['qty']}'>Edit</a>
        // echo  "<button name='edit'>Update";
        // echo  "</button>";
        // echo    "</form>";


        // if(isset($_POST['edit'])){

        //     $quantity=$_POST['qty'];
        //     $totalPrice=$quantity*$row['product_special'];

        //     }

		}
		

		$_SESSION['itemsno']=$itemsNo;

		// if(isset($_SESSION['itemsno'])){
		// 	echo "ok";
		// 	die();
		// }
		// else{
		// 	echo "no";
		// 	die();
		// }
        
        
        
        

        echo "</td>";
    echo "</tr>";
        
    }
}

echo "<tr class='rem1'>";
echo "<td class='invert text-primary'><h5>Total</h5></td>";
echo "<td class='invert'>-";
	
echo "</td>";

echo "<td class='invert'>-</td>";
echo "<td class='invert'>-</td>";


echo "<td class='invert'>-</td>";
echo "<td class='invert text-primary'><h5>";
echo $total;

echo "</h5></td>";

echo "<td class='invert text-success'><h5>THANK YOU!";


echo "</h5></td>";




// if(isset($_POST['']))

// echo "total is: $total";

                            



                                ?>






							<!-- <tr class="rem1">
								<td class="invert">1</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/s1.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Irayz Butterfly </td>

								<td class="invert">$281.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/s5.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Fastrack Aviator </td>

								<td class="invert">$325.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close2"> </div>
									</div>

								</td>
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/s2.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								<td class="invert">Opium (Grey)</td>

								<td class="invert">$325.00</td>
								<td class="invert">
									<div class="rem">
										<div class="close3"> </div>
									</div>

								</td>
							</tr> -->

						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
                    <div class="col-md-8 checkout-left-basket"></div>
					<div class="col-md-4 checkout-left-basket">
                        <!-- <form method="post" action="#">
                            <input type="button" name="submit" value="update">
                        </form> -->


						<ul>
                        <li><h2>Total</h2>
								<i></i>
								<h3><?php  echo "= $total JD";  ?></h3>
							</li> 
                        </ul> 
</div>
</div>


                       <?php
                       

                       
                       $_SESSION['total'] =$total; 
                       
                       
                       
                       ?>
                           
<!-- 
							<li>Product1
								<i>-</i>
								<span>$281.00 </span>
							</li>
							<li>Product2
								<i>-</i>
								<span>$325.00 </span>
							</li>
							<li>Product3
								<i>-</i>
								<span>$325.00 </span>
							</li>
							<li>Total Service Charges
								<i>-</i>
								<span>$55.00</span>
							</li>
							 <li>Total
								<i>-</i>
								<span>$986.00</span>
							</li> 
						</ul> 
					</div>
					 -->

                    <div class="clearfix"> </div>
                    

                </div>
                <div class="checkout-left row">
                <div class="col-md-9 checkout-left-basket"></div>    
                <div class=" col-md-3 checkout-right-basket">
							<a href="checkout.php">Proceed to checkout</a>
                        </div>
    </div>

			</div>

		</div>
	</section>
	<!--//checkout-->
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
	<!-- easy-responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->

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