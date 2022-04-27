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

<body id="contrast">

	<?php import('page-menu'); ?>

	<header class="page-header">
		<div class="two-columns">
			<div class="container">
				<div class="column large">
					<h1>Get in touch? Sure!</h1>
					<p>We’re here to help and answer any question you might have. We look forward hearing from you</p>
					<h2>Do you want to try out any of our classes?<br>Please send a message!</h2>
					<p>We will reach out to you and then we will gladly to invite you to one of our classes in the near future.</p>

					<h3>Want to get in contact with one of our staff members?</h3>
					<p>You can find their contact info below.</p>
				</div>
				<div class="column small">
					<form class="contact-form" action="contactReceived.php" method="post">
						<input type="text" placeholder="Full Name*" required>
						<input type="email" placeholder="E-mail*" required>
						<input type="phone" placeholder="Phone*">
						<textarea placeholder="Message*" required></textarea>
						<button class="btn small solid orange">
							<span>Send</span>
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
					<h2>Visit Us!</h2>
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