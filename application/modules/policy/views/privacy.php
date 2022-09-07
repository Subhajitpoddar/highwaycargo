 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Privacy Policy</h1>
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
                    <?php
                   foreach($policy_rs as $policy_rs_view){
                   ?>
                    <h3><?php echo $policy_rs_view->policy_name;?></h3>
                  <?php echo $policy_rs_view->policy_description;?>
                    <?php
                }
                    ?>             
                </div><!-- End col-md-9 -->                
                <div class="col-md-3">
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->