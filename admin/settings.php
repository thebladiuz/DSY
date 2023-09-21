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
    <link rel="stylesheet" href="../admin/inc/scripts.php">
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
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="site_title_inp" class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_about_inp" class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card border-0 shadow-sm mb-4">
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
                
                                <!-- Contact details section -->
                                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contacts Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="fa fa-phone"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="fa fa-phone"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text">
                                        <i class="fa fa-envelope"></i>
                                        <span id="email"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="fa-brands fa-facebook"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="fa-brands fa-instagram"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="fa-brands fa-twitter"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iFrame" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- contacts details modal -->

                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="address_inp" class="form-label fw-bold">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" id="register-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gmap_inp" class="form-label fw-bold">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" id="register-name">
                                                </div>
                                                <div class="mb-3">
                                                <p class="form-label fw-bold">Phone Numbers (with country code)</p>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email_inp" class="form-label fw-bold">Email</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control shadow-none" id="register-name">
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa-brands fa-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="iframe_inp" class="form-label fw-bold">iFrame Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Management Team section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Management Team</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"  data-bs-target="#team-s">
                            <i class="fa fa-plus-square"></i> Add
                        </button>
                    </div>

                    <div class="row" id="team-data">
                        <div class="col-md-2 mb-3">
                        <div class=" card bg-dark text-white">
                        <img src="../assets/images/about/IMG_17352.jpg" class="card-img">
                        <div class="card-img-overlay text-end">
                            <button type="button" class="btn btn-danger btn-sm shadow-none">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </div>
                        <p class="card-text text-center px-3 py-2">Random name</p>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>


                <!-- Management Team modal -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBack">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="model-title">Add Team Member</h5>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="member_name_imp"class="form-label fw-bold">Name</label>
                                <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                            </div>
                            <div class="mb-3">
                                <label class="member_picture_inp" class="form-label fw-bold">Picture</label>
                                <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" onclick="" class="btn text-secondary shadow-none" data-bs-toggle="modal"  data-bs-target="#team-s">
                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>

                    </form>
                </div> 
            </div>
        </div>
    </div>

    <?php require('../admin/inc/scripts.php'); ?>
    <script>
                let general_data, contacts_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contacts_s_form = document.getElementById('contacts_s_form');

let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_pictureinp = document.getElementById('member_picture_inp');

    // Function to get general data
    function get_general() {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
        let shutdownToggle = document.getElementById('shutdown-toggle');

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

        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value,site_about_inp.value);
        });

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
        if (xhr.responseText == 1 && general_data.shutdown == 0) {
            alert('success', 'Site has been shutdown!');
        } else {
            alert('success', 'Site has been shutdown!')
        }
        get_general();
    }
    xhr.send('upd_shutdown=' + val);
}

function get_contacts() {
        let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
        let iframe = document.getElementById('iFrame');
        let iframeInput = document.getElementById('iframe_inp');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                try {
                    contacts_data = JSON.parse(xhr.responseText);

                    if (typeof contacts_data === 'object' && contacts_data !== null) {
                        contacts_data = Object.values(contacts_data);

                        for (let i = 0; i < contacts_p_id.length; i++) {
                            document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                        }
                        iframe.src = contacts_data[9];
                        contacts_inp(contacts_data);
                    } else {
                        console.error("Invalid JSON data received:", xhr.responseText);
                    }
                } catch (error) {
                    console.error("Error parsing JSON response:", error);
                }
            } else {
                console.error("Error fetching contacts data. Status code:", xhr.status);
            }
        };

        iframeInput.addEventListener('change', function() {
        // Get the value from the input field
        let iframeSrc = iframeInput.value;

        // Set the src attribute of the iframe
        iframe.src = iframeSrc;
    });


        xhr.onerror = function () {
            console.error("An error occurred while fetching contacts data.");
        };


            xhr.send('get_contacts');
        }

        function contacts_inp(data)
        {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp']

            for(i=0; i<contacts_inp_id.length; i++){
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
            }
        }

        contacts_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts() {
    const index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
    const contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];

    let data_str = "";

    for (let i = 0; i < index.length; i++) {
        const key = index[i];
        const value = document.getElementById(contacts_inp_id[i]).value;
        data_str += `${key}=${encodeURIComponent(value)}&`;
    }

    data_str += "upd_contacts";

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        const myModal = document.getElementById('contacts-s');
        const modal = bootstrap.Modal.getInstance(myModal);

        if (xhr.status === 200) {
            if (this.responseText === '1') {
                // Success: Provide user feedback
                alert('success', 'Changes saved');
                get_contacts(); // You might want to refresh the data on success.
            } else {
                // Server returned an error
                alert('error', 'Failed to save changes');
            }
        } else {
            // Handle non-200 status codes (e.g., server errors)
            alert('error', 'An error occurred while saving changes');
        }

        modal.hide();
    };

    xhr.onerror = function () {
        // Handle network errors
        alert('error', 'Network error occurred');
    };

    xhr.send(data_str);
}

        team_s_form.addEventListener('submit' ,function(e){
            e. preventDefault();
            add_member();
        });

        function add_member ()
        {
            let data = new FormData();
            data.append ('name' , member_name_inp.value) ;
            data.append ('picture' ,member_picture_inp.files[0]);
            data.append ('add_member','');

            let xhr = new XMLHttpRequest();
            xhr.open("POST" , "ajax/settings_crud.php",true);

            xhr. onload = function(){
                // console.log(this.responseText)
                var myModal = document.getElementById('team-s');
                var modal = bootstrap.Modal.getInstance(myModal) ;
                modal.hide();
                if(this.responseText == 'inv_img'){
                alert('error', 'Only JPG and PNG images are allowed!');
                }else if(this.responseText == 'inv_size') {
                alert('error', 'Image should be less than 2MB!');   
                }else if(this.responseText == 'upd_failed'){
                alert('error', 'Image upload failed. Server Down!');
                }
                else{
                alert('success', 'New member added!');
                member_name_inp.value='';
                member_picture_inp.value='';
                get_member();
                }
            }
            xhr.send(data);
        }

        function get_member() {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php", true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                // Check if the element with the ID "team_data" exists
                let teamDataElement = document.getElementById('team_data');
                if (teamDataElement) {
                    // Update the HTML content of the "team_data" element
                    teamDataElement.innerHTML = xhr.responseText;
                }
            } else {
                console.error("Error fetching member data. Status code:", xhr.status);
            }
        };

        xhr.onerror = function () {
            console.error("An error occurred while fetching member data.");
        };

        xhr.send('get_member');
    }

    function rem_member(val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form--urlencoded');
        xhr.onload = function (){
            if(this.responseText==1){
                alert('success', 'Member removed!');
                get_member();
            }else{
            alert('error', 'Server down!');
            }
        }
        xhr. send ('rem_member= ' +val);
    }

window.onload = function(){
    get_general();
    get_contacts();
    get_member();
}
window.onload = function() {
    get_general();
    get_contacts();
}
    </script>
        <?php require('../admin/inc/scripts.php'); ?>
</body>
</html>