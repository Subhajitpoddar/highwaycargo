<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Announcement_model');
		$this->load->model('service/Service_model');
	}

	
	public function announcements(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-announcement');
	}


	public function announcements_data(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$announcementdes=$this->input->post('announcementdes');			
			$ty=array(
				'announcement_des'=>$announcementdes				
			);
			$this->Announcement_model->announcementdb($ty);
			redirect(base_url().'admin-announcement-view');

		}

	

	public function announcement_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$announcement_fatch=$this->Announcement_model->announcement_fatch();
		$ab=array(
			'announcement_fatch'=>$announcement_fatch
		);

		$this->load->view('admin-announcement-view',$ab);		

	} 

	public function announcement_del($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Announcement_model->announcementdel($id);
		redirect(base_url().'admin-announcement-view');

	} 

	public function announcement_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$announcement_edit=$this->Announcement_model->announcement_edit($id);
		$abt=array(
			'announcement_edit'=>$announcement_edit
		);
		$this->load->view('admin-announcement-edit',$abt);

	}

	public function announcement_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$announcementdes=$this->input->post('announcementdes');		
		$id=$this->input->post('id');			
			$ty=array(
				'announcement_des'=>$announcementdes				
			);
			$this->Announcement_model->announcement_update($ty,$id);
			redirect(base_url().'admin-announcement-view');
	}
}
