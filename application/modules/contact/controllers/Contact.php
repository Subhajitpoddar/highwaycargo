<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Contact_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$contacts=$this->Contact_model->contactview();
		$contact=array(
			'service_rs'=>$service,
			'contactus'=>$contacts
		);
		$this->load->view('common/frontend/include/all-header',$contact);
		$this->load->view('index',$contact);
		$this->load->view('common/frontend/include/all-footer',$contact);
	}

	public function admin_contact_details(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-contact-details');

	}


	public function admin_contact_detailsdb(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$contacttil=$this->input->post('contacttil');		
		$contactaddress=$this->input->post('contactaddress');
		$contactnumber=$this->input->post('contactnumber');
		$contactemail=$this->input->post('contactemail');	
			
			$ty=array(
			'contacttitle'=>$contacttil,			
			'contactadres'=>$contactaddress,
			'contactnum'=>$contactnumber,
			'contactemail'=>$contactemail
				

		);
		$this->Contact_model->conatctdb($ty);
	redirect(base_url().'admin-eventsview');

		}


		public function admin_contact_view(){
	$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$contact=$this->Contact_model->contactview();
		$contact_view=array(
			'contact_view'=>$contact
		);
		$this->load->view('admin-contact-view',$contact_view);

	}

	public function admin_contact_del($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Contact_model->Contact_del($id);
		redirect(base_url().'admin-contact-view');

	}

	public function admin_contact_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$contactedit=$this->Contact_model->contact_edit($id);
		$contact=array(
			'contact'=>$contactedit
		);
		$this->load->view('admin-contact-edit',$contact);
}


public function contact_details_upd(){

	$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$contacttil=$this->input->post('contacttil');		
		$contactaddress=$this->input->post('contactaddress');
		$contactnumber=$this->input->post('contactnumber');
		$contactemail=$this->input->post('contactemail');	
		$id=$this->input->post('id');
			
			$ty=array(
			'contacttitle'=>$contacttil,			
			'contactadres'=>$contactaddress,
			'contactnum'=>$contactnumber,
			'contactemail'=>$contactemail
					

		);
		$this->Contact_model->conatctupd($ty,$id);
	redirect(base_url().'admin-contact-view');

}

   public function contact_form_data(){
   	$name_contact=$this->input->post('name_contact');	
	$email_contact=$this->input->post('email_contact');
	$phone_contact=$this->input->post('phone_contact');	
	$message_contact=$this->input->post('message_contact');
			
			$ty=array(
			'name_contact'=>$name_contact,		
			'email_contact'=>$email_contact,
			'phone_contact'=>$phone_contact,
			'message_contact'=>$message_contact
					

		);
		$this->Contact_model->contact_form($ty);
	redirect(base_url().'contact');

   }

   public function admin_contact_form_list(){
   	$contact_form=$this->Contact_model->contact_fatch();
   	$form=array(
   		'contact_data'=>$contact_form
   	);
   	$this->load->view('admin-contact-form-list',$form);   	
   }

   public function admin_contact_from_del($id){		
		$this->Contact_model->contact_from_del($id);
		redirect(base_url().'admin-contact-form-list');

	}

	public function home_contact_form(){
	$name_contact=$this->input->post('name_contact');	
	$email_contact=$this->input->post('email_contact');
	$phone_contact=$this->input->post('phone_contact');	
	$message_contact=$this->input->post('message_contact');
			
			$ty=array(
			'name_contact'=>$name_contact,		
			'email_contact'=>$email_contact,
			'phone_contact'=>$phone_contact,
			'message_contact'=>$message_contact
					

		);
		$this->Contact_model->contact_form($ty);
	redirect(base_url());
	}


}
