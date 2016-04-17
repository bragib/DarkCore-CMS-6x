<?php define('DarkCoreCMS', TRUE); include 'header.php'; if (isset($_SESSION['usr'])) { $user_prw = $_SESSION['usr'];}
$user_account = new account;
?>
	<title><?php echo $websiteTitle; ?></title>
	<script type="text/javascript"
		src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id='header'>

	</div>
	<?php include 'menu.php';
        if (isset($_GET["errlogin"])){
    ?>
    <div id="notify">There was an error when logging in recheck your account and password corectly acc and pass are case sensitive</div>
    <?php } ?>
	<div id='content'>
		<div id='index-content-left'>
			<div id='main-tools'>
				<div class='main-tools-box'>
                    <h1 class="main-tools-head-text"><?php echo $welcomeTitle; ?></h1>
                    <div class="main-tools-description"><?php echo $welcomeDescription; ?></div>
                    <ul>
                        <li class="main-tools-li"><a href="register.php">Регистрация</a></li>
                        <li class="main-tools-li"><a href="login.php">Логин</a></li>
                        <li class="main-tools-li"><a href="guides.php">Начать играть</a></li>
                    </ul>
				</div>
			</div>
			<div id='lastnews'>
			<?php $data_news = new TopicsData; $data_news->construct_index()?>
				<div class='lastnews-head-text'>Новости</div>
                <div class="newsdivider"></div>
				<div class='newsthumb'>
					<div class='newsthumbicon'><img src='<?php echo get_avatar_byid($data_news->last_topic_index['autor']);?>' alt='<?php echo $data_news->last_topic_index['title'];?>' width="100%" height="100%"/></div>
					<div class='newsthumbbody'>
						<div class='newsthumbtitle'><?php echo $data_news->last_topic_index['title'];?></div>
						<div class='newsthumbresult'>&emsp;&emsp;<?php echo strip_tags(substr($data_news->last_topic_index['body'], 0, 300)); ?>...</div>
						<div class='newsthumbbutton'>
							<div class='thb-left'>
								<label style='color:#72BF8B;'>By</label> <a href="../player.php?id=<?php echo $data_news->last_topic_index['autor']; ?>"><label style='font-size:14px !important;color:#<?php echo namecolor(get_rank_byid($data_news->last_topic_index['autor']),get_vip_byid($data_news->last_topic_index['autor'])); ?>;'><?php echo ucfirst(strtolower(get_username_byid($data_news->last_topic_index['autor']))); ?></label></a>
								<label style='color:#72BF8B;'> in <?php echo substr($data_news->last_topic_index['date'],0,10); ?> </label>
								<label style='color:#72BF8B;'>Comments to this post ( </label><label style='color:#42E2A8;'><?php echo total_comments($data_news->last_topic_index['id']); ?></label><label style='color:#72BF8B;'> ) </label>
							</div>
                            <div class="thb-right"><a href='board/topic?id=<?php echo $data_news->last_topic_index['id']; ?>&page=1/<?php echo urlencode($data_news->last_topic_index['title']); ?>' class='lastnews-right-text'>Read All...</a></div>

						</div>
					</div>
				</div>	
				<?php  for ($i=2;$i<=count($data_news->latest_topics_index);$i++){ ?>
				<div class='lastnews'>
                    <div class="brokenhover"></div>
                    <div class="lastnews-left">
                        <a href="board/topic.php?id=<?php echo $data_news->latest_topics_index[$i]['id']; ?>&page=1/<?php echo $data_news->latest_topics_index[$i]['title']; ?>" class="lastnews-left-title">
                            <label class="skinnytip" data-text="<div class='miniinfo'>Read This</div>"><?php echo $data_news->latest_topics_index[$i]['title']?></label><br>
                            <label style="color:#3CA4CE;">Comments:</label> <?php echo total_comments($data_news->latest_topics_index[$i]['id'])?>
                        </a>
                    </div>
                    <div class="lastnews-right">
                       <a class="lastnews-right-text" href="board/topic?id=<?php echo $data_news->latest_topics_index[$i]['id']; ?>&page=1/<?php echo $data_news->latest_topics_index[$i]['title']; ?>">Read All...</a>
                    </div>
				</div>
				<?php } ?>
			</div>
			<div id='mediabox'>
				<div class='mediabox-head-text'>Видео</div>
                <div class="newsdivider"></div>
                <iframe id="abc_frame" width="368" height="215" src="https://www.youtube.com/embed/iyQ0dXWmW6o" frameborder="0" allowfullscreen></iframe>
                <div class="media-line">
                    <div class="media-thumb" onclick="getvideo('iyQ0dXWmW6o')">
                        <img src="http://img.youtube.com/vi/iyQ0dXWmW6o/2.jpg" width="50" height="50" />
                    </div>
                    <div class="media-thumb" onclick="getvideo('vRYvhY8YzU4')" style="margin-left:10px;">
                        <img src="http://img.youtube.com/vi/vRYvhY8YzU4/2.jpg" width="50" height="50" />
                    </div>
                </div>
			</div>
            <div id='secondary-box'>
                <div class='mediabox-head-text'>Соц.сети</div>
                <div class="newsdivider"></div>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "287", height: "283", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 33385459);
