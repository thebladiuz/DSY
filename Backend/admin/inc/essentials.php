<?php
// Frontend URLs
define('FRONTEND_BASE_URL', 'http://34.143.182.143:8080/');
define('FRONTEND_ASSETS_PATH', FRONTEND_BASE_URL . 'assets/');
define('FRONTEND_IMAGES_PATH', FRONTEND_ASSETS_PATH . 'images/');

// Backend URLs
define('BACKEND_BASE_URL', 'http://34.126.67.208:8080/'); // Change this to your backend server URL
define('BACKEND_UPLOAD_PATH', BACKEND_BASE_URL . 'admin/ajax/upload-handler.php');

// Function to append frontend base URL to relative paths
function frontendPath($path) {
    return FRONTEND_BASE_URL . $path;
}

// Function to append backend base URL to relative paths
function backendPath($path) {
    return BACKEND_BASE_URL . $path;
}

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        header("location: " . frontendPath('index.php'));
        echo"<script>
            window.location.href='" . frontendPath('index.php') . "';
        </script>";
        exit;
    }
}

function redirect($url){
    echo"<script>
    window.location.href='$url';
        </script>";
        exit;
}

function alert($type, $msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert " role="alert">
            <strong class="me-3">$msg</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    alert;
}

function uploadImage($image, $folder) {
    $valid_mime = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
    $img_mime = $image['type'];
    
    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; // Invalid image mime or format
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size'; // Invalid size greater than 2
    }

    // The URL where the frontend expects to receive the image
    $frontendUploadUrl = BACKEND_UPLOAD_PATH;

    // Create a cURL file object
    $cfile = new CURLFile($image['tmp_name'], $image['type'], $image['name']);

    // Prepare cURL request
    $ch = curl_init($frontendUploadUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ['picture' => $cfile]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL request
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode and return the JSON response
    $result = json_decode($response, true);

    if ($result && isset($result['status']) && $result['status'] === 'success') {
        return $result['filename'];
    } else {
        return 'upd_failed';
    }
}

function deleteImage($image, $folder) {
    $imagePath = backendPath('assets/images/') . $folder . $image;
    if (file_exists($imagePath) && unlink($imagePath)) {
        return true; // Successfully deleted
    } else {
        return false; // Failed to delete
    }
}  

function uploadSVGImage($image, $folder){
    $valid_mime = ['image/svg+xml'];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; // Invalid image mime or format
    } else if (($image['size'] / (1024 * 1024)) > 1) {
        return 'inv_size'; // Invalid size greater than 1
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_'.random_int(11111, 99999).".$ext";
        $img_path = backendPath('assets/images/') . $folder . $rname;
        if(move_uploaded_file($image['tmp_name'], $img_path)){
            return $rname;
        } else {
            return 'upd_failed';
        }
    }
}

function uploadUserImage($image){
    $valid_mime = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
    $img_mime = $image['type'];
    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; // Invalid image mime or format
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_'.random_int(11111, 99999).".jpeg";
        $img_path = backendPath('assets/images/users/') . $rname;

        if ($ext == 'png' || $ext == 'PNG') {
            $img = imagecreatefrompng($image['tmp_name']);
        } else if ($ext == 'webp' || $ext == 'WEBP') {
            $img = imagecreatefromwebp($image['tmp_name']);
        } else {
            $img = imagecreatefromjpeg($image['tmp_name']);
        }

        if (imagejpeg($img, $img_path, 75)) {
            return $rname;
        } else {
            return 'upd_failed';
        }
    }
}
?>