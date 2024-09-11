<?php 
 include 'admin_Navbar.php';
?>
<style>
.reply_section{
    border: 1px solid green;
    background-color: #047e7e;;
}
</style>
    <section class="reply_section">
      <div class="container my-5">
          <h2 class="text-center mb-4 text-white">Reply to Message</h2>
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card shadow-sm">
                      <div class="card-body">
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
                          <h5 class="card-title"><?php echo $row ['Name'] ?></h5>
                          <p><strong>From:</strong> <?php echo $row ['Email'] ?></p>
                          <p><strong>Message:</strong> <?php echo $row ['Messege'] ?></p>
                          <?php }?>
                          <hr>
                          <?php  
                          $id = $_GET ['Id'];
                          $sql = "SELECT   * from  contact_us where Id = '$id' ";
                          $result = mysqli_query($conn ,$sql);
                          $row = mysqli_fetch_array($result);
                          ?>
                          <form>
                              <div class="mb-3">
                                  <label for="replyEmail" class="form-label">To</label>
                                  <input type="email" class="form-control" id="replyEmail" value="<?php echo $row ['Email'] ?>" readonly>
                              </div>
                              <div class="mb-3">
                                  <label for="replyMessage" class="form-label">Your Reply</label>
                                  <textarea class="form-control" id="replyMessage" rows="8" placeholder="Type your reply here..." required></textarea>
                              </div>
                              <button type="submit" class="Sign-up-btn">Send Reply</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
