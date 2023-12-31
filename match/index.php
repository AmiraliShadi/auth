<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>API Request</title>
</head>
<body>
    <!-- <h2>Enter User Number and National ID</h2>
    <form action="api_request.php" method="post">
        <label for="mobile">Mobile Number:</label>
        <input type="text" name="mobile" required><br>

        <label for="nationalCode">National code:</label>
        <input type="text" name="nationalCode" required><br>

        <input type="submit" value="Submit">
    </form> -->

    <div class="login-box">
  <h2>Match nummber and nationalCode</h2>
  <form action="api_request.php" method="post">
    <div class="user-box">
    <input type="text" name="mobile" required><br>
      <label for="mobile">Mobile number (09xxxxxxxxx) : </label>
    </div>
    <div class="user-box">
    <input type="text" name="nationalCode" required><br>
      <label for="nationalCode"> National Code : </label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Submit">
    </a>
  </form>
</div>

<h3 style="color:white;">Mr.shadi Projects</h3>
</body>
</html>
