 <section id="sub_header">
    <div class="container">
        <div class="main_title">
            <h1>Directory</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
            </p>
        </div>
    </div>
</section><!-- End section -->

<main>
    <div class="container margin_60">
      <div class="row">          
        <div class="col-md-3">
             <h4><b><span class="directory">DIRECTORY </span><span class="filters">FILTERS</span></b></h4>
            <div class="quick-search">            
            <h5 class="quick">Quick Search:</h5>
            <form class="form-inline" action="<?php echo base_url();?>quick-search" method="post" id="quick-from">
             <div class="form-group">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="quick_search">
    <input type="submit" class="btn btn-primary mt-2" value="search">
    </div><!-- /input-group -->
  </form>
        </div><!-- End Search --> 
          <div class="box_style_1">           
            <div class="widget"> 
             <h5>Select State:</h5>               
                <form action="<?php echo base_url();?>choise-state" method="post" class="form-inline">
                   <div class="form-group">                      
                      <select class="form-control" id="sel1" name="state_id">
                        <?php foreach ($states as $states_rs) { ?>
                        <option value="<?php echo $states_rs->state_name;?>"><?php echo $states_rs->state_name;?></option>   
                        <?php
                    }
                        ?>    
                    </select>                    
                </div>
                <input type="submit" value="search" class="btn btn-primary">          

                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div><!-- End widget -->
        <div class="widget">
            <h5>Search by Pin Code:</h5>
            <form class="form-inline" action="<?php echo base_url();?>search-pin" method="post">
             <div class="form-group">
    <input class="form-control mr-sm-2" type="text" placeholder="Search Pin Code" name="srch">
    <input type="submit" class="btn btn-primary mt-2" value="search">
    </div><!-- /input-group -->
  </form>
        </div><!-- End Search -->
        <div class="widget"> 
            <div class="form-group">
                <h5>Body Type:</h5>
                <div class="row">
                   <?php foreach($body_type as $body_type_rs) { ?>
                <div class="col-md-4">
                    <div class="body-type">                        
                        <a href="<?php echo base_url();?>body-type-filter/<?php echo $body_type_rs->body_title;?>"><img src="<?php echo base_url();?>assets/backend/img/body-image/<?php echo $body_type_rs->body_file  ;?>" width="80" height="50" class="img-responsive">
                          <p class="text-center"><?php echo $body_type_rs->body_title;?></p></a>
                      </div>
                  </div> 
                  <?php
              }
              ?>                   
                </div>
            </div>   
        </div>
    </div>
    <!-- <div class="quote_banner"><a href="">Need a quotation?</a></div> -->
    <div id="adds">
    <div class="carousel_testimonials">    
     <?php foreach($directory_ads as $directory_ads_rs) { ?> 
    <div class="box_overlays">        
      <p><img src="<?php echo base_url();?>assets/backend/img/directory-image/<?php echo $directory_ads_rs->image;?>" alt="advertisment_image" class="img-responsive"></p>             
    </div><!-- End box_overlay -->
<?php } ?>            
 </div><!-- End carousel_testimonials -->
</div>
<div id="service-list">
    <b><h4><span class="directory">OTHER</span> <span class="filters">SERVICES</span></h4></b>

    <p><i class="icon-play"></i>Lorem ipsum dolor sit amet, consectetur sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet.</p>
    <p><i class="icon-play"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet.</p>
    <p><i class="icon-play"></i>Lorem ipsum dolor sit amet, consectetur sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet.</p>
    <p><i class="icon-play"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet.</p>

    <!-- <ul>
        <?php foreach($service_rs as $service) { ?>
        <li><i class="icon-play"></i><a href="<?php echo base_url();?>details/<?php echo $service->seotitle;?>"><?php echo $service->svname;?></a></li>
    <?php } ?>        
    </ul>    -->                   
</div>  
</div><!-- End col-md-3 --> 
<div class="col-md-9"> 
     <div id="">
    <div class="carousel_testimonials">    
     <?php foreach($directory_top_ads as $directory_top_ads_rs) { ?> 
    <div class="box_overlays">        
      <img src="<?php echo base_url();?>assets/backend/img/directory-top-ads/<?php echo $directory_top_ads_rs->image;?>" alt="advertisment_image" class="img-responsive" id="directory-adds-image">             
    </div><!-- End box_overlay -->
<?php } ?>            
 </div><!-- End carousel_testimonials -->
</div>
    <?php
    foreach($state_choose as $state_choose_view){
        $images=$state_choose_view->profile_picture;
        ?>           
        <div class="row" id="directory-details">
            <div class="col-md-5">
                 <?php if($images):?>
                <p>
                    <a href="<?php echo base_url();?>directory-details/<?php echo $state_choose_view->id;?>"><img src="<?php echo base_url();?>assets/backend/img/profile_image/<?php echo $state_choose_view->profile_picture;?>" alt="profile-image" class="img-responsive" data-retina="true"></a>
                </p>
                <?php else:?> 
                       <p>
                  <a href="<?php echo base_url();?>directory-details/<?php echo $state_choose_view->id;?>"><img src="<?php echo base_url();?>assets/frontend/img/demo-profile.jpg" alt="profile-image" class="img-responsive" data-retina="true"></a>
                </p>
            <?php endif;?>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-9">
               <span class="company_title"><b><?php echo $state_choose_view->company_name;?></b></span><br>
               <span class="vendor"><i class="icon-user" id="icon"></i><?php echo $state_choose_view->first_name;?> <?php echo $state_choose_view->last_name;?></span><br>
                <span class="vendor"><i class="icon-home" id="icon"></i><b>Home Location:</b> <?php echo $state_choose_view->city;?> : <?php echo $state_choose_view->street;?></span><br>
                <span class="vendor"><b><i class="icon-location-7" id="icon"></i>destination location:</b></span><br>                
                <?php echo $state_choose_view->delivery_state;?><br>
                <a href="<?php echo base_url();?>directory-details/<?php echo $state_choose_view->id;?>" class="btn_1">View Details</a>
                <i class="icon-star" id="star"></i>
                <i class="icon-star" id="star"></i>
                <i class="icon-star" id="star"></i>
                <i class="icon-star" id="star"></i>
                <i class="icon-star-half" id="star"></i>  
                </div>  
                <div class="col-md-3">
                    <div class="verification"><img src="<?php echo base_url();?>assets/frontend/img/Verification.png" alt="service-image" class="img-responsive" data-retina="true" width="75"></div>                    
                </div>                      
            </div>                        
            </div>
        </div><!-- End row -->
        <?php
    }
    ?>
</div><!-- End col-md-9 -->             
</div><!-- End row -->
</div><!-- End container -->
  </main><!-- End main -->