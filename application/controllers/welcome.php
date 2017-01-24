<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller{


  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('select_prop');
    $this->load->library("pagination");
  }

  public function index(){

    $total_row=$this->db->count_all('property');

    $config=array();
    $config['base_url'] = base_url().'/welcome/index';
    $config['total_rows'] = $total_row;
    $limit=$config['per_page'] = 4;
    $page=$config["uri_segment"] = 3;

    $config['full_tag_open']='<nav aria-label="Page navigation"><ul class="pagination">';
    $config['full_tag_close']='</ul></nav>';

    $config['cur_tag_open']='<li class="disabled"><a href="#">';
    $config['cur_tag_close']='</a></li>';

    $config['num_tag_open']='<li>';
    $config['num_tag_close']='</li>';

    $config['first_links']='First';
    $config['first_tag_open']='<li>';
    $config['first_tag_close']='</li>';

    $config['last_links']='Last';
    $config['last_tag_open']='<li>';
    $config['last_tag_close']='</li>';

    $config['prev_links']='<span aria-hidden="true">&laquo;</span>';
    $config['prev_tag_open']='<li>';
    $config['prev_tag_close']='</li>';

    $config['next_links']='<span aria-hidden="true">&raquo;</span>';
    $config['next_tag_open']='<li>';
    $config['next_tag_close']='</li>';

    $this->pagination->initialize($config);
    //$page=$this->uri->segment(3,0);
    //$page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $page=$this->uri->segment(3,0);
    $sql="Select * from property order by created desc LIMIT ".$limit." OFFSET ".$page."";
    //$this->db->limit($config['per_page'], $page);
    $rs=$this->db->query($sql);
    $data['rs']=$rs->result_array();
    $pagination=$this->pagination->create_links();
    $data['pagination']=$pagination;

    //echo "<pre>"; print_r($data); die();
    if($this->session->userdata('is_login') == false){
      	$this->load->view('frontend/new_header');
        $this->load->view('frontend/search');
        $this->load->view('frontend/main',$data);
        $this->load->view('frontend/footer');
      }else{
        if($this->session->userdata('permission') == 'admin'){
            $this->load->view('frontend/admin_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main',$data);
            $this->load->view('frontend/footer');
          }
        else{
            $this->load->view('frontend/user_header');
            $this->load->view('frontend/search');
            $this->load->view('frontend/main',$data);
            $this->load->view('frontend/footer');
          }
      }

  }

  public function showservicedata(){
  $getalldata = $this->user_model->getedatauser();
  echo "<pre>";
  var_export($getalldata);exit();

}
  public function insert(){

  $data_baru = array(
    'first_name' => $this->input->post('fname'),
    'last_name' => $this->input->post('lname'),
    'email_address' => $this->input->post('email'),
    'username' => $this->input->post('uname'),
    'password' => md5($this->input->post('pass'))
  );

  $simpel_data = $this->db->insert($this->table_name, $data_baru);
  if(!$simpel_data){
    echo "GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGg";
    $this->load->view('welcome_message');
  }else{
      return $simpel_data;
      redirect('getdata');
  }
}

public function show_detail($id){
  $sql="SELECT *
  FROM property
  INNER JOIN address ON address.address_id = property.address_id
   INNER JOIN user ON user.user_id = property.user_id
  WHERE property_id='$id'";
  //$sql="Select * from property where property_id='$id'";
  $rs=$this->db->query($sql);
  if($rs->num_rows()==0){
    $data['rs']=$array();
  }else{
    $data['rs']=$rs->row_array();
    //echo "<pre>";print_r($data);exit;
    	$this->load->view('frontend/new_header');
      $this->load->view('frontend/detail', $data);
      $this->load->view('frontend/footer');
  }

}



}
