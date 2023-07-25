<header class="wrapperHead">
	<div id="main_header">
		<nav class="menu">
			<ul class="flex">
				<li class="menu_item"><a href="index.php">Главная</a></li>
				<li class="menu_item"><a href="catalog.php">Статьи</a></li>

				<li class="menu_item">
					<a href="">Обо мне</a>
					<ul class="submenu">
						<li><a href="">Создание сайтов</a></li>
						<li><a href="">Интернет-маркетинг</a></li>
						<li><a href="">Продвижение видео</a></li>
					</ul>
				</li>

				<li class="menu_item"><a href="">Реклама</a></li>
				<li class="menu_item"><a href="">Профиль</a></li>
				<li class="menu_item"><a href="">Поиск по блогу</a></li>
				<li>		
					<form method="get">
						<input type="text" name="" placeholder="Поиск по блогу">
						<button>
							<i class="fas fa-search"></i>
						</button>
					</form>
				</li>
				<li>
					<i class="fas fa-filter" onclick="sub_header_show()"></i>
				</li>
			</ul>
		</nav>
	</div> <!-- wrapper --> 
	<div class="wrapperHead" id="sub_header">
		<form method="POST">

			<div class="flex">
				<div>
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					Категория
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					<hr>
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Бульоны
					</label>	
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Завтраки
					</label>	
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Любая категория
					</label>	
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Напитки
					</label>
				</div>

				<div>
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					Ингридиенты
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					<hr>
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Мясо
					</label>	
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Рыба
					</label>	
				</div>

				<div>
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					Кухня
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					<hr>
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						любая
					</label>					
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Русская
					</label>
				</div>

				<div>
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					Другое
					<i class="fa fa-check transparent" aria-hidden="true"></i>
					<hr>
					<label class="block">
						<input  type="checkbox" class="input hidden">
						<i class="fa fa-check" aria-hidden="true"></i>
						Повседневное
					</label>
				</div>
			</div>

			<div class="flex search_block">
				<div class="flex search_block">
					<input type="text" name="search" minlength="3" placeholder="Поиск по блогу">
					<button name="FilterButton" class="FilterButton">
						<i class="fas fa-search"></i>
					</button>
				</div>

				<label>
					<input  type="radio" name="date" value="date" class="input hidden"> 
					<i class="fas fa-concierge-bell"></i>
					<span>
						свежее
					</span>
				</label>

				<label>
					<input type="radio" name="date" value="meta_value_num" selected="selected" class="input hidden">
					<i class="fas fa-fire-alt"></i>
					<span>
						популярное 
					</span> 
				</label>
				<i class="fas fa-filter" onclick="sub_header_hide()"></i>
			</div>
		</form>
	</div>
</header>
