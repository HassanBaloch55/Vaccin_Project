<?php
     include 'connect.php';
      // End add vaccine section
      if(isset($_REQUEST['submit'])){
        $Regno = $_POST['Child_Reg'];
        $Name = $_POST['Child_name'];
        $age = $_POST['Birth_date'];
        $Father_name = $_POST['Father_name'];
        $phone = $_POST['F_Number'];
        $F_email = $_POST['F_Email'];
        $Hos_name = $_POST['Hospital_name'];
        $Hos_email = $_POST['Hos_Email'];
        $vac_name = $_POST['Vaccine_name'];
        $vac_star_date = $_POST['Vac_start_date'];
        $vac_end_date = $_POST['Vac_end_date'];
        $Total_doses = $_POST['Total_doses'];
        $Doc_remarks = $_POST['doc_remarks'];

        $sql = " INSERT INTO `vaccine_report`(`Child_Reg`, `Child_name`, `Birth_date`, `Father_name`, `F_Number`, `F_Email`, `Hospital_name`, `Hos_Email`, `Vaccine_name`, `Vac_start_date`, `Vac_end_date`, `Total_doses`, `doc_remarks`) 
                 VALUES('$Regno','$Name','$age','$Father_name','$phone','$F_email','$Hos_name','$Hos_email','$vac_name','$vac_star_date',
              '$vac_end_date','$Total_doses','$Doc_remarks')";
        $result = mysqli_query($conn ,$sql);
        if($result === true){
          echo "<script> alret ('Data Enterned')</script>";     
          }
          else{
            echo "Error in entering Vaccine Record";
          }
          }
        include 'Hos_Navbar.php'
     ?>
   <!-- End profile section -->
             <!-- add child vaccination record -->    
          <!-- add child vaccination record -->
          <section class="input_form">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success"> Child's Vaccination Report</h3>
                <form method="post">
                     <div class="row">
                      <div class="form-group col-md-4">
                        <label for="">Register No :</label>
                        <input type="number" name="Child_Reg" class="form-control" id="hospitalName"  placeholder="Enter Register No">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="">Child Name</label>
                        <input type="text"   name="Child_name"  class="form-control" id="Child Name" placeholder="Child Name" >
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Birth Date</label>
                        <input type="date"   name="Birth_date"  class="form-control" id="Birth_date" >
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Father Name</label>
                        <input type="text"   name="Father_name"  class="form-control" id="Father_name"  placeholder="Father Name">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Father Contact Number</label>
                         <input type="text"  name="F_Number" class="form-control" id="email"  placeholder="+92301245xxxx" >
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Father Email</label>
                         <input type="email"  name="F_Email" class="form-control" id="email" placeholder="Enter @gmaail.com">
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
                         <input type="email"  name="Hos_Email" class="form-control" id="email" placeholder="Hospital @Email">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="Vaccine_name" placeholder="Enter Vaccine name" >
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Start Vaccine Date</label>
                        <input type="date"   name="Vac_start_date"  class="form-control" id="Vaccine_name" >
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">End Vaccine Date</label>
                        <input type="date"   name="Vac_end_date"  class="form-control" id="Vaccine_name" placeholder=" Enter vaccine name">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Total Doses</label>
                        <input type="number"   name="Total_doses"  class="form-control" id="Vaccine_name"  placeholder="all taken doses " >
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Doctors Remarks</label>
                        <textarea name="doc_remarks" id="" cols="" rows="4" class="textaria"></textarea>
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
      include 'par_footer.php';
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