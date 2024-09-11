<section class="Hospital_section  layout_padding">
    <div class="container">
     <div class="row">
    <?php
   include 'connect.php';
    if(isset($_REQUEST['input'])){
   $input =$_POST['input'];
   $sql = "Select * from hospital_register where city like '{$input}%' OR    state like '{$input}%'";
   $result = mysqli_query($conn, $sql);
   while($row = mysqli_fetch_assoc($result)){
   ?>
        <div class="col-md-6">
            <div class="Hospital_container">
                 <div class="about_hospital">
                    <div>
                     <h6>Hospital Name</h6>
                     <h6>City</h6>
                     <h6>State</h6>
                     <h6>Address</h6>
                     <h6>Email</h6>
                    </div>
                    <div>
                     <h6><?php echo $row ['Hospital_name']  ?></h6>
                     <h6><?php echo $row ['city']  ?></h6>
                     <h6><?php echo $row ['state']  ?></h6>
                     <h6><?php echo $row ['address']  ?></h6>
                     <h6><?php echo $row ['email']  ?></h6>
                   </div>
                 </div>
                 <a href="BookHospital.php"> <button class="btn btn-info">Book Hospital</button></a>
        </div>
    </div>
    <?php }}?>
    </div>
  </section>
 