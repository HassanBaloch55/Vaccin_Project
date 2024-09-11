<?php 
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

<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Vax Registry</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
 <body class="sub_page">

    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Vax Registry
              </span>
            </a>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.html"> About <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Account</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

     <!--end  vaccine status section -->
     <section class="input_form">
            <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
             <div class="container">
              <div class="form-container">
                <h3 class="text-center mt-5  mb-5 text-success">Register your account as Hospital owner</h3>
          <form action="vaccine-update.php" method="post">
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
            <!-- end add vaccine form section -->
    <!-- register page section -->
    <section class="Register_section">
      <div class="container">
        <form action="" class="Register-form" method="post">
       
     </div>
      </div>
    </section>
    <!-- end register form section -->
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
  <!-- End Google Map -->

</body>

</html>