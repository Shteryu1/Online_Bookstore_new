<?php
include 'connection.php'; // Връзка с базата, увери се, че в connection.php се дефинира $conn
?>
<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

	<?php
	// SQL заявка с JOIN за извличане на последните 10 книги със свързани автори и жанрове
	$sql = "SELECT books.title, authors.name AS author_name, genres.name AS genre_name, 
				books.price, books.image, books.stock, books.rating
			FROM books 
			JOIN authors ON books.author_id = authors.id 
			JOIN genres ON books.genre_id = genres.id 
			ORDER BY books.id DESC 
			LIMIT 10";

	$result = $conn->query($sql);
?>

<div class="books-container">
	<?php
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
	?>
			<div class="book-card">
				<div class="book-image">
					<img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
				</div>
				<div class="book-info">
					<p class="book-title"><?php echo htmlspecialchars($row['title']); ?></p>
					<p class="book-author"><?php echo htmlspecialchars($row['author_name']); ?></p>
					<p class="book-genre"><?php echo htmlspecialchars($row['genre_name']); ?></p>
					
					<div class="price-cart">
						<span class="book-price"><?php echo htmlspecialchars($row['price']); ?> лв.</span>
						<button class="add-to-cart-icon" title="Добави в количката">
							<svg xmlns="http://www.w3.org/2000/svg" fill="#2054d6" width="22" height="22" viewBox="0 0 24 24">
								<path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 
								2 2-.896 2-2-.896-2-2-2zm10 
								0c-1.104 0-2 .896-2 2s.896 2 2 
								2 2-.896 2-2-.896-2-2-2zM7.334 
								14h9.938c.89 0 1.667-.583 
								1.918-1.438l2.391-7.969A1 1 
								0 0 0 20.625 3H6.21l-.545-2.18A1 
								1 0 0 0 4.688 0H1a1 1 0 1 0 0 
								2h2.334l2.933 11.742A2 2 0 0 0 
								7.334 14z"/>
							</svg>
						</button>
					</div>
					
					<p class="book-stock">
						<?php 
							if ($row['stock'] > 0) {
								echo '<span class="in-stock">В наличност (' . htmlspecialchars($row['stock']) . ' бр.)</span>';
							} else {
								echo '<span class="out-of-stock">Изчерпано</span>';
							}
						?>
					</p>
					<p class="book-rating">
						<?php
							$fullStars = floor($row['rating']);
							$halfStar = ($row['rating'] - $fullStars) >= 0.5 ? 1 : 0;
							$emptyStars = 5 - ($fullStars + $halfStar);
							for ($i = 0; $i < $fullStars; $i++) {
								echo '<i class="fa-solid fa-star text-warning"></i>';
							}
							if ($halfStar) {
								echo '<i class="fa-solid fa-star-half-alt text-warning"></i>';
							}
							for ($i = 0; $i < $emptyStars; $i++) {
								echo '<i class="fa-regular fa-star text-warning"></i>';
							}
						?>
					</p>
				</div>
			</div>
	<?php
			}
		} else {
			echo "<p>Няма налични книги.</p>";
		}
	?>
</div>




</body>
</html>

<?php
// Затваряме връзката с базата
$conn->close();
?>

