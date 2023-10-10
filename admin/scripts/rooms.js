let add_room_form = document.getElementById('add_room_form');

add_room_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_rooms();
});

function add_rooms() {
    let data = new FormData();
    data.append('add_room', '');
    data.append('name', add_room_form.elements['name'].value);
    data.append('area', add_room_form.elements['area'].value);
    data.append('price', add_room_form.elements['price'].value);
    data.append('quantity', add_room_form.elements['quantity'].value);
    data.append('adult', add_room_form.elements['adult'].value);
    data.append('children', add_room_form.elements['children'].value);
    data.append('desc', add_room_form.elements['desc'].value);

    let features = [];
    document.querySelectorAll('[name="room_features[]"]').forEach(el => {
        if(el.checked) {
            features.push(el.value);
        }
    });

    let facilities = [];
    document.querySelectorAll('[name="room_facilities[]"]').forEach(el => {
        if(el.checked) {
            facilities.push(el.value);
        }
    });

    data.append('features', JSON.stringify(features));
    data.append('facilities', JSON.stringify(facilities));

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('add-room');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('success', 'New room added!');
            add_room_form.reset();
            get_all_rooms();
        }
        else {
            alert('error', 'Server Down!');
        }
    }

    xhr.send(data);
}

function get_all_rooms() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('room-data').innerHTML = this.responseText;
    }

    xhr.send('get_all_rooms');
}

let edit_room_form = document.getElementById('edit_room_form');

function edit_details(id) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onload = function () {
        console.log(this.responseText);
        if (xhr.status === 200) {
            try {
                let data = JSON.parse(this.responseText);

                if (data && data.roomdata) {
                    edit_room_form.elements['name'].value = data.roomdata.name;
                    edit_room_form.elements['area'].value = data.roomdata.area;
                    edit_room_form.elements['price'].value = data.roomdata.price;
                    edit_room_form.elements['quantity'].value = data.roomdata.quantity;
                    edit_room_form.elements['adult'].value = data.roomdata.adult;
                    edit_room_form.elements['children'].value = data.roomdata.children;
                    edit_room_form.elements['desc'].value = data.roomdata.description;
                    edit_room_form.elements['room_id'].value = data.roomdata.id;

                    edit_room_form.querySelectorAll('[name="features[]"]').forEach(el => {
                        el.checked = data.features.includes(Number(el.value));
                    });

                    edit_room_form.querySelectorAll('[name="facilities[]"]').forEach(el => {
                        el.checked = data.facilities.includes(Number(el.value));
                    });
                } else {
                    console.error("Invalid or empty response data.");
                }
            } catch (error) {
                console.error("Error parsing JSON data: " + error);
            }
        } else {
            console.error("Request failed with status: " + xhr.status);
        }
    }

    const requestData = { get_room: id };
    xhr.send(JSON.stringify(requestData));
}

edit_room_form.addEventListener('submit',function(e) {
    e.preventDefault();
    submit_edit_room();
});

function submit_edit_room() {
    let data = new FormData();
    data.append('edit_room', '');
    data.append('room_id', edit_room_form.elements['room_id'].value);
    data.append('name', edit_room_form.elements['name'].value);
    data.append('area', edit_room_form.elements['area'].value);
    data.append('price', edit_room_form.elements['price'].value);
    data.append('quantity', edit_room_form.elements['quantity'].value);
    data.append('adult', edit_room_form.elements['adult'].value);
    data.append('children', edit_room_form.elements['children'].value);
    data.append('desc', edit_room_form.elements['desc'].value);

    let features = [];
    edit_room_form.querySelectorAll('[name="features[]"]').forEach(el => {
        if(el.checked) {
            features.push(el.value);
        }
    });

    let facilities = [];
    edit_room_form.querySelectorAll('[name="facilities[]"]').forEach(el => {
        if(el.checked) {
            facilities.push(el.value);
        }
    });

    data.append('features', JSON.stringify(features));
    data.append('facilities', JSON.stringify(facilities));

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('edit-room');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('success', 'Room data room edited!');
            edit_room_form.reset();
            get_all_rooms();
        }
        else {
            alert('error', 'Server Down!');
        }
    }

    xhr.send(data);
}

function toggle_status(id, val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Status toggled!');
            get_all_rooms();
        } else {
            alert('error', 'Server down!');
        }
    }

    xhr.send('toggle_status=' + id + '&value=' + val);
}

function rem_room(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../admin/ajax/rooms.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Room removed!'); 
            get_features();
        } else if(this.responseText == 'room_added'){
            alert('error', 'Room is added in room!'); 
        } 
        else {
            alert('error', 'Server down!'); 
        }
    }
    xhr.send('rem_room='+val); 
}

window.onload = function () {
get_all_rooms();
}