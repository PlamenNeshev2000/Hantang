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
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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
					<h1>一般信息</h1>
					<br>
						<h3><i class="far fa-calendar-alt"></i> 每个星期六早上 &nbsp; <i class="far fa-clock"></i> 从9:15开始 &nbsp; <i class="fas fa-chalkboard-teacher"></i> 中国官话</h3>
					<br>
					<h1>报名</h1>
					<p>
						你可以下载以下的报名表，填写后寄至表上通信地址，另经银行付款至表上帐号。当然也可直接在学校柜台报名和付款。 如你的电脑下载有问题，可以将你的游标移至所需的报名表链环(link)上，按右键，在菜单上选 save, 就有了你要的报名表的 pdf-file。注意：我们不会给每个报名的人写回信，说收到报名单，每个要来上课的学生都可在2019年8月24日直接来上课，不过未交学费的人不可带书回家。需要交过费证明的人可于每星期六上午来索取证明。
					</p>
					<a href="./assets/documents/info-nederlands-2019-2020.pdf"><b>荷文报名信息</b> (Nederlands)</a>
					<br>
					<a href="./assets/documents/info-chinees-2019-2020.pdf"><b>中文报名信息</b> (Chinees)</a>


				</div>

			</div>
		</div>
	</header>

	<main>

		<div class="pricing">

			<div class="container">
				<div class="pricing-description">
					<h1>学费与收费</h1>
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
							<h3>18岁以下的孩子 </h3> <br>
									<strong>选项：</strong>
									<ul>
										<li>幼稚园普通话（大陆）：1，2 年级（五岁起）</li>
										<li>儿童和青少年普通话 儿童和青少年普通话 儿童和青少年普通话（大陆）：1 至 12 年级</li>
									</ul>
									<br>
									<strong>描述：</strong>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut quisquam dolores reiciendis vitae, temporibus vel accusamus delectus sunt odio.</p>
									<p><strong>起始时间：</strong> 01 September 2020</p>
									<strong>图书：</strong>
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
							<h3>大人</h3>
							<br>
							（不包括书费）
							<strong>选项：</strong>
							<ul>
								<li>国语班（台湾）：台小 2A 与台小 2 B，B 班程度略高; 可能增开台幼 1 班</li>
								<li>成人普通话: 1、 2、 3、 4 年级 ( 第三年级即为（5） ， 不另开班。)</li>
								<li>新成人普通话混合班</li>
							</ul>
							<br>
							<strong>描述：</strong>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut quisquam dolores reiciendis vitae, temporibus vel accusamus delectus sunt odio.</p>
							<p><strong>起始时间：</strong> 01 September 2020</p>
							<strong>图书：</strong>
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
					<h1>学生展示柜</h1>
					<p>从2019年夏季开始从事原始项目或已完成项目的学生有资格参加Showcase。也将考虑独立完成或与同行和/或教师顾问合作完成的项目。作为班级项目一部分准备的项目也有资格。 </p>
				</div>

				<?php import('showcase-slider') ?>

			</div>
		</div>

	</main>

	<?php import('footer') ?>

	<script src="../assets/js/tabs.js"></script>
	<script src="../assets/js/accordion.js"></script>
	<script src="../assets/js/swiper.js"></script>

</body>

</html>