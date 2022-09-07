<?php foreach($popup_fatch as $popup_fatch_rs) { ?>
  <div id="popupmain">
    <div id="popup" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(<?php echo base_url();?>assets/backend/img/pop-up-image/<?php echo $popup_fatch_rs->pop_up_image;?>);">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h2 id="headings"><?php echo $popup_fatch_rs->pop_up_title;?></h2>
      <p id="para"><?php echo $popup_fatch_rs->pop_up_description;?></p>    
    </div>  
  </div>
<?php } ?>
<?php
foreach($banner_rs as $banner_rs_view){
  ?>
  <div id="booking_container" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url(<?php echo base_url();?>assets/backend/img/bannerimg/<?php echo $banner_rs_view->bnrimg;?>)">
    <div class="container">
      <div class="row">

        <div class="col-md-8">
          <div class="intro_title_booking">
            <?php echo $banner_rs_view->bnrtil;?>
            <?php echo $banner_rs_view->bannerdes;?>
          </div>
        </div>     
        <div class="col-md-4">
          <div id="book">
            <h3>Quick contact</h3>
            <div id="message-booking"></div>
            <form role="form" method="post" action="<?php echo base_url();?>home-contact-form-data" id="check_avail" autocomplete="off">
              <div class="row">
                <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="name_contact" id="name_booking" placeholder="Name and Last name" required>
                  </div>
                </div>              
                <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email_contact" id="email_booking" placeholder="Your email" required>
                  </div>
                </div>
                <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <label>Telephone</label>
                    <input type="number" class="form-control" name="phone_contact" id="phone_booking" placeholder="Telephone" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Your request</label>
                    <textarea rows="5" id="message_booking" name="message_contact" required class="form-control" style="height:100px;"></textarea>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    <input type="submit" value="Submit" class="btn_full" id="submit-booking">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div><!-- End row -->
    </div><!-- End container -->
  </div><!-- End Booking container -->
  <?php
}
?>

<main>
  <div id="feat_home">
    <div class="container margin_60">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="box_feat">
            <div class="row">
              <div class="col-md-4">
                <i class="icon-users"></i> 
              </div>
              <div class="col-md-8" id="space">         
               <h3><b><?php 
               $this->db->where("status='1'");
               $total=$this->db->get('vehicle_db');
               echo $total->num_rows();

               ?>
                 
               </b></h3> 
               <p>
                Total Vehicle
              </p>
            </div>   
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="box_feat">
          <div class="row">
            <div class="col-md-4">
              <i class="icon-users"></i> 
            </div>
            <div class="col-md-8" id="space">         
             <h3><b><?php
             $this->db->where("user_type='vendor'");
             $total_vendor=$this->db->get('vendor_registers_db');
             echo $total_vendor->num_rows();

           ?></b></h3> 
           <p>
            Total Vendor
          </p>
        </div>   
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-3">
    <div class="box_feat">
      <div class="row">
        <div class="col-md-4">
          <i class="icon-users"></i> 
        </div>
        <div class="col-md-8" id="space">         
         <h3><b><?php $this->db->where("user_type='user'");
         $total_user=$this->db->get('vendor_registers_db');
         echo $total_user->num_rows();
       ?></b></h3> 
       <p>
        Total Customer
      </p>
    </div>   
  </div>
</div>
</div>
<div class="col-md-3 col-sm-3">
  <div class="box_feat">
    <div class="row">
      <div class="col-md-4">
        <i class="icon-users"></i> 
      </div>
      <div class="col-md-8" id="space">         
       <h3><b><?php  $customer_post_add=$this->db->get('customer_post_add');
       echo $customer_post_add->num_rows();
     ?></b></h3> 
     <p>
       Customer Requirement
     </p>
   </div>   
 </div>
</div>
</div>
</div><!-- End row -->       
</div>
</div><!-- End feat home -->
<div class="container margin_60">
 <div class="row">
  <div class="col-md-4">
    <?php foreach($about_us as $about_us_rs) { ?>
      <h4><?php echo $about_us_rs->homeabouttil;?></h4>
      <?php echo $about_us_rs->homeaboutdes;?>
    <?php } ?>
  </div>
  <div class="col-md-4">
    <?php foreach($mission as $mission_rs) { ?>
      <h4><?php echo $mission_rs->mission_title;?></h4>
      <?php echo $mission_rs->mission_description;?>
    <?php } ?>
  </div>
  <div class="col-md-4">
    <div id="news">   
     <h4><span style="color:#00254a;">News</span><span style="color:#ff9900;"> & </span><span style="color:#00254a;">Announcement</span></h4>
     <div class="carousel_testimonials">
       <?php foreach($announcement as $announcement_rs) { ?>   
        <div class="box_overlays">        
          <?php echo $announcement_rs->announcement_des;?>                
        </div><!-- End box_overlay -->
      <?php } ?>
      <!-- End box_overlay -->           
    </div><!-- End carousel_testimonials -->
  </div>
</div>
</div><!-- End row -->
<hr>

