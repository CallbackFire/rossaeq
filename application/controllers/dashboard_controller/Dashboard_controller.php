

<?php 


class Dashboard_controller extends CI_Controller {



	public function __construct()
	{
		$LOGGED_IN = true;
		parent::__construct();
		//check for login
		$this->load->model('auth_model');
		if (!$LOGGED_IN) {
			redirect('login');
		}
	}
	
	public function index()
	{
		
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

	//accessor methods
	public function add_maid(){
		$this->load->view('maid_center/add_maid_form');
	}

	public function maid_entry_list(){
		$this->load->view('maid_center/maid_entry_list');
	}
	public function for_sale_entry_list(){
		$this->load->view('real_estate/for_sale_entry_list');
	}
	public function for_rent_entry_list(){
		$this->load->view('real_estate/for_rent_entry_list');
	}
}

 ?>