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
        <div class="login-box">
    <title>API Result</title>
</head>
<body>
    <h2>API Result</h2>
    <?php
    echo '<pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre>';
    ?>
    </div>
</body>
</html>
