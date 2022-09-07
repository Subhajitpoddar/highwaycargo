 <section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Copyright Policy</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
                </p>
            </div>
        </div>
    </section><!-- End section -->
  
    <main>  
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-9">
                   <?php
                   foreach($copyright_view as $copyright_view_rs){
                   ?>
                    <h3><?php echo $copyright_view_rs->copyright_title;?></h3>
                    <?php echo $copyright_view_rs->copyright_details;?>
                    <?php
                }
                    ?>               
                </div><!-- End col-md-9 -->                
                <div class="col-md-3">
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
  </main><!-- End main -->