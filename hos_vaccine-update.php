<?php
  include 'connect.php';
  if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['Hospital_name'];
    $vaccine = $_REQUEST['Vaccine_name'];
    $Quantity = $_REQUEST['Quantity'];
    $Exp_date = $_REQUEST['Expire_date'];
    $Email = $_REQUEST['Email'];
    $sql = "INSERT INTO `vaccine_updates`(`Hospital_name`, `Vaccine_name`, `Quantity`, `Expire_date`, `Email`)
             VALUES ('$name','$vaccine','$Quantity','$Exp_date','$Email')";
    $result = mysqli_query($conn ,$sql);

    if($result === true){
      echo "<script>window.location.href = 'hos_vaccine-update.php'</script>";     
      }
      else{
        echo "Error in entering Vaccine Record";
      }
      }
      // End add vaccine section
      if(isset($_REQUEST['submit'])){
        $Regno = $_POST['Child_Reg'];
        $Name = $_POST['Child_name'];
        $age = $_POST['Birth_date'];
        $Hospital_name = $_POST['Hospital_name'];
        $vaccine = $_POST['Vaccine_name'];
        $Father_name = $_POST['Father_name'];
        $phone = $_POST['phone'];
        $Email = $_POST['Email'];
        $city = $_POST['City'];
        $par_email = $_POST['Parent_Email'];
        
        $sql = "INSERT INTO `vaccination_status`(`Child_Reg`, `Hospital_name`, `Child_name`, `Birth_date`, `Vaccine_name`, `Father_name`, `phone`, `Email`, `City`, `Parent_Email`) 
                VALUES ('$Regno','$Hospital_name','$Name','$age','$vaccine','$Father_name','$phone','$Email','$city','$par_email')";
       $result = mysqli_query($conn , $sql);
    
        if($result === true){
          // echo "<script>alret ('Your Vaccine Record saved')</script>";
          // echo "<script>window.location.href = 'hos_vaccine-update.php'</script>";     
          }
          else{
            echo "Error in entering Vaccine Record";
          }
          }
 include 'Hos_Navbar.php'
?>
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
                <p><a href="hos_vaccine-update.php">Update Vaccine Status</a></p>
                <p><a href="hos_vac_notify.php">Send Vaccine Notification</a></p>
                <a href="Edit_hos_profile.php" class="btn btn-primary">Edit Profile</a>
                <a href="login_out.php" class="btn btn-danger">Logout</a>
                <a href="" class="btn btn-warning">Hide</a>
             
            </div>
        </div>
    </div>
