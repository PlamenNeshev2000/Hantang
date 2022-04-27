<?php include '_functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hantang Chinese School</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Swiper Slider -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<script src="https://unpkg.com/swiper/js/swiper.js"></script>
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
	<!-- Swiper Slider -->

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">

</head>

<button  onclick ="DarkMode()">Toggle dark mode</button>
<button  onclick ="HighContrast ()">Toggle high contrast</button>
<button  onclick ="NormalContrast ()">Toggle normal contrast</button>


				 
				 
<body id="contrast">
	
	<?php import('page-menu'); ?>

	<header class="page-header">
		<?php import('fullscreen-slider'); ?>

		<!-- WEATHER -->
		<div style="text-align: center;margin-top:10vh;">
			<h1>The current weather</h1>
			<div style="font-size: 2rem;margin-top:2rem;">
				<span id="weather-city" onmouseover="bigChar(this)" onmouseout="normalChar(this)"></span>
				<span> | </span>
				<span id="weather-temp" onmouseover="bigChar(this)" onmouseout="normalChar(this)"></span>
			</div>
		</div>
		<!-- WEATHER -->

		<!-- SEARCH IN PAGE -->
		<div style="text-align: center;margin-top:10vh;">
			<form name="pageSearchForm" id="pageSearchForm" action="">
				<input type="text" class="pageSearchInput" name="pageSearchInput" placeholder="Search in website" />
				<input type="submit" name="pageSearchSubmit" value="Find" />
			</form>
		</div>
		<!-- SEARCH IN PAGE -->

		<div class="container center">
			<?php import('facts'); ?>
		</div>
	</header>

	<main>
		<div class="container two-columns">
			
			<?php import('latest-news'); ?>
			
			<?php import('agenda'); ?>
		
		</div>

		<div class="container">

			<div class="buttons-group">
				<a href="courses.php" class="btn solid orange">
					<div class="square"></div>
					<span>Onze curcussen</span>
					<div class="arrow-right"></div>
				</a>
				<a href="about.php" class="btn solid orange">
					<div class="square"></div>
					<span>Over ons</span>
					<div class="arrow-right"></div>
				</a>
				<a href="contact.php" class="btn solid orange">
					<div class="square"></div>
					<span>Neem contact op</span>
					<div class="arrow-right"></div>
				</a>
			</div>

		</div>
	
	</main>

	<?php import('footer') ?>

	<script src="./assets/js/counter.js"></script>
	<script src="./assets/js/accordion.js"></script>
	<script src="./assets/js/darkMode.js"></script>
	<script src="./assets/js/colorBlind.js"></script>
	<script src="./assets/js/swiper.js"></script>
	<script src="./assets/js/weather.js"></script>

	<script src="js/doSearch.js"></script>
	<script src="js/searchPage.js"></script>
	<script src="js/signIn.js"></script>
	<script src="js/signUp.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/textHover.js"></script>
	<script src="js/DarkMode.js"></script>
	<script src="js/newSearch.js"></script>

</body>

</html>