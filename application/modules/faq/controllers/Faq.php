<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Faq_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
		$faq=array(
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$faq);
		$this->load->view('index',$faq);
		$this->load->view('common/frontend/include/all-footer',$faq);
	}
	public function terms()
	{
		$service=$this->Service_model->servicefatch();
		$term=array(
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$term);
		$this->load->view('terms',$term);
		$this->load->view('common/frontend/include/all-footer',$term);
	}
}
