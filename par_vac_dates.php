<?php 
include 'connect.php';
include 'Navbar.php';
?>


<section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                
                      include 'connect.php';
                      $hospital = $_SESSION['Email'];
                    $sql = "SELECT * FROM  vaccine_date  where Parent_Email = '$hospital'";
                    $result = mysqli_query($conn, $sql);
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">Parents Vaccination Dates</h2>
     
                 <thead>
                   <th  class="thead">Register No:</th>
                   <th  class="thead">Chid Name</th>
                   <th  class="thead">Father Name</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Vaccine Date</th>
                   <th  class="thead">Next Date</th>
                   <th  class="thead">Taken Doses</th>
                   <th  class="thead">Total Doses</th>
   </thead>
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                  <td class="tbody"><?php echo $row ['Child_Reg'] ?></td>
                  <td class="tbody"><?php echo $row ['Child_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Father_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Vaccine_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['vaccine_date'] ?></td>
                  <td class="tbody"><?php echo $row ['Upcomming'] ?></td>
                  <td class="tbody"><?php echo $row ['Taken_dose'] ?></td>
                  <td class="tbody"><?php echo $row ['Total_dose'] ?></td>
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