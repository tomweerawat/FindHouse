<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addresss_model extends CI_Model {

    private $table_name = 'address';
    public function getedatauser(){
      $query = $this->db->query('SELECT * FROM address');
          if($query->num_rows()>0){
              return $query->result();
            } else {
              return array();
              }

    }
    public function insertaddress($dataaddress){

      $simpan_data = $this->db->insert($this->table_name,$dataaddress);
      return $simpan_data;

    }

  // public function validation($data){
  //     $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
  //     $this->db->select('*');
  //     $this->db->from('user');
  //     $this->db->where($condition);
  //     $this->db->limit(1);
  //     $query = $this->db->get();
  //
  //     if ($query->num_rows() == 1) {
  //       // echo"<pre>";var_export($query);exit();
  //     return true;
  //     } else {
  //     return false;
  //     }
  //
  //
  // }




 }
