<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ">
    <link rel="stylesheet" href="frontbs/css/style.css" ">
</head>

<body>
<body>
		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="/index" class="logo">
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

    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                <div class="d-flex">
                    
                </div>
                <div class="d-flex flex-column pt-4">
                    <div>
                        <h5 class="text-uppercase font-weight-normal">keranjang</h5>
                    </div>
                    <div class="font-weight-normal">2 Item</div>
                </div>
                <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                    <div class="px-lg-5 mr-lg-5" id="produc">Produk</div>
                    <div class="px-lg-5 ml-lg-5" id="prc">Harga</div>
                    <div class="px-lg-5 ml-lg-1" id="quantity">Kuantitas</div>
                    <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img src="https://i.pinimg.com/564x/03/99/9b/03999ba7ec66d061074d83b58392f94b.jpg" width="150" height="150" alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>Refrigerator</h6>
                            </div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> M</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>Rp 1.***..00</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>Rp 1.***..00</b></div>
                    <div class="close">&times;</div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img src="https://i.pinimg.com/564x/78/bf/a8/78bfa893270a0b531705b1c56f25674d.jpg" width="150" height="150" alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6>Laptop</h6>
                            </div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> XL</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>Rp 1.***..00</b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>Rp 1.***..00</b></div>
                    <div class="close">&times;</div>
                </div>

            </div>
        </div>
    </div>
    <div class="container bg-light rounded-bottom py-4" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                       <a href="/index"><button class="btn btn-sm bg-light border border-dark">GO BACK</button></a> 
                    </div>
                    <div class="px-md-0 px-1" id="footer-font">
                        <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">Rp 1.***..00</span></b>
                    </div>
                    <div>
                        <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>