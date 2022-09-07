 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Customer Number</h1>
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
                    foreach($contact_number as $contact_number_view){
                    ?>
                    <?php echo $contact_number_view->description;?>
                   
                   
                    <h3></h3>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    View Number
                </button>

                <!-- The Modal -->
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
                        $vendor_id=$this->session->userdata('vendor_id');
                        ?>
                        <?php
                        if($vendor_id){
                            ?>  
                            Customer Mobile No :-<a href="tel:<?php echo $contact_number_view->mobile_number;?>"><?php echo $contact_number_view->mobile_number;?></a>                 
                            
                            <?php
                        }
                         else
                         {
                        ?>                 
                            <p><b>Vendor Login</b></p>
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
                    <?php
                }
                    ?>               
                </div><!-- End col-md-9 -->                
                <div class="col-md-4">
                     <div class="box_style_2">                        
                        <?php foreach($advertisrment as $advertisrment_rs) { ?>
          <h4><?php echo $advertisrment_rs->advertisement_name;?></h4>
          <p><img src="<?php echo base_url();?>assets/backend/img/advertisement-img/<?php echo $advertisrment_rs->advertisement_image;?>" alt="vendor-advertisement" class="img-responsive"></p>
        <?php } ?>                          
                    </div>
                </div><!-- End col-md-3 -->
            </div><!-- End row -->            
        </div><!-- End container -->
  </main><!-- End main -->