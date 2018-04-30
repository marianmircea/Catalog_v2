<?php
	class View {
		function __construct() {
		}
		public function render ($file) {
			//require ('file:///D:/wamp/www/Catalog_v2/view/header.php');
			//require ('file:///D:/wamp/www/Catalog_v2/view/'.$file.'/index.php');
			//require ('file:///D:/wamp/www/Catalog_v2/view/footer.php');
			require __DIR__.'/../view/header.php';
			require URL.'view/'.$file.'/index.php';
			require URL.'view/footer.php';
			
		}
	}