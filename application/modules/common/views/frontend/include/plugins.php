<div id="toTop"></div><!-- Back to top button -->
<!-- Common scripts -->
  <script src="<?php echo base_url();?>assets/frontend/js/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/common_scripts_min.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/functions.js"></script>
  <!-- Specific scripts -->
  <script src="<?php echo base_url();?>assets/frontend/js/jquery.validate.js"></script>
  <script src="<?php echo base_url();?>assets/frontend/js/jquery.stepy.min.js"></script> 
  <script src="<?php echo base_url();?>assets/frontend/js/quotation-validate.js"></script> 
  <script src="<?php echo base_url();?>assets/frontend/js/bootstrap-datepicker.js"></script>
  <!-- <script>
    $('.datepicker').datepicker();
    $("#quotation").validate();
  </script> 
  <script>
    'use strict';
    $(".team-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      autoplay: false,
      smartSpeed: 300,
      responsiveClass: false,
      responsive: {
        320: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1000: {
          items: 3,
        }
      }
    });
  </script> -->

   <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {         
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
    <script type="text/javascript">
    $(function () {
        $("#submit_button").click(function () {
            var password = $("#password_quote").val();
            var confirmPassword = $("#confirm_quote").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>


<script type="text/javascript">
    $(function () {
        $("#submit_button_new").click(function () {
            var password = $("#password_quote").val();
            var confirmPassword = $("#confirm_quote").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>