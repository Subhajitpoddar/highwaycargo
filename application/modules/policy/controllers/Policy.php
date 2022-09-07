<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Policy_model');
		$this->load->model('service/Service_model');
	}

	public function disclaimer()
	{
		$service=$this->Service_model->servicefatch();
		$disclaimers=$this->Policy_model->disclaimer_view();
		$disclaimer=array(
			'service_rs'=>$service,
			'disclaimer_view'=>$disclaimers
		);
		$this->load->view('common/frontend/include/all-header',$disclaimer);
		$this->load->view('index',$disclaimer);
		$this->load->view('common/frontend/include/all-footer',$disclaimer);
	}
	public function copyright()
	{
		$service=$this->Service_model->servicefatch();
		$copyrights=$this->Policy_model->copyright_view();			
		$copyright=array(
			'service_rs'=>$service,
			'copyright_view'=>$copyrights
		);
		$this->load->view('common/frontend/include/all-header',$copyright);
		$this->load->view('copyright',$copyright);
		$this->load->view('common/frontend/include/all-footer',$copyright);
	}


	public function howitsworks()
	{
		$service=$this->Service_model->servicefatch();
		$howitwork=$this->Policy_model->howitwork_view();
		$howitsworks=array(
			'service_rs'=>$service,
			'howitwork_rs'=>$howitwork
		);
		$this->load->view('common/frontend/include/all-header',$howitsworks);
		$this->load->view('howitsworks',$howitsworks);
		$this->load->view('common/frontend/include/all-footer',$howitsworks);
	}
	public function privacy(){
		$service=$this->Service_model->servicefatch();
		$policys=$this->Policy_model->policy_view();

		$privacy=array(
			'service_rs'=>$service,
			'policy_rs'=>$policys
		);
		$this->load->view('common/frontend/include/all-header',$privacy);
		$this->load->view('privacy',$privacy);
		$this->load->view('common/frontend/include/all-footer',$privacy);

	}

	public function admin_policy(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-policy-add');

	}


	public function admin_policy_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$policyttil=$this->input->post('policyttil');		
		$policydescription=$this->input->post('policydescription');		

		$ty=array(
			'policy_name'=>$policyttil,			
			'policy_description'=>$policydescription		

		);
		$this->Policy_model->policy_db($ty);
		redirect(base_url().'admin-policy-view');

	}


	public function admin_policy_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$policy=$this->Policy_model->policy_view();
		$policy_view=array(
			'policy_view'=>$policy
		);
		$this->load->view('admin-policy-view',$policy_view);

	}

	public function admin_contact_del($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Contact_model->Contact_del($id);
		redirect(base_url().'admin-policy-view');

	}

	public function admin_policy_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$policy_edit=$this->Policy_model->policy_edit($id);
		$policy=array(
			'policy_edit'=>$policy_edit
		);
		$this->load->view('admin-policy-edit',$policy);
	}


	public function admin_policy_upd(){

		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$policyttil=$this->input->post('policyttil');		
		$policydescription=$this->input->post('policydescription');
		$id=$this->input->post('id');		

		$ty=array(
			'policy_name'=>$policyttil,			
			'policy_description'=>$policydescription		

		);
		$this->Policy_model->policyupd($ty,$id);
		redirect(base_url().'admin-policy-view');

	}


	/*disclaimer admin start*/


	public function admin_disclaimer_add(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-disclaimer-add');

	}


	public function admin_disclaimer_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$disclaimertil=$this->input->post('disclaimertil');		
		$disclaimerdestails=$this->input->post('disclaimerdestails');		

		$ty=array(
			'disclaimer_name'=>$disclaimertil,			
			'disclaimer_details'=>$disclaimerdestails		

		);
		$this->Policy_model->disclaimer_db($ty);
		redirect(base_url().'admin-disclaimer-view');

	}


	public function admin_disclaimer_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$disclaimer=$this->Policy_model->disclaimer_view();
		$disclaimer_view=array(
			'disclaimer_view'=>$disclaimer
		);
		$this->load->view('admin-disclaimer-view',$disclaimer_view);

	}

// 	public function admin_contact_del($id){
// 		$uid=$this->session->userdata('uid');
// 		if(!isset($uid)){
// 			redirect(base_url().'admin');
// 		}
// 		$this->Contact_model->Contact_del($id);
// 		redirect(base_url().'admin-policy-view');

