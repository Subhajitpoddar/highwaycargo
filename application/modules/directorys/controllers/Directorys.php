<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorys extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Directorys_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$directory=$this->Directorys_model->directory();
		$state=$this->Directorys_model->state();
		$body_type=$this->Directorys_model->body_type();
		$directory_side_ads=$this->Directorys_model->directory_side_ads();	
		$directory_top=$this->Directorys_model->directory_top_side_ads();
		$directorys=array(
			'service_rs'=>$service,
			'directory_rs'=>$directory,
			'directory_ads'=>$directory_side_ads,
			'directory_top_ads'=>$directory_top,
			'body_type'=>$body_type,			
			'states'=>$state
		);
		$this->load->view('common/frontend/include/all-header',$directorys);
		$this->load->view('index',$directorys);
		$this->load->view('common/frontend/include/all-footer',$directorys);
	}
	public function directory_details($id)

	{	
		$service=$this->Service_model->servicefatch();
		$directory_details=$this->Directorys_model->directory_detail($id);
		$comment=$this->Directorys_model->comments_fatch($id);
		$directory_ads=$this->Directorys_model->directory_side_ads_image();
		$details=array(
			'service_rs'=>$service,
			'comments_fatch'=>$comment,
			'diractory_ads'=>$directory_ads,
			'directory_detsils_rs'=>$directory_details
		);
		$this->load->view('common/frontend/include/all-header',$details);
		$this->load->view('directory-details',$details);
		$this->load->view('common/frontend/include/all-footer',$details);
	}


	// public function search_keyword(){
	// 	$key=$this->input->post('skeywork');
	// 	$data['directory_rs']=$this->Directorys_model->searchkeyword($key);
	// }

	public function choise_state(){
		$service=$this->Service_model->servicefatch();
		$state_id=$this->input->post('state_id');
		$srch_pincode=$this->input->post('srch');
		$search_pin=$this->Directorys_model->search_pin($srch_pincode);		

		$data_state=$this->Directorys_model->data_using($state_id);	
				
		$diractory_fatch_state=$this->Directorys_model->state();
		$body_type=$this->Directorys_model->body_type();
		$directory_side_ads=$this->Directorys_model->directory_side_ads();	
		$directory_top=$this->Directorys_model->directory_top_side_ads();
		$state_fatch=array(
			'state_choose'=>$data_state,
			'search_pin'=>$search_pin,
			'states'=>$diractory_fatch_state,
			'directory_ads'=>$directory_side_ads,
			'directory_top_ads'=>$directory_top,	
			'body_type'=>$body_type,		
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$state_fatch);
		$this->load->view('filter-state',$state_fatch);
		$this->load->view('common/frontend/include/all-footer',$state_fatch);
	}

	public function search_pin(){

		$srch_pincode=$this->input->post('srch');
		$search_pin=$this->Directorys_model->search_pin($srch_pincode);
		$state_id=$this->input->post('state_id');
		$data_state=$this->Directorys_model->data_using($state_id);	
		$service=$this->Service_model->servicefatch();
		$diractory_fatch_state=$this->Directorys_model->state();
		$body_type=$this->Directorys_model->body_type();
		$directory_side_ads=$this->Directorys_model->directory_side_ads();	
		$directory_top=$this->Directorys_model->directory_top_side_ads();

		$pin_fatch=array(
			
			'search_pin'=>$search_pin,
			'state_choose'=>$data_state,
			'states'=>$diractory_fatch_state,
			'directory_ads'=>$directory_side_ads,
			'directory_top_ads'=>$directory_top,
			'body_type'=>$body_type,	
			'service_rs'=>$service
			
		);
		$this->load->view('common/frontend/include/all-header',$pin_fatch);
		$this->load->view('search_pin',$pin_fatch);
		$this->load->view('common/frontend/include/all-footer',$pin_fatch);

	}	


	public function body_type_filter($title){	
	    $service=$this->Service_model->servicefatch();	
		$body_type_filter=$this->Directorys_model->body_type_filter($title);
		$state=$this->Directorys_model->state();
		$srch_pincode=$this->input->post('srch');
		$search_pin=$this->Directorys_model->search_pin($srch_pincode);	
		$body_type=$this->Directorys_model->body_type();
		$directory_side_ads=$this->Directorys_model->directory_side_ads();	
		$directory_top=$this->Directorys_model->directory_top_side_ads();
		

		$body_type_filters=array(		
			
			'body_type_filter'=>$body_type_filter,
			'states'=>$state,
			'directory_ads'=>$directory_side_ads,
			'directory_top_ads'=>$directory_top,
			'search_pin'=>$search_pin,
			'body_type'=>$body_type,
			'service_rs'=>$service			
			
		);
		$this->load->view('common/frontend/include/all-header',$body_type_filters);
		$this->load->view('body_type',$body_type_filters);
		$this->load->view('common/frontend/include/all-footer',$body_type_filters);

	}

	public function directory_comment(){

		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');
		$directory_id=$this->input->post('directory_id');
		$comments=array(
			'name'=>$name,
			'email'=>$email,
			'phone'=>$phone,
			'message'=>$message,
			'directory_id'=>$directory_id,
			'time' => date('Y-m-d',strtotime('now'))

		);
		$this->Directorys_model->comment_data($comments);
	}

	public function quick_search(){
		$srch_pincode=$this->input->post('srch');
		$search_pin=$this->Directorys_model->search_pin($srch_pincode);
		$state_id=$this->input->post('state_id');
		$data_state=$this->Directorys_model->data_using($state_id);	
		$service=$this->Service_model->servicefatch();
		$diractory_fatch_state=$this->Directorys_model->state();
		$body_type=$this->Directorys_model->body_type();
		$directory_side_ads=$this->Directorys_model->directory_side_ads();	
		$directory_top=$this->Directorys_model->directory_top_side_ads();

		$quick_search=$this->input->post('quick_search');
		$quick=$this->Directorys_model->quick_search($quick_search);

		$quick_fatch=array(
			
			'search_pin'=>$search_pin,
			'state_choose'=>$data_state,
			'states'=>$diractory_fatch_state,
			'directory_ads'=>$directory_side_ads,
			'directory_top_ads'=>$directory_top,
			'body_type'=>$body_type,	
			'service_rs'=>$service,
			'quick_search'=>$quick
			
		);
		$this->load->view('common/frontend/include/all-header',$quick_fatch);
		$this->load->view('quick-search',$quick_fatch);
		$this->load->view('common/frontend/include/all-footer',$quick_fatch);



	}

	// public function reating(){
	// 	$this->load->view('reating');

	// }

	public function submit_reating(){
		$this->load->view('submit_rating');

	}



}
