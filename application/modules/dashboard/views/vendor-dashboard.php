<section id="sub_header">
  <div class="container">
    <div class="main_title">
      <h1>Vendor Dashboard</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
      </p>
    </div>
  </div>
</section><!-- End section -->
<main>
  <div class="container margin_60">
    <div id="intro">        
     <h2>Vendor DASHBOARD</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-3">
      <div class="box_style_2">
       <div>        
       <?php $verdor_profile=$this->session->userdata('profile_pictures');?>  
       <?php
       if($verdor_profile):       
       ?> 

        <img src="<?php echo base_url();?>assets/backend/img/profile_image/<?php echo $verdor_profile;?>" class="rounded-circle" alt="profile_image"> 
       <?php else: ?> 
        <img src="<?php echo base_url();?>assets/frontend/img/service-ads.jpg" class="rounded-circle" alt="profile_image"> 
      <?php endif;?>

        <form action="<?php echo base_url();?>admin-vendor-profile" method="post" enctype="multipart/form-data">
           <input type="hidden" name="vendor_id" value="<?php echo $this->session->userdata('vendor_id');?>">
          <input type="file" name="profile_picture" class="form-control">
          <input type="hidden" name="nulls" value="0">
           <span class="text-danger">Note:-* Maximum size 100 kb </span> 
          <input type="submit" value="upload" class="btn btn-primary mt-2">
                  
        </form>        
      </div>
      <div class="customer_dashboard">
         <p><?php $vendor_id=$this->session->userdata('vendor_id');?><br>
        <p><b>Vendor Name :</b> <?php $verdor_un=$this->session->userdata('vendor_name'); echo $verdor_un; ?><br>
         <b>Ph No :</b> <?php $verdor_phone=$this->session->userdata('vendor_phone'); echo $verdor_phone; ?><br>
          <b>Email Id :</b> <?php $verdor_email=$this->session->userdata('email'); echo $verdor_email; ?><br>
        <b>Address :-</b><br>
             City: <?php $verdor_city=$this->session->userdata('city'); echo $verdor_city;?><br>
             Street: <?php $verdor_street=$this->session->userdata('street'); echo $verdor_street;?><br>
             State: <?php $verdor_state=$this->session->userdata('state'); echo $verdor_state;?><br>
             Pin Code: <?php $verdor_postal_code=$this->session->userdata('postal_code'); echo $verdor_postal_code;?><br>

      </p>
      </div>   
    </div>   
   <div>
     <?php $verdor_id=$this->session->userdata('vendor_id');?>
    <p><b><a href="<?php echo base_url();?>logout-vendor">Sign Out</a><br>
      <a href="<?php echo base_url();?>vendor-change-password/<?php echo $verdor_id;?>">Change Password</a><br>
     
      <a href="<?php echo base_url();?>vendor-profile-edit/<?php echo $verdor_id;?>">Profile Edit</a><br>
      <a href="<?php echo base_url();?>vendor-support">Support</a></b></p>
    </div> 

  
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     Add Vehicle
   </button>

   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Vehicle Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?php echo base_url();?>vehicle-db" method="post" enctype="multipart/form-data">

           <input type="hidden" name="vendor_id" value="<?php echo $this->session->userdata('vendor_id');?>">
           <input type="hidden" name="status" value="0">
           
            <div class="form-group">
              <label for="email">Vendor Name :</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Driver Name" name="name" required>
            </div>
            <div class="form-group">
              <label for="sel1">Vendor Body Type :</label>
              <select class="form-control" id="sel1" name="vendor_body">
                <?php foreach($body_type as $body_type_rs) { ?>
                <option value="<?php echo $body_type_rs->body_title;?>"><?php echo $body_type_rs->body_title;?></option>
                <?php
              }
                ?>
                <!-- <option value="hyva">Hyva</option>
                <option value="lcv">LCV</option>
                <option value="trailor">Trailor</option>
                <option value="truck">Truck</option> -->

              </select>
            </div>   
           <!--  <div class="form-group">
              <label for="froms"> From Location :</label>
              <input type="text" class="form-control" id="froms" placeholder="Enter From Location" name="froms">
            </div>
            <div class="form-group">
              <label for="to">To Location :</label>
              <input type="text" class="form-control" id="to" placeholder="Enter To Location" name="to">
            </div> -->
            <div class="form-group">
              <label for="vehicle">Vehicle Number :</label>
              <input type="text" class="form-control" id="vehicle" placeholder="Enter To Location" name="vehicle_number" required>
            </div>

            <div class="form-group">
              <label for="aadhaar">Driver’s Aadhaar Card Upload :</label>
              <input type="file" class="form-control" id="aadhaar" name="aadhaarfile">
              <span class="text-danger">Note:-* Maximum File size 100 kb </span>
            </div>
            
            <div class="form-group">
              <label for="email">Driver’s license Upload :</label>
              <input type="file" class="form-control" id="name"  name="driverfile">
              <span class="text-danger">Note:-* Maximum File size 100 kb </span>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>    
