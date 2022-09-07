<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorys_model extends CI_Model {

	public function eventsdb($ty){
		$this->db->insert('eventsdb',$ty);

	}
	public function directory(){
		$this->db->where("status='1'");
		$kou=$this->db->get('vendor_registers_db');
		return $gtr=$kou->result();
	}

	public function eventsdel($id){
		$iu=$this->db->get('eventsdb');
		$jiu=$iu->result();
		foreach($jiu as $hy){
			unlink('./assets/backend/img/eventimg/'.$hy->eventimg);
		}


		$this->db->where("id='$id'");
		$this->db->delete('eventsdb');

	}

	public function eventsedit($id){
  $this->db->where("id='$id'");
  $hty=$this->db->get('eventsdb');
  return $hty=$hty->result();
	}

	public function eventsupd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('eventsdb',$ty);

	}
	public function directory_detail($id){
		$this->db->where("id='$id'");
		$directorys=$this->db->get('vendor_registers_db');
		return $directory=$directorys->result();

	}

	public function searchkeyword($key){
		$this->db->like('postal_code',$key);
		$query=$this->db->get('vendor_registers_db');		
		return $querys=$query->result();

	}
	public function srch(){
		$srch=$this->input->post("srch");
		if(isset($srch)){
			$this->db->where("postal_code LIKE '$srch%'");
		}
		$query=$this->db->get("vendor_registers_db");
		return $rs=$query->result();
	}

	public function state(){
		$state=$this->db->get('state');
		return $states=$state->result();
	}
	public function data_using($state_id){
		$this->db->where("state='$state_id' AND user_type='vendor'");
		$states=$this->db->get("vendor_registers_db");
		return $fatch=$states->result();

	}

	public function search_pin($srch_pincode){
		$this->db->where("postal_code='$srch_pincode' AND user_type='vendor'");
		$pin=$this->db->get("vendor_registers_db");
		return $fatch_pin=$pin->result();

	}
	public function quick_search($quick_search){
		$this->db->where("company_name='$quick_search' AND user_type='vendor'");
		$quick=$this->db->get("vendor_registers_db");
		return $fatch_quick=$quick->result();

	}

	public function body_type(){
		$body_types=$this->db->get('body_type');
		return $body=$body_types->result();

	}

	public function body_type_filter($title){
		$this->db->where("vendor_body='$title'");						
		$body_filters=$this->db->get("vehicle_db");
		 return $body=$body_filters->result();		

	}
	public function service_fatch(){
		$services=$this->db->get('servicetab');
		return $service=$services->result();
	}

	public function comment_data($comments){
		$this->db->insert('comments',$comments);
	}
	public function comments_fatch($id){
		$this->db->where("directory_id='$id'");
		$this->db->order_by('id','desc');
		$comments=$this->db->get('comments');
		return $comment=$comments->result();

	}
	public function directory_side_ads(){
		$directory=$this->db->get('directory-advirtiesment');
		return $directorys=$directory->result();

	}
	public function directory_top_side_ads(){
		$directory=$this->db->get('directory_top_ads');
		return $directorys=$directory->result();

	}

	public function directory_side_ads_image(){
		$directorys=$this->db->get('directory_details_ads');
		return $directory=$directorys->result();

	}
	

	
	
}
