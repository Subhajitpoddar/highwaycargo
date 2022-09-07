 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Service</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
                </p>
            </div>
        </div>
    </section><!-- End section -->
  
    <main>
        <div class="container margin_60">
          <div class="row">
                <div class="col-md-8">                                    
                    <?php
                    foreach ($service_rs as $service_rs_view) {            
                    ?>
                    <div class="row strip">
                        <div class="col-md-5">
                            <p>
                                <a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>"><img src="<?php echo base_url();?>assets/backend/img/serviceimg/<?php echo $service_rs_view->svimg;?>" alt="service-image" class="img-responsive" data-retina="true"></a>
                            </p>
                        </div>
                        <div class="col-md-7">
                            <h4><?php echo $service_rs_view->svname;?></h4>
                           <?php echo $service_rs_view->svshortdes;?><br><br>
                            <a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>" class="btn_1">Read More</a>                          
                        </div>
                    </div><!-- End row -->
                    <?php
                }
                    ?>         
                </div><!-- End col-md-9 -->                
                <div class="col-md-4">
                  <!-- <div class="box_style_1">
                      <ul id="cat_nav">
                            <li><a href="">Air condition</a></li>
                            <li><a href="">Security sistems</a></li>
                            <li><a href="">Wiring and installation</a></li>
                            <li><a href="">Service layout 2</a></li>
                            <li><a href="">Service layout 3</a></li>
                        </ul>
                        <hr>
                        <h5>Did you find what you need?</h5>
                        <p class="nopadding">Ad sed apeirian senserit gloriatur, eu iusto ubique impetus quo.<br><a href="" class="link_normal">Contact us</a></p>
                        
                    </div> --><!-- End Box_style_1 -->
            
                 <!--    <div class="quote_banner"><a href="">Need a quotation?</a></div> -->
                    
                    <div class="box_style_2">
                        <?php foreach($service_ads as $service_ads_rs) { ?>
                        <h4><?php echo $service_ads_rs->advertisement_name;?></h4>
                        <p><img src="<?php echo base_url();?>assets/backend/img/service-advertisement/<?php echo $service_ads_rs->advertisement_image;?>" alt="advertisment_image" class="img-responsive"></p>
                       <!--  <img src="img/team/team-3.jpg" alt="">       -->
                       <?php } ?>              
                    </div>
                </div><!-- End col-md-3 -->              
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->