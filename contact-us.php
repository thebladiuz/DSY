<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Contact</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
  <style>
  </style>
  <?php require('inc/header.php');?>

  <div class="my-5">
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.
    </p>
  </div>

  <?php
/*  $contact_q ="SELECT * FROM contact_details WHERE sr_no=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
  */
  ?>

  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <h5>Address</h5>
              <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoreation-none text-dark">
              <i class="fa fa-location-dot">&nbsp</i><?php echo $contact_r['address'] ?></a>                
              <h5 class="mt-4">Call us</h5>
              <a href="tel: +<?php echo $contact_r['pn1'] ?>"class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="fa fa-phone"></i> <?php echo $contact_r['pn1'] ?></a>
              <br>
              <?php
              if($contact_r['pn2']!=''){
                echo<<<data
                <a href="tel: $contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                  <i class="fa fa-phone"></i> $contact_r[pn2]
                  </a>
                data;
              }
              
              ?>
              <h5 class="mt-4">Email</h5>
              <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark">
                <i class="fa fa-envelope"></i> <?php echo $contact_r['email'] ?></a>
              <h5 class="mt-4">Follow us</h5>
              <?php
                if($contact_r['fb']!=''){
                  echo<<<data
                  <a href="$contact_r[fb]" class="d-inline-block text-dark fs-5 me-2">
                     <i class="fa-brands fa-facebook me-1"></i>
                  </a>
                  data;

                }
              ?>
              
              <a href="<?php echo $contact_r['insta'] ?>"class="d-inline-block text-dark fs-5 me-2">
                <i class="fa-brands fa-instagram me-1"></i>
              </a>
              <a href="<?php echo $contact_r['tw'] ?>"class="d-inline-block text-dark fs-5 me-2">
                <i class="fa-brands fa-twitter me-1"></i>              
              </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
              <h5>Send a message</h5>
              <div class="mt-3">
                <label for="form-label" style="font-weight: 500">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label for="form-label" style="font-weight: 500">Email</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label for="form-label" style="font-weight: 500">Subject</label>
                <input type="text" class="form-control shadow-none">
              </div>
              <div class="mt-3">
                <label for="form-label" style="font-weight: 500">Message</label>
                <textarea class="form-control shadow-none" rows="5" style="resize: none"></textarea>
              </div>
              <button type="submit" class="btn text-white custom-bg mt-3">Send Message</button>
            </form>
          </div>
        </div>
    </div>
  </div>

  <?php require('inc/footer.php')?>

  <!-- JavaScript libraries for Bootstrap and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</body>
</html>