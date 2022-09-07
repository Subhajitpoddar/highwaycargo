<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Vendors_model');
		$this->load->model('service/Service_model');
	}

	public function index()
	{
		$service=$this->Service_model->servicefatch();
    $state=$this->Vendors_model->state_fatch();
		$vendor=array(
			'service_rs'=>$service,
      'states'=>$state
		);
		$this->load->view('common/frontend/include/all-header',$vendor);
		$this->load->view('index',$vendor);
		$this->load->view('common/frontend/include/all-footer',$vendor);
	}



	public function vendor_db(){
		$firstname_quote=$this->input->post('firstname');
		$vendor=$this->input->post('user_type');
		$lastname_quote=$this->input->post('lastname');
		$email_quote=$this->input->post('email');
		$phone_quote=$this->input->post('phone');
		$company_name=$this->input->post('company_name');
		$city_quote=$this->input->post('city');
		$street_quote=$this->input->post('street');
		$state_quote=$this->input->post('states');
		$postal_code_quote=$this->input->post('postal_code');
		$pan_number=$this->input->post('pan_number');
		$aahaar_number=$this->input->post('aahaar_number');
    $description=$this->input->post('description');
		$password_quote=$this->input->post('password_quote');
		$confirm_quote=$this->input->post('confirm_quote');
    $delivery_state=$this->input->post("state");
    $status=$this->input->post('status');
    $sub="";
    if(isset($delivery_state) && count($delivery_state)>0){
      $sub=implode(", ",$delivery_state);
    }

		// $check=password_hash($password_quote,PASSWORD_BCRYPT);
		  if($password_quote==$confirm_quote){
		  $confs=array(
      'upload_path'=>'./assets/backend/img/pancardimg',
      'allowed_types'=>'jpg|png|jpeg',
      'max_size'=>100
    );
    $this->load->library('upload',$confs);
    if(!$this->upload->do_upload("pan_file")){
      ?>
			<script>
				alert("No image found");
			</script>
			<?php
    }
    else{
      $fd=$this->upload->data();
      $fn=$fd['file_name'];
     
      $conf=array(
      'upload_path'=>'./assets/backend/img/pancardimg',
      'allowed_types'=>'jpg|png|jpeg',
      'max_size'=>100
    );
    $this->load->library('upload',$conf);
    if(!$this->upload->do_upload("aadhaar_file")){
     ?>
			<script>
				alert("No image found");
			</script>
			<?php
    }
    else{
      $fds=$this->upload->data();
      $fns=$fds['file_name'];
      $w=array(
        'first_name'=>$firstname_quote,
        'user_type'=>$vendor,
        'last_name'=>$lastname_quote,
         'email'=>$email_quote,
          'phone'=>$phone_quote,
           'company_name'=>$company_name,
           'city'=>$city_quote,
            'street'=>$street_quote,
             'state'=>$state_quote,
              'postal_code'=>$postal_code_quote,
              'delivery_state'=>$sub,
               'pan_number'=>$pan_number,
                'aahaar_number'=>$aahaar_number,
                'descriptions'=>$description,                         
               'password_quote'=>$password_quote,
               'status'=>$status,
                'pan_file'=>$fn,
                 'aadhaar_file'=>$fns
      );
      $this->Vendors_model->vendor_register($w);
       redirect(base_url().'login');
    }
}
    }
}


