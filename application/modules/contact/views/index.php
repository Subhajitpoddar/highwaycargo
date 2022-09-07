<section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Contact Us</h1>
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
              <div id="message-contact"></div>
              <!-- action= assets/frontend/assets/contact.php -->
                <form method="post" action="<?php echo base_url();?>contact-form-data" id="contactform">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name_contact" name="name_contact" required>
                            </div>
                        </div>  
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" id="email_contact" name="email_contact" class="form-control" required>
                            </div>
                        </div>                      
                    </div>
                    <div class="row">                        
                        <div class="col-md-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" id="phone_contact" name="phone_contact" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">                            
                            <input type="submit" value="Submit" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
                        </div>
                    </div>
                </form>  
                  <hr>       
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29455.92839068914!2d88.4127355542393!3d22.654122353599174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e6c605d82ff%3A0x1f6779d05c4879ee!2sDum%20Dum%2C%20Kolkata%2C%20West%20Bengal%2C%20India!5e0!3m2!1sen!2sus!4v1649060614216!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><!-- end map-->           
           </div><!-- End col-md-9 -->
                
           <div class="col-md-3">
                  <div class="box_style_2">
                    <?php
                    foreach($contactus as $contactus_rs){
                    ?>
                        <h5>Address</h5>
                            <ul>
                                <li><?php echo $contactus_rs->contactadres;?></li>
                            </ul>
                             <h5>Contacts</h5>
                            <ul>
                               <li><strong>H24 Help center</strong><br><a href="tel://003823932342"><?php echo $contactus_rs->contactnum;?></a></li>                               
                                <li><strong>General info</strong><br><a href="mailto:info@highwaycargo.com"><?php echo $contactus_rs->contactemail;?></a></li>                                
                            </ul>
                            <?php
                        }
                            ?>
                    </div>
                    <!-- <div class="quote_banner"><a href="">Need a quotation?</a></div> -->
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->