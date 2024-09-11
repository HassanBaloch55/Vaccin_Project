<?php 
 include 'connect.php';
// Get data from form submission
 if(isset($_REQUEST['submit'])){
$name   =   $_POST['parents_name'];
$Email =   $_POST['Email'];
$Status =    $_POST['status'];
$date =    $_POST['request_date'];
// Prepare and execute SQL statement to insert data
 $sql = "INSERT INTO `parents_requests`(`parents_name`,`Email`, `status`, `request_date`)
               VALUES ('$name','$Email','$Status','$date')";
 // $select= "select * from student";
  $result = mysqli_query($conn,$sql);
 // Set Condition
if  ($result === true){
    echo "<script> alret ('Your Ruquest sent to admin succussfuly')</script>";
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
                  <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.php"> About Us<span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Account</a>
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
                <h3 class="text-center mt-3  mb-3 text-success"> Send Ruquest to admin For Account Registration!</h3>
                <form  method="post">
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="inputFirstName">Parents Name</label>
                              <input type="text" name="parents_name"  class="form-control" id="inputName" placeholder="Parents Name">
                          </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" name="Email"  id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail">Date</label>
                        <input type="datetime-local" class="form-control" name="request_date"  id="inputdate" placeholder="">
                    </div> 
                    <div class="form-group col-md-12">
                     <label for="inputEmail">Message</label>
                       <div> <textarea name="Status" id="" cols="87" rows="2" style="padding:  2vh 3vw;"></textarea></div>
                    </div>
                    
                      <button type="submit" name="submit" class="Sign-up-btn" value="submit"  >Send</button>
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