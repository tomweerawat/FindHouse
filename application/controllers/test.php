<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->library('upload');
  }
public function index(){
  $this->load->view('frontend/test');
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
//echo $fileName;
$this->upload_image($fileName);
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

public function upload_image($fileName)
{
  $filename1 = explode(',',$fileName);
  //echo "<pre>";print_r($filename1);exit;
  $img1=$filename1['0'];
  $img2=$filename1['1'];
  $img3=$filename1['2'];
  $img4=$filename1['3'];
  $img5=$filename1['4'];

  // echo $img1;
  //   echo $img2;
  //     echo $img3;
  //       echo $img4;
  //         echo $img5;exit;
  $data=array(
    'img1'=>"uploads/files/".$img1,
    'img2'=>"uploads/files/".$img2,
    'img3'=>"uploads/files/".$img3,
    'img4'=>"uploads/files/".$img4,
    'img5'=>"uploads/files/".$img5
  );
  $test=$this->db->insert('test',$data);
  if($test){
    echo "success";
  }else{
    echo "fail";
  }
  }


}
