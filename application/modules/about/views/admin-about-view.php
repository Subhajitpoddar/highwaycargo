<!DOCTYPE html>
<html lang="en">
<!--head-->
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
                    <div class="col-md-6"> <h2 class="h3 mb-2 text-gray-800">Admin About Us Dashboard</h2></div>
                        <div class="col-md-6 text-right">
                            <p class="p mb-0 text-gray-800"><a href="<?php echo base_url(); ?>admin-dashboard">Dashboard</a> / <span>About Us</span></p>                                           
                        </div> 
                        </div>
           

                <!-- DataTales Example -->
                <div class="card shadow mb-4">                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                       <th>About Title</th>
                                       <th>About Description</th>
                                       <th>Home About Title</th>  
                                       <th>Home About Description</th>          
                                       <th>About Detail One</th>
                                       <th>About Details Two</th>        
                                       <th>About Details Three</th>
                                       <th>About Details Four</th>
                                       <th>Edit</th>
                                   </tr>
                               </thead>
                               <tfoot>
                                <tr>
                                    <th>Sl. No</th>
                                   <th>About Title</th>
                                   <th>About Description</th>  
                                   <th>Home About Title</th>  
                                   <th>Home About Description</th>         
                                   <th>About Detail One</th>
                                   <th>About Details Two</th>        
                                   <th>About Details Three</th>
                                   <th>About Details Four</th>
                                   <th>Edit</th>
                               </tr>
                           </tfoot>
                           <tbody>
                              <?php
                               $sl=1;
                              foreach($about_us as $about_us_view){

                                ?>
                                <tr>
                                    <td><?php echo $sl;?></td>
                                    <td><?php echo $about_us_view->aboutname;?></td>
                                    <td><?php echo $about_us_view->aboutdes;?></td>
                                    <td><?php echo $about_us_view->homeabouttil;?></td>
                                    <td><?php echo $about_us_view->homeaboutdes;?></td>
                                    <td><?php echo $about_us_view->detailsone;?></td>       
                                    <td><?php echo $about_us_view->detailstwo;?></td>
                                    <td><?php echo $about_us_view->detailsthree;?></td>
                                    <td><?php echo $about_us_view->detailsfour;?></td>             
                                    <td><a href="<?php echo base_url();?>admin-aboutusedit/<?php echo $about_us_view->id;?>" class="btn btn-primary">Edit</a></td>      
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