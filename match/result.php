<!DOCTYPE html>
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
<h2>API Response</h2>
    <?php
    $encodedApiResponse = $_GET['response'];
    // Decode the response
    $apiResponse = base64_decode($encodedApiResponse);
    // Decode the JSON response
    $responseData = json_decode($apiResponse, true);
    if (isset($responseData['result']) && $responseData['result'] == 1) {
        echo 'Matched!';
    } else {
        echo 'Not Matched!';
    }
    ?>
    <div>
    <h3 style="color:white;">Mr.shadi Projects</h3>
</body>
</html>
