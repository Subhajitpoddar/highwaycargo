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
     <h2>Customer Profile Edit</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">
      <?php
      foreach($customer_edit as $customer_edit_rs)       
      {
      ?>
      <form  action="<?php echo base_url();?>customer-profile-update" method="POST" enctype="multipart/form-data">
        <p><input type="hidden" name="id" value="<?php echo $customer_edit_rs->id;?>"></p>
                    <div class="form_title">
                        <h3><strong><i class="icon-user-8"></i></strong>Personal info</h3>                      
                    </div>
                    <div class="step">
                        <div class="row">
                           <p><input type="hidden" name="user_type" value="vendor"></p>                        
                           <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control required" id="firstname" name="firstname" value="<?php echo $customer_edit_rs->first_name;?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control required" id="lastname" name="lastname" value="<?php echo $customer_edit_rs->last_name;?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control required" readonly id="email" name="email" value="<?php echo $customer_edit_rs->email;?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control required" readonly id="phone" name="phone" value="<?php echo $customer_edit_rs->phone;?>">
                            </div>
                        </div>
                    </div>                   
                </div><!--End step -->    
           
        <div class="step">                       
            <button type="submit"  class="btn_1 medium" id="submit_button_new">Submit</button>
        </div><!--End step -->

    </form>
          <?php
        }
          ?>
     </div>     
</div><!-- End row -->
</div><!-- End container -->

  </main><!-- End main -->