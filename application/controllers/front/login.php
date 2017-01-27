<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library("session");
    $this->load->model('mdl_login');
  }

  public function index()
  {
    if($this->chk_login()==false){
      redirect(base_url('front/home/login_fail'));
    }else{
      redirect(base_url('front/home'));
    }
  }

  public function chk_login()
  {
    $email=$this->input->post('email');
    $password=$this->input->post('password');
    //echo $email,$password; die();
    $result=$this->mdl_login->get_data($email);
    if($result){
      foreach ($result as $row) {
        $salt=$row->salt;
        $encrypted_password=$row->encrypted_password;
        $session_arr = array(
          'uid'=>$row->user_id,
          'name'=>$row->first_name,
          'img'=>$row->userimage,
          'permission'=>$row->permission,
          'is_login'=> true
        );
      }
          if($this->mdl_login->verifyHash($password.$salt,$encrypted_password)){
            $this->session->set_userdata($session_arr);
            return true;
          }else{
            //redirect(base_url('front/home/login_fail'));
            $this->form_validation->set_message('chk_login', 'ERROR');
            return false;
          }
    }else{
      //redirect(base_url('front/home/login_fail'));
      $this->form_validation->set_message('chk_login', 'ERROR');
      return false;
    }
  }

  public function logout(){
    $this->session->unset_userdata($session_arr);
    $this->session->sess_destroy();
    redirect(base_url('front/home'));

  }

}
