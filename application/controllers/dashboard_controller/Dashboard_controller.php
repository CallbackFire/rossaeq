

<?php 


class Dashboard_controller extends CI_Controller {



	public function __construct()
	{
		$LOGGED_IN = false;
		parent::__construct();
		//check for login
		$this->load->model('auth_model');
		if (!$LOGGED_IN) {
			redirect('login');
		}else{
			$this->index();
		}

		
	}
	
	public function index()
	{
		if (!$LOGGED_IN) {
			$this->login();
		}
		$this->load->view('dashboard/index');
	}

	public function login()
	{
		$this->load->view('dashboard/login_page');
	}

	public function logout()
	{

	}

	public function add_for_rent($post_data)
	{

	}

	public function delete_for_rent($property_id)
	{
		//change view status of the propertyforrent
	}

	public function add_for_sale($post_data)
	{
		
	}
	public function delete_for_sale($property_id)
	{

	}
	public function update_property_for_rent(){

	}
}

 ?>