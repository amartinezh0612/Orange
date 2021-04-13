<?php
	class Mysql extends Conexion {
		private $conexion;
		private $strquery;
		private $arrValues;

		function __construct() {
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect(); 
		}

		/**
		 * [Método para insertar un registro]
		 * @param  string $query     [description]
		 * @param  array  $arrValues [description]
		 * @return [type]            [description]
		 */
		public function insert(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$insert = $this->conexion->prepare($this->strquery);
			$result = $insert->execute($this->arrValues);
			if ($result) 
			{
				$lastInsert = $this->conexion->lastInsertId();
			}else{
				$lastInsert = 0;
			}
			return $lastInsert;
		}

		/**
		 * [Método para obtener un registro]
		 * @param  string $query [description]
		 * @return [type]        [description]
		 */
		public function select(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetch(PDO::FETCH_ASSOC);
			return $data;
		}

		/**
		 * [Método para obtener todo los registros]
		 * @param  string $query [description]
		 * @return [type]        [description]
		 */
		public function select_all(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetchall(PDO::FETCH_ASSOC);
			return $data;
		}

		/**
		 * [Método para actulizar un registro]
		 * @param  string $query     [description]
		 * @param  array  $arrValues [description]
		 * @return [type]            [description]
		 */
		public function update(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$update = $this->conexion->prepare($this->strquery);
			$result = $update->execute($this->arrValues);
			return $result;
		}

		/**
		 * [Método para eliminar un registro]
		 * @param  string $query [description]
		 * @return [type]        [description]
		 */
		public function delete(string $query)
		{
			$this->strquery = $query;
			$delete = $this->conexion->prepare($this->strquery);
			$result = $delete->execute();
			return $result;
		}
	}
?>