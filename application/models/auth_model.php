
<?php 

class Auth_model extends CI_Model {

  public function _construct(){
    parent::__construct();
    //initial data
    $USER_ADMIN_TABLE = '';
  }

  public function login(){

  }

  public function authenticate($username, $password){
  	if ($this->username_check($username) !=TRUE) {
  		return FALSE;
  	}
  	if ($this->username_check($username) == TRUE && 
  			$this->password($username) == TRUE) {
  		return TRUE;
  	}
  	
  }


  public function username_check($username)
  {
  	$this->db->where('username', $username);
  	$query = $this->db->get($USER_ADMIN_TABLE);
  	if ($query->num_row() > 0) {
  		return TRUE;
  	}{
  		return FALSE;
  	}
  }

  public function email_check()
   {
  	
   }

  public function passwork_check()
  {
  	
  }


}

 ?>