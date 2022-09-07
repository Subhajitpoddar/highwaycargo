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
     <h2>Vendor Password Update</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">
      <?php
      foreach($change_passwords as $change_passwords_rs)       
      {
      ?>
      <form  action="<?php echo base_url();?>vendor-password-update" method="POST" enctype="multipart/form-data">
        <p><input type="hidden" name="id" value="<?php echo $change_passwords_rs->id;?>"></p>
                    <div class="form_title">
                        <h3><strong><i class="icon-user-8"></i></strong>Password</h3>                      
                    </div>
                    <div class="step">                       
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control required"  id="password" name="password" value="<?php echo $change_passwords_rs->password_quote;?>">
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