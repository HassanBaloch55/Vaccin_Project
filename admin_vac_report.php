<?php
 include 'admin_Navbar.php'
?>
     <?php 
     include 'connect.php';
     $sql = "SELECT * FROM   vaccine_report";
     $result = mysqli_query($conn ,$sql);
     while($row = mysqli_fetch_array($result)){

    
     ?>
  <section class="vaccine_report_section  layout_padding">
    <div class="container">
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
                </div>
            </div>
        </div>
    </div>
   </section>
     <?php } ?>

</body>

</html>