<?php
include 'Hos_Navbar.php'
?>


<section class="Vaccine_status layout_padding bg-white">
             <div class="container-fluid" style="padding: 0vh 3vw">
              <div class="table-responsive">
               <?php
                
                      include 'connect.php';
                      $hospital = $_SESSION['Email'];
                    $sql = "SELECT * FROM  vaccine_date  where Hos_Email = '$hospital'";
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
                   <th  class="thead">Edit</th>
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
                  <td class="tbody"><?php echo $row ['Vaccine_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['vaccine_date'] ?></td>
                  <td class="tbody"><?php echo $row ['Upcomming'] ?></td>
                  <td class="tbody"><?php echo $row ['Taken_dose'] ?></td>
                  <td class="tbody"><?php echo $row ['Total_dose'] ?></td>
                  <td class="tbody">
                      <a href="Edit_vaccine.php?V_id=<?php echo $row['D_id']?>&update"> <i class="fa-solid fa-pen fa-lg" style="color: #5fb01c;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="Hos_del_section.php?V_id=<?php echo $row['D_id']?>&delete"> <i class="fa-solid fa-trash fa-lg" style="color: #c50404;"></i></a>
                  </td>
                  <td class="tbody">
                     <a href="Par_vac_form.php?V_id=<?php echo $row['D_id']?>&report"> <i class="fa-solid fa-id-card fa-lg" style="color: #0b3215;"></i></a>
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
 <?php
  include 'hos_footer.php'; 
 ?>
 <!-- bootsrap cdn -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- bootsrap cdn -->
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
  <!-- End vaccintion record -->