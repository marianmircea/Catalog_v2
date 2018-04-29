<?php
	//Main controller - responsible for all controllers ...
	//require URL.'config/autoloader.php';
	class bootsite {
		function __construct () {
			$aff = new index();
			$aff -> index();
		}
		
	}