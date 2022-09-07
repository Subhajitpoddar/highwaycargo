<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy_model extends CI_Model {

	public function policy_db($ty){
		$this->db->insert('policy_db',$ty);
	}

	public function policy_view(){
		$policy_view=$this->db->get('policy_db');
		return $policy_views =$policy_view->result();

	}

		public function Contact_del($id){
		$this->db->where("id='$id'");
		$this->db->delete('contactusdb');

	}

		public function policy_edit($id){
		$this->db->where("id='$id'");
		$policyedit=$this->db->get('policy_db');
		return $policyedits=$policyedit->result();

	}


	public function policyupd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('policy_db',$ty);

	}


/*disclaimer model start*/


public function disclaimer_db($ty){
		$this->db->insert('disclaimer',$ty);
	}

	public function disclaimer_view(){
		$disclaimer_view=$this->db->get('disclaimer');
		return $disclaimer_views =$disclaimer_view->result();

	}

	// 	public function Contact_del($id){
	// 	$this->db->where("id='$id'");
	// 	$this->db->delete('contactusdb');

	// }

		public function disclaimer_edit($id){
		$this->db->where("id='$id'");
		$disclaimer_edit=$this->db->get('disclaimer');
		return $disclaimer_edits=$disclaimer_edit->result();

	}


	public function disclaimer_upd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('disclaimer',$ty);

	}

	/* Copy right model start*/

	public function copyright_db($ty){
		$this->db->insert('copy_right',$ty);
	}

	public function copyright_view(){
		$copy_right_view=$this->db->get('copy_right');
		return $copy_right_views =$copy_right_view->result();

	}

	// // 	public function Contact_del($id){
	// // 	$this->db->where("id='$id'");
	// // 	$this->db->delete('contactusdb');

	// // }

		public function copy_edit($id){
		$this->db->where("id='$id'");
		$copy_edit=$this->db->get('copy_right');
		return $copy_edits=$copy_edit->result();

	}


	public function copyright_upd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('copy_right',$ty);

	}
/* Copy right model end*/

/* How it works model start*/

public function howitwork_db($ty){
		$this->db->insert('howitwork_db',$ty);
	}

	public function howitwork_view(){
		$howitwork_view=$this->db->get('howitwork_db');
		return $howitwork_views =$howitwork_view->result();

	}

	// // // 	public function Contact_del($id){
	// // // 	$this->db->where("id='$id'");
	// // // 	$this->db->delete('contactusdb');

	// // // }

		public function howitwork_edit($id){
		$this->db->where("id='$id'");
		$howitwork_edit=$this->db->get('howitwork_db');
		return $howitwork_edits=$howitwork_edit->result();
	}


	public function howitwork_upd($ty,$id){
		$this->db->where("id='$id'");
		$this->db->update('howitwork_db',$ty);

	}	
}
