<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller{

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
    // // echo "<pre>";print_r($prop);exit;
    $this->load->view('user_backend/header');
    $this->load->view('user_backend/view_prop',$prop);
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
    $this->load->view('user_backend/header');
    $this->load->view('user_backend/show_prop',$data);
  }

  public function update($id){
    $dataproperty=array(
      'proptype' => $this->input->post('proptype'),
      'ptype' => $this->input->post('ptype'),
      'propertyname' => $this->input->post('propertyname'),
      'detail' => $this->input->post('detail'),
      'ntype' => $this->input->post('ntype'),
      'ndetail' => $this->input->post('ndetail'),
      'price' => $this->input->post('price'),
      'rroom' => $this->input->post('rroom'),
      'broom' => $this->input->post('broom'),
      'kroom' => $this->input->post('kroom'),
      'lroom' => $this->input->post('lroom'),
    );
    $data1=array_filter($dataproperty);
    $dataaddress= array(
      'province' => $this->input->post('province'),
      'district' => $this->input->post('district'),
      'subdistrict' => $this->input->post('subdistrict'),
      'house' => $this->input->post('house'),
      'number' => $this->input->post('number'),
      'road' => $this->input->post('road'),
      'zipcode' => $this->input->post('zipcode')
    );
    $data2=array_filter($dataaddress);

if(!empty($data1)){
  $this->db->where('property_id',$id);
  $this->db->update('property',$data1);
}

if(!empty($data2)){
  $this->db->where('property_id',$id);
  $this->db->update('address',$data2);
}

    // $this->db->where('property_id',$id);
    // $this->db->update('property',$data1);
    // $this->db->update('address',$data2);

   $this->index();

    // echo "<pre>";print_r($data1);
    // print_r($data2);exit;
  }
}
