<?php

header('Access-Control-Allow-Origin: http://34.143.182.143:8080');

// Allow additional headers if needed
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Set allowed methods (GET, POST, etc.)
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Allow credentials if needed
header('Access-Control-Allow-Credentials: true');

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

session_start();

if(!(isset($_SESSION['login']) && $_SESSION['login']==true)) {
        redirect('index.php');
    } if (isset($_POST['cancel_booking'])) {
        $frm_data = filteration($_POST);    

        $query = "UPDATE `booking_order` SET `booking_status`=?, `refund`=?
            WHERE `booking_id`=? AND `user_id`=?";
        
        $value = ['cancelled',0,$frm_data['id'], $_SESSION['uId']];

        $result = update($query, $values, 'siii');

        echo $result;
    }
?>
