<!--Header================================================== -->
  <header>
    <div id="top_line">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 hidden-xs">
            <span id="tag_line"></span>
          </div>
          <div class="col-sm-8">
            <ul id="top_links">
              <li><a href="<?php echo base_url();?>how-it-works">How it works </a></li>
              <li><a href="tel:+911234567891" id="phone_top">+91 123 456 7891</a><span id="opening">Mon - Sat 8.00/18.00</span></li><!--  <li class="hidden-xs"><a href="#">Purchase this template</a></li> -->
            </ul>
          </div>
        </div><!-- End row -->
      </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
      <div class="row">
        <div class="col-xs-3">
          <div id="logo">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/highway-logo.png" width="175" height="35" alt="logo" data-retina="true"></a>
          </div>
        </div>
        <nav class="col-xs-9">
          <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
          <div class="main-menu">
            <div id="header_menu">
              <img src="<?php echo base_url();?>assets/frontend/img/highway-logo.png" width="175" height="35" alt="logo" data-retina="true">
            </div>
            <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
            <ul>
              <li class="submenu">
                <a href="<?php echo base_url();?>" class="show-submenu">Home</a>               
              </li>
               <li><a href="<?php echo base_url();?>about">About us</a></li>
              <li class="submenu">
                <a href="javascript:void(0);" class="show-submenu">Services <i class="icon-down-open-mini"></i></a>
                <ul>
                  <li><a href="<?php echo base_url();?>service">All Service</a></li>
                  <?php
                  foreach($service_rs as $service_rs_view){
                  ?>
                  <li><a href="<?php echo base_url();?>details/<?php echo $service_rs_view->seotitle;?>"><?php echo $service_rs_view->svname;?></a></li>
                  <?php
                }
                  ?>                 
                </ul>
              </li>
              <li><a href="<?php echo base_url();?>directorys">Directory</a></li>             
              <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
              <?php 
              $user_name=$this->session->userdata('user_name');
              $vendor_name=$this->session->userdata('vendor_name');
              if(isset($vendor_name)){
                ?>
                <li><a href="javascript:void(0);" id="buttons" class="show-submenu"><b>Welcome <?php echo  $vendor_name;?></b></a>
                <ul>
                  <li><a href="<?php echo base_url();?>vendor-dashboard">Dashboard</a></li> 
                  <li><a href="<?php echo base_url();?>logout-vendor">Logout</a></li>                               
                </ul>
              </li>
                <?php
              }
              elseif(isset($user_name)){
                ?>
                <li><a href="javascript:void(0);" id="buttons" class="show-submenu"><b>Welcome <?php echo  $user_name;?></b></a>
                <ul>
                  <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                   <li><a href="<?php echo base_url();?>logout">Logout</a></li>                                  
                </ul>
              </li>
                <?php
              }
              else{
              ?>               
              <li><a href="javascript:void(0);" id="buttons" class="show-submenu"><b>login</b></a>
                <ul>
                  <li><a href="<?php echo base_url();?>login">Login</a></li>
                  <li><a href="<?php echo base_url();?>customer">Customer Signup</a></li>
                  <li><a href="<?php echo base_url();?>vendors">Vendor Signup</a></li>                  
                </ul>
              </li>
              <?php
            }
              ?> 
           </ul> 
          </div><!-- End main-menu -->                
        </nav>        
      </div>
    </div><!-- container -->
  </header><!-- End Header