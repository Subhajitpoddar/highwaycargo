<section id="sub_header">
    <div class="container">
        <div class="main_title">
            <h1>Vendor Registration</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
            </p>
        </div>
    </div>
</section><!-- End section -->

<main>    
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-9">
                <!-- action="quotation-normal_2.php"-->
                <form id="quotation" action="<?php echo base_url();?>vendors-register-db" method="POST"  enctype="multipart/form-data">
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
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control " id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Name(optional)</label>
                                <input type="text" class="form-control" id="company_name" name="company_name">
                            </div>
                        </div>                        
                    </div>
                </div><!--End step -->
                
                <div class="form_title">
                    <h3><strong><i class="icon-location-5"></i></strong>Your address</h3>                       
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_quote" name="city" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line</label>
                                <input type="text" id="street_quote" name="street" class="form-control required">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>State</label>
                              
                                    <select name="states" class="form-control">
                                          <?php foreach($states as $states_rs) { ?>
                                        <option value="<?php echo $states_rs->state_name;?>"><?php echo $states_rs->state_name;?></option>
                                    <?php } ?>
                                    </select>                               
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="number" id="postal_code_quote" name="postal_code" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div><!--End step -->
                <div class="form_title">
                    <h3><strong><i class="icon-location-5"></i></strong>Your Location</h3>                       
                </div>
                <div class="step">
                    <div class="row">                       
                        
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="assam">Assam
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="bihar"> Bihar
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="chhattisgarh"> Chhattisgarh
      </label>
    </div>
                        </div>
                         <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="state[]" value="andhra"> Andhra P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="goa"> Goa
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="gujarat"> Gujarat
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="haryana"> Haryana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="himachal"> Himachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="arunachal"> Arunachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="jharkhand"> Jharkhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="karnataka"> Karnataka
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="kerala"> Kerala
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="madhya"> Madhya P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="maharashtra"> Maharashtra
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="manipur"> Manipur
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="meghalaya"> Meghalaya
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="mizoram"> Mizoram
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="nagaland"> Nagaland
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="odisha"> Odisha
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="panjab"> Punjab
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="rajasthan"> Rajasthan
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="sikkim"> Sikkim
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="tamilnadu"> Tamil Nadu
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="telangana"> Telangana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="tripura"> Tripura
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="uttar"> Uttar P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="uttarakhand"> Uttarakhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="westbengal"> West Bengal
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
                        <input type="text" id="pan_number" name="pan_number" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>PAN Card Upload</label><br>
                        <span class="text-danger">Note:- * Maximum File size 100 kb </span>
                        <input type="file" id="pan_file" name="pan_file" class="form-control">
                    </div>
                </div>
            </div><!--End row -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card No</label>
                        <input type="text" id="aahaar_number" name="aahaar_number" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card Upload</label><br>
                          <span class="text-danger">Note:- * Maximum File size 100 kb </span>
                        <input type="file" id="aadhaar_file" name="aadhaar_file" class="form-control">
                    </div>
                </div>
            </div><!--End row -->
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="8" name="description" class="form-control" required></textarea>
                    </div>
                </div>                
            </div><!--End row -->
        </div><!--End step -->
        <div class="form_title">
            <h3><strong><i class="icon-lock"></i></strong>Password</h3>                       
        </div> 
        <div class="step">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text"  name="password_quote" id="password_quote" class="form-control" required>
                        <span id = "message1" style="color:red"> </span> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Confirm Password</label>                          
                        <input type="text"  name="confirm_quote" id="confirm_quote" class="form-control" required>
                        <span id = "message2" style="color:red"></span>
                    </div>
                </div>  
            </div>              
        </div><!--End step -->           


        <div class="step">                       
            <button type="submit"  class="btn_1 medium" id="submit_button_new">Submit</button>
        </div><!--End step -->

    </form>
</div><!-- End col-md-9 -->         

</div><!-- End row -->
</div><!-- End container -->
    </main><!-- End main -->