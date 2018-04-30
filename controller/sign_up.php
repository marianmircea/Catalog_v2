<?php
	class Signup extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('sign_up');
		}
	}