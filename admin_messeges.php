<?php 
  include 'connect.php';
  include 'admin_Navbar.php';
 ?>
    <div class="container my-5">
        <h2 class="text-center mb-4">Messages</h2>
        <div class="table-responsive">
            <table class="table  AllHospitals">
                <thead>
                <tr> 
                  
                   <th class="thead">Name</th>
                   <th class="thead">Phone Number</th>
                   <th class="thead">Email</th>
                   <th class="thead">Messages</th>
                   <th class="thead">reply</th>
                   <th class="thead">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 include 'connect.php';
                 // Get data from form submission
                 if(isset($_REQUEST['Id'])){
                  $id = $_GET['Id'];
                 }
                 // Prepare and execute SQL statement to insert data
                  $sql = "SELECT   * from  contact_us where Id = '$id' ";
                  // $select= "select * from student";
                 $result = mysqli_query($conn,$sql);
                  // Set Condition
               while ($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
               
                <td class="tbody"><?php echo $row['Name']; ?></td>
                <td class="tbody"><?php echo $row['Phone']; ?></td>
                <td class="tbody"><?php echo $row['Email']; ?></td>
                <td class="tbody"><?php echo $row['Messege']; ?></td>
                <td class="tbody">
                   <a href="admin_reply_msg.php?Id=<?php echo $row['Id']?>"> <button type="button" style="border:none;"><i class="fa-solid fa-reply fa-2xl"></i></button></a>
                </td>
                <td class="tbody">
                   <a href="admin_Del_section.php?Id=<?php echo $row['Id']?>"> <button type="button" style="border:none;"> <i class="fa-solid fa-trash fa-xl" style="color: #ec0404;"></i></button></a>
                </td>
             
            </tr>
            <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
