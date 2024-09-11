<?php 
include 'connect.php';
include 'Navbar.php';
?>
     <section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                  // this link is connect with database
                      include 'connect.php';
                    $sql = "SELECT * FROM  hospital_bookings ";
                    $result = mysqli_query($conn, $sql) or die("query unsuccess");
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">My Booking List</h2>
     
                 <thead >
                   <th  class="thead">Name</th>
                   <th  class="thead">Email</th>
                   <th  class="thead">Phone</th>
                   <th  class="thead">City</th>
                   <th  class="thead">Booking Date</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Action</th>
                 
   </thead>
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                  <td class="tbody"><?php echo $row ['name'] ?></td>
                  <td class="tbody"><?php echo $row ['email'] ?></td>
                  <td class="tbody"><?php echo $row ['phone'] ?></td>
                  <td class="tbody"><?php echo $row ['City'] ?></td>
                  <td class="tbody"><?php echo $row ['hospital'] ?></td>
                  <td class="tbody"><?php echo $row ['booking_date'] ?></td>
                  <td class="tbody">
                     <a href="Cancelbooking.php?id=<?php echo $row['id']?>&delete"> 
                         <input type="button" value="Cancel your Booking" class="btn btn-primary">
                     </a>
                  </td>
                  <?php
                   } 
                   ?>
           </tr>
     </tbody>
    </table>
    </div>
   </div>
 </section>
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
  <script src="js/jquery.js"></script>
  <!-- End Google Map -->
</body>
</html>