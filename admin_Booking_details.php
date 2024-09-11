<?php 
include 'admin_Navbar.php';

?>
  
    <!-- start   booking Hospital_Bookings Requests  -->
  <section class="service_section layout_padding" style="padding: 1vh 10vw;">
    <div class="service_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-12">
             <div class="Hospital_Bookings">
              <h5>Parents Bookings</h5>
               <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                       <th class="thead">Chlid Name</th>
                       <th class="thead">Birth Date</th>
                       <th class="thead">Parent</th>
                       <th class="thead">City</th>
                       <th class="thead">Hospital</th>
                       <th class="thead">Email</th>
                       <th class="thead">Booking Date</th>
                       <th class="thead"> Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  
                      include 'connect.php';
                     $sql = "SELECT * FROM `booking_requests`" ;
                     $result = mysqli_query($conn ,$sql );
                   while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                
                    <td class="tbody"><?php echo $row['Child_name']; ?></td>
                    <td class="tbody"><?php echo $row['birth_date']; ?></td>
                    <td class="tbody"><?php echo $row['Parent_name']; ?></td>
                    <td class="tbody"><?php echo $row['parent_city']; ?></td>
                    <td class="tbody"><?php echo $row['hospital_name']; ?></td>
                    <td class="tbody"><?php echo $row['requester_email']; ?></td>
                    <td class="tbody"><?php echo $row['booking_date']; ?></td>
                    <td class="tbody"><?php echo $row['status']; ?></td>
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
   <!--   end    booking Hospital_Bookings Requests  -->
     <!-- start chat message section -->
  
  
<script>
//  admin section  chat & menu
let chatSection = document.getElementById('chatSection');
let chatToggleBtn = document.getElementById('chat_Btn');

chatToggleBtn.addEventListener('click', () => {
    chatSection.classList.toggle('open');
});

let AllLinks = document.getElementById('AllLinks');
let Menu_btn = document.getElementById('Menu_btn');
 Menu_btn.addEventListener('click',function(){
  if(AllLinks.classList.toggle('AllLinks')) {
    AllLinks.classList.toggle('move');
  }
  else {
    AllLinks.classList.toggle('move')
  }
 })
  // end  admin section  chat & menu</script>

<!-- jQery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- owl slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="script.js"></script>
</body>

</html>
