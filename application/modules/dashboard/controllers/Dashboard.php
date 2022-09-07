<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Dashboard_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$customer_id=$this->session->userdata('user_id');
		if(!isset($customer_id)){
			redirect(base_url().'login');
		}
		$service=$this->Service_model->servicefatch($customer_id);
		$customer_advertisrment=$this->Dashboard_model->advertisrment();
		$post_fatch=$this->Dashboard_model->customer_post_add($customer_id);
		$vendor_name=$this->Dashboard_model->vendor_name();
		$dashboard_rs=array(
			'service_rs'=>$service,
			'advertisrment'=>$customer_advertisrment,
			'vendor_names'=>$vendor_name,
			'customer_post'=>$post_fatch
		);
		$this->load->view('common/frontend/include/all-header',$dashboard_rs);
		$this->load->view('index',$dashboard_rs);
		$this->load->view('common/frontend/include/all-footer',$dashboard_rs);
	}

	

	public function customer_add_post_db(){	
	$uid=$this->session->userdata('user_id');
		if(!isset($uid)){
			redirect(base_url().'login');
		}	
		$user_id=$this->input->post('user_id');
		$status=$this->input->post('status');
		$date=$this->input->post('date');
		$convertDate = date("m-Y-d", strtotime($date));
		$mobile_number=$this->input->post('mobile_number');
		$source_city=$this->input->post('source_city');
		$destination_name=$this->input->post('destination_name');
		$total_weight=$this->input->post('total_weight');
		$material_type=$this->input->post('material_type');	
		$description=$this->input->post('description');
			$ty=array(
				'customer_id'=>$user_id,
				'date'=>$convertDate,
				'status'=>$status,
				'mobile_number'=>$mobile_number,
				'source_city'=>$source_city,
				'destination_name'=>$destination_name,
				'total_weight'=>$total_weight,
				'material_type'=>$material_type,
				'description'=>$description
			);
			$this->Dashboard_model->customer_post_data($ty);
			redirect(base_url().'dashboard');

		}
	 

	public function customer_req_edit($id){	
	$uid=$this->session->userdata('user_id');
		if(!isset($uid)){
			redirect(base_url().'login');
		}		
		$customer_edit=$this->Dashboard_model->customer_edit($id);
		$service=$this->Service_model->servicefatch();
		$abt=array(
			'customer_edit'=>$customer_edit,
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$abt);
		$this->load->view('customer-requirement-post-edit',$abt);
		$this->load->view('common/frontend/include/all-footer',$abt);

	}

	public function customer_req_upd(){
		$uid=$this->session->userdata('user_id');
		if(!isset($uid)){
			redirect(base_url().'login');
		}	
		$date=$this->input->post('date');
		$status=$this->input->post('status');
		$mobile_number=$this->input->post('mobile_number');
		$source_city=$this->input->post('source_city');
		$destination_name=$this->input->post('destination_name');
		$total_weight=$this->input->post('total_weight');
		$material_type=$this->input->post('material_type');	
		$description=$this->input->post('description');
		$id=$this->input->post('id');
			$ty=array(				
				'date'=>$date,
				'mobile_number'=>$mobile_number,
				'status'=>$status,
				'source_city'=>$source_city,
				'destination_name'=>$destination_name,
				'total_weight'=>$total_weight,
				'material_type'=>$material_type,
				'description'=>$description
			);
			$this->Dashboard_model->customer_post_data_update($ty,$id);
			redirect(base_url().'dashboard');
	}
}
