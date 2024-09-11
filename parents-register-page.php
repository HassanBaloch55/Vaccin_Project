<?php 
 include 'connect.php';
// Get data from form submission
if(isset($_REQUEST['submit'])){
  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'];
  $User = $_POST['User_Name'];
  $city = $_POST['City'];
  $phone = $_POST ['Contact'];
  $email = $_POST['Email'];
  $pass = $_POST['Password'];
  $con_pass =$_POST['Confirm_Password'];
// Prepare and execute SQL statement to insert data
$sql = "INSERT INTO `parents_register`(`FirstName`, `LastName`, `User_Name`, `City`,`Contact`, `Email`, `Password`, `Confirm_Password`)
                                   VALUES ('$fname','$lname','$User','$city','$phone','$email','$pass','$con_pass')";
 
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
            <a class="navbar-brand" href="index.php">
              <span>
              <img src="images/Vax-Registery- logo.png" alt="" class="logo-image"  >
              </span>
            </a>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home </a>
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
                <h3 class="text-center mt-5  mb-5 text-success">Register Account As Parent</h3>
          <form action="" method="post">
            <div class="row">
            <div class="form-group col-md-4">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" placeholder="Enter First Name" id="FirstName" name="FirstName" required>
            </div>
            <div class="form-group col-md-4">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter Last Name" id="LastName" name="LastName" required>
            </div>
            <div class="form-group col-md-4">
                <label for="UserName">User Name</label>
                <input type="text" class="form-control" placeholder="Enter User Name"id="User_Name" name="User_Name" required>
            </div>
            <div class="form-group col-md-4">
                <label for="City">City</label>
                <input type="text" class="form-control" placeholder="Enter City" id="City" name="City" required>
            </div>
            <div class="form-group col-md-4">
                <label for="Contact">Contact Number</label>
                <input type="text" class="form-control" placeholder="+92300-xxxxx" id="Contact" name="Contact" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control"placeholder="Emali @" id="email" name="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Password</label>
                <input type="password" class="form-control" placeholder="password" id="email" name="Password" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Confirm Password</label>
                <input type="password" class="form-control" placeholder="confirm Password" id="email" name="Confirm_Password" required>
            </div>
            </div>
            <button type="submit" name="submit" class="Sign-up-btn" value="submit"  >Submit</button>
        </form>
            </div>
             </div>
          </div>
           </section>
            <!-- end add vaccine form section -->
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