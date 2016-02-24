<?php
/********************************************
************Database configuration***********
********************************************/
$DB_HOST = '127.0.0.1';  // your host address
$DB_USERNAME = 'root';   // your username
$DB_PASSWORD = 'accent'; // your password

$DB_WEBSITE = 'darkcore';  		// Website database
$DB_WORLD = 'world';       		// World table of trinitycore
$DB_AUTH = 'auth';         		// Auth table of trinitycore
$DB_CHARACTERS = 'characters';	// Character table of trinitycore

/********************************************
************Admin configuration************
********************************************/

$adminSecurityPass = 'test35'; // you can modify this password, it's the security password in the admin login page !

$warningError0 = 'ERROR: Your password and username doesn\'t match !';
$warningError1 = 'ERROR: Your rank isn\'t the admin rank ! The main admin has been warned !';
$warningError2 = 'ERROR: The admin code is wrong or required, without, you can\'t connect to this part of the website !';
$warningError3 = 'ERROR: Please enter the username, password and the admin code, without, you can\'t connect to this part of the site !';

?>