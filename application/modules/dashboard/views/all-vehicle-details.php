<!DOCTYPE html>
<html lang="en">
<!-- head-->
<?php $this->load->view('common/backend/include/head');?>
<!--head end-->
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->load->view('common/backend/include/sidebar');?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php $this->load->view('common/backend/include/topbar');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-md-6"> <h2 class="h3 mb-2 text-gray-800">Admin All Vehicle List  Dashboard</h2></div>
                        <div class="col-md-6 text-right">                         

                            <p class="p mb-0 text-gray-800"><a href="<?php echo base_url(); ?>admin-dashboard">Dashboard</a> / <span><a href="<?php echo base_url(); ?>admin-vendor-details-dashboard">Vendor list</a> / Vehicle List</span></p>                                           
                        </div> 
                    </div>                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <ul class="nav nav-pills ml-auto p-2">                 
                          <li class="nav-item">
                            <a class="nav-link btn btn-success" href="<?php echo base_url(); ?>admin-all-vehicle-export"><i class="fas fa-download"> Export</i></a>
                        </li>
                    </ul>                       
                    <div class="card-body">                            
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S. No</th> 
                                        <th>Vendor Name</th> 
                                        <th>Vehicle Name</th>
                                        <th>Vehicle Body</th>
                                        <th>Vehicle Number</th>
                                        <th>Driver’s Aadhaar Card</th>
                                        <th>Driver’s license</th>
                                        <th>View Profile</th> 
                                        <th>Delete</th>                                                      
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S. No</th> 
                                        <th>Vendor Name</th> 
                                        <th>Vehicle Name</th>
                                        <th>Vehicle Body</th>
                                        <th>Vehicle Number</th>
                                        <th>Driver’s Aadhaar Card</th>
                                        <th>Driver’s license</th> 
                                        <th>View Profile</th> 
                                        <th>Delete</th>                                                         
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $sl=1;
                                    foreach($vehicle_details as $vehicle_details_rs){
                                        ?>
                                        <tr>
                                            <td><?php echo $sl; ?></td>
                                          <td><?php 
                                          $vendor_log_id=$vehicle_details_rs->vendor_login_id;

                                          foreach($vendor_list as $vendor_list_rs){
                                            $vendor_id=$vendor_id=$vendor_list_rs->id;
                                            if($vendor_log_id==$vendor_id){
                                                echo $vendor_list_rs->first_name;
                                            }

                                          }



                                         ?></td>
                                            <td><?php echo $vehicle_details_rs->vehicle_name;?></td>
                                            <td><?php echo $vehicle_details_rs->vendor_body;?></td>                                       
                                            <td><?php echo $vehicle_details_rs->vehicle_number;?></td>
                                            <td><a href="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_details_rs->aadhaarfile;?>" target="_blank"><img src="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_details_rs->aadhaarfile;?>" style="height:100px;" class="text-center"></a></td> 
                                            <td><a href="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_details_rs->driverfile;?>" target="_blank"><img src="<?php echo base_url();?>assets/backend/img/driver-aadhaar/<?php echo $vehicle_details_rs->driverfile;?>" style="height:100px;" class="text-center"></td>
                                             <td><a href="<?php echo base_url();?>admin-vendor-details-view/<?php echo $vehicle_details_rs->vendor_login_id;?>" target="_blank" class="btn btn-primary">View</a></td>
                                              <td><a href="<?php echo base_url();?>admin-vehicle-delete/<?php echo $vehicle_details_rs->id;?>"  class="btn btn-danger">Delete</a></td>                                            
                                        </tr>
                                        <?php
                                        $sl++;
                                    }
                                    ?>                                       
                                </tbody>
                            </table>
                        </div>
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
<script src="<?php echo base_url();?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?php echo base_url();?>assets/backend/js/demo/datatables-demo.js"></script>
</body>
</html>