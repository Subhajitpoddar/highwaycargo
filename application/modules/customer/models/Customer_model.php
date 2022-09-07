<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function customer_register($data){
		$this->db->insert('vendor_registers_db',$data);
	}

	public function customer_data_fatch(){
		$this->db->where("user_type='user'");
		$customer=$this->db->get('vendor_registers_db');
		return $customers=$customer->result();

	}

	public function customer_list_export(){
	 $response = array();
	 $this->db->select('id,user_type,first_name,last_name,email,phone,city,street,state,postal_code,password_quote');
	  $this->db->where("user_type='user'");
      $q = $this->db->get('vendor_registers_db');
      $response = $q->result_array();
      return $response;
		}

		public function customer_profile_edit($id){
			$this->db->where("id='$id'");
			$customers=$this->db->get('vendor_registers_db');
			return $customer=$customers->result();

		}

		public function customer_profile_update($id,$data){
			$this->db->where("id='$id'");
			$this->db->update('vendor_registers_db',$data);
		}

		public function customer_support($data){
			$this->db->insert('support',$data);
		}

		public function support_view(){
			$supports=$this->db->get('support');
			return $support=$supports->result();
		}

		public function support_del($id){
			$this->db->where("id='$id'");
			$this->db->delete('support');

		}
		public function customer_requirement(){
			$customer=$this->db->get('customer_post_add');
			return $customers=$customer->result();

		}

		public function update_requirement($id){
				$this->db->set('status', '1', FALSE);
			$where=array('id' => $id);
			$this->db->where($where);
			$this->db->update('customer_post_add');

		}
		public function change_password($id){
			$this->db->where("id='$id'");
			$change_pass=$this->db->get('vendor_registers_db');
			return $changes=$change_pass->result();


		}
		public function password_update($id,$data){
			$this->db->where("id='$id'");
			$this->db->update('vendor_registers_db',$data);


		}

		public function admin_customer_delete($id){
			$this->db->where("id='$id'");
			$this->db->delete('vendor_registers_db');
		}
		

	
}
