<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popup_model extends CI_Model {

	public function pop_up_data($ty){
		$this->db->insert('pop_up_data',$ty);
	}

	public function pop_up_fatch(){
		$pop=$this->db->get('pop_up_data');
		return $pops=$pop->result();
	}
	
	// // public function aboutusdel($id){
	// // 	$this->db->where("id='$id'");
	// // 	$this->db->delete('aboutus');

	// // }
	public function popup_edit($id){
		$this->db->where("id='$id'");
		$pop_edit=$this->db->get('pop_up_data');
		return $pop_edits=$pop_edit->result();

	}

	public function pop_up_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('pop_up_data',$ty);

	}

	
}
