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
                <h1 class="h3 mb-0 text-gray-800">Banner Edit</h1>
                <a href="<?php echo base_url();?>admin-bannerview" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> View </a>
            </div>
            <!-- Content Row -->                  
            <div class="row">
                <div class="col-md-12">
                 <?php
                 foreach($row as $jiu){
                    ?>
                    <form action="<?php echo base_url();?>admin-bannerupd" method="post" enctype="multipart/form-data"> 
                        <p><input type="hidden" name="id" value="<?php echo $jiu->id;?>"></p>
                        <div class="form-group">
                            <label>Banner Title:</label>
                            <textarea type="text" name="bannertil" class="form-control"><?php echo $jiu->bnrtil;?></textarea>
                            <script>
                                CKEDITOR.replace("bannertil");
                            </script>                              
                        </div>                      
                        <div class="form-group">
                            <label>Banner Description:</label>
                            <textarea rows="15" cols="20" name="bannerdes" class="form-control"><?php echo $jiu->bannerdes;?></textarea>
                            <script>
                                CKEDITOR.replace("bannerdes");
                            </script>                              
                        </div>
                        <div class="form-group">
                            <label>Banner Image:</label>
                            <td><img src="<?php echo base_url();?>assets/backend/img/bannerimg/<?php echo $jiu->bnrimg;?>" style="height:100px;"></td>   
                            <input type="file" name="bannerfile" class="form-control">  
                             <span class="text-primary">Compress The image ? Click The <a href="https://compressjpg.net/" target="_blank">link -> https://compressjpg.net/</a></span><br>
                                 <span class="text-danger">Note:-* Maximum File size 100 kb File uplaod  </span>  <br>                        
                        </div>
                        <input type="submit" name="submit" value="update" class="btn btn-primary">       
                    </form>
                    <?php 
                }
                ?>
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