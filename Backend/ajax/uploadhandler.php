<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require('admin/inc/essentials.php');

if (isset($_POST['add_image'])) {
    $img_r = uploadImage($_FILES['picture'], CAROUSEL_FOLDER);

    if ($img_r === 'inv_img') {
        echo $img_r;
    } else if ($img_r === 'inv_size') {
        echo $img_r;
    } else if ($img_r === 'upd_failed') {
        echo $img_r;
    } else {
        echo 'success';
    } echo json_encode(['status' => 'success', 'filename' => $img_r]);
}
?>
