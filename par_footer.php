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
                  demo@gmail.com
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
              <a class="active" href="Parenthomepage.php">
                Home
              </a>
              <a class="" href="par_aboutus.php">
                About
              </a>
              <a class="" href="par_contact.php">
                Contact Us
              </a>
              <a class="" href="Privacy-policy.php">
               Privacy Policy
              </a>
            </div>
          </div>
        </div>
        <?php 
        include 'connect.php';
        if(isset($_REQUEST['submit'])){
          $Email = $_POST['Email'];
          $sql = " INSERT INTO `newslaters`(`Email`) VALUES ('$Email')";
          $result = mysqli_query($conn, $sql);
          if($result === true){
            echo "<script>alret('Your are subscribed Newslaters')</script>";
          } else{
            echo "Your are not subscribed";
          }
        }
      ?>
      <div class="col-md-6 col-lg-3 footer_col ">
        <h4>
          Newsletter
        </h4>
        <form action="" method="post">
          <input type="email" placeholder="Enter email" name="Email" />
          <button type="submit" name="submit">
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
  <!-- footer section -->