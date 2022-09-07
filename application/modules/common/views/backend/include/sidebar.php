 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3"><?php 
        $un=$this->session->userdata('un');
        echo $un;

    ?></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#uiupdates"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Website UI Updates</span>
</a>
<div id="uiupdates" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">                         
   <a class="collapse-item" href="<?php echo base_url();?>admin-aboutusview"> About Us</a>
   <a class="collapse-item" href="<?php echo base_url();?>admin-bannerview"> Banner</a>
   <a class="collapse-item" href="<?php echo base_url();?>admin-blog-view"> Blog</a> 
   <a class="collapse-item" href="<?php echo base_url();?>admin-serviceview">Service</a> 
   <a class="collapse-item" href="<?php echo base_url();?>admin-disclaimer-view">Disclaimer</a>
   <a class="collapse-item" href="<?php echo base_url();?>admin-copyright-view">Copyright Policy</a>  
   <a class="collapse-item" href="<?php echo base_url();?>admin-policy-view">Privacy Policy</a>
   <a class="collapse-item" href="<?php echo base_url();?>admin-howitwork-view">How it Works</a>
   <a class="collapse-item" href="<?php echo base_url();?>admin-missions-view">Mission</a> 
   <a class="collapse-item" href="<?php echo base_url();?>admin-body-type-view">Filter</a>
</div>
</div>
</li>
<hr class="sidebar-divider d-none d-md-block"> 


<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#advertisement"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Advertisement</span>
</a>
<div id="advertisement" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">                     
    <a class="collapse-item" href="<?php echo base_url();?>admin-pop-up-view">Pop Ads</a>   
    <a class="collapse-item" href="<?php echo base_url();?>admin-announcement-view">Notification</a>
    <a class="collapse-item" href="<?php echo base_url();?>admin-customer-ads-view">Customer Ads </a>
    <a class="collapse-item" href="<?php echo base_url();?>admin-advertisements-view"> Vendor Ads</a> 
    <a class="collapse-item" href="<?php echo base_url();?>admin-service-advertisements-view"> Service Ads</a> 
    <a class="collapse-item" href="<?php echo base_url();?>admin-directory-view">Directory Ads </a>
    <a class="collapse-item" href="<?php echo base_url();?>admin-directory-top-view">Directory Top Ads </a> 
    <a class="collapse-item" href="<?php echo base_url();?>admin-directory-details-view">Directory Details Ads </a>    
</div>
</div>
</li>  
<hr class="sidebar-divider d-none d-md-block"> 
<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#usermanagements"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>User Managements</span>
</a>
<div id="usermanagements" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">                     
    <a class="collapse-item" href="<?php echo base_url();?>admin-customer-details"> Customer Data</a>    
    <a class="collapse-item" href="<?php echo base_url();?>admin-vendor-details-dashboard"> Vendor Data</a>
    <a class="collapse-item" href="<?php echo base_url();?>customer-suppot-data-view"> Customer Support</a>
    <a class="collapse-item" href="<?php echo base_url();?>admin-vendor-support-list"> Vendor Support</a>
    <a class="collapse-item" href="<?php echo base_url();?>admin-all-vehicle-details">Vehicle</a>
</div>
</div>
</li>   

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#vendormanagement"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Vendor Management</span>
</a>
<div id="vendormanagement" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">                     
    <a class="collapse-item" href="<?php echo base_url();?>admin-vendor-add"> Vendor Add</a>    
    <a class="collapse-item" href="<?php echo base_url();?>admin-vendor-details-dashboard"> Vendor List</a>                         
</div>
</div>
</li>  
<hr class="sidebar-divider d-none d-md-block"> 
<li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#customer"
    aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Customer</span>
</a>
<div id="customer" class="collapse" aria-labelledby="headingUtilities"
data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">                       
    <a class="collapse-item" href="<?php echo base_url();?>admin-contact-form-list">Customer Support </a>
     <a class="collapse-item" href="<?php echo base_url();?>admin-contact-view">Contact Details</a>  
     <a class="collapse-item" href="<?php echo base_url();?>admin-customer-requirement">Contact Requirement</a>
</div>
</div>
</li>       

<!-- Nav Item - Utilities Collapse Menu -->
  
                      

            
            <li class="nav-item">

            </li>           
            <hr class="sidebar-divider d-none d-md-block">            

            
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url();?>admin-dashboard">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Dashboard</span>
                </a>             
            </li>    

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->                 

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->