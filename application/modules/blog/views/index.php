<section id="sub_header">
        <div class="container">
            <div class="main_title">
                <h1>Blog</h1>
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
                    foreach($blog_rs as $blog_rs_view){
                    ?>
                    <div class="post">
                        <a href="<?php echo base_url();?>blog-details/<?php echo $blog_rs_view->id;?>"><img src="<?php echo base_url();?>assets/backend/img/blogimg/<?php echo $blog_rs_view->blog_img;?>" alt="blog-image" class="img-responsive border"></a>                       
                       <h2><a href="<?php echo base_url();?>blog-details/<?php echo $blog_rs_view->id;?>"><?php echo $blog_rs_view->blog_name;?></a></h2>
                       <?php echo $blog_rs_view->blog_short_des;?> <br><br>                   
                        <a href="<?php echo base_url();?>blog-details/<?php echo $blog_rs_view->id;?>" class="btn_1">Read more</a>
                    </div><!-- end post -->
                     <hr>     
                    <?php
                }
                    ?>
                    
                        
                </div><!-- End col-md-9 -->
                
                <div class="col-md-3">
                <div class="box_style_1">               
                
                <hr>
                
                <div class="widget">
                    <h5>Categories</h5>
                    <ul id="cat_nav">
                          <?php
                    foreach($blog_rs as $blog_rs_view){
                    ?>
                        <li><a href="<?php echo base_url();?>blog-details/<?php echo $blog_rs_view->id;?>"><?php echo $blog_rs_view->blog_name;?></a></li>
                        <?php
                    }
                        ?>                       
                    </ul>
                </div><!-- End widget -->
              
               </div><!-- End box style 1 -->            
              
                <hr>
                <div class="widget tags">
                    <h4>Tags</h4>
                    <a href="#">Lorem </a>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Lorem </a>
                    <a href="#">Lorem </a>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Lorem </a>
                </div><!-- End widget -->
                <hr>             
                    
                </div><!-- End col-md-3 -->
            </div><!-- End row -->
        </div><!-- End container -->
    </main><!-- End main -->