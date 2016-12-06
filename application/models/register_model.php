<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_model extends CI_Model{
  public function __construct(){
    parent::__construct();

    }
    public function getHash($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);

        return $hash;
    }

    public function file_upload(){
      $config=array(
        'upload_path'=>"./uploads/userimg",
        'allowed_types'=>"gif|jpg|png",
        'max_size'=>"0",
        'overwrite'=>FALSE
      );
      $this->load->library("upload",$config);
      if($this->upload->do_upload("upload")){
        $data=$this->upload->data();
        return $data;
      }else{
        return "fail";
      }
  }

  }
