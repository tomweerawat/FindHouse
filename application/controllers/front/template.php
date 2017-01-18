<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends CI_Controller{
  // private $table_name = 'user';

  public function __construct(){
    parent::__construct();
  }

    function index(){
      $data['title']="Find House | Home page";
      $this->load->view('front/template', $data);
      //$this->load->view('front/content',$data);
    }
}
