<?php
	class Home extends Controllers {
		
		function __construct() {
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "Tienda Orange";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "home";
			$data['page_content'] = "Hola, Soy Andres Desarrollador de Software en Orange SA";
			$this->views->getView($this,"home", $data);
		}
	}
?>