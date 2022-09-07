<section id="sub_header">
  <div class="container">
    <div class="main_title">
      <h1>Customer Dashboard</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
      </p>
    </div>
  </div>
</section><!-- End section -->
<main>
  <div class="container margin_60">
    <div id="intro">        
     <h2> Customer DASHBOARD</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-3">
      <div class="box_style_2">
       <div>        
        <img src="<?php echo base_url();?>assets/frontend/img/service-ads.jpg" class="rounded-circle" alt="profile_image">        
      </div>
      <div class="customer_dashboard">

        <p><b>Customer Name :</b> <?php $un=$this->session->userdata('user_name'); echo $un; ?><br>
          <b>Ph No :</b> <?php $phone=$this->session->userdata('user_phone'); echo $phone; ?><br>
          <b>Email Id : <?php $user_email=$this->session->userdata('user_email'); echo $user_email; ?></b><br>
        <b>Address :</b><br>
         City: <?php $verdor_city=$this->session->userdata('user_city'); echo $verdor_city;?><br>
             Street: <?php $verdor_street=$this->session->userdata('user_street'); echo $verdor_street;?><br>
             State: <?php $verdor_state=$this->session->userdata('user_state'); echo $verdor_state;?><br>
             Pin Code: <?php $verdor_postal_code=$this->session->userdata('user_postal_code'); echo $verdor_postal_code;?><br>
      </p>
      </div>
    </div> 
    <div>
        <p><b><a href="<?php echo base_url();?>logout">Sign Out</a><br>
           <?php $user_id=$this->session->userdata('user_id');?>
           <a href="<?php echo base_url();?>customer-profile-edit/<?php echo $user_id;?>">Profile Edit</a><br>
        <a href="<?php echo base_url();?>change-password/<?php echo $user_id;?>">Change Password</a><br>
      <a href="<?php echo base_url();?>customer-support">Support</a></b></p>
      </div> 
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
     Add Post
   </button> 


   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Customer Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="<?php echo base_url();?>customer-add-post-db" method="post" enctype="multipart/form-data">

           <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>"> 
           <input type="hidden" name="status" value="0">         
           
            <div class="form-group">
              <label for="email">Schd. Date :</label>
              <input type="date" class="form-control" id="name" placeholder="Enter Schedule Date" name="date" required>
            </div>
            <div class="form-group">
              <label for="to">Mobile No*:</label>
              <input type="number" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" name="mobile_number" required>
            </div> 

            <div class="form-group">
              <label for="sel1">Source City :</label>
              <input type="text" class="form-control" id="source_city" placeholder="Enter Source City" name="source_city" required>
            </select>
            </div>   
           <div class="form-group">
              <label for="froms">Destination City :</label>
              <input type="text" class="form-control" id="destination_name" placeholder="Enter Destination City" name="destination_name" required>
            </div>
            <div class="form-group">
              <label for="to">Weight(MT) :</label>
              <input type="text" class="form-control" id="to" placeholder="Enter Total Weight" name="total_weight" required>
            </div> 
            <div class="form-group">
              <label for="vehicle">Material Type :</label>
              <input type="text" class="form-control" id="material_type" placeholder="Enter Material Type" name="material_type" required>
            </div> 
             <div class="form-group">
              <label for="description">Description :</label>
              <textarea type="text" class="form-control" id="description" placeholder="Enter Description Type" name="description" required></textarea> 
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
          <p><b>Vendor Unlocked List :</b></p>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Verdor Name</th>
                 <th>Location</th>         
              </tr>
            </thead>
            <tbody>
              <?php foreach($vendor_names as $vendor_names_rs)
               { 
                $vendor=$vendor_names_rs->vendor_id;
                ?>
              <tr>
                <td><?php 
                
                $this->db->where("id='$vendor'");
                $vendor_fatch=$this->db->get('vendor_registers_db');
                 $fatch=$vendor_fatch->result();
             foreach($fatch as $fatch_details){
              echo $fatch_details->first_name;

           
              ?></td>  
                <td><?php echo $fatch_details->city;?></td> 
                <?php } ?>      
              </tr>  
              <?php } ?>  
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
         <div class="box_style_2">
          <?php foreach($advertisrment as $advertisrment_rs) { ?>
          <h4><?php echo $advertisrment_rs->customer_ads_name;?></h4>
          <p><img src="<?php echo base_url();?>assets/backend/img/customer-ads-img/<?php echo $advertisrment_rs->customer_ads_file;?>" alt="ads" class="img-responsive"></p>
          <?php
        } 
          ?>            
        </div>
      </div>
    </div>
  </div> 
    <div class="col-md-12">
    <h3>Requirement Details</h3>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th>Date</th>
                <th>Mobile Number</th>  
                <th>Source City</th> 
                 <th>Destination</th>
                 <th>Total Weight</th>                 
                  <th>Material Type</th>
                   <th>Description</th>
                  <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($customer_post as $customer_post_data)
                {
                  ?>
              <tr>              
                <td><?php echo $customer_post_data->date;?></td>  
                <td><?php echo $customer_post_data->mobile_number;?></td>                
                <td><?php echo $customer_post_data->source_city;?></td>
                 <td><?php echo $customer_post_data->destination_name;?></td>                       
                  <td><?php echo $customer_post_data->total_weight;?></td>
                   <td><?php echo $customer_post_data->material_type;?></td>
                   <td><?php echo $customer_post_data->description;?></td>
                <td><a href="<?php echo base_url();?>contact-requirement-edit/<?php echo $customer_post_data->id;?>" class="btn btn-primary">Edit</a></td>               
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