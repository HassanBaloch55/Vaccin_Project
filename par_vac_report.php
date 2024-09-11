<?php
 include 'Navbar.php'
?>
     <?php 
     include 'connect.php';
      $hospital = $_SESSION['Email'];
     $sql = "SELECT * FROM vaccine_report";
     $result = mysqli_query($conn ,$sql);
     $row = mysqli_fetch_array($result); 
     ?>
  <section class="vaccine_report_section  layout_padding">
    <div class="container-fluid">
            <div class="report-card">
                <h2>Vaccine Report Card</h2>
             <div class="main_card">
                 <div class="report_body">
                     <table>
                          <tr>
                             <th>Register No:</th>   <td><?php echo $row['Child_Reg'] ?></td>
                          </tr>
                          <tr>
                             <th>Child's Name:</th>    <td><?php echo $row['Child_name'] ?></td>
                          </tr>
                          <tr>
                             <th>Date of Birth:</th>    <td><?php echo $row['Birth_date'] ?></td>
                          </tr>
                          <tr>
                             <th>Father Name:</th>    <td><?php echo $row['Father_name'] ?></td>
                          </tr>
                          <tr>
                             <th>Father Number:</th>    <td><?php echo $row['F_Number'] ?></td>
                          </tr>
                          <tr>
                             <th>Parent Email:</th>    <td><?php echo $row['F_Email'] ?></td>
                          </tr>
                          <tr>
                             <th>Hospital Name:</th>    <td><?php echo $row['Hospital_name'] ?></td>
                          </tr>
                          <tr>
                             <th>Vaccine Name:</th>    <td><?php echo $row['Vaccine_name'] ?></td>
                          </tr>
                          
                          <tr>
                             <th>Vaccine Start Date:</th>    <td><?php echo $row['Vac_start_date'] ?></td>
                          </tr>
                          <tr>
                             <th>Vaccine End Date:</th>    <td><?php echo $row['Vac_end_date'] ?></td>
                          </tr>
                          <tr>
                             <th>Total Doses:</th>    <td><?php echo $row['Total_doses'] ?></td>
                          </tr>
                          <tr>
                             <th>Doctors Remarks:</th>  <td><?php echo $row['doc_remarks'] ?></td>
                          </tr>
                     </table>
                      <h5></h5>
                </div>
            </div>
        </div>
    </div>
   </section>
     <!-- footer section -->
      <?php 
       include 'par_footer.php'
      ?>
     <!-- end footer section -->
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
   <!-- jquery js -->
   <script type="text/javascript" src="js/jquery.js"></script>
    <!-- script  js -->
    <script type="text/javascript" src="script.js"></script>
 

</body>

</html>