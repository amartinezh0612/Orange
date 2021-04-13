<?php 
	class Conexion {
		private $conect;

		function __construct(){
			$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_SHARSET.";
			try{
				$this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
				$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $exception){
				$this->conect = "Error en la conexión";
				echo "ERROR: " .$exception->getMessage();
			}
		}

		public function conect(){
			return $this->conect;
		}
	}
?>