 <section id="sub_header">
    <div class="container">
        <div class="main_title">
            <h1>Directory Details</h1>
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
                foreach($directory_detsils_rs as $directory_detsils_rs_view){
                   $images=$directory_detsils_rs_view->profile_picture;
                   ?>  
                   <?php if($images):?>                 
                     <p><img src="<?php echo base_url();?>assets/backend/img/profile_image/<?php echo $directory_detsils_rs_view->profile_picture;?>" alt="service-image" class="img-responsive border"></p>
                 <?php else:?> 
                     <p>
                        <img src="<?php echo base_url();?>assets/frontend/img/demo-profile.jpg" alt="service-image" class="img-responsive border">
                    </p>
                <?php endif;?>
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="company_title"><?php echo $directory_detsils_rs_view->company_name;?></h3>
                        <span class="vendor"><i class="icon-user" id="icon"></i><?php echo $directory_detsils_rs_view->first_name;?> <?php echo $directory_detsils_rs_view->last_name;?></span><br>
                        <span class="vendor"><i class="icon-home" id="icon"></i><b>Home Location :</b> <?php echo $directory_detsils_rs_view->city;?> : <?php echo $directory_detsils_rs_view->street;?></span><br>
                        <span class="vendor"><b><i class="icon-location-7" id="icon"></i>destination location : </b></span>                
                        <?php echo $directory_detsils_rs_view->delivery_state;?><br>
                    </div>
                    <div class="col-md-3">
                        <div><img src="<?php echo base_url();?>assets/frontend/img/Verification.png" alt="service-image" class="img-responsive" data-retina="true" width="75"></div>                    
                    </div>
                </div>    
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Vendor Number</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                        <?php
                        $user_id=$this->session->userdata('user_id');

                        ?>
                        <?php
                        if($user_id){
                           $directory_id=$directory_detsils_rs_view->id;
                           $vendor_dahboard=array(
                            'user_id'=>$user_id,
                            'vendor_id'=>$directory_id
                        ); 
                           $this->db->insert('customer_details_for_vendor_deasboard',$vendor_dahboard);   

                           ?>
                           <?php echo $directory_detsils_rs_view->phone;?><br>
                           <?php
                       }
                       else
                       {
                        ?>                 
                        <p><b>Customer Login </b></p>
                        <a href="<?php echo base_url();?>login">login</a>
                        <?php
                    }
                    ?>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>                     
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" id="number_view" data-toggle="modal" data-target="#myModal">
    View Details
</button>
<p><?php echo $directory_detsils_rs_view->descriptions;?></p>
<!-- The Modal -->


<div id="comments">
   
    <?php $this->load->view('directorys/reating');?>       
       </div><!-- End Comments -->                
       <?php
   }
   ?>                 
</div><!-- End col-md-9 -->                
<div class="col-md-3">            
                    <!-- <div class="quote_banner">
                        <a href="">Need a quotation?</a>
                    </div> -->
                    <div class="carousel_testimonials">    
                        <?php foreach($diractory_ads as $diractory_ads_rs) { ?>
                            <div class="box_overlays">        
                              <img src="<?php echo base_url();?>assets/backend/img/directory-details-ads/<?php echo $diractory_ads_rs->image;?>" alt="advertisment_image" class="img-responsive" id="directory-adds-image">             
                          </div><!-- End box_overlay -->
                      <?php } ?>             
                  </div><!-- End carousel_testimonials -->
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
</div><!-- End row -->
</div><!-- End container -->
</main><!-- End main -->

<footer id="home-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
       <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/footer_img.png" width="175" height="35" alt="footer_logo" data-retina="true" id="logo_footer"></a>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
     </div>
     <div class="col-md-3 col-sm-3">
      <h3>About Company</h3>
      <ul>
        <li><a href="<?php echo base_url();?>about">About us</a></li>                                   
        <li><a href="<?php echo base_url();?>service">Service</a></li>    
        <li><a href="<?php echo base_url();?>directorys">Directory</a></li> 
        <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>                   
      </ul>
    </div>
    <div class="col-md-3 col-sm-3">
      <h3>Policy Info</h3>
      <ul>            
        <li><a href="<?php echo base_url();?>faq">FAQ</a></li>                    
        <li><a href="<?php echo base_url();?>terms-of-service">Terms of Service</a></li> 
        <li><a href="<?php echo base_url();?>privacy-policy">Privacy Policy</a></li>                   
        <li><a href="<?php echo base_url();?>disclaimer">Disclaimer</a></li>
        <li><a href="<?php echo base_url();?>copyright">Copyright</a></li>    
        <li><a href="<?php echo base_url();?>blog">Blog</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-3" id="contact_bg">
      <h3>Contacts</h3>
      <ul id="contact_details_footer">
        <li id="address_footer">Lorem Ipsum is simply dummy text of the printing and typesetting</li>
        <li id="phone_footer"><a href="tel:+911234567891">+91 123 456 7891</a></li>
        <li id="email_footer"><a href="mailto:info@highwaycargo.com">info@highwaycargo.com</a></li>
      </ul>
    </div>
  </div><!-- End row -->  
  <div id="social_footer">
    <ul>
      <li><a href=""><i class="icon-facebook"></i></a></li>
      <li><a href=""><i class="icon-twitter"></i></a></li>          
    </ul>
  </div>
</div><!-- End container -->
<div id="copy">
  <div class="container">
    <div class="col-md-6">
     © Copyright 2022 | Highway Cargo 
   </div>
   <div class="col-md-6">
    Site Supported By <a href="https://www.ufxstudio.com/">Universal FX Studio</a>
  </div>
</div>
</div><!-- End copy -->
</footer><!-- End footer -->

<script>
  function commentForm(ev){
    $.ajax({
      url: '<?php echo base_url();?>directory-comments-data',
      type: 'POST',
      data:$("#comment").serialize(),
      success:function(){
        document.getElementById("comment").reset();
            // $("#msg").html("Your review under observation. It will be updated soon. Thank You for giving your feedback.");
            alert("Comment post Successfully!");
        }
    });
    return false;
}
</script> 
<script>
    const stars= document.querySelectorAll('.icon-star-1');
    const output= document.querySelector('.output');
    // console.log(stars);
    for(x=0;x<stars.length;x++){
        stars[x].starValue = (x+1);
    //     stars[x].addEventListener('click',function(){
    //     console.log("i am clicked");
    // })
    ["click", "mouseover", "mouseout"].forEach(function(e){
        stars[x].addEventListener(e,showRating);
    })   

    }

     function showRating(e){
        let type= e.type;
        // console.log(type);
        let starValue = this.starValue;
        // console.log(starValue);

         if(type ==='click'){
                if(starValue>1){
                   output.innerHTML = "You  rated this " + starValue + " stars. ";
                }
               
            }

        stars.forEach(function(elem, ind){
            if(type ==='click'){
                if(ind< starValue){
                    elem.classList.add("orange");
                }
                else{
                    elem.classList.remove("orange");
                }
            }

            if(type ==='mouseover'){
                if(ind< starValue){
                    elem.classList.add("yellow");
                }
                else{
                    elem.classList.remove("yellow");
                }
            }

             if(type ==='mouseout'){               
                    elem.classList.remove("yellow");                            
            }
        })
    }
    
</script>