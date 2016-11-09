<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('session');
  }
  public function index(){
    $this->load->view('signin');
  }


public function showservicedata(){
  // $getalldata = $this->user_model->getedatauser();
  //  echo "<pre>";
  //  var_export($getalldata);exit();
  // $getalldata = $this->user_model->getedatauser();
  // echo json_encode($getalldata);
}
public function showdata(){
  $getalldata = $this->user_model->getedatauser();
  echo "<pre>";
  var_export($getalldata);exit();

}
public function checklogin(){
  $user = $this->input->post('username');
  $pass = $this->input->post('password');
  if(empty($user) or empty($pass)){
    $this->session->set_flashdata('msg', 'Username or password can\'t be blank');
    redirect('signin');
  }

  $query = $this->user_model->getedatauser();
  //var_export($query);exit();

  if($query)
  {
    $data = array(
      'username' => $user,
      'is_logged_in' => true
    );
    $this->session->set_userdata($data);
     redirect('welcome');
  }
  else
  {
    $this->session->set_flashdata('msg', 'Invalid username and password');
    redirect('signin','refresh');

  }

}

public function logout(){
  $this->session->sess_destroy();
  $this->index();
}



}
