<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function logindb_mod($user_type,$email,$password){
		$this->db->where("user_type='$user_type' AND email='$email' AND password_quote='$password'");
		$login=$this->db->get('vendor_registers_db');
		return $login_process=$login->result();
	}

	 public function ForgotPassword($email)
 {
        $this->db->select('email');
        $this->db->from('vendor_registers_db'); 
        $this->db->where('email', $email); 
        $query=$this->db->get();
        return $query->row_array();
 }

//   public function sendpassword($data)
// {
//         $email = $data['email'];
//         $query1=$this->db->query("SELECT *  from vendor_registers_db where email = '".$email."' ");
//         $row=$query1->result_array();
//         if ($query1->num_rows()>0)
      
// {
//         $passwordplain = "";
//         $passwordplain  = rand(999999999,9999999999);
//         $newpass['password_quote'] = md5($passwordplain);
//         $this->db->where('email', $email);
//         $this->db->update('vendor_registers_db', $newpass); 
//         $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
//         $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
//         $mail_message.='<br>Please Update your password.';
//         $mail_message.='<br>Thanks & Regards';
//         $mail_message.='<br>Your company name';        
//         date_default_timezone_set('Etc/UTC');
//         require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
//         $mail = new PHPMailer;
//         $mail->isSMTP();
//         $mail->SMTPSecure = "tls"; 
//         $mail->Debugoutput = 'html';
//         $mail->Host = "yooursmtp";
//         $mail->Port = 587;
//         $mail->SMTPAuth = true;   
//         $mail->Username = "your@email.com";    
//         $mail->Password = "password";
//         $mail->setFrom('admin@site', 'admin');
//         $mail->IsHTML(true);
//         $mail->addAddress($email);
//         $mail->Subject = 'OTP from company';
//         $mail->Body    = $mail_message;
//         $mail->AltBody = $mail_message;
// if (!$mail->send()) {
//      $this->session->set_flashdata('msg','Failed to send password, please try again!');
// } else {
//    $this->session->set_flashdata('msg','Password sent to your email!');
// }
//   redirect(base_url().'user/Login','refresh');        
// }
// else
// {  
//  $this->session->set_flashdata('msg','Email not found try again!');
//  redirect(base_url().'user/Login','refresh');
// }
// }

	
}
