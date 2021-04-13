<?php
	class Dashboard extends Controllers {
		
		function __construct() {
			parent::__construct();
			/* session_start();
			if (empty($_SESSION['login'])){
				header('location: '.base_url().'/login');
			} */
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Orange";
			$data['page_title'] = "Tienda Orange";
			$data['page_name'] = "dashboard";
			$this->views->getView($this,"dashboard", $data);
		}
	}
?>