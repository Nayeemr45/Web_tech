<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
     <link rel="stylesheet" href="css/login_reg2.css">
     <link rel="shortcut icon" href="images/ps.PNG">

    </head>
<body>

<div class="container-fluid">
   <div class="main_button">
   <button id="log" type="button" class="btn btn-primary btn-lg but_css">Login</button>
    <button id="reg" type="button" class="btn btn-secondary btn-lg but_css">Rgister</button>
    <a href="login_register.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back</button>
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg but_css">Back to Home</button>
</a>

<!-- <div class="second_button">
    <label for="log2">If you have a printer than </label>
    <a href="login_register_user2.php"><button id="log2" type="button" class="btn btn-primary btn-lg but_css">Login or Register</button>
</a>
    </div> -->
   </div>


   <form action="controller/createUser.php" method="POST"  onsubmit="return Validate()" name="vform" >
<div class="register">
<div class="register_content">
<div class="left">

          <div class="row">
          <div class="input-field col s6" id="username_div">
    <label for="user_name">User Name :</label>
    <input type="text" id="user_name1" name="user_name1" class="form-control"  placeholder="Enter User Name" >
    <span id="name_error"></span>
  </div>
  <div class="input-field col s6" id="password_div">
    <label for="password">Password :</label>
    <input type="password" id="password1" name="password1" class="form-control"  placeholder="Enter Password">
    <span id="password_error"></span>
  </div>
  <div class="input-field col s6" id="email_div">
    <label for="password">Email :</label>
    <input type="email" id="email1" name="email1" class="form-control"  placeholder="Enter Email" >
    <span id="email_error"></span>
  </div>

  <div class="input-field col s6" id="shop_name_div">
    <label for="shop_name">Shop Name :</label>
    <input type="text" id="shop_name" name="shop_name" class="form-control"  placeholder="Enter Shop Name">
    <span id="shop_name_error"></span>
  </div>

  <div class="input-field col s6" id="address_div">
    <label for="address">Address :</label>
    <input type="text" id="address" name="address" class="form-control"  placeholder="Enter Address">
    <span id="address_error"></span>
  </div>



 <div class="but">
 <button type="submit" name ="createUser2" class="btn waves-effect waves-light">Register</button>
 </div>

  </div>
 </div><!-- end left -->
</div> <!-- end_register_content -->
  </div><!-- end register -->
</form>
  
  

<div class="login_css">
  <form action="controller/User_login.php" method="POST" enctype="multipart/form-data" id="type>
  <div class="form-group">
  <div class="input-field col s6">
    <label for="user_name">User Name :</label>
    <input type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name" required> 
  </div>
  <div class="input-field col s6">
    <label for="password">Password :</label>
    <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password" required>
  </div>
  <div class="but">
 <button type="submit" name = "User_login2" class="btn waves-effect waves-light">Login</button>
 </div>
</form>
<img src="images/3.jpg" alt="">

  </div><!-- end login_css -->






    </div><!-- end container -->

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="js/login_register3.js"></script>

</body>
</html>