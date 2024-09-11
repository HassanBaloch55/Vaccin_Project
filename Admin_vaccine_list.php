 <?php 
 include 'admin_Navbar.php';
 ?><!-- My vaccines List  section -->
  <section class="Vaccine_status layout_padding bg-white">
             <div class="container">
              <div class="table-responsive">
               <?php
                  // this link is connect with database
                      include 'connect.php';
                    $sql = "SELECT * FROM  vaccine_updates";
                    $result = mysqli_query($conn, $sql) or die("query unsuccess");
                      ?>
               <table class="table table-striped"> 
               <h2 class="text-center mt-3 mb-3">All Hospitals Vaccine List</h2>
     
                 <thead >
                   <th  class="thead">Id</th>
                   <th  class="thead">Vaccine Name</th>
                   <th  class="thead">Hospital Name</th>
                   <th  class="thead">Quantity</th>
                   <th  class="thead">Expire Date</th>
                
                 
   </thead>
    
    <?php
        while ($row =mysqli_fetch_assoc($result)){
      ?>
      <tr>        <td class="tbody"><?php echo $row ['Id']?></td>
                  <td class="tbody"><?php echo $row ['Vaccine_name']?></td>
                  <td class="tbody"><?php echo $row ['Hospital_name'] ?></td>
                  <td class="tbody"><?php echo $row ['Quantity'] ?></td>
                  <td class="tbody"><?php echo $row ['Expire_date'] ?></td>
                  <?php
                   } ;
                   ?>
           </tr>
     </tbody>
    </table>
    </div>
   </div>
 </section>
     <!--  End My vaccines List  section -->
  