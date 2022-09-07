<section id="sub_header">
    <div class="container">
        <div class="main_title">
            <h1>Forget Password</h1>
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
                 <h4 class="login-title">FORGOT YOUR PASSWORD!</h4>        
                <!-- action="quotation-normal_2.php"-->
                <form id="quotation" action="<?php echo base_url();?>ForgotPassword" method="POST">            
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6 col-sm-4">                            
                            <div class="form-group">
                                <label>Email Id</label>
                                <input type="email" class="form-control required" placeholder="Enter Your Register Email Address" id="firstname_quote" name="email" required>
                            </div> 
                             <button type="submit"  class="btn_1 medium">Submit</button>                     
                        </div>                                  
                    </div>
                </form>               
            </div><!-- End col-md-9 -->
        </div><!-- End row -->
    </div><!-- End container -->
    </main><!-- End main -->