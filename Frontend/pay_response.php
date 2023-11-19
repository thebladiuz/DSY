<?php

    require('http://34.126.67.208/admin/inc/db_config.php');
    require('http://34.126.67.208/admin/inc/essentials.php');

    session_start();
    unset($_SESSION['room']);

    function regenerate_session($uid) {
        $user_q = select("SELECT * FROM `user_cred` WHERE `id`=? LIMIT 1", [$uid], 'i');
        $user_fetch = mysqli_fetch_assoc($user_q);

        $_SESSION['login'] = true;
        $_SESSION['uId'] = $user_fetch['id'];
        $_SESSION['uName'] = $user_fetch['name'];
        $_SESSION['uPic'] = $user_fetch['profile'];
        $_SESSION['uPhone'] = $user_fetch['phonenum'];    }

    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");

    $paytmChecksum = "";
    $paramList = array();

    $isValidChecksum = false;

    $paramList = $_POST;
    $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";

    $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum);

    if($isValidChecksum == "TRUE") {
        $slct_query = "SELECT `booking_id`, `user_id` FROM `booking_order` WHERE `order_id`='{$_POST['ORDERID']}'";

        $slct_res = mysqli_query($con,$slct_query);

        if(mysqli_num_rows($slct_res)==0) {
            redirect('index.php');
        }

        $slct_fetch = mysqli_fetch_assoc($slct_res);

        if(!(isset($_SESSION['login']) && $_SESSION['login']==true)) {
            //regenerate session
        }


        if ($_POST["STATUS"] == "TXN_SUCCESS") {
           $upd_query = "UPDATE `booking_order` SET `booking_status`=`booked`, `trans_id`='$_POST[TXNID]', `trans_amt`='$_POST[TXMAMOUNT]', `trans_status`='$_POST[STATUS]', `trans_resp_msg`='$_POST[RESPMSG]' WHERE `booking_id`='$slct_fetch[booking_id]'";

           mysqli_query($con,$upd_query);

        } else {
            $upd_query = "UPDATE `booking_order` SET `booking_status`=`payment failed`, `trans_id`='$_POST[TSNID]', `trans_amt`='$_POST[TXMAMOUNT]', `trans_status`='$_POST[STATUS]', `trans_resp_msg`='$_POST[RESPMSG]' WHERE `booking_id`='$slct_fetch[booking_id]'";

            mysqli_query($con,$upd_query);

        }
        redirect('pay_status.php?order='.$_POST['ORDERID']);
    } else {
        redirect('index.php');
    }
    