<?php
	require 'view_controller.php';
	class logged extends viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('logged');
		}
	}