<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mission_model');		
	}

	
	public function missions(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-mission');
	}


	public function missions_data(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$mission_title=$this->input->post('mission_title');		
		$mission_des=$this->input->post('mission_des');			
			$ty=array(
				'mission_title'=>$mission_title,
				'mission_description'=>$mission_des			
			);
			$this->Mission_model->mission_db($ty);
			redirect(base_url().'admin-missions-view');

		}

	

	public function missions_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$mission_fatch=$this->Mission_model->mission_fatch();
		$ab=array(
			'mission_fatch'=>$mission_fatch
		);

		$this->load->view('admin-mission-view',$ab);		

	} 

	// public function announcement_del($id){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$this->Announcement_model->announcementdel($id);
	// 	redirect(base_url().'admin-announcement-view');

	// } 

	public function mission_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$mission_edit=$this->Mission_model->mission_edit($id);
		$abt=array(
			'mission_edit'=>$mission_edit
		);
		$this->load->view('admin-mission-edit',$abt);

	}

	public function mission_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$mission_title=$this->input->post('mission_title');		
		$mission_des=$this->input->post('mission_des');	
		$id=$this->input->post('id');		
			$ty=array(
				'mission_title'=>$mission_title,
				'mission_description'=>$mission_des			
			);
			$this->Mission_model->mission_update($ty,$id);
			redirect(base_url().'admin-missions-view');
	}
}
