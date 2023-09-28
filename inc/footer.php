<div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">HOTEL</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.
        </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="contact-us.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
        <a href="about-us.php" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 p-4">
        <h5 class="mb-3">Follow us</h5>
        <?php
        if($contact_r['fb']!=''){
          echo<<<data
          <a href="$contact_r[fb]" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="fa-brands fa-facebook me-1"></i> Facebook
          </a><br>

          data;
        }
        
        ?>
        
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="fa-brands fa-instagram me-1"></i> Instagram
        </a><br>
        <a href="<?php echo $contact_r['tw'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="fa-brands fa-twitter me-1"></i> Twitter
        </a><br>
      </div>
    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-3 mb-3">Designed and Developed by ©HOTEL</h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  <script>
    function setActive()
    {
      let navbar =document.getElementById('nav-bar');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++)
      {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0){
          a_tags[i].classList.add('active');
        }
      }
    }
  </script>