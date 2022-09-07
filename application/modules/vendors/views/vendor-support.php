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
     <h2>Vendor Support</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">     
      <form  action="<?php echo base_url();?>admin-vendor-support-data" method="POST" enctype="multipart/form-data">                   
                        <div class="row">
                            <?php $vendor_id=$this->session->userdata('vendor_id');?>
                           <p><input type="hidden" name="vendor_ids" value="<?php echo $vendor_id;?>"></p>
                           <div class="col-md-3">
                               
                           </div>                        
                           <div class="col-md-6 col-sm-4">
                            <div class="form-group">
                                <label>Select Issue</label>
                                <select name="vendor_support" class="form-control">
                                    <option>--select--</option>
                                    <option value="car">Car</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Description</label>
                                <textarea rows="8" cols="7" name="description" placeholder="Describe your question or issue" class="form-control"></textarea>
                            </div>
                            <button type="submit"  class="btn_1 medium" id="submit_button_new">Submit</button>
                        </div>
                         <div class="col-md-3">
                               
                        </div>                      
                    </div>    
     

    </form>        
     </div>     
</div><!-- End row -->
</div><!-- End container -->

  </main><!-- End main -->