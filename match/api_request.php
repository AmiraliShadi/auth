<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mobile = $_POST['mobile'];
    $nationalCode = $_POST['nationalCode'];
    $apiEndpoint = 'https://api.zibal.ir/v1/facility/shahkarInquiry/';
    $accessToken = '*************'; //your tiken ( get from zibal )
    $postData = array(
        'mobile' => $mobile,
        'nationalCode' => $nationalCode
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

   //*****************************************
   $context  = stream_context_create($options);
   $apiResponse = file_get_contents($apiEndpoint, false, $context);

   header("Location: result.php?response=" . base64_encode($apiResponse)); // Encode the response
   exit;
}
?>
