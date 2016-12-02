<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
  private $table_name = 'user';
  public function __construct(){
    parent::__construct();
    //$this->load->model('user_model');
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('frontend/signin');
  }

  public function checkLogin() {
    $email=$this->input->post('email');
    $password=$this->input->post('password');

    $rs=$this->query($email);
    foreach($rs as $r){
      $salt=$r->salt;
      $encrypted_password=$r->encrypted_password;
    }
  //  echo $salt."<br>".$encrypted_password;exit;
    if($this->verifyHash($password.$salt,$encrypted_password)){
      echo "success";
    }else{
      echo "fail";
    }

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
