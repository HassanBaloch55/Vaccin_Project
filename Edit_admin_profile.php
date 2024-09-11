<?php 
include 'connect.php';
 if (isset($_POST['update'])) {
    // Get the form data
    $id = $_POST['id'];
    $User = $_POST['Name'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/profile". $filename;
    move_uploaded_file($tempname, $folder);

    // Update the record in the database
      $sql = "UPDATE  admin  SET  Name ='$User',image = '$filename' where id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record updated successfully";
        header("Location: Edit_admin_profile.php");
        
    } else {
        echo "Failed to update record";
    }
 }
 include 'admin_Navbar.php';
?>


<section class="input_form">
        <div class="bg d-flex justify-content-center align-items-center " style="background-image: url('images/hero-bg.jpg');">
           <div class="container">
              <div class="form-container">
                       <h3 class="text-center mt-3  mb-3 text-success"> Edit My Profle </h3>
                       <?php
                      $hospital = $_SESSION['Email'];
                      $sql = " Select * from  admin  where email = '$hospital'";
                      $result = mysqli_query($conn ,$sql );
                      $row = mysqli_fetch_array($result);
                     ?>
                       <form method="post" enctype="multipart/form-data">
                       <div class="row">
                   <div class="col-md-6">
                   <img src="images/profile<?php echo $row ['image'] ?>" alt="">
                   <input type="file" name="image" id="">
                   </div>
                       </div>
                   <div class="row">
                      <div class="form-group col-md-2">
                         <label for="id">Id</label>
                         <input type="text" class="form-control" value="<?php echo $row ['id']; ?>" id="id" name="id" required>
                     </div>
                       <div class="form-group col-md-5">
                         <label for="Owner Name">User Name</label>
                         <input type="text" class="form-control" value="<?php echo $row ['Name']; ?>" id="Name" name="Name" required>
                     </div>
                       <button type="submit" name="update" class="Sign-up-btn">Save</button>
                   </div>
               </div>
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>