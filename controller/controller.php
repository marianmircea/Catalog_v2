<?php
    require URL.'config/view.php';
    class controller {
        function __construct() {
            $this -> view = new view();
        }
    }