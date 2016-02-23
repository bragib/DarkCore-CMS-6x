<?php define('DarkCoreCMS',TRUE);
	include 'config.php'; 
	include 'functions/global_functions.php';
	$_error= '';
	if (!isset($_POST['Username']) || !isset($_POST['Email']) || !isset($_POST['Password']) || !isset($_POST['RepeatPassword'])){
		$_error = $_error . 'regerror=1&errtype=';
		header('Location: ../register?'.$_error);
	}
	else {
		if (check_user_exist($_POST['Username']) > 0)
			$_error = $_error . 'A';
		if (strlen($_POST['Username'])  < 3)
			$_error = $_error . 'B';
		if (strlen($_POST['Password'])  < 8)
			$_error = $_error . 'C';
		if (check_email_exist($_POST['Email']) > 0)
			$_error = $_error . 'D';
		if (strlen($_POST['Email'])  < 10) 
			$_error = $_error . 'E';
		if ($_POST['Password'] != $_POST['RepeatPassword'])
			$_error = $_error . 'F';
		if (strlen($_error) > 0)
			header('Location: ../register?regerror=1'.$_error);
		else {
			$username = $_POST['Username'];
			$password = $_POST['Password'];
			$accPassword = encrypt($username, $password);
			$bnetPassword = bnet_encrypt($username, $password);
			register_user($username,$accPassword,$_POST['Email']);
			register_bnet_user($_POST['Email'],$bnetPassword);
			header('Location: ../create_success.php?user='.$username);
		}
	}
?>