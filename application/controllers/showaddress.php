<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showaddress extends CI_Controller{
  private $table_name = 'address';
  public function __construct(){
    parent::__construct();
    $this->load->model('addresss_model');
     $this->addressget();
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('addpropertyuser');
  }

public function addressget(){
  $getalldata = $this->addresss_model->getedatauser();
  echo "<pre>";var_export($getalldata);exit();

}


}
