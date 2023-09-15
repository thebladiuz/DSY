<?php
//require('admin/inc/db/config.php');
//require('admin/inc/essentials.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm stick-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact-us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about-us.php">About Us</a>
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