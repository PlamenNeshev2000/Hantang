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
				<div class="column gallery">
					<div class="has-modal images1">
						<img class="img" src="./assets/images/hanbakstenen1.jpg" alt="Symbol" />
						<!-- The Modal -->
						<div class="modal">
							<img class="modal-img">
							<div class="caption"></div>
						</div>
						<!-- The Modal -->
					</div>
				</div>
				<div class="column">
					<h2>School History</h2>
					<p>In 1978, the Eindhoven Chinese School was founded by the Association of the Eindhoven Chinese Protestants in Eindhoven. Then there were only 20 students who learned Cantonese from Hong Kong textbooks every Saturday in a café on the Grote Berg.</p>
					<p>In 1986 the number of students grew to 120. The Association of the Chinese Protestants in Eindhoven found it more practical to share responsibility with the Association of Chinese in Eindhoven. The Chinese school also turned to the municipality for help. At first it was refused, but the actions of the students under the leadership of the school changed the municipal council. In 1987 we were allowed to use the Genderdal public school for free, but unfortunately we had to move in November 1989 when the municipality sold the buildings. Then the organization of the school changed in a number of steps. Since 1993, the school has been supervised by the Eindhoven Chinese School Foundation, which was then founded. The Foundation supervises both the level of education and finances. The Foundation's big challenge is always how to keep the school going, with the only financial source being the modest course fees of the students.</p>
					

				</div>
			</div>
		</div>
		<div class="two-columns">
			<div class="container">
				<div class="column">
					<p>Due to the growing international contacts of China, the commonly spoken Mandarin language is becoming more popular. This language also takes over the role of the Cantonese dialect. (Mandarin and all dialects use the same Chinese characters, only the pronunciation differs.) Our school now has about 400 students, both children of Chinese-speaking parents and Dutch-speaking adults, but also Dutch-speaking children, including adopted Chinese children with an interest in their roots. The classes today are focused on language proficiency, mainly in the standard language of China. The students who have already started with Cantonese and Mandarin in Taiwanese style can complete their course cycle. (Taiwanese Mandarin has the same pronunciation as mainland Mandarin, but Taiwan uses a different notation for the pronunciation.)</p>
					<p>The role of the Eindhoven Chinese School in the cultural life of the Chinese community in the Eindhoven area is also becoming increasingly important. For example, the Association of Chinese Elderly, the Chinese Women's Group Eindhoven, the Chinese Sports Association, the Chinese Dance School of Li Feng, use our location Eckart College for all kinds of Saturday activities. We will also start with hobby classes for Chinese calligraphy, Chinese dance and the martial arts Gongfu (often written as Kong Fu). These are intended for those interested in our school to get in touch with Chinese culture half an hour (11: 50-12: 20) after the language lessons, so not just Chinese language.</p>
					
				</div>
				<div class="column gallery">
					<div class="has-modal images1">
						<img class="img" src="./assets/images/hanbakstenen1.jpg" alt="Symbol" />
						<!-- The Modal -->
						<div class="modal">
							<img class="modal-img">
							<div class="caption"></div>
						</div>
						<!-- The Modal -->
					</div>
				</div>
			</div>
		</div>

		<div class="two-columns">
			<div class="container">
				<div class="column gallery">
					<div class="has-modal images1">
						<img class="img" src="./assets/images/hanbakstenen1.jpg" alt="Symbol" />
						<!-- The Modal -->
						<div class="modal">
							<img class="modal-img">
							<div class="caption"></div>
						</div>
						<!-- The Modal -->
					</div>
				</div>
				<div class="column">
					<p>Our school is now called Eindhoven Chinese School HanTang. Anyone who knows anything about Chinese history also knows that the Han (206 B.C. - 220 A.D.) and Tang (618-907) dynasties had a brilliant culture. The beautiful name HanTang is also an incentive for ourselves to achieve more in the cultural field. Our logo (top left) is a stamp of our name in the Chinese script of more than 2200 years ago.</p>
					<p>We are proud of the news that our school was chosen as a "Model School for Learning Chinese" by the Ministry of Foreign Affairs in China, Overseas Chinese Department.</p>
					

				</div>
			</div>
		</div>
	</header>

	<main>

		<div class="two-columns">
			<div class="container">
				<div class="column">
					<h2>The Organization</h2>
					<p>The Eindhoven Chinese School has three parts:
						<ul>
							<li>the Eindhoven Chinese School Foundation (Stichting Eindhoven Chinese School)</li>
							<li>the school management</li>
							<li>the teachers and other staff</li>
						</ul>
					These components work together for the courses and the course of events in the school. The Foundation is also responsible for the financial affairs of the school and receives its income from school fees and donations. The Board of the Foundation has nine members. </p>

					<p>Below is some information about the Foundation, its chairman, and the school management:</p>
					
					<?php import('accordion-aboutpage'); ?>

				</div>
				<div class="column gallery">
					<div class="has-modal images1">
						<img class="img" src="./assets/images/hanbakstenen1.jpg" alt="Symbol" />
						<!-- The Modal -->
						<div class="modal">
							<img class="modal-img">
							<div class="caption"></div>
						</div>
						<!-- The Modal -->
					
					<br><br>
					<h2>Objectives of the Eindhoven Chinese School Foundation</h2>
					<ul>
						<li>Teach students the Chinese language and culture.</li>
						<li>Teach the children about their origins.</li>
						<li>The children learn to have more attention and respect for others.</li>
						<li>Traditionally, the Christian gospel is the foundation of the Foundation, which is why it aims to promote Christian faith.
						</li>
					</ul>
				</div>
			</div>
		</div>

		<?php import('multiple-slider'); ?>

		<?php import('archive'); ?>

	</main>


	<?php import('footer') ?>

	<script src="./assets/js/popup.js"></script>
	<script src="./assets/js/swiper.js"></script>
	<script src="./assets/js/accordion.js"></script>
</body>

</html>