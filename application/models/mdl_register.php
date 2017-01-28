<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_register extends CI_Model{


  public function __construct()
  {
    parent::__construct();
  }

  public function insert($data)
  {
    $this->db->insert('user', $data);
		return TRUE;
  }
  public function getHash($password) {

      $salt = sha1(rand());
      $salt = substr($salt, 0, 10);
      $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
      $hash = array("salt" => $salt, "encrypted" => $encrypted);

      return $hash;
  }

}
