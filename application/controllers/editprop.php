<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editprop extends CI_Controller{

  public function __construct(){
    parent::__construct();

  }

  public function index(){
    if($this->session->userdata('is_login') == false){
      redirect('singin');}else{
        $id=$this->session->userdata('uid');
    $sql="Select * from property where user_id='$id'";
    $rs=$this->db->query($sql);
    $prop['rs']=$rs->result_array();
    // echo "<pre>";print_r($prop);exit;
    $this->load->view('user/header');
    $this->load->view('user/editprop',$prop);
    $this->load->view('user/footer');
    }
  }

  public function edit($id){
    $sql="SELECT *
    FROM property
    INNER JOIN address ON address.address_id = property.address_id
     INNER JOIN user ON user.user_id = property.user_id
    WHERE property_id='$id'";
    //$sql="Select * from property where property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=$array();
    }else{
      $data['rs']=$rs->row_array();
      //echo "<pre>";print_r($data);exit;
    }
    $this->load->view('user/header');
    $this->load->view('user/showprop',$data);
    $this->load->view('user/footer');
  }
}
