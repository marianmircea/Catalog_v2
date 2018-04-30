<?php
	require 'connect_db.php';
	class users extends dbh {
		private $i;
		function getTheUser($usr, $pwd) {
			$type = array("profesori", "parinti", "elevi");
			foreach($type as $user) {
				$stm = $this->connection()->prepare('SELECT * FROM '.$user.' WHERE email=?');
				$stm -> execute([$usr]);
				echo "avem conexiune la BD si sunt selectati utilizatorii ...<br>";
				if ($stm->rowCount()) {
					while ($row = $stm->fetch()) {
						if (password_verify($pwd, $row['parola'])) {
							return array($row['nume'], $row['prenume']);
							exit();
						}
					}
				}
			}
		}
	}