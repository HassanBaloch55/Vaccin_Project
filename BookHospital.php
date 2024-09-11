<?php 

include 'connect.php';
// Get data from form submission
  if(isset($_REQUEST['submit'])){
    $child_name= $_POST['Child_name']; 
    $D_O_B = $_POST['birth_date']; 
    $name = $_POST['Parent_name'];
    $Phone= $_POST['Phone'];
    $City = $_POST['parent_city'];
    $hospital = $_POST['hospital_name'];
    $email = $_POST['requester_email'];
    $date = $_POST['booking_date'];
  // Prepare and execute SQL statement to insert data
   $sql = "INSERT INTO `booking_requests`(  `Child_name`, `birth_date`,`Parent_name`, `Phone` ,`parent_city`, `hospital_name`, `requester_email`, `booking_date`)
                              VALUES ( '$child_name', '$D_O_B','$name', '$Phone','$City','$hospital',' $email',' $date')";
      // $select= "select * from student";
      $result = mysqli_query($conn,$sql);
     // Set Condition
     if  ($result === true){
      echo "<script>alret ('Successfully')</script>";
   }
    else {
       echo "Connection Failed";
    }
  }

?>
 <?php include 'Navbar.php'; ?>

          <!-- suggest text for Hospital -->
      <section class="Team_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
                Welcome to Our Vax Registry
            </h2>
          </div>
             <div class="suggest-text container mt-3  text-white">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Your childrens health is our top priority. Our team of experienced doctors is here to provide you with personalized and compassionate care.
                        Whether you need a routine check-up or specialized treatment,
                        we're ready to assist you with all your healthcare needs.
                   </p>
                    <p>
                        <b>Convenient Appointments:</b> &nbsp;&nbsp; Flexible scheduling options to fit your busy lifestyle. <br>
                        <b>Comprehensive Services:</b> &nbsp;&nbsp;  We offer a wide range of medical services tailored to meet your needs. <br>
                        
                <b>Experienced Professionals:</b> &nbsp;&nbsp; Our doctors are highly qualified and dedicated to delivering the best care possible. <br>
              
               
                
               
                
                 <b>State-of-the-Art Facilities:</b>&nbsp;&nbsp;  Equipped with the latest technology to ensure accurate diagnosis and effective treatment. <br>
               
                 <br> <h5>Book Your Appointment Today!</h5>
                 <p>
                    Don’t wait to take control of your health. Booking an appointment with our doctors is quick and easy. 
                    Simply select your preferred doctor, choose a convenient date and time,
                     and provide your contact information. Our friendly staff is here to assist you every step of the way.
                 </p>
                    </p>
                </div>

            </div>
          </div>
          
        </div>
      </section>

        <!-- End suggest book Hospital -->
 <!--end  vaccine status section -->
 <section class="input_form">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success"> Booking for Vaccination Center </h3>
                <form   action="" method="POST" class="form_container">
               <div class="row">
               <div class="form-group col-md-6">
                   <label for="name">Child Name</label>
                   <input type="text" class="form-control" id="Chil_name" name="Child_name" placeholder="Child name"   required>
               </div>
               <div class="form-group col-md-6">
                   <label for="name">Birth Date</label>
                   <input type="date" class="form-control" id="Birth" name="birth_date"   required>
               </div>
                <div class="form-group col-md-6">
                   <label for="name">Father Name</label>
                   <input type="text" class="form-control" id="name" name="Parent_name" placeholder="Parent name"   required>
               </div>
               <div class="form-group col-md-6">
                   <label for="name">Contact Number</label>
                   <input type="text" class="form-control" id="name" name="Phone" placeholder="03012542XXX"  required>
               </div>
               <div class="form-group col-md-6">
                   <label for="name">City</label>
                   <input type="text" class="form-control" id="name" name="parent_city" placeholder="CITY"  required>
               </div>
               <div class="form-group col-md-6">
             <label for="hospital">Select Hospital</label>
              <select class="form-control" id="hospital" name="hospital_name" paria-placeholder="Select from  list" required>
                  <option value="">Choose Hospital ...</option>
                <?php 
                  include 'connect.php'; 
                  $sql = "select * from  hospital_register";
                  $result = mysqli_query($conn , $sql );
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                 <option value="<?php echo $row ['Hospital_name'] ?>"><?php echo $row ['Hospital_name'] ?></option>
                 <?php } ?>
                 <!-- Add more hospitals as needed -->
             </select>
         </div>
               <div class="form-group col-md-6">
                   <label for="email">Email address</label>
                   <input type="email" class="form-control" id="email" name="requester_email" placeholder="Email"   required>
               </div>
               <div class="form-group col-md-6">
                   <label for="date">Booking Date</label>
                   <input type="datetime-local" class="form-control" id="email" name="booking_date" required>
               </div>
               
             </div>
          
          
            <button type="submit" name="submit" class="Sign-up-btn">Book Hospital</button>
        </form>
    </div>
</section>
  
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
  <!-- footer section -->
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
  <!-- End Google Map -->
</body>
</html>