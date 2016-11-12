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




 }
