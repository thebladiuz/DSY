<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: *");

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

if(isset($_POST['register'])) {
    $data = filteration($_POST);

    // Match password and confirm password field
    if($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    // Check if the user exists based on email or phone number
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1", [$data['email'], $data['phonenum']], "ss");

    if(mysqli_num_rows($u_exist) != 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    // Upload user image to the server
    $img = uploadUserImage($_FILES['profile']);

    if($img == 'inv_img') {
        echo 'inv_img';
        exit;
    } else if($img == 'upd_failed') {
        echo 'upd_failed';
        exit;
    }

    // Hash the password
    $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `profile`, `password`) VALUES (?,?,?,?,?,?,?,?)";
    $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['pincode'], $data['dob'], $img, $enc_pass];

    if(insert($query, $values, 'ssssssss')) {
        echo 1;
    } else {
        echo 'ins_failed';
    }
}

if(isset($_POST['login'])) {
    $data = filteration($_POST);

    $u_exist = select("SELECT * FROM `user_cred` WHERE `email`=? OR `phonenum`=? LIMIT 1", [$data['email_mob'], $data['email_mob']], "ss");

    if(mysqli_num_rows($u_exist) == 0) {
        echo 'inv_email_mob';
    } else {
        $u_fetch = mysqli_fetch_assoc($u_exist);
        if($u_fetch['status'] == 0) {
            echo 'inactive';
        } else {
            if(!password_verify($data['pass'], $u_fetch['password'])) {
                echo 'invalid_pass';
            } else {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['uId'] = $u_fetch['id'];
                $_SESSION['uName'] = $u_fetch['name'];
                $_SESSION['uPic'] = $u_fetch['profile'];
                $_SESSION['uPhone'] = $u_fetch['phonenum'];
                echo 1;
            }
        }
    }
}
?>