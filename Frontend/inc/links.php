<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.2-web/css/all.css">
<link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.2-web/css/all.min.css">
<link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.2-web/css/brands.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<?php
// session_start();

require('../Frontend/admin/inc/db_config.php');
require('../Frontend/admin/inc/essentials.php');

$contact_q ="SELECT * FROM contact_details WHERE sr_no=?";
$settings_q ="SELECT * FROM settings WHERE sr_no=?";
$values = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
$settings_r = mysqli_fetch_assoc(select($settings_q,$values,'i'));

if($settings_r['shutdown']){
    echo<<<alertbar
    <div class='bg-danger text-center p-2 fw-bold'>
        <i class="fa fa-exclamation-triangle-fill"></i>
        Bookings are temporarily closed!
    </div>
    alertbar;
}
?>