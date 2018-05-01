<?php
	//Controller de afisare pe tip de utilizator ...
	echo $_GET["tip"]."<br>";
	echo $_GET["id"]."<br>";
	//require '/../model/session.php';
	class Bootuser {
		function __construct () {
			echo "suntem in boot user<br>";
			require 'logged.php';
			$aff = new logged();
			$aff -> index();
			
			//header ('refresh:1, url=../view/under_con/');
			
			//Session::init();
		}
	}
	$tt = new Bootuser;