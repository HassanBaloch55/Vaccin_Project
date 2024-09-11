<?php 
include 'admin_Navbar.php';
?>
   <!--   Start   All Register   Hospital  -->
   <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <div class="Hospital_Bookings">
              <h5> All Registeres Hospitals:</h5>
               <div class="table-responsive">
                <table class="table   bg-white">
                    <thead>
                    <tr> 
                       <th class="thead">Id</th>
                       <th class="thead">Owner Name</th>
                       <th class="thead">Hospital Name</th>
                       <th class="thead">State</th>
                       <th class="thead">City</th>
                       <th class="thead">Email</th>
                       <th class="thead">Details</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  
                      include 'connect.php';
                     $sql = "SELECT * FROM `Hospital_register`" ;
                     $result = mysqli_query($conn ,$sql );
                   while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td class="tbody"><?php echo $row['id']; ?></td>
                    <td class="tbody"><?php echo $row['owner_name']; ?></td>
                    <td class="tbody"><?php echo $row['Hospital_name']; ?></td>
                    <td class="tbody"><?php echo $row['city']; ?></td>
                    <td class="tbody"><?php echo $row['state']; ?></td>
                    <td class="tbody"><?php echo $row['email']; ?></td>
                    <td class="tbody">
                      <a href="AllDetails_Hospital.php?id=<?php echo $row['id']?>"> <input type="button" value="View Full Details" class="btn btn-info"></a>
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
 
   <!--   end    All Register   Hospital  -->
   
  
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>