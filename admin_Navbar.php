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
<style>
  
#chatSection {
  padding: 1vh 3vh;
    position: fixed;
    color:white;
    top: 16.5vh;
    right: -30%;
    height: 100%;
    width: 30%;
    z-index: 99;
    background: #178066;
    border-top: 1px solid white;
    transition: right 1s ease;
    box-shadow: 2px 0 5px rgba(255, 025, 0, 0.5);
 }
</style>
<body class="sub_page">
    <?php
        if(isset($_SESSION['Email'])){
     ?>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <span><i class="fa-solid fa-bars"></i></span>
              <a class="navbar-brand" href="admin_panel.php">
                <span>
                <img src="images/Vax-Registery- logo.png" alt="" class="logo-image"  >
                <a class="nav-link  text-white" href="#" id="Menu_btn"><i class="fa-solid fa-bars fa-lg"></i></a>
                </span>
              </a>
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="chat_Btn"><i class="fa-brands fa-rocketchat fa-lg"></i> </a>
                  </li>
                    <li class="nav-item">
                        <li class="nav-item" style="display:flex">
                       
                         <li class="nav-item">
                            <a class="nav-link" href="#">  <?php echo $_SESSION['Email'];  ?></a>
                            </li>
                            <?php $sql = "select  * from admin";
                             $result = mysqli_query($conn ,$sql);
                             while ($row = mysqli_fetch_assoc($result)){ ?>
                        <a class="nav-link" href="#"><button type="button" data-toggle="collapse" data-target="#profileSection" aria-expanded="false" aria-controls="profileSection" id="profile">
                        <img src="images/profile<?php  echo $row ['image'] ?>" alt="" class="profile-image">
                       </button></a>
                    </li>
                   <?php }} ?>
                </ul>
            </div>
          </nav>
        </div>
      </header>
      <?php  ?>
    </div>
     <!-- end Header section  -->
         <!-- profile section  -->
  <div class="collapse profile-section" id="profileSection">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <?php 
               $hospital = $_SESSION['Email'];
               $sql = " Select * from  admin where Email = '$hospital' ";
               $result = mysqli_query($conn ,$sql );
               $row = mysqli_fetch_array($result);
              ?>
            <img src="images/profile<?php  echo $row ['image'] ?>" alt="">
            </div>
            <div class="col-md-8">
                <h3><?php echo $row ['Name']; ?></h3>
                <p><?php echo $_SESSION['Email']; ?></p>
                <a href="Edit_admin_profile.php" class="btn btn-primary">Edit Profile</a>
                <a href="login_out.php" class="btn btn-danger">Logout</a>
                <a href="" class="btn btn-warning"> Hide </a>

            </div>
        </div>
    </div>
  </div>
    <!-- End Profile section  -->
     <section class="Chat_section">
      <div class="container">
        <div class="" id="chatSection">
          <?php 
             include 'connect.php';
             $sql = "SELECT * FROM contact_us";
             $result = mysqli_query($conn ,$sql);
             while ($row = mysqli_fetch_assoc($result)){ ?>
             <div>
                  <ul><li> <h6><?php echo $row['Name'] ?> <br> <a href=""><span class="text-white"><?php echo $row['Messege'] ?></span></a></h6>  <a href="Admin_messeges.php?Id=<?php echo $row['Id']?>"> <input type="button" value="View Messege" class="btn btn-warning"></a></li></ul>
             </div>
             <?php } ?>
        </div>
      </div>
     </section>
     <!-- start All links section -->
      <section id="AllLinks">
      <div class="container">
          <div class="All_pages">
           <ul>
             <li><a href="admin_add_Hospital.php">Add Hospital</a></li>
             <li><a href="admin_Hos_list.php">List of Hospitals</a></li>
             <li><a href="Admin_vaccine_list.php">List of Vaccines</a></li>
             <li><a href="admin.child_details.php">All Child Details</a></li>
             <li><a href="admin_vac_dates.php">Date of Vaccination</a></li>
             <li><a href="admin_vac_report.php">Report of Vaccination</a></li>
             <li><a href="admin_par_notify.php">Parents Vaccination Notifications</a></li>
             <li><a href="admin_Booking_details.php">Parents Hospital Booking Ruquests</a></li>
             <li><a href="admin_Account_request.php">Parent Account Registration Ruquests </a></li>
          
            </ul>
          </div>
        </div>
      </section>
       <!-- end all links section -->
         <script>
          
//  admin section  chat & menu
let chatSection = document.getElementById('chatSection');
let chatToggleBtn = document.getElementById('chat_Btn');

chatToggleBtn.addEventListener('click', () => {
    chatSection.classList.toggle('open');
});

let AllLinks = document.getElementById('AllLinks');
let Menu_btn = document.getElementById('Menu_btn');
 Menu_btn.addEventListener('click',function(){
  if(AllLinks.classList.toggle('AllLinks')) {
    AllLinks.classList.toggle('move');
  }
  else {
    AllLinks.classList.toggle('move')
  }
 })
  // end  admin section  chat & menu

         </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>

</html>