<?php 

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if(isset($_POST['get_general']))
{
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
    exit;
}

if(isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);

    // Check if the 'site_title' and 'site_about' keys exist in $_POST
    if(isset($frm_data['site_title']) && isset($frm_data['site_about']))
    {
        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?"; 
        $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
        $res = update($q, $values, 'ssi');
        echo $res;
    }
    else
    {
        echo "Missing 'site_title' or 'site_about' in the POST data.";
    }
}

if (isset($_POST['upd_shutdown'])) {
    $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?"; 
    $values = [$frm_data, 1];
    $res = update($q, $values, "ii");
    echo $res;
}

?>
