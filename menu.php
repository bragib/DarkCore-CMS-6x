	<div id='menu'>
		<center>
		<div id='menu-block'>
			<a class='menu-item' href='index'>HOME</a>
			<a class='menu-item' href='armory'>ARMORY</a>
			<a class='menu-item' href='guides'>GUIDES & DOWNLOADS</a>
			<a class='menu-item' href='board/index'>FORUM <label style="font-size:10px;color:lime;">alpha</label></a>
			<?php if (isset($_SESSION['usr'])){
					echo "<a class='menu-item' href='core/logout'>BUGTRACKER <label style='font-size:10px;color:lime;'>alpha</label></a>";
					echo "<a class='menu-item' href='user'>ACCOUNT PANEL</a>";
					echo "<a class='menu-item' href='core/logout'>LOGOUT</a>";
			 } else
					echo "<a class='menu-item' href='register'>REGISTER</a>"; ?>
		</div>
		</center>
	</div>