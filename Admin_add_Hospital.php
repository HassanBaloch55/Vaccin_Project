<?php
include 'admin_Navbar.php';
 include 'connect.php';
 // Get data from form submission
 if(isset($_REQUEST['submit'])){
   $owner_name = $_POST['name'];
   $Hospital_name = $_POST['Hospital_name'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip_code = $_POST['zip_code'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $Con_password = $_POST['confirm_password'];
 // Prepare and execute SQL statement to insert data
  $sql = "INSERT INTO `hospital_register`(`owner_name`, `Hospital_name`, `address`, `city`, `state`, `zip_code`, `phone`, `email`, `password`, `confirm_password`)
   VALUES ('$owner_name','$Hospital_name','$address','$city','$state','$zip_code','$phone','$email','$password','$Con_password')";
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
?>
             <!-- add Hospital Record record -->
             <!--end  vaccine status section -->
     <section class="input_form" id="#add_Hospital">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-5  mb-5 text-success">Add New Hospital Record</h3>
          <form action="" method="post">
            <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Owner Name</label>
                <input type="text" class="form-control" placeholder="Owner Name" id="name" name="name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Hospital Name</label>
                <input type="text" class="form-control" placeholder="Hospital Name" id="name" name="Hospital_name" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-4">
                <label for="address">Address</label>
                <input type="text" class="form-control" placeholder="Address"id="address" name="address" required>
            </div>
            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" class="form-control" placeholder="City" id="city" name="city" required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" class="form-control" placeholder="State" id="state" name="state" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label for="zip_code">Zip Code</label>
                <input type="text" class="form-control" placeholder="Zip-code" id="zip_code" name="zip_code" required>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" placeholder="+92300-xxxxx" id="phone" name="phone" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control"placeholder="Emali @" id="email" name="email" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Password</label>
                <input type="password" class="form-control" placeholder="password" id="email" name="password" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Confirm Password</label>
                <input type="password" class="form-control" placeholder="confirm Password" id="email" name="confirm_password" required>
            </div>
            </div>
            <button type="submit" name="submit" class="Sign-up-btn" value="submit"  >Submit</button>
        </form>
            </div>
             </div>
          </div>
           </section>
       <!-- end add hospital section -->
