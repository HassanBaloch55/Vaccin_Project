<?php 
 include 'connect.php';
 include 'admin_Navbar.php';
// Get data from form submission
if(isset($_REQUEST['update'])){
  $id = $_GET['id'];
  $owner_name = $_POST['owner_name'];
  $Hospital_name = $_POST['Hospital_name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip_code = $_POST['zip_code'];
  $phone = $_POST['phone'];
// Prepare and execute SQL statement to insert data
 $sql = " UPDATE `hospital_register` SET `owner_name`='$owner_name',`Hospital_name`='$Hospital_name',`address`='$address',`city`='$city',
 `state`='$state',`zip_code`='$zip_code',`phone`='$phone' WHERE id = '$id'";
 // $select= "select * from student";
$result = mysqli_query($conn,$sql);
 // Set Condition
if  ($result === true){
   echo "<script>
                  alert('Your Hospital Registered successfully')
       </script>";
}
 else {
    echo "Connection Failed";
 }
}
  $id = $_GET['id'];
  $sql = "SELECT * FROM `Hospital_register`  where id = '$id'" ;
  $result = mysqli_query($conn ,$sql );
  $row = mysqli_fetch_array($result);
?>
     <section class="input_form">
        <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
            <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-5  mb-5 text-success"> Update Hospital details!</h3>
                 <form action="" method="post">
                   <div class="row">
                       <div class="form-group col-md-6">
                          <label for="name">Id</label>
                          <input type="text" class="form-control" placeholder="Owner Name" id="Id" name="id" value="<?php echo $row ['id']  ?>" required>
                      </div>
                       <div class="form-group col-md-6">
                         <label for="name">Owner Name</label>
                         <input type="text" class="form-control" placeholder="Owner Name" id="name" name="owner_name" value="<?php echo $row ['owner_name']?>" required>
                       </div>
                       <div class="form-group col-md-6">
                         <label for="name">Hospital Name</label>
                         <input type="text" class="form-control" placeholder="Hospital Name" id="name" name="Hospital_name" value="<?php echo $row ['Hospital_name']  ?> " required>
                       </div>
                       <div class="form-group col-md-6">
                         <label for="address">Address</label>
                         <input type="text" class="form-control" placeholder="Address"id="address" name="address" value="<?php echo $row ['address']  ?>" required>
                     </div>
                      <div class="form-group col-md-6">
                         <label for="city">City</label>
                         <input type="text" class="form-control" placeholder="City" id="city" name="city"  value="<?php echo $row ['city']  ?>" required>
                      </div>
                     <div class="form-group col-md-6">
                         <label for="state">State</label>
                         <input type="text" class="form-control" placeholder="State" id="state" name="state" value="<?php echo $row ['state']  ?>" required>
                     </div>
                      <div class="form-group col-md-6">
                          <label for="zip_code">Zip Code</label>
                          <input type="text" class="form-control" placeholder="Zip-code" id="zip_code" name="zip_code" value="<?php echo $row ['zip_code']  ?>" required>
                      </div>
                       <div class="form-group col-md-6">
                           <label for="phone">Phone</label>
                           <input type="text" class="form-control" placeholder="+92300-xxxxx" id="phone" name="phone" value="<?php echo $row ['phone']  ?>" required>
                       </div>
                   </div>
                   <button type="submit" name="update" class="Sign-up-btn" value="submit"  >Submit</button>
              </form>
          
             </div>
          </div>
     </section>
             <!-- end add vaccine form section -->