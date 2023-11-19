function get_bookings(search='') {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://34.126.67.208/admin/ajax/refund_bookings.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('table-data').innerHTML = this.responseText;
    }

    xhr.send('get_bookings&search='+search);
}

function refund_booking(id){
    if(confirm("Refund money for this booking?")){
        let data = new FormData();
        data.append('booking_id', id);
        data.append('refund_booking', '');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "http://34.126.67.208/admin/ajax/refund_bookings.php", true);

        xhr.onload = function () {
            if(this.responseText == 1) {
                alert('success', 'Booking Refunded!');
                get_bookings();
            }
            else{
                alert('error', 'Booking refunding failed!');
            }
        }
    xhr.send(data);
    }
}

window.onload = function () {
    get_bookings();
}