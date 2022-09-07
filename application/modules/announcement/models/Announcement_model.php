<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement_model extends CI_Model {

	public function announcementdb($ty){
		$this->db->insert('announcement',$ty);
	}

	public function announcement_fatch(){
		$announcement=$this->db->get('announcement');
		return $announcements=$announcement->result();
	}
	
	public function announcementdel($id){
		$this->db->where("id='$id'");
		$this->db->delete('announcement');

	}
	public function announcement_edit($id){
		$this->db->where("id='$id'");
		$announcement=$this->db->get('announcement');
		return $announcements=$announcement->result();

	}

	public function announcement_update($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('announcement',$ty);

	}

	
}
