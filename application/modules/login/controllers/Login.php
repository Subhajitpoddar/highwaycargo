<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$login=array(
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$login);
		$this->load->view('index',$login);
		$this->load->view('common/frontend/include/all-footer',$login);
	}


	public function logindb(){
		$user_type=$this->input->post('user_type');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$login_details=$this->Login_model->logindb_mod($user_type,$email,$password);

		if(count($login_details)>0){

			foreach($login_details as $r){
          if('user'==$r->user_type)
          {
           
            $this->session->set_userdata('user_id',$r->id);
            $this->session->set_userdata('user_name',$r->first_name); 
            $this->session->set_userdata('user_phone',$r->phone);                     
            $this->session->set_userdata('user_email',$r->email);  
           $this->session->set_userdata('user_city',$r->city);  
            $this->session->set_userdata('user_street',$r->street);
            $this->session->set_userdata('user_state',$r->state);
            $this->session->set_userdata('user_postal_code',$r->postal_code); 
            $this->session->set_userdata('profile_picture',$r->profile_picture);   
            redirect(base_url().'dashboard');
          }
          else
          {
          // $this->session->set_flashdata('Login failed','Invalid Username / Password!');
          	 $this->session->set_userdata('vendor_id',$r->id);
            $this->session->set_userdata('vendor_name',$r->first_name);  
            $this->session->set_userdata('vendor_phone',$r->phone);            
            $this->session->set_userdata('email',$r->email);
            $this->session->set_userdata('city',$r->city);  
            $this->session->set_userdata('street',$r->street);
            $this->session->set_userdata('state',$r->state);
            $this->session->set_userdata('postal_code',$r->postal_code);
             $this->session->set_userdata('profile_pictures',$r->profile_picture);  
          redirect(base_url().'vendor-dashboard');
          }
  			}		

		}
		else
      {
  			// $this->session->set_flashdata('Login failed','Invalid Username / Password!');
  			redirect(base_url().'login');
  		}

	}


	public function logout(){
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata('user_name');
		redirect(base_url().'login');
	}

	public function logout_vendor(){
		$this->session->unset_userdata("vendor_id");
		$this->session->unset_userdata('vendor_name');
		redirect(base_url().'login');
	}

	public function forget_password_page(){
		$service=$this->Service_model->servicefatch();
		$forget=array(
			'service_rs'=>$service
		);

		$this->load->view('common/frontend/include/all-header',$forget);
		$this->load->view('forget-password.php',$forget);
		$this->load->view('common/frontend/include/all-footer',$forget);
	}

	 public function ForgotPassword()
   {
         $email = $this->input->post('email');      
         $findemail = $this->Login_model->ForgotPassword($email);  
         if($findemail){
           echo "success";     
           }else{
         echo "not found";
      }
   }



	
}
