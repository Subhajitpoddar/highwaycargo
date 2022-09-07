<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Blog_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$blogs=$this->Blog_model->blogview();
		$blog=array(
			'service_rs'=>$service,
			'blog_rs'=>$blogs
		);
		$this->load->view('common/frontend/include/all-header',$blog);
		$this->load->view('index',$blog);
		$this->load->view('common/frontend/include/all-footer',$blog);
	}
	public function blog_details($id)
	{
		$service=$this->Service_model->servicefatch();
		$blog_details=$this->Blog_model->blog_fatch($id);
		$blog_view=$this->Blog_model->blogview();
		$details=array(
			'service_rs'=>$service,
			'blog_fatch_rs'=>$blog_details,
			'blog_rs_view'=>$blog_view
		);
		$this->load->view('common/frontend/include/all-header',$details);
		$this->load->view('blog-details',$details);
		$this->load->view('common/frontend/include/all-footer',$details);
	}

	public function blog_add(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('blog-add');

	}


	public function blog_db(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$eventtil=$this->input->post('eventstil');
		$eventdes=$this->input->post('eventsdes');
		$directorynumber=$this->input->post('directorynumber');		
		$eventsshortdes=$this->input->post('eventsshortdes');
		$g=array(
			'upload_path'=>'./assets/backend/img/blogimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("eventsfile")){
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
			'blog_name'=>$eventtil,
			'blog_description'=>$eventdes,
			'blog_short_des'=>$eventsshortdes,			
			'blog_img'=>$gs
		);
		$this->Blog_model->blogdb($ty);
	redirect(base_url().'admin-blog-view');
		}
}

public function blog_view(){
	$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$gyr=$this->Blog_model->blogview();
		$gy=array(
			'row'=>$gyr
		);
		$this->load->view('blog-view',$gy);

	}

	public function blog_del($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Blog_model->blogdel($id);
		redirect(base_url().'admin-blog-view');

	}


	public function blog_edit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$eventview=$this->Blog_model->blogedit($id);
		$ev=array(
			'row'=>$eventview
		);
		$this->load->view('blog-edit',$ev);
}


	public function blog_upd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}

	$eventtil=$this->input->post('eventstil');
		$eventdes=$this->input->post('eventsdes');
		$eventsshortdes=$this->input->post('eventsshortdes');		
		$id=$this->input->post('id');
		$g=array(
			'upload_path'=>'./assets/backend/img/blogimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100

		);

		$this->load->library("upload",$g);

		if(!$this->upload->do_upload("eventsfile")){
			$ty=array(
			'blog_name'=>$eventtil,
			'blog_description'=>$eventdes,
			'blog_short_des'=>$eventsshortdes
		);			
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'blog_name'=>$eventtil,
			'blog_description'=>$eventdes,
			'blog_short_des'=>$eventsshortdes,			
			'blog_img'=>$gs
		);
		
}
		$this->Blog_model->blogupd($ty,$id);
	redirect(base_url().'admin-blog-view');

}
}
