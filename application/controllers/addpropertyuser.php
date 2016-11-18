<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addpropertyuser extends CI_Controller{
  private $table_name = 'property';
  public function __construct(){
    parent::__construct();
    $this->load->model('property_model');
    $this->load->model('addresss_model');
    // $this->getproperty();
    //$this->load->library('session');
  }
  public function index(){
    $this->load->view('addpropertyuser');
  }

  public function insertproperty(){
    $dataproperty = array(
      'propertyname' => $this->input->post('propertyname'),
      'location' => $this->input->post('location'),
      'status' => $this->input->post('status'),
      'price' => $this->input->post('price'),
      'description' => $this->input->post('propertydesc'),
    );
    $dataaddress = array(
      'latitute' => $this->input->post('latitute'),
      'longtitute' => $this->input->post('longtitute'),
    );
      $file = $_FILES['userFiles']['name'];
      if(empty($dataproperty&&$dataaddress)){
        redirect('addpropertyuser','refresh');
      }if(empty($file)){
        redirect('addpropertyuser','refresh');
      }

        else if($dataproperty&&$dataaddress&&$file)  {
          $insertaddress = $this->addresss_model->insertaddress($dataaddress);
          // echo "<pre>";var_export($insertaddress);exit();
          $filesCount = count($file);
          for($i = 0; $i < $filesCount; $i++){
            $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
            $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
            $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
            $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
            $uploadPath = 'uploads/files/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|png';
          //$config['max_size']	= '100';
          //$config['max_width'] = '1024';
          //$config['max_height'] = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
            if($this->upload->do_upload('userFile')){
               $fileData = $this->upload->data();
          // echo"<pre>";print_r($fileData);
          //ควยยพังตรงนี้
            $uploadData=array();
            $uploadData1=array();

            $uploadData[$i]['propertyname'] = $dataproperty['propertyname'];
            $uploadData[$i]['location'] = $dataproperty['location'];
            $uploadData[$i]['status'] = $dataproperty['status'];
            $uploadData[$i]['price'] = $dataproperty['price'];
            $uploadData[$i]['description'] = $dataproperty['description'];
            $uploadData[$i]['Image'] = $fileData['file_name'];
            $uploadData1[$i]['latitute'] = $dataaddress['latitute'];
            $uploadData1[$i]['longtitute'] = $dataaddress['longtitute'];
            // $this->db->set($uploadData);
            $insert = $this->property_model->insert($uploadData);
            $success= '<script src="asset/swal/sweetalert.min.js"></script>
                      <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
                       <script type="text/javascript">
                       setTimeout(function(){
                       swal(\'เพิ่มข้อมูลสำเร็จกรุณารอการตอบกลับ\')
                     },1000);
                      </script>';
                      echo $success;
              $data['property'] = $this->property_model->getRows();
            	// echo "<pre>";var_export($data['property'] );exit();          
            $this->load->view('addpropertyuser');

            }
          }
          if(!empty($uploadDat)){}


      }else{
        echo"HHHHHHHH";
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
// public function test (){
//     $getalldata = $this->addresss_model->getedatauser();
//     echo"<pre>";var_export($getalldata);exit();
// }
}
