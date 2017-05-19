<?php 

class Auth_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function authenticate($username, $password)
	{
		echo "authentication";
	}


	public function login(){
		echo "login";
	}
	
}



 ?>