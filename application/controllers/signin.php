<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller{
  private $table_name = 'user';
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('frontend/signin');
  }


public function showservicedata(){
  // $getalldata = $this->user_model->getedatauser();
  //  echo "<pre>";
  //  var_export($getalldata);exit();
  // $getalldata = $this->user_model->getedatauser();
  // echo json_encode($getalldata);
}
public function showdata(){
  $getalldata = $this->user_model->getedatauser();

}
public function checklogin(){
$user = $this->input->post('username');
$pass = $this->input->post('password');

if(empty($user) or empty($pass)){
  $this->session->set_flashdata('msg', 'Username or password can\'t be blank');
  redirect('signin');
}

$query = $this->user_model->getedatauser();
// echo "<pre>";var_export($query);exit();


if($query){
  $data = array(
    'username' => $user,
    'password' => md5($this->input->post('password'))
  );
}
  $result = $this->user_model->validation($data);
  //  echo "<pre>";var_export($result);exit();
     if ($result == TRUE){
       $data1 = $this->user_model->getRows($result);

       foreach ($data1 as $value) {
         $img= $value->username;
         $img1=$value->userimage;
       }
       $datapro = array(
         'username'=>$img,
         'userimage'=>$img1,
         'is_logged_in' => true
       );

       $this->session->set_userdata($datapro);
      $success= '<script src="asset/swal/sweetalert.min.js"></script>
                   <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
                    <script type="text/javascript">
                    setTimeout(function(){
                    swal(\'Welcome\')
                  },1000);
                   </script>';
         echo $success;
         $this->load->view('addpropertyuser');

    }


  else if ($result == FALSE){
    $success= '<script src="asset/swal/sweetalert.min.js"></script>
                 <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
                  <script type="text/javascript">
                  setTimeout(function(){
                  swal(\'Password Incorrect\')
                },1000);
                 </script>';
       echo $success;
       $this->load->view('signin');
  }
  else{
    // redirect('signin');
  }

}


public function logout(){
  $this->session->sess_destroy();
  $this->index();

}
public function user_data_submit() {
$data = array(
'username' => $this->input->post('username'),
'password'=>md5($this->input->post('password'))
);
$result = $this->user_model->validation($data);
if ($result == TRUE) {
    //echo "<pre>";var_export($result);exit();
  $this->session->set_userdata($data);
  echo json_encode($data);
}
else {
  $result = "Error";
  json_encode($result);
// redirect('signin');
}
 $this->session->set_userdata($data);

}


}
