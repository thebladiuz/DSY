<?php
// Allow requests from a specific origin
header('Access-Control-Allow-Origin: http://34.143.182.143:8080');

// Allow additional headers if needed
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Set allowed methods (GET, POST, etc.)
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

// Allow credentials if needed
header('Access-Control-Allow-Credentials: true');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-light">
  <p>Hello!</p>
</body>

</html>