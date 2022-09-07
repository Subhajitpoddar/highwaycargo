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
     <h2>Vendor Profile Edit</h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">
      <?php
      foreach($vendor_edit as $vendor_edit_rs)
        $state=explode(",",$vendor_edit_rs->delivery_state);
      {
      ?>

      <form  action="<?php echo base_url();?>vendor-profile-update" method="POST" enctype="multipart/form-data">
        <p><input type="hidden" name="id" value="<?php echo $vendor_edit_rs->id;?>"></p>
        <input type="hidden" name="status" value="0">
                    <div class="form_title">
                        <h3><strong><i class="icon-user-8"></i></strong>Personal info</h3>                      
                    </div>
                    <div class="step">
                        <div class="row">
                           <p><input type="hidden" name="user_type" value="vendor"></p>                        
                           <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control required" id="firstname" name="firstname" value="<?php echo $vendor_edit_rs->first_name;?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control required" id="lastname" name="lastname" value="<?php echo $vendor_edit_rs->last_name;?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control required" readonly id="email" name="email" value="<?php echo $vendor_edit_rs->email;?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control required" readonly id="phone" name="phone" value="<?php echo $vendor_edit_rs->phone;?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Name(optional)</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $vendor_edit_rs->company_name;?>">
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="8" name="description" class="form-control" required><?php echo $vendor_edit_rs->descriptions;?></textarea>
                    </div>
                </div>                
            </div><!--End row -->
                </div><!--End step -->                           
                <div class="form_title">
                    <h3><strong><i class="icon-location-5"></i></strong>Your Location</h3>                       
                </div>
                <div class="step">
                    <div class="row">                       
                        
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("assam",$state)){ echo "checked";}?> name="state[]" value="assam">Assam
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("bihar",$state)){ echo "checked";}?> name="state[]" value="bihar"> Bihar
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("chhattisgarh",$state)){ echo "checked";}?> name="state[]" value="chhattisgarh"> Chhattisgarh
      </label>
    </div>
                        </div>
                         <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" <?php if(in_array("andhra",$state)){ echo "checked";}?> name="state[]" value="andhra"> Andhra P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("goa",$state)){ echo "checked";}?> name="state[]" value="goa"> Goa
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("gujarat",$state)){ echo "checked";}?> name="state[]" value="gujarat"> Gujarat
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("haryana",$state)){ echo "checked";}?> name="state[]" value="haryana"> Haryana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("himachal",$state)){ echo "checked";}?> name="state[]" value="himachal"> Himachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("arunachal",$state)){ echo "checked";}?> name="state[]" value="arunachal"> Arunachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("jharkhand",$state)){ echo "checked";}?> name="state[]" value="jharkhand"> Jharkhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("karnataka",$state)){ echo "checked";}?> name="state[]" value="karnataka"> Karnataka
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("kerala",$state)){ echo "checked";}?> name="state[]" value="kerala"> Kerala
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("madhya",$state)){ echo "checked";}?> name="state[]" value="madhya"> Madhya P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("maharashtra",$state)){ echo "checked";}?> name="state[]" value="maharashtra"> Maharashtra
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("manipur",$state)){ echo "checked";}?> name="state[]" value="manipur"> Manipur
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("meghalaya",$state)){ echo "checked";}?> name="state[]" value="meghalaya"> Meghalaya
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("mizoram",$state)){ echo "checked";}?> name="state[]" value="mizoram"> Mizoram
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("nagaland",$state)){ echo "checked";}?> name="state[]" value="nagaland"> Nagaland
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("odisha",$state)){ echo "checked";}?> name="state[]" value="odisha"> Odisha
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("panjab",$state)){ echo "checked";}?> name="state[]" value="panjab"> Punjab
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("rajasthan",$state)){ echo "checked";}?> name="state[]" value="rajasthan"> Rajasthan
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("sikkim",$state)){ echo "checked";}?> name="state[]" value="sikkim"> Sikkim
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("tamilnadu",$state)){ echo "checked";}?> name="state[]" value="tamilnadu"> Tamil Nadu
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("telangana",$state)){ echo "checked";}?> name="state[]" value="telangana"> Telangana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("tripura",$state)){ echo "checked";}?> name="state[]" value="tripura"> Tripura
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("uttar",$state)){ echo "checked";}?> name="state[]" value="uttar"> Uttar P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("uttarakhand",$state)){ echo "checked";}?> name="state[]" value="uttarakhand"> Uttarakhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" <?php if(in_array("westbengal",$state)){ echo "checked";}?> name="state[]" value="westbengal"> West Bengal
      </label>
    </div>
                        </div>
                        
    
            </div>               
        </div><!--End step -->
        <div class="form_title">
            <h3><strong><i class="icon-calendar-empty"></i></strong>Documents Upload</h3>                        
        </div>
        <div class="step">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>PAN Card No</label>
                        <input type="text" id="pan_number" name="pan_number" readonly class="form-control required" value="<?php echo $vendor_edit_rs->pan_number;?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>PAN Card Upload</label>
                        <img src="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_edit_rs->pan_file;?>" style="height:100px;" class="text-center">
                        <input type="file" id="pan_file" name="pan_file" class="form-control required">
                    </div>
                </div>
            </div><!--End row -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card No</label>
                        <input type="text" id="aahaar_number" name="aahaar_number" readonly class="form-control required" value="<?php echo $vendor_edit_rs->aahaar_number;?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card Upload</label>
                         <img src="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_edit_rs->aadhaar_file;?>" style="height:100px;" class="text-center">
                        <input type="file" id="aadhaar_file" name="aadhaar_file" class="form-control required">
                    </div>
                </div>
            </div><!--End row -->
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