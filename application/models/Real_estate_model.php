
<?php

class Real_estate_model extends CI_Model{

  public function _construct(){
    parent::__construct();
  }


  public function list_by_recently_added(){

  //  $this->db->where('type ', 'rent');
    $query = $this->db->get('real_estate');
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return null;
    }

}

  public function search_by_location($location_name){

    $this->db->like('location ',$location_name );
    $query = $this->db->get('real_estate');
    if ($query->num_rows() > 0) {
      return $query->result();
    }else{
      return null;
    }

}
public function all()
{
  $result = $this->db->get('images');
  return $result;
}

public function find($id)
{
  $row = $this->db->where('id',$id)->limit(1)->get('real_estate');
  return $row;
}

public function create($data)
{
  try{
    $this->db->insert('images', $data);
    return true;
  }catch(Exception $e){
    return $e;
  }
}

public function update($id, $data)
{
  try{
    $this->db->where('id',$id)->limit(1)->update('images', $data);
    return true;
  }catch(Exception $e){
    return $e;
  }
}

public function delete($id)
{
  try {
    $this->db->where('id',$id)->delete('images');
    return true;
  }

  //catch exception
  catch(Exception $e) {
    echo $e->getMessage();
  }
}




}

 ?>
