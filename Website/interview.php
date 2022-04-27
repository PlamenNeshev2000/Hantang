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

	<main>
		<br>
		<div style="text-align:center">
			<h1>Welcome to the secret video interview page</h1>
			<h2>please do not use this page on the actual website</h2>
			<p>please also note we did not do any styling on this page.</p>
			<p>Note for person responsible for hosting: please delete "interview.php" and the "interview" folder @ /assets/video/</p>
		</div>

		<div style="text-align:center">
			<div>
				<h2>Student unknown to Hantang</h2>
				<video width="320" height="240" controls>
					<source src="./assets/video/interview/StudentUnknownToSchool.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<br>
			<br>

			<div>
				<h2>Parent of../ possible adult coursee</h2>
				<video width="320" height="240" controls>
					<source src="./assets/video/interview/Pennie.m4v" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<br>
			<br>

			<div>
				<h2>Interview with Teacher</h2>
				<video width="320" height="240" controls>
					<source src="./assets/video/interview/InterviewTeacher.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<br>
			<br>

			<div>
				<h2>Interview with Adult student (Audio)</h2>
				<br>
				<audio controls>
					<source src="./assets/video/interview/InterviewAdultStudent.mp3" type="audio/mp3">
					Your browser does not support the audio element.
				</audio>
			</div>
			<br>
			<br>

			<div>
				<h2>Interview with Young/Teen student (Audio)</h2>
				<br>
				<audio controls>
					<source src="./assets/video/interview/InterviewYoungStudent.mp3" type="audio/mp3">
					Your browser does not support the audio element.
				</audio>
			</div>
		</div>
	</main>

	<?php import('footer') ?>

	<script src="./assets/js/counter.js"></script>
	<script src="./assets/js/accordion.js"></script>
	<script src="./assets/js/darkMode.js"></script>
	<script src="./assets/js/colorBlind.js"></script>
	<script src="./assets/js/swiper.js"></script>

</body>

</html>