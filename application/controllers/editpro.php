<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editpro extends CI_Controller{

  public function __construct(){
    parent::__construct();

  }

  public function index(){
    $this->load->view('user/header');
    $this->load->view('user/profile');
    $this->load->view('user/footer');
  }
}
