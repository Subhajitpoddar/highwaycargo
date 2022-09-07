<section id="sub_header">
  <div class="container">
    <div class="main_title">
      <h1>Customer Requirement</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.
      </p>
    </div>
  </div>
</section><!-- End section -->
<main>
  <div class="container margin_60">
    <div id="intro">        
    <h2 class="text-center"><b><span class="customer">Customer</span> Requirement</b></h2>
   </div>  
   <div class="row" id="borders">    
     <div class="col-md-12">        
  <div class="table-responsive">
   <table class="table table-striped table-bordered table-condensed">
    <thead>
      <tr>
        <th id="colors">Date Of Requirement</th>
        <th id="customer_table">Customer Name</th>
        <th id="colors">Weight in Ton</th>
        <th id="customer_table">From</th>
        <th id="colors">Destined Location</th>
        <th id="customer_table">Matarial Type</th>
        <th id="colors">View No.</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($customer_post as $customer_post_rs) { ?>
        <tr>
          <td><?php echo $customer_post_rs->date;?></td>
          <td><?php 
          $customer=$customer_post_rs->customer_id;
          $this->db->where("id='$customer'");
          $customers=$this->db->get('vendor_registers_db');
          $cus_post=$customers->result();
          foreach($cus_post as $cus_post_rs){
            echo $cus_post_rs->first_name;
          } ?>           
        </td>
        <td><?php echo $customer_post_rs->total_weight;?> </td>
        <td><?php echo $customer_post_rs->source_city;?></td>
        <td><?php echo $customer_post_rs->destination_name;?></td>
        <td><?php echo $customer_post_rs->material_type;?></td>        
        <td><a href="<?php echo base_url();?>contact-number-view/<?php echo $customer_post_rs->id;?>" class="btn btn-warning">View Contact</a></td>
      </tr>
    <?php } ?>                                   
  </tbody>
</table>                             
</div>
     </div>     
</div><!-- End row -->
</div><!-- End container -->

  </main><!-- End main -->