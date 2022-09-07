<section id="sub_header">
    <div class="container">
        <div class="main_title">
            <h1>Login</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
            </p>
        </div>
    </div>
</section><!-- End section -->

<main>    
    <div class="container margin_60">
        <div class="row">                
            <div class="col-md-12">               
                    <h2 class="login-title">WELCOME TO HIGHWAY CARGO</h2>                  
                
                <!-- action="quotation-normal_2.php"-->
              
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6 col-sm-4">
                        <form id="quotation" action="<?php echo base_url();?>login-db" method="POST">
                            <div class="form-group">
                                <label>Login</label>
                                <select  class="form-control required" id="firstname_quote" name="user_type">
                                    <option>--Select User--</option>                             
                                    <option value="user">Customer</option>
                                    <option value="vendor">Vendor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email Id</label>
                                <input type="email" class="form-control required" id="firstname_quote" name="email" placeholder="Enter a valid email address" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control required" id="lastname_quote" name="password" placeholder="Password" required>
                            </div>
                            <!-- <a href="<?php echo base_url();?>forget-password-page" id="forget">Forgot Password ?</a> -->                           
                            <button type="submit"  class="btn_1 medium">Submit</button> 
                            <div class="row" id="registers">                           
                            <div class="col-md-6"> 
                            <p><a href="<?php echo base_url();?>customer" class="link_normal">Customer registration</a></p>               
                            </div> 
                            <div class="col-md-6">
                                 <p><a href="<?php echo base_url();?>vendors" class="link_normal" id="vendor-reg">Vendor registration</a></p>
                            
                        </div>
                            </div> 
                             </form> 
                              </div> 
                        <div class="col-md-3">

                        </div>                                 
                    </div>
                            
            </div><!-- End col-md-9 -->
        </div><!-- End row -->
    </div><!-- End container -->
    </main><!-- End main -->