<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
  private $table_name = 'user';
  public function __construct(){
    parent::__construct();
    $this->load->model('login_model');
    //$this->load->library('session');
  }
  public function index(){
    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
      $rs=$this->login_model->query($_COOKIE['email']);
      foreach($rs as $r){
        $id=$r->user_id;
        $name=$r->first_name;
        $img=$r->userimage;
        $permission=$r->permission;
        $salt=$r->salt;
        $encrypted_password=$r->encrypted_password;
        }
        $data=array(
          'uid'=>$id,
          'name'=> $name,
          'img'=> $img,
          'permission'=>$permission,
          'is_login'=> true
        );
        if($this->login_model->verifyHash($_COOKIE['password'].$salt,$encrypted_password)){
          $this->session->set_userdata($data);
          $this->userlogin();
        }else{
          $this->userlogin();
        }
    }else{$this->load->view('frontend/signin');}
  }

  public function checkLogin() {
    $email=$this->input->post('email');
    $password=$this->input->post('password');
    $checkbox=$this->input->post('remem');
    // echo $email."<br>".$password."<br>".$checkbox;exit;
    if(empty($email) or empty($password)){
      $error= '<script src="asset/frontend/swal/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="asset/frontend/swal/sweetalert.css">
                 <script type="text/javascript">
                 setTimeout(function(){
                 swal(\'Please input your Password\')
               },1000);
                </script>';
                $this->load->view('frontend/signin');
                echo $error;
    }else{
        $rs=$this->login_model->query($email);
        foreach($rs as $r){
          $name=$r->first_name;
          $img=$r->userimage;
          $permission=$r->permission;
          $salt=$r->salt;
          $encrypted_password=$r->encrypted_password;
      }

      if($checkbox != null){
        setcookie('email',$email,time()+(86400*30),"/");
        setcookie('password',$password,time()+(86400*30),"/");
      }else{
        setcookie('email','',0,"/");
        setcookie('password','',0,"/");
      }
      $data=array(
        'name'=> $name,
        'img'=> $img,
        'permission'=>$permission,
        'is_login'=> true
      );
      if($this->login_model->verifyHash($password.$salt,$encrypted_password)){
        $this->session->set_userdata($data);
        $this->userlogin();
      }else{
        $this->userlogin();
      }
    }
  }

  public function userlogin(){
    if($this->session->userdata('is_login') == false){
      $error= '<script src="asset/frontend/swal/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="asset/frontend/swal/sweetalert.css">
                 <script type="text/javascript">
                 setTimeout(function(){
                 swal(\'Your E-mail or password are incorrect.\')
               },1000);
                </script>';
                  $this->load->view('frontend/signin');
                echo $error;
    }else{

        if($this->session->userdata('permission') == 'admin'){
            $this->load->view('frontend/admin_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main');
            $this->load->view('frontend/footer');
          }
        else{
            $this->load->view('frontend/user_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main');
            $this->load->view('frontend/footer');
          }
        }
      }
      public function logout(){
        $this->session->sess_destroy();
        setcookie('email','',0,"/");
        setcookie('password','',0,"/");
        $this->load->view('frontend/header');
        $this->load->view('frontend/search');
        $this->load->view('frontend/main');
        $this->load->view('frontend/footer');

      }

}
