<?php 
 include 'admin_Navbar.php';
?>
        <!-- start all child details section -->
        <section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                  // this link is connect with database
                      include 'connect.php';
                    
                    $sql = "SELECT * FROM vaccination_status ";
                    $result = mysqli_query($conn, $sql) or die("query unsuccess");
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">Hospital Vaccination Records</h2>
     
                 <thead >
                   <th  class="thead">Register No:</th>
                   <th  class="thead">Chid Name</th>
                   <th  class="thead">Father Name</th>
                   <th  class="thead">Birth Date</th>
                   <th  class="thead">Contact Number</th>
                   <th  class="thead">City</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Hospital Email</th>
                   <th  class="thead">Delete</th>
                   <th  class="thead">Vaccine Report</th>
                 
   </thead>
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                  <td class="tbody"><?php echo $row ['Child_Reg'] ?></td>
                  <td class="tbody"><?php echo $row ['Child_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Father_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Birth_date'] ?></td>
                  <td class="tbody"><?php echo $row ['phone'] ?></td>
                  <td class="tbody"><?php echo $row ['City'] ?></td>
                  <td class="tbody"><?php echo $row ['Vaccine_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Email'] ?></td>
                  <td class="tbody">
                     <a href="admin_Del_section.php?V_id=<?php echo $row['V_id']?>&delete"><i class="fa-solid fa-trash fa-xl" style="color: #ec0404;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="admin_vac_report.php?V_id=<?php echo $row['V_id']?>&report"> <i class="fa-solid fa-id-card fa-lg" style="color: #0b3215;"></i></a>
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
  
            <!-- End all child details section -->
 <!-- script js -->
<!-- jQery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- owl slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<script type="text/javascript" src="script.js"></script>

</body>

</html>