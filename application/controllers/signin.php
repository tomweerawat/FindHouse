<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller{
  private $table_name = 'user';
  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('signin');
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
  // echo "<pre>";
  // var_export($getalldata);exit();

}
public function checklogin(){
$user = $this->input->post('username');
$pass = $this->input->post('password');

if(empty($user) or empty($pass)){
  $this->session->set_flashdata('msg', 'Username or password can\'t be blank');
  redirect('signin');
}

$query = $this->user_model->getedatauser();
//echo "<pre>";var_export($query);exit();


if($query){
  $data = array(
    'username' => $user,
    'password' => md5($this->input->post('password'))
  );

 $result = $this->user_model->validation($data);

  if ($result == TRUE) {
      //echo "<pre>";var_export($result);exit();
      // echo "<script>
      // alert('There are no fields to generate a report');
      // </script>";
      $success= '<script src="asset/swal/sweetalert.min.js"></script>
                <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
                 <script type="text/javascript">
                 setTimeout(function(){
                 swal(\'Welcome\')
               },1000);
                </script>';
      echo $success;
    $data = array(
      'username' => $user,
      'is_logged_in' => true
    );
    $this->session->set_userdata($data);
    //  redirect('addpropertyuser');
    $this->load->view('addpropertyuser');
  }
  else if ($result == False){
    	// $data['msg'] = '<div class="alert alert-error"><strong>ไม่สามารถเข้าสู่ระบบได้</strong> รหัสผ่านของคุณไม่ถูกต้อง</div>';
      // echo $data['msg'];
      // 	$this->load->view('default',$data);
      // echo "<script>
      // swal('Password Incorrect');
      // </script>";
      $str='  <script src="asset/swal/sweetalert.min.js"></script>
               <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
               <script type="text/javascript">
                   setTimeout(function() {
                    swal(\'Password Incorrect\')
                  },100);
               </script>';
      echo $str;
        $this->load->view('signin',$data);
      //  redirect('signin','refresh');
  }

}

  else{
    $this->session->set_flashdata('msg', 'Invalid username and password');
    redirect('signin');

    }

}


public function logout(){
  // $str='  <script src="asset/swal/sweetalert.min.js"></script>
  //          <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
  //          <script type="text/javascript">
  //              setTimeout(function() {
  //               swal(\'Your Registration was successful\')
  //              },10);
  //          </script>';
  // echo $str;
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
