<?php
    require('../admin/inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('../admin/inc/links.php'); ?>
    <link rel="stylesheet" type="text/css" href="../admin/css/style.css">
</head>
<body class="bg-light">

    <?php require('../admin/inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General settings section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General settings modal -->

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="site_title_inp">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_about_inp">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title_inp.value = general_data.site_title, site_about_inp.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" onclick="upd_general(site_title_inp.value, site_about_inp.value)" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.checked ? 1 : 0)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">
                            No customers will be allowed to book a hotel room when shut down mode is turned on.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('../admin/inc/scripts.php'); ?>
    <script>
        let general_data = {}; // Initialize an empty object to hold general data

    // Function to get general data
    function get_general() {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
        let shutdownToggle = document.getElementById('shutdown-toggle');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
             if (xhr.status === 200) {
                try {
                    general_data = JSON.parse(xhr.responseText);

                    // Check if general_data is a valid JSON object
                    if (typeof general_data === 'object' && general_data !== null) {
                        // Update your page elements with the data
                        site_title.innerText = general_data.site_title;
                        site_about.innerText = general_data.site_about;
                        site_title_inp.value = general_data.site_title;
                        site_about_inp.value = general_data.site_about;
                        shutdownToggle.checked = general_data.shutdown == 1 ? true : false;
                    } else {
                        console.error("Invalid JSON data received:", xhr.responseText);
                    }
                } catch (error) {
                    console.error("Error parsing JSON response:", error);
                }
            } else {
                console.error("Error fetching general data");
            }
        }

        xhr.send('get_general');
        }

    // Call get_general on page load
    window.onload = function() {
        get_general();
    }

    function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (xhr.status === 200) {
            try {
                var myModal = document.getElementById('general-s');
                var modal = new bootstrap.Modal(myModal);
                modal.hide();

                const response = JSON.parse(xhr.responseText);

                if (response.success === 1) {
                    alert('Changes saved!', 'success');
                    get_general();
                } else {
                    alert('No changes made!', 'error');
                }
            } catch (error) {
                console.error("Error parsing JSON response:", error);
                // Handle the error, e.g., display an error message to the user
            }
        } else {
            console.error("Error updating general data");
            // Handle the error, e.g., display an error message to the user
        }
    }

    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
}


function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (xhr.status === 200) {
        if (xhr.responseText == 1 && general_data.shutdown == 0) {
            alert('success','Site has been shutdown!');
        } else {
            alert('success', 'Shutdown mode off!')
        }
        general_data();

    xhr.send('upd_shutdown=' + val);
}

window.onload = function() {
    get_general();
}

// Custom alert function
function alert(message, type) {
    let alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type}`;
    alertDiv.textContent = message;

    document.body.appendChild(alertDiv);

    setTimeout(function() {
        alertDiv.remove();
    }, 3000);
}

    </script>
</body>
</html>