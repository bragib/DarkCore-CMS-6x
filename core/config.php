<?php if(!defined('DarkCoreCMS')) { header('Location: ../');} 

/********************************************
************Database configuration***********
********************************************/

$GLOBALS['DB_WEBSITE'] = 'darkcore'; 		// Website database name
$GLOBALS['DB_AUTH'] = 'auth';				// Auth database name of trinitycore 6x
$GLOBALS['DB_CHARACTERS'] = 'characters';	// Characters database name of trinitycore 6x
$GLOBALS['DB_WORLD'] = 'world';				// World database name of trinitycore 6x

function connect($host,$username,$password){
	$con = mysqli_connect('127.0.0.1','trinity','trinity'); // 'Host', 'username', 'password'
	if (!$con) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
return $con;
}

/********************************************
************Website configuration************
********************************************/
$websiteTitle = 'Draenor.Info'; // website title in global website
$realmPortal = 'SET portal "wod.draenor.info"'; // it's your host name or ip for game connexion

?>