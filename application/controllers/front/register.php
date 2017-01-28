<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register extends CI_Controller{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('mdl_register');

  }

  public function get_data()
  {
    $this->form_validation->set_rules('fname','Fristname','required');
    $this->form_validation->set_rules('lname','Lastname','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('telephone','Telephone','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('repassword','Repassword','required');
    if ($this->form_validation->run()==FALSE) {
			$info['success']=FALSE;
			$info['errors']=validation_errors();
		}else{
			$info['success']=TRUE;
			$dataregis=array(
				'first_name'=>$this->input->post('fname'),
				'last_name'=>$this->input->post('lname'),
				'email'=>$this->input->post('email'),
				'tel'=>$this->input->post('telephone')
			);
      //echo "<pre>"; print_r($data); die();
      $password=$this->input->post('password');
      $uniqid= uniqid(' ',true);
      //echo $uniqid;
      $hash = $this->mdl_register->getHash($password);
      $encrypted_password = $hash["encrypted"];
      $salt = $hash["salt"];
      $dataregis['encrypted_password']=$encrypted_password;
      $dataregis['salt']=$salt;
      $dataregis['unique_id']=$uniqid;
      //echo "<pre>"; print_r($dataregis); die();
      $this->mdl_register->insert($dataregis);
			$info['message']="Success";
		}
    $this->output->set_content_type('application/json')->set_output(json_encode($info));
  }

}
