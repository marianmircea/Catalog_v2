<?php
	class index extends viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('index');
		}
	}