</div>
   <!-- End profile section -->
          <!--end  vaccine status section -->
          <section class="input_form" id="Add_vaccine">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success">Vaccination Center Registration</h3>
                <form method="post">
                     <div class="row">
                     <div class="form-group col-md-5">
             <label for="hospital">Select Hospital</label>
              <select class="form-control" id="hospital" name="Hospital_name" required>
                <?php 
                  include 'connect.php';
                  $hospital = $_SESSION['Email'];
                  $sql = "select * from  hospital_register where email = '$hospital' " ;
                  $result = mysqli_query($conn , $sql );
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                 <option value="<?php echo $row ['Hospital_name'] ?>"><?php echo $row ['Hospital_name'] ?></option>
                 <?php } ?>
                 <!-- Add more hospitals as needed -->
             </select>
         </div>
                  <div class="form-group col-md-4">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="email" placeholder=" Enter vaccine name">
                      </div>
                         <div class="form-group col-md-3">
                          <label for="">Quantity</label>
                          <input type="number" name="Quantity"  class="form-control" id="email" placeholder="Enter Quantity">
                        </div>
                     </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                       <label for="">Expire Date</label>
                       <input type="date" name="Expire_date"   class="form-control" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group col-md-6">
                      <?php 
                  include 'connect.php';
                  $hospital = $_SESSION['Email'];
                  $sql = "select * from  hospital_register where email = '$hospital' " ;
                  $result = mysqli_query($conn , $sql );
                 while ($row = mysqli_fetch_assoc($result)) {
                 ?>
              
               
                         <label for="">Email address</label>
                         <input type="email"  name="Email" class="form-control" id="email" value="<?php  echo $row['email']?>">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="Sign-up-btn">Submit</button>
                </form>
                <?php } ?>
               </div>
             </div>
          </div>
         </section>
            <!-- end add vaccine form section -->

          <!-- add child vaccination record -->
           <section class="input_form" id="Add_record">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-3  mb-3 text-success">Add Vaccination Records of Childrens</h3>
                <form method="post">
                     <div class="row">
                      <div class="form-group col-md-4">
                        <label for="">Register No :</label>
                        <input type="number" name="Child_Reg" class="form-control" id="hospitalName" placeholder=" Enter Register No:">
                      </div>
                      <div class="form-group col-md-5">
                        <label for="">Child Name</label>
                        <input type="text"   name="Child_name"  class="form-control" id="Child Name" placeholder=" Enter Child Name">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="">Birth Date</label>
                        <input type="date"   name="Birth_date"  class="form-control" id="Birth_date" placeholder=" Enter Child age">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Father Name</label>
                        <input type="text"   name="Father_name"  class="form-control" id="Father_name" placeholder=" Enter Father name">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Parent Email</label>
                         <input type="email"  name="Parent_Email" class="form-control" id="email" placeholder="Email@gmail.com">
                      </div>
                      <div class="form-group col-md-4">
                         <label for="">Father Contact Number</label>
                         <input type="text"  name="phone" class="form-control" id="email" placeholder="+923154254xxx">
                      </div>
                      <div class="form-group col-md-4">
                        <label for=""> Parent City</label>
                        <input type="text"   name="City"  class="form-control" id="City" placeholder=" Enter city">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="">Vaccine Name</label>
                        <input type="text"   name="Vaccine_name"  class="form-control" id="Vaccine_name" placeholder=" Enter vaccine name">
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
                      <div class="form-group col-md-12">
                         <label for="">Hospital Email</label>
                         <input type="email"  name="Email" class="form-control" id="email" placeholder="Email@gmail.com">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="Sign-up-btn">Submit</button>
                </form>
               </div>
             </div>
          </div>
         </section>
           <section class="addnew_record   bg-info">
             <div class="container">
             <div class="add_new">
             <button class="Add_new_btn" id="Add_new_btn">Add New Vaccination Child Record</button>
          </div>
             </div>
           </section>
           <script>
            
  let btn = document.getElementById('Add_new_btn');
  let Add_vaccine = document.getElementById('Add_vaccine');
  let Add_record = document.getElementById('Add_record');
   btn.addEventListener('click',function(){
    if(Add_vaccine.style.display === 'none' ||  Add_record.style.display === 'block' ) {
       Add_vaccine.style.display = 'block';
       Add_record.style.display = 'none';
    }
    else {
     Add_vaccine.style.display ='none'
     Add_record.style.display = 'block';
    }
   })
           </script>
            <!-- end add vaccine form section -->
           <section class="Vaccine_status layout_padding bg-white">
             <div class="container-fluid" style="padding:0vh 5vw">
              <div class="table-responsive">
               <?php
                  // this link is connect with database
                      include 'connect.php';
                      $hospital = $_SESSION['Email'];
                    $sql = "SELECT * FROM vaccination_status where  Email = '$hospital'";
                    $result = mysqli_query($conn, $sql) or die("query unsuccess");
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">Hospital Vaccination Records</h2>
     
                 <thead >
                   <th  class="thead">Register No:</th>
                   <th  class="thead">Chid Name</th>
                   <th  class="thead">Father Name</th>
                   <th  class="thead">Birth Date</th>
                   <th  class="thead">Contact Number</th>
                   <th  class="thead">City</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Edit</th>
                   <th  class="thead">Delete</th>
                   <th  class="thead">Add Vaccine Date</th>
                 
   </thead>
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                  <td class="tbody"><?php echo $row ['Child_Reg'] ?></td>
                  <td class="tbody"><?php echo $row ['Child_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Father_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Birth_date'] ?></td>
                  <td class="tbody"><?php echo $row ['phone'] ?></td>
                  <td class="tbody"><?php echo $row ['City'] ?></td>
                  <td class="tbody"><?php echo $row ['Vaccine_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody">
                      <a href="Edit_vaccine.php?V_id=<?php echo $row['V_id']?>"> <i class="fa-solid fa-pen fa-lg" style="color: #5fb01c;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="Hos_del_section.php?V_id=<?php echo $row['V_id']?>&delete"> <i class="fa-solid fa-trash-can fa-lg" style="color: #ec0426;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="hos_vac_date.php?V_id=<?php echo $row['V_id']?>&Vaccine_date"><i class="fa-solid fa-syringe fa-lg" style="color: #0f1114;"></i></a>
                  </td>
                  <?php
                   } 
                   ?>
           </tr>
     </tbody>
    </table>
    </div>
   </div>
 </section>
  <!-- End vaccintion record -->
     <!-- My vaccines List  section -->
     <section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                  // this link is connect with database
                      include 'connect.php';
                 
                          $hospital = $_SESSION['Email'];
                    $sql = "SELECT * FROM  vaccine_updates  where Email = '$hospital'";
                    $result = mysqli_query($conn, $sql) or die("query unsuccess");
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">My Hospital Vaccine List</h2>
     
                 <thead >
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Quantity</th>
                   <th  class="thead">Expire Date</th>
                   <th  class="thead">Edit</th>
                   <th  class="thead">Delete</th>

                 
   </thead>
    
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                  <td class="tbody"><?php echo $row ['Vaccine_name']?></td>
                  <td class="tbody"><?php echo $row['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Quantity'] ?></td>
                  <td class="tbody"><?php echo $row ['Expire_date'] ?></td>
                  <td class="tbody">
                      <a href="Edit_vaccine_list.php?Id=<?php echo $row['Id']?>"> <i class="fa-solid fa-pen fa-lg" style="color: #5fb01c;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="Hos_del_section.php?Id=<?php echo $row['Id']?>&delete"><i class="fa-solid fa-trash-can fa-lg" style="color: #ec0426;"></i></a>
                  </td>
                  <?php
                   } ;
                   ?>
           </tr>
     </tbody>
    </table>
    </div>
   </div>
 </section>
     <!--  End My vaccines List  section -->
  
  <!-- footer section -->
  <?php 
      include 'hos_footer.php';
   ?>
  <!-- footer section -->
   <!-- bootsrap cdn -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- bootsrap cdn -->
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
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