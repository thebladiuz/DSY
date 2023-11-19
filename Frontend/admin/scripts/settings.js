let general_data, contacts_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contacts_s_form = document.getElementById('contacts_s_form');

let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp');

// Function to get general data
function get_general() {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');
    let shutdownToggle = document.getElementById('shutdown-toggle');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            try {
                general_data = JSON.parse(xhr.responseText);

                // Check if general_data is a valid JSON object
                if (typeof general_data === 'object' && general_data !== null) {
                    // Update page elements with the data
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

general_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value);
});

function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            try {
                const response = JSON.parse(xhr.responseText);

                if (response.success === 1) {
                    alert('success', 'Changes saved!');
                    get_general();

                    var myModal = document.getElementById('general-s');
                    var modal = new bootstrap.Modal(myModal);
                    modal.hide();

                } else {
                    alert('error', 'No changes made!');
                }
            } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        } else {
            console.error("Error updating general data");
        }
    }

    xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&upd_general=1');
}


document.addEventListener('DOMContentLoaded', function () {
    const shutdownToggle = document.getElementById('shutdown-toggle');

    shutdownToggle.addEventListener('change', function () {
        const newValue = this.checked ? 1 : 0;
        upd_shutdown(newValue);
    });
});

function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            try {
                const response = JSON.parse(xhr.responseText);

                if (val === 0) {
                    alert('success', 'Site has been reactivated!');
                } else {
                    alert('error', 'Site has been shutdown!');
                }
                // Optionally update the checkbox state here
                get_general();
            } catch (error) {
                console.error("Error parsing JSON response:", error);
                // Handle the error, e.g., display an error message to the user
            }
        } else {
            console.error("Error updating shutdown status");
            // Handle the error, e.g., display an error message to the user
        }
    }

    // Invert the value here before sending it to the server
    const invertedValue = val === 0 ? 1 : 0;
    xhr.send('upd_shutdown=' + invertedValue);
}

function get_contacts() {
    let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
    let iframe = document.getElementById('iFrame');
    let iframeInput = document.getElementById('iframe_inp');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
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

    iframeInput.addEventListener('change', function () {
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

function contacts_inp(data) {
    let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp']

    for (i = 0; i < contacts_inp_id.length; i++) {
        document.getElementById(contacts_inp_id[i]).value = data[i + 1];
    }
}

contacts_s_form.addEventListener('submit', function (e) {
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
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if (this.responseText == 1) {
            alert('success', 'Changes saved');
            get_contacts();
        } else {
            alert('error', 'No change made!');
        }
    }

    xhr.send(data_str);
}

team_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_member();
});

function add_member() {
    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_picture_inp.files[0]);
    data.append('add_member', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 'inv_img') {
            alert('error', 'Only JPG and PNG images are allowed!');
        }
        else if (this.responseText == 'inv_size') {
            alert('error', 'Image should be less then 2MB!');
        }
        else if (this.responseText == 'upd_failed') {
            alert('error', 'Image upload failed. Server Down!');
        }
        else {
            alert('success', 'New member added!');
            member_name_inp.value ='';
            member_picture_inp.value ='';
            get_members();
        }
    }

    xhr.send(data);
}

function get_members() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('team-data').innerHTML = this.responseText;
    }

    xhr.send('get_members');
}

function rem_member(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Image removed!'); // Updated alert arguments
            get_members();
        } else {
            alert('error', 'Server down!'); // Updated alert arguments
        }
    }
    xhr.send('rem_member=' + val); // Removed extra space after '='
}

window.onload = function () {
    get_general();
    get_contacts();
    get_members();
}
