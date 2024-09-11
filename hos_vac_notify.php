<?php 
  include 'connect.php';
if (isset($_REQUEST['submit'])) {
  $child_name = $_POST['child_name'];
  $parent_name = $_POST['parent_name'];
  $parent_email = $_POST['parent_email'];
  $vaccine_name = $_POST['vaccine_name'];
  $vaccination_date = $_POST['vaccination_date'];
    $sql = "INSERT INTO `vaccinations_notification`(`child_name`, `parent_name`, `parent_email`, `vaccine_name`, `vaccination_date`)
             VALUES ('$child_name','$parent_name','$parent_email','$vaccine_name','$vaccination_date')" ;
     $result = mysqli_query($conn ,$sql);
   
    if ($result === true) {
        // Send notification email
        $to = $parent_email;
        $subject = "Vaccination Notification for $child_name";
        $message = "Dear $parent_name,\n\nThis is to inform you that your child, $child_name, received the $vaccine_name vaccine on $vaccination_date.\n\nBest regards,\nYour Healthcare Provider";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "<div class='alert alert-success'>Notification sent successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to send email notification.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Failed to record vaccination details.</div>";
    }
}
 include 'Hos_Navbar.php'
?>
          <!--end  vaccine status section -->
      <section class="input_form" id="Add_vaccine">
        <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
         <div class="container">
          <div class="form-container">
            <h3 class="text-center mt-3  mb-3 text-success">Vaccination Notification Parents Form</h3>
             <form method="post">
                 <div class="row">
                  <div class="form-group col-md-6">
                     <label for="childName" class="form-label">Child Name</label>
                     <input type="text" class="form-control" id="childName" name="child_name"   placeholder="Enter Child name" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="parentName" class="form-label">Parent Name</label>
                     <input type="text" class="form-control" id="parentName" name="parent_name" placeholder="Enter Parent name" required>
                 </div>
                 <div class="form-group col-md-4">
                     <label for="parentemail" class="form-label">Parent Email</label>
                     <input type="text" class="form-control" id="parentemail" name="parent_email"  placeholder="Enter Parent Email" required>
                 </div>
                 <div class="form-group col-md-4"> 
                     <label for="vaccineName" class="form-label">Vaccine Name</label>
                     <input type="text" class="form-control" id="vaccineName" name="vaccine_name" placeholder="Enter vaccine name" required>
                 </div>
                 <div class="form-group col-md-4">
                     <label for="vaccinationDate" class="form-label">Upcomming  Date</label>
                     <input type="date" class="form-control" id="vaccinationDate" name="vaccination_date" required>
                 </div>
                 </div>
                 <button type="submit" name="submit" class="Sign-up-btn">Send Notification</button>
             </form>
               </div>
             </div>
          </div>
         </section>
            <!-- end add vaccine form section -->
  <!-- footer section -->
   <?php 
      include 'hos_footer.php';
   ?>
  <!-- footer section -->
  <script type="" src="script.js"></script>
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- bootsrap cdn -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- bootsrap cdn -->
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
  <!-- bootstrap js -->
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>