<div class="row">
  <h2 class="text-center"><b><span class="customer">Customer</span> Requirement</b></h2>
  <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
   <table class="table table-striped table-bordered table-condensed">
    <thead>
      <tr>
        <th id="colors">Date Of Requirement</th>
        <th id="customer_table">Customer Name</th>
        <th id="colors">Weight in Ton</th>
        <th id="customer_table">From</th>
        <th id="colors">Destined Location</th>
        <th id="customer_table">Matarial Type</th>
        <th id="colors">View No.</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customer_post as $customer_post_rs) { ?>
        <tr>
          <td><?php echo $customer_post_rs->date;?></td>
          <td><?php 
          $customer=$customer_post_rs->customer_id;
          $this->db->where("id='$customer'");
          $customers=$this->db->get('vendor_registers_db');
          $cus_post=$customers->result();
          foreach($cus_post as $cus_post_rs){
            echo $cus_post_rs->first_name;
          } ?>           
        </td>
        <td><?php echo $customer_post_rs->total_weight;?> </td>
        <td><?php echo $customer_post_rs->source_city;?></td>
        <td><?php echo $customer_post_rs->destination_name;?></td>
        <td><?php echo $customer_post_rs->material_type;?></td>        
        <td><a href="<?php echo base_url();?>contact-number-view/<?php echo $customer_post_rs->id;?>" class="btn btn-warning">View Contact</a></td>
      </tr>
    <?php } ?>                                   
  </tbody>
   <tfoot>
      <tr>
        <th id="colors">Date Of Requirement</th>
        <th id="customer_table">Customer Name</th>
        <th id="colors">Weight in Ton</th>
        <th id="customer_table">From</th>
        <th id="colors">Destined Location</th>
        <th id="customer_table">Matarial Type</th>
        <th id="colors">View No.</th>
      </tr>
    </tfoot>
</table>                             
</div>
 
    <div class="col-md-12 text-right" id="view-more">
  <a href="<?php echo base_url();?>customer-requirement" class="btn btn-warning">View More</a>
  </div>
 
</div>

<div class="row">
  <div class="text-left">
    <h2>Transport Services Providers</h2>       
  </div>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
      foreach($directory as $directory_rs){
        $vendor_img=$directory_rs->profile_picture;
        ?>     
        <div class="swiper-slide">
          <?php if($vendor_img):?>
            <p><a href="<?php echo base_url();?>directory-details/<?php echo $directory_rs->id;?>" id="swiper_color"><img src="<?php echo base_url();?>assets/backend/img/profile_image/<?php echo $directory_rs->profile_picture;?>" alt="profile-image" class="img-responsive"> </p>
            <?php else:?> 
             <p><a href="<?php echo base_url();?>directory-details/<?php echo $directory_rs->id;?>" id="swiper_color"><img src="<?php echo base_url();?>assets/frontend/img/demo-profile.jpg" alt="profile-image" class="img-responsive"> 
             <?php endif;?>
             <!-- <i class="icon-star text-dark"></i> -->
       <!--  <i class="icon-star"></i>
        <i class="icon-star"></i>
        <i class="icon-star"></i>
        <i class="icon-star-half"></i> --><br>
        <span class="vendor"><i class="icon-user" id="icon"></i><?php echo $directory_rs->first_name;?> <?php echo $directory_rs->last_name;?></span><br>
        <span class="vendor"><i class="icon-home" id="icon"></i><b>Home Location : </b> <?php echo $directory_rs->city;?> : <?php echo $directory_rs->street;?></span><br>
        <span class="vendor"><b><i class="icon-location-7" id="icon"></i>destination location:</b></span><br>                
        <?php echo $directory_rs->delivery_state;?><br>
      </a></p>
    </div>
    <?php
  }
  ?>   
</div>
<div class="swiper-pagination" id="swipers"></div>
</div> 
</div>         
</div>


<div id="get_quote">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h3>Highway cargo Strive for Excellence</h3>
      </div>
      <div class="col-md-3">
        <a href="<?php echo base_url();?>about" class="btn_quote">Read more</a>
      </div>
    </div><!-- End row -->
  </div><!-- End container -->
</div><!-- End Get quote -->


<div class="container margin_60">
  <div class="row">
    <h2>Service</h2>
    <?php
    $coint = 0 ; 
    foreach($service_rs as $service_rs_view){
     ++$coint;
     if($coint <= 3){ 
      ?>
      <div class="col-md-4 col-sm-4">
        <a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>"><img src="<?php echo base_url();?>assets/backend/img/serviceimg/<?php echo $service_rs_view->svimg;?>" class="img-responsive border">
        </a>
        <h3><a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>"><?php echo $service_rs_view->svname;?></a></h3>
        <p>
         <?php echo $service_rs_view->svshortdes;?>
         <br><a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>" class="link_normal">Read more</a>
       </p>
     </div>
     <?php
   }
 }
 ?>           
</div><!-- End row -->
</div><!-- End container -->      



<div id="feat_home">
  <div class="container margin_60">      
    <h2 class="text-center">Lorem ipsum dolor sit amet</h2>
    <div class="phone_feat">
      <a href="tel:+911234567891">Call Us +91 123 456 7891</a>
    </div>
  </div>
</div><!-- End feat home -->
<div class="bg_content magnific">
  <div>
    <h3>Lorem ipsum dolor sit amet</h3>
    <p>
      Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
    </p>

  </div>
</div><!-- End bg_content -->

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
  $(document).ready(function(){
    setTimeout(function(){
      $('#popupmain').css('display','block');
    },2000);
  });
  $('.close').click(function(){
    $('#popupmain').css('display','none');

  });
</script> 

