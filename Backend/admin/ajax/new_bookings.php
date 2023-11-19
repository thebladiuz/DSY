<?php 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_bookings'])) {
    $frm_data = filteration($_POST);

    $query = "SELECT bo.*, bd.* FROM `booking_order` bo INNER JOIN `booking_details` bd ON bo.booking_id = bd.booking_id WHERE (bo.order_id LIKE ? OR bd.phonenum LIKE ? OR bd.user_name LIKE ?) AND (bo.booking_status = ? AND bo.arrival = ?) ORDER BY bo.booking_id ASC";

    $res = select($query, ["%{$frm_data['search']}%", "%{$frm_data['search']}%", "%{$frm_data['search']}%", "booked", 0], 'sssss');
        
    $i=1;
    $table_data = "";

    if(mysqli_num_rows($res)==0){
        echo"<b>No Data Found!</b>";
        exit;
    }
    
    while ($data = mysqli_fetch_assoc($res)) {
        $date = date("d-m-Y", strtotime($data["datentime"]));
        $checkin = date("d-m-Y", strtotime($data["check_in"]));
        $checkout = date("d-m-Y", strtotime($data["check_out"]));

        $table_data .="
            <tr>
                <td>$i</td>
                <td>
                    <span class='badge bg-primary'>
                        Order ID: $data[order_id]
                    </span>
                    <br>
                    <b>Name:</b> $data[user_name]
                    <br>
                    <b>Phone No:</b> $data[phonenum]
                </td>
                <td>
                    <b>Room:</b> $data[room_name]
                    <br>
                    <b>Price:</b> $$data[price]
                </td>
                <td>
                    <b>Check in:</b> $data[check_in]
                    <br>
                    <b>Check out:</b> $data[check_out]
                    <br>
                    <b>Paid:</b> $$data[trans_amt]
                    <br>
                    <b>Date:</b> $date
                </td>
                <td>
                    <button type='button' onclick='assign_room($data[booking_id])' class='btn text-white btn-sm fw-bold custom-bg shadow-none' data-toggle='modal' data-target='#assign-room'>
                        <i class='fa-regular fa-square-check'></i> Assign Room
                        </button>
                    <br>
                    <button type='button' onclick='cancel_booking($data[booking_id])' class='mt-2 btn btn-outline-danger btn-sm fw-bold shadow-none'>
                        <i class='fa fa-trash'></i> Cancel Booking
                    </button>
                </td>
            </tr>
        ";

        $i++;
    }

    echo $table_data;
}

if (isset($_POST['assign_room'])) {
    $frm_data = filteration($_POST);
    
    $query = "UPDATE `booking_order` bo INNER JOIN `booking_details` bd ON bo.booking_id = bd.booking_id SET bo.arrival = ?, bo.rate_review = ?, bd.room_no = ? WHERE bo.booking_id = ?";
    $values = [1,0, $frm_data['room_no'], $frm_data['booking_id']];
    
    $res = update($query, $values, 'iisi');

    echo 1;
    exit;
}

if (isset($_POST['cancel_booking'])) {
    $frm_data = filteration($_POST);

    $query = "UPDATE `booking_order` SET `booking_status`=?, `refund`=? WHERE booking_id = ?";
    $values = ['canceled',0,$frm_data['booking_id']];
    $res = update($query, $values, 'sii');

    echo $res;
}
    
?>