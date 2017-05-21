<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maid_Center_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
// TODO: import models
	public function index()
	{
    $maids = $this->Maid_center_model->get_maids();
    $data['maids'] = $maids;
		$this->load->view('maid_center', $data);

	}

	public function hire_maid($maid_id){

		echo "this where you get the deetails and instructio on how to get a connecgtion";
		echo "for maid number ".$maid_id;
		//$this->load->view('hire_maid_view');
	}

}


?>
