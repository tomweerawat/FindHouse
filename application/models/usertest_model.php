<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usertest_model extends CI_Model {

    private $table_name = 'ci_member';

    public function getedata(){
      $query = $this->db->query('SELECT * FROM ci_member');
          if($query->num_rows>0){
              return $query->result();
            } else {
              return array();
              }

    }

  public function chechklogin(){
  $this->db->where('username', $this->input->post('username'));
  $this->db->where('password', md5($this->input->post('password')));
  $query = $this->db->get($this->table_name);

  if($query->num_rows == 1){
      return true;
    }
  }




 }
