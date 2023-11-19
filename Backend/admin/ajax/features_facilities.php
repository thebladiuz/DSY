<?php 

header('Access-Control-Allow-Origin: http://34.143.182.143:8080');

// Allow additional headers if needed
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Set allowed methods (GET, POST, etc.)
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Allow credentials if needed
header('Access-Control-Allow-Credentials: true');

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_feature'])) {

    $frm_data = filteration($_POST);

    $q = "INSERT INTO `features` (`name`) VALUES (?)";
    $values = [$frm_data['name']];
    $res = insert($q, $values, 's');
    echo $res;
}

if (isset($_POST['get_features'])) {
    $res = selectAll('features');
    $i = 1;

    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr>
            <td>$i</td>
            <td>$row[name]</td>
            <td>
                <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm shadow-none">
                <i class="fa fa-trash"></i> Delete
        </button>
            </td>
        </tr>
    data;
    $i++;
    }
}

if (isset($_POST['rem_feature'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_feature']];

    $check_q = select('SELECT * FROM `room_features` WHERE `features_id`=?', [$frm_data['rem_feature']], 'i');

    if (mysqli_num_rows($check_q)==0) {
        $q = "DELETE FROM `features` WHERE `id`=?";
    $res = delete($q,$values,'i');
    echo $res;
    } else {
        echo 'room_added';
    } 
}

if (isset($_POST['add_facility'])) {
    $frm_data = filteration($_POST);

    $img_r = uploadSVGImage($_FILES['icon'],FACILITIES_FOLDER);

    if ($img_r === `inv_img`) {
        echo $img_r;
    } 
    else if ($img_r === `inv_size`) {
        echo $img_r;
    } 
    else if ($img_r === `upd_failed`) {
        echo $img_r;
    } else {
        $q = "INSERT INTO `facilities` (`icon`, `name`, `description`) VALUES (?,?,?)";
        $values = [$img_r, $frm_data['name'], $frm_data['desc']]; 
        $res = insert($q, $values, 'sss');
        echo $res;
    }
}

if (isset($_POST['get_facilities'])) {
    $res = selectAll('facilities');
    $i=1;
    $path = FACILITIES_IMG_PATH;

    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr>
            <td>$i</td>
            <td><img src="$path$row[icon]" width="100px"></td>
            <td>$row[name]</td>
            <td>$row[description]</td>
            <td>
                <button type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm shadow-none">
                    <i class="fa fa-trash"></i> Delete
                </button>        
            </td>
        </tr>
    data;
    $i++;
    }
}

if (isset($_POST['rem_facility'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_facility']];

    // Check if the facility is associated with any room
    $q_check_association = "SELECT COUNT(*) FROM `room_facilities` WHERE `facilities_id` = ?";
    $count_association = select($q_check_association, $values, 'i');

    if ($count_association === false) {
        echo '0'; // Facility not found or another error occurred.
    } elseif (mysqli_fetch_assoc($count_association)['COUNT(*)'] > 0) {
        echo 'room_added'; // Facility is associated with a room.
    } else {
        // No association with rooms, safe to delete.
        $q = "DELETE FROM `facilities` WHERE `id`=?";
        $affected_rows = delete($q, $values, 'i');

        if ($affected_rows === 0) {
            echo '0'; // Facility not found or another error occurred.
        } else {
            echo '1'; // Facility was successfully removed.
        }
    }
}

?>