</div>   
<div class="col-md-9">
  <div class="row">
    <div class="col-md-6">
        <p><b>Vendor Profile Link :</b></p>
       <!--  <p><b>• No Of vehicle Registered:</b> 4<br>
        <b>• Driver’s Name:</b> Subhajit Poddar<br>
        <b>• Body Type Registered:</b><br>
        <b>• From Location:</b> Kolkata<br>
        <b>• To Location:</b> Mumbai</b></p> -->
        <p><b>Customer Unlocked List :</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Customer Name</th>                  
                <th>Location</th>      
              </tr>
            </thead>
            <tbody>
             <?php 
             $vendor_id=$this->session->userdata('vendor_id');
             $this->db->where("vendor_id='$vendor_id'");
             $details=$this->db->get('customer_details_for_vendor_deasboard');
             $fatch=$details->result();
             foreach($fatch as $customer_details){
             ?>
              <tr>                
                <td>
                  <?php 
                  $customer=$customer_details->user_id;
                  $this->db->where("id='$customer'");
                  $datas=$this->db->get('vendor_registers_db');
                  $name=$datas->result();
                  foreach($name as $name_rs){
                    echo $name_rs->first_name;
                 ?>

              </td>  
                <td><?php echo $name_rs->city;?></td>              
                <?php } ?> 
              </tr>
              <?php } ?>    
            </tbody>
          </table>
    </div>
    <div class="col-md-6">
         <div class="box_style_2">
          <?php foreach($advertisrment as $advertisrment_rs) { ?>
          <h4><?php echo $advertisrment_rs->advertisement_name;?></h4>
          <p><img src="<?php echo base_url();?>assets/backend/img/advertisement-img/<?php echo $advertisrment_rs->advertisement_image;?>" alt="vendor-advertisement" class="img-responsive"></p>
        <?php } ?>
          <!--  <img src="img/team/team-3.jpg" alt=""> -->              
        </div>
    </div>
    </div>
  </div>  
   <div class="col-md-12">
    <h3>Vehicle Details</h3>
      <div class="table-responsive">
    <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th>Vendor Name</th>
                <th>Vendor Body Type</th>  
               <!--  <th>From Location</th> 
                 <th>To Location</th> -->
                 <th>Vehicle No</th>                 
                  <th>Edit</th>
                  <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($vehicle_rs as $vehicle_rs_data)
                {
                  ?>
              <tr>              
                <td><?php echo $vehicle_rs_data->vehicle_name;?></td>  
                <td><?php echo $vehicle_rs_data->vendor_body;?></td>                
                <td><?php echo $vehicle_rs_data->vehicle_number;?></td>                       
                <td><a href="<?php echo base_url();?>vehicle-edit/<?php echo $vehicle_rs_data->id;?>" class="btn btn-primary">Edit</a></td>
                <?php if($vehicle_rs_data->status == '1'):?>
                 <td><a href="" class="btn btn-success">Approved</a></td>
               <?php else: ?>
                <td><a href="" class="btn btn-danger">Pending</a></td>   
              <?php endif; ?>
              </tr>  
              <?php
            }
              ?>  
            </tbody>
          </table>
        </div>
   </div>    
</div><!-- End row -->
</div><!-- End container -->

  </main><!-- End main -->