<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller{

  public function __construct(){
    parent::__construct();

  }
  public function index(){
  $this->load->view('frontend/register');

  }
  public function insert(){

    $dataregis = array(
      'first_name' => $this->input->post('fname'),
      'last_name' => $this->input->post('lname'),
      'email' => $this->input->post('email'),
      'tel' => $this->input->post('telephone')
    );
    $password=$this->input->post('pass');
    $uniqid= uniqid(' ',true);
    //echo $uniqid;
    $hash = $this->getHash($password);
    $encrypted_password = $hash["encrypted"];
    $salt = $hash["salt"];

    $dataregis['encrypted_password']=$encrypted_password;
    $dataregis['salt']=$salt;
    $dataregis['unique_id']=$uniqid;
    $rsm=$this->file_upload();
    $img=$rsm['file_name'];
    $dataregis['userimage']="/uploads/userimg/".$img;
    // echo "<pre>";
    // print_r ($dataregis);exit;
    $rs=$this->db->insert('user',$dataregis);
    if($rs){
      $this->load->view('frontend/header');
      $this->load->view('frontend/search');
      $this->load->view('frontend/main');
      $this->load->view('frontend/footer');
      $success= '<script src="asset/frontend/swal/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="asset/frontend/swal/sweetalert.css">
                 <script type="text/javascript">
                 setTimeout(function(){
                 swal(\'Register Success\')
               },1000);
                </script>';
                echo $success;
    }else{
      echo "fail";
    }

  }
                    public function getHash($password) {

                        $salt = sha1(rand());
                        $salt = substr($salt, 0, 10);
                        $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
                        $hash = array("salt" => $salt, "encrypted" => $encrypted);

                        return $hash;
                    }

                    public function file_upload(){
                      $config=array(
                        'upload_path'=>"./uploads/userimg",
                        'allowed_types'=>"gif|jpg|png",
                        'max_size'=>"0",
                        'overwrite'=>FALSE
                      );
                      $this->load->library("upload",$config);
                      if($this->upload->do_upload("upload")){
                        $data=$this->upload->data();
                        return $data;
                      }else{
                        return "fail";
                      }

                  }
}
