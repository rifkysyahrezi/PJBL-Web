<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro-Tok</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="frontbs/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="frontbs/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="frontbs/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="frontbs/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="frontbs/css/style.css" />


</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +62-120-1202-1020</a></li>
					<li><a href="/profil"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> Indonesia, Jawa Timur, Malang</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="/login"><i class="fa fa-user-o"></i> Akun saya</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/logo1.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<select class="input-select">
									<option value="0">Kategori</option>
									<option value="1">Kategori 01</option>
									<option value="1">Kategori 02</option>
								</select>
								<input class="input" placeholder="Cari Barang">
								<button class="search-btn">Cari</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">

							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Wishlist</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a href="/checkout" , class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Keranjang</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Nama Produk</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>Rp 1***.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">Nama Produk</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>Rp 1***.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) terpilih</small>
										<h5>SUBTOTAL: Rp 1***.00</h5>
									</div>
									<div class="cart-btns">
										<a href="/cart">Keranjang</a>
										<a href="/checkout">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->
							<!--profil-->

							<!--/profil-->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="/index">Home</a></li>
					<li><a href="/kategori">Kategori</a></li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Produk Baru</h3>
						<div class="section-nav">
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1">
									<!-- product -->
									<div class="product">
									<a href="/product">
										<div class="product-img">
											<img src="./img/product01.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">Baru</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name">Nama</h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>
												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										</a>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product02.png" alt="">
											<div class="product-label">
												<span class="new">Baru</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product03.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product04.png" alt="">
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>

									<div class="product">
										<div class="product-img">
											<img src="./img/product05.png" alt="">
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="/product">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->
								</div>
								<div id="slick-nav-1" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Terlaris</h3>
						<div class="section-nav">
						</div>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab2" class="tab-pane fade in active">
								<div class="products-slick" data-nav="#slick-nav-2">
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product06.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
											<div></div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product07.png" alt="">
											<div class="product-label">
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product08.png" alt="">
											<div class="product-label">
												<span class="sale">-30%</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>
											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>
												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product09.png" alt="">
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->

									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="./img/product01.png" alt="">
										</div>
										<div class="product-body">
											<p class="product-Kategori">Kategori</p>
											<h3 class="product-name"><a href="#">Nama Produk</a></h3>
											<h4 class="product-price">Rp 1***.00 <del class="product-old-price">Rp 1***.00</del></h4>

											<div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Wishlist</span></button>

												<button class="quick-view"><i class="fa fa-cart-plus"></i><span class="tooltipp">Keranjang</span></button>
											</div>
										</div>
										
									</div>
									<!-- /product -->
								</div>
								<div id="slick-nav-2" class="products-slick-nav"></div>
							</div>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- /Products tab & slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer">
							<h3 class="footer-title">Tentang</h3>
							<p>Elektro-Tok adalah website yang dibuat dengan tujuan pengerjaan tugas besar Rekayasa Perangkat Lunak</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-phone"></i>+62-853-3467-8836</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>rifkyachmadsyahrezy@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-logo">
							<a href="#" class="logo-footer">
								<img class="sizelogo" src="./img/logo1.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<!-- /top footer -->

	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>