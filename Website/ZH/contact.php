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
					<h1>您对我们有任何疑问吗？</h1>
					<p>请随时向我们发送消息。</p>
					<h2>有兴趣尝试我们的课程之一吗？<br>
					请发送信息</h2>
					<p>我们会尽快与您联系以进行安排。</p>

					<h3>想联系我们的一名工作人员吗？</h3>
					<p>您可以在下面找到他们的联系信息。</p>
				</div>
				<div class="column small">
					<form class="contact-form" action="contactReceived.php" method="post">
						<input type="text" placeholder="全名*" required>
						<input type="email" placeholder="电子邮件地址
*" required>
						<input type="phone" placeholder="电话号码
*">
						<textarea placeholder="信息*" required></textarea>
						<button class="btn small solid orange">
							<span>发送</span>
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
					<h2>探望我们</h2>
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