<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function adminlog($email,$pass){

    $this->db->where("email_id='$email' AND password='$pass'");
    $adm=$this->db->get('login_db');
    return $jiu=$adm->result();


	}

	
}
