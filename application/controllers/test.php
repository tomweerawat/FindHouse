<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('upload');
  }
public function index(){
  $this->load->view('test/login');
  }
public function regis(){
  $name=$this->input->post('name');
  $email=$this->input->post('email');
  $password=$this->input->post('pass');

  $uniqid= uniqid(' ',true);
  //echo $uniqid;
  $hash = $this->getHash($password);
  $encrypted_password = $hash["encrypted"];
  $salt = $hash["salt"];
  // echo $uniqid."|".$encrypted_password."|".$salt;

  $data=array(
    'unique_id'=>$uniqid,
    'name'=>$name,
    'email'=>$email,
    'encrypted_password'=>$encrypted_password,
    'salt'=>$salt
  );
  $rs=$this->db->insert('test',$data);
if($rs){
  echo "success";
}else{
  echo "fail";
}
}
public function getHash($password) {

    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);

    return $hash;

}
public function checkLogin() {
  $email=$this->input->post('email');
  $password=$this->input->post('password');

  $rs=$this->query($email);
  foreach($rs as $r){
    $salt=$r->salt;
    $encrypted_password=$r->encrypted_password;
  }
  //echo $salt."<br>".$encrypted_password;
  if($this->verifyHash($password.$salt,$encrypted_password)){
    echo "success";
  }else{
    echo "fail";
  }

}
private function query($email){
  $result=false;
  $q=$this->db->select('*')
          ->from('test')
          ->where('email',$email);
  $q= $this->db->get();
  if($q){
    return $q->result();
  }
}
private function verifyHash($password, $hash){
  return password_verify ($password, $hash);
}


}
