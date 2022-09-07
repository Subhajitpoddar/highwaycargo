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
                        <h1 class="h3 mb-0 text-gray-800">Vendor Register Full Details Dashboard</h1>                       
                        
                    </div>

                    <!-- Content Row -->
                  
                   <div class="row border rounded shadow-lg p-3">
                    <?php
                    foreach($vendor_details as $vendor_details_rs){
                    ?>
                        <div class="col-md-6">
                            <h4><b>User Type  :</b> <?php echo $vendor_details_rs->user_type;?></h4>
                            <p><b>First Name :</b> <?php echo $vendor_details_rs->first_name;?></p>
                            <p><b>Last Name :</b> <?php echo $vendor_details_rs->last_name;?></p>
                            <p><b>Email :</b> <?php echo $vendor_details_rs->email;?></p>
                            <p><b>Phone No :</b> <?php echo $vendor_details_rs->phone;?></p>
                            <p><b>Company Name :</b> <?php echo $vendor_details_rs->company_name;?></p>
                            <p><b>PAN Card Image : </b><a href="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_details_rs->pan_file;?>" target="_blank"><img src="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_details_rs->pan_file;?>" style="height:100px;" class="text-center"></a></p>                    
                        </div>
                        <div class="col-md-6">
                            <p><b>City : </b><?php echo $vendor_details_rs->city;?></p>
                            <p><b>Street :</b> <?php echo $vendor_details_rs->street;?></p>
                            <p><b>State : </b><?php echo $vendor_details_rs->state;?></p>
                            <p><b>Postal Code : </b><?php echo $vendor_details_rs->postal_code;?></p>
                            <p><b>Pan Number : </b><?php echo $vendor_details_rs->pan_number;?></p>
                            <p><b>Aahaar Number : </b><?php echo $vendor_details_rs->aahaar_number;?></p>
                            <p><b>Password : </b><?php echo $vendor_details_rs->password_quote;?></p> 
                             <p><b>Aadhaar Card Image :</b> <a href="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_details_rs->aadhaar_file;?>" target="_blank"><img src="<?php echo base_url();?>assets/backend/img/pancardimg/<?php echo $vendor_details_rs->aadhaar_file;?>" style="height:100px;" class="text-center"></a></p>                             
                        </div>
                        <?php
                    }
                        ?>
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