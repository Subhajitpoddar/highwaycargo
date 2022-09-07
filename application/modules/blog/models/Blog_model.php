<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function blogdb($ty){
		$this->db->insert('blog-db',$ty);

	}
	public function blogview(){
		$kou=$this->db->get('blog-db');
		return $gtr=$kou->result();
	}

	public function blogdel($id){		
		$this->db->where("id='$id'");
		$this->db->delete('blog-db');
	}

	public function blogedit($id){
  $this->db->where("id='$id'");
  $hty=$this->db->get('blog-db');
  return $hty=$hty->result();
	}

	public function blogupd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('blog-db',$ty);

	}

	public function blog_fatch($id){
		$this->db->where("id='$id'");
		$blogs=$this->db->get('blog-db');
		return $blog=$blogs->result();

	}

	
}
