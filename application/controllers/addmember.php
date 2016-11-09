<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addmember extends CI_Controller{
  private $table_name = 'user';

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('session');
  }

  public function index(){
  $this->load->view('register');

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
    	//$this->session->set_flashdata('success', 'Your account successfully created! you can login now');
      $this->session->set_userdata($data_baru);
      redirect('signin');
      return $simpel_data;

  }



}



}
