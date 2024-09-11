<?php 
include 'admin_Navbar.php';
?>
   <!--   Start   All Register   Hospital  -->
   <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="Hospital_Bookings">
              <h3 class="text-center"> Full Hospital Details !</h3>
               <div class="table-responsive">
                <table class="table  AllHospitals">
                    <thead>
                    <tr> 
                       <th class="thead">Image</th>
                       <th class="thead">ID</th>
                       <th class="thead">Owner Name</th>
                       <th class="thead">Hospital Name</th>
                       <th class="thead">State</th>
                       <th class="thead">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     include 'connect.php';
                     // Get data from form submission
                     if(isset($_REQUEST['id'])){
                      $id = $_REQUEST['id'];
                     }
                    
                     // Prepare and execute SQL statement to insert data
                      $sql = "SELECT   `id`,    `image`,  `owner_name`, `Hospital_name`, `address`, `city`, `state`, `zip_code`, `phone`, `email`, `password`, `confirm_password`  FROM `hospital_register` where id = '$id'";
                      // $select= "select * from student";
                     $result = mysqli_query($conn,$sql);
                      // Set Condition
                   while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td class="tbody">   <img src="images/profile<?php echo $row ['image']?>" alt="" height="50px" width="50px"> </td>
                    <td class="tbody"><?php echo $row['id']; ?></td>
                    <td class="tbody"><?php echo $row['owner_name']; ?></td>
                    <td class="tbody"><?php echo $row['Hospital_name']; ?></td>
                    <td class="tbody"><?php echo $row['state']; ?></td>
                    <td class="tbody">
                      <a href="edit_hos.php?id=<?php echo $row['id']?>"> <button type="button" style="border:none;"> <i class="fa-solid fa-pen fa-2xl" style="color: #5fb01c;"></i></button></a>
                  </td>
                 
                </tr>
                <?php }?>
                  </tbody>
                  <thead>
                    <tr> 
                       <th class="thead">City</th>
                       <th class="thead">address</th>
                       <th class="thead">Postal Code</th>
                       <th class="thead">Phone</th>
                       <th class="thead">Email</th>
                       <th class="thead">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     include 'connect.php';
                     // Get data from form submission
                     if(isset($_REQUEST['id'])){
                      $id = $_REQUEST['id'];
                     }
                    
                     // Prepare and execute SQL statement to insert data
                      $sql = "SELECT   `id`,    `image`,  `owner_name`, `Hospital_name`, `address`, `city`, `state`, `zip_code`, `phone`, email FROM `hospital_register` where id = '$id'";
                      // $select= "select * from student";
                     $result = mysqli_query($conn,$sql);
                      // Set Condition
                   while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td class="tbody"> <?php echo $row['city']; ?></td>
                    <td class="tbody"><?php echo $row['address']; ?></td>
                    <td class="tbody"><?php echo $row['zip_code']; ?></td>
                    <td class="tbody"><?php echo $row['phone']; ?></td>
                    <td class="tbody"><?php echo $row['email']; ?></td>
                    <td class="tbody">
                     <a href="del_hos.php?id=<?php echo $row['id']?>&delete"> <button type="button" style="border:none;"><i class="fa-solid fa-trash fa-xl" style="color: #ec0404;"></i></button></a>
                  </td>
                </tr>
                <?php }?>
                  </tbody>
                </table>
               </div>
             </div>
            </div>
        </div>
      </div>
    </div>
  </section>
 
   <!--   end    All Register   Hospital  -->
     
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>

</body>

</html>