<?php 
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <title>Vax Registery</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

   <!-- jquery Cdn -->
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
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
<body>
 
    <div class="hero_area">
        <div class="hero_bg_box">
          <img src="images/hero-bg.png" alt="">
        </div>
    
        <!-- header section strats -->
        <header class="header_section">
          <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="Hospital-home-page.php">
                <span>
                <img src="images/Vax-Registery- logo.png" alt="" class="logo-image"  >
                </span>
              </a>
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                     <div class="btn-group" style="margin-top: -4px;">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                             For Hospital
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                        <a class="dropdown-item text-success" href="hos_vaccine-update.php">Update Vaccine Status</a>
                        <a class="dropdown-item text-success" href="Hos_vacc_date.php">Parent Vaccine Date</a>
                        <a class="dropdown-item text-success" href="hos_vac_notify.php">Send Vaccine Notification</a>
                     </div>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  
                  <li class="nav-item">
                    <?php 
                       if(isset($_SESSION ['Email'])) { ?>
                        <li class="nav-item" style="display:flex">
                         <li class="nav-item">
                            <a class="nav-link" href="#">  <?php echo $_SESSION['Email'];  ?></a>
                            </li>
                            <?php
                               $hospital = $_SESSION['Email'];
                               $sql = " Select * from  hospital_register  where email = '$hospital'";
                               $result = mysqli_query($conn ,$sql );
                               $row = mysqli_fetch_array($result);
                              ?>
                        <a class="nav-link" href="#"><button type="button" data-toggle="collapse" data-target="#profileSection" aria-expanded="false" aria-controls="profileSection" id="profile" class="bg-success">
                        <img src="images/profile<?php echo $row['image'] ?>" alt="" class="profile-image">
                       </button></a>
                        </li>
                     <?php  }  else {?>
                      <li class="nav-item">
                  <a class="nav-link" href="account.php">Account</a>
                </li>
      <!-- end header section -->
    </div>
                    <?php }?>
                  </li>
                
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <!-- end header section -->
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
                <a href="Edit_hos_profile.php" class="btn btn-primary">Edit Profile</a>
                <a href="login_out.php" class="btn btn-danger">Logout</a>
                <a href="" class="btn btn-warning">Hide</a>
             
            </div>
        </div>
    </div>
</div>
   <!-- End profile section -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
