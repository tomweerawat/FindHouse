<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class edit_profile extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_edit_profile','me');
    $this->load->library('upload');
  }

  public function edit_pic($id){
    $rsm=$this->me->do_upload();
    if($rsm==false){
      echo "error";
    }else{
      $img=$rsm['file_name'];
      $data['uid']=$id;
      $data['userimage']="/uploads/userimg/".$img;
      //echo "<pre>"; print_r($dataregis); die();

      if(!$this->me->update($data)){
        echo "error";
      }else{
        echo "success";
      }
    }
  }
}
