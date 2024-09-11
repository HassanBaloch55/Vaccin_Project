<?php 
include 'connect.php';
include 'admin_Navbar.php';
?>


<section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                    $sql = "SELECT * FROM  vaccine_date";
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
   <!-- End vaccination dates  -->
 
</body>
</html>