</script>
            </div>
		</div>
        <div id='index-content-right'>
            <div class='acclogin-info'>
                <div class='acclogin-info-head-text'>ACCOUNT <?php if (isset($user_prw)){echo "- <a href='user.php' class='accnamelink'>".strtoupper($user_prw)."</a>";}; ?></div>
                <div class="newsdivider"></div>
                <div class='loggedas'>
                <?php if (!isset($_SESSION['usr'])) {?>
					<form action='core/do_login.php' method='post'  autocomplete='off' enctype='multipart/form-data'>
                        <input style="display:none">
                        <input type="password" style="display:none">
                        <input value='' name='login_username' class='usrinput' placeholder="Username" autocomplete="off" type='text' />
						<input value='' name='login_password' class='usrinput' style="margin-top:5px;" placeholder="Password" autocomplete="off" type='password' />
						<input value='Login' name='login' id='submit' type='submit'>
                        <a href='register.php' /><div class='submit-submenu'>Register</div></a>
                    </form>

				<?php } else {
					$account= get_acc_info_by_user($_SESSION['usr']);
					for ($i=1;$i<=count($account);$i++) {?>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This field represent your registrar email</div>">
						<div class='inforowdesc'>Email:</div>
						<div class='inforowresult'><?php echo $account[$i]['email']; ?></div>
					</div>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This field represent the last time when you logged ingame</div>">
						<div class='inforowdesc'>Session:</div>
						<div class='inforowresult'><?php echo $account[$i]['last_login']; ?></div>
					</div>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This field represent your last login IP</div>">
						<div class='inforowdesc'>Last IP:</div>
						<div class='inforowresult'><?php echo $account[$i]['last_ip']; ?></div>
					</div>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This field represent your rank</div>">
						<div class='inforowdesc'>Rank:</div>
						<div class='inforowresult'><?php echo $account[$i]['rank']; ?></div>
					</div>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This represent your total Vote Points</div>">
						<div class='inforowdesc'>Vote Points:</div>
						<div class='inforowresult'><?php echo $account[$i]['vp']; ?></div>
					</div>
					<div id='inforow' class="skinnytip" data-text="<div class='miniinfo'>This represent your total Donation Points</div>">
						<div class='inforowdesc'>Donation Points:</div>
						<div class='inforowresult'><?php echo $account[$i]['dp']; ?></div>
					</div>
				<?php } } ?>
                    </div>
            </div>
            <div class="connectionguide"></div>
            <div class="dpatches"></div>
            <div class="rmlist">set portal <?php echo $realmPortal; ?></div>
            <?php $realminfo = new realm;
            $realminfo->construct(1);?>
            <div class="realmstat">
                <a href="realm.php?id=<?php echo $realminfo->realm_id;?>">
                    <img class="gversion" src='images/r-wod.png' height='19' alt='username'><div class="realmname"><a href="realm.php?realm=1/<?php echo urlencode($realminfo->rm_name); ?>" class="realmnamelink"><?php echo $realminfo->rm_name; ?></a></div>
                    <div class="realminfo">Online: <?php echo $realminfo->total_online;?>/250
                    Alliance: <?php echo $realminfo->alliance;?> Horde: <?php echo $realminfo->horde;?></div>
                </a>
            </div>
        </div>
	</div>
    <script>
        function getvideo($code){
            $(document).ready(function() {
                $('#abc_frame').attr('src','https://www.youtube.com/embed/'+$code);
            })
        }
    </script>
<script type="text/javascript">SkinnyTip.init();</script>
</body>
<?php include 'global-footer.php' ?>
</html>