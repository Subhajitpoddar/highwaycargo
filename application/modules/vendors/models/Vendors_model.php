<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors_model extends CI_Model {

	public function vendor_register($w){
		$this->db->insert('vendor_registers_db',$w);
	}

	public function vendor_profile_edit($id){
			$this->db->where("id='$id'");
			$vendor=$this->db->get('vendor_registers_db');
			return $vendor_rs=$vendor->result();

		}

		public function vendor_update($w,$id){
			$this->db->where("id='$id'");
			$this->db->update('vendor_registers_db',$w);

		}

		public function state_fatch(){
			$state=$this->db->get('state');
			return $states=$state->result();

		}
		public function vendor_support($data){
			$this->db->insert('vendor_support',$data);

		}
		public function vendor_support_fatch(){
			$vendor_list=$this->db->get('vendor_support');
			return $vendor=$vendor_list->result();

		}
		public function support_del($id){
			$this->db->where("id='$id'");
			$this->db->delete('vendor_support');

		}

		public function vendor_support_export(){
			 $response = array();
	 $this->db->select('id,select_issue,description');
      $q = $this->db->get('vendor_support');
      $response = $q->result_array();
      return $response;
		}

		public function change_password($id){
			$this->db->where("id='$id'");
			$change=$this->db->get('vendor_registers_db');
			return $change_pass=$change->result();

		}
		public function vendor_password_upd($vendor,$id){
			$this->db->where("id='$id'");
			$this->db->update('vendor_registers_db',$vendor);
		}

	
}
