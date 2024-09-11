<?php 
 include 'Hos_Navbar.php';
?>
  <!-- End navbar section -->
    
  <section class="contact_section layout_padding ">
   <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="page">
          <i class="fa-solid fa-at fa-2xl" style="color: rgb(42, 51, 48);"></i> <br>
           <span>
               <a href="">Mail us for contact !</a>
             </span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="page">
          <i class="fa-brands fa-whatsapp fa-2xl" style="color: #195012;"></i> <br>
         <span>
          <a href="">Contact us throw  Whatsapp!</a>
        </span>
      </div>
      </div>
    </div>
       <div class="row">
         <div class="col-md-6"><div class="page">
           <i class="fa-solid fa-phone fa-2xl" style="color: #1d6399;"></i> <br>
           <span>
             <a href="">Contact with our agent throw call !</a>
         </span>
       </div>
     </div>
      <div class="col-md-6">
        <div class="page">
          <i class="fa-brands fa-square-instagram fa-2xl" style="color: #fc2f2f;"></i> <br>
         <span>
           <a href="">Contact us throw Instagram !</a>
         </span>
       </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="page">
        <i class="fa-brands fa-pinterest fa-2xl" style="color: rgb(207, 4, 4);"></i> <br>
       <span>
         <a href="">Contact us throw Pinterest !</a>
       </span>
     </div>
   </div>
    <div class="col-md-6">
      <div class="page">
        <i class="fa-brands fa-facebook fa-2xl" style="color: blue;"></i> <br>
       <span>
        <a href="">Contact us throw Facebook !</a>
       </span>
    </div>
    </div>
  </div>
   </div>
  </section>

  <section class="contact_section layout_padding bg-white ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form action="">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Your Name" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                </div>
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
   <!-- faqs section -->
   <div class="container mt-5">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>

    <div id="faq" class="accordion">
        <div class="faq-item">
            <div class="faq-question" data-target="#answer1">
                What is the Vax Registry?
            </div>
            <div id="answer1" class="faq-answer">
                The Vax Registry is a centralized platform for recording and managing vaccination data across various hospitals.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" data-target="#answer2">
                How can I access my vaccination records?
            </div>
            <div id="answer2" class="faq-answer">
                You can access your vaccination records by logging into your account on the Vax Registry website.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question" data-target="#answer3">
                Is my data secure?
            </div>
            <div id="answer3" class="faq-answer">
                Yes, your data is stored securely and complies with all relevant data protection regulations.
            </div>
        </div>
    </div>
</div>
   <script>
    //   faqs section code
document.addEventListener('DOMContentLoaded', function() {
  let questions = document.querySelectorAll('.faq-question');
  
  questions.forEach(question => {
    question.addEventListener('click', function() {
        let answer = document.querySelector(this.getAttribute('data-target'));
        
        // Toggle the visibility of the answer
        if (answer.style.display === 'none' || answer.style.display === '') {
            answer.style.display = 'block';
        } else {
            answer.style.display = 'none';
        }
    });
  });
  });
  // end faqs section code
   </script>
  <!-- footer section -->
  <?php
    include 'hos_footer.php';
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
     <!-- script js -->
      <script src="js/script.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>