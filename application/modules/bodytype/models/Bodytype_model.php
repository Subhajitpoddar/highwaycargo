<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodytype_model extends CI_Model {

	public function body_type_db($ty){
		$this->db->insert('body_type',$ty);

	}

	public function body_type_view(){
		$body_view=$this->db->get('body_type');
		return $body=$body_view->result();		

	}

	public function body_delete($id){		

		$this->db->where("id='$id'");		
		$this->db->delete('body_type');	

	}

	public function body_type_edit($id){
		$this->db->where("id='$id'");
		$body_type=$this->db->get('body_type');
		return $body_types=$body_type->result();
	}

	public function body_type_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('body_type',$ty);
	}

	



	

	
}
