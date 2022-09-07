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
                    <div class="col-md-6"> <h2 class="h3 mb-2 text-gray-800">Admin Service List Dashboard</h2></div>
                    <div class="col-md-6 text-right">
                        <p class="p mb-0 text-gray-800"><a href="<?php echo base_url(); ?>admin-dashboard">Dashboard</a> / <span>Service List</span></p>                                           
                    </div> 
                </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">    
                <ul class="nav nav-pills ml-auto p-2">
                     <li class="nav-item mr-2">
                        <a class="nav-link btn btn-primary" href="<?php echo base_url();?>admin-servicepg">Add List</a>
                    </li>                 
                  <!--   <li class="nav-item">
                            <a class="nav-link btn btn-success" href="<?php echo base_url(); ?>"><i class="fas fa-download"> Export</i></a>
                          </li> -->
                        </ul>                      
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Service Title</th>
                                        <th>Service Seo Title</th>
                                        <th>Service Description</th>
                                        <th>Service Short Description</th>
                                        <th>Service Image</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                 <tr>
                                    <th>Service Title</th>
                                    <th>Service Seo Title</th>
                                    <th>Service Description</th>
                                    <th>Service Short Description</th>
                                    <th>Service Image</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               <?php
                               foreach($row as $huy){
                                ?>
                                <tr>
                                    <td><?php echo $huy->svname;?></td>
                                    <td><?php echo $huy->seotitle;?></td>
                                    <td><?php echo $huy->svdescrb;?></td>
                                    <td><?php echo $huy->svshortdes;?></td>
                                    <td><img src="<?php echo base_url();?>assets/backend/img/serviceimg/<?php echo $huy->svimg;?>" style="height:100px;" class="text-center"></td>
                                    <td><a href="<?php echo base_url();?>admin-servicedel/<?php echo $huy->id;?>" class="btn btn-danger" onclick="return confirm('Are you Sure?');">Delete</a></td>
                                    <td><a href="<?php echo base_url();?>admin-serviceedit/<?php echo $huy->id;?>" class="btn btn-primary">Edit</a></td>
                                </tr>
                                <?php
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