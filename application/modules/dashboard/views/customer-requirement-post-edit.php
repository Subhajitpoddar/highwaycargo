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
     <h2>Customer Requirement Edit</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">
      <?php
      foreach($customer_edit as $customer_edit_rs){
      ?>

       <form action="<?php echo base_url();?>contact-req-upd" method="post" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?php echo $customer_edit_rs->id;?>">           
         <input type="hidden" name="status" value="0">      
            <div class="form-group">
              <label for="email">Schd. Date :</label>
              <input type="date" class="form-control" placeholder="Enter Driver Name" name="date" value="<?php echo $customer_edit_rs->date;?>">
            </div> 
            <div class="form-group">
              <label for="vehicle">Mobile  Number :</label>
              <input type="text" class="form-control" readonly placeholder="Enter To Location" name="mobile_number" value="<?php echo $customer_edit_rs->mobile_number;?>">
            </div>          
            <div class="form-group">
              <label for="froms"> Source City :</label>
              <input type="text" class="form-control" placeholder="Enter From Location" name="source_city" value="<?php echo $customer_edit_rs->source_city;?>">
            </div>
            <div class="form-group">
              <label for="to">Destination City :</label>
              <input type="text" class="form-control" placeholder="Enter To Location" name="destination_name" value="<?php echo $customer_edit_rs->destination_name;?>">
            </div> 
            <div class="form-group">
              <label for="to">Weight(MT) :</label>
              <input type="text" class="form-control" placeholder="Enter To Location" name="total_weight" value="<?php echo $customer_edit_rs->total_weight;?>">
            </div>       
            <div class="form-group">
              <label for="to">Material Type :</label>
              <input type="text" class="form-control" placeholder="Enter To Location" name="material_type" value="<?php echo $customer_edit_rs->material_type;?>">
            </div>
            <div class="form-group">
              <label for="to">Description :</label>
              <textarea class="form-control" placeholder="Enter To Location" rows="7" name="description"><?php echo $customer_edit_rs->description;?></textarea>
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