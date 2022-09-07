<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Admindashboard_model');		
	}

	public function dashboard()
	{		
		
		$this->load->view('admin-dashboard');
		
	}

	// public function aboutuspg(){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$this->load->view('admin-aboutus');
	// }


	// public function aboutusdb(){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$abouttitle=$this->input->post('abouttil');
	// 	$aboutdes=$this->input->post('aboutdes');
	// 	$detailsone=$this->input->post('detailsone');
	// 	$detailstwo=$this->input->post('detailstwo');
	// 	$detailsthree=$this->input->post('detailsthree');
	// 	$detailsfour=$this->input->post('detailsfour');		
	// 		$ty=array(
	// 			'aboutname'=>$abouttitle,
	// 			'aboutdes'=>$aboutdes,
	// 			'detailsone'=>$detailsone,
	// 			'detailstwo'=>$detailstwo,
	// 			'detailsthree'=>$detailsthree,
	// 			'detailsfour'=>$detailsfour
	// 		);
	// 		$this->About_model->aboutdb($ty);
	// 		// redirect(base_url().'admin-aboutusview');

	// 	}

	

	// public function aboutusview(){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$about=$this->About_model->aboutusftc();
	// 	$ab=array(
	// 		'about_us'=>$about
	// 	);

	// 	$this->load->view('admin-about-view',$ab);

	// } 

	// // public function aboutusdel($id){
	// // 	$uid=$this->session->userdata('uid');
	// // 	if(!isset($uid)){
	// // 		redirect(base_url().'admin');
	// // 	}
	// // 	$this->About_model->aboutusdel($id);
	// // 	redirect(base_url().'admin-aboutusview');

	// // } 

	// public function aboutusedit($id){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$aboutedit=$this->About_model->aboutusedit($id);
	// 	$abt=array(
	// 		'about_edit'=>$aboutedit
	// 	);
	// 	$this->load->view('admin-about-edit',$abt);

	// }

	// public function aboutusupd(){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}

	// 	$abouttitle=$this->input->post('abouttil');
	// 	$aboutdes=$this->input->post('aboutdes');
	// 	$detailsone=$this->input->post('detailsone');
	// 	$detailstwo=$this->input->post('detailstwo');
	// 	$detailsthree=$this->input->post('detailsthree');
	// 	$detailsfour=$this->input->post('detailsfour');	
	// 	$id=$this->input->post('id');	

	// 		$ty=array(
	// 			'aboutname'=>$abouttitle,
	// 			'aboutdes'=>$aboutdes,
	// 			'detailsone'=>$detailsone,
	// 			'detailstwo'=>$detailstwo,
	// 			'detailsthree'=>$detailsthree,
	// 			'detailsfour'=>$detailsfour
	// 		);
	// 	$this->About_model->aboutusupd($ty,$id);
	// 	redirect(base_url().'admin-aboutusview');
	// }
}
