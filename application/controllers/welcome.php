<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('select_prop');
  }

  public function index(){
    $sql="Select * from property order by property_id asc";
    $rs=$this->db->query($sql);
    $data['rs']=$rs->result_array();
    if($this->session->userdata('is_login') == false){
      	$this->load->view('frontend/new_header');
        $this->load->view('frontend/search');
        $this->load->view('frontend/main',$data);
        $this->load->view('frontend/footer');
      }else{
        if($this->session->userdata('permission') == 'admin'){
            $this->load->view('frontend/admin_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main',$data);
            $this->load->view('frontend/footer');
          }
        else{
            $this->load->view('frontend/user_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main',$data);
            $this->load->view('frontend/footer');
          }
      }

  }

  public function showservicedata(){
  $getalldata = $this->user_model->getedatauser();
  echo "<pre>";
  var_export($getalldata);exit();

}
  public function insert(){

  $data_baru = array(
    'first_name' => $this->input->post('fname'),
    'last_name' => $this->input->post('lname'),
    'email_address' => $this->input->post('email'),
    'username' => $this->input->post('uname'),
    'password' => md5($this->input->post('pass'))
  );

  $simpel_data = $this->db->insert($this->table_name, $data_baru);
  if(!$simpel_data){
    echo "GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGg";
    $this->load->view('welcome_message');
  }else{
      return $simpel_data;
      redirect('getdata');
  }



}



}
