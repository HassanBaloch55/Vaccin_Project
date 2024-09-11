<?php 
 include 'Hos_Navbar.php';
?>
   <!-- End navbar section -->
     <!-- profile section  -->
  <div class="collapse profile-section" id="profileSection">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img src="images/profile<?php echo $row ['image'] ?>" alt="">
            </div>
            <div class="col-md-8">
              <?php
               $hospital = $_SESSION['Email'];
               $sql = " Select * from  hospital_register where Email = '$hospital' ";
               $result = mysqli_query($conn ,$sql );
               $row = mysqli_fetch_array($result);
              ?>
                <h3><?php echo $row ['owner_name']; ?></h3>
                <p><?php echo $row['email']; ?></p>
                <p><?php echo $row ['phone']; ?></p>
                <p><a href="vaccine-update.php">Update Vaccine Status</a></p>
                <a href="Edit_hos_profile.php" class="btn btn-primary">Edit Profile</a>
                <a href="Pr-login_out.php" class="btn btn-danger">Logout</a>
                <a href="" class="btn btn-danger">X</a>
            </div>
        </div>
    </div>
</div>
   <!-- End profile section -->
  <!-- Our team section -->
 <!-- Our team section -->

 <section class="Team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
           Meet Our Team
        </h2>
        <p class="col-md-10 mx-auto px-0">
          The dedicated professionals behind Vax Registry
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
            <img src="images/doctors/doc-3.png" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
               Dr: Ahmed Ali Baloch
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
            <img src="images/doctors/d2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Dr: Mubashir Hussain 
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/doctors/d1.jpeg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Dr: Aliya Hussain Shah
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end our team section -->

  <!-- end our team section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
          <img src="images/about-img.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              At VaxRegistry, our vision is to revolutionize vaccine management by providing an innovative,
              comprehensive, and user-centric system that enhances public health and safety.
               We strive to empower healthcare providers and patients through seamless access to vaccination information, 
             improving efficiency and communication across the healthcare ecosystem.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
   
    <!-- footer section -->
    <?php
    include 'hos_footer.php';
    ?>
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
  <!-- End Google Map -->

</body>

</html>