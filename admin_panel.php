<?php 
 include 'admin_Navbar.php';
?>
<section class="service_section layout_padding" style="padding: 1vh 10vw;">
    <div class="service_container">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="service_box">
              <i class="fa fa-user-o"></i>

              <h3>1072</h3>
              <p>Patients</p>
          </div>
            </div>
          <div class="col-md-3">
            <div class="service_box">
              <i class="fas fa-hospital-user"></i>
              <?php 
               $sql = "select id,count(Hospital_name) as Total_Hospitals from hospital_register;";
               $result = mysqli_query($conn, $sql);
               while( $row = mysqli_fetch_assoc($result)) {

              
              ?>
              <h3><?php echo $row ['Total_Hospitals'] ?></h3>
              <p>Hospitals</p>
          </div>
          <?php  }?>
          </div>
          <div class="col-md-3">
            <div class="service_box">
              <i class="fa fa-user-md" aria-hidden="true"></i>
              <?php 
               $sql = "select id,count(Parent_name) as Total_ruquest from booking_requests;";
               $result = mysqli_query($conn, $sql);
               while( $row = mysqli_fetch_assoc($result)) {
              ?>
              <h3><?php echo $row ['Total_ruquest'] ?></h3>
              <p>Booking Ruquests</p>
          </div>
          <?php  }?>
          </div>
          <div class="col-md-3">
            <div class="service_box">
              <i class="fa-solid fa-syringe"></i>
              <h3>1000</h3>
              <p>Childrens Vaccinated</p>
          </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service setion -->
    <!-- start   booking Hospital_Bookings Requests  -->
  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container-fluid" style="padding:0 6vw;">
       <?php
         include 'connect.php';
        // Handle acceptance/rejection
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $request_id = $_POST['request_id'];
            $action = $_POST['action'];
        
            if ($action == 'accept') {
                $status = 'Accepted';
                $subject = "Booking Request Accepted";
                $message = "Your booking request has been accepted.";
            } else {
                $status = 'Rejected';
                $subject = "Booking Request Rejected";
                $message = "Your booking request has been rejected.";
            }
        
            // Update booking request status
            $sql = "UPDATE booking_requests SET status= '$status' WHERE id='$request_id'";
            $result = mysqli_query($conn, $sql);
        
            // Get requester's email
            $sql = "SELECT requester_email FROM booking_requests WHERE id ='$request_id'";
            $result = mysqli_query($conn, $sql);
        
            // Send email
            // mail($requester_email, $subject, $message);
        
        }

          // Fetch all pending booking requests
          $result = $conn->query("SELECT * FROM booking_requests WHERE status='Pending'");
          ?>
        <div class="row">
          <div class="col-md-12">
             <div class="Hospital_Bookings">
              <h5>Upcomming Hospital Bookings</h5>
               <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                       <th class="thead">Chlid Name</th>
                       <th class="thead">Birth Date</th>
                       <th class="thead">Parent</th>
                       <th class="thead">Hospital</th>
                       <th class="thead">City</th>
                       <th class="thead">Email</th>
                       <th class="thead">Booking Date</th>
                       <th class="thead">Status</th>
                       <th class="thead">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td class="tbody"><?php echo $row['Child_name']; ?></td>
                    <td class="tbody"><?php echo $row['birth_date']; ?></td>
                    <td class="tbody"><?php echo $row['Parent_name']; ?></td>
                    <td class="tbody"><?php echo $row['parent_city']; ?></td>
                    <td class="tbody"><?php echo $row['hospital_name']; ?></td>
                    <td class="tbody"><?php echo $row['requester_email']; ?></td>
                    <td class="tbody"><?php echo $row['booking_date']; ?></td>
                    <td class="tbody"><?php echo $row['status']; ?></td>
                    <td class="tbody">
                        <form method="post">
                            <input type="hidden" name="request_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="action" value="accept" class="btn btn-success"><i class="fa-solid fa-square-check" style="color: #033a1b;"></i></button>
                            <button type="submit" name="action" value="reject" class="btn btn-danger"><i class="fa-solid fa-x" style="color: #ffffff;"></i></button>
                        </form>
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
   <!--   end    booking Hospital_Bookings Requests  -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>