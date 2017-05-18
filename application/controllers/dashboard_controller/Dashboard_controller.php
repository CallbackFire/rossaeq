

<?php 


class Dashboard_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//check for login
	}
	
	public function index(){
		$this->load->view('dashboard/index');
	}
}

 ?>