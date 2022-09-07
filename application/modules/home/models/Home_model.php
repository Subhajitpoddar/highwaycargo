<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function banner($bh){
		$this->db->insert('banner',$bh);

	}

	public function bannerview(){
		$ghuy=$this->db->get('banner');
		return $view=$ghuy->result();

	}
	public function baneerdel($id){
		$this->db->where("id='$id'");
		$iu=$this->db->get('banner');
		$jiu=$iu->result();
		foreach($jiu as $hy){
			unlink('./bannerimg/'.$hy->bnrimg);
		}
        $this->db->where("id='$id'");
		$this->db->delete('banner');

	}

	public function banneredit($id){
		$this->db->where("id='$id'");
		$jiy=$this->db->get('banner');
		return $tyu=$jiy->result();

	}
	public function bannerupdd($ki,$id){
		$this->db->where("id='$id'");
		$this->db->update("banner",$ki);
	}

	public function banner_fatch(){
		$banner=$this->db->get('banner');
		return $banners=$banner->result();		
	}

	public function directory_fatch(){
	  $this->db->where("status='1'");
	  $directory=$this->db->get('vendor_registers_db');
	  return $directorys=$directory->result();		
	}

	public function header_name(){
		$header_name=$this->db->get('vendor_registers_db');
		return $header_names=$header_name->result();

	}

	public function pop_up_fatch(){
		$popup=$this->db->get('pop_up_data');
		return $popup_view=$popup->result();
	}

	public function announcement_fatch(){
		$announcement=$this->db->get('announcement');
		return $announcements=$announcement->result();

	}
	public function aboutus_fatch(){
		$about=$this->db->get('aboutus');
		return $abouts=$about->result();

	}
	public function mission_fatch(){
		$mission=$this->db->get('mission');
		return $missions=$mission->result();

	}
	public function customer_requirement(){
		$this->db->where("status='1'");
		$this->db->order_by('id','desc');
		$customer=$this->db->get('customer_post_add');
		return $customers=$customer->result();

	}
	public function contact_number($id){
		$this->db->where("id='$id'");
		$contact=$this->db->get('customer_post_add');
		return $contacts=$contact->result();


	}




	
}
