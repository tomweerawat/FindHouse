<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "Find House | Home";
    // print_r ($data); die();
    $this->load->view('front/template', $data);
  }
}
