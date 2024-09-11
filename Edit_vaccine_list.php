<?php
include 'connect.php';
 if (isset($_POST['update'])) {
     // Get the form data
     $id= $_GET['Id'];
     $vaccine =  $_POST['Vaccine_name'];
     $Quantity = $_POST['Quantity'];
     $Exp_date = $_POST['Expire_date'];
   
     // Update the record in the database
       $sql = "UPDATE `vaccine_updates` SET `Vaccine_name`='$vaccine',`Quantity`='$Quantity',`Expire_date`='$Exp_date' WHERE Id = '$id'";
     $result = mysqli_query($conn, $sql);
 
     if ($result) {
         echo "Record updated successfully";
         header("Location: vaccine-update.php");
        
     } else {
         echo "Failed to update record";
     }
 }
 include 'Hos_Navbar.php'
 ?>
<?php
  // this link is connect with database
    include 'connect.php';
   $id =$_GET['Id'];
   $sql = " SELECT * FROM vaccine_updates  where Id = '$id'";
   $result = mysqli_query($conn, $sql) or die("query unsuccess");
   $row = mysqli_fetch_array($result);
?>

  <!-- add child vaccination record -->
  <section class="input_form" id="Add_vaccine">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success"> Edit Vaccine Details</h3>
                <form method="post">
                    <div class="row">
                     <div class="form-group col-md-6">
                        <label for="">Id</label>
                        <input type="number"   name="Id"  class="form-control" id="Id" value="<?php echo $row ['Id']?>">
                      </div>
                     <div class="form-group col-md-6">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="email" value="<?php echo $row ['Vaccine_name']?>">
                      </div>
                         <div class="form-group col-md-6">
                          <label for="">Quantity</label>
                          <input type="number" name="Quantity"  class="form-control" id="email" value="<?php echo $row ['Quantity']?>">
                        </div>
                      <div class="form-group col-md-6">
                       <label for="">Expire Date</label>
                       <input type="date" name="Expire_date"   class="form-control" id="email" value="<?php echo $row ['Expire_date']?>">
                      </div>
                     
                    </div>
                    <button type="submit" name="update" class="Sign-up-btn">Save</button>
                </form>
               </div>
             </div>
          </div>
         </section>
            <!-- end edit vaccine List form section -->

          
        
  
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
              <a class="" href="index.php">
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