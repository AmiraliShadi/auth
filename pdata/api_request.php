<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nationalCode = $_POST['nationalCode'];
    $birthDate = $_POST['birthDate'];
    $apiEndpoint = 'https://api.zibal.ir/v1/facility/nationalIdentityInquiry/';
    $accessToken = '830fa5c425de4e02a7b797e635056099';
    $postData = array(
        'nationalCode' => $nationalCode,
        'birthDate' => $birthDate
    );
    $headers = array(
        'Content-type: application/x-www-form-urlencoded',
        'Authorization: Bearer ' . $accessToken
    );
    $options = array(
        'http' => array(
            'header'  => implode("\r\n", $headers),
            'method'  => 'POST',
            'content' => http_build_query($postData),
        ),
    );
    // **************************************************
    $context  = stream_context_create($options);
    $apiResponse = file_get_contents($apiEndpoint, false, $context);
    $responseData = json_decode($apiResponse, true, 512, JSON_UNESCAPED_UNICODE);
      if (isset($responseData['data'])) {
        $data = $responseData['data'];
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/style.css">
            <style>
         *{
            color: white !important;
         }
                </style>
            <title>API Result</title>
        </head>
        <body>
        <div class="login-box">
            <h2>API Result</h2>';
        echo '<p>First Name: ' . $data['firstName'] . '</p>';
        echo '<p>Last Name: ' . $data['lastName'] . '</p>';
        echo '<p>Father Name: ' . $data['fatherName'] . '</p>';
        echo '    </div>
        <h3 style="color:white;">Mr.shadi Projects</h3>
        </body>
        </html>';
    } else {
        echo '<p>Error: Unexpected response format</p>';
    }
}
?>
