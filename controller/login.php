<?php
	class Login extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('login');
		}
	}