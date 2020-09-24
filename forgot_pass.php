<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
      <script src="js/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="CSS/forgot_pass.css">
      <link rel="shortcut icon" href="images/ps.PNG">

</head>
<body>
<div class="container">

  <form action="controller/forgot_password.php" method="POST" enctype="multipart/form-data">

  <div class="area">
  <p>Please Fill This for Change Password-</p>

    <div class="form-group" id="email_div">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" class="form-control"  placeholder="Enter Email" required>
        <span id="email_error"></span>
      </div>
      
      <div class="form-group" id="date_of_birth_div">
        <label for="date_of_birth">Date of Birth :</label>
        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"  placeholder="Enter Date of Birth" required>
        <span id="date_error"></span>
      </div>

      <div class="form-group">
        <label for="Password">New Password :</label>
        <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
      </div>

      <div class="but">
        <button type="submit" name = "forgot_pass" class="btn btn-primary">Submit</button>
        <a href="login_register.php"><button type="button" class="btn btn-primary">Back</button></a>
      </div>

  </div>
</form>
  <img src="images/3.jpg" alt="">

</div>
</body>
</html>