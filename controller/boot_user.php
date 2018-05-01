<?php
	//Controller de afisare pe tip de utilizator ...
	
	//require '/../model/session.php';
	class Bootuser {
		function __construct () {
			echo "suntem in boot user<br>";
			$tip_user = $_GET["tip"];
			$id_user = $_GET["id"];
			//echo $tip_user;			
			//echo $id_user;			
			//require 'logged.php';//?!?!?!?!?!?!?
			//$aff = new logged();
			//$aff -> index();
			//Session::init();
			switch ($tip_user) {
				case 1:
					//echo "avem un profesor";
					header ('location: ../view/logged_prfs/');
					break;
				case 2:
					//echo "avem un parinte";
					header ('location: ../view/logged_prnt/');
					break;
				case 3:
					//echo "avem un elev";
					header ('location: ../view/logged_stdn/');
					break;
			}
		}
	}
	$tt = new Bootuser;