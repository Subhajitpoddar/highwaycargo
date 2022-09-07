<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends MY_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Vendor_model');
		$this->load->model('service/Service_model');
	}

	public function vendor()
	{
		$uid=$this->session->userdata('vendor_id');
		if(!isset($uid)){
			redirect(base_url().'login');
		}
		$service=$this->Service_model->servicefatch();
		$vehicle=$this->Vendor_model->vehicle_fatch($uid);
		$advertisement=$this->Vendor_model->advertisrment();
		$profile=$this->Vendor_model->vendor_profile();
		$body_types=$this->Vendor_model->body_types();
		$dashboard_rs=array(
			'service_rs'=>$service,
			'vehicle_rs'=>$vehicle,
			'advertisrment'=>$advertisement,
			'upload_profile'=>$profile,
			'body_type'=>$body_types
		);
		$this->load->view('common/frontend/include/all-header',$dashboard_rs);
		$this->load->view('vendor-dashboard',$dashboard_rs);
		$this->load->view('common/frontend/include/all-footer',$dashboard_rs);
	}

	public function vendor_details(){
		$vendor_details=$this->Vendor_model->vendor_fatch();
		$vendor=array(
			'vendor_details'=>$vendor_details
		);
		$this->load->view('admin-vendor-details',$vendor);

	}

	public function vendor_view($id){
		$vendor_full_details=$this->Vendor_model->vendor_full_details($id);
		$vendors=array(
			'vendor_details'=>$vendor_full_details
		);
		$this->load->view('vendor-view',$vendors);
	}

	public function vehicle_db(){
		$name=$this->input->post('name');
		$vendor_body=$this->input->post('vendor_body');		
		$vehicle_number=$this->input->post('vehicle_number');
		$vendor_id=$this->input->post('vendor_id');
		$status=$this->input->post('status');

		$g=array(
			'upload_path'=>'./assets/backend/img/driver-aadhaar',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("aadhaarfile")){
			?>
			<script>
				alert("No image found");
			</script>
			<?php
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$gse=array(
				'upload_path'=>'./assets/backend/img/driver-aadhaar',
				'allowed_types'=>'jpg|png|jpeg',
				'max_size'=>100
			);
			$this->load->library("upload",$gse);
			if(!$this->upload->do_upload("driverfile")){
				?>
				<script>
					alert("No image found");
				</script>
				<?php
			}
			else{
				$fts=$this->upload->data();
				$gss=$fts['file_name'];
				$w=array(
					'vehicle_name'=>$name,
					'vendor_body'=>$vendor_body,           
					'vehicle_number'=>$vehicle_number,
					'aadhaarfile'=>$gs,
					'driverfile'=>$gss,
					'vendor_login_id'=>$vendor_id,
					'status'=>$status

				);

			}
			$this->Vendor_model->vehicles_db($w);
			redirect(base_url().'vendor-dashboard');
		}

	}


	public function vehicle_edit($id)
	{
		$vehicle_edit=$this->Vendor_model->vehicle_edit($id);
		$body_types=$this->Vendor_model->body_types();
		$service=$this->Service_model->servicefatch();


		$vehicle=array(
			'vehicle_edit'=>$vehicle_edit,
			'body_type'=>$body_types,
			'service_rs'=>$service
		);
		$this->load->view('common/frontend/include/all-header',$vehicle);
		$this->load->view('vehicle_edit',$vehicle);
		$this->load->view('common/frontend/include/all-footer',$vehicle);
	}

	public function vehicle_update(){
		$name=$this->input->post('name');
		$vendor_body=$this->input->post('vendor_body');		
		$vehicle_number=$this->input->post('vehicle_number');
		$vendor_id=$this->input->post('vendor_id');
		$id=$this->input->post('id');
		$status=$this->input->post('status');

		$g=array(
			'upload_path'=>'./assets/backend/img/driver-aadhaar',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>4000
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("aadhaarfile")){
			$w=array(
				'vehicle_name'=>$name,
				'vendor_body'=>$vendor_body,           
				'vehicle_number'=>$vehicle_number,
				'status'=>$status           

			);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$g=array(
				'upload_path'=>'./assets/backend/img/driver-aadhaar',
				'allowed_types'=>'jpg|png|jpeg',
				'max_size'=>4000
			);
			$this->load->library("upload",$g);
			if(!$this->upload->do_upload("driverfile")){
				$w=array(
					'vehicle_name'=>$name,
					'vendor_body'=>$vendor_body,           
					'vehicle_number'=>$vehicle_number,
					'status'=>$status           

				);
			}
			else{
				$fts=$this->upload->data();
				$gss=$fts['file_name'];
				$w=array(
					'vehicle_name'=>$name,
					'vendor_body'=>$vendor_body,           
					'vehicle_number'=>$vehicle_number,
					'aadhaarfile'=>$gs,
					'driverfile'=>$gss,
					'status'=>$status          

				);
			}		
		}	
		$this->Vendor_model->vehicles_update($w,$id);
		redirect(base_url().'vendor-dashboard');
	}


	public function admin_vehicles_list($id){
		$vehicle_details=$this->Vendor_model->vehicle_list($id);
		$vehicle=array(
			'vehicle'=>$vehicle_details

		);
		$this->load->view('admin-vehicle-list',$vehicle);

	}


	public function export(){		
    // file name
		$filename = 'vehicle-list'.date('Ymd').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

     // get data
		$usersData = $this->Vendor_model->vehicle_list_export();
    // file creation
		$file = fopen('php://output','w');
		$header = array("ID","Vehicle Name","Vendor Body","Vehicle Number","Aadhaar File","Driver File");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){
			fputcsv($file,$line);
		}
		fclose($file);
		exit;      
	} 

	public function vendor_export(){		
    // file name
		$filename = 'vendor-list'.date('Ymd').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

     // get data
		$usersData = $this->Vendor_model->vendor_list_export();
    // file creation
		$file = fopen('php://output','w');
		$header = array("ID","User Type","First Name","Last Name","Email","Phone Number","Company Name","City","Street","State","Postal Code","Pan Number","Pan File","Aahaar Number","Aadhaar File","Password");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){
			fputcsv($file,$line);
		}
		fclose($file);
		exit;      
	} 

	public function vehicle_approve($id){
		$this->Vendor_model->update_vehicle($id);			
	}

	public function vendor_approve($id){
		$this->Vendor_model->update_vendor($id);
		redirect(base_url().'admin-vendor-details-dashboard');			
	}
	
	public function admin_vendor_delete($id){
		$this->Vendor_model->admin_vendor_delete($id);
		redirect(base_url().'admin-vendor-details-dashboard');

	}

	public function admin_vendor_edit($id){
		$vendor_edit=$this->Vendor_model->admin_vendor_edit($id);
		$vendor=array(
			'vendor_edit'=>$vendor_edit
		);
		$this->load->view('admin-vendor-edit',$vendor);

	}

	public function admin_vendor_update(){
		$firstname_quote=$this->input->post('firstname');		
		$lastname_quote=$this->input->post('lastname');		
		$company_name=$this->input->post('company_name');
		$phone=$this->input->post('phone');	
		$city=$this->input->post('city');
		$street=$this->input->post('street');
		$states=$this->input->post('states');
		$postal_code=$this->input->post('postal_code');
		$pan_number=$this->input->post('pan_number');
		$aahaar_number=$this->input->post('aahaar_number');
		$password_quote=$this->input->post('password_quote');	
		$id=$this->input->post("id");		
		$delivery_state=$this->input->post("state");
		$sub="";
		if(isset($delivery_state) && count($delivery_state)>0){
			$sub=implode(",",$delivery_state);
		}

		
		$confs=array(
			'upload_path'=>'./assets/backend/img/pancardimg',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>4000
		);
		$this->load->library('upload',$confs);
		if(!$this->upload->do_upload("pan_file")){
			$w=array(
				'first_name'=>$firstname_quote,       
				'last_name'=>$lastname_quote,        
				'company_name'=>$company_name,
				'phone'=>$phone,
				'city'=>$city,           
				'street'=>$street,
				'state'=>$states,    
				'postal_code'=>$postal_code,   
				'pan_number'=>$pan_number,   
				'aahaar_number'=>$aahaar_number, 
				'password_quote'=>$password_quote,  
				'delivery_state'=>$sub     
				
			);
		}
		else{
			$fd=$this->upload->data();
			$fn=$fd['file_name'];
			
			$conf=array(
				'upload_path'=>'./assets/backend/img/pancardimg',
				'allowed_types'=>'jpg|png|jpeg',
				'max_size'=>4000
			);
			$this->load->library('upload',$conf);
			if(!$this->upload->do_upload("aadhaar_file")){
				$w=array(
					'first_name'=>$firstname_quote,       
					'last_name'=>$lastname_quote,        
					'company_name'=>$company_name,
					'phone'=>$phone,
					'city'=>$city,           
					'street'=>$street,
					'state'=>$states,    
					'postal_code'=>$postal_code,   
					'pan_number'=>$pan_number,   
					'aahaar_number'=>$aahaar_number, 
					'password_quote'=>$password_quote,  
					'delivery_state'=>$sub     
					
				);
			}
			else{
				$fds=$this->upload->data();
				$fns=$fds['file_name'];
				$w=array(
					'first_name'=>$firstname_quote,       
					'last_name'=>$lastname_quote,        
					'company_name'=>$company_name,
					'phone'=>$phone,
					'city'=>$city,           
					'street'=>$street,
					'state'=>$states,    
					'postal_code'=>$postal_code,   
					'pan_number'=>$pan_number,   
					'aahaar_number'=>$aahaar_number, 
					'password_quote'=>$password_quote,  
					'delivery_state'=>$sub,          
					'pan_file'=>$fn,
					'aadhaar_file'=>$fns
				);
				
			}
		}
		
		$this->Vendor_model->vendor_update($w,$id);
		redirect(base_url().'admin-vendor-details-dashboard');
		
	}


	public function profile_picture_data(){
		$vendor_id=$this->input->post('vendor_id');
		$nulls=$this->input->post('nulls');

		$g=array(
			'upload_path'=>'./assets/backend/img/profile_image',
			'allowed_types'=>'jpg|png|jpeg',
			'max_size'=>100
		);
		$this->load->library("upload",$g);
		if(!$this->upload->do_upload("profile_picture")){
		$ty=array(	

				'nulls'=>$nulls
			);
		}
		else{
			$ft=$this->upload->data();
			$gs=$ft['file_name'];
			$ty=array(	
				'nulls'=>$nulls,
				'profile_picture'=>$gs
			);
			
		}
		$this->Vendor_model->profile_data_upd($ty,$vendor_id);
		redirect(base_url().'login');

	}

	public function all_vehicles_details(){
		$vehicles=$this->Vendor_model->vehicles_details();
		$vendor_list=$this->Vendor_model->vendor_details();
		$vehicles_details=array(
			'vehicle_details'=>$vehicles,
			'vendor_list'=>$vendor_list
		);
		$this->load->view('all-vehicle-details',$vehicles_details);
	}

	public function vehicle_delete($id){
		$this->Vendor_model->vehicle_delete($id);
		redirect(base_url().'admin-all-vehicle-details');

	}

	public function all_vehicle_export(){		
    // file name
		$filename = 'all-vehicle-list'.date('Ymd').'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

     // get data
		$usersData = $this->Vendor_model->all_vehicle_list_export();
    // file creation
		$file = fopen('php://output','w');
		$header = array("ID","Vehicle Name","Vendor Body","Vehicle Number");
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){
			fputcsv($file,$line);
		}
		fclose($file);
		exit;      
	} 





}
?>