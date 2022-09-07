 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>How it Works</h1>
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
                    foreach($howitwork_rs as $howitwork_rs_view){
                    ?>
                   
                    <h3><?php echo $howitwork_rs_view->howitwork_title;?></h3>
                   <?php echo $howitwork_rs_view->howitwork_details;?>
                    <?php
                }
                    ?>               
                </div><!-- End col-md-9 -->                
                <div class="col-md-3">
                     <div class="box_style_2">                        
                        <h4>Advertisement</h4>
                        <p><img src="<?php echo base_url();?>assets/frontend/img/service-ads.jpg" alt="advertisment_image" class="img-responsive"></p>                              
                    </div>
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
             <div class="row">
                <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9" id="video">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
                              
                </div><!-- End col-md-9 -->                
                <div class="col-md-8">
                     <h3>Lorem Ipsum is simply</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley<br>

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley<br>

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley<br>

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                        
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->