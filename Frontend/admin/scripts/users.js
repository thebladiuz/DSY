
function get_users() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/users.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('users-data').innerHTML = this.responseText;
    }

    xhr.send('get_users');
}

function toggle_status(id, currentStatus) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/users.php", true);
    
    // Set the request header for form data
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // Calculate the new status by toggling the current status
    const newStatus = currentStatus === 1 ? 0 : 1;

    xhr.onload = function () {
        if (this.responseText == 1) {
            console.log('Status toggled successfully!');
            // Assuming get_users() updates the UI with the new status
            get_users();
        } else {
            console.log('Server error!');
        }
    }

    // Send the data as a URL-encoded string
    xhr.send('toggle_status=' + id + '&value=' + newStatus);
}

function remove_user(user_id){
    if(confirm("Are you sure, you want to delete this user")){
        let data = new FormData();
        data.append('user_id', user_id);
        data.append('remove_user', '');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../admin/ajax/users.php", true);

        xhr.onload = function () {
            if(this.responseText == 1) {
                alert('success', 'User Removed!');
                get_users();
            }
            else{
                alert('error', 'User removal failed!');
            }
        }
    xhr.send(data);
    }
}

function search_user(username){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/users.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('users-data').innerHTML = this.responseText;
    }

    xhr.send('search_user&name='+username);
}

window.onload = function () {
get_users();
}