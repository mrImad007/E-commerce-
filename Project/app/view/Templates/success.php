<!-- 
Project: Electro Maroc
Version: Beta 
Assigned to:  Imad Eddine Zaoui
Project type: E-commerce web site
-->
<?php require (APPROOT.'/view/components/header.php');?>
<body>
    <!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="./index.php" class="logo">
						<img src="<?= URLROOT ?>/ElectroSite/public/images/icons/LogoElectro.png" alt="LOGO" title="ELECTRO MAROC">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/index">Home</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/products">Shop</a>
							</li>

							<li>
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/cart">Mycart</a>
							</li>

							<li>
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/blog">Blog</a>
							</li>

							<li>
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/about">About</a>
							</li>

							<li>
								<a href="<?= URLROOT ?>/ElectroSite/public/Pages/contact">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="<?= URLROOT ?>/ElectroSite/public/images/icons/LogoElectro.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">
				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/index">Home</a>
				</li>

				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/Pages/product">Shop</a>
				</li>

				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/Pages/cart" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/Pages/blog">Blog</a>
				</li>

				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/Pages/about">About</a>
				</li>

				<li>
					<a href="<?= URLROOT ?>/ElectroSite/public/Pages/contact">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="<?= URLROOT ?>/ElectroSite/public/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header><br><br>
    
</body>
</html>