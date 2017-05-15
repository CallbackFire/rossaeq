<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_estate_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('directory');


	}

	public function index()
	{

        if($this->input->post('search_term') != null)
        {
              $termToSearch = $this->input->post('search_term');
              $data['results'] = $this->Real_estate_model->search_by_location($termToSearch);
		     			$data['termToSearch'] = $this->input->post('search_term');
		      $this->load->view('search', $data);
        }else{
            $this->load->view('search');
        }



	}
    public function find($id){

			$row = $this->Real_estate_model->find($id);
			if ($row->num_rows() > 0) {
				//$upload_path = 'uploads/'.$row->photo_dir;
				//if (directory_map($upload_path)) {
				//$data['images'] = directory_map($upload_path);
				//}
				$data['results'] = $row->result();
			  $this->load->view('detailed_view_property', $data);
			}else{
				$this->load->view('errors/html/error_404');
			}
    }

}
