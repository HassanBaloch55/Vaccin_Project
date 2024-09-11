<?php 
include 'Navbar.php';
?>
<!--  profile section -->
   <!-- find hospital section -->
  <section class= "Hospital_section  layout_padding"  style="background-image: url('images/hero-bg.jpg');">
    <div class="container">
            <form action="" class="Search-form ">
                <h2 class="text-dark">Find Hospital !</h2>
              <div class="input-group">
                <input type="search" name="input" id="search" class="search" class="form-control" placeholder="Search Hospitals Here...">
                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </form>
        </div>
  </section>
  <section class="Hospital_section">
   <div class="container">
      <div id="result" ></div>
    </div>
  </section>
  <!-- end find hospital section -->
  <script>
        $(document).ready(function(){
            $('#search').on('input', function() {
                var input= $(this).val();
                if (input != "") {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {input:input},
                        success: function(data) {
                            $('#result').html(data);
                            $("#result").css("display","block");
                        }
                    });
                } else {
                    $('#result').css('display','none');
                }
            });
        });
    </script>
   
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                vaxregistry@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
                At VaxRegistry, our vision is to revolutionize vaccine management by providing an innovative,
               comprehensive, and user-centric system that enhances public health and safety.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.php">
                Home
              </a>
              <a class="" href="about.php">
                About us
              </a>
              
              <a class="" href="Find-hospital.php">
               Find Hospital
              </a>
              <a class="" href="contact.php">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="footer-info">
      <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">Vax Registery<br><br></a>
            &copy; <span id="displayYear"></span> Distributed By Vax Registery
        </p>
       
      </div>  
    </div>
  </footer>
  <script>
    
document.getElementById('button').addEventListener('click', function() {
    var profileDetails = document.getElementById('profile-details');
    if (profileDetails.style.display === 'none') {
        profileDetails.style.display = 'block';
    
    } else {
        profileDetails.style.display = 'none';

    }
});
  </script>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <script src="js/jquery.js"></script>
  <script src="js/custom.js"></script>
  <!-- End Google Map -->
</body>
</html>