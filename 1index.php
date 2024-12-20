<?php
session_start();
$isLoggedIn = isset($_SESSION['user']); // Check if user is logged in
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Brigade Clothing</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Brigade">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script>
        // Pass PHP variable to JavaScript
        const isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;
    </script>
	
</head>

<body>
<div class="loading-page" id="loadingPage">
        <img src="assets/1.png" alt="Logo" class="logo" id="logo">
    </div>
<div class="super_container">

	<header class="header trans_300">
		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div class="top_nav_left">
        </div>
					
					</div>
				</div>
			</div>
		</div>

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><img src="assets/1.png"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#">home</a></li>
								<li><a href="3shop.php">shop</a></li>
								<li><a href="3new.php">new</a></li>
								<li><a href="3onsale.php">on sale</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="4myacc.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="3cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">0</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="3shop.php">shop</a></li>
				<li class="menu_item"><a href="3new.php">new</a></li>
				<li class="menu_item"><a href="3onsale.php">on sale</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(assets/123002712_2673177159678936_1187946119846381727_n.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/453485296_468885235899096_513308116720846128_n.jpg)">
						<div class="banner_category">
							<a href="2hoodies.php">HOODIES</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/449066098_449706761150277_4189243537820075673_n.jpg)">
						<div class="banner_category">
							<a href="2tees.php">TEES</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(assets/359801864_251602164294072_4089427261190148458_n.jpg)">
						<div class="banner_category">
							<a href="2shorts.php">SHORTS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>WHAT'S NEW</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".hoodies">HOODIES</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".tees">TEES</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".shorts">SHORTS</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					<div class="product-item tees" data-id="3">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Chase Dream (Blue)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>

									<div class="product-item tees" data-id="5">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Word of Knives (Black)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>

									<div class="product-item tees" data-id="6">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Chase Dream (White)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>

									<div class="product-item tees" data-id="7">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Multiverse (White)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>

						<div class="product-item tees" data-id="10">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Daily (Longsleeve)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>
									<div class="product-item tees" data-id="11">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Cookies (Longsleeve)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>
									<div class="product-item hoodies" data-id="13">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - You're Hired (Pullovers)</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>
									<div class="product-item shorts" data-id="14">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Chicago</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>
									<div class="product-item shorts" data-id="15">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Snake</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>
									<div class="product-item shorts" data-id="17">
                                        <div class="product discount product_filter">
                                            <div class="product_image">
                                                <img src="images/product_1.png" alt="">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">Brigade Clothing - Grizzly</a></h6>
                                                <div class="product_price">$520.00<span>$590.00</span></div>
                                            </div>
                                        </div>
                                        <div class="red_button add_to_cart_button"><a href="#" class="add-to-cart">add to cart</a></div>
                                    </div>

					</div>
				</div>
			</div>
		</div>
	</div>
<br><br>
	<video autoplay muted loop>
		<source src="assets/1102.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>BEST SELLERS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="1">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Let's Get High (Black)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="2">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Lucky (Black)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="4">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Coldest (Blue)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="8">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Global Terror (White)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="9">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Cyber Punk (Longsleeve)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="12">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - What Ever (Pullovers)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="14">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Racer Sweater (White)</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="16">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Mystery Machine</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item" data-id="18">
									<div class="product discount">
										<div class="product_image">
											<img src="images/product_1.png" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="5items.php">Brigade Clothing - Bay Area</a></h6>
											<div class="product_price">P700.00<span>750.00</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>shipping nationwide</h6>
							<p>Fast and reliable.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cash on delivery</h6>
							<p>Pay conveniently at your doorstep.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Hassle-free returns within 45 days.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>open everyday</h6>
							<p>10:00AM - 8:00PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Footer -->

<br><br><br><br>
<footer style="background-color: black; color: white;" class="bg3 p-t-75 p-b-32">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3 p-b-50">
				<br>
				<h4 class="stext-301 cl0 p-b-30">
					<a href="#"><img src="assets/Untitled design.png" class="footer-logo"></a>
				</h4>
				<p class="stext-107 cl7 size-201">
					Any questions? Let us know in store at Brigade Clothing, Brgy. Sta Ana, Taytay, Rizal.
				</p>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<br>
				<h7 class="stext-301 cl0 p-b-30" style="font-size: 22px; font-weight: 600;">Company</h7>
	
				<ul>
					<li class="p-b-10"><a href="5about.php" class="stext-107 cl7 footer-link hov-cl1 trans-04">About Brigade</a></li>
					<li class="p-b-10"><a href="#" class="stext-107 cl7 footer-link hov-cl1 trans-04">Features</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<br>
				<h7 class="stext-301 cl0 p-b-30" style="font-size: 22px; font-weight: 600;">Main Menu</h7>
				<ul>
					<li class="p-b-10"><a href="#" class="stext-107 cl7 footer-link hov-cl1 trans-04">Home</a></li>
					<li class="p-b-10"><a href="3shop.php" class="stext-107 cl7 footer-link hov-cl1 trans-04">Shop</a></li>
					<li class="p-b-10"><a href="3new.php" class="stext-107 cl7 footer-link hov-cl1 trans-04">New</a></li>
					<li class="p-b-10"><a href="3onsale.php" class="stext-107 cl7 footer-link hov-cl1 trans-04">On Sale</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-3 p-b-50">
				<br>
				<h7 class="stext-301 cl0 p-b-30" style="font-size: 22px; font-weight: 600;">Socials</h7>
				<ul>
					<li class="p-b-10"><a href="#" class="stext-107 cl7 footer-link hov-cl1 trans-04">Shopee</a></li>
					<li class="p-b-10"><a href="#" class="stext-107 cl7 footer-link hov-cl1 trans-04">Lazada</a></li>
					<li class="p-b-10">
						<a href="#"><i class="fa fa-facebook footer-icon" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram footer-icon" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<br><br><br>
		<div class="footer-bottom text-center">
			<p>© 2024 Brigade Clothing. All rights reserved.</p>
		</div>
	</div>
	<br><br>
	</footer>


