@php
use App\General;
use App\Category;
use App\Menu;
use App\Product;
Use App\Cart;

$general = General::find(1);
$categories = Category::orderBy('name', 'asc')->get();
$menus = Menu::orderBy('id', 'asc')->get();
$products = Product::orderBy('id', 'desc')->get();

$carts = new Cart;
$carts = $carts->carts();

@endphp
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CareMe BD</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="careme is a ecommerce HTML5 Template">
		<meta name="keywords" content="careme, HTML5, ecommerce, Template">
		<meta name="author" content="CodexCoder">

		
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		
		
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/flaticon/flaticon.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

			<!-- CSRF Token -->
	    

	    
	</head>

	<body>
		<!-- hide menu option start here -->
		<div class="hb_left_bottom">
			<div class="hb_scroll_bottom scrollbar">
				<div class="offer_menu">
					<ul>
						<li><a href="#">Offers</a><span>3</span></li>
						<li><a href="#">Discount <span class="new_offer">New</span></a><span>4</span></li>
						<li><a href="#">Bundle</a><span>7</span></li>
					</ul>
				</div>
				<div class="main_menu">
					<ul class="d-xl-none">
						<li class="d-xl-none">
							<a href="JavaScript:Void(0);">Menu List</a>
							<ul>
								<li><a href="{{ route('index') }}">Home</a></li>
								<li><a href="{{ route('products') }}">Shop</a></li>
								<li><a href="#">New Arrivals</a></li>
								<li><a href="#">Popular Item</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="{{asset('assets/images/header/menu/01.png')}}" alt="meni-icon"> Beauty Care</a>
							<ul>
								<li><a href="#">Beauty Care 1</a></li>
								<li><a href="#">Beauty Care 2</a></li>
								<li><a href="#">Beauty Care 3</a></li>
								<li><a href="#">Beauty Care 4</a></li>
								<li><a href="#">Beauty Care 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="{{asset('assets/images/header/menu/02.png')}}" alt="meni-icon"> Bakery</a>
							<ul>
								<li><a href="#">Bakery 1</a></li>
								<li><a href="#">Bakery 2</a></li>
								<li><a href="#">Bakery 3</a></li>
								<li><a href="#">Bakery 4</a></li>
								<li><a href="#">Bakery 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="{{asset('assets/images/header/menu/03.png')}}" alt="meni-icon"> Consumer</a>
							<ul>
								<li><a href="#">Consumer 1</a></li>
								<li><a href="#">Consumer 2</a></li>
								<li><a href="#">Consumer 3</a></li>
								<li><a href="#">Consumer 4</a></li>
								<li><a href="#">Consumer 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="{{asset('assets/images/header/menu/04.png')}}" alt="meni-icon"> Electronics</a>
							<ul>
								<li><a href="#">Electronics 1</a></li>
								<li><a href="#">Electronics 2</a></li>
								<li><a href="#">Electronics 3</a></li>
								<li><a href="#">Electronics 4</a></li>
								<li><a href="#">Electronics 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/05.png" alt="meni-icon"> Food</a>
							<ul>
								<li><a href="#">Food 1</a></li>
								<li><a href="#">Food 2</a></li>
								<li><a href="#">Food 3</a></li>
								<li><a href="#">Food 4</a></li>
								<li><a href="#">Food 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/06.png" alt="meni-icon"> Vehicle Essentails</a>
							<ul>
								<li><a href="#">Vehicle Essentails 1</a></li>
								<li><a href="#">Vehicle Essentails 2</a></li>
								<li><a href="#">Vehicle Essentails 3</a></li>
								<li><a href="#">Vehicle Essentails 4</a></li>
								<li><a href="#">Vehicle Essentails 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/07.png" alt="meni-icon"> Cleaning</a>
							<ul>
								<li><a href="#">Cleaning 1</a></li>
								<li><a href="#">Cleaning 2</a></li>
								<li><a href="#">Cleaning 3</a></li>
								<li><a href="#">Cleaning 4</a></li>
								<li><a href="#">Cleaning 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/08.png" alt="meni-icon"> Health</a>
							<ul>
								<li><a href="#">Health 1</a></li>
								<li><a href="#">Health 2</a></li>
								<li><a href="#">Health 3</a></li>
								<li><a href="#">Health 4</a></li>
								<li><a href="#">Health 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/09.png" alt="meni-icon"> Furniture</a>
							<ul>
								<li><a href="#">Furniture 1</a></li>
								<li><a href="#">Furniture 2</a></li>
								<li><a href="#">Furniture 3</a></li>
								<li><a href="#">Furniture 4</a></li>
								<li><a href="#">Furniture 5</a></li>
							</ul>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/10.png" alt="meni-icon"> Baby Care</a>
							<ul>
								<li><a href="#">Baby Care 1</a></li>
								<li><a href="#">Baby Care 2</a></li>
								<li><a href="#">Baby Care 3</a></li>
								<li><a href="#">Baby Care 4</a></li>
								<li><a href="#">Baby Care 5</a></li>
							</ul>
						</li>
					</ul>

					<ul class="d-none d-xl-block">
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/01.png" alt="meni-icon"> Beauty Care</a>
							<div class="mega_menu mm_st_1">
								<div class="mm_bg">
									<img src="assets/images/header/mega-menu/01.png" alt="mm_menu">
								</div>
								<div class="title">
									<h6>Bakery</h6>
								</div>
								<div class="row">
									<div class="col-6">
										<ul>
											<li><a href="#0">Cake</a></li>
											<li><a href="#">Bread & Buns</a></li>
											<li><a href="#">Muffin & Cupcakes</a></li>
											<li><a href="#">Ice Cream Raw Materials</a></li>
											<li><a href="#">Rush Toast</a></li>
											<li><a href="#">Pastry</a></li>
											<li><a href="#">Pies</a></li>
										</ul>
									</div>
									<div class="col-6">
										<ul>
											<li><a href="#">Bakery Sweets</a></li>
											<li><a href="#">Belgian Waffle Premix</a></li>
											<li><a href="#">Waffle Cone Premix</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/02.png" alt="meni-icon"> Bakery</a>
							<div class="mega_menu mm_st_2">
								<div class="title">
									<h6>Beauty Care</h6>
								</div>
								<div class="row">
									<div class="col-4">
										<div class="mega_title">
											<h6>Mascara</h6>
										</div>
										<ul>
											<li><a href="#">Mascara</a></li>
											<li><a href="#">Foundation</a></li>
											<li><a href="#">Lip Gloss</a></li>
											<li><a href="#">Eyeshadow</a></li>
											<li><a href="#">Eyeliner</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-4">
										<div class="mega_title">
											<h6>Shampoo</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-4">
										<div class="mega_title">
											<h6>Moisturizer</h6>
										</div>
										<ul>
											<li><a href="#">Moisturizer</a></li>
											<li><a href="#">Cleanser</a></li>
											<li><a href="#">Anti-Aging</a></li>
											<li><a href="#">Exfoliators, Scrubs</a></li>
											<li><a href="#">Eye Treatments</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/03.png" alt="meni-icon"> Consumer</a>
							<div class="mega_menu mm_st_3">
								<div class="title">
									<h6>Consumer</h6>
								</div>
								<div class="row">
									<div class="col-3">
										<div class="mega_title">
											<h6>Food & Beverage</h6>
										</div>
										<ul>
											<li><a href="#">Coffee</a></li>
											<li><a href="#">Tea</a></li>
											<li><a href="#">popcorn</a></li>
											<li><a href="#">chicken nuggets</a></li>
											<li><a href="#">Packaged fruit juice</a></li>
											<li><a href="#">Diet colas</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_title">
											<h6>Cosmetics</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_title">
											<h6>Cosmetics</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_img">
											<a href="#"><img src="assets/images/header/mega-menu/02.png" alt="mega_img"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/04.png" alt="meni-icon"> Electronics</a>
							<div class="mega_menu mm_st_4">
								<div class="title">
									<h6>Electronics</h6>
								</div>
								<div class="row">
									<div class="col-3">
										<div class="mega_img">
											<img src="assets/images/header/mega-menu/03.png" alt="mega_img">
										</div>
										<div class="mega_title">
											<h6>laptop & netbook</h6>
										</div>
										<ul>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Asus</a></li>
											<li><a href="#">HP</a></li>
											<li><a href="#">Acer</a></li>
											<li><a href="#">Lenovo</a></li>
											<li><a href="#">Dell MSI</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_img">
											<img src="assets/images/header/mega-menu/04.png" alt="mega_img">
										</div>
										<div class="mega_title">
											<h6>Computer</h6>
										</div>
										<ul>
											<li><a href="#">Casing</a></li>
											<li><a href="#">Pawer Supply</a></li>
											<li><a href="#">Processor</a></li>
											<li><a href="#">CPU Cooler</a></li>
											<li><a href="#">Graphics Card</a></li>
											<li><a href="#">Motherboard</a></li>
											<li><a href="#">Hard Disk Drive</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_img">
											<img src="assets/images/header/mega-menu/05.png" alt="mega_img">
										</div>
										<div class="mega_title">
											<h6>Office Equipment</h6>
										</div>
										<ul>
											<li><a href="#">Printer</a></li>
											<li><a href="#">Pos Printer</a></li>
											<li><a href="#">Scanner</a></li>
											<li><a href="#">Fax Toner</a></li>
											<li><a href="#">Cartridge</a></li>
											<li><a href="#">Conference Systems</a></li>
											<li><a href="#">Money Counting Machine</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_img">
											<img src="assets/images/header/mega-menu/06.png" alt="mega_img">
										</div>
										<div class="mega_title">
											<h6>Camera</h6>
										</div>
										<ul>
											<li><a href="#">Action Camera</a></li>
											<li><a href="#">Camera Lenses</a></li>
											<li><a href="#">Digital Camera</a></li>
											<li><a href="#">DSLR</a></li>
											<li><a href="#">Handycam</a></li>
											<li><a href="#">Cideo Camera</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/05.png" alt="meni-icon"> Food</a>
							<div class="mega_menu mm_st_5">
								<div class="title">
									<h6>Foods</h6>
								</div>
								<div class="row">
									<div class="col-4">
										<div class="mega_title">
											<h6>Mascara</h6>
										</div>
										<ul>
											<li><a href="#">Mascara</a></li>
											<li><a href="#">Foundation</a></li>
											<li><a href="#">Lip Gloss</a></li>
											<li><a href="#">Eyeshadow</a></li>
											<li><a href="#">Eyeliner</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-4">
										<div class="mega_title">
											<h6>Shampoo</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-4">
										<div class="mega_title">
											<h6>Moisturizer</h6>
										</div>
										<ul>
											<li><a href="#">Moisturizer</a></li>
											<li><a href="#">Cleanser</a></li>
											<li><a href="#">Anti-Aging</a></li>
											<li><a href="#">Exfoliators, Scrubs</a></li>
											<li><a href="#">Eye Treatments</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/06.png" alt="meni-icon"> Vehicle Essentails</a>
							<div class="mega_menu mm_st_6">
								<div class="mm_bg">
									<img src="assets/images/header/mega-menu/07.png" alt="mm_menu">
								</div>
								<div class="title">
									<h6>Bakery</h6>
								</div>
								<div class="row">
									<div class="col-6">
										<ul>
											<li><a href="#0">Cake</a></li>
											<li><a href="#">Bread & Buns</a></li>
											<li><a href="#">Muffin & Cupcakes</a></li>
											<li><a href="#">Ice Cream Raw Materials</a></li>
											<li><a href="#">Rush Toast</a></li>
											<li><a href="#">Pastry</a></li>
											<li><a href="#">Pies</a></li>
										</ul>
									</div>
									<div class="col-6">
										<ul>
											<li><a href="#">Bakery Sweets</a></li>
											<li><a href="#">Belgian Waffle Premix</a></li>
											<li><a href="#">Waffle Cone Premix</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="JavaScript:Void(0);"><img src="assets/images/header/menu/07.png" alt="meni-icon"> Cleaning</a>
							<div class="mega_menu mm_st_7">
								<div class="mm_bg">
									<img src="assets/images/header/mega-menu/08.png" alt="mm_menu">
								</div>
								<div class="title">
									<h6>Cleaning</h6>
								</div>
								<div class="row">
									<div class="col-3">
										<div class="mega_title">
											<h6>Food & Beverage</h6>
										</div>
										<ul>
											<li><a href="#">Coffee</a></li>
											<li><a href="#">Tea</a></li>
											<li><a href="#">popcorn</a></li>
											<li><a href="#">chicken nuggets</a></li>
											<li><a href="#">Packaged fruit juice</a></li>
											<li><a href="#">Diet colas</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_title">
											<h6>Cosmetics</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
									<div class="col-3">
										<div class="mega_title">
											<h6>Cosmetics</h6>
										</div>
										<ul>
											<li><a href="#">Shampoo</a></li>
											<li><a href="#">Conditioner</a></li>
											<li><a href="#">Styling Cream, Mousse</a></li>
											<li><a href="#">+ Gel</a></li>
											<li><a href="#">Hair + Scalp</a></li>
											<li><a href="#">Treatments</a></li>
											<li><a href="#">Hairspray + Finishing</a></li>
											<li><a href="#">Spray</a></li>
										</ul>
										<a href="#" class="text_btn">View All<i class="fas fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="view_all">
					<a href="#">View All</a>
				</div>
				<div class="main_btn">
					<a  class="btn" href="#">Become a Retailor</a>
				</div>
			</div>
		</div>
		<!-- hide menu option ending here -->

		<!-- singin & loging part start here -->
		{{-- <div class="sign_login scrollbar">
			<div class="sign_login_close"></div>
			<div class="container">
				<div class="box_sign_login">
					<div class="Close_sing" title='close-btn'><i class="fas fa-times"></i></div>
					<ul class="log_sign_nav">
						<li class="sign_show active" data-target="sign-show">Sign Up</li>
						<li class="login_show" data-target="login-show">Login</li>
					</ul>
					<div class="log_sign_content sign-show">
						<div class="log_in">
							<ul class="log_in_nav">
								<li class="retailer_show active" data-target="retailer-show"><i class="fas fa-check"></i> Retailer</li>
								<li class="customer_show" data-target="customer-show"><i class="fas fa-check"></i> Customer</li>
							</ul>
							<div class="log_in_content retailer-show">
								<div class="retailer_content">
									<div class="thumb">
										<img src="assets/images/header/icon/03.png" alt="header">
										<span>Retailer Info</span>
									</div>
									<p>I am a Retailer of ABL</p>
								</div>
								<div class="customer_content">
									<div class="thumb">
										<img src="assets/images/header/icon/03.png" alt="header">
										<span>Customer Info</span>
									</div>
									<p>I am a Customer of ABL</p>
								</div>
							</div>
							<div class="facebook_login">
								<a href="#" class="btn"><i class="fab fa-facebook-f"></i><span>Login with</span> Facebook</a>
							</div>
							<div class="login_form">
								<h5><span>Or</span></h5>
								<div class="user_pass_from">
									<div class="input_one">
										<i class="fas fa-envelope"></i>
										<input type="text" placeholder="Enter Username" name="uname" required>
									</div>
									<div class="input_two">
										<i class="fas fa-lock"></i>
										<input type="password" placeholder="Enter Password" name="psw" required>
									</div>
									<div class="remember_forget">
										<lebal><input type="checkbox" checked="checked" name="remember"> Remember me</lebal>
										<span class="psw">Forgot <a href="#">password?</a></span>
									</div>
									<button type="submit">Login</button>
									<p>Don’t Have Account? <a href="#">Sign Up</a></p>
								</div>
							</div>
						</div>

						<div class="sign_in">
							<ul class="sign_in_nav">
								<li class="retailer_show active" data-target="retailer-show"><i class="fas fa-check"></i> Retailer</li>
								<li class="customer_show" data-target="customer-show"><i class="fas fa-check"></i> Customer</li>
							</ul>
							<div class="sign_in_content retailer-show">
								<div class="retailer_content">
									<div class="thumb">
										<img src="assets/images/header/icon/03.png" alt="header">
										<span>Retailer Info</span>
									</div>
									<p>I am a Retailer of ABL</p>
								</div>
								<div class="customer_content">
									<div class="thumb">
										<img src="assets/images/header/icon/03.png" alt="header">
										<span>Customer Info</span>
									</div>
									<p>I am a Customer of ABL</p>
								</div>
							</div>
							<div class="facebook_login">
								<a href="#" class="btn"><i class="fab fa-facebook-f"></i><span>Login with</span> Facebook</a>
							</div>
							<div class="login_form">
								<h5><span>Or</span></h5>
								<div class="user_pass_from">
									<div class="input_one">
										<i class="fas fa-user"></i>
										<input type="text" placeholder="Enter Username" name="uname" required>
									</div>
									<div class="input_two">
											<i class="fas fa-envelope"></i>
										<input type="email" placeholder="Enter Email" name="email" required>
									</div>
									<div class="input_three">
										<i class="fas fa-mobile-alt"></i>
										<input type="number" placeholder="+880" name="number" required>
									</div>
									<div class="input_four">
										<i class="fas fa-lock"></i>
										<input type="password" placeholder="Enter Password" name="psw" required>
									</div>
									<div class="remember_forget">
										<p>By creating an account you will be up to date on an order's status, and keep track of the orders</p>
									</div>
									<button type="submit">Sign Up</button>
									<p>Don’t Have Account? <a href="#">Sign In</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- singin & loging part ending here -->


		<!-- header section start here -->
		<header class="header-section">
			<div class="header-top">
				<div class="container">
					<div class="d-flex justify-content-between flex-wrap align-items-center">
						<div class="ht_left">
							<p>Help Line:<span>{{$general->phone_number}}</span></p>
						</div>
						<div class="ht_right">
							<div class="d-flex justify-content-end justify-content-lg-between flex-wrap align-items-center">
								<div class="ht_r_left">
									<div class="ht_serch_all">
										<form action="{{route('product.search')}}" method="get">
										<div class="d-flex justify-content-between align-items-center">
											<input type="text" placeholder="Search" name="search">
											<select name="categories">
												<option value="">All Categories</option>
												@foreach($categories as $category)
												<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
											<button type="submit" class="">
												<i class="flaticon-magnifying-glass"></i>
											</button>
										</div>
										</form>
									</div>
								</div>
								<div class="ht_r_right">
									<ul>
										<li><a href="{{$general->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="{{$general->twitter}}"><i class="fab fa-twitter"></i></a></li>
										<li><a href="{{$general->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="{{$general->google}}"><i class="fab fa-google"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="ht_r_right d-md-none">
							<div class="ht_icon_all_option">
								<div class="ht_option">Log In</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<div class="d-flex justify-content-between flex-wrap align-items-center">
						<div class="logo_area">
							<div class="menu_bar">
								<i class="fas fa-bars"></i>
							</div>
							<div class="logo">
								<a href="index.html"><img src="{{asset('images/'.$general->logo)}}" alt="logo"></a>
							</div>
						</div>
						<div class="menu_area">
							<div class="main-menu d-none d-xl-block">
								<ul>
									@foreach($menus as $menu)
									<li><a href="{{ $menu->route }}">{{$menu->name}}</a></li>
									@endforeach
								</ul>

								{{-- <ul>
									<li><a href="{{ route('index') }}" class="active">Home</a></li>
									<li><a href="{{ route('products') }}">Shop</a></li>
									<li><a href="#">New Arrivals<span class="new_offer">new</span></a></li>
									<li><a href="#">Popular Item</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul> --}}
							</div>
							<div class="author_cart_area">
								<div class="ht_icon_all">
									<div class="wish_list">
										<i class="far fa-heart"></i>
										<span>0</span>
									</div>
									<div class="ht_icon_all_cart">
										<ul>
											<li class="cart">
												<a href="{{ route('carts') }}"><img src="{{asset('assets/images/header/icon/02.png')}}" alt="icon">

												<span>
													@if(!is_null($carts))
														@php $total_products = 0; @endphp
														@foreach($carts as $cart)
															@php
																$total_products += $cart->product_quantity;

															@endphp
														@endforeach
														{{$total_products}}
													@else
														0
													@endif
												</span>

												</a>
												{{-- <div class="cart_content">
													<div class="cart_title">
														<div class="add_item">4 Items Added</div>
														<div class="list_close"><a href="#">Close</a></div>
													</div>
													<div class="cart_scr scrollbar">
														<div class="cart_con_item">
															<div class="cart_item">
																<div class="cart_inner">
																	<div class="cart_top">
																		<div class="thumb">
																			<a href="#"><img src="assets/images/header/buycart/01.png" alt=""></a>
																		</div>
																		<div class="content">
																			<a href="#">Split Remedy Split End Shampoo</a>
																		</div>
																		<div class="remove_btn">
																			<a href="#"><i class="fas fa-times"></i></a>
																		</div>
																	</div>
																	<div class="cart_bottom">
																		<div class="sing_price">Tk. 140</div>
																		<div class="cart-plus-minus">
																			<div class="dec qtybutton">-</div>
																			<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
																			<div class="inc qtybutton">+</div>
																		</div>
																		<div class="total_price">Tk. 280.00</div>
																	</div>
																</div>
															</div>
															<div class="cart_item">
																<div class="cart_inner">
																	<div class="cart_top">
																		<div class="thumb">
																			<a href="#"><img src="assets/images/header/buycart/02.png" alt=""></a>
																		</div>
																		<div class="content">
																			<a href="#">Split Remedy Split End Shampoo</a>
																		</div>
																		<div class="remove_btn">
																			<a href="#"><i class="fas fa-times"></i></a>
																		</div>
																	</div>
																	<div class="cart_bottom">
																		<div class="sing_price">Tk. 140</div>
																		<div class="cart-plus-minus">
																			<div class="dec qtybutton">-</div>
																			<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
																			<div class="inc qtybutton">+</div>
																		</div>
																		<div class="total_price">Tk. 280.00</div>
																	</div>
																</div>
															</div>
															<div class="cart_item">
																<div class="cart_inner">
																	<div class="cart_top">
																		<div class="thumb">
																			<a href="#"><img src="assets/images/header/buycart/03.png" alt=""></a>
																		</div>
																		<div class="content">
																			<a href="#">Split Remedy Split End Shampoo</a>
																		</div>
																		<div class="remove_btn">
																			<a href="#"><i class="fas fa-times"></i></a>
																		</div>
																	</div>
																	<div class="cart_bottom">
																		<div class="sing_price">Tk. 140</div>
																		<div class="cart-plus-minus">
																			<div class="dec qtybutton">-</div>
																			<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
																			<div class="inc qtybutton">+</div>
																		</div>
																		<div class="total_price">Tk. 280.00</div>
																	</div>
																</div>
															</div>
															<div class="cart_item">
																<div class="cart_inner">
																	<div class="cart_top">
																		<div class="thumb">
																			<a href="#"><img src="assets/images/header/buycart/04.png" alt=""></a>
																		</div>
																		<div class="content">
																			<a href="#">Split Remedy Split End Shampoo</a>
																		</div>
																		<div class="remove_btn">
																			<a href="#"><i class="fas fa-times"></i></a>
																		</div>
																	</div>
																	<div class="cart_bottom">
																		<div class="sing_price">Tk. 140</div>
																		<div class="cart-plus-minus">
																			<div class="dec qtybutton">-</div>
																			<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
																			<div class="inc qtybutton">+</div>
																		</div>
																		<div class="total_price">Tk. 280.00</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="cart_scr_bottom">
														<ul>
															<li>
																<div class="title">Subtotal</div>
																<div class="price">Tk. 1045.00</div>
															</li>
															<li>
																<div class="title">Shipping</div>
																<div class="price">Tk. 40.00</div>
															</li>
															<li>
																<div class="title">Cart Total</div>
																<div class="price">Tk. 1085.00</div>
															</li>
														</ul>
														<a href="cart-page.html" class="btn">Place Order</a>
													</div> --}}
												</div>
											</li>
										</ul>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section ending here -->
		
		@if(Auth::user()->remember_token != Null)

		
		<div class="container">
			<div class="alert alert-warning" role="alert">
			<div class="row">
				<div class="col-md-6">
				  Please go to you email and verify email address.
				 </div>

				 <div class="col-md-6">
				  <a href="{{route('resend.verification.email')}}" class="btn btn-success float-right"
				  style="
					    border-radius: 0px;
					    background: #218838;
					    padding: 6px 52px;
					"
				  >Resend Email</a>
				 </div>
				</div>
			</div>
		</div>
		@endif




    


        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                    </ul>
                </div>
            </div>
        </nav>


    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="margin-top: -55px;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('user.profile.myaccounts')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  My Accounts <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.profile.orders')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('wishlists')}}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Wishlists
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Reports
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        </nav>





		@yield('content')

		      </div>
    	</div>
		
		<!-- customer vesit section start here -->
		<div class="cus_vis_section">
			<div class="container">
				<div class="section-wrapper">
					<div class="cus_vis_items">
						<div class="cus_vis_item">
							<div class="cus_vis_inner">
								<div class="cus_vis_content">
									<div class="cus_icon"><img src="{{asset('assets/images/counter/tags.png')}}" alt="coubter"></div>
									<div class="cus_count">
										<h3 class="counter">{{ $categories->count()}}</h3><span>+</span>
									</div>
									<div class="cus_desc">
										<p>Exclusive Categories</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cus_vis_item">
							<div class="cus_vis_inner">
								<div class="cus_vis_content">
									<div class="cus_icon"><img src="{{asset('assets/images/counter/bag.png')}}" alt="coubter"></div>
									<div class="cus_count">
										<h3 class="counter">{{$products->count()}}</h3><span>+</span>
									</div>
									<div class="cus_desc">
										<p>Products & Accessories</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cus_vis_item">
							<div class="cus_vis_inner">
								<div class="cus_vis_content">
									<div class="cus_icon"><img src="{{asset('assets/images/counter/cus.png')}}" alt="coubter"></div>
									<div class="cus_count">
										<h3 class="counter">10890</h3><span>+</span>
									</div>
									<div class="cus_desc">
										<p>Happy Customers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- customer vesit section ending here -->


		<!-- footer section start here -->
		<footer>
			<div class="footer-top padding-tb">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-sm-6">
							<div class="fr_left_side">
								<div class="ft_item">
									<div class="ft_logo_area">
										<a href="index.html">
											<img src="{{asset('images/'.$general->logo)}}" alt="ft_logo">
										</a>
										<p>{{$general->about}}</p>
										<div class="ft_s_media">
											<ul>
												<li><a class="facebook" href="{{$general->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
												<li class="twitter"><a href="{{$general->twitter}}"><i class="fab fa-twitter"></i></a></li>
												<li class="linkedin"><a href="{{$general->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
												<li class="google"><a href="{{$general->google}}"><i class="fab fa-google"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="ft_item ft_bg_item">
								<div class="ft_flow">
									<div class="ft_title">
										<h6>Follow Us</h6>
									</div>
									<div class="ft_body">
										<ul>
											<li>
												<div class="ft_icon"><i class="fas fa-map-marker-alt"></i></div>
												<div class="ft_content">
													<p>{{$general->address}}</p>
												</div>
											</li>
											<li>
												<div class="ft_icon"><i class="fas fa-phone-volume"></i></div>
												<div class="ft_content">
													<p>{{$general->phone_number}}</p>
												</div>
											</li>
											<li>
												<div class="ft_icon"><i class="fas fa-envelope"></i></div>
												<div class="ft_content">
													<a href="mailto:{{$general->email}}">{{$general->email}}</a>
												</div>
											</li>
											<li>
												<div class="ft_icon"><i class="fas fa-globe-asia"></i></div>
												<div class="ft_content">
													<a href="{{$general->address}}">{{$general->website}}</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-6">
							<div class="ft_item">
								<div class="ft_flow">
									<div class="ft_title">
										<h6>Get to Know Us</h6>
									</div>
									<div class="ft_body">
										<ul>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Refund Policy</a></li>
											<li><a href="#">Terms & Conditions</a></li>
											<li><a href="#">Gift Cards</a></li>
											<li><a href="#">Careers</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-6">
							<div class="ft_item">
								<div class="ft_flow">
									<div class="ft_title">
										<h6>Need Help?</h6>
									</div>
									<div class="ft_body">
										<ul>
											<li><a href="#">Help Line</a></li>
											<li><a href="#">Contact Care Me</a></li>
											<li><a href="#">Shipping Guideline</a></li>
											<li><a href="#">Tracking Your Item</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p>{{$general->copyright}}</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer section start here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="flaticon-chevron-up"></i></a>
		<!-- scrollToTop ending here -->

		
		<script src="{{ asset('assets/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/js/news-ticker.min.js') }}"></script>
		<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<script src="{{ asset('assets/js/functions.js') }}"></script>
	</body>
</html>

@yield('script')