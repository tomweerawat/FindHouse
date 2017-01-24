<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class custom_pagination extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
  }

  function generate_pagination()
  {
    $this->load->library('pagination');

    $config['base_url'] = 'http://example.com/index.php/test/page/';
    $config['total_rows'] = 200;
    $config['per_page'] = 3;

    $config['num_links']= 5;

    $config['full_tag_open']='<nav aria-label="Page navigation"><ul class="pagination justify-content-center">';
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

    $pagination= $this->pagination->create_links();
    return $pagination;

  }
}
