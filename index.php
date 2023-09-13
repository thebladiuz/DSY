<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

      .custom-bg{
        background-color: #2ec1ac;
        border: 1px solid #2ec1ac;
      }
      .custom-bg:hover{
        background-color: #279e8c;
        border-color: #279e8c;
      }

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
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm stick-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#">About</a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <div style="margin: 10px;"></div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="fa fa-user"></i>&nbsp User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="login-email">Email address</label>
                        <input type="email" class="form-control shadow-none" id="login-email">
                    </div>
                    <div class="mb-3">
                        <label for="login-password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control shadow-none" id="login-password">
                            <button type="button" class="btn btn-outline-secondary" id="toggle-login-password">&#128065;</button>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                        <br>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" style="flex: 1;">Create Account</a>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="fa fa-user"></i>&nbsp User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                  Note: Your details must match with your ID (ID card, passport, driving license, etc.) that will be required during check-in.
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label for="register-name">Name</label>
                        <input type="text" class="form-control shadow-none" id="register-name">
                  </div>
                    <div class="col-md-6 ps-0 mb-3">
                      <label for="register-email">Email address</label>
                        <input type="email" class="form-control shadow-none" id="register-email">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label for="register-phone">Phone Number</label>
                    <input type="number" class="form-control shadow-none" id="register-phone">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label for="register-picture">Picture</label>
                    <input type="file" class="form-control shadow-none" id="register-picture">
                  </div>
                  <div class="col-md-12 ps-0 mb-3">
                    <label for="register-address">Address</label>
                    <textarea class="form-control shadow-none" rows="1" id="register-address"></textarea>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label for="register-postal-code">Postal Code</label>
                    <input type="number" class="form-control shadow-none" id="register-postal-code">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label for="register-date-of-birth">Date of Birth</label>
                    <input type="date" class="form-control shadow-none" id="register-date-of-birth">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                  <label for="register-password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control shadow-none" id="register-password">
                            <button type="button" class="btn btn-outline-secondary" id="toggle-register-password">&#128065;</button>
                        </div>
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                  <label for="register-confirm-password">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control shadow-none" id="register-confirm-password">
                            <button type="button" class="btn btn-outline-secondary" id="toggle-register-confirm-password">&#128065;</button>
                        </div>
                  </div>
                </div>
              </div>
                    <br>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" style="flex: 1;">Already have an account? Login</a>
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
    <div class="col-lg-4 co-md-6">
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
  <div class="col-lg-4 co-md-6">
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
  <div class="col-lg-4 co-md-6">
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

<!-- Reach Us -->
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
            <i class="fa fa-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="#"class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 ps-2">
            <i class="fa fa-instagram me-1"></i> Instagram
          </span>
        </a>
        <br>
        <a href="#"class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 ps-2">
            <i class="fa fa-twitter me-1"></i> Twitter
          </span>
        </a>
  </div>
 </div>

 <div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">HOTEL</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="fa fa-facebook me-1"></i> Facebook
      </a>
      <br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="fa fa-instagram me-1"></i> Instagram
      </a>
      <br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="fa fa-twitter me-1"></i> Twitter
      </a>
      <br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 mb-3">Designed and Developed by HOTEL</h6>


<!-- JavaScript libraries for Bootstrap and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<!-- JavaScript code for the password toggle in the Login Modal -->
<script>
    const loginPasswordInput = document.getElementById('login-password');
    const toggleLoginPassword = document.getElementById('toggle-login-password');

    let isLoginPasswordVisible = false;

    toggleLoginPassword.addEventListener('click', function () {
        if (isLoginPasswordVisible) {
            loginPasswordInput.type = 'password';
            isLoginPasswordVisible = false;
        } else {
            loginPasswordInput.type = 'text';
            isLoginPasswordVisible = true;
        }
    });
</script>

<!-- JavaScript code for the password toggle in the Registration Modal -->
<script>
    const registerPasswordInput = document.getElementById('register-password');
    const toggleRegisterPassword = document.getElementById('toggle-register-password');
    const registerConfirmPasswordInput = document.getElementById('register-confirm-password');
    const toggleRegisterConfirmPassword = document.getElementById('toggle-register-confirm-password');

    let isRegisterPasswordVisible = false;
    let isRegisterConfirmPasswordVisible = false;

    toggleRegisterPassword.addEventListener('click', function () {
        if (isRegisterPasswordVisible) {
            registerPasswordInput.type = 'password';
            isRegisterPasswordVisible = false;
        } else {
            registerPasswordInput.type = 'text';
            isRegisterPasswordVisible = true;
        }
    });

    toggleRegisterConfirmPassword.addEventListener('click', function () {
        if (isRegisterConfirmPasswordVisible) {
            registerConfirmPasswordInput.type = 'password';
            isRegisterConfirmPasswordVisible = false;
        } else {
            registerConfirmPasswordInput.type = 'text';
            isRegisterConfirmPasswordVisible = true;
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

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
      slidesPerView: "auto",
      slidesPerView: "3",
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
