<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<meta charset="utf-8">
<html>
<head>
	<title>Кухня</title>
</head><!--  будет подключено через wp_head() -->

<body>
	<iframe src="reload_&_backup.php" style="display: none;"></iframe>

	<?php
	include 'header.php'; 
	?> <!-- the_header() -->

	<div class="wrapper post">
		<div>
			<a href="catalog.php">вернуться назад</a>
			<a class="right_ancor" href="">поделиться <i class="fas fa-share-alt"></i></a>
		</div>
		<div class="flex post_tags">
			<span>22.02.2022</span>
			<ul>
				<li> создание сайтов </li>
			</ul>
		</div>
		<h2>заголовок поста</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna. Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna. Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.

			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna. Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.
		</p>
		<img src="img/1.jpg">
		<p>
			Lorem ipsumelit, sed do eiusmod
			tempor inciUt enim ad minim veniam,
			quis nostruiquip ex ea commodo
			consequat.  voluptate velit esse
			cillum dolont occaecat cupidatat n
			proident, sanim id est laborum.
		</p>
		<div class="flex">
			<span>22.02.2022</span>
			<ul>
				<li> создание сайтов </li>
			</ul>
		</div>

		<div class="Interesting">
			<h3>Интересно почитать</h3>
			<div class="flex">
				<span>	
					<p class="Interesting_postname">Как я сходил на FrontEnd Conf 2021</p>
					<span class="date">21.06.2020</span>
				</span>
				<span>	
					<p class="Interesting_postname">Как я сходил на FrontEnd Conf 2021</p>
					<span class="date">21.06.2020</span>
				</span>
				<span>	
					<p class="Interesting_postname">Как я сходил на FrontEnd Conf 2021</p>
					<span class="date">21.06.2020</span>
				</span>
				<span>	
					<p class="Interesting_postname">Как я сходил на FrontEnd Conf 2021</p>
					<span class="date">21.06.2020</span>
				</span>
			</div>

		</div>
	</div>

	<?php
	include 'footer.php'; 
	?> <!-- the_footer() -->
</body>
</html>

