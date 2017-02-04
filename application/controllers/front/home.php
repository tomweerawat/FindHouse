<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "Home";
    $data['alert']=false;
    $this->load->view('template/header', $data);
    $this->load->view('template/footer');
  }
}
