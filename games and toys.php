<?php
include 'connection.php';
?>
<head>
	<title>BookSaw</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="css/vendor.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-6">
						<div class="right-element">
							<a href="#" class="user-account for-buy"><i
									class="icon icon-user"></i><span>Account</span></a>
							<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0
									$)</span></a>

							<div class="action-menu">

								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form role="search" method="get" class="search-box">
										<input class="search-field text search-input" placeholder="Search"
											type="search">
									</form>
								</div>
							</div>

						</div><!--top-right-->
					</div>

				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="index.php"><img src="images/main-logo.png" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="index.php">Начало</a></li>
									<li class="menu-item has-sub">
										<a href="books.php" class="nav-link">Книги</a>

						 					<ul>	
											 <li class="active"><a href="index.html"> Дом, градина и хоби</a></li>
												<li><a href="index.html">Научна фантастика, фентъзи и хорър</a></li>
												<li><a href="index.html">Криминални и трилъри</a></li>
												<li><a href="index.html">Романтични </a></li>
												<li><a href="index.html">Световна проза</a></li>
												<li><a href="index.html">Българска литература</a></li>
												<li><a href="index.html">Хумор</a></li>
												<li><a href="index.html">Комикси</a></li>
												<li><a href="index.html">Здраве и семейство</a></li>
												<li><a href="index.html">Популярна психология</a></li>
												<li><a href="index.html">История, културология и публицистика</a></li>
												<li><a href="index.html">Изкуство, фотография, кино, музика</a></li>
												<li><a href="index.html">Духовност, митология, езотерика</a></li>
												<li><a href="index.html">Бизнес</a></li>
												<li><a href="index.html">Туризъм и спорт</a></li>
											</ul>
										

									</li>
									<li class="menu-item"><a href="music.php">Музика</a></li>
            						<li class="menu-item"><a href="movies.php">Филми</a></li>
           						 	<li class="menu-item"><a href="games and toys.php">Игри и играчки</a></li>
            						<li class="menu-item"><a href="school materials.php">Училищни материали</a></li>
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>
		
	</div>
</body>