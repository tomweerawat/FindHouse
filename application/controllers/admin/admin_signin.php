<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_signin extends CI_Controller{
  private $table_name = 'admin';
  public function __construct(){
    parent::__construct();
    $this->load->model('admin');
    $this->load->library('session');
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

          $result2=$this->admin->querydata($user);
          foreach($result2 as $r){
            $id=$r->admin_id;
            $username=$r->username;
            $name=$r->name;
            $image=$r->image;}
          }

            if ($result == TRUE) {

                $data=array(
                  'id' => $id,
                  'username' => $username,
                  'name' => $name,
                  'image' => $image,
                  'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                $this->select();
          }
  else if ($result == False){
        $this->load->view('admin/login',$data);
      //  redirect('signin','refresh');
  }



  else{
    $this->session->set_flashdata('msg', 'Invalid username and password');
    redirect('admin');

    }

}
public function select(){
  if($this->session->userdata('is_logged_in') == false){
    redirect('admin');}else{
  $sql="Select * from property order by property_id asc";
  $rs=$this->db->query($sql);
  $prop['rs']=$rs->result_array();

  $this->load->view('admin/header');
  $this->load->view('admin/notification');
  $this->load->view('admin/adminpage',$prop);
  $this->load->view('admin/footer');}
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
  $this->load->view('admin/footer');
}

public function update($id){
  $select=$this->input->post('mydropdown');
  $data=array('activation' => $select );
  $this->db->where('property_id',$id);
  $this->db->update('property',$data);

  $this->select();
}

public function logout(){
  $this->session->sess_destroy();
  $this->index();

}


}