// 	}

	public function admin_disclaimer_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$disclaimer_edit=$this->Policy_model->disclaimer_edit($id);
		$disclaimer=array(
			'disclaimer_edit'=>$disclaimer_edit
		);
		$this->load->view('admin-disclaimer-edit',$disclaimer);
	}


	public function admin_disclaimer_upd(){

		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$disclaimertil=$this->input->post('disclaimertil');		
		$disclaimerdestails=$this->input->post('disclaimerdestails');	
		$id=$this->input->post('id');		

		$ty=array(
			'disclaimer_name'=>$disclaimertil,			
			'disclaimer_details'=>$disclaimerdestails		

		);
		$this->Policy_model->disclaimer_upd($ty,$id);
		redirect(base_url().'admin-disclaimer-view');

	}
	/*Disclaimer end*/

	/* copy right admin start*/
	public function admin_copyright(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-copyright-add');

	}


	public function admin_copy_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$copyrighttil=$this->input->post('copyrighttil');		
		$copyrightdestails=$this->input->post('copyrightdestails');		
		$ty=array(
			'copyright_title'=>$copyrighttil,			
			'copyright_details'=>$copyrightdestails
		);
		$this->Policy_model->copyright_db($ty);
		redirect(base_url().'admin-copyright-view');

	}


	public function admin_copyright_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$copyright=$this->Policy_model->copyright_view();
		$copy_view=array(
			'copyright_view'=>$copyright
		);
		$this->load->view('admin-copyright-view',$copy_view);

	}

// 	public function admin_contact_del($id){
// 		$uid=$this->session->userdata('uid');
// 		if(!isset($uid)){
// 			redirect(base_url().'admin');
// 		}
// 		$this->Contact_model->Contact_del($id);
// 		redirect(base_url().'admin-policy-view');

// 	}

	public function admin_copyright_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$copy_edit=$this->Policy_model->copy_edit($id);
		$copyright_edit=array(
			'copyright_edit'=>$copy_edit
		);
		$this->load->view('admin-copyright-edit',$copyright_edit);
	}


	public function admin_copyright_upd(){

		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$copyrighttil=$this->input->post('copyrighttil');		
		$copyrightdestails=$this->input->post('copyrightdestails');
		$id=$this->input->post('id');
		$ty=array(
			'copyright_title'=>$copyrighttil,			
			'copyright_details'=>$copyrightdestails
		);
		$this->Policy_model->copyright_upd($ty,$id);
		redirect(base_url().'admin-copyright-view');

	}
	/* end */

	/* how it works admin panal start*/

	public function admin_howitwork_add(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-howitwork-add');

	}


	public function admin_howitwork_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$howitworktil=$this->input->post('howitworktil');		
		$howitworkdestails=$this->input->post('howitworkdestails');		

		$ty=array(
			'howitwork_title'=>$howitworktil,			
			'howitwork_details'=>$howitworkdestails		

		);
		$this->Policy_model->howitwork_db($ty);
	// redirect(base_url().'admin-disclaimer-view');

	}


	public function admin_howitwork_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$howitwork_view=$this->Policy_model->howitwork_view();
		$howitwork_views=array(
			'howitwork_view'=>$howitwork_view
		);
		$this->load->view('admin-howitwork-view',$howitwork_views);

	}

// // 	public function admin_contact_del($id){
// // 		$uid=$this->session->userdata('uid');
// // 		if(!isset($uid)){
// // 			redirect(base_url().'admin');
// // 		}
// // 		$this->Contact_model->Contact_del($id);
// // 		redirect(base_url().'admin-policy-view');

// // 	}

	public function admin_howitwork_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$howitwork_edit=$this->Policy_model->howitwork_edit($id);
		$howitwork_edits=array(
			'howitwork_edit'=>$howitwork_edit
		);
		$this->load->view('admin-howitwork-edit',$howitwork_edits);
	}

	public function admin_howitwork_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$howitworktil=$this->input->post('howitworktil');		
		$howitworkdestails=$this->input->post('howitworkdestails');		
		$id=$this->input->post('id');	

		$ty=array(
			'howitwork_title'=>$howitworktil,			
			'howitwork_details'=>$howitworkdestails		

		);
		$this->Policy_model->howitwork_upd($ty,$id);
		redirect(base_url().'admin-howitwork-view');
	}	
}