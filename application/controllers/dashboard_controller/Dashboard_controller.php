

<?php 


class Dashboard_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//check for login
	}
	
	public function index(){
		$this->load->view('dasboard/index');
	}

 ?>