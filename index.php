<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="fonts/fonst_include.css">

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

	<div class="slider wrapper">
		<div class="slider__wrapper">
			<div class="slider__items">
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/10.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>

					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/9.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/8.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/7.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/6.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/5.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/4.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/3.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>

				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/2.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>

				<div class="slider__item">
					<div>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" data-src="img/1.jpg" alt="Image">
						<h3>заголовок</h3>
						<span class="date">22.02.2022</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<form class="flex">
			<input type="text" name="">
			<label>
				<i class="fas fa-camera"></i>
				<input type="file" name="" class="hidden">
			</label>

			<button><i class="fas fa-location-arrow"></i></button>
		</form>
	</div>

	<div class="wrapper post">
		<img src="img/1.jpg">
		<h2>
			<a href="single-post.php">заголовок поста</a>	
		</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<div class="flex">
			<span>22.02.2022</span>
			<ul>
				<li> создание сайтов </li>
			</ul>
		</div>
	</div>
	<div class="wrapper post">
		<img src="img/2.jpg">
		<h2>заголовок поста</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<div class="flex">
			<span>22.02.2022</span>
			<ul>
				<li> создание сайтов </li>
			</ul>
		</div>
	</div>
	<div class="wrapper post">
		<img src="img/3.jpg">
		<h2>заголовок поста</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<div class="flex">
			<span>22.02.2022</span>
			<ul>
				<li> создание сайтов </li>
			</ul>
		</div>
	</div>


	<?php
	include 'footer.php'; 
	?> <!-- the_footer() -->
</body>
</html>

