<?php 
include 'connect.php';
include 'admin_Navbar.php';
?>


<section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                    $sql = "SELECT * FROM  vaccinations_notification ";
                    $result = mysqli_query($conn, $sql);
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">Parents Vaccination Dates</h2>
     
                 <thead>
                   <th  class="thead">Chid Name</th>
                   <th  class="thead">Father Name</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Vaccine Date</th>
                   <th  class="thead">Delete</th>
              
              
                   
                 
   </thead>
    <?php
    
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>
                 
                  <td class="tbody"><?php echo $row ['child_name'] ?></td>
                  <td class="tbody"><?php echo $row ['parent_name'] ?></td>
                  <td class="tbody"><?php echo $row ['parent_email'] ?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['vaccine_name'] ?></td>
                  <td class="tbody"><?php echo $row ['vaccination_date'] ?></td>
                  <td class="tbody">
                     <a href="admin_del_section.php?N_id=<?php echo $row['N_id']?>&delete"> <button type="button" style="border:none;"><i class="fa-solid fa-trash fa-xl" style="color: #ec0404;"></i></button></a>
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
   <!-- End vaccination dates  -->
 
</body>
</html>