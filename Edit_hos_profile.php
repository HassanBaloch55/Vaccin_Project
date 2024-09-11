<?php
include 'connect.php';
  if (isset($_POST['update'])) {
      // Get the form data
      $id = $_POST['id'];
      $owner = $_POST['owner_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "images/profile". $filename;
      move_uploaded_file($tempname, $folder);
  
      // Update the record in the database
        $sql = "UPDATE   hospital_register  SET  owner_name ='$owner',email = '$email' , phone = '$phone',image = '$filename' where id = '$id'";
      $result = mysqli_query($conn, $sql);
  
      if ($result) {
          echo "Record updated successfully";
          header("Location: Edit_hos_profile.php");
          
      } else {
          echo "Failed to update record";
      }
  }
  include 'Hos_Navbar.php';
 ?>
     
  <!-- add child vaccination record -->
  <section class="input_form">
        <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
           <div class="container">
              <div class="form-container">
                       <h3 class="text-center mt-3  mb-3 text-success"> Edit My Profle </h3>
                       <?php
                      $hospital = $_SESSION['Email'];
                      $sql = " Select * from  hospital_register  where email = '$hospital'";
                      $result = mysqli_query($conn ,$sql );
                      $row = mysqli_fetch_array($result);
                     ?>
                       <form method="post" enctype="multipart/form-data">
                       <div class="row">
                          <div class="col-md-6">
                          <img src="images/profile<?php echo $row ['image'] ?>" alt="">
                          <input type="file" name="image" id="">
                          </div>
                       </div>
                   <div class="row">
                      <div class="form-group col-md-2">
                         <label for="id">Id</label>
                         <input type="text" class="form-control" value="<?php echo $row ['id']; ?>" id="id" name="id" required>
                     </div>
                       <div class="form-group col-md-5">
                         <label for="Owner Name">Owner Name</label>
                         <input type="text" class="form-control" value="<?php echo $row ['owner_name']; ?>" id="owner_name" name="owner_name" required>
                     </div>
                         <div class="form-group col-md-5">
                             <label for="Email">Email</label>
                             <input type="text" class="form-control" value="<?php echo $row ['email']; ?>" id="email" name="email" required>
                         </div>
                         <div class="form-group col-md-6">
                             <label for="phone">Phone</label>
                             <input type="text" class="form-control" value="<?php echo $row ['phone']; ?>"  id="phone" name="phone" required>
                         </div>
                         <div class="form-group col-md-6">
                           <label for="">City</label>
                           <input type="text"   name="City"  class="form-control" id="City" value="<?php echo $row ['city'] ?>">
                         </div>
                        
                       <button type="submit" name="update" class="Sign-up-btn">Save</button>
                   </div>
               </div>
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>
        
            <!-- end add vaccine form section -->
        
  
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
                  Call +9230152652
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
              <a class="" href="Hospital-home-page.php">
                Home
              </a>
              <a class="" href="about.php">
                About
              </a>
              <a class="" href="Privacy-policy.php">
               Privacy Policy
              </a>
              <a class="active" href="contact.php">
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
   <!-- jquery js -->
   <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>