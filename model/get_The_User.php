<?php
	require 'connect_db.php';
	class users extends dbh {
		private $i;
		function getTheUser($usr, $pwd) {
			
			$stm = $this->connection()->prepare('SELECT * FROM users WHERE email=? AND user_pw=?');
			$stm -> execute([$usr, $pwd]);
			echo "avem conexiune la BD si sunt selectati utilizatorii ...<br>";
			if ($stm->rowCount()) {
				while ($row = $stm->fetch()) {
					return array($row['nume'], $row['prenume']);
					
				}
			} else return false;
			
		}
		
	}