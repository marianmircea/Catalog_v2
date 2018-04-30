<?php
	//Controller de afisare pe tip de utilizator ...
	echo "suntem in boot user";
	
	require '/../model/session.php';
	class Bootuser {
		function __construct () {
			//require 'logged.php';
			//$aff = new logged();
			//$aff -> index();
			
			echo $_GET["tip"]."<br>";
			echo $_GET["id"]."<br>";
			
			Session::init();
		}
	}
	$tt = new Bootuser;