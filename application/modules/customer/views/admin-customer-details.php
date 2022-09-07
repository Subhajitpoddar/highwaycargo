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
                    <div class="col-md-6"> <h2 class="h3 mb-2 text-gray-800">Admin Customer List Details Dashboard</h2></div>
                        <div class="col-md-6 text-right">               
                       <p class="p mb-0 text-gray-800"><span><a href="<?php echo base_url();?>admin-dashboard">Dashboard</a> / Customer List</span></p>
                        </div> 
                        </div>                       
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <ul class="nav nav-pills ml-auto p-2">                 
                          <li class="nav-item">
                            <a class="nav-link btn btn-success" href="<?php echo base_url(); ?>admin-customer-export"><i class="fas fa-download"> Export</i></a>
                          </li>
                        </ul>                        
                        <div class="card-body">
                            <div class="table-responsive">                         
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                             <th>Sl. No</th>
                                            <th>User Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>        
                        <th>Email</th>
                        <th>Phone No</th>                      
                        <th>City</th>
                        <th>Street</th>
                        <th>State</th>
                        <th>Postal Code</th>                        
                        <th>Password</th>
                        <th>View</th>                       
                        <th>Delete</th>                                         
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sl. No</th>
                                            <th>User Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>        
                        <th>Email</th>
                        <th>Phone No</th>        
                       
                        <th>City</th>
                        <th>Street</th>
                        <th>State</th>
                        <th>Postal Code</th>                      
                        <th>Password</th>
                        <th>View</th>                        
                        <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                          $sl=1;
                                                                             
                    foreach($customer_details as $customer_details_view)


                    {

                        ?>
                        <tr>
                            <td><?php echo $sl;?></td>
                           <td><?php echo $customer_details_view->user_type;?></td>
                           <td><?php echo $customer_details_view->first_name;?></td>
                           <td><?php echo $customer_details_view->last_name;?></td>
                           <td><?php echo $customer_details_view->email;?></td>       
                           <td><?php echo $customer_details_view->phone;?></td>                         
                           <td><?php echo $customer_details_view->city;?></td>
                           <td><?php echo $customer_details_view->street;?></td>             
                           <td><?php echo $customer_details_view->state;?></td>
                           <td><?php echo $customer_details_view->postal_code;?></td>                        
                           <td><?php echo $customer_details_view->password_quote;?></td>                 
                           <td><a href="<?php echo base_url();?>admin-vendor-details-view/<?php echo $customer_details_view->id;?>" target="_blank" class="btn btn-primary">View</a></td>                          
                           <td><a href="<?php echo base_url();?>admin-customer-delete/<?php echo $customer_details_view->id;?>" onclick="return confirm('Are You Sure?');" class="btn btn-danger">Delete</a></td>
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