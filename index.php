<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <?php require('inc/links.php') ?>
    <style>

        .availability-form {
            margin-top: -50px; /* Adjust this value as needed */
            position: relative; /* Add relative positioning to maintain the form's position */
            z-index: 2;
        }

        @media screen and (max-width: 575px) {
          .availability-form {
            margin-top: 0px; /* Adjust this value as needed */
            padding: 0 35px;
        }
        }

        .custom-size {
          font-size: 80px; /* Adjust the size as needed */
        } 
    </style>
</head>
<body class="bg-light">
  <?php require('inc/header.php');?>

<!-- Carousel -->
  <div class="swiper-container full-screen">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_1.png" class="w-100 d-block"></div>
      <div class="swiper-slide"> 
        <img src="assets/images/carousel/IMG_2.png" class="w-100 d-block"></div>
      <div class="swiper-slide"> 
        <img src="assets/images/carousel/IMG_3.png" class="w-100 d-block"></div>
      <div class="swiper-slide"> 
        <img src="assets/images/carousel/IMG_4.png" class="w-100 d-block"></div>
      <div class="swiper-slide"> 
        <img src="assets/images/carousel/IMG_5.png" class="w-100 d-block"></div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_6.png" class="w-100 d-block"></div> 
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>

<!--  Availaility Form -->
<div class="container availability-form">
  <div class="row">
    <div class="bg-white shadow p-3 rounded">
      <h5>Check Booking Availability</h5>
      <form class="row g-2 align-items-center">
        <div class="col-lg-3">
          <label for="form-label" class="form-label" style="font-weight: 500;">Check-in</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3">
          <label for="form-label" class="form-label" style="font-weight: 500;">Check-out</label>
          <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-lg-3">
          <label for="form-label" class="form-label" style="font-weight: 500;">Adult</label>
          <select class="form-select shadow-none">
            <option selected>None</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
          </select>
        </div>
        <div class="col-lg-3">
          <label for="form-label" class="form-label" style="font-weight: 500;">Children</label>
          <select class="form-select shadow-none">
            <option selected>None</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
          </select>
        </div>
        <div class="col-lg-1">
          <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Rooms -->
<h2 class="mt 5 pt-4 mb-5 text-center fm-bold f-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 co-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img class="card-img-top" src="assets/images/rooms/1.jpg">
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">$200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       2 Rooms
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Bathrooms
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Balcony
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       3 Sofa
      </span>   
    </div>
    <div class="facilities mb-4">
  <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Wifi
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Television
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Air Conditioning
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Room Heater
      </span>   
    </div>
    <div class="guests mb-4">
  <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       5 Adults
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       4 Children
      </span>
    </div>
    <div class="rating">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </span>
    </div>
    <br>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
      </div>   
    </div>
    </div>
  </div>
  <div class="col-lg-4 co-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img class="card-img-top" src="assets/images/rooms/1.jpg">
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">$200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       2 Rooms
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Bathrooms
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Balcony
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       3 Sofa
      </span>   
    </div>
    <div class="facilities mb-4">
  <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Wifi
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Television
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Air Conditioning
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Room Heater
      </span>   
    </div>
    <div class="guests mb-4">
  <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       5 Adults
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       4 Children
      </span>
    </div>
    <div class="rating">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </span>
    </div>
    <br>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
      </div>   
    </div>
    </div>
  </div>
  <div class="col-lg-4 co-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
  <img class="card-img-top" src="assets/images/rooms/1.jpg">
  <div class="card-body">
    <h5>Simple Room Name</h5>
    <h6 class="mb-4">$200 per night</h6>
    <div class="features mb-4">
      <h6 class="mb-1">Features</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       2 Rooms
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Bathrooms
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       1 Balcony
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       3 Sofa
      </span>   
    </div>
    <div class="facilities mb-4">
  <h6 class="mb-1">Facilities</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Wifi
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Television
      </span> 
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Air Conditioning
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       Room Heater
      </span>   
    </div>
    <div class="guests mb-4">
  <h6 class="mb-1">Guests</h6>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       5 Adults
      </span>
      <span class="badge rounded-pill text-bg-light text-dark text-wrap">
       4 Children
      </span>
    </div>
    <div class="rating">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </span>
    </div>
    <br>
    <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
      </div>   
    </div>
    </div>
  </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fm-bold shadow-none">More Rooms >>></a>
    </div>
  </div>
</div>

<!-- Facilities -->
<h2 class="mt 5 pt-4 mb-5 text-center fm-bold f-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-whiter rounded shadow py-4 my-3">
      <i class="fa fa-wifi custom-size"></i>
      <br>
      <br>
      <h5 class="mt3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-whiter rounded shadow py-4 my-3">
      <i class="fa fa-wifi custom-size"></i>
      <br>
      <br>
      <h5 class="mt3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-whiter rounded shadow py-4 my-3">
      <i class="fa fa-wifi custom-size"></i>
      <br>
      <br>
      <h5 class="mt3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-whiter rounded shadow py-4 my-3">
      <i class="fa fa-wifi custom-size"></i>
      <br>
      <br>
      <h5 class="mt3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-whiter rounded shadow py-4 my-3">
      <i class="fa fa-wifi custom-size"></i>
      <br>
      <br>
      <h5 class="mt3">Wifi</h5>
    </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-fold shadow-none">More Facilities >>></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials -->
<h2 class="mt 5 pt-4 mb-5 text-center fm-bold f-font">TESTIMONIALS</h2>

<div class="container mt-5">
<div class="swiper swiper-testimonials">
  <div class="swiper-wrapper mb-5">

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="assets/images/about/staff.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.</p>
      <div class="rating">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="assets/images/about/staff.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.</p>
      <div class="rating">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="assets/images/about/staff.svg" width="30px">
        <h6 class="m-0 ms-2">Random user1</h6>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.</p>
      <div class="rating">
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      <i class="fa fa-star text-warning"></i>
      </div>
      </div>
    </div>
  <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-fold shadow-none">Find out more >>></a>
  </div>
</div>
      </div>

<!-- Reach Us -->

<?php
//$contact_q ="SELECT = FROM 'contact_details' WHERE 'sr_no'=?";
//$values = [1];
//$contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
//print_r($contact_r);
//?>
<h2 class="mt 5 pt-4 mb-5 text-center fm-bold f-font">REACH US</h2>

 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white-rounded">
      <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0911610888375!2d105.79210327247685!3d20.988982589148986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adb29ed54487%3A0xbe22035eae87b5d7!2sHanoi%20University!5e0!3m2!1sen!2s!4v1694604515842!5m2!1sen!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +917778889991"class="d-inline-block mb-2 text-decoration-none text-dark"><i class="fa fa-phone"></i> +917778889991</a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#"class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 ps-2">
           <i class="fa-brands fa-facebook me-1"></i></i> Facebook
          </span>
        </a>
        <br>
        <a href="#"class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 ps-2">
            <i class="fa-brands fa-instagram me-1"></i></i> Instagram
          </span>
        </a>
        <br>
        <a href="#"class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 ps-2">
            <i class="fa-brands fa-twitter me-1"></i> Twitter
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php')?>

<!-- JavaScript libraries for Bootstrap and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- JavaScript code for the Swiper Slider -->
<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true, // Enable loop
    autoplay: {
      delay: 3000, // Set autoplay delay in milliseconds
    },
  });
</script>
<script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 3,
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
</script>
</body>
</html>