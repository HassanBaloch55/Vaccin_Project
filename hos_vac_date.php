<?php
     include 'connect.php';
      // End add vaccine section
      if(isset($_REQUEST['submit'])){
        $Regno = $_POST['Child_Reg'];
        $Name = $_POST['Child_name'];
        $Father_name = $_POST['Father_name'];
        $Parent_email = $_POST['Parent_Email'];
        $vaccine = $_POST['Vaccine_name'];
        $Hospital_name = $_POST['Hospital_name'];
        $vac_date = $_POST['Vaccine_date'];
        $Com_date = $_POST['Upcomming'];
        $takendose = $_POST['Taken_dose'];
        $Totaldose = $_POST['Total_dose'];
        $Hos_Email = $_POST['Hos_Email'];
      
       
       
     
        $sql = "INSERT INTO `vaccine_date`(`Child_Reg`, `Child_name`, `Father_name`, `Parent_Email`, `Vaccine_name`, `Hospital_name`, `vaccine_date`, `Upcomming`, `Taken_dose`, `Total_dose`, `Hos_Email`)
         VALUES ('$Regno','$Name','$Father_name','$Parent_email','$vaccine','$Hospital_name','$vac_date','$Com_date','$takendose','$Totaldose','$Hos_Email')";
        $result = mysqli_query($conn ,$sql);
    
        if($result === true){
          echo "<script>window.location.href = 'Hos_vacc_date.php'</script>";     
          }
          else{
            echo "Error in entering Vaccine Record";
          }
          }
        include 'Hos_Navbar.php'
     ?>
   <!-- End profile section -->
             <!-- add child vaccination record -->
           <section class="input_form">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success">Parents Vaccination Date</h3>
                <form method="post">
                <?php
                  // this link is connect with database
                      include 'connect.php';
                      $id = $_GET['V_id'];
                    $sql = "SELECT * FROM vaccination_status  where V_id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                      ?>
                     <div class="row">
                      <div class="form-group col-md-4">
                        <label for="">Register No :</label>
                        <input type="number" name="Child_Reg" class="form-control" id="hospitalName" value="<?php echo $row['Child_Reg']  ?>">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Child Name</label>
                        <input type="text"   name="Child_name"  class="form-control" id="Child Name" value="<?php echo $row['Child_name']  ?> ">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Father Name</label>
                        <input type="text"   name="Father_name"  class="form-control" id="Father_name"value="<?php echo $row['Father_name']  ?> ">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Parent Email</label>
                         <input type="email"  name="Email" class="form-control" id="email" value="<?php  echo $row['Parent_Email']?>">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="Vaccine_name"value="<?php  echo $row['Vaccine_name']?>">
                      </div>
                      <div class="form-group col-md-4">
                      <?php 
                        include 'connect.php';
                        $hospital = $_SESSION['Email'];
                        $sql = "select * from  hospital_register where email = '$hospital' " ;
                        $result = mysqli_query($conn , $sql );
                       while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                        <label for="">Hospital Name</label>
                        <input type="text"   name="Hospital_name"  class="form-control" id="hospital_name" value="<?php echo $row ['Hospital_name'] ?>">
                        <?php }?>
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Hospital Email</label>
                         <input type="text"  name="Hos_Email" class="form-control" id="Hos_Email" value="<?php  echo $_SESSION['Email']?>">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Vaccine Date</label>
                         <input type="date"  name="Vaccine_date" class="form-control" id="vaccine_date" value="<?php  echo $row['Vaccine_date']?>">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Comming Dose</label>
                         <input type="date"  name="Upcomming" class="form-control" id="vaccine_date" value="<?php  echo $row['Upcomming']?>">
                      </div>
                      <div class="form-group col-md-6">
                         <label for="">Taken Doses</label>
                         <input type="number"  name="Taken_dose" class="form-control" id="vaccine_date" value="<?php  echo $row['Taken_dose']?>">
                      </div>
                      <div class="form-group col-md-6">
                         <label for="">Total Doses</label>
                         <input type="number"  name="Total_dose" class="form-control" id="vaccine_date" value="<?php  echo $row['Total_dose']?>">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="Sign-up-btn">Submit</button>
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
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
   <!-- jquery js -->
 

</body>

</html>