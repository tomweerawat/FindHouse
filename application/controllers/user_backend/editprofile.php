<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editprofile extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }
  public function index(){
    if($this->session->userdata('is_login') == false){
      redirect('singin');}else{
        $id=$this->session->userdata('uid');
    $sql="Select * from user where user_id='$id'";
    $rs=$this->db->query($sql);
    $data['rs']=$rs->row_array();
    // // echo "<pre>";print_r($prop);exit;
    $this->load->view('user_backend/header');
    $this->load->view('user_backend/show_profile',$data);
    }
  }
}
