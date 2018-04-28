<?php
    class view {
        function __construct() {

        }
        public function render ($file) {
            require URL.'view/header.php';
            require URL.'view/'.$file.'.php';
            require URL.'view/footer.php';

        }
    }