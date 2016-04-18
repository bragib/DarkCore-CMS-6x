<?php define('DarkCoreCMS', TRUE); include 'header.php' ?>
	<title><?php echo $websiteTitle; ?> - <?php echo ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) )?></title>
</head>
<body>
	<div id='header'>
	</div>
	<?php include 'menu.php';
	if(isset($_GET['usrId'])) {
	$usr = get_userinfo_by_id($_GET['usrId']); for ($i=1;$i<=count($usr);$i++) {?>
	<div id='content'>
		<div id='index-content-left'>
			<div class='lastnews-head-text'><?php echo $usr[$i]['username'] ?>'s Информация</div>
			<div class="newsdivider"></div>
			<div id='user-box'>
				<div id="userbox-left">
					<div class="user-box-info">
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">Логин:</div>
							<div class="userbox-line-light"><?php echo $usr[$i]['username'];?></div>
						</div>
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">Регистрация:</div>
							<div class="userbox-line-light"><?php echo $usr[$i]['joindate'];?></div>
						</div>
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">Дата последнего входа:</div>
							<div class="userbox-line-light"><?php echo $usr[$i]['last_login'];?></div>
						</div>
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">It's connected :</div>
							<div class="userbox-line-light"><?php if($usr[$i]['online']==1) echo 'yes'; else echo 'no';?></div>
						</div>
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">Ранг:</div>
							<div class="userbox-line-light"><?php if($usr[$i]['rank']>=1) echo 'Game Master'; else echo 'Player';?></div>
						</div>
						<div class="userbox-info-line">
							<div class="userbox-line-light-left">Список персонажей:</div><br><br>
							<div class="userbox-line-light">-------------</div><br>
							<div class="userbox-line-light">-------------</div><br>
							<div class="userbox-line-light">-------------</div><br>
							<div class="userbox-line-light">-------------</div><br>
							<div class="userbox-line-light">-------------</div><br>
						</div>
					</div>
				</div>
			</div>
			<aside align="center" id="account_menu">
				<article>
						<li><a href="#">Контакт <?php echo $usr[$i]['username']; ?></a></li>
					</ul>
				</article>
			</aside>
		</div>
		<div id='index-content-right'>
            <div class="connectionguide"></div>
            <div class="dpatches"></div>
            <div class="rmlist"><?php echo $realmPortal; ?></div>
            <?php $realminfo = new realm;
            $realminfo->construct(1);?>
            <div class="realmstat">
                <a href="realm.php?id=<?php echo $realminfo->realm_id;?>">
                    <img class="gversion" src='images/r-wod.png' height='19' alt='username'><div class="realmname"><a href="realm.php?realm=1/<?php echo urlencode($realminfo->rm_name); ?>" class="realmnamelink"><?php echo $realminfo->rm_name; ?></a></div>
                    <div class="realminfo">Онлайн: <?php echo $realminfo->total_online;?>/250
                    Альянс: <?php echo $realminfo->alliance;?> Орда: <?php echo $realminfo->horde;?></div>
                </a>
            </div>
        </div>
	</div>
	<?php } ?>
	<script type="text/javascript">SkinnyTip.init();</script>
</body>
<?php } else
header('Location: index');
include 'global-footer.php' ?>
</html>
