<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class select_prop extends CI_Model {
  public function selectP(){
    $query = $this->db->query('SELECT * FROM property');
        if($query->num_rows()>0){
            return $query->result();
          } else {
            return array();
            }
  }

}
