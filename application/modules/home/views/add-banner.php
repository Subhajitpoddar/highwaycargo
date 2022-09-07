<!DOCTYPE html>
<html lang="en">
<!-- head-->
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
                <h1 class="h3 mb-0 text-gray-800">Banner Add</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> View list</a>
                </div>
                <!-- Content Row -->                  
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url();?>admin-bannerdb" method="post" enctype="multipart/form-data"> 
                            <div class="form-group">
                                <label>Banner Titel:</label>
                                <textarea type="text" name="bannertil" class="form-control"></textarea>
                                <script>
                                    CKEDITOR.replace("bannertil");
                                </script>                        
                            </div>                            
                            <div class="form-group">
                                <label>Banner Description:</label>
                                <textarea rows="15" cols="10" name="bannerdes" class="form-control"></textarea>
                                <script>
                                    CKEDITOR.replace("bannerdes");
                                </script>                               
                            </div>
                            <div class="form-group">
                                <label>Banner Image:</label>
                                <input type="file" name="bannerfile" class="form-control">                        
                            </div>
                            <input type="submit" name="submit" value="submit" class="btn btn-primary">                
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