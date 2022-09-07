<section id="sub_header">
    <div class="container">
      <div class="main_title">
        <h1>About us</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
        </p>
      </div>
    </div>
  </section><!-- End section -->

  <main>
    <div class="container margin_60">
      <?php
      foreach($aboutus as $aboutus_rs){
      ?>
      <div id="intro">        
      <?php echo $aboutus_rs->aboutname;?>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-12">
          <?php echo $aboutus_rs->aboutdes;?>
        </div>
        <div class="col-sm-6">
          <ul class="feat" id="about">
            <li>              
               <?php echo $aboutus_rs->detailsone;?>
            </li>
            <li>              
             <?php echo $aboutus_rs->detailstwo;?>
            </li>
          </ul>
        </div>
         <div class="col-sm-6">
          <ul class="feat" id="about">
            <li>             
               <?php echo $aboutus_rs->detailsthree;?>
            </li>
            <li>            
              <?php echo $aboutus_rs->detailsfour;?>
            </li>
          </ul>
        </div>
      </div><!-- End row -->
      <hr>     
      <?php
    }
      ?>
    </div><!-- End container -->

    <section class="promo_full">
      <div class="promo_full_wp">
        <div>
          <h3>Lorem ipsum dolor<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</span></h3>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <!-- <div class="carousel_testimonials">
                  <div class="box_overlay">
                      <div class="pic">                       
                        <h4>Lorem ipsum</h4>
                      </div>
                      <div class="comment">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit,"
                      </div>
                    </div>               
                  <div>
                    <div class="box_overlay">
                      <div class="pic">                        
                        <h4>Lorem ipsum</h4>
                      </div>
                      <div class="comment">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit,"
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="box_overlay">
                      <div class="pic">                        
                        <h4>Lorem ipsum</h4>
                      </div>
                      <div class="comment">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit,"
                      </div>
                    </div>               
                  </div>
                </div> --><!-- End carousel_testimonials -->                
              </div><!-- End col-md-8 -->
            </div><!-- End row -->
          </div><!-- End container -->
        </div><!-- End promo_full_wp -->
      </div><!-- End promo_full -->
    </section><!-- End section -->
  </main><!-- End main -->