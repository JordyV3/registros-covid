<?php 
	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = "Dashboard - Registros";
			$data['page_title'] = "Dashboard - Registros";
			$data['page_name'] = "dasboard";
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>