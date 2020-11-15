<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
      <script src="js/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="CSS/login_reg.css">
    <link rel="shortcut icon" href="images/ps.PNG">
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

    <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" onsubmit="return Validate()" name="vform">
      <div class="register">
        <div class="register_content">
          <div class="left">
            <div class="form-group" id="user_id_div">
              <label for="user_id">User ID :</label>
              <input type="text" id="user_id1" name="user_id" class="form-control" onBlur="checkidAvailability()" placeholder="Enter User ID" >
              <span id="id_error"></span>
              <span id="user-id-availability-status" style="font-size:12px;"></span>
            </div>
            <div class="form-group" id="username_div">
              <label for="user_name">User Name :</label>
              <input type="text" id="user_name1" name="user_name" class="form-control"  placeholder="Enter User Name" >
              <span id="name_error"></span>
            </div>
            <div class="form-group" id="password_div">
              <label for="password">Password :</label>
              <input type="password" id="password1" name="password" class="form-control"  placeholder="Enter Password" >
              <span id="password_error"></span>
            </div>
            <div class="form-group" id="email_div">
              <label for="email">Email :</label>
              <input type="email" id="email1" name="email" class="form-control" onBlur="checkemailAvailability()" placeholder="Enter Email" >
              <span id="email_error"></span>
              <span id="user-email-availability-status" style="font-size:12px;"></span> 
            </div>

            </div><!-- end left -->
            
            <div class="right">
              <div class="form-group" id="date_of_birth_div">
                <label for="date_of_birth">Date of Birth :</label>
                <input type="date" id="date_of_birth1" name="date_of_birth" class="form-control"  placeholder="Enter Date of Birth" >
                <span id="date_error"></span>
              </div>

              <div class="form-group" id="gender_div">
                <label for="gender">Gender :</label>               
                <select class="form-control"  id="gender1" name="gender"  >
                  <option value=""></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
    
                <span id="gender_error"></span>
              </div>

              <div class="form-group" id="address_div">
                <label for="address">Address :</label>
                <input type="text" id="address1" name="address" class="form-control"  placeholder="Enter Address" >
                <span id="address_error"></span>
              </div>
              
              <div class="form-group" id="type_div">
                <label for="Type">Select Type :</label>
              <select class="form-control"  id="type1" name="type"  >
                <option  value=""></option>
                <option value="Student">Student</option>
                <option value="Business">Business</option>
              </select>            
              <span id="type_error"></span>
              </div>


              <div class="but">
               <button type="submit" id="submit" name = "createUser" class="btn btn-primary">Register</button>
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
              <input type="password" id="password" name="password"  value="<?php if(isset($_COOKIE['user_login_password'])) { echo  $_COOKIE['user_login_password']; }?>" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
              <input type="checkbox" id="remember" name="remember" checked>
              <label for="remember-me">Remember Me</label>
            </div>
            <div class="form-group">
              <label for="forgot_password"><a href="forgot_pass.php">Forgot Password ?</a></label>
            </div>

            <div class="but">
              <button type="submit" name = "User_login" class="btn btn-primary">Login</button>
            </div>

          </div><!-- end form-group -->

        </form>

        <img src="images/3.jpg" alt="">
        
      </div><!-- end login_css -->
</div><!-- end container -->

<!-- Bootstrap file -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 -->
<!-- Javascript file -->
<script>
//This function checks email-availability-status
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
  url: "controller/check_availability.php",
  data:'email='+$("#email1").val(),
  type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkidAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "controller/check_availability.php",
data:'user_id='+$("#user_id1").val(),
type: "POST",
success:function(data){
$("#user-id-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

</script>

<script src="js/login_register.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>

</body>
</html>