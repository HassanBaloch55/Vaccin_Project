<?php
include 'connect.php';
 if (isset($_POST['update'])) {
     // Get the form data
     $id=($_GET['V_id']);
     $Child_Reg = $_GET['Child_Reg'];
     $Child_name = $_GET['Child_name'];
     $Child_age = $_GET['Child_age'];
     $Father_name = $_GET['Father_name'];
     $City =$_GET['City'];
     $Vaccine_name = $_GET['Vaccine_name'];
     $Hospital_name = $_GETT['Hospital_name'];
     $Taken_doses =$_GET['Taken_doses'];
     $Total_doses =$_GET['Total_doses'];
     $upcomimg =$_GET['upcomimg'];
     $status = $_GET['status'];
 
     // Update the record in the database
       $sql = "UPDATE vaccination_status SET  Child_Reg='$Child_Reg',  Child_name='$Child_name',  Child_age='$Child_age', 
                 Father_name='$Father_name',   City='$City',  Vaccine_name='$Vaccine_name',     Hospital_name='$Hospital_name', 
                 Taken_doses='$Taken_doses',  Total_doses='$Total_doses',  upcomimg='$upcomimg',   status='$status'     WHERE V_id=$id";
     $result = mysqli_query($conn, $sql);
 
     if ($result) {
         echo "Record updated successfully";
         exit();
     } else {
         echo "Failed to update record";
     }
 }
 include 'Hos_Navbar.php';
 ?>

<?php
  // this link is connect with database
   $sql = " SELECT * FROM vaccination_status";
   $result = mysqli_query($conn, $sql) or die("query unsuccess");
   $row = mysqli_fetch_array($result);
?>

  <!-- add child vaccination record -->
  <section class="input_form">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success">Add Vaccination Records of Childrens</h3>
                <form method="Get">
                     <div class="row">
                      <div class="form-group col-md-4">
                        <label for="">Register No :</label>
                        <input type="number" name="Child_Reg" class="form-control" id="hospitalName" value="<?php echo $row ['Child_Reg'] ?>">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="">Child Name</label>
                        <input type="text"   name="Child_name"  class="form-control" id="Child Name" value="<?php echo $row ['Child_name'] ?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Child age</label>
                        <input type="number"   name="Child_age"  class="form-control" id="Child_age" value="<?php echo $row ['Child_age'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Father Name</label>
                        <input type="text"   name="Father_name"  class="form-control" id="Father_name" value="<?php echo $row ['Father_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">City</label>
                        <input type="text"   name="City"  class="form-control" id="City" value="<?php echo $row ['City'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="Vaccine_name" value="<?php echo $row ['Vaccine_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Hospital Name</label>
                        <input type="text"   name="Hospital_name"  class="form-control" id="hospital_name" value="<?php echo $row ['Hospital_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Taken doses</label>
                        <input type="number"   name="Taken_doses"  class="form-control" id="Taken_doses" value="<?php echo $row ['Taken_doses'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Total doses</label>
                        <input type="number"   name="Total_doses"  class="form-control" id="Total_doses" value="<?php echo $row ['Total_doses'] ?>">
                      </div>
                     </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                       <label for="">Upcomming Dose</label>
                       <input type="date" name="upcomimg"   class="form-control" id="upcomming" value="<?php echo $row ['upcomimg'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                         <label for="">Status</label>
                         <input type="text"  name="status" class="form-control" id="status" value="<?php echo $row ['status'] ?>">
                      </div>
                    </div>
                    <button type="submit" name="update" class="Sign-up-btn">Submit</button>
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
  <!-- end footer section -->
   

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