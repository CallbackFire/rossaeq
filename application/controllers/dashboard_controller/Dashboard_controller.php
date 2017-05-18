

<?php 


class Dashboard_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//check for login
	}
	
	public function index()
	{
		$this->load->view('dashboard/index');
	}

	public function login()
	{

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
}

 ?>