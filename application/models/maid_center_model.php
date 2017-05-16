
<?php

class Maid_center_model extends CI_Model {

  public function _construct(){
    parent::__construct();
    //[-]require login from here please
    $this->maid_table = "maid_center";
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
    //addmin users willbe performing this action
    //$maid_data = array('' => , );
  }

  public function delete_maid(){

  }

  public function activate_maid(){

  }

  public function transaction_state($maid_id){
    //return states 
    // 1 = transaction started
    // 2 = transaction is being proccesed
    // 3 = transaction has been finished - call deactivate_maid method
    $this->db->where("maid_id", $maid_id);
    $this->db->get($this->maid_table);
  
  } 

  public function get_number_of_views(){
    $number_of_views = 0;
    if ($maid_object != null) {
      $maid_object = $this->select_maid($maid_id);
      foreach ($maid_object as $maid) {
        $number_of_views = $maid->views;
      }
      return $number_of_views;
    }
    return $number_of_views;
   
  }

  public function select_maid($maid_id){
      $this->db->where("maid_id", $maid_id);
      $this->db->limit(1);
      $query->$this->db->get($this->maid_table);
      if ($query->num_rows() > 0) {
        return $query;
      }else{
        return null;
      }
      
  }
}

 ?>
