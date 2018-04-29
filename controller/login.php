<?php
	require 'view_controller.php';
	class login extends viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('login');
		}	
	}