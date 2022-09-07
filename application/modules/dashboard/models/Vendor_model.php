<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model {

	public function vendor_fatch(){
		$this->db->where("user_type='vendor'");
		$vendor_details=$this->db->get('vendor_registers_db');
		return $vendors=$vendor_details->result();
	}

	public function vehicles_db($w){
		$this->db->insert('vehicle_db',$w);
	}

	public function vehicle_fatch($uid){
		$this->db->where("vendor_login_id='$uid'");
		$this->db->order_by('id', 'desc');
		$vehicles=$this->db->get('vehicle_db');
		return $vehicle=$vehicles->result();
	}

	public function vehicle_edit($id){
		$this->db->where("id='$id'");
		$vehicle=$this->db->get('vehicle_db');
		return $vehicles=$vehicle->result();

	}

	public function vehicles_update($w,$id){
		$this->db->where("id='$id'");
		$this->db->update('vehicle_db',$w);
	}

	public function vendor_full_details($id){
		$this->db->where("id='$id'");
		$details=$this->db->get('vendor_registers_db');
		return $detail=$details->result();

	}

	public function vehicle_list($id){
		$this->db->where("vendor_login_id='$id'");
		$vehicle=$this->db->get('vehicle_db');
		return $vehicle_lists=$vehicle->result();

	}

	public function vehicle_list_export(){

	 $response = array();
	 $this->db->select('id,vehicle_name,vendor_body,vehicle_number,aadhaarfile,driverfile');
      $q = $this->db->get('vehicle_db');
      $response = $q->result_array();
      return $response;
		}

		public function vendor_list_export(){

	 $response = array();
	 $this->db->select('id,user_type,first_name,last_name,email,phone,company_name,city,street,state,postal_code,pan_number,pan_file,aahaar_number,aadhaar_file,password_quote');
	  $this->db->where("user_type='vendor'");
      $q = $this->db->get('vendor_registers_db');
      $response = $q->result_array();
      return $response;
		}

		public function update_vehicle($id){
			$this->db->set('status', '1', FALSE);
			$where=array('id' => $id);
			$this->db->where($where);
			$this->db->update('vehicle_db');

		}


			public function update_vendor($id){
			$this->db->set('status', '1', FALSE);
			$where=array('id' => $id);
			$this->db->where($where);
			$this->db->update('vendor_registers_db');

		}


		public function advertisrment(){
			$advs=$this->db->get('vendor_advertisement');
			return $adves=$advs->result();

		}

		public function admin_vendor_delete($id){
			$this->db->where("id='$id'");
			$this->db->delete('vendor_registers_db');

		}

		public function admin_vendor_edit($id){
			$this->db->where("id='$id'");
			$vendor_edit=$this->db->get('vendor_registers_db');
			return $vendor=$vendor_edit->result();


		}

		public function vendor_update($w,$id){
			$this->db->where("id='$id'");
			$this->db->update('vendor_registers_db',$w);

		}

		public function profile_data_upd($ty,$vendor_id){
			$this->db->where("id='$vendor_id'");
			$this->db->update('vendor_registers_db',$ty);			
		}

		public function vendor_profile(){
			$profiles=$this->db->get("vendor_registers_db");
			return $profile=$profiles->result();

		}

		public function vehicles_details(){
			$vehicle=$this->db->get('vehicle_db');
			return $vehicle_details=$vehicle->result();

		}

		public function all_vehicle_list_export(){

			 $response = array();
	 $this->db->select('id,vehicle_name,vendor_body,vehicle_number');
      $q = $this->db->get('vehicle_db');
      $response = $q->result_array();
      return $response;

		}

		public function vendor_details(){
			$this->db->where("user_type='vendor'");
			$vendor_list=$this->db->get('vendor_registers_db');
			return $vendor=$vendor_list->result();

		}

		public function body_types(){
			$vehicle=$this->db->get('body_type');
			return $vehicle_fatch=$vehicle->result();

		}

		public function vehicle_delete($id){
			$this->db->where("id='$id'");
			$this->db->delete('vehicle_db');

			

		}










	// 		$this->db->where("vendor_login_id='$id'");
	// 		$query = $this->db->get('vehicle_db');
	// 		return $querys=$query->result();
	// 	}

	
}
