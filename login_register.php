<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/login_reg.css">
</head>
<body>

<div class="container-fluid">
   <div class="main_button">
   <button id="log" type="button" class="btn btn-danger btn-lg but_css">Login</button>
    <button id="reg" type="button" class="btn btn-secondary btn-lg but_css">Rgister</button>
  <a href="index.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back to Home</button>
</a>

<div class="second_button">
    <label for="log2">If you have a printer than </label>
    <a href="login_register_user2.php"><button id="log2" type="button" class="btn btn-primary btn-lg but_css">Login or Register</button>
</a>
    </div>
   </div>


    <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" id="type">
<div class="register">
<div class="register_content">
<div class="left">
  <div class="form-group">
    <label for="user_id">User ID :</label>
    <input type="text" id="user_id" name="user_id" class="form-control"  placeholder="Enter User ID" required>
  </div>
  <div class="form-group">
    <label for="user_name">User Name :</label>
    <input type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name" required>
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="text" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="text" id="email" name="email" class="form-control"  placeholder="Enter Email" required>
  </div>

  </div><!-- end left -->
  <div class="right">
  <div class="form-group">
    <label for="date_of_birth">Date of Birth :</label>
    <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"  placeholder="Enter Date of Birth" required>
  </div>
  <div class="form-group">
    <label for="gender">Gender :</label>
    <input type="text" id="gender" name="gender" class="form-control"  placeholder="Enter Gender" required>
  </div>
  <div class="form-group">
    <label for="address">Address :</label>
    <input type="text" id="address" name="address" class="form-control"  placeholder="Enter Address" required>
  </div>

  <label for="Type">Select Type :</label>

  <select class="form-control  id="type" name="type" form="type">

<option value="Student">Student</option>
<option value="Business">Business</option>
</select>

 <div class="but">
 <button type="submit" name = "createUser" class="btn btn-primary">Register</button>
 </div>
 </div><!-- end right -->
</div> <!-- end_register_content -->
 
  </div><!-- end register -->
</form>
  

  <div class="login_css">
    <form action="controller/User_login.php" method="POST" enctype="multipart/form-data" id="type">
      <div class="form-group">
        <div class="form-group">
          <label for="user_id">User ID :</label>
          <input type="text" id="user_id" name="user_id" class="form-control" value="<?php if(isset($_COOKIE["user_login_id"])) {echo $_COOKIE["user_login_id"];} ?>"  placeholder="Enter User ID" required>
        </div>
        <div class="form-group">
          <label for="user_name">User Name :</label>
          <input type="text" id="user_name" name="user_name" class="form-control" value="<?php if(isset($_COOKIE["user_login_name"])) {echo $_COOKIE["user_login_name"];} ?>"   placeholder="Enter User Name" required> 
        </div>
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" id="password" name="password" class="form-control" value="<?php if(isset($_COOKIE["user_login_password"])) {echo $_COOKIE["user_login_password"];} ?>"   placeholder="Enter Password" required>
        </div>
        <div class="form-group">
          <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["user_login_id"])) { ?> checked <?php } ?> >
          <label for="remember-me">Remember Me</label>
        </div>

        <div class="but">
          <button type="submit" name = "User_login" class="btn btn-primary">Login</button>
        </div>
      </div><!-- end form-group -->
    </form>
  </div><!-- end login_css -->
</div><!-- end container -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="js/login_register.js"></script>
</body>
</html>