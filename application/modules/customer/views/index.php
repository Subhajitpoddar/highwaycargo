<section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Customer Registration</h1>
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
                <form id="quotation" action="<?php echo base_url();?>customer-register-db" method="POST">
                    <div class="form_title">
                        <h3><strong><i class="icon-user-8"></i></strong>Personal info</h3>                      
                    </div>
                    <div class="step">
                    <div class="row">
                        <p><input type="hidden" name="user_type" value="user"></p>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" id="firstname_quote" name="firstname_quote" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="lastname_quote" name="lastname_quote" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email_quote" name="email_quote" required>
                                <td><span class="email_val validation"></span></td>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="number" class="form-control" id="phone_quote" name="phone_quote" required>
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
                            <input type="text" id="city_quote" name="city_quote" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Street line</label>
                            <input type="text" id="street_quote" name="street_quote" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" id="state_quote" name="state_quote" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label>Postal code</label>
                            <input type="number" id="postal_code_quote" name="postal_code_quote" class="form-control" required>
                        </div>
                    </div>
                </div>
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
                        <button type="submit" class="btn_1 medium" id="submit_button" name="register">Submit</button>
                   </div><!--End step -->
            
                    </form>
                </div><!-- End col-md-9 -->              
            </div><!-- End row -->
        </div><!-- End container -->
    </main><!-- End main --> 