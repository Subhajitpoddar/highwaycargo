<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popup extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Popup_model');
		$this->load->model('service/Service_model');
	}

	

	public function popuppg(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-popup');
	}


	public function pop_up_data(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$popup_til=$this->input->post('popup_til');
		$popup_des=$this->input->post('popup_des');		
		$g=array(
			'upload_path'=>'./assets/backend/img/pop-up-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("pipup_file")){
			?>
			<script>
				alert("No image found");
			</script>
			<?php
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'pop_up_title'=>$popup_til,
			'pop_up_description'=>$popup_des,				
			'pop_up_image'=>$gs
		);
		$this->Popup_model->pop_up_data($ty);
	redirect(base_url().'admin-pop-up-view');
		}

		}

	

	public function pop_up_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$pop=$this->Popup_model->pop_up_fatch();
		$pop_up=array(
			'pop_up'=>$pop
		);

		$this->load->view('admin-popup-view',$pop_up);

	} 

	// // public function aboutusdel($id){
	// // 	$uid=$this->session->userdata('uid');
	// // 	if(!isset($uid)){
	// // 		redirect(base_url().'admin');
	// // 	}
	// // 	$this->About_model->aboutusdel($id);
	// // 	redirect(base_url().'admin-aboutusview');

	// // } 

	public function pop_up_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}

		$popup_edit=$this->Popup_model->popup_edit($id);
		$pop_up=array(
			'pop_edit'=>$popup_edit
		);
		$this->load->view('admin-popup-edit',$pop_up);

	}

	public function popup_update(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$popup_til=$this->input->post('popup_til');
		$popup_des=$this->input->post('popup_des');
		$id=$this->input->post('id');			
		$g=array(
			'upload_path'=>'./assets/backend/img/pop-up-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("pipup_file")){
			$ty=array(
			'pop_up_title'=>$popup_til,
			'pop_up_description'=>$popup_des				
			
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'pop_up_title'=>$popup_til,
			'pop_up_description'=>$popup_des,				
			'pop_up_image'=>$gs
		);
		
		}
		$this->Popup_model->pop_up_update($ty,$id);
	redirect(base_url().'admin-pop-up-view');
	}
}
