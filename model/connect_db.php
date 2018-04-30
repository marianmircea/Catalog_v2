<?php
	class Dbh {
		private $username;
		private $password;
		private $dbname;
		private $charset;
		public function connection() {
			$this -> servername = "localhost";
			$this -> username = "root";
			$this -> password = "";
			$this -> dbname = "catalog_v2";
			$this -> charset = "utf8mb4";
			try {
				$data_source_name = "mysql:host = ".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
				$pdo = new PDO($data_source_name, $this->username, $this->password);
				$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connection successful to database!<br>";
				return $pdo;
				$pdo = null;
			}
			catch (PDOException $error) {
				echo "Connection failed: ".$error->getMessage();
			}
		}
	}
?>