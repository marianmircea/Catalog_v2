<?php
	//require ....
	class check {
		function __construct() {
			if (empty($_POST['user']) && empty($_POST['pw'])) {
				echo "lipseste: user + parola";
				header ('refresh:1; url=../controllers/login.php');
				exit();
			}
			if (empty($_POST['user'])) {
				echo "lipseste: user";
				header ('refresh:1; url=../controllers/login.php');
				exit();
			}
			if (empty($_POST['pw'])) {
				echo "lipseste: parola";
				header ('refresh:1; url=../controllers/login.php');
				exit();
			}
			require URL.'models/get_The_User.php';
			$usr = $_POST['user'];
			/*if (!filter_var($usr, FILTER_VALIDATE_EMAIL)) {
				echo "Utilizator (e-mail) invalid";
				header ('refresh:1; url=../controllers/login.php');
				exit();
			}*/
			$pwd = $_POST['pw'];
			$useri = new users();
			$test = $useri -> getTheUser($usr, $pwd);
			if ($test == NULL) {
				echo "User / parola nu se regasesc in Baza de Date, va rugam folositi functia Sign-up ...";
				header ('refresh:1; url=../controllers/login.php');
				exit();
				}
			Session::init();
			//var_dump($test);
			header ('refresh:1; url=../controllers/logged_in.php');
		}
	}
	
	$result = new check();
	
	