<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model {

	public function servicedb($ty){
		$this->db->insert('servicetab',$ty);

	}
	public function servicefatch(){
		$ftc=$this->db->get('servicetab');
		return $gyp=$ftc->result();
	}

	public function servicedel($id){
		$this->db->where("id='$id'");
		$this->db->delete('servicetab');

	}

	public function serviceedit($id){
		$this->db->where("id='$id'");
		$huy=$this->db->get('servicetab');
		return $htr=$huy->result();


	}
	public function serviceupd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('servicetab',$ty);

	}
	public function front_service_details($seotitle){
		$this->db->where("seotitle='$seotitle'");
		$front_service=$this->db->get('servicetab');
		return $front_services=$front_service->result();

	}

	public function service_ads(){
		$ftc=$this->db->get('service_advertisement');
		return $gyp=$ftc->result();
	}


	
}
