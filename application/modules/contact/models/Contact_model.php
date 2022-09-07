<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function conatctdb($ty){
		$this->db->insert('contactusdb',$ty);
	}

	public function contactview(){
		$contact_view=$this->db->get('contactusdb');
		return $contact_views = $contact_view->result();

	}

		public function Contact_del($id){
		$this->db->where("id='$id'");
		$this->db->delete('contactusdb');

	}

		public function contact_edit($id){
		$this->db->where("id='$id'");
		$contactedit=$this->db->get('contactusdb');
		return $contactedits=$contactedit->result();

	}


	public function conatctupd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('contactusdb',$ty);

	}

	public function contact_form($ty){

		$this->db->insert('contact_form',$ty);
	}
	public function contact_fatch(){	    	
		$contact=$this->db->get('contact_form');
		$this->db->order_by('id','desc');
		return $contacts=$contact->result();
	}
	public function contact_from_del($id){
		$this->db->where("id='$id'");
		$this->db->delete('contact_form');

	}

	
}
