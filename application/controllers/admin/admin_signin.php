<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_signin extends CI_Controller{
  private $table_name = 'admin';
  public function __construct(){
    parent::__construct();
    $this->load->model('admin');
    //$this->load->library('session');
  }

  public function index(){
    $this->load->view('admin/login');
  }

  public function showdata(){
    $getalldata = $this->admin->getedatauser();

  }
  public function checklogin(){
    $user = $this->input->post('username');
    $pass = $this->input->post('password');

    if(empty($user) or empty($pass)){
      $this->session->set_flashdata('msg', 'Username or password can\'t be blank');
      redirect('admin');
    }

    $query = $this->admin->getedatauser();
    //echo "<pre>";var_export($query);exit();
    if($query){
      $data = array(
        'username' => $user,
        'password' => $this->input->post('password')
      );

      $result = $this->admin->validation($data);

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
    $this->select();
  }
  else if ($result == False){
      $str='  <script src="asset/swal/sweetalert.min.js"></script>
               <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
               <script type="text/javascript">
                   setTimeout(function() {
                    swal(\'Password Incorrect\')
                  },100);
               </script>';
      echo $str;
        $this->load->view('admin/login',$data);
      //  redirect('signin','refresh');
  }

}

  else{
    $this->session->set_flashdata('msg', 'Invalid username and password');
    redirect('admin');

    }

}
public function select(){
  $sql="Select * from property order by property_id asc";
  $rs=$this->db->query($sql);
  $data['rs']=$rs->result_array();
  $this->load->view('admin/header');
  $this->load->view('admin/adminpage',$data);
  $this->load->view('admin/footer');
}

public function edit($id){
  $sql="Select * from property where property_id='$id'";
  $rs=$this->db->query($sql);
  if($rs->num_rows()==0){
    $data['rs']=$array();
  }else{
    $data['rs']=$rs->row_array();
  }
  $this->load->view('admin/header');
  $this->load->view('admin/manage',$data);
  $this->load->view('admin/footer');  }


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