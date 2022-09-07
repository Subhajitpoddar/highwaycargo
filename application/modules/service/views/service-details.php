 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Service Details</h1>
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
                    foreach($service_detail_rs as $service_detail_rs_view){
                    ?>
                    <img src="<?php echo base_url();?>assets/backend/img/serviceimg/<?php echo $service_detail_rs_view->svimg;?>" alt="service-image" class="img-responsive border">
                    <h3><?php echo $service_detail_rs_view->svname;?></h3>
                    <?php echo $service_detail_rs_view->svdescrb;?>
                    <?php
                }
                    ?>
                  
                </div><!-- End col-md-9 -->
                
                <div class="col-md-3">
                    <div class="box_style_1">
                        <h4>Service list</h4>
                        <ul id="cat_nav">
                            <?php
                            foreach($service_rs as $service_rs_view){
                            ?>
                            <li><a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>"><?php echo $service_rs_view->svname;?></a></li>
                            <?php
                        }
                            ?>                            
                        </ul>
                        <hr>
                        <h5>Did you find what you need?</h5>
                        <p class="nopadding">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                            <a href="<?php echo base_url();?>contact" class="link_normal">Contact us</a>
                        </p>
                    </div><!-- End Box_style_1 -->
                    
                  <!--   <div class="quote_banner">
                        <a href="">Need a quotation?</a>
                    </div> -->
                   <!--  <div class="box_style_2">
                        <h4>List</h4>
                        <ul>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        </ul>                       
                    </div> -->
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->