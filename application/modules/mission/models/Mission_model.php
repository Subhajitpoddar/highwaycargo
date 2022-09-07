<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission_model extends CI_Model {

	public function mission_db($ty){
		$this->db->insert('mission',$ty);
	}

	public function mission_fatch(){
		$mission=$this->db->get('mission');
		return $missions=$mission->result();
	}
	
	// public function announcementdel($id){
	// 	$this->db->where("id='$id'");
	// 	$this->db->delete('announcement');

	// }
	public function mission_edit($id){
		$this->db->where("id='$id'");
		$missionedit=$this->db->get('mission');
		return $missionedits=$missionedit->result();

	}

	public function mission_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('mission',$ty);

	}

	
}
