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

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="contrast">

	<?php import('page-menu'); ?>

	<header class="page-header">
		<div class="two-columns">
			<div class="container">
				<div class="column large">
					<h1>Vragen? Of wil je iets anders weten?</h1>
					<p>We zijn er om jouw te helpen en we willen natuurlijk jouw vraag beantwoorden. Heb je die, stel ze gerust</p>
					<h2>Een keertje proefstuderen?<br>Stuur gerust een bericht.</h2>
					<p>Na het ontvangen van je bericht nemen we zo spoedig mogelijk contact met je op. Daarin doen we een voorstel voor een dag.</p>

					<h3>Wil je iets aan onze medewerkers persoonlijk vragen?</h3>
					<p>Dat kan, je vind de informatie hieronder</p>
				</div>
				<div class="column small">
					<form class="contact-form" action="contactReceived.php" method="post">
						<input type="text" placeholder="Volledige naam*" required>
						<input type="email" placeholder="E-mail*" required>
						<input type="phone" placeholder="Telefoonnummer">
						<textarea placeholder="Bericht*" required></textarea>
						<button class="btn small solid orange">
							<span>Verstuur</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</header>

	<main>

		<div class="maps">
			<div class="container">
				<div class="location">
					<h2>Bezoek ons!</h2>
					<p>Damocleslaan 3,<br>
						5631 KC<br>
						Eindhoven</p>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d39770.10910227309!2d5.500202!3d51.464916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d2191e58a7%3A0x68ab5ca46f15019f!2sDamocleslaan%203%2C%205631%20KC%20Eindhoven!5e0!3m2!1snl!2snl!4v1583486999795!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>

		<?php import('multiple-slider'); ?>

	</main>

	<?php import('footer') ?>

	<script src="./assets/js/counter.js"></script>
	<script src="./assets/js/accordion.js"></script>
	<script src="./assets/js/darkMode.js"></script>
	<script src="./assets/js/colorBlind.js"></script>
	<script src="./assets/js/swiper.js"></script>

</body>

</html>