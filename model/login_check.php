<?php
	//require ....
	class check {
		function __construct() {
			if (empty($_POST['user']) && empty($_POST['pw'])) {
				echo "lipseste: user + parola";
				header ('refresh:1; url=../index.php?val=1');
				exit();
				}
			if (empty($_POST['user'])) {
				echo "lipseste: user";
				header ('refresh:1; url=../index.php?val=1');
				exit();
				}
			if (empty($_POST['pw'])) {
				echo "lipseste: parola";
				header ('refresh:1; url=../index.php?val=1');
				exit();
				}
			$usr = $_POST['user'];
			if (!filter_var($usr, FILTER_VALIDATE_EMAIL)) {
				echo "Utilizator (e-mail) invalid";
				header ('refresh:1; url=../index.php?val=1');
				exit();
				}
			$pwd = $_POST['pw'];
			require 'get_The_User.php';
			$useri = new users();
			$test = $useri -> getTheUser($usr, $pwd);
			if ($test == NULL) {
				echo "User / parola necunoscute, va rugam folositi functia Sign-up ...";
				header ('refresh:1; url=../index.php?val=1');
				exit();
				}
			
			//print_r($test);
			echo $test[0]."  ".$test[1];
			//Session::init();
			//var_dump($test);
			//header ('refresh:1; url=../controllers/logged_in.php');
		}
	}
	$result = new check();
	
	