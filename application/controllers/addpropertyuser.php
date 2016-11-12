<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addpropertyuser extends CI_Controller{
  private $table_name = 'user';
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('addpropertyuser');
  }

public function logout(){
  $this->session->sess_destroy();
  $this->index();
}



}
