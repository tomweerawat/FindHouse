<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addmember extends CI_Controller{
  // private $table_name = 'user';

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->library('session');
  }

  public function index(){
  $this->load->view('frontend/register');

  }

  public function showservicedata(){
  $getalldata = $this->user_model->getedatauser();
  // echo "<pre>";
  // var_export($getalldata);exit();

}
  public function insert(){

  $data_baru = array(
    'first_name' => $this->input->post('fname'),
    'last_name' => $this->input->post('lname'),
    'email_address' => $this->input->post('email'),
    'username' => $this->input->post('uname'),
    'password' => md5($this->input->post('pass')),
    'tel' => $this->input->post('telephone'),
  );
    $file = $_FILES['file']['name'];

    // var_export($file);exit();
    $filesCount = count($file);
    for($i = 0; $i < $filesCount; $i++){
      $_FILES['userFile']['name'] = $_FILES['file']['name'][$i];
      $_FILES['userFile']['type'] = $_FILES['file']['type'][$i];
      $_FILES['userFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
      $_FILES['userFile']['error'] = $_FILES['file']['error'][$i];
      $_FILES['userFile']['size'] = $_FILES['file']['size'][$i];
      $uploadPath = 'uploads/userimg/';
      $config['upload_path'] = $uploadPath;
      $config['allowed_types'] = 'gif|jpg|png';
      // $config['max_size']	= '61440';
      // $config['max_width'] = '1024';
      // $config['max_height'] = '768';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('userFile')){
       $fileData = $this->upload->data();
    $uploadData=array();
    $uploadData1=array();
    $uploadData[$i]['username'] = $data_baru['username'];
    $uploadData[$i]['first_name'] = $data_baru['first_name'];
    $uploadData[$i]['last_name'] = $data_baru['last_name'];
    $uploadData[$i]['password'] = $data_baru['password'];
    $uploadData[$i]['userimage'] = "uploads/userimg/".$fileData['file_name'];
    $uploadData[$i]['email_address'] = $data_baru['email_address'];
    $uploadData[$i]['tel'] = $data_baru['tel'];

    $insert = $this->user_model->insert($uploadData);
    // $this->session->set_userdata($insert);
    // $this->addpropertyuser->process_dp('dp');

    // $success= '<script src="asset/swal/sweetalert.min.js"></script>
    //           <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
    //            <script type="text/javascript">
    //            setTimeout(function(){
    //            swal(\'เพิ่มข้อมูลสำเร็จกรุณารอการตอบกลับ\')
    //          },1000);
    //           </script>';
    //           echo $success;
      // $data['user'] = $this->user_model->getRows();
      // $this->session->set_userdata($data['user']);
      // echo "<pre>";var_export($data['property'] );exit();
    // $data['user'] = $this->user_model->getRows();
    // 	$this->addpropertyuser->process_dp('user');
    //  echo "<pre>";var_export($data);exit();
    // $this->load->view('signin');

    }

    $success= '<script src="asset/swal/sweetalert.min.js"></script>
              <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
               <script type="text/javascript">
               setTimeout(function(){
               swal(\'สมัครสมาชิกสำเร็จ\')
             },1000);
              </script>';
              echo $success;
      $this->load->view('signin');
      }

    }
    function getimguser($id =FALSE){
      // if($id){
      //     $data = $this->user_model->getRows($id);
      //     header("Content-type: image/jpeg");
      //     print($data);
      //
      // }

      $data = $this->user_model->getRows($id);
      echo "<pre>";var_export($data);exit();
      // $this->session->set_userdata($data);

    }

}
