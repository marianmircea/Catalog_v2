<?php
	//Main controller - responsible for all controllers ...
	//require URL.'config/autoloader.php';
	class Bootsite {
		function __construct () {
			if (!isset ($_GET["val"])) {
				$aff = new Index();
				$aff -> index();
				exit();
				}
			if ($_GET["val"] == 1) {
				require 'controller/login.php';
				$aff = new Login();
				$aff -> index();
				exit();
				}
			if ($_GET["val"] == 2) {
				require 'controller/sign_up.php';
				$aff = new Signup();
				$aff -> index();
				exit();
				}
		}
		
	}