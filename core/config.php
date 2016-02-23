<?php if(!defined('DarkCoreCMS')) { header('Location: ../');} 

/********************************************
************Database configuration***********
********************************************/

$GLOBALS['DB_WEBSITE'] = 'darkcore';
$GLOBALS['DB_WORLD'] = 'world';
$GLOBALS['DB_AUTH'] = 'auth';
$GLOBALS['DB_CHARACTERS'] = 'characters';

//Was doing some tests to change the headers of some functions Add here your database login informations instead
function connect($host,$username,$password){
	$con = mysqli_connect('127.0.0.1','root','gogo2012');
	if (!$con) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
return $con;
}

/********************************************
************Website configuration************
********************************************/
$websiteTitle = 'Website Beta Title';
$realmPortal = '127.0.0.1';

?>