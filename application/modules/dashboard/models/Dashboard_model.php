<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function advertisrment(){
		$advertisrment=$this->db->get('customer_advertisement');
		return $ads=$advertisrment->result();


	}

	public function customer_post_data($ty){
		$this->db->insert('customer_post_add',$ty);
	}

	public function customer_post_add($customer_id){
		$this->db->where("customer_id='$customer_id'");
		$this->db->order_by('id', 'desc');
		$customer=$this->db->get('customer_post_add');
		return $customers=$customer->result();
	}
	public function customer_edit($id){
		$this->db->where("id='$id'");
		$customer_post=$this->db->get('customer_post_add');
		return $customer_posts=$customer_post->result();

	}
	public function customer_post_data_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('customer_post_add',$ty);

	}
	public function vendor_name(){
		$vendor=$this->db->get('customer_details_for_vendor_deasboard');
		return $vendor_name=$vendor->result();


	}


	
}
