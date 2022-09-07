<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Customer_model');
		$this->load->model('service/Service_model');
		$this->load->model('home/Home_model');

	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$customer=array(
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$customer);
		$this->load->view('index',$customer);
		$this->load->view('common/frontend/include/all-footer',$customer);
	}

	public function customer_db(){
		$firstname_quote=$this->input->post('firstname_quote');
		$user_type=$this->input->post('user_type');
		$lastname_quote=$this->input->post('lastname_quote');
		$email_quote=$this->input->post('email_quote');
		$phone_quote=$this->input->post('phone_quote');
		$city_quote=$this->input->post('city_quote');
		$street_quote=$this->input->post('street_quote');
		$state_quote=$this->input->post('state_quote');
		$postal_code_quote=$this->input->post('postal_code_quote');
		$password_quote=$this->input->post('password_quote');
		$confirm_quote=$this->input->post('confirm_quote');

		// $check=password_hash($password_quote,PASSWORD_BCRYPT);
		if($password_quote==$confirm_quote)
		{
			$data=array(
				'first_name'=>$firstname_quote,
				'user_type'=>$user_type,        
				'last_name'=>$lastname_quote,
				'email'=>$email_quote,
				'phone'=>$phone_quote,
				'city'=>$city_quote,
				'street'=>$street_quote,
				'state'=>$state_quote,
				'postal_code'=>$postal_code_quote,
				'password_quote'=>$password_quote

			);
			$this->Customer_model->customer_register($data);
			redirect(base_url().'login');
		}

	}

	public function admin_customer_details(){
		$customer_detail=$this->Customer_model->customer_data_fatch();
		$customer=array(
			'customer_details'=>$customer_detail
		);
		$this->load->view('admin-customer-details',$customer);
	}

	public function customer_export(){		
    // file name
		$filename = 'customer-list'.date('Ymd').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

     // get data
		$usersData = $this->Customer_model->customer_list_export();
    // file creation
		$file = fopen('php://output','w');
		$header = array("ID","User Type","First Name","Last Name","Email","Phone Number","City","Street","State","Postal Code","Password");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){
			fputcsv($file,$line);
		}
		fclose($file);
		exit;      
	} 

	public function customer_profile_edit($id){
		$customer_edit=$this->Customer_model->customer_profile_edit($id);
		$service=$this->Service_model->servicefatch();
		$customer_edits=array(
			'customer_edit'=>$customer_edit,
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$customer_edits);
		$this->load->view('customer-profile-edit',$customer_edits);
		$this->load->view('common/frontend/include/all-footer',$customer_edits);
	}

	public function customer_profile_update(){

		$firstname_quote=$this->input->post('firstname');		
		$lastname_quote=$this->input->post('lastname');
		$id=$this->input->post('id');

		$data=array(
			'first_name'=>$firstname_quote,             
			'last_name'=>$lastname_quote                
		);
		$this->Customer_model->customer_profile_update($id,$data);
		redirect(base_url().'login');
	}

	public function support(){
		$service=$this->Service_model->servicefatch();
		$support=array(
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$support);
		$this->load->view('customer-support',$support);
		$this->load->view('common/frontend/include/all-footer',$support);
	}

	public function support_data(){
		$user_ids=$this->input->post('user_ids');		
		$customer_support=$this->input->post('customer_support');
		$description=$this->input->post('description');

		$data=array(
			'user_id'=>$user_ids,
			'select_issue'=>$customer_support,             
			'description'=>$description                
		);
		$this->Customer_model->customer_support($data);
		redirect(base_url().'dashboard');

	}

	public function suppot_data_view(){
		$supports=$this->Customer_model->support_view();		
		$support=array(
			'support_list'=>$supports
		);

		$this->load->view('admin-support-view',$support);
	}

	public function support_delete($id){
		$supports=$this->Customer_model->support_del($id);
		redirect(base_url().'customer-suppot-data-view');

	}
	public function customer_requirement(){
		$customer_requirement=$this->Customer_model->customer_requirement();		
		$customers=array(
			'customer_requirement'=>$customer_requirement
			
		);
		$this->load->view('admin-customer-requirement',$customers);
	}

	public function customer_requirement_approve($id){
		$this->Customer_model->update_requirement($id);
		redirect(base_url().'admin-customer-requirement');			
	}

	public function change_password($id){
		$change_pass=$this->Customer_model->change_password($id);
		$service=$this->Service_model->servicefatch();
		$change=array(
			'changes_password'=>$change_pass,
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$change);
		$this->load->view('change-password',$change);
		$this->load->view('common/frontend/include/all-footer',$change);
	}

	public function password_update(){

		$id=$this->input->post('id');		
		$password=$this->input->post('password');		

		$data=array(                 
			'password_quote'=>$password                
		);
		$this->Customer_model->password_update($id,$data);
		redirect(base_url().'dashboard');
	}

	public function customer_requirements(){
		$customer_requirement=$this->Home_model->customer_requirement();
		$service=$this->Service_model->servicefatch();
		$result=array(			
			'customer_post'=>$customer_requirement,
			'service_rs'=>$service			
		);
		$this->load->view('common/frontend/include/all-header',$result);
		$this->load->view('customer-requirement',$result);
		$this->load->view('common/frontend/include/all-footer',$result);
	}

	public function admin_customer_delete($id){
		$this->Customer_model->admin_customer_delete($id);
		redirect(base_url().'admin-customer-details');

	}

	
}
