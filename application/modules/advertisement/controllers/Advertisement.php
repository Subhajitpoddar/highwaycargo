<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Advertisement_model');
		$this->load->model('service/Service_model');
	}
	

	public function advertisements(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin-advertisement');
	}


	public function advertisements_data(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/advertisement-img',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
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
			'advertisement_name'=>$advertisementtitle,						
			'advertisement_image'=>$gs
		);
		$this->Advertisement_model->advertisementdata($ty);
	redirect(base_url().'admin-advertisements-view');
		}

		}

	

	public function advertisements_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisement_model=$this->Advertisement_model->advertisement_view();
		$advertisement=array(
			'advertisement_rs'=>$advertisement_model
		);

		$this->load->view('admin-advertisement-view',$advertisement);

	} 

	// public function aboutusdel($id){
	// 	$uid=$this->session->userdata('uid');
	// 	if(!isset($uid)){
	// 		redirect(base_url().'admin');
	// 	}
	// 	$this->About_model->aboutusdel($id);
	// 	redirect(base_url().'admin-aboutusview');

	// } 

	public function advertisement_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisement_edit=$this->Advertisement_model->advertisement_edit($id);
		$advertisement=array(
			'advertisement_edit'=>$advertisement_edit
		);
		$this->load->view('admin-advertisement-edit',$advertisement);

	}

	public function advertisement_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/advertisement-img',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
			$ty=array(
			'advertisement_name'=>$advertisementtitle		
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'advertisement_name'=>$advertisementtitle,						
			'advertisement_image'=>$gs
		);
		
		}
		$this->Advertisement_model->advertisement_update($ty,$id);
	redirect(base_url().'admin-advertisements-view');
	}

	public function customer_advertisement(){
		$this->load->view('admin-customer-ads');
	}

	public function customer_ads_data(){

		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/customer-ads-img',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
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
			'customer_ads_name'=>$advertisementtitle,						
			'customer_ads_file'=>$gs
		);
		$this->Advertisement_model->customer_ads_data($ty);
	redirect(base_url().'admin-customer-ads-view');
		}

	}
	public function customer_ads_view(){
		$customer_ads=$this->Advertisement_model->customer_ads_view();
		$customer=array(
			'customer_rs'=>$customer_ads
		);
		$this->load->view('admin-customer-ads-view',$customer);		
	}

	public function customer_ads_edit($id){
		$customer_ads=$this->Advertisement_model->customer_ads_edit($id);
		$customer_edit=array(
			'customer_edit'=>$customer_ads
		);
		$this->load->view('admin-customer-ads-edit',$customer_edit);
	}

	public function customer_ads_update(){

			$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/customer-ads-img',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
			$ty=array(
			'customer_ads_name'=>$advertisementtitle						
			
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'customer_ads_name'=>$advertisementtitle,						
			'customer_ads_file'=>$gs
		);
		
		}
		$this->Advertisement_model->customer_ads_update($ty,$id);
	redirect(base_url().'admin-customer-ads-view');

	}

	public function service_advertisment(){
		$this->load->view('admin-service-advertisement');
	}

	public function service_advertisements_data(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/service-advertisement',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
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
			'advertisement_name'=>$advertisementtitle,						
			'advertisement_image'=>$gs
		);
		$this->Advertisement_model->serviceadvertisementdata($ty);
	redirect(base_url().'admin-service-advertisements-view');
		}

		}


		public function service_advertisements_view(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisement_model=$this->Advertisement_model->service_advertisement_view();
		$advertisement=array(
			'advertisement_rs'=>$advertisement_model
		);

		$this->load->view('admin-service-advertisement-view',$advertisement);

	} 
	public function service_advertisement_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisement_edit=$this->Advertisement_model->service_advertisement_edit($id);
		$advertisement=array(
			'advertisement_edit'=>$advertisement_edit
		);
		$this->load->view('admin-service-advertisement-edit',$advertisement);

	}

	public function service_advertisement_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$advertisementtitle=$this->input->post('advertisementtitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/service-advertisement',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("advertisementfile")){
			$ty=array(
			'advertisement_name'=>$advertisementtitle		
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'advertisement_name'=>$advertisementtitle,						
			'advertisement_image'=>$gs
		);
		
		}
		$this->Advertisement_model->service_advertisement_update($ty,$id);
	redirect(base_url().'admin-service-advertisements-view');
	}

	public function directory_advertisement(){
		$this->load->view('admin-directory-add');
	}
	public function directory_advertisement_data(){
		$directory_title=$this->input->post('directorytitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
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
			'title'=>$directory_title,						
			'image'=>$gs
		);
		$this->Advertisement_model->directory_advertisement_insert($ty);
	redirect(base_url().'admin-directory-view');
		}


	}
	public function directory_view(){
		$directorys=$this->Advertisement_model->directory_view();
		$directory=array(
			'directory_details'=>$directorys
		);
		$this->load->view('admin-directory-view',$directory);
	}
	public function directory_delete($id){
		$this->Advertisement_model->directory_delete($id);
		redirect(base_url().'admin-directory-view');

	}
	public function directory_edit($id){
		$directory_edit=$this->Advertisement_model->directory_edit($id);
		$directory_edits=array(
			'directory_edit'=>$directory_edit
		);
		$this->load->view('admin-directory-edit.php',$directory_edits);

	}
	public function directory_update(){
		$directory_title=$this->input->post('directorytitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
			$ty=array(
			'title'=>$directory_title		
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'title'=>$directory_title,						
			'image'=>$gs
		);
		
		}
		$this->Advertisement_model->directory_advertisement_update($ty,$id);
	redirect(base_url().'admin-directory-view');

	}

	public function directory_advertisement_top(){
		$this->load->view('admin-directory-top-ads');
	}

	public function directory_top_advertisement_data(){
		$directory_title=$this->input->post('directorytitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-top-ads',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
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
			'title'=>$directory_title,						
			'image'=>$gs
		);
		$this->Advertisement_model->directory_top_advertisement_insert($ty);
	redirect(base_url().'admin-directory-top-view');
		}


	}

	public function directory_top_view(){
		$directorys=$this->Advertisement_model->directory_top_view();
		$directory=array(
			'directory_details'=>$directorys
		);
		$this->load->view('admin-directory-top-ads-view',$directory);
	}

		public function directory_top_delete($id){
		$this->Advertisement_model->directory_top_delete($id);
		redirect(base_url().'admin-directory-top-view');

	}


		public function directory_top_edit($id){
		$directory_edit=$this->Advertisement_model->directory_top_edit($id);
		$directory_edits=array(
			'directory_edit'=>$directory_edit
		);
		$this->load->view('admin-directory-top-edit',$directory_edits);

	}

	public function directory_top_update(){
		$directory_title=$this->input->post('directorytitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-top-ads',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
			$ty=array(
			'title'=>$directory_title					
			
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'title'=>$directory_title,						
			'image'=>$gs
		);
	
		}
			$this->Advertisement_model->directory_advertisement_top_update($ty,$id);
	redirect(base_url().'admin-directory-top-view');


	}

	public function directory_details_advertisement(){
		$this->load->view('admin-directory-details-ads');
	}

	public function directory_details_data(){
		$directory_title=$this->input->post('directorytitle');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-details-ads',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
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
			'title'=>$directory_title,						
			'image'=>$gs
		);
		$this->Advertisement_model->directory_details_advertisement_insert($ty);
	redirect(base_url().'admin-directory-details-view');
		}


	}

	public function directory_details_view(){
		$directorys=$this->Advertisement_model->directory_details_views();
		$directory=array(
			'directory_details_ads_view'=>$directorys
		);
		$this->load->view('admin-directory-details-view',$directory);
	}

	public function directory_details_delete($id){
		$this->Advertisement_model->directory_details_delete($id);
		redirect(base_url().'admin-directory-details-view');

	}

	public function directory_details_ads_edit($id){
		$directory_edit=$this->Advertisement_model->directory_details_edit($id);
		$directory_edits=array(
			'directory_details_edit'=>$directory_edit
		);
		$this->load->view('admin-directory-details-ads-edit',$directory_edits);

	}

	public function directory_details_update(){
		$directory_title=$this->input->post('directorytitle');
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/directory-details-ads',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("directoryfile")){
			$ty=array(
			'title'=>$directory_title		
		);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'title'=>$directory_title,						
			'image'=>$gs
		);		
		}
		$this->Advertisement_model->directory_details_ads_update($ty,$id);
	redirect(base_url().'admin-directory-details-view');


	}


	



	


	



	



	

	


	




	



}
