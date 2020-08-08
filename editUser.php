<?php 

require_once 'controller/Userinfo.php';
$user = fetchUser($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  .container{
    margin-top: 40px;

  }
</style>
</head>
<body>
<div class="container">
  
 <form action="controller/updateUser.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
  <label for="user_name">User Name :</label>
  <input value="<?php echo $user['user_name'] ?>" type="text" id="user_name" name="user_name" class="form-control"  placeholder="Enter User Name">
</div>
<div class="form-group">
  <label for="password">Password :</label>
  <input value="<?php echo $user['password'] ?>" type="text" id="password" name="password" class="form-control"  placeholder="Enter Password">
</div>
<div class="form-group">
  <label for="email">Email :</label>
  <input value="<?php echo $user['email'] ?>" type="text" id="email" name="email" class="form-control"  placeholder="Enter Email">
</div>

<div class="form-group">
  <label for="address">Address :</label>
  <input value="<?php echo $user['address'] ?>" type="text" id="address" name="address" class="form-control"  placeholder="Enter Address">
</div>

<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="submit" name = "updateUser" value="Update">
<input type="reset"> 
</form> 
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