public function vendor_profile_edit($id){
		$vendor_profile_edit=$this->Vendors_model->vendor_profile_edit($id);
    $service=$this->Service_model->servicefatch();

		$vendor_edit=array(
			'vendor_edit'=>$vendor_profile_edit,
      'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$vendor_edit);
		$this->load->view('vendor-profile-edit',$vendor_edit);
		$this->load->view('common/frontend/include/all-footer',$vendor_edit);


	}

	public function vendor_profile_update(){
			$firstname_quote=$this->input->post('firstname');		
		$lastname_quote=$this->input->post('lastname');		
		$company_name=$this->input->post('company_name');	
		$id=$this->input->post("id");		
    $delivery_state=$this->input->post("state");
    $description=$this->input->post('description');
     $status=$this->input->post('status');
    $sub="";
    if(isset($delivery_state) && count($delivery_state)>0){
      $sub=implode(", ",$delivery_state);
    }

		// $check=password_hash($password_quote,PASSWORD_BCRYPT);		 
		  $confs=array(
      'upload_path'=>'./assets/backend/img/pancardimg',
      'allowed_types'=>'jpg|png|jpeg',
      'max_size'=>100
    );
    $this->load->library('upload',$confs);
    if(!$this->upload->do_upload("pan_file")){
     $w=array(
        'first_name'=>$firstname_quote,       
        'last_name'=>$lastname_quote,        
        'company_name'=>$company_name,  
        'descriptions'=>$description,      
        'delivery_state'=>$sub,
        'status'=>$status     
                
      );
    }
    else{
      $fd=$this->upload->data();
      $fn=$fd['file_name'];
     
      $conf=array(
      'upload_path'=>'./assets/backend/img/pancardimg',
      'allowed_types'=>'jpg|png|jpeg',
      'max_size'=>100
    );
    $this->load->library('upload',$conf);
    if(!$this->upload->do_upload("aadhaar_file")){
     $w=array(
        'first_name'=>$firstname_quote,       
        'last_name'=>$lastname_quote,        
        'company_name'=>$company_name, 
        'descriptions'=>$description,           
        'delivery_state'=>$sub,
        'status'=>$status     
      );
    }
    else{
      $fds=$this->upload->data();
      $fns=$fds['file_name'];
      $w=array(
        'first_name'=>$firstname_quote,       
        'last_name'=>$lastname_quote,        
        'company_name'=>$company_name,  
        'descriptions'=>$description,          
        'delivery_state'=>$sub,
        'status'=>$status,      
        'pan_file'=>$fn,
        'aadhaar_file'=>$fns
      );
     
    }
     }
      $this->Vendors_model->vendor_update($w,$id);
       redirect(base_url().'vendor-dashboard');
	}


	public function admin_vendor_add(){
		$this->load->view('admin-vendor-add');

	}

  public function vendor_support(){
    $service=$this->Service_model->servicefatch();
    $support=array(
      'service_rs'=>$service
    );
      $this->load->view('common/frontend/include/all-header',$support);
    $this->load->view('vendor-support',$support);
      $this->load->view('common/frontend/include/all-footer',$support);
  }

  public function vendor_support_data(){
      $vendor_ids=$this->input->post('vendor_ids');   
    $vendor_support=$this->input->post('vendor_support');
    $description=$this->input->post('description');

        $data=array(
          'login_id'=>$vendor_ids,
        'select_issue'=>$vendor_support,             
        'description'=>$description                
        );
        $this->Vendors_model->vendor_support($data);
        redirect(base_url().'admin-vendor-support');
  }

  public function admin_vendor_support_list(){
    $vendor_list=$this->Vendors_model->vendor_support_fatch();
    $vendor=array(
      'vendor_support'=>$vendor_list
    );
    $this->load->view('admin-vendor-support-list',$vendor);
  }

    public function support_delete($id){
        $supports=$this->Vendors_model->support_del($id);
        redirect(base_url().'admin-vendor-support-list');

      }

      public function vendor_support_export(){
        // file name
    $filename = 'vendor-suppot'.date('Ymd').'.csv';
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Type: application/csv; ");

     // get data
    $usersData = $this->Vendors_model->vendor_support_export();
    // file creation
    $file = fopen('php://output','w');
    $header = array("ID","Issue","Description");
    fputcsv($file, $header);
    foreach ($usersData as $key=>$line){
      fputcsv($file,$line);
    }
    fclose($file);
    exit;  
      }


      public function change_password($id){
        $vendor=$this->Vendors_model->change_password($id);
        $service=$this->Service_model->servicefatch();
        $vendor_password=array(
          'change_passwords'=>$vendor,
          'service_rs'=>$service
        );     

        $this->load->view('common/frontend/include/all-header',$vendor_password);
        $this->load->view('change-password',$vendor_password);
        $this->load->view('common/frontend/include/all-footer',$vendor_password);
      }

      public function vendor_password_update(){
        $id=$this->input->post('id');
        $passwords=$this->input->post('password');
        $vendor=array(
          'password_quote'=>$passwords
        );
        $this->Vendors_model->vendor_password_upd($vendor,$id);
        redirect(base_url().'vendor-dashboard');
      }

	
}
