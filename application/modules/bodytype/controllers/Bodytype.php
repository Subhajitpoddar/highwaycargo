<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodytype extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Bodytype_model');
		$this->load->model('service/Service_model');
	}

	public function body_type_add(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('body-add');

	}


	public function body_type_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$body_title=$this->input->post('bodytitle');				
		$g=array(
			'upload_path'=>'./assets/backend/img/body-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("bodyfile")){
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
			'body_title'=>$body_title,
			'body_file'=>$gs			
		);
		$this->Bodytype_model->body_type_db($ty);
	redirect(base_url().'admin-body-type-view');
		}
}

public function body_view(){
	$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$gyr=$this->Bodytype_model->body_type_view();
		$gy=array(
			'body_type_view'=>$gyr
		);
		$this->load->view('admin-body-type-view',$gy);

	}

	public function body_type_delele($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Bodytype_model->body_delete($id);
		redirect(base_url().'admin-body-type-view');

	}


	public function body_type_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$bodytype=$this->Bodytype_model->body_type_edit($id);
		$ev=array(
			'body_type_edit'=>$bodytype
		);
		$this->load->view('admin-body-type-edit',$ev);
}


	public function body_type_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$body_title=$this->input->post('bodytitle');
		$id=$this->input->post('id');				
		$g=array(
			'upload_path'=>'./assets/backend/img/body-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("bodyfile")){
			$ty=array(
			'body_title'=>$body_title
					
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'body_title'=>$body_title,
			'body_file'=>$gs			
		);
		
		}
		$this->Bodytype_model->body_type_update($ty,$id);
	redirect(base_url().'admin-body-type-view');
}
}
