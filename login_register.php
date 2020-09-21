<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Bootstrap file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Custom Css file -->
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

    <form action="controller/createUser.php>" method="POST" enctype="multipart/form-data" >
      <div class="register">
        <div class="register_content">
          <div class="left">
            <div class="form-group">
              <label for="user_id">User ID :</label>
              <input type="text" id="user_id" name="user_id" class="form-control"  placeholder="Enter User ID" >
              <span class="error"><?php if(isset($idErr)){echo $idErr;}?></span>
            </div>
            <div class="form-group">
              <label for="user_name">User Name :</label>
              <input type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name" >
              <span class="error"><?php if(isset($nameErr)){echo $nameErr;}?></span>
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password" >
              <span class="error"><?php if(isset($passErr)){echo $passErr;}?></span>
            </div>
            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" id="email" name="email" class="form-control"  placeholder="Enter Email" >
              <span class="error"><?php if(isset($emailErr)){ echo $emailErr;}?></span>
            </div>

            </div><!-- end left -->
            
            <div class="right">
              <div class="form-group">
                <label for="date_of_birth">Date of Birth :</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"  placeholder="Enter Date of Birth" >
                <span class="error"><?php if(isset($dobErr)){echo $dobErr;}?></span>
              </div>

              <div class="form-group">
                <label for="gender">Gender :</label>               
                <select class="form-control  id="gender" name="gender" form="type">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
    
                <span class="error"><?php if(isset($genderErr)){echo $genderErr;}?></span>
              </div>

              <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" id="address" name="address" class="form-control"  placeholder="Enter Address" >
                <span class="error"><?php if(isset($addressErr)){echo $addressErr;}?></span>
              </div>

                <label for="Type">Select Type :</label>

              <select class="form-control  id="type" name="type" form="type">

                <option value="Student">Student</option>
                <option value="Business">Business</option>
              </select>
              
              <span class="error"><?php if(isset($typeErr)){echo $typeErr;}?></span>

              <div class="but">
               <button type="submit" name = "createUser" class="btn btn-primary" id="submit" onclick="register()">Register</button>
              </div>
            </div><!-- end right -->
          </div> <!-- end_register_content -->
 
        </div><!-- end register -->
      </form>
  



      <div class="login_css">

        <form action="controller/User_login.php" method="POST" enctype="multipart/form-data" >
          <div class="form-group">
            <div class="form-group">
              <label for="user_id">User ID :</label>
              <input type="text" id="userid" name="user_id" value="<?php if(isset($_COOKIE['user_login_id'])) { echo $_COOKIE['user_login_id']; } ?>" class="form-control"  placeholder="Enter User ID" required>
            </div>
            <div class="form-group">
              <label for="user_name">User Name :</label>
              <input type="text" id="username" name="user_name"  value="<?php if(isset($_COOKIE['user_login_name'])) { echo $_COOKIE['user_login_name']; }?>" class="form-control"  placeholder="Enter User Name" required> 
            </div>
            <div class="form-group">
              <label for="password">Password :</label>
              <input type="password" id="password1" name="password"  value="<?php if(isset($_COOKIE['user_login_password'])) { echo  $_COOKIE['user_login_password']; }?>" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
              <input type="checkbox" id="remember" name="remember" >
              <label for="remember-me">Remember Me</label>
            </div>

            <div class="but">
              <button type="submit" name = "User_login" class="btn btn-primary">Login</button>
            </div>

          </div><!-- end form-group -->

        </form>
        
      </div><!-- end login_css -->
</div><!-- end container -->

<!-- Bootstrap file -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Javascript file -->
<script src="js/login_register.js"></script>
</body>
</html>