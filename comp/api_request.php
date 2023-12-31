<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nationalId = $_POST['nationalId'];
    $apiEndpoint = 'https://api.zibal.ir/v1/facility/companyInquiry/';
    $accessToken = '*************'; //your tiken ( get from zibal )
    $postData = array(
        'nationalId' => $nationalId
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
        echo '<p>Company Name: ' . $data['companyTitle'] . '</p>';
        echo '<p>register number : ' . $data['companyRegistrationId'] . '</p>';
        echo '<p>register date: ' . $data['establishmentDate'] . '</p>';
        echo '<p>address: ' . $data['address'] . '</p>';
        // echo '<p>postal Code: ' . $data['postalCode'] . '</p>';
        echo '<p>company Type: ' . $data['companyType'] . '</p>';
        echo '<p>status: ' . $data['status'] . '</p>';
        // echo '<p>extra Description: ' . $data['extraDescription'] . '</p>';
        echo '    </div>
        <h3 style="color:white;">Mr.shadi Projects</h3>
        </body>
        </html>';
    } else {
        echo '<p>Error: Unexpected response format</p>';
    }
}
?>
