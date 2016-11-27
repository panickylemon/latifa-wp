<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
		wp_title('|', true, 'right');
		?>
	</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper page-main">

	<header role="banner">

		<div class="header-top">

			<div class="logo"></div>

		</div>

		<div class="header-nav">

			<div class="wrapper-inner">

				<nav>

					<div class="burger"></div>

<!--					<ul>-->
<!--						<li><a href="index.html">Главная</a></li>-->
<!--						<li><a href="about-me.html">обо мне</a></li>-->
<!--						<li><a href="success-stories.html">Истории успеха</a></li>-->
<!--						<li><a href="free.html" class="free-link">БЕСПЛАТНО</a></li>-->
<!--						<li><a href="study.html">обучение</a></li>-->
<!--						<li><a href="contacts.html">контакты</a></li>-->
<!--						<li><a href="blog.html">Блог</a></li>-->
<!--					</ul>-->

						<? wp_nav_menu(array('container' => '')); ?>
					</nav>


				</nav>

				<ul class="social-links">
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>

			</div>

		</div>

	</header>

	<div class="wrapper-inner">