<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Highway Cargo - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/backend/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

</head>

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
                        <h1 class="h3 mb-0 text-gray-800">Admin About Us Edit Dashboard</h1>
                        <a href="<?php echo base_url();?>admin-advertisements-view" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> View List</a>
                    </div>

                    <!-- Content Row -->
                  
                    <div class="row">
                        <div class="col-md-12">
                   <?php foreach($advertisement_edit as $advertisement_edit_rs)
                            {
                                ?>
                        <form action="<?php echo base_url();?>admin-advertisement-upd" method="post" enctype="multipart/form-data">
                    <p><input type="hidden" name="id" value="<?php echo $advertisement_edit_rs->id;?>"></p>
                            <div class="form-group">
                                <label>Advertisement Title:</label>
                                <input type="text" name="advertisementtitle" class="form-control" value="<?php echo $advertisement_edit_rs->advertisement_name;?>">                                
                            </div> 
                             <div class="form-group">
                                <label>Advertisement Upload:</label>
                             <td><img src="<?php echo base_url();?>assets/backend/img/advertisement-img/<?php echo $advertisement_edit_rs->advertisement_image;?>" style="height:100px;" class="text-center"></td><br> 
                             <span class="text-danger">Note:-* width 400 pixels and height 533 pixels  and Maximum size 100 kb File uplaod  </span>  <br> 
                                <input type="file" name="advertisementfile" class="form-control">                                
                            </div>                                           
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">                            
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