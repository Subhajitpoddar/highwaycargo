<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_model');
	}

	public function index()
	{		
		$this->load->view('index');		
	}

	public function logindb(){
		$email=$this->input->post('ename');
		$pass=$this->input->post('pasword');
		$details=$this->Admin_model->adminlog($email,$pass);

		if(count($details)>0){
			foreach($details as $login){

				$this->session->set_userdata("uid",$login->id);
				$this->session->set_userdata("un",$login->name);
				redirect(base_url().'admin-dashboard');
			}
			
		}
		else{
			redirect(base_url().'admin');
		}

	}

	public function logout(){
		$this->session->unset_userdata("uid");
		$this->session->unset_userdata('un');
		redirect(base_url().'admin');
	}
}
