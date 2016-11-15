<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addpropertyuser extends CI_Controller{
  private $table_name = 'property';
  public function __construct(){
    parent::__construct();
    $this->load->model('property_model');
    // $this->getproperty();
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('addpropertyuser');
  }
  public function insertproperty(){
    // $dataproperty = array(
    //   'propertyname' => $this->input->post('propertyname'),
    //   'location' => $this->input->post('location'),
    //   'status' => $this->input->post('status'),
    //   'price' => $this->input->post('price'),
    //   'description' => $this->input->post('propertydesc'),
    // );
    // $getalldata = $this->property_model->insertprop($dataproperty);
    // $success= '<script src="asset/swal/sweetalert.min.js"></script>
    //           <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
    //            <script type="text/javascript">
    //            setTimeout(function(){
    //            swal(\'เพิ่มข้อมูลสำเร็จกรุณารอการตอบกลับ\')
    //          },1000);
    //           </script>';
    //           echo $success;
    // $this->load->view('addpropertyuser',$getalldata);
    $dataproperty = array(
      'propertyname' => $this->input->post('propertyname'),
      'location' => $this->input->post('location'),
      'status' => $this->input->post('status'),
      'price' => $this->input->post('price'),
      'description' => $this->input->post('propertydesc'),
    );
      if(empty($dataproperty)){
        redirect('addpropertyuser','refresh');
      }
        else if($dataproperty)  {
          $getalldata = $this->property_model->insertprop($dataproperty);
          $success= '<script src="asset/swal/sweetalert.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
                     <script type="text/javascript">
                     setTimeout(function(){
                     swal(\'เพิ่มข้อมูลสำเร็จกรุณารอการตอบกลับ\')
                   },1000);
                    </script>';
                    echo $success;
          $this->load->view('addpropertyuser',$getalldata);

        }



  }
public function logout(){
  $this->session->sess_destroy();
  $this->index();
}
public function getproperty(){
  $getalldata = $this->property_model->getedataproperty();

  $json['property'] = $getalldata;
  echo json_encode($json);
  // echo "<pre>";var_export($getalldata);exit();
    // echo json_encode(array($getalldata));

}


}
