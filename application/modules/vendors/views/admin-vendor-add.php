<!DOCTYPE html>
<html lang="en">
<!--head-->
<?php $this->load->view('common/backend/include/head');?>
<!--head end-->
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
       <?php $this->load->view('common/backend/include/sidebar');?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
              <?php $this->load->view('common/backend/include/topbar');?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Vendor Add Dashboard</h1>
                        <a href="<?php echo base_url();?>admin-vendor-details-dashboard" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">View List</a>
                    </div>
                    <!-- Content Row -->                  
                  <div class="row">
                        <div class="col-md-12 p-3 border rounded shadow-lg">
                        <form  action="<?php echo base_url();?>vendors-register-db" method="POST"  enctype="multipart/form-data">
                    <div class="form_title">
                        <h3><strong><i class="icon-user-8"></i></strong>Personal info</h3>                      
                    </div>
                    <div class="step">
                        <div class="row">
                           <p><input type="hidden" name="user_type" value="vendor"></p>                        
                           <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control required" id="firstname" name="firstname">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control required" id="lastname" name="lastname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control required" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control required" id="phone" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Company Name(optional)</label>
                                <input type="text" class="form-control required" id="company_name" name="company_name">
                            </div>
                        </div>                        
                    </div>
                </div><!--End step -->
                
                <div class="form_title">
                    <h3><strong><i class="icon-location-5"></i></strong>Your address</h3>                       
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_quote" name="city" class="form-control required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Street line</label>
                                <input type="text" id="street_quote" name="street" class="form-control required">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" id="state_quote" name="states" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="text" id="postal_code_quote" name="postal_code" class="form-control required">
                            </div>
                        </div>
                    </div>
                </div><!--End step -->
                <div class="form_title">
                    <h3><strong><i class="icon-location-5"></i></strong>Your Location</h3>                       
                </div>
                <div class="step">
                    <div class="row">                       
                        
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="assam">Assam
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="bihar"> Bihar
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="chhattisgarh"> Chhattisgarh
      </label>
    </div>
                        </div>
                         <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="state[]" value="andhra"> Andhra P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="goa"> Goa
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="gujarat"> Gujarat
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="haryana"> Haryana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="himachal"> Himachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="arunachal"> Arunachal P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="jharkhand"> Jharkhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="karnataka"> Karnataka
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="kerala"> Kerala
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="madhya"> Madhya P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="maharashtra"> Maharashtra
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="manipur"> Manipur
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="meghalaya"> Meghalaya
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="mizoram"> Mizoram
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="nagaland"> Nagaland
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="odisha"> Odisha
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="panjab"> Punjab
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="rajasthan"> Rajasthan
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="sikkim"> Sikkim
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="tamilnadu"> Tamil Nadu
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="telangana"> Telangana
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="tripura"> Tripura
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="uttar"> Uttar P
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="uttarakhand"> Uttarakhand
      </label>
    </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="state[]" value="westbengal"> West Bengal
      </label>
    </div>
                        </div>
                        
    
            </div>               
        </div><!--End step -->

        <div class="form_title">
            <h3><strong><i class="icon-calendar-empty"></i></strong>Documents Upload</h3>                        
        </div>
        <div class="step">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>PAN Card No</label>
                        <input type="text" id="pan_number" name="pan_number" class="form-control required">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>PAN Card Upload</label>
                        <input type="file" id="pan_file" name="pan_file" class="form-control required">
                    </div>
                </div>
            </div><!--End row -->

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card No</label>
                        <input type="text" id="aahaar_number" name="aahaar_number" class="form-control required">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Aadhaar Card Upload</label>
                        <input type="file" id="aadhaar_file" name="aadhaar_file" class="form-control required">
                    </div>
                </div>
            </div><!--End row -->
        </div><!--End step -->
        <div class="form_title">
            <h3><strong><i class="icon-lock"></i></strong>Password</h3>                       
        </div> 
        <div class="step">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text"  name="password_quote" id="password_quote" class="form-control required">
                        <span id = "message1" style="color:red"> </span> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text"  name="confirm_quote" id="confirm_quote" class="form-control required">
                        <span id = "message2" style="color:red"></span>
                    </div>
                </div>  
            </div>              
        </div><!--End step -->           


        <div class="step">                       
            <button type="submit"  class="btn btn-primary" id="submit_button_new">Submit</button>
        </div><!--End step -->

    </form>
                        </div>                        
                    </div>         
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php $this->load->view('common/backend/include/logout');?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/backend/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>assets/backend/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>assets/backend/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url();?>assets/backend/js/demo/chart-pie-demo.js"></script>
</body>
</html>