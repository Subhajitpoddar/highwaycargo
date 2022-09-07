<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement_model extends CI_Model {

	public function advertisementdata($gy){
		$this->db->insert('vendor_advertisement',$gy);
	}

	public function advertisement_view(){
		$advertisement=$this->db->get('vendor_advertisement');
		return $advertisements=$advertisement->result();
	}
	
	// public function aboutusdel($id){
	// 	$this->db->where("id='$id'");
	// 	$this->db->delete('aboutus');

	// }
	public function advertisement_edit($id){
		$this->db->where("id='$id'");
		$advertisement_edit=$this->db->get('vendor_advertisement');
		return $advertisement_edits=$advertisement_edit->result();

	}

	public function advertisement_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('vendor_advertisement',$ty);

	}
	public function customer_ads_data($ty){
			$this->db->insert('customer_advertisement',$ty);

	}

	public function customer_ads_view(){
		$ads_view=$this->db->get('customer_advertisement');
		return $ads=$ads_view->result();

	}

	public function customer_ads_edit($id){
		$this->db->where("id='$id'");
		$customers=$this->db->get('customer_advertisement');
		return $customer=$customers->result();

	}
	public function customer_ads_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('customer_advertisement',$ty);
	}

	public function serviceadvertisementdata($ty){
		$this->db->insert('service_advertisement',$ty);
	}

	public function service_advertisement_view(){
		$advertisement=$this->db->get('service_advertisement');
		return $advertisements=$advertisement->result();
	}

	public function service_advertisement_edit($id){
		$this->db->where("id='$id'");
		$advertisement_edit=$this->db->get('service_advertisement');
		return $advertisement_edits=$advertisement_edit->result();

	}

	public function service_advertisement_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('service_advertisement',$ty);

	}
	public function directory_advertisement_insert($ty){
		$this->db->insert('directory-advirtiesment',$ty);
	}
	public function directory_view(){
		$directory=$this->db->get('directory-advirtiesment');
		return $directorys=$directory->result();

	}
	public function directory_delete($id){
		$this->db->where("id='$id'");
		$this->db->delete('directory-advirtiesment');

	}
	public function directory_edit($id){
		$this->db->where("id='$id'");
		$directory=$this->db->get('directory-advirtiesment');
		return $directorys=$directory->result();

	}
	public function directory_advertisement_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('directory-advirtiesment',$ty);

	}
	public function directory_top_advertisement_insert($ty){
		$this->db->insert('directory_top_ads',$ty);

	}
	public function directory_top_view(){
		$directory=$this->db->get('directory_top_ads');
		return $directorys=$directory->result();

	}

	public function directory_top_delete($id){
		$this->db->where("id='$id'");
		$this->db->delete('directory_top_ads');

	}

	public function directory_top_edit($id){
		$this->db->where("id='$id'");
		$directory=$this->db->get('directory_top_ads');
		return $directorys=$directory->result();

	}

	public function directory_advertisement_top_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('directory_top_ads',$ty);

	}

	public function directory_details_advertisement_insert($ty){
		$this->db->insert('directory_details_ads',$ty);

	}

	public function directory_details_views(){
		$directory=$this->db->get('directory_details_ads');
		return $directorys=$directory->result();

	}

	public function directory_details_delete($id){
		$this->db->where("id='$id'");
		$this->db->delete('directory_details_ads');

	}

	public function directory_details_edit($id){
		$this->db->where("id='$id'");
		$directory=$this->db->get('directory_details_ads');
		return $directorys=$directory->result();

	}

	public function directory_details_ads_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('directory_details_ads',$ty);

	}

	

	

	

	

	

	


	
}
