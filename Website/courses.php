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
	<!-- get icons-->
	<script src="https://kit.fontawesome.com/8d4db32e37.js" crossorigin="anonymous"></script>
</head>

<body id="contrast">

	<?php import('page-menu'); ?>

	<header class="page-header">
		<div class="courses">
			<div class="container two-columns">

				<?php import('tabs'); ?>

				<div class="courses-description column small">
					<h1>Algemene informatie</h1>
					<br>
						<h3><i class="far fa-calendar-alt"></i> Elke zaterdag &nbsp; <i class="far fa-clock"></i> Begint om 9:15 &nbsp; <i class="fas fa-chalkboard-teacher"></i> Mandarijn</h3>
					<br>
					<h1>Registratie</h1>
					<p>
						Een inschrijvingsformulier in PDF-formaat kunt u downloaden door op een van beide links hieronder te drukken. U kunt zich inschrijven door het formulier af te drukken, in te vullen en dan naar het correspondentieadres op het formulier te sturen.</p>
					<p>Merk op dat wij niet iedereen die heeft ingeschreven een apart bericht geven dat we de inschrijving hebben gekregen. Een ontvangstbewijs van het inschrijfgeld wordt op verzoek op school door de penningmeester verstrekt!
					</p>
					<a href="./assets/documents/info-nederlands-2019-2020.pdf"><b>荷文报名信息</b> Nederlands inschrijfformulier</a>
					<br>
					<a href="./assets/documents/info-chinees-2019-2020.pdf"><b>中文报名信息</b> Chinees inschrijfformulier</a>

				</div>

			</div>
		</div>
	</header>

	<main>

		<div class="pricing">

			<div class="container">
				<div class="pricing-description">
					<h1>Prijzen</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex expedita ratione pariatur totam vel nobis debitis impedit fugiat iure similique.</p>
				</div>

			</div>

			<div class="container">
				<div class="pricing-cards">

					<div class="pricing-card">
						<div class="img" style="background-image: url('./assets/images/Kids_stockimage.jpg')"></div>
						<div class="btn solid green">
							<span>€230</span>
						</div>
						<div class="content">
							<h3>Kids < 18 years </h3> <br>
									<strong>Options:</strong>
									<ul>
										<li>Mandarijn (Vasteland) voor kleuters: niveau 1 en 2</li>
										<li>Mandarijn (Vasteland) voor kinderen en jongeren: niveau 1 t/m 12</li>
									</ul>
									<br>
									<strong>Description:</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut quisquam dolores reiciendis vitae, temporibus vel accusamus delectus sunt odio.</p>
									<p><strong>Starting Time:</strong> 01 September 2020</p>
									<strong>Books:</strong>
									<ul>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
										<li>Lorem ipsum dolor sit amet.</li>
									</ul>
						</div>
					</div>

					<div class="pricing-card">
						<div class="img" style="background-image: url('./assets/images/Adults_stockimage.jpg')"></div>
						<div class="btn solid green">
							<span>€320</span>
						</div>
						<div class="content">
							<h3>Adults</h3>
							<br>
							<strong>Options:</strong>
							<ul>
								<li>Mandarijn (Taiwan): Klas 2A en 2B</li>
								<li>Mandarijn voor volwassenen: niveau 1, 2, 3 en 4 </li>
								<li>Gemengde cursus Chinees (nieuwe stijl)</li>
							</ul>
							<br>
							<strong>Description:</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut quisquam dolores reiciendis vitae, temporibus vel accusamus delectus sunt odio.</p>
							<p><strong>Starting Time:</strong> 01 September 2020</p>
							<strong>Books:</strong>
							<ul>
								<li>Lorem ipsum dolor sit amet.</li>
								<li>Lorem ipsum dolor sit amet.</li>
								<li>Lorem ipsum dolor sit amet.</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

		</div>

		<div class="showcase">
			<div class="container two-columns">

				<div class="showcase-description column small">
					<h1>Students' Showcase</h1>
					<p>Hantang students who are currently working on original projects, or have completed projects since the beginning of summer 2019, are eligible to present at the Showcase. Projects done independently or in collaboration with peers and/or faculty mentors will also be considered. Projects that are prepared as part of a class project are eligible as well. </p>
				</div>

				<?php import('showcase-slider') ?>

			</div>
		</div>

	</main>

	<?php import('footer') ?>

	<script src="./assets/js/tabs.js"></script>
	<script src="./assets/js/accordion.js"></script>
	<script src="./assets/js/swiper.js"></script>

</body>

</html>