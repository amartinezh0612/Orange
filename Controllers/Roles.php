<?php
	class Roles extends Controllers {
		
		function __construct() {
			parent::__construct();
			/* session_start();
			if (empty($_SESSION['login'])){
				header('location: '.base_url().'/login');
			} */
		}

		public function Roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuario";
			$data['page_name'] = "rol_usuario";
			$data['page_title'] = "Roles Usuario <small> Tienda Virtual</small>";
			$this->views->getView($this,"roles", $data);
		}

		public function getRoles()
		{
			$arrData = $this->model->selectRoles();
			for ($i=0; $i < count($arrData); $i++){
				if ($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}
				$arrData[$i]['options'] = '<div class="text-center">
					<button class="btn btn-secondary btn-sm btnPermisosRol" onClick="'.$arrData[$i]['idrol'].'" title="Permisos">
					<i class="fas fa-key"></i></button>
					<button class="btn btn-primary btn-sm btnEditRol" onClick="fntEditRol('.$arrData[$i]['idrol'].')" title="Editar">
					<i class="fas fa-pencil-alt"></i></button>
					<button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol('.$arrData[$i]['idrol'].')" title="Eliminar">
					<i class="far fa-trash-alt"></i></button>
				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}
	}
?>