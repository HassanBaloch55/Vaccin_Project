<?php
include 'connect.php';
 if (isset($_POST['update'])) {
     // Get the form data
     $id= $_GET['V_id'];
     $Child_Reg = $_POST['Child_Reg'];
     $Child_name = $_POST['Child_name'];
     $birth = $_POST['Birth_date'];
     $Father_name = $_POST['Father_name'];
     $phone = $_POST['phone'];
     $City =$_POST['City'];
     $Vaccine_name = $_POST['Vaccine_name'];
     $Hospital_name = $_POST['Hospital_name'];
 
     // Update the record in the database
       $sql = "UPDATE vaccination_status SET  Child_Reg='$Child_Reg',  Child_name='$Child_name',  Birth_date='$birth', 
                 Father_name='$Father_name', phone='$phone',  City='$City',  Vaccine_name='$Vaccine_name',     Hospital_name='$Hospital_name' where V_id= '$id'";
     $result = mysqli_query($conn, $sql);
 
     if ($result === true) {
       echo "<script> alret('Your Data is Updated')</script>". header("location:hos_vaccine-update.php");
     
       
         
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
                <h3 class="text-center mt-3  mb-3 text-success">Add Vaccination Records of Childrens</h3>
                <form method="Post">
                <?php
  // this link is connect with database
  include 'connect.php';
   $id = $_GET['V_id'];
   $sql = " SELECT * FROM vaccination_status where V_id = '$id' ";
   $result = mysqli_query($conn, $sql) or die("query unsuccess");
   $row = mysqli_fetch_array($result);
?>
                     <div class="row">
                     <div class="form-group col-md-4">
                        <label for=""> Id :</label>
                        <input type="number" name="V_Id" class="form-control" id="V_id" value="<?php echo $row ['V_id'] ?>">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Register No :</label>
                        <input type="number" name="Child_Reg" class="form-control" id="hospitalName" value="<?php echo $row ['Child_Reg'] ?>">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Child Name</label>
                        <input type="text"   name="Child_name"  class="form-control" id="Child Name" value="<?php echo $row ['Child_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Birth Date</label>
                        <input type="Date"   name="Birth_date"  class="form-control" id="Birth_date" value="<?php echo $row ['Birth_date'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Father Name</label>
                        <input type="text"   name="Father_name"  class="form-control" id="Father_name" value="<?php echo $row ['Father_name'] ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="">Contact Number</label>
                        <input type="text"   name="phone"  class="form-control" id="phone" value="<?php echo $row ['phone'] ?>">
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