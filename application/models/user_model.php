<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table_name = 'user';
    public function getedatauser(){
      $query = $this->db->query('SELECT * FROM user');
          if($query->num_rows()>0){
              return $query->result();
            } else {
              return array();
              }

    }

  public function validation($data){
      $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where($condition);
      $this->db->limit(1);
      $query = $this->db->get();

      if ($query->num_rows() == 1) {
        // echo"<pre>";var_export($query);exit();
      return true;
      } else {
      return false;
      }


  }

  public function insertmember($data_baru){

		$simpan_data = $this->db->insert($this->table_name, $data_baru);
		return $simpan_data;
	}
  public function insert($data = array()){
    $insert = $this->db->insert_batch('user',$data);
    return $insert?true:false;
  }
  public function getRows($id = ''){
  $this->db->select('*');
  $this->db->from('user');
  if($id){
    $query = $this->db->get();
    $result = $query->row_array();
  }else{
    $query = $this->db->get();
    $result = $query->result_array();
  }
  return !empty($result)?$result:false;
}


 }
