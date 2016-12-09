<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addprop extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('property_model');
    $this->load->model('addresss_model');
    $this->load->model('user_model');
    $this->load->library('session');
    $this->load->library('upload');
  }
  public function index(){
    if($this->session->userdata('is_login') == false){
      redirect('singin');}else{
    $this->load->view('user_backend/header');
    $this->load->view('user_backend/add_prop');
    }
  }
  public function insert(){
    $id=$this->session->userdata('uid');
    $dataproperty=array(
      'proptype' => $this->input->post('proptype'),
      'ptype' => $this->input->post('ptype'),
      'propertyname' => $this->input->post('propertyname'),
      'detail' => $this->input->post('detail'),
      'ntype' => $this->input->post('ntype'),
      'ndetail' => $this->input->post('ndetail'),
      'price' => $this->input->post('price'),
      'rroom' => $this->input->post('rroom'),
      'broom' => $this->input->post('broom'),
      'kroom' => $this->input->post('kroom'),
      'lroom' => $this->input->post('lroom'),
      'user_id' => $id
    );

    $dataaddress= array(
      'province' => $this->input->post('province'),
      'district' => $this->input->post('district'),
      'subdistrict' => $this->input->post('subdistrict'),
      'house' => $this->input->post('house'),
      'number' => $this->input->post('number'),
      'road' => $this->input->post('road'),
      'zipcode' => $this->input->post('zipcode')
    );


    $data2=array_filter($dataaddress);

    $rs=$this->file_upload();
    $img1=$rs['0'];
    $img2=$rs['1'];
    $img3=$rs['2'];
    $img4=$rs['3'];
    $img5=$rs['4'];

    $dataproperty['img1']="uploads/files/".$img1;
    $dataproperty['img2']="uploads/files/".$img2;
    $dataproperty['img3']="uploads/files/".$img3;
    $dataproperty['img4']="uploads/files/".$img4;
    $dataproperty['img5']="uploads/files/".$img5;
    //echo "<pre>";print_r($dataproperty);exit;
    $insert=$this->db->insert('address',$data2);
    $result=$this->db->insert_id();
    $dataproperty['address_id']=$result;
    $data1=array_filter($dataproperty);
    if($insert){
      // echo "<pre>";
      // print_r ($data1);exit;
      $this->insert_proprety($data1);
    }else{
      echo "fail";
    }
  }

  public function insert_proprety($data1){
    $insert=$this->db->insert('property',$data1);
    if($insert){
      // echo "<pre>";
      // print_r ($data1);exit;
      $this->index();
      // $success= '<script src="asset/swal/sweetalert.min.js"></script>
      //           <link rel="stylesheet" type="text/css" href="asset/swal/sweetalert.css">
      //            <script type="text/javascript">
      //            setTimeout(function(){
      //            swal(\'เพิ่มข้อมูลสำเร็จกรุณารอการตอบกลับ\')
      //          },1000);
      //           </script>';
      //           echo $success;
    }else{
      echo "fail";
    }
  }

  public function file_upload(){
              $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);
                 for($i=0; $i<$cpt; $i++)
                {
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                 $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                 $_FILES['userfile']['size']= $files['userfile']['size'][$i];
               $this->upload->initialize($this->set_upload_options());
               $this->upload->do_upload();
                $fileName = $_FILES['userfile']['name'];
                 $images[] = $fileName;
  }
  $fileName = implode(',',$images);
  $filename1 = explode(',',$fileName);
  // echo "<pre>";print_r($filename1);exit;
  return $filename1;

  // $img1=$filename1['0'];
  // $img2=$filename1['1'];
  // $img3=$filename1['2'];
  // $img4=$filename1['3'];
  // $img5=$filename1['4'];

  // echo $img1;
  //   echo $img2;
  //     echo $img3;
  //       echo $img4;
  //         echo $img5;exit;
  // $data=array(
  //   'img1'=>"uploads/files/".$img1,
  //   'img2'=>"uploads/files/".$img2,
  //   'img3'=>"uploads/files/".$img3,
  //   'img4'=>"uploads/files/".$img4,
  //   'img5'=>"uploads/files/".$img5
  // );
  }
                        private function set_upload_options()
                        {
                        // upload an image options
                               $config = array();
                               $config['upload_path'] = './uploads/files'; //give the path to upload the image in folder
                               $config['allowed_types'] = 'gif|jpg|png';
                                $config['max_size'] = '0';
                               $config['overwrite'] = FALSE;
                        return $config;
                        }


}
