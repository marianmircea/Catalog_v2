<?php
	class signup extends viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('sign_up');
		}
	}