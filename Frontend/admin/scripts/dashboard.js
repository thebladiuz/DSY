function booking_analytics(period=1) 
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://34.126.67.208:8080/admin/ajax/dashboard.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        let data = JSON.parse(this.responseText);
        document.getElementById('total_bookings').textContent = data.total_bookings;
        document.getElementById('total_amt').textContent = '$'+data.total_amt;

        document.getElementById('active_bookings').textContent = data.active_bookings;
        document.getElementById('active_amt').textContent = '$'+data.active_amt;

        document.getElementById('canceled_bookings').textContent = data.canceled_bookings;
        document.getElementById('canceled_amt').textContent = '$'+data.canceled_amt;
    }

    xhr.send('booking_analytics&period='+period);
}

function user_analytics(period=1) 
{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "http://34.126.67.208:8080/admin/ajax/dashboard.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        let data = JSON.parse(this.responseText);
        console.log(data); // Add this line
        document.getElementById('total_new_reg').textContent = data.total_new_reg;
        document.getElementById('total_queries').textContent = data.total_queries;
        //document.getElementById('total_reviews').textContent = data.total_reviews;

    }

    xhr.send('user_analytics&period='+period);
}

document.addEventListener('DOMContentLoaded', function () {
    booking_analytics();
    user_analytics();
});