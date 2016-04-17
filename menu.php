	<div id='menu'>
		<div id='menu-block'>
			<a class='menu-item' href='index.php'>Главная</a>
			<?php if (isset($_SESSION['usr'])){
			echo "<a class='menu-item' href='store'>STORE <label style='font-size:10px;color:lime;'>alpha</label></a>"; } ?>
			<a class='menu-item' href='guides.php'>Начать играть</a>
			<a class='menu-item' href='forum'>Форум <label style="font-size:10px;color:lime;">alpha</label></a>
			<?php if (isset($_SESSION['usr'])){
					echo "<a class='menu-item' href='bugtracker.php'>Багрепорт <label style='font-size:10px;color:lime;'>alpha</label></a>";
					echo "<a class='menu-item' href='user.php'>Личный кабинет</a>";
					echo "<a class='menu-item' href='core/logout.php'>Выйти</a>";
			 } else{
					echo "<a class='menu-item' href='login.php'>Войти</a>";
					echo "<a class='menu-item' href='register.php'>Регистация</a>"; 
					}?>
		</div>
	</div>