<?php
	class Index extends Viewcontroller {
		function __construct () {
			parent::__construct();
		}
		function index() {
			$this -> view -> render('index');
		}
	}