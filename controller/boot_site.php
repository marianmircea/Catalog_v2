<?php
	//Main controller - responsible for all controllers ...
	//require URL.'config/autoloader.php';
	class bootsite {
		function __construct () {
			if (!isset ($_GET["val"])) {
				$aff = new index();
				$aff -> index();
				return;
				}
			if ($_GET["val"] == 1) {
				require 'controller/login.php';
				$aff = new login();
				$aff -> index();
				return;
				}
			if ($_GET["val"] == 2) {
				require 'controller/sign_up.php';
				$aff = new signup();
				$aff -> index();
				return;
				}
		}
		
	}