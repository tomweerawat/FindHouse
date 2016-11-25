<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model {
  public function __construct(){
    parent::__construct();
}
    private $table_name = 'admin';
    public function getedatauser(){
      $query = $this->db->query('SELECT * FROM admin');
          if($query->num_rows()>0){
              return $query->result();
            } else {
              return array();
              }

    }

  public function validation($data){
      $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
      $this->db->select('*');
      $this->db->from('admin');
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

  public function querydata($user){
    $result=false;
    $q=$this->db->select('*')
            ->from('admin')
            ->where('username',$user);
    $q= $this->db->get();
    if($q){
      return $q->result();
    }
  }


 }
