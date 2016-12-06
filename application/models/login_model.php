<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model{
  public function __construct(){
    parent::__construct();

    }
    public function query($email){
      $result=false;
      $q=$this->db->select('*')
              ->from('user')
              ->where('email_address',$email);
      $q= $this->db->get();
      if($q){
        return $q->result();
      }
    }

    public function verifyHash($password, $hash){
      return password_verify ($password, $hash);
    }
  }
