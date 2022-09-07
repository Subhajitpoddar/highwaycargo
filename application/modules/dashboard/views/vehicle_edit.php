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
     <h2>Vehicle Edit</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">
      <?php
      foreach($vehicle_edit as $vehicle_edit_rs){
      ?>

       <form action="<?php echo base_url();?>vehicle-update" method="post" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php echo $vehicle_edit_rs->id;?>"> 
           <input type="hidden" name="status" value="0">          
            <div class="form-group">
              <label for="email">Vendor Name :</label>
              <input type="text" class="form-control" placeholder="Enter Driver Name" name="name" value="<?php echo $vehicle_edit_rs->vehicle_name;?>" required>
            </div>
            <div class="form-group">
              <label for="sel1">Vendor Body Type :</label>
              <select class="form-control" id="sel1" name="vendor_body">
                <?php foreach($body_type as $body_type_rs) { ?>
                <option value="<?php echo $body_type_rs->body_title;?>" <?php if($vehicle_edit_rs->vendor_body=='<?php echo $body_type_rs->body_title;?>'){ echo "selected";}?>><?php echo $body_type_rs->body_title;?></option>
              <?php } ?>
                <!-- <option value="hyva" <?php if($vehicle_edit_rs->vendor_body=='hyva'){ echo "selected";}?>>Hyva</option>
                <option value="lcv" <?php if($vehicle_edit_rs->vendor_body=='lcv'){ echo "selected";}?>>LCV</option>
                <option value="trailor" <?php if($vehicle_edit_rs->vendor_body=='trailor'){ echo "selected";}?>>Trailor</option>
                <option value="truck" <?php if($vehicle_edit_rs->vendor_body=='truck'){ echo "selected";}?>>Truck</option> -->

              </select>
            </div>   
            <!-- <div class="form-group">
              <label for="froms"> From Location :</label>
              <input type="text" class="form-control" placeholder="Enter From Location" name="froms" value="<?php echo $vehicle_edit_rs->vehicle_from;?>">
            </div>
            <div class="form-group">
              <label for="to">To Location :</label>
              <input type="text" class="form-control" placeholder="Enter To Location" name="to" value="<?php echo $vehicle_edit_rs->vehicle_to;?>">
            </div> -->
            <div class="form-group">
              <label for="vehicle">Vehicle Number :</label>
              <input type="text" class="form-control" readonly placeholder="Enter To Location" name="vehicle_number" value="<?php echo $vehicle_edit_rs->vehicle_number;?>" required>
            </div>

            <div class="form-group">
              <label for="aadhaar">Driver’s Aadhaar Card Upload :</label>
              <img src="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_edit_rs->aadhaarfile;?>" style="height:100px;" class="text-center"><br>
              <span class="text-danger">Note:-* Maximum File size 100 kb </span>
              <input type="file" class="form-control" id="aadhaar" name="aadhaarfile">
            </div>
            
            <div class="form-group">
              <label for="email">Driver’s license Upload :</label>
              <img src="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_edit_rs->driverfile;?>" style="height:100px;" class="text-center"><br>
              <span class="text-danger">Note:-* Maximum File size 100 kb </span>
              <input type="file" class="form-control" id="name"  name="driverfile">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>
          <?php
        }
          ?>
     </div>     
</div><!-- End row -->
</div><!-- End container -->

  </main><!-- End main -->