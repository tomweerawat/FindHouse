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

  public function checklogin(){
  $query = $this->db->get($this->table_name);
  $this->db->where('username', $this->input->post('username'));
  $this->db->where('password', md5($this->input->post('password')));
  $query = $this->db->get($this->table_name);

  if($query->num_rows == 1){
      return true;
    }
  }




 }
