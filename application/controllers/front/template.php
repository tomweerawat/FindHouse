<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->library("pagination");
  }

  public function index()
  {
    $total_row=$this->db->count_all('property');

    $config=array();
    $config['base_url'] = base_url().'/front/template/index';
    $config['total_rows'] = $total_row;
    $limit=$config['per_page'] = 3;
    $config["uri_segment"] = 3;

    $config['full_tag_open']='<nav aria-label="Page navigation"><ul class="pagination">';
    $config['full_tag_close']='</ul></nav>';

    $config['cur_tag_open']='';
    $config['cur_tag_close']='';

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
    $page=$this->uri->segment(4,0);
    $sql="Select * from property order by created desc LIMIT ".$limit." OFFSET ".$page."";
    $this->db->limit($config['per_page'], $page);
    $rs=$this->db->query($sql);
    $data=array();
    $data['rs']=$rs->result_array();
    $pagination=$this->pagination->create_links();
    $data['pagination']=$pagination;
    //echo "<pre>"; print_r($data); die();
    $data['title'] = "Home";
    //echo "<pre>"; print_r ($data); die();
    $this->load->view('template/header', $data);
    $this->load->view('template/footer');

  }
}
