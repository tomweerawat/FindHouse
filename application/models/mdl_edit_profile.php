<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mdl_edit_profile extends CI_Model{


  public function __construct()
  {
    parent::__construct();
  }

  public function do_upload(){
    $config=array(
      'upload_path'=>"./uploads/userimg",
      'allowed_types'=>"gif|jpg|png",
      'max_size'=>"0",
      'overwrite'=>FALSE
    );
    $this->upload->initialize($config);
    if(!$this->upload->do_upload("userfile")){
      return FALSE;
    }else{
      $data=$this->upload->data();
      return $data;
      }
  }

  public function update($data){
    $id=$data['uid'];
    $img=$data['userimage'];
    $result=$this->get_img_name($id);
    if($result){
      foreach ($result as $row) {
        $name=$row->userimage;
      }
    }else{
      $name="error";
    }
    // echo $name; exit();
    $sql="UPDATE user SET userimage= '$img' where user_id='$id'";
    $rs=$this->db->query($sql);
    if($rs==false){
      return FALSE;
    }else{
      $this->load->helper('file');
      delete_files('http://localhost:8181/FindHouse/'.$name, TRUE);
      return TRUE;
    }

  }

  public function get_img_name($id){
    $deimg=$this->db->select('userimage')
            ->from('user')
            ->where('user_id',$id);
    $deimg= $this->db->get();
    if($deimg->num_rows()==1){
      return $deimg->result();
    }else{
      return false;
    }
  }
}
