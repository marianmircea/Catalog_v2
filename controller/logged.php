<?php
	require 'view_controller.php';
	class Logged extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('logged');
		}
	}