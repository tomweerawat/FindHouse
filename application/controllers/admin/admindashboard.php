<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admindashboard extends CI_Controller{
  public function __construct(){
    parent::__construct();
    //$this->load->library('session');
  }
  public function index(){
    $this->select();

  }
  public function select(){
    $sql="Select * from property order by property_id asc";
    $rs=$this->db->query($sql);
    $data['rs']=$rs->result_array();
    $this->load->view('admin/header');
    $this->load->view('admin/adminpage',$data);
    $this->load->view('admin/footer');
  }

  public function edit($id){
    $sql="Select * from property where property_id='$id'";
    $rs=$this->db->query($sql);
    if($rs->num_rows()==0){
      $data['rs']=$array();
    }else{
      $data['rs']=$rs->row_array();
    }
    $this->load->view('admin/header');
    $this->load->view('admin/manage',$data);
    $this->load->view('admin/footer');  }

public function logout(){
  $this->session->sess_destroy();
  $this->index();
}

// public function activation(){
//   $data['query']=$this->db->get('property');
//
// }

}