<script>
      
	window.addEventListener('load', function() {
		const loadingPage = document.getElementById('loadingPage');
		const content = document.getElementById('content');
		const logo = document.getElementById('logo');
		
	   
		setTimeout(() => {
			logo.classList.add('zoom-fade'); 
		}, 2000); 

	  
		setTimeout(() => {
			loadingPage.style.display = 'none'; 
			content.style.display = 'block';   
		}, 3000); 
	});
</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script>
    // Initialize cart with a user-specific key
    const user = <?php echo json_encode($user); ?>; // Get the current user from PHP
    const cartKey = `cartItems_${user}`; // Create a unique key for this user's cart items
    const cartItems = JSON.parse(localStorage.getItem(cartKey)) || []; // Fetch items from user-specific key

    const cartItemsContainer = document.getElementById('cart-items-container');
    const shippingCost = 100; // Flat-rate shipping cost
    const freeShippingThreshold = 1500; // Threshold for free shipping

    function renderCartItems() {
        cartItemsContainer.innerHTML = ''; // Clear the container
        if (cartItems.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
            updateCartCount();
            calculateSummary();
            return;
        }

        cartItems.forEach((item, index) => {
            const cartItemDiv = document.createElement('div');
            cartItemDiv.className = 'cart-item';
            cartItemDiv.innerHTML = `
                <img src="${item.image}" alt="Product Image">
                <div class="cart-item-info">
                    <h6> ${item.name}</h6>
                    <p>₱ ${item.price}</p>
                </div>
                <div class="cart-item-quantity">
                    <button class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(${index}, -1)">-</button>
                    <input type="number" value="${item.quantity || 1}" min="1" id="quantity-${index}">
                    <button class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(${index}, 1)">+</button>
                </div>
                <button class="btn btn-link text-danger" onclick="removeItem(${index})"><i class="fa fa-trash"></i></button>
            `;
            cartItemsContainer.appendChild(cartItemDiv);
        });

        updateCartCount();
        calculateSummary();
    }

    function calculateSummary() {
        const subtotal = cartItems.reduce((total, item) => total + parseInt(item.price.replace(/[^\d.-]/g, '')) * item.quantity, 0);
        const shipping = subtotal >= freeShippingThreshold ? 0 : shippingCost;
        const total = subtotal + shipping;

        // Display the summary
        document.getElementById('order-subtotal').textContent = `Subtotal: ₱ ${subtotal.toFixed(2)}`;
        document.getElementById('order-shipping').textContent = `Shipping: ₱ ${shipping.toFixed(2)}`;
        document.getElementById('order-total').textContent = `Total    ₱ ${total.toFixed(2)}`;
    }

    function changeQuantity(index, delta) {
        const quantityInput = document.getElementById(`quantity-${index}`);
        let quantity = parseInt(quantityInput.value) + delta;
        if (quantity < 1) {
            quantity = 1; // Minimum quantity is 1
        }
        quantityInput.value = quantity;

        // Update the item in the cartItems array
        cartItems[index].quantity = quantity;
        // Update user-specific local storage
        localStorage.setItem(cartKey, JSON.stringify(cartItems));
        updateCartCount(); // Update the cart count in the header
        calculateSummary();
    }

    function removeItem(index) {
        // Remove the item from the cart items array
        cartItems.splice(index, 1);
        // Update user-specific local storage
        localStorage.setItem(cartKey, JSON.stringify(cartItems));
        // Re-render the cart items
        renderCartItems();
        updateCartCount();
    }

    function updateCartCount() {
        const cartCountElement = document.getElementById('checkout_items');
        cartCountElement.textContent = cartItems.reduce((total, item) => total + (item.quantity || 1), 0);
    }

    // Call the function to render cart items
    renderCartItems();
</script>

<script>
    // JavaScript to make the navbar opaque when scrolling
    window.addEventListener('scroll', function() {
        const mainNav = document.querySelector('.main_nav_container');
        
        if (window.scrollY > 50) { // Adjust the scroll threshold as needed
            mainNav.classList.add('opaque');
        } else {
            mainNav.classList.remove('opaque');
        }
    });
</script>
</body>

</html>
