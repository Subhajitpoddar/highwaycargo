<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$advertisement=$this->Service_model->service_ads();
		$services=array(
			'service_rs'=>$service,
			'service_ads'=>$advertisement
		);
		$this->load->view('common/frontend/include/all-header',$services);
		$this->load->view('index',$services);
		$this->load->view('common/frontend/include/all-footer',$services);
	}

	public function details($seotitle)
	{
		$service_details=$this->Service_model->front_service_details($seotitle);
		$service=$this->Service_model->servicefatch();
		$service_detail=array(
			'service_detail_rs'=>$service_details,
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$service_detail);
		$this->load->view('service-details',$service_detail);
		$this->load->view('common/frontend/include/all-footer',$service_detail);
	}


	public function servicepg(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->load->view('admin_service_add');
	}
	public function servicedb(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
        $svname=$this->input->post('servicetil');
        $seotil=$this->input->post('seotil');
		$svdes=$this->input->post('servicedes');
		$svshortdes=$this->input->post('serviceshortdes');

		$g=array(
			'upload_path'=>'./assets/backend/img/serviceimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100

		);

		$this->load->library("upload",$g);

		if(!$this->upload->do_upload("svfile")){
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
			'svname'=>$svname,
			'seotitle'=>$seotil,
			'svdescrb'=>$svdes,
			'svshortdes'=>$svshortdes,
			'svimg'=>$gs

		);
		$this->Service_model->servicedb($ty);
	redirect(base_url().'admin-serviceview');

		}
}

	public function serviceview(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$nju=$this->Service_model->servicefatch();
		$jiu=array(
			'row'=>$nju
         );
		$this->load->view('admin-service-view',$jiu);

	}

	public function servicedel($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$this->Service_model->servicedel($id);
		redirect(base_url().'admin-serviceview');

	}

	public function serviceedit($id){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}
		$sereit=$this->Service_model->serviceedit($id);
		$r=array(
			'row'=>$sereit
		);
		$this->load->view('admin-service-edit',$r);

	}

	public function serviceupd(){
		$uid=$this->session->userdata('uid');
		if(!isset($uid)){
			redirect(base_url().'admin');
		}

		  $svname=$this->input->post('servicetil');
		  $seotil=$this->input->post('seotil');
		$svdes=$this->input->post('servicedes');
		$svshortdes=$this->input->post('serviceshortdes');
		$id=$this->input->post('id');

		$g=array(
			'upload_path'=>'./assets/backend/img/serviceimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>4000

		);

		$this->load->library("upload",$g);

		if(!$this->upload->do_upload("svfile")){

			$ty=array(
			'svname'=>$svname,
			'seotitle'=>$seotil,
			'svdescrb'=>$svdes,
			'svshortdes'=>$svshortdes

		);
			
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(
			'svname'=>$svname,
			'seotitle'=>$seotil,
			'svdescrb'=>$svdes,
			'svshortdes'=>$svshortdes,
			'svimg'=>$gs

		);
		

		}
		$this->Service_model->serviceupd($ty,$id);
	redirect(base_url().'admin-serviceview');

	}
}
