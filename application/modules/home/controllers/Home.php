<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Home_model');
		$this->load->model('dashboard/Vendor_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$banner=$this->Home_model->banner_fatch();
		$service=$this->Service_model->servicefatch();
		$directory=$this->Home_model->directory_fatch();
		$header_name=$this->Home_model->header_name();
		$popup=$this->Home_model->pop_up_fatch();
		$announcement=$this->Home_model->announcement_fatch();
		$about_us=$this->Home_model->aboutus_fatch();
		$mission=$this->Home_model->mission_fatch();
		$customer_requirement=$this->Home_model->customer_requirement();
		$result=array(
			'banner_rs'=>$banner,
			'service_rs'=>$service,
			'directory'=>$directory,
			'popup_fatch'=>$popup,
			'announcement'=>$announcement,
			'about_us'=>$about_us,
			'mission'=>$mission,
			'customer_post'=>$customer_requirement,
			'header_names'=>$header_name
		);
		$this->load->view('common/frontend/include/all-header',$result);
		$this->load->view('index',$result);
		$this->load->view('common/frontend/include/all-footer',$result);
	}

	public function add_banner(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('add-banner');
	}

	public function bannerdb(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$bntitle=$this->input->post('bannertil');		
		$bndes=$this->input->post('bannerdes');

		$g=array(
			'upload_path'=>'./assets/backend/img/bannerimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100

		);

		$this->load->library("upload",$g);

		if(!$this->upload->do_upload("bannerfile")){
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
			'bnrtil'=>$bntitle,			
			'bannerdes'=>$bndes,
			'bnrimg'=>$gs

		);
		$this->Home_model->banner($ty);
		// redirect(base_url().'admin-bannerview');

		}
		

	}


	public function bannerview(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$bnrvw=$this->Home_model->bannerview();
		$guy=array(
			'row'=>$bnrvw

		);
		$this->load->view('bannerview',$guy);
	}
	public function bannerdel($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Home_model->baneerdel($id);
		redirect(base_url().'admin-bannerview');
	}

	public function banneredit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$kou=$this->Home_model->banneredit($id);
		$se=array(
			'row'=>$kou
 );
        $this->load->view('banner_edit',$se);

	}

	public function bannerupd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}

		$bntitle=$this->input->post('bannertil');		
		$bndes=$this->input->post('bannerdes');
		$id=$this->input->post('id');

		$g=array(
			'upload_path'=>'./assets/backend/img/bannerimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>4000

		);

		$this->load->library("upload",$g);

		if(!$this->upload->do_upload("bannerfile")){

			$ty=array(
			'bnrtil'=>$bntitle,			
			'bannerdes'=>$bndes
		);
			
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'bnrtil'=>$bntitle,			
			'bannerdes'=>$bndes,
			'bnrimg'=>$gs
		);		

		}
		$this->Home_model->bannerupdd($ty,$id);
		redirect(base_url().'admin-bannerview');

	}

	public function contact_number($id){

	$contact_number=$this->Home_model->contact_number($id);
	$advertisement=$this->Vendor_model->advertisrment();
	$service=$this->Service_model->servicefatch();	
	$number=array(
		'advertisrment'=>$advertisement,
		'service_rs'=>$service,
		'contact_number'=>$contact_number
	);	

		$this->load->view('common/frontend/include/all-header',$number);
		$this->load->view('customer-number',$number);
		$this->load->view('common/frontend/include/all-footer',$number);	 


	}
}
