
<?php

class Maid_center_model extends CI_Model {

  public function _construct(){
    parent::__construct();
  }

  public function get_maids(){
//shows onlu when a user has set their contacts details
  //  $this->db->where('type ', 'rent');
    $query = $this->db->get('maid_center');
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return null;
    }
}

  public function add_maid(){

  }

  public function safas
}

 